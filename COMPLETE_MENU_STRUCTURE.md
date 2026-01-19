# Complete Menu Structure - Reference Software Analysis

## Based on Exploration Findings

### Main Navigation (Top Level):
1. **Logistics** (Selected when viewing logistics forms)
2. **Logistics Reports**
3. **Finance**
4. **Finance Reports**
5. **Payroll** (Visible in some screenshots)
6. **Payroll Reports** (Visible in some screenshots)
7. **System** (Visible in some screenshots)

---

## LOGISTICS Menu Structure:

### Sub-Menu Items (Inferred from page structure):
When "Logistics" is clicked, it shows:
- **Main Screen** (Default view)
- **Detail Search** (Search functionality)

### Pages Under Logistics:
1. ✅ **CNEntry.aspx** - C/N Entry Form
   - Accessible via Logistics → Main Screen → CN Entry
   - Has "Main Screen" and "Detail Search" tabs
   
2. ✅ **DeliverySheet.aspx** - Delivery Sheet
   - Large form (14,000+ lines)
   
3. ✅ **PickupSheet.aspx** - Pickup Sheet
   - Form exists (3,000+ lines)

### Potential Other Logistics Pages:
- Initial Setup (Item Codes, Invoice Charges, Cargo Officers, CN Stock, Cities, Zones, Party Rates)
- Load Plan (page name unknown - LoadPlan.aspx returns 404)
- Invoice (page name unknown - Invoice.aspx returns 404)

---

## LOGISTICS REPORTS Menu Structure:

### Expected Reports:
- Sales Reports
- Profit / Loss Reports
- CN Status & Stock Reports
- Control Lists
- COD Reports (possibly)

### Note:
- Report pages return 404 when accessed directly
- Reports likely accessed through menu navigation
- May require parameters/filters before display

---

## FINANCE Menu Structure:

### Expected Forms:
- Chart of Accounts
- Vouchers (Journal Entries)

### Note:
- ChartOfAccounts.aspx returns 404
- Voucher.aspx returns 404
- Pages likely accessed through menu navigation

---

## FINANCE REPORTS Menu Structure:

### Expected Reports:
- Trial Balance
- Balance Sheet
- Profit & Loss Statement
- Party Outstanding

---

## PAYROLL Menu Structure:

### Expected Forms:
- Departments
- Designations
- Employees
- Process Payroll

---

## PAYROLL REPORTS Menu Structure:

### Expected Reports:
- Salary Register
- Payslips (possibly)
- Other payroll reports

---

## SYSTEM Menu Structure:

### Expected Options:
- Users
- Roles
- Permissions
- System Settings
- Audit Logs

---

## Key Findings:

1. **Menu Hierarchy**: Main menus → Sub-menus → Pages
2. **Navigation Pattern**: Clicking main menu shows sub-menu options
3. **Page Access**: Many pages cannot be accessed directly via URL
4. **Secondary Navigation**: Some pages have secondary tabs (Main Screen, Detail Search)
5. **Form Structure**: Forms are large and complex (CN Entry has many fields)

---

## Next Steps for Complete Documentation:

1. ✅ Menu structure confirmed (7 main menus)
2. ✅ CN Entry form fields documented
3. ✅ Delivery Sheet and Pickup Sheet pages confirmed
4. ⏳ Need to explore sub-menu items for each main menu
5. ⏳ Need to document all form fields for Delivery Sheet and Pickup Sheet
6. ⏳ Need to verify report pages through menu navigation
7. ⏳ Need to document Initial Setup menu items
8. ⏳ Need to find correct page names for Load Plan and Invoice

---

## Implementation Status:

✅ **Completed:**
- Menu structure reorganized to match reference
- Navigation menu updated with 7 main menus
- Finance Reports separated from Finance
- Payroll Reports menu added
- System menu renamed from Settings

⏳ **In Progress:**
- Detailed menu exploration
- Form field comparison
- Report verification

📋 **Pending:**
- Remove non-matching features
- Add missing features
- Complete form field documentation

