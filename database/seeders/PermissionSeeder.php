<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // S2E Logistics
            ['name' => 's2e-logistics.view', 'display_name' => 'View S2E Logistics', 'module' => 'S2E Logistics'],
            ['name' => 's2e-logistics.create', 'display_name' => 'Create S2E Logistics', 'module' => 'S2E Logistics'],
            ['name' => 's2e-logistics.edit', 'display_name' => 'Edit S2E Logistics', 'module' => 'S2E Logistics'],
            ['name' => 's2e-logistics.delete', 'display_name' => 'Delete S2E Logistics', 'module' => 'S2E Logistics'],
            
            // Initial Setup
            ['name' => 'initial-setup.view', 'display_name' => 'View Initial Setup', 'module' => 'Initial Setup'],
            ['name' => 'initial-setup.manage', 'display_name' => 'Manage Initial Setup', 'module' => 'Initial Setup'],
            
            // CN Entry
            ['name' => 'cn-entry.view', 'display_name' => 'View CN Entry', 'module' => 'CN Entry'],
            ['name' => 'cn-entry.create', 'display_name' => 'Create CN Entry', 'module' => 'CN Entry'],
            ['name' => 'cn-entry.edit', 'display_name' => 'Edit CN Entry', 'module' => 'CN Entry'],
            ['name' => 'cn-entry.delete', 'display_name' => 'Delete CN Entry', 'module' => 'CN Entry'],
            
            // Reports
            ['name' => 'reports.view', 'display_name' => 'View Reports', 'module' => 'Reports'],
            ['name' => 'reports.sales', 'display_name' => 'View Sales Reports', 'module' => 'Reports'],
            ['name' => 'reports.edit-lists', 'display_name' => 'View Edit Lists', 'module' => 'Reports'],
            ['name' => 'reports.other', 'display_name' => 'View Other Reports', 'module' => 'Reports'],
            
            // Finance
            ['name' => 'finance.view', 'display_name' => 'View Finance', 'module' => 'Finance'],
            ['name' => 'finance.manage', 'display_name' => 'Manage Finance', 'module' => 'Finance'],
            ['name' => 'finance.vouchers', 'display_name' => 'Manage Vouchers', 'module' => 'Finance'],
            ['name' => 'finance.reports', 'display_name' => 'View Finance Reports', 'module' => 'Finance'],
            
            // Payroll
            ['name' => 'payroll.view', 'display_name' => 'View Payroll', 'module' => 'Payroll'],
            ['name' => 'payroll.manage', 'display_name' => 'Manage Payroll', 'module' => 'Payroll'],
            ['name' => 'payroll.process', 'display_name' => 'Process Payroll', 'module' => 'Payroll'],
            ['name' => 'payroll.reports', 'display_name' => 'View Payroll Reports', 'module' => 'Payroll'],
            
            // Settings
            ['name' => 'settings.view', 'display_name' => 'View Settings', 'module' => 'Settings'],
            ['name' => 'settings.manage', 'display_name' => 'Manage Settings', 'module' => 'Settings'],
            ['name' => 'settings.users', 'display_name' => 'Manage Users', 'module' => 'Settings'],
            ['name' => 'settings.roles', 'display_name' => 'Manage Roles', 'module' => 'Settings'],
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission['name']],
                $permission
            );
        }
    }
}

