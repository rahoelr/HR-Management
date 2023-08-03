@extends('layout.sidebar')

@section('title')
    <title>Timesheet</title>
@stop

@section('css')
    <!-- <link href="{{ asset('css/timesheet.css') }}"></script> -->
    <link href="css/timesheet.css" rel="stylesheet" />
    <link href="css/dashboard.css" rel="stylesheet" />
@stop

@section('menu')
    <!-- Nav Item - Dashboard -->
    <li class="nav-item bg-menu">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt" style="color:#3A3A3A;"></i>
            <span style="color:#3A3A3A;">Dashboard</span>
        </a>
    </li>

    <!-- Nav Item - Timesheet -->
    <li class="nav-item active bg-menu bg-menu-active">
        <a class="nav-link" href="/timesheet">
            <i class="fas fa-fw fa-calendar-days"></i>
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
            @if (Auth::check())
                <timesheet :user="{{ Auth::user() }}"></timesheet>
            @else
                <timesheet :user="false"></timesheet>
            @endif

            <?php
            use Illuminate\Support\Facades\Auth;
            $UserId = Auth::id();
            // echo var_dump($UserId) . '<br>';
            function debug_to_console($data)
            {
                $output = $data;
                if (is_array($output)) {
                    $output = implode(',', $output);
                }
            
                echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
            }
            debug_to_console($UserId);
            ?>
        </div>
    </div>
@stop

@section('javascript')

@stop
