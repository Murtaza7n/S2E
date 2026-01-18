# Developer Guide - S2E Logistics ERP

## Quick Start for Developers

### Understanding the Codebase

The system is organized into clear modules:

```
app/Models/              # All database models
app/Http/Controllers/    # Controllers organized by module
database/migrations/     # Database schema
resources/views/         # Blade templates
routes/web.php          # All routes
```

### Adding a New Feature

#### 1. Create/Update Model (if needed)
Models are already created. If you need a new one:
```php
php artisan make:model ModelName -m
```

#### 2. Create Controller
```php
php artisan make:controller ModuleName/FeatureController
```

Follow the pattern in `ConsignmentNoteController.php`:
- Use transactions for data integrity
- Validate input properly
- Handle errors gracefully
- Return proper responses

#### 3. Create Routes
Add to `routes/web.php`:
```php
Route::resource('feature', FeatureController::class);
```

#### 4. Create Views
Create Blade templates in `resources/views/module-name/feature/`:
- `index.blade.php` - List view
- `create.blade.php` - Create form
- `edit.blade.php` - Edit form
- `show.blade.php` - Detail view

Use the existing layout: `@extends('layouts.app')`

### CN Entry Controller Pattern

The `ConsignmentNoteController` is a complete example:

**Key Features:**
- Filtering and pagination
- Automatic calculations (rate, fuel)
- Database transactions
- Error handling
- Stock management

**Use this as a template** for other controllers.

### Finance Module - Double Entry

**Important Rules:**
1. Every voucher must have equal debit and credit
2. Validate in controller before saving
3. Use transactions for posting/unposting
4. Update party ledgers automatically

**Example Voucher Entry:**
```php
// Debit entry
VoucherEntry::create([
    'voucher_id' => $voucher->id,
    'account_id' => $debitAccount->id,
    'debit' => $amount,
    'credit' => 0,
]);

// Credit entry
VoucherEntry::create([
    'voucher_id' => $voucher->id,
    'account_id' => $creditAccount->id,
    'debit' => 0,
    'credit' => $amount,
]);
```

### Payroll Calculation Logic

**Steps:**
1. Get employee basic salary
2. Add active allowances
3. Calculate gross salary
4. Deduct active deductions
5. Deduct loan installments
6. Deduct leave deductions
7. Calculate tax
8. Calculate net salary

**Example:**
```php
$basicSalary = $employee->basic_salary;
$allowances = $employee->allowances()->where('is_active', true)->sum('amount');
$grossSalary = $basicSalary + $allowances;

$deductions = $employee->deductions()->where('is_active', true)->sum('amount');
$loanDeduction = $this->calculateLoanDeduction($employee);
$leaveDeduction = $this->calculateLeaveDeduction($employee, $period);

$netSalary = $grossSalary - $deductions - $loanDeduction - $leaveDeduction;
```

### Reports Generation

**Pattern:**
1. Accept filter parameters
2. Build query with filters
3. Execute query
4. Format data
5. Return view or export

**Example:**
```php
public function salesReport(Request $request)
{
    $query = Invoice::with('party')
        ->where('status', 'posted');
    
    if ($request->filled('date_from')) {
        $query->where('invoice_date', '>=', $request->date_from);
    }
    
    if ($request->filled('date_to')) {
        $query->where('invoice_date', '<=', $request->date_to);
    }
    
    $invoices = $query->get();
    
    return view('reports.sales', compact('invoices'));
}
```

### Permission Checks

**In Routes:**
```php
Route::get('/feature', [Controller::class, 'index'])
    ->middleware('permission:feature.view');
```

**In Controllers:**
```php
if (!auth()->user()->hasPermission('feature.create')) {
    abort(403);
}
```

**In Views:**
```blade
@if(auth()->user()->hasPermission('feature.edit'))
    <a href="{{ route('feature.edit', $item) }}">Edit</a>
@endif
```

### Database Transactions

**Always use transactions** for operations that modify multiple tables:

```php
DB::beginTransaction();
try {
    // Multiple database operations
    $cn->update([...]);
    $this->updateStock(...);
    $this->createAuditLog(...);
    
    DB::commit();
} catch (\Exception $e) {
    DB::rollBack();
    return back()->with('error', $e->getMessage());
}
```

### Form Validation

**Use Form Requests** for complex validation:

```php
php artisan make:request StoreCnRequest
```

**In Controller:**
```php
public function store(StoreCnRequest $request)
{
    $validated = $request->validated();
    // Use validated data
}
```

### Error Handling

**Always handle errors gracefully:**
```php
try {
    // Operation
} catch (\Exception $e) {
    Log::error('Error message', [
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
    
    return back()->with('error', 'Operation failed. Please try again.');
}
```

### Testing

**Create tests for critical functionality:**
```php
php artisan make:test CnEntryTest
```

**Test CN creation:**
```php
public function test_cn_can_be_created()
{
    $user = User::factory()->create();
    $this->actingAs($user);
    
    $response = $this->post('/s2e-logistics/cn-entry', [
        'cn_number' => 'CN001',
        // ... other fields
    ]);
    
    $response->assertRedirect();
    $this->assertDatabaseHas('consignment_notes', [
        'cn_number' => 'CN001'
    ]);
}
```

### Common Patterns

#### 1. Filtering Lists
```php
$query = Model::query();

if ($request->filled('filter')) {
    $query->where('field', $request->filter);
}

$items = $query->paginate(50);
```

#### 2. Automatic Calculations
```php
// In model or service class
public function calculateTotal()
{
    return $this->subtotal + $this->tax + $this->charges;
}
```

#### 3. Status Updates
```php
$cn->update(['status' => 'delivered', 'delivery_date' => now()]);
```

#### 4. Stock Management
```php
$stock = CnStock::where('cargo_office_id', $officeId)->first();
if ($stock && $cnNumber >= $stock->from_cn_number && $cnNumber <= $stock->to_cn_number) {
    $stock->increment('used_quantity');
}
```

### Best Practices

1. **Keep Controllers Thin**
   - Move business logic to service classes
   - Use form requests for validation
   - Use repositories if needed

2. **Use Eager Loading**
   ```php
   $cns = ConsignmentNote::with(['party', 'cargoOffice', 'originCity'])->get();
   ```

3. **Pagination for Large Datasets**
   ```php
   $items = Model::paginate(50);
   ```

4. **Cache Expensive Queries**
   ```php
   $data = Cache::remember('key', 3600, function() {
       return ExpensiveQuery::get();
   });
   ```

5. **Use Constants for Status Values**
   ```php
   const STATUS_PENDING = 'pending';
   const STATUS_DELIVERED = 'delivered';
   ```

### Next Steps

1. **Complete CN Entry Views**
   - Create form
   - Edit form
   - Show page

2. **Implement Load Plan**
   - Controller
   - Views
   - CN assignment logic

3. **Implement Delivery Sheet**
   - Controller
   - Views
   - Status updates

4. **Implement Invoice Module**
   - Controller
   - Views
   - CN selection
   - Finance integration

5. **Implement Finance Module**
   - Voucher controllers
   - Financial reports
   - Double-entry validation

6. **Implement Payroll**
   - Payroll processing
   - Reports
   - Calculations

### Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [Alpine.js](https://alpinejs.dev/)

### Questions?

Refer to:
- `ARCHITECTURE.md` - System design
- `SYSTEM_SUMMARY.md` - What's implemented
- Existing code in `ConsignmentNoteController.php` - Example implementation

