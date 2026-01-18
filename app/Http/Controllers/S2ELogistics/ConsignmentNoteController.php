<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\ConsignmentNote;
use App\Models\Party;
use App\Models\CargoOffice;
use App\Models\City;
use App\Models\ItemCode;
use App\Models\PartyRate;
use App\Models\PartyFuelRate;
use App\Models\CnStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsignmentNoteController extends Controller
{
    public function index(Request $request)
    {
        $query = ConsignmentNote::with(['party', 'cargoOffice', 'originCity', 'destinationCity']);

        if ($request->filled('cn_number')) {
            $query->where('cn_number', 'like', '%' . $request->cn_number . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }

        if ($request->filled('date_from')) {
            $query->where('cn_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('cn_date', '<=', $request->date_to);
        }

        $cns = $query->latest()->paginate(50);
        $parties = Party::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();

        return view('s2e-logistics.cn-entry.index', compact('cns', 'parties', 'offices'));
    }

    public function create()
    {
        $parties = Party::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        $cities = City::where('is_active', true)->get();
        $itemCodes = ItemCode::where('is_active', true)->get();
        
        // Get next CN number from stock
        $officeId = request('office_id', $offices->first()?->id);
        $nextCnNumber = $this->getNextCnNumber($officeId);

        return view('s2e-logistics.cn-entry.create', compact('parties', 'offices', 'cities', 'itemCodes', 'nextCnNumber'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cn_number' => 'required|unique:consignment_notes,cn_number',
            'cn_date' => 'required|date',
            'cargo_office_id' => 'required|exists:cargo_offices,id',
            'party_id' => 'required|exists:parties,id',
            'item_code_id' => 'nullable|exists:item_codes,id',
            'origin_city_id' => 'required|exists:cities,id',
            'destination_city_id' => 'required|exists:cities,id',
            'consignor_name' => 'required|string|max:255',
            'consignee_name' => 'required|string|max:255',
            'pieces' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
            'cod_amount' => 'nullable|numeric|min:0',
        ]);

        DB::beginTransaction();
        try {
            // Get party rate
            $rate = $this->calculateRate($validated['party_id'], $validated['destination_city_id'], $validated['item_code_id'] ?? null, $validated['weight']);
            
            // Calculate freight
            $freight = $this->calculateFreight($rate, $validated['weight'], $validated['pieces']);
            
            // Get fuel charge
            $fuelCharge = $this->calculateFuelCharge($validated['party_id'], $freight);
            
            $totalAmount = $freight + $fuelCharge + ($validated['cod_amount'] ?? 0);

            $cn = ConsignmentNote::create([
                'cn_number' => $validated['cn_number'],
                'cn_date' => $validated['cn_date'],
                'cargo_office_id' => $validated['cargo_office_id'],
                'party_id' => $validated['party_id'],
                'item_code_id' => $validated['item_code_id'] ?? null,
                'origin_city_id' => $validated['origin_city_id'],
                'destination_city_id' => $validated['destination_city_id'],
                'consignor_name' => $validated['consignor_name'],
                'consignor_phone' => $request->consignor_phone,
                'consignor_address' => $request->consignor_address,
                'consignee_name' => $validated['consignee_name'],
                'consignee_phone' => $request->consignee_phone,
                'consignee_address' => $request->consignee_address,
                'pieces' => $validated['pieces'],
                'weight' => $validated['weight'],
                'rate' => $rate,
                'freight' => $freight,
                'cod_amount' => $validated['cod_amount'] ?? 0,
                'fuel_charge' => $fuelCharge,
                'other_charges' => $request->other_charges ?? 0,
                'total_amount' => $totalAmount,
                'status' => 'pending',
                'remarks' => $request->remarks,
                'created_by' => auth()->id(),
            ]);

            // Update CN stock
            $this->updateCnStock($validated['cargo_office_id'], $validated['cn_number']);

            DB::commit();

            return redirect()->route('s2e.cn-entry.index')
                ->with('success', 'CN created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating CN: ' . $e->getMessage());
        }
    }

    public function show(ConsignmentNote $cnEntry)
    {
        $cnEntry->load(['party', 'cargoOffice', 'originCity', 'destinationCity', 'itemCode', 'pickupRider', 'deliveryRider']);
        return view('s2e-logistics.cn-entry.show', compact('cnEntry'));
    }

    public function edit(ConsignmentNote $cnEntry)
    {
        if ($cnEntry->is_invoiced) {
            return back()->with('error', 'Cannot edit invoiced CN.');
        }

        $parties = Party::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        $cities = City::where('is_active', true)->get();
        $itemCodes = ItemCode::where('is_active', true)->get();

        return view('s2e-logistics.cn-entry.edit', compact('cnEntry', 'parties', 'offices', 'cities', 'itemCodes'));
    }

    public function update(Request $request, ConsignmentNote $cnEntry)
    {
        if ($cnEntry->is_invoiced) {
            return back()->with('error', 'Cannot update invoiced CN.');
        }

        $validated = $request->validate([
            'cn_date' => 'required|date',
            'party_id' => 'required|exists:parties,id',
            'weight' => 'required|numeric|min:0',
            'cod_amount' => 'nullable|numeric|min:0',
        ]);

        DB::beginTransaction();
        try {
            // Recalculate if weight or party changed
            if ($validated['weight'] != $cnEntry->weight || $validated['party_id'] != $cnEntry->party_id) {
                $rate = $this->calculateRate($validated['party_id'], $cnEntry->destination_city_id, $cnEntry->item_code_id, $validated['weight']);
                $freight = $this->calculateFreight($rate, $validated['weight'], $cnEntry->pieces);
                $fuelCharge = $this->calculateFuelCharge($validated['party_id'], $freight);
                $totalAmount = $freight + $fuelCharge + ($validated['cod_amount'] ?? 0);

                $cnEntry->update([
                    'rate' => $rate,
                    'freight' => $freight,
                    'fuel_charge' => $fuelCharge,
                    'total_amount' => $totalAmount,
                ]);
            }

            $cnEntry->update($validated);

            DB::commit();

            return redirect()->route('s2e.cn-entry.index')
                ->with('success', 'CN updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error updating CN: ' . $e->getMessage());
        }
    }

    public function destroy(ConsignmentNote $cnEntry)
    {
        if ($cnEntry->is_invoiced) {
            return back()->with('error', 'Cannot delete invoiced CN.');
        }

        $cnEntry->delete();
        return redirect()->route('s2e.cn-entry.index')
            ->with('success', 'CN deleted successfully.');
    }

    private function getNextCnNumber($officeId)
    {
        $stock = CnStock::where('cargo_office_id', $officeId)->first();
        if (!$stock) {
            return null;
        }

        $lastUsed = ConsignmentNote::where('cargo_office_id', $officeId)
            ->where('cn_number', '>=', $stock->from_cn_number)
            ->where('cn_number', '<=', $stock->to_cn_number)
            ->orderBy('cn_number', 'desc')
            ->value('cn_number');

        if (!$lastUsed) {
            return $stock->from_cn_number;
        }

        $next = (int)$lastUsed + 1;
        if ($next > $stock->to_cn_number) {
            return null; // Stock exhausted
        }

        return $next;
    }

    private function calculateRate($partyId, $cityId, $itemCodeId, $weight)
    {
        $rate = PartyRate::where('party_id', $partyId)
            ->where('city_id', $cityId)
            ->where(function($q) use ($itemCodeId) {
                $q->where('item_code_id', $itemCodeId)->orWhereNull('item_code_id');
            })
            ->where('is_active', true)
            ->where(function($q) {
                $q->whereNull('effective_from')->orWhere('effective_from', '<=', now());
            })
            ->where(function($q) {
                $q->whereNull('effective_to')->orWhere('effective_to', '>=', now());
            })
            ->orderBy('item_code_id', 'desc') // Prefer specific item code rate
            ->first();

        if (!$rate) {
            return 0;
        }

        return $rate->rate;
    }

    private function calculateFreight($rate, $weight, $pieces)
    {
        // This is simplified - adjust based on rate_type
        return $rate * $weight;
    }

    private function calculateFuelCharge($partyId, $freight)
    {
        $fuelRate = PartyFuelRate::where('party_id', $partyId)
            ->where('is_active', true)
            ->where(function($q) {
                $q->whereNull('effective_from')->orWhere('effective_from', '<=', now());
            })
            ->where(function($q) {
                $q->whereNull('effective_to')->orWhere('effective_to', '>=', now());
            })
            ->first();

        if (!$fuelRate) {
            return 0;
        }

        if ($fuelRate->rate_type === 'percentage') {
            return ($freight * $fuelRate->fuel_rate) / 100;
        }

        return $fuelRate->fuel_rate;
    }

    private function updateCnStock($officeId, $cnNumber)
    {
        $stock = CnStock::where('cargo_office_id', $officeId)->first();
        if ($stock && $cnNumber >= $stock->from_cn_number && $cnNumber <= $stock->to_cn_number) {
            $stock->increment('used_quantity');
        }
    }
}

