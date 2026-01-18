#!/bin/bash
# Script to create remaining views systematically

BASE_DIR="resources/views"

# Function to create a basic index view
create_index_view() {
    local path=$1
    local title=$2
    local route_prefix=$3
    
    mkdir -p "$(dirname "$path")"
    
    cat > "$path" << EOF
@extends('layouts.app')

@section('title', '$title')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">$title</h1>
        @if(isset(\$createRoute))
        <a href="{{ route('$route_prefix.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Add New
        </a>
        @endif
    </div>

    <div class="bg-white rounded shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td colspan="2" class="px-6 py-4 text-center text-gray-500">No records found.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
EOF
}

# Create remaining critical views
echo "Creating remaining views..."

# Settings views
create_index_view "$BASE_DIR/settings/change-password.blade.php" "Change Password" "settings.change-password"
create_index_view "$BASE_DIR/settings/change-year.blade.php" "Change Year" "settings.change-year"
create_index_view "$BASE_DIR/settings/initialize-data.blade.php" "Initialize Data" "settings.initialize-data"
create_index_view "$BASE_DIR/settings/data-processing.blade.php" "Data Processing" "settings.data-processing"
create_index_view "$BASE_DIR/settings/payroll-processing-final.blade.php" "Payroll Processing (FINAL)" "settings.payroll-processing-final"
create_index_view "$BASE_DIR/settings/system-optimization.blade.php" "System Optimization" "settings.system-optimization"
create_index_view "$BASE_DIR/settings/un-void-cn.blade.php" "Un-Void CN" "settings.un-void-cn"
create_index_view "$BASE_DIR/settings/email-settings.blade.php" "Email Settings" "settings.email-settings"
create_index_view "$BASE_DIR/settings/inter-branch-jv-code.blade.php" "Inter-Branch JV Code" "settings.inter-branch-jv-code"
create_index_view "$BASE_DIR/settings/unpost-data.blade.php" "Un-Post Data" "settings.unpost-data"

echo "Views created successfully!"

