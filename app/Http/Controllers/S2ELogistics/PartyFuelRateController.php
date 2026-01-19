<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\PartyFuelRate;
use App\Models\Party;
use Illuminate\Http\Request;

class PartyFuelRateController extends Controller
{
    public function index(Request $request)
    {
        $query = PartyFuelRate::with('party');
        
        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }
        
        $fuelRates = $query->latest()->paginate(50);
        $parties = Party::where('is_active', true)->get();
        
        return view('s2e-logistics.party-fuel-rates.index', compact('fuelRates', 'parties'));
    }

    public function create()
    {
        $parties = Party::where('is_active', true)->get();
        return view('s2e-logistics.party-fuel-rates.create', compact('parties'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'party_id' => 'required|exists:parties,id',
            'fuel_rate' => 'required|numeric|min:0',
            'rate_type' => 'required|in:per_kg,per_cn,fixed',
            'effective_from' => 'nullable|date',
            'effective_to' => 'nullable|date|after:effective_from',
            'is_active' => 'boolean',
        ]);

        PartyFuelRate::create($validated);
        
        return redirect()->route('s2e.party-fuel-rates.index')
            ->with('success', 'Party fuel rate created successfully.');
    }

    public function show(PartyFuelRate $partyFuelRate)
    {
        $partyFuelRate->load('party');
        return view('s2e-logistics.party-fuel-rates.show', compact('partyFuelRate'));
    }

    public function edit(PartyFuelRate $partyFuelRate)
    {
        $parties = Party::where('is_active', true)->get();
        return view('s2e-logistics.party-fuel-rates.edit', compact('partyFuelRate', 'parties'));
    }

    public function update(Request $request, PartyFuelRate $partyFuelRate)
    {
        $validated = $request->validate([
            'party_id' => 'required|exists:parties,id',
            'fuel_rate' => 'required|numeric|min:0',
            'rate_type' => 'required|in:per_kg,per_cn,fixed',
            'effective_from' => 'nullable|date',
            'effective_to' => 'nullable|date|after:effective_from',
            'is_active' => 'boolean',
        ]);

        $partyFuelRate->update($validated);
        
        return redirect()->route('s2e.party-fuel-rates.index')
            ->with('success', 'Party fuel rate updated successfully.');
    }

    public function destroy(PartyFuelRate $partyFuelRate)
    {
        $partyFuelRate->delete();
        
        return redirect()->route('s2e.party-fuel-rates.index')
            ->with('success', 'Party fuel rate deleted successfully.');
    }
}

