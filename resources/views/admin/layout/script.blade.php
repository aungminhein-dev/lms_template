<script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/apexchart/chart-data.js') }}"></script>
<script src="{{ asset('admin/assets/js/script.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
