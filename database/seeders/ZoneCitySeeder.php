<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Zone;
use Illuminate\Database\Seeder;

class ZoneCitySeeder extends Seeder
{
    public function run(): void
    {
        // Create Zones
        $zone1 = Zone::create(['code' => 'Z001', 'name' => 'Zone 1', 'is_active' => true]);
        $zone2 = Zone::create(['code' => 'Z002', 'name' => 'Zone 2', 'is_active' => true]);
        $zone3 = Zone::create(['code' => 'Z003', 'name' => 'Zone 3', 'is_active' => true]);

        // Create Cities
        City::create(['code' => 'KHI', 'name' => 'Karachi', 'zone_id' => $zone1->id, 'is_active' => true]);
        City::create(['code' => 'LHR', 'name' => 'Lahore', 'zone_id' => $zone2->id, 'is_active' => true]);
        City::create(['code' => 'ISB', 'name' => 'Islamabad', 'zone_id' => $zone3->id, 'is_active' => true]);
        City::create(['code' => 'RWP', 'name' => 'Rawalpindi', 'zone_id' => $zone3->id, 'is_active' => true]);
        City::create(['code' => 'FSD', 'name' => 'Faisalabad', 'zone_id' => $zone2->id, 'is_active' => true]);
    }
}

