<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\LoadPlan;
use App\Models\ConsignmentNote;
use App\Models\Vehicle;
use App\Models\CargoOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoadPlanController extends Controller
{
    public function index(Request $request)
    {
        $query = LoadPlan::with(['vehicle', 'originOffice', 'destinationOffice']);

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('date_from')) {
            $query->where('load_plan_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->where('load_plan_date', '<=', $request->date_to);
        }

        $loadPlans = $query->latest()->paginate(50);

        return view('s2e-logistics.load-plans.index', compact('loadPlans'));
    }

    public function create()
    {
        $vehicles = Vehicle::where('is_active', true)->get();
        $offices = CargoOffice::where('is_active', true)->get();
        $availableCns = ConsignmentNote::where('status', 'pending')
            ->where('is_in_load_plan', false)
            ->with(['party', 'originCity', 'destinationCity'])
            ->get();

        return view('s2e-logistics.load-plans.create', compact('vehicles', 'offices', 'availableCns'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'load_plan_date' => 'required|date',
            'vehicle_id' => 'required|exists:vehicles,id',
            'origin_office_id' => 'required|exists:cargo_offices,id',
            'destination_office_id' => 'required|exists:cargo_offices,id',
            'cn_ids' => 'required|array|min:1',
            'cn_ids.*' => 'exists:consignment_notes,id',
        ]);

        DB::beginTransaction();
        try {
            $loadPlan = LoadPlan::create([
                'load_plan_number' => $this->generateLoadPlanNumber(),
                'load_plan_date' => $validated['load_plan_date'],
                'vehicle_id' => $validated['vehicle_id'],
                'origin_office_id' => $validated['origin_office_id'],
                'destination_office_id' => $validated['destination_office_id'],
                'status' => 'draft',
                'created_by' => auth()->id(),
            ]);

            $totalWeight = 0;
            foreach ($validated['cn_ids'] as $index => $cnId) {
                $cn = ConsignmentNote::findOrFail($cnId);
                $loadPlan->items()->create([
                    'cn_id' => $cnId,
                    'sequence' => $index + 1,
                ]);

                $cn->update([
                    'is_in_load_plan' => true,
                    'load_plan_id' => $loadPlan->id,
                    'status' => 'in_transit',
                ]);

                $totalWeight += $cn->weight;
            }

            $loadPlan->update([
                'total_cns' => count($validated['cn_ids']),
                'total_weight' => $totalWeight,
            ]);

            DB::commit();

            return redirect()->route('s2e.load-plans.show', $loadPlan)
                ->with('success', 'Load plan created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Error creating load plan: ' . $e->getMessage());
        }
    }

    public function show(LoadPlan $loadPlan)
    {
        $loadPlan->load(['vehicle', 'originOffice', 'destinationOffice', 'items.consignmentNote.party', 'items.consignmentNote.originCity', 'items.consignmentNote.destinationCity']);
        return view('s2e-logistics.load-plans.show', compact('loadPlan'));
    }

    public function dispatch(LoadPlan $loadPlan)
    {
        if ($loadPlan->status !== 'draft') {
            return back()->with('error', 'Only draft load plans can be dispatched.');
        }

        $loadPlan->update([
            'status' => 'dispatched',
            'dispatch_date' => now(),
        ]);

        return back()->with('success', 'Load plan dispatched successfully.');
    }

    public function receive(LoadPlan $loadPlan)
    {
        if ($loadPlan->status !== 'dispatched') {
            return back()->with('error', 'Only dispatched load plans can be received.');
        }

        DB::beginTransaction();
        try {
            $loadPlan->update([
                'status' => 'received',
                'receive_date' => now(),
            ]);

            // Update CN statuses
            foreach ($loadPlan->items as $item) {
                $item->consignmentNote->update([
                    'status' => 'pending', // Ready for delivery
                ]);
            }

            DB::commit();

            return back()->with('success', 'Load plan received successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error receiving load plan: ' . $e->getMessage());
        }
    }

    private function generateLoadPlanNumber()
    {
        $year = date('Y');
        $lastPlan = LoadPlan::whereYear('load_plan_date', $year)
            ->orderBy('load_plan_number', 'desc')
            ->first();

        if ($lastPlan) {
            $lastNumber = (int) substr($lastPlan->load_plan_number, -4);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        return 'LP-' . $year . '-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }
}

