<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create Roles
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Full system access',
        ]);

        $accounts = Role::create([
            'name' => 'accounts',
            'display_name' => 'Accounts',
            'description' => 'Finance and accounting access',
        ]);

        $operations = Role::create([
            'name' => 'operations',
            'display_name' => 'Operations',
            'description' => 'CN and logistics operations',
        ]);

        $hr = Role::create([
            'name' => 'hr',
            'display_name' => 'Human Resources',
            'description' => 'Payroll and employee management',
        ]);

        // Create Permissions
        $permissions = [
            // S2E Logistics
            ['name' => 'cn.view', 'display_name' => 'View CNs', 'module' => 's2e'],
            ['name' => 'cn.create', 'display_name' => 'Create CNs', 'module' => 's2e'],
            ['name' => 'cn.edit', 'display_name' => 'Edit CNs', 'module' => 's2e'],
            ['name' => 'cn.delete', 'display_name' => 'Delete CNs', 'module' => 's2e'],
            ['name' => 'load_plan.manage', 'display_name' => 'Manage Load Plans', 'module' => 's2e'],
            ['name' => 'delivery.manage', 'display_name' => 'Manage Delivery Sheets', 'module' => 's2e'],
            ['name' => 'invoice.manage', 'display_name' => 'Manage Invoices', 'module' => 's2e'],
            
            // Reports
            ['name' => 'reports.view', 'display_name' => 'View Reports', 'module' => 'reports'],
            ['name' => 'reports.export', 'display_name' => 'Export Reports', 'module' => 'reports'],
            
            // Finance
            ['name' => 'finance.view', 'display_name' => 'View Finance', 'module' => 'finance'],
            ['name' => 'finance.voucher.create', 'display_name' => 'Create Vouchers', 'module' => 'finance'],
            ['name' => 'finance.voucher.post', 'display_name' => 'Post Vouchers', 'module' => 'finance'],
            ['name' => 'finance.voucher.unpost', 'display_name' => 'Unpost Vouchers', 'module' => 'finance'],
            ['name' => 'finance.chart_of_accounts.manage', 'display_name' => 'Manage Chart of Accounts', 'module' => 'finance'],
            
            // Payroll
            ['name' => 'payroll.view', 'display_name' => 'View Payroll', 'module' => 'payroll'],
            ['name' => 'payroll.employee.manage', 'display_name' => 'Manage Employees', 'module' => 'payroll'],
            ['name' => 'payroll.process', 'display_name' => 'Process Payroll', 'module' => 'payroll'],
            
            // Settings
            ['name' => 'settings.users.manage', 'display_name' => 'Manage Users', 'module' => 'settings'],
            ['name' => 'settings.roles.manage', 'display_name' => 'Manage Roles', 'module' => 'settings'],
        ];

        foreach ($permissions as $perm) {
            Permission::create($perm);
        }

        // Assign all permissions to admin
        $admin->permissions()->attach(Permission::all());

        // Assign permissions to accounts
        $accounts->permissions()->attach(Permission::whereIn('name', [
            'cn.view', 'reports.view', 'reports.export',
            'finance.view', 'finance.voucher.create', 'finance.voucher.post',
            'finance.chart_of_accounts.manage'
        ])->pluck('id'));

        // Assign permissions to operations
        $operations->permissions()->attach(Permission::whereIn('name', [
            'cn.view', 'cn.create', 'cn.edit', 'load_plan.manage',
            'delivery.manage', 'reports.view'
        ])->pluck('id'));

        // Assign permissions to hr
        $hr->permissions()->attach(Permission::whereIn('name', [
            'payroll.view', 'payroll.employee.manage', 'payroll.process'
        ])->pluck('id'));
    }
}

