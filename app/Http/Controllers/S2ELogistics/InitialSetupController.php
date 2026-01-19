<?php

namespace App\Http\Controllers\S2ELogistics;

use App\Http\Controllers\Controller;
use App\Models\ItemCode;
use App\Models\InvoiceCharge;
use App\Models\CargoOfficer;
use App\Models\CnStock;
use App\Models\City;
use App\Models\Zone;
use App\Models\PartyRate;
use App\Models\CargoOffice;
use App\Models\Party;
use Illuminate\Http\Request;

class InitialSetupController extends Controller
{
    // Item Codes
    public function itemCodesIndex()
    {
        try {
            $items = ItemCode::latest()->paginate(50);
        } catch (\Exception $e) {
            $items = collect([]);
        }
        return view('s2e-logistics.initial-setup.item-codes.index', compact('items'));
    }

    public function itemCodesStore(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:item_codes,code',
            'name' => 'required',
        ]);

        ItemCode::create($validated);
        return back()->with('success', 'Item code created successfully.');
    }

    // Invoice Charges
    public function invoiceChargesIndex()
    {
        try {
            $charges = InvoiceCharge::latest()->paginate(50);
        } catch (\Exception $e) {
            $charges = collect([]);
        }
        return view('s2e-logistics.initial-setup.invoice-charges.index', compact('charges'));
    }

    // Cargo Officers
    public function cargoOfficersIndex()
    {
        try {
            $officers = CargoOfficer::with('cargoOffice')->latest()->paginate(50);
            $offices = CargoOffice::where('is_active', true)->get();
        } catch (\Exception $e) {
            $officers = collect([]);
            $offices = collect([]);
        }
        return view('s2e-logistics.initial-setup.cargo-officers.index', compact('officers', 'offices'));
    }

    // CN Stock
    public function cnStockIndex()
    {
        try {
            $stocks = CnStock::with('cargoOffice')->latest()->paginate(50);
            $offices = CargoOffice::where('is_active', true)->get();
        } catch (\Exception $e) {
            $stocks = collect([]);
            $offices = collect([]);
        }
        return view('s2e-logistics.initial-setup.cn-stock.index', compact('stocks', 'offices'));
    }

    // Cities
    public function citiesIndex()
    {
        try {
            $cities = City::with('zone')->latest()->paginate(50);
            $zones = Zone::where('is_active', true)->get();
        } catch (\Exception $e) {
            $cities = collect([]);
            $zones = collect([]);
        }
        return view('s2e-logistics.initial-setup.cities.index', compact('cities', 'zones'));
    }

    // Zones
    public function zonesIndex()
    {
        try {
            $zones = Zone::latest()->paginate(50);
        } catch (\Exception $e) {
            $zones = collect([]);
        }
        return view('s2e-logistics.initial-setup.zones.index', compact('zones'));
    }

    // Party Rates
    public function partyRatesIndex()
    {
        try {
            $rates = PartyRate::with(['party', 'city', 'itemCode'])->latest()->paginate(50);
            $parties = Party::where('is_active', true)->get();
            $cities = City::where('is_active', true)->get();
        } catch (\Exception $e) {
            $rates = collect([]);
            $parties = collect([]);
            $cities = collect([]);
        }
        return view('s2e-logistics.initial-setup.party-rates.index', compact('rates', 'parties', 'cities'));
    }
}
