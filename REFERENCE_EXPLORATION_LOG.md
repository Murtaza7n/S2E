# Reference Software Exploration Log

## Date: 2026-01-18

### Main Menu Structure (CONFIRMED):
1. Logistics
2. Logistics Reports
3. Finance
4. Finance Reports
5. Payroll
6. Payroll Reports
7. System

---

## LOGISTICS Menu - Exploration

### Confirmed Pages:
- ✅ CNEntry.aspx - C/N Entry

### To Explore:
- [ ] Initial Setup sub-menu items
- [ ] Load Plan page
- [ ] Delivery Sheet page
- [ ] Pickup Sheet page
- [ ] Invoice page
- [ ] Other logistics forms

---

## LOGISTICS REPORTS Menu - Exploration

### Current Implementation:
- Sales Reports
- Profit / Loss
- CN Status & Stock
- Control Lists

### To Verify:
- [ ] Exact report names match
- [ ] Report parameters/filters
- [ ] Additional reports in reference

---

## FINANCE Menu - Exploration

### Current Implementation:
- Chart of Accounts
- Vouchers

### To Verify:
- [ ] Exact menu items
- [ ] Additional finance forms

---

## FINANCE REPORTS Menu - Exploration

### Current Implementation:
- Trial Balance
- Balance Sheet
- Profit & Loss
- Party Outstanding

### To Verify:
- [ ] Exact report names
- [ ] Additional finance reports

---

## PAYROLL Menu - Exploration

### Current Implementation:
- Departments
- Designations
- Employees
- Process Payroll

### To Verify:
- [ ] Exact menu items
- [ ] Additional payroll forms

---

## PAYROLL REPORTS Menu - Exploration

### Current Implementation:
- Salary Register

### To Verify:
- [ ] All payroll reports
- [ ] Report formats

---

## SYSTEM Menu - Exploration

### Current Implementation:
- Users
- Roles
- Permissions
- Audit Logs

### To Verify:
- [ ] Exact system menu items
- [ ] Additional system settings

---

## Findings Log:

### [Timestamp] - Finding
- Details here


## CN Entry Form Fields (CONFIRMED):
- City (dropdown)
- C/N No. (text)
- C/N Date (date)
- SHIPPER Section:
  - Code (dropdown)
  - Name (text)
  - Address (multi-line)
  - Attention (text)
  - Phone No. (text)
  - Reference No (text)
  - Mobile No. (text)
- MOP (dropdown - ACCOUNT)
- COD Online (dropdown - NO)
- Status (dropdown - COD)
- Service Type (dropdown - ROAD)
- COD Party (dropdown)
- Price (text)
- Origin (dropdown - Select City Code)
- Insured [Y/N] (dropdown - NO)
- Dest. (dropdown - Select City Code)
- Insured Value (text)
- FTL / LCL (dropdown - LCL)
- Vehicle No. (text)
- Container (dropdown - Select Container Size Code)
- Delivery Note (text)
- SPO Code (dropdown - Select Spo Code)


## LOGISTICS Menu Pages Found:
✅ CNEntry.aspx - C/N Entry (CONFIRMED)
✅ DeliverySheet.aspx - Delivery Sheet (CONFIRMED - large form)
✅ PickupSheet.aspx - Pickup Sheet (CONFIRMED)
❌ LoadPlan.aspx - Not found (404)
❌ Invoice.aspx - Not found (404)

### Trying alternative page names...

## LOGISTICS REPORTS - Pages Tried:
- SalesReport.aspx - [Checking...]
- ProfitLossReport.aspx - [Checking...]
- CNStatusReport.aspx - [Checking...]

## FINANCE - Pages Tried:
- ChartOfAccounts.aspx - [Checking...]
- Voucher.aspx - [Checking...]


## [2026-01-18 15:01] - Menu Exploration via CN Entry Page
- Navigating to CNEntry.aspx to see menu structure
- Will document all visible menu items and sub-menus from this page


## [2026-01-18 15:02] - CN Entry Page Menu Structure Found

### Secondary Navigation (Under Logistics Menu):
- Main Screen (currently selected)
- Detail Search

### This suggests Logistics menu has sub-options:
- When Logistics is clicked, it shows sub-menu items
- "Main Screen" appears to be the default view
- "Detail Search" is another option under Logistics

### Observations:
- The menu structure appears to be hierarchical
- Main menus (Logistics, Logistics Reports, Finance, Finance Reports) are top-level
- Sub-menus appear when clicking on main menus
- CN Entry is accessed through Logistics → Main Screen (or similar)

