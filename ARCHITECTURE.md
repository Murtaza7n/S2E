# S2E Logistics ERP - System Architecture

## Overview

This is a production-ready, web-based Logistics, Accounts, and Payroll ERP system specifically designed for Pakistan-based Cargo & Logistics Companies. The system is built using Laravel 10.x with MySQL database.

## System Architecture

### Technology Stack
- **Backend**: Laravel 10.x (PHP 8.1+)
- **Database**: MySQL 5.7+
- **Frontend**: Blade Templates + Tailwind CSS + Alpine.js
- **Build Tool**: Vite
- **Authentication**: Laravel Sanctum

### Database Schema

#### Core Modules

1. **S2E Logistics Module**
   - `zones` - Zone master data
   - `cities` - City master data
   - `areas` - Area master data
   - `cargo_offices` - Cargo office locations
   - `cargo_officers` - SPO/Cargo officers
   - `parties` - Customers/Vendors
   - `party_rates` - Party-wise rates
   - `party_fuel_rates` - Party fuel charges
   - `item_codes` - Item type codes
   - `invoice_charges` - Invoice charge types
   - `consignment_notes` - Main CN table
   - `cn_stocks` - CN stock per office
   - `cn_stock_issues` - CN stock transfers
   - `load_plans` - Vehicle load plans
   - `load_plan_items` - CNs in load plans
   - `delivery_sheets` - Delivery sheets
   - `delivery_sheet_items` - CNs in delivery sheets
   - `pickup_sheets` - Pickup sheets
   - `pickup_sheet_items` - CNs in pickup sheets
   - `riders` - Pickup/delivery riders
   - `vehicles` - Vehicle master
   - `invoices` - Customer invoices
   - `invoice_items` - CNs in invoices
   - `invoice_charge_items` - Additional charges

2. **Finance Module (Double Entry)**
   - `chart_of_accounts` - Account master
   - `vouchers` - Voucher headers (BPV, BRV, CPV, CRV, JVR)
   - `voucher_entries` - Double entry transactions
   - `cn_expenses` - CN expense linking
   - `party_ledgers` - Party ledger entries
   - `sales_tax_registers` - Sales tax records

3. **Payroll Module**
   - `departments` - Department master
   - `designations` - Designation master
   - `employees` - Employee master
   - `allowances` - Allowance types
   - `deductions` - Deduction types
   - `employee_allowances` - Employee allowances
   - `employee_deductions` - Employee deductions
   - `employee_loans` - Employee loans
   - `loan_installments` - Loan installments
   - `authorized_leaves` - Leave records
   - `payroll_periods` - Payroll periods
   - `payroll_records` - Payroll calculations
   - `payroll_allowance_details` - Payroll allowance breakdown
   - `payroll_deduction_details` - Payroll deduction breakdown

4. **Security & Audit**
   - `users` - System users
   - `roles` - User roles
   - `permissions` - System permissions
   - `role_permissions` - Role-permission mapping
   - `audit_logs` - Audit trail
   - `system_settings` - System configuration

## CN Lifecycle Workflow

```
CN Entry (Manual)
    ↓
Load Plan (Vehicle Assignment)
    ↓
Delivery Sheet (Rider Assignment)
    ↓
Invoice Generation
    ↓
Finance Integration (Auto)
```

### Key Workflow Rules

1. **CN Entry**
   - Manual CN number entry
   - Automatic rate calculation based on party, city, item code
   - Automatic fuel charge calculation
   - CN stock validation and update

2. **Load Plan**
   - CNs can be added to load plans
   - Status: draft → dispatched → received
   - Updates CN status to "in_transit"

3. **Delivery Sheet**
   - CNs assigned to riders
   - Status: draft → assigned → completed
   - Updates CN status to "out_for_delivery" → "delivered"

4. **Invoice Generation**
   - Multiple CNs can be invoiced together
   - Automatic calculation of charges and fuel
   - Links to Finance module automatically

## Finance Module - Double Entry Accounting

### Voucher Types
- **BPV**: Bank Payment Voucher
- **BRV**: Bank Receipt Voucher
- **CPV**: Cash Payment Voucher
- **CRV**: Cash Receipt Voucher
- **JVR**: Journal Voucher

### Double Entry Rules
- Every voucher must have equal debit and credit
- Vouchers can be posted/unposted
- CN expenses automatically create voucher entries
- Party ledgers maintained automatically

## Permission System

### Roles
- **Admin**: Full system access
- **Accounts**: Finance and accounting
- **Operations**: CN and logistics operations
- **HR**: Payroll and employee management

### Permission Structure
- Module-based permissions
- Menu visibility based on permissions
- Direct URL access blocked for unauthorized users

## API Structure (Future)

The system is designed to be API-ready:
- Laravel Sanctum for API authentication
- RESTful API endpoints
- Mobile app compatibility

## Performance Considerations

1. **Database Indexing**
   - Indexed on frequently queried columns
   - Composite indexes for common queries

2. **Scalability**
   - Designed to handle thousands of CNs daily
   - Queue system for notifications
   - Caching for reports

3. **Optimization**
   - Eager loading for relationships
   - Pagination for large datasets
   - Database query optimization

## File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   ├── S2ELogistics/
│   │   ├── Finance/
│   │   ├── Payroll/
│   │   └── Reports/
│   └── Middleware/
├── Models/
│   ├── (All model files)
└── Providers/

database/
├── migrations/
│   ├── 2024_01_01_000000_create_roles_and_permissions_tables.php
│   ├── 2024_01_01_000001_create_users_table.php
│   ├── 2024_01_01_000002_create_s2e_logistics_tables.php
│   ├── 2024_01_01_000003_create_finance_tables.php
│   ├── 2024_01_01_000004_create_payroll_tables.php
│   ├── 2024_01_01_000005_create_audit_and_support_tables.php
│   └── 2024_01_01_000006_add_cn_foreign_keys.php
└── seeders/
    ├── DatabaseSeeder.php
    ├── RolePermissionSeeder.php
    ├── UserSeeder.php
    ├── ZoneCitySeeder.php
    └── InitialDataSeeder.php

resources/
├── views/
│   ├── layouts/
│   ├── auth/
│   ├── s2e-logistics/
│   ├── finance/
│   ├── payroll/
│   └── reports/
├── css/
└── js/

routes/
├── web.php
└── api.php
```

## Next Steps for Full Implementation

1. **Complete Controllers**
   - Load Plan Controller
   - Delivery Sheet Controller
   - Invoice Controller
   - Finance Controllers (Vouchers, Reports)
   - Payroll Controllers
   - Reports Controllers

2. **Complete Views**
   - CN Entry (Create/Edit forms)
   - Load Plan views
   - Delivery Sheet views
   - Invoice views
   - Finance module views
   - Payroll module views
   - Reports views

3. **Business Logic**
   - CN rate calculation service
   - Invoice generation service
   - Payroll calculation service
   - Report generation services

4. **Notifications**
   - SMS integration
   - WhatsApp integration
   - Email notifications

5. **Additional Features**
   - Export functionality (PDF, Excel)
   - Print templates
   - Advanced filtering
   - Dashboard widgets

## Testing Checklist

- [ ] CN Entry workflow
- [ ] Load Plan creation and dispatch
- [ ] Delivery Sheet assignment
- [ ] Invoice generation
- [ ] Finance double-entry validation
- [ ] Payroll calculation accuracy
- [ ] Permission-based access control
- [ ] Report accuracy
- [ ] CN stock management
- [ ] Party ledger accuracy

## Production Deployment Checklist

- [ ] Environment configuration
- [ ] Database optimization
- [ ] Cache configuration
- [ ] Queue configuration
- [ ] File storage configuration
- [ ] SSL certificate
- [ ] Backup strategy
- [ ] Monitoring setup
- [ ] Security hardening

