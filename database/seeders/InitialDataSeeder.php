<?php

namespace Database\Seeders;

use App\Models\CargoOffice;
use App\Models\City;
use App\Models\Department;
use App\Models\Designation;
use App\Models\ItemCode;
use Illuminate\Database\Seeder;

class InitialDataSeeder extends Seeder
{
    public function run(): void
    {
        // Item Codes
        ItemCode::create(['code' => 'DOC', 'name' => 'Documents', 'is_active' => true]);
        ItemCode::create(['code' => 'PKG', 'name' => 'Package', 'is_active' => true]);
        ItemCode::create(['code' => 'BOX', 'name' => 'Box', 'is_active' => true]);

        // Cargo Offices
        $karachi = City::where('code', 'KHI')->first();
        $lahore = City::where('code', 'LHR')->first();

        CargoOffice::create([
            'code' => 'HO-KHI',
            'name' => 'Head Office Karachi',
            'city_id' => $karachi->id,
            'is_active' => true,
        ]);

        CargoOffice::create([
            'code' => 'BR-LHR',
            'name' => 'Branch Lahore',
            'city_id' => $lahore->id,
            'is_active' => true,
        ]);

        // Departments
        Department::create(['code' => 'OPS', 'name' => 'Operations', 'is_active' => true]);
        Department::create(['code' => 'ACC', 'name' => 'Accounts', 'is_active' => true]);
        Department::create(['code' => 'HR', 'name' => 'Human Resources', 'is_active' => true]);

        // Designations
        Designation::create(['code' => 'MGR', 'name' => 'Manager', 'is_active' => true]);
        Designation::create(['code' => 'EXE', 'name' => 'Executive', 'is_active' => true]);
        Designation::create(['code' => 'CLK', 'name' => 'Clerk', 'is_active' => true]);
    }
}

