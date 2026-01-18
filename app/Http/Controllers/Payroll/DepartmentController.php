<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        // TODO: Implement department listing
        return view('payroll.departments.index', [
            'departments' => collect([])
        ]);
    }
}

