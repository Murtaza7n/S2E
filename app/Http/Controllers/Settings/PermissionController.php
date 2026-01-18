<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: Implement permission listing
        return view('settings.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO: Implement permission creation form
        return view('settings.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // TODO: Implement permission storage
        return redirect()->route('settings.permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // TODO: Implement permission show
        return view('settings.permissions.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // TODO: Implement permission edit form
        return view('settings.permissions.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // TODO: Implement permission update
        return redirect()->route('settings.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO: Implement permission deletion
        return redirect()->route('settings.permissions.index');
    }
}

