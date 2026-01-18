<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        // TODO: Implement designation listing
        return view('payroll.designations.index', [
            'designations' => collect([])
        ]);
    }
}

