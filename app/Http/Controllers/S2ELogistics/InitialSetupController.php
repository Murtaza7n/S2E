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
        $items = ItemCode::latest()->paginate(50);
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

    // Similar methods for other initial setup items...
    // For brevity, I'll create a generic CRUD pattern

    public function invoiceChargesIndex()
    {
        $charges = InvoiceCharge::latest()->paginate(50);
        return view('s2e-logistics.initial-setup.invoice-charges.index', compact('charges'));
    }

    public function cargoOfficersIndex()
    {
        $officers = CargoOfficer::with('cargoOffice')->latest()->paginate(50);
        $offices = CargoOffice::where('is_active', true)->get();
        return view('s2e-logistics.initial-setup.cargo-officers.index', compact('officers', 'offices'));
    }

    public function cnStockIndex()
    {
        $stocks = CnStock::with('cargoOffice')->latest()->paginate(50);
        $offices = CargoOffice::where('is_active', true)->get();
        return view('s2e-logistics.initial-setup.cn-stock.index', compact('stocks', 'offices'));
    }

    public function citiesIndex()
    {
        $cities = City::with('zone')->latest()->paginate(50);
        $zones = Zone::where('is_active', true)->get();
        return view('s2e-logistics.initial-setup.cities.index', compact('cities', 'zones'));
    }

    public function zonesIndex()
    {
        $zones = Zone::latest()->paginate(50);
        return view('s2e-logistics.initial-setup.zones.index', compact('zones'));
    }

    public function partyRatesIndex()
    {
        $rates = PartyRate::with(['party', 'city', 'itemCode'])->latest()->paginate(50);
        $parties = Party::where('is_active', true)->get();
        $cities = City::where('is_active', true)->get();
        return view('s2e-logistics.initial-setup.party-rates.index', compact('rates', 'parties', 'cities'));
    }
}

