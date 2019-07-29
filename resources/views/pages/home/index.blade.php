@extends('layouts.app')

@section('content')

<div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Dashboard 4</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard 4</li>
                        </ol>
                        <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL VISIT</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash"></div>
                                <div class="ml-auto">
                                    <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TOTAL PAGE VIEWS</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash2"></div>
                                <div class="ml-auto">
                                    <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">7469</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">UNIQUE VISITOR</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash3"></div>
                                <div class="ml-auto">
                                    <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">6011</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">BOUNCE RATE</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash4"></div>
                                <div class="ml-auto">
                                    <h2 class="text-danger"><i class="ti-arrow-down"></i> <span class="counter">18%</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Sales Chart and browser state-->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Sales Chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Feed and erning -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Review -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Review -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Comment - chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Comment - chats -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>

@endsection