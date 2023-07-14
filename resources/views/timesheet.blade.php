@extends('layout.sidebar')

@section('title')
    <title>Timesheet</title>
@stop

@section('css')
    <!-- <link href="{{ asset('css/timesheet.css') }}"></script> -->
    <link href="css/timesheet.css" rel="stylesheet" />
@stop

@section('menu')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item bg-menu">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span style="color:#3A3A3A;">Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Timesheet -->
    <li class="nav-item active bg-menu bg-menu-active">
        <a class="nav-link" href="/timesheet">
            <i class="fas fa-fw fa-calendar-days" style="color:#3A3A3A;"></i>
            <span>Timesheet</span>
        </a>
    </li>

    <!-- Nav Item - Cuti -->
    <li class="nav-item bg-menu">
        <a class="nav-link" href="/timesheet">
            <i class="fas fa-fw fa-clock" style="color:#3A3A3A;"></i>
            <span style="color:#3A3A3A;">Pengajuan Cuti</span>
        </a>
    </li>
@stop

@section('content')
    <div id="app">
        <div>
            <timesheet />
        </div>
    </div>
@stop

@section('javascript')

@stop
