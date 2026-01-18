<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\CnStockIssue;
use App\Models\ConsignmentNote;
use App\Models\Invoice;
use App\Models\ItemCode;
use App\Models\City;
use App\Models\CargoOffice;
use App\Models\Vehicle;
use App\Models\CargoOfficer;
use App\Models\PartyRate;
use App\Models\PartyFuelRate;
use App\Services\ExportService;
use Illuminate\Http\Request;

class EditListsController extends Controller
{
    public function spoCnStock(Request $request, ExportService $exportService)
    {
        $query = CnStockIssue::with(['cargoOffice', 'cargoOfficer']);
        
        if ($request->filled('spo_id')) {
            $query->where('cargo_officer_id', $request->spo_id);
        }
        
        // Export functionality
        if ($request->has('export')) {
            $stockIssues = $query->latest()->get();
            $headers = ['SPO', 'Cargo Office', 'CN From', 'CN To', 'Date', 'Quantity'];
            $data = $stockIssues->map(function ($issue) {
                return [
                    'SPO' => $issue->cargoOfficer->name ?? '',
                    'Cargo Office' => $issue->cargoOffice->name ?? '',
                    'CN From' => $issue->cn_from ?? '',
                    'CN To' => $issue->cn_to ?? '',
                    'Date' => $issue->issue_date->format('Y-m-d') ?? '',
                    'Quantity' => $issue->quantity ?? 0,
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'SPO-wise CN Stock Issue List', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'SPO-wise CN Stock Issue List', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'SPO-wise CN Stock Issue List', $headers);
            }
        }
        
        $stockIssues = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.spo-cn-stock', compact('stockIssues'));
    }

    public function missingSn(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::whereNull('serial_number')
            ->orWhere('serial_number', '')
            ->with(['party', 'originCity', 'destinationCity']);
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Serial Number'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Serial Number' => $cn->serial_number ?? 'Missing',
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'List of Missing SN Numbers', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'List of Missing SN Numbers', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'List of Missing SN Numbers', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.missing-sn', compact('cns'));
    }

    public function pendingInvoices(Request $request, ExportService $exportService)
    {
        $query = ConsignmentNote::where('status', 'delivered')
            ->whereDoesntHave('invoiceItems')
            ->with(['party', 'originCity', 'destinationCity']);
        
        // Export functionality
        if ($request->has('export')) {
            $cns = $query->latest()->get();
            $headers = ['CN Number', 'Date', 'Party', 'Origin', 'Destination', 'Amount'];
            $data = $cns->map(function ($cn) {
                return [
                    'CN Number' => $cn->cn_number,
                    'Date' => $cn->cn_date->format('Y-m-d'),
                    'Party' => $cn->party->name ?? '',
                    'Origin' => $cn->originCity->name ?? '',
                    'Destination' => $cn->destinationCity->name ?? '',
                    'Amount' => number_format($cn->total_amount, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'List of Pending Invoices', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'List of Pending Invoices', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'List of Pending Invoices', $headers);
            }
        }
        
        $cns = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.pending-invoices', compact('cns'));
    }

    public function itemCodes(Request $request, ExportService $exportService)
    {
        $query = ItemCode::latest();
        
        // Export functionality
        if ($request->has('export')) {
            $itemCodes = $query->get();
            $headers = ['Code', 'Description', 'Unit', 'Rate'];
            $data = $itemCodes->map(function ($item) {
                return [
                    'Code' => $item->code ?? '',
                    'Description' => $item->description ?? '',
                    'Unit' => $item->unit ?? '',
                    'Rate' => number_format($item->rate ?? 0, 2),
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'List of Item Codes', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'List of Item Codes', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'List of Item Codes', $headers);
            }
        }
        
        $itemCodes = $query->paginate(100);
        return view('reports.edit-lists.item-codes', compact('itemCodes'));
    }

    public function cityCodes(Request $request, ExportService $exportService)
    {
        $query = City::with('zone')->latest();
        
        // Export functionality
        if ($request->has('export')) {
            $cities = $query->get();
            $headers = ['Code', 'City Name', 'Zone', 'Status'];
            $data = $cities->map(function ($city) {
                return [
                    'Code' => $city->code ?? '',
                    'City Name' => $city->name ?? '',
                    'Zone' => $city->zone->name ?? '',
                    'Status' => $city->is_active ? 'Active' : 'Inactive',
                ];
            })->toArray();
            
            $exportType = $request->export;
            if ($exportType === 'pdf') {
                return $exportService->exportToPdf($data, 'List of City Codes', $headers);
            } elseif ($exportType === 'excel') {
                return $exportService->exportToExcel($data, 'List of City Codes', $headers);
            } elseif ($exportType === 'word') {
                return $exportService->exportToWord($data, 'List of City Codes', $headers);
            }
        }
        
        $cities = $query->paginate(100);
        return view('reports.edit-lists.city-codes', compact('cities'));
    }

    public function cityHubList(Request $request)
    {
        $query = CargoOffice::with('city');
        
        if ($request->filled('city_id')) {
            $query->where('city_id', $request->city_id);
        }
        
        $offices = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.city-hub-list', compact('offices'));
    }

    public function vehicleTypes()
    {
        $vehicles = Vehicle::select('type')
            ->distinct()
            ->get();
        
        return view('reports.edit-lists.vehicle-types', compact('vehicles'));
    }

    public function spoOfficers()
    {
        $officers = CargoOfficer::with('cargoOffice')->latest()->paginate(100);
        return view('reports.edit-lists.spo-officers', compact('officers'));
    }

    public function rates(Request $request)
    {
        $query = PartyRate::with(['party', 'city', 'itemCode']);
        
        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }
        
        $rates = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.rates', compact('rates'));
    }

    public function partyFuelRates(Request $request)
    {
        $query = PartyFuelRate::with('party');
        
        if ($request->filled('party_id')) {
            $query->where('party_id', $request->party_id);
        }
        
        $fuelRates = $query->latest()->paginate(100);
        
        return view('reports.edit-lists.party-fuel-rates', compact('fuelRates'));
    }
}

