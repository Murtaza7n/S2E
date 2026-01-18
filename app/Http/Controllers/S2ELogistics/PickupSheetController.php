<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\PickupSheet;
use App\Models\ConsignmentNote;
use App\Models\Rider;
use App\Models\CargoOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PickupSheetController extends Controller
{
    public function index(Request $request)
    {
        $query = PickupSheet::with(['cargoOffice', 'rider']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('cargo_office_id')) {
            $query->where('cargo_office_id', $request->cargo_office_id);
        }

        $pickupSheets = $query->latest()->paginate(50);
        $offices = CargoOffice::where('is_active', true)->get();

        return view('s2e-logistics.pickup-sheets.index', compact('pickupSheets', 'offices'));
    }

    public function create()
    {
        $offices = CargoOffice::where('is_active', true)->get();
        $riders = Rider::where('is_active', true)
            ->whereIn('type', ['pickup', 'both'])
            ->get();
        $availableCns = ConsignmentNote::where('status', 'pending')
            ->where('is_in_load_plan', false) // CNs not yet in load plan
            ->whereNull('pickup_rider_id')
            ->with(['party', 'originCity'])
            ->get();

        return view('s2e-logistics.pickup-sheets.create', compact('offices', 'riders', 'availableCns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pickup_sheet_date' => 'required|date',
            'cargo_office_id' => 'required|exists:cargo_offices,id',
            'rider_id' => 'required|exists:riders,id',
            'cn_ids' => 'required|array|min:1',
            'cn_ids.*' => 'exists:consignment_notes,id',
        ]);

        DB::beginTransaction();
        try {
            $pickupSheet = PickupSheet::create([
                'pickup_sheet_number' => $this->generatePickupSheetNumber(),
                'pickup_sheet_date' => $validated['pickup_sheet_date'],
                'cargo_office_id' => $validated['cargo_office_id'],
                'rider_id' => $validated['rider_id'],
                'status' => 'draft',
                'total_cns' => count($validated['cn_ids']),
                'created_by' => auth()->id(),
            ]);

            foreach ($validated['cn_ids'] as $index => $cnId) {
                $cn = ConsignmentNote::findOrFail($cnId);
                $pickupSheet->items()->create([
                    'cn_id' => $cnId,
                    'sequence' => $index + 1,
                ]);

                $cn->update([
                    'pickup_rider_id' => $validated['rider_id'],
                    'status' => 'pending', // Will be 'picked' when marked
                ]);
            }

            DB::commit();

            return redirect()->route('s2e.pickup-sheets.show', $pickupSheet)
                ->with('success', 'Pickup sheet created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating pickup sheet: ' . $e->getMessage());
        }
    }

    public function show(PickupSheet $pickupSheet)
    {
        $pickupSheet->load(['cargoOffice', 'rider', 'items.consignmentNote.party', 'items.consignmentNote.originCity']);
        return view('s2e-logistics.pickup-sheets.show', compact('pickupSheet'));
    }

    public function markPicked(PickupSheet $pickupSheet, ConsignmentNote $cn)
    {
        if (!$pickupSheet->items()->where('cn_id', $cn->id)->exists()) {
            return back()->with('error', 'CN not found in this pickup sheet.');
        }

        DB::beginTransaction();
        try {
            $cn->update([
                'status' => 'picked',
                'pickup_date' => now(),
            ]);

            $pickupSheet->increment('picked_count');

            if ($pickupSheet->picked_count >= $pickupSheet->total_cns) {
                $pickupSheet->update(['status' => 'completed']);
            } else {
                $pickupSheet->update(['status' => 'assigned']);
            }

            DB::commit();

            return back()->with('success', 'CN marked as picked.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error updating CN: ' . $e->getMessage());
        }
    }

    public function edit(PickupSheet $pickupSheet)
    {
        // TODO: Implement edit functionality if needed
        return redirect()->route('s2e.pickup-sheets.show', $pickupSheet);
    }

    public function update(Request $request, PickupSheet $pickupSheet)
    {
        // TODO: Implement update functionality if needed
        return redirect()->route('s2e.pickup-sheets.show', $pickupSheet);
    }

    public function destroy(PickupSheet $pickupSheet)
    {
        // TODO: Implement delete functionality if needed
        return redirect()->route('s2e.pickup-sheets.index');
    }

    private function generatePickupSheetNumber()
    {
        $year = date('Y');
        $lastSheet = PickupSheet::whereYear('pickup_sheet_date', $year)
            ->orderBy('pickup_sheet_number', 'desc')
            ->first();

        if ($lastSheet) {
            $lastNumber = (int) substr($lastSheet->pickup_sheet_number, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return 'PS-' . $year . '-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}
