<x-dynamic-component :component="$getEntryWrapperView()">
    <div>
        <button
            id="print-button"
            class="{{ implode(' ', config('print.button.classes')) }}">
            {{ $getLabel() }}
        </button>
    </div>
    <script>
        document.getElementById('print-button').addEventListener('click', function() {
            window.print();
        });
    </script>

    <style>
        @media print {
            body * {
                overflow: visible !important;
                position: initial !important;
                visibility: visible !important;

            }
            body {
                color: #000 !important;
                color: #000;
            }
            .btn, #print-button, .fi-sidebar, .fi-breadcrumbs, .fi-topbar, .sr-only {
                display: none;
            }
        }
    </style>
</x-dynamic-component>
