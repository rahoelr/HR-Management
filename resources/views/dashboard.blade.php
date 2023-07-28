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
    <li class="nav-item active bg-menu bg-menu-active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Timesheet -->
    <li class="nav-item bg-menu">
        <a class="nav-link" href="/timesheet">
            <i class="fas fa-fw fa-calendar-days" style="color:#3A3A3A;"></i>
            <span style="color:#3A3A3A;">Timesheet</span>
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
        @if (Auth::check())
            <dashboard :user="{{Auth::user()}}" ></dashboard>
        @else
            <dashboard :user="false" ></dashboard>
        @endif 
            <?php
            use Illuminate\Support\Facades\Auth;
            $UserId = Auth::id();
            echo var_dump($UserId) . "<br>";
            function debug_to_console($data) {
                $output = $data;
                if (is_array($output))
                    $output = implode(',', $output);
            
                echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
            };
            debug_to_console($UserId);
            ?>
            
        </div>
    </div>
@stop

@push('javascript')
    <!-- <script src="{{ asset('js/chart-bar.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/Chart.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ URL::asset('js/chart-bar.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ URL::asset('js/Chart.js') }}"></script> -->
@endpush
