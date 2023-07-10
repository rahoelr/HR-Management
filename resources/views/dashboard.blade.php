@extends('layout.sidebar')

@section('title')
    <title>Dashboard</title>
@stop

@section('css')
    <!-- <link href="main.css" /> -->
    <link href="css/dashboard.css" rel="stylesheet">
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

@section('content')
    <div id="app">
        <div>
            <dashboard/>
        </div>
    </div>
@stop

@push('javascript')
    <!-- <script src="{{asset('js/chart-bar.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('js/Chart.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ URL::asset ('js/chart-bar.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ URL::asset ('js/Chart.js') }}"></script> -->
@endpush