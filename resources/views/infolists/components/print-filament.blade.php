<div>
    <button
        id="print-button"
        class="{{ config('print.button.padding') }}
               bg-{{ config('print.button.color') }}
               text-{{ config('print.button.text_color') }}
               {{ config('print.button.rounded') }}
               hover:bg-{{ config('print.button.hover_color') }}">
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
        .btn {
            display: none; /* Hide the print button in the printed page */
        }
    }
</style>
