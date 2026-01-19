<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@s2elogistics.com',
            'password' => Hash::make('password'),
            'role_id' => $adminRole->id,
            'is_active' => true,
        ]);

        // Create sample users for other roles
        $accountsRole = Role::where('name', 'accounts')->first();
        User::create([
            'name' => 'Accounts Manager',
            'email' => 'accounts@s2elogistics.com',
            'password' => Hash::make('password'),
            'role_id' => $accountsRole->id,
            'is_active' => true,
        ]);

        $operationsRole = Role::where('name', 'operations')->first();
        User::create([
            'name' => 'Operations Manager',
            'email' => 'operations@s2elogistics.com',
            'password' => Hash::make('password'),
            'role_id' => $operationsRole->id,
            'is_active' => true,
        ]);
    }
}

