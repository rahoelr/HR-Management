@extends('layout.sidebar')

@section('title')
    <title>Dashboard</title>
@stop

@section('css')
    <!-- <link href="main.css" /> -->
@stop

@section('menu')
<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
    </li>

<!-- Nav Item - Timesheet -->
    <li class="nav-item">
        <a class="nav-link" href="/timesheet">
            <i class="fas fa-fw fa-chart-area"></i>
                <span>Timesheet</span></a>
    </li>

<!-- Nav Item - Cuti -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
                <span>Pengajuan Cuti</span></a>
    </li>
@stop

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <div>
                <dashboard/>
            </div>

        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        
        <!-- <script src="{{ asset('js/chart-bar.js') }}"></script> -->
        
        <script src="{{ asset('js/chart-bar.js') }}"></script>
        <script src="js/chart-bar.js" type="text/javascript"></script>

    </body>
</html>
