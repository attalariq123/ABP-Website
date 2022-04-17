@extends('layouts.app')

@section('custom_styles')
<style>
    .board-item {
        transition: all 0.15s ease-in;
        
    }
    .board-item:hover {
        transform: scale(1.05, 1.05);
        transition: all 0.15s ease-out;
        cursor: pointer;
    }
    .link {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
      }
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-bottom-primary border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('destinations.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-primary text-uppercase mb-1">Destinations</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_destinations}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-map-marked-alt fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('users.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-success text-uppercase mb-1">Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_users }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger border-bottom-danger shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('events.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-danger text-uppercase mb-1">Events</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_events }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('orders.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-warning text-uppercase mb-1">Pending Order</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pending_orders }}</div>
                        </div>
                        <div class="col-auto">  
                            <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Social Media Followers</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Instagram
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Facebook   
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> TikTok
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects Progress</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">CRUD Table <span class="float-right">Complete!</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">API <span class="float-right">35%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Chart Integration <span class="float-right">5%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Mobile Apps <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Admin Panel <span class="float-right">90%</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias commodi qui repudiandae atque! Adipisci delectus fugit quaerat enim ab non.</p>
                </div>
            </div>
            <!-- Some Title -->
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Some Title</h6>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto quidem qui perspiciatis aliquam amet vitae dicta delectus laborum assumenda exercitationem?</p>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection