@extends('layouts.app')

@section('content')
    <head>
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <style>
            .admin_content{
                padding: 70px 0;
            }
            body {
                touch-action: pan-x pan-y;
            }
        </style>
    </head>
    <div class="container">

        @yield('admin_content')
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#table').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
@endsection
