{{-- Print Header with Logo - For all reports and print pages --}}
<div class="print-header hidden print:block mb-4 pb-4" style="border-bottom: 2px solid #1E3A5F;">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ asset('images/logo/s2e-logo.svg') }}" alt="S2E Logistics" class="h-16 w-auto print:h-12" style="max-width: 200px;">
            <div class="ml-4">
                <h1 class="text-2xl font-bold" style="color: #FF6B35;">S2E LOGISTICS</h1>
                <p class="text-sm" style="color: #6B7280;">Delivering Trust, Start to End</p>
            </div>
        </div>
        <div class="text-right">
            <p class="text-sm" style="color: #6B7280;">{{ now()->format('Y-m-d H:i:s') }}</p>
            <p class="text-sm" style="color: #6B7280;">Page <span class="page-number"></span></p>
        </div>
    </div>
</div>

<style>
    @media print {
        .print-header {
            display: block !important;
            page-break-after: avoid;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
        .page-number::after {
            content: counter(page);
        }
        @page {
            margin: 1cm;
        }
    }
</style>

