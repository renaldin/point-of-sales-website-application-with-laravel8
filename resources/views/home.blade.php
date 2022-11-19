@extends('master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header section-header">
                        <h1>Dashboard</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::user()->level == 'admin')
            <div class="row">
                <div class="col-lg-3 col-md-6 col-md-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total User</h4>
                            </div>
                            <div class="card-body">
                                <h5>{{ $users }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-md-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Products</h4>
                            </div>
                            <div class="card-body">
                                <h5>{{ $products }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-md-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Categories</h4>
                            </div>
                            <div class="card-body">
                                <h5>{{ $categories }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-md-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Transaksi</h4>
                            </div>
                            <div class="card-body">
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (Auth::user()->level == 'kasir')
            <div class="col-lg-3 col-md-6 col-md-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Data Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <h5>5</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="col-12 mb-4">
                    <div class="hero text-white hero-bg-image hero-bg-parallax">
                        <div class="hero-inner">
                            <h2>Selamat Datang, {{Auth::user()->name}} !</h2>
                            <p>Hak akses {{Auth::user()->level}} telah diberikan kepada akun Anda!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
