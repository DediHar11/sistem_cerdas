@extends('layouts.master')
@section('content')
<!-- Main content starts -->
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Dashboard</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">4500</h2>
                <span class="label label-warning">Sales</span>Arriving Today
                <div class="side-box">
                    <i class="ti-server text-warning-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Products</span>
                <h2 class="dashboard-total-products">37,500</h2>
                <span class="label label-primary">Views</span>View Today
                <div class="side-box ">
                    <i class="ti-gift text-primary-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Products</span>
                <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                <span class="label label-success">Sales</span>Reviews
                <div class="side-box">
                    <i class="ti-direction-alt text-success-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Products</span>
                <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                <span class="label label-danger">Sales</span>Reviews
                <div class="side-box">
                    <i class="ti-rocket text-danger-color"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- 4-blocks row end -->

    <!-- 1-3-block row start -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Grafik Jumlah Siswa</h5>
                </div>
                <div class="card-block">
                    <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- 1-3-block row end -->
</div>
<!-- Main content ends -->
@endsection('content')