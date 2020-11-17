@extends('master.masterpage')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Improvements</li>
        </ol>
        <!-- Page Content -->
        <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12 col-xs-12">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
            <i class="fa fa-chart-bar"></i>
            Improvements Chart
            </div>
            <div class="card-body">
            <canvas id="myBarChart" width="100%" height="50"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card mb-3">
            <div class="card-header bg-dark text-white">
            <i class="fa fa-chart-pie"></i>
            Product Profits Chart
            </div>
            <div class="card-body">
            <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        </div>
        </div>
    </div>
@endsection