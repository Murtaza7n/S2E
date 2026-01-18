<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\DeliverySheet;
use App\Models\ConsignmentNote;
use App\Models\Rider;
use App\Models\CargoOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliverySheetController extends Controller
{
    public function index(Request $request)
    {
        $query = DeliverySheet::with(['cargoOffice', 'rider']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('cargo_office_id')) {
            $query->where('cargo_office_id', $request->cargo_office_id);
        }

        $deliverySheets = $query->latest()->paginate(50);
        $offices = CargoOffice::where('is_active', true)->get();

        return view('s2e-logistics.delivery-sheets.index', compact('deliverySheets', 'offices'));
    }

    public function create()
    {
        $offices = CargoOffice::where('is_active', true)->get();
        $riders = Rider::where('is_active', true)
            ->whereIn('type', ['delivery', 'both'])
            ->get();
        $availableCns = ConsignmentNote::where('status', 'pending')
            ->where('is_in_delivery_sheet', false)
            ->where('is_in_load_plan', true) // Only CNs that have been in load plan
            ->with(['party', 'destinationCity'])
            ->get();

        return view('s2e-logistics.delivery-sheets.create', compact('offices', 'riders', 'availableCns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'delivery_sheet_date' => 'required|date',
            'cargo_office_id' => 'required|exists:cargo_offices,id',
            'rider_id' => 'required|exists:riders,id',
            'cn_ids' => 'required|array|min:1',
            'cn_ids.*' => 'exists:consignment_notes,id',
        ]);

        DB::beginTransaction();
        try {
            $deliverySheet = DeliverySheet::create([
                'delivery_sheet_number' => $this->generateDeliverySheetNumber(),
                'delivery_sheet_date' => $validated['delivery_sheet_date'],
                'cargo_office_id' => $validated['cargo_office_id'],
                'rider_id' => $validated['rider_id'],
                'status' => 'draft',
                'total_cns' => count($validated['cn_ids']),
                'created_by' => auth()->id(),
            ]);

            foreach ($validated['cn_ids'] as $index => $cnId) {
                $cn = ConsignmentNote::findOrFail($cnId);
                $deliverySheet->items()->create([
                    'cn_id' => $cnId,
                    'sequence' => $index + 1,
                ]);

                $cn->update([
                    'is_in_delivery_sheet' => true,
                    'delivery_sheet_id' => $deliverySheet->id,
                    'delivery_rider_id' => $validated['rider_id'],
                    'status' => 'out_for_delivery',
                ]);
            }

            DB::commit();

            return redirect()->route('s2e.delivery-sheets.show', $deliverySheet)
                ->with('success', 'Delivery sheet created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating delivery sheet: ' . $e->getMessage());
        }
    }

    public function show(DeliverySheet $deliverySheet)
    {
        $deliverySheet->load(['cargoOffice', 'rider', 'items.consignmentNote.party', 'items.consignmentNote.destinationCity']);
        return view('s2e-logistics.delivery-sheets.show', compact('deliverySheet'));
    }

    public function markDelivered(DeliverySheet $deliverySheet, ConsignmentNote $cn)
    {
        if (!$deliverySheet->items()->where('cn_id', $cn->id)->exists()) {
            return back()->with('error', 'CN not found in this delivery sheet.');
        }

        DB::beginTransaction();
        try {
            $cn->update([
                'status' => 'delivered',
                'delivery_date' => now(),
            ]);

            $deliverySheet->increment('delivered_count');

            if ($deliverySheet->delivered_count + $deliverySheet->returned_count >= $deliverySheet->total_cns) {
                $deliverySheet->update(['status' => 'completed']);
            }

            DB::commit();

            return back()->with('success', 'CN marked as delivered.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error updating CN: ' . $e->getMessage());
        }
    }

    public function markReturned(DeliverySheet $deliverySheet, ConsignmentNote $cn)
    {
        if (!$deliverySheet->items()->where('cn_id', $cn->id)->exists()) {
            return back()->with('error', 'CN not found in this delivery sheet.');
        }

        DB::beginTransaction();
        try {
            $cn->update([
                'status' => 'returned',
                'return_date' => now(),
            ]);

            $deliverySheet->increment('returned_count');

            if ($deliverySheet->delivered_count + $deliverySheet->returned_count >= $deliverySheet->total_cns) {
                $deliverySheet->update(['status' => 'completed']);
            }

            DB::commit();

            return back()->with('success', 'CN marked as returned.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error updating CN: ' . $e->getMessage());
        }
    }

    private function generateDeliverySheetNumber()
    {
        $year = date('Y');
        $lastSheet = DeliverySheet::whereYear('delivery_sheet_date', $year)
            ->orderBy('delivery_sheet_number', 'desc')
            ->first();

        if ($lastSheet) {
            $lastNumber = (int) substr($lastSheet->delivery_sheet_number, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return 'DS-' . $year . '-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}

