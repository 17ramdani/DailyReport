<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset ('style/assets/img/jabil.png') }}" rel="icon">
    <title> DailyReport | Jabil</title>
    <link href="{{ asset ('style/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('style/assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
</head>

<body id="page-top">
    @yield('content')
    <script src="{{ asset ('style/assets/vendor/jquery/jquery.min.js')  }}"></script>
    <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
            $('#dataTableHover').DataTable();
        });
    </script> -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    filename: 'data',
                    exportOptions: {
                        columns: ':visible'
                    }
                }]
            });

            $('#exportBtn').click(function() {
                $('#dataTable').DataTable().buttons.exportData();
            });
        });
    </script>
</body>

</html>
