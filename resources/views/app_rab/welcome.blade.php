@extends('app_rab.layouts.app_dashboard')
<!-- first row starts here -->
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="page-header flex-wrap">
                    <div class="header-left">
                        <!-- <button class="btn btn-primary mb-2 mb-md-0 me-2"> Create new document </button>
                        <button class="btn btn-outline-primary mb-2 mb-md-0"> Import documents </button> -->
                    </div>
                    <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                        <div class="d-flex align-items-center">
                            <a href="#">
                                <p class="m-0 pe-3">Dashboard</p>
                            </a>
                            <a class="ps-3 me-4" href="#">
                                <p class="m-0"></p>
                            </a>
                        </div>
                        <!-- <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                        <i class="mdi mdi-plus-circle"></i> Add Prodcut </button> -->
                    </div>
                </div> 
                <div class="row">
                    <div class="col-xl-9 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div>
                                        <div class="card-title mb-0">Job result <b style="color: blue;">$32,409</b></div>
                                    <!-- <h3 class="font-weight-bold mb-0">$32,409</h3> -->
                                    </div>
                                <div>
                                <div class="d-flex flex-wrap pt-2 justify-content-between sales-header-right">
                                    <div class="d-flex me-5">
                                        <button type="button" class="btn btn-social-icon btn-outline-sales">
                                            <i class="mdi mdi-inbox-arrow-down"></i>
                                        </button>
                                        <div class="ps-2">
                                            <h4 class="mb-0 font-weight-semibold head-count"> $8,217 </h4>
                                            <span class="font-10 font-weight-semibold text-muted">SUM Activity</span>
                                        </div>
                                    </div>
                                    <div class="d-flex me-3 mt-2 mt-sm-0">
                                        <button type="button" class="btn btn-social-icon btn-outline-sales profit">
                                            <i class="mdi mdi-cash text-info"></i>
                                        </button>
                                        <div class="ps-2">
                                            <h4 class="mb-0 font-weight-semibold head-count"> 2,804 </h4>
                                            <span class="font-10 font-weight-semibold text-muted">SUM PROFIT</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="flot-chart-wrapper">
                            <div id="flotChart" class="flot-chart">
                                <canvas class="flot-base" id="chart_activity"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 stretch-card grid-margin">
                <div class="card">
                    <div class="card-head">
                        <h6>Material Stock</h6>
                    </div> 
                    <div class="card-body">
                        <div class="flot-chart-wrapper">
                            <div id="flotChart" class="flot-chart">
                                <canvas class="flot-base" id="chart_material"></canvas>
                            </div>
                        </div>
                    </div> 
                </div> 
                <!-- <div class="card card-img">
                    <div class="card-body d-flex align-items-center">
                        <div class="text-white">
                            <h1 class="font-20 font-weight-semibold mb-0"> Get premium </h1>
                            <h1 class="font-20 font-weight-semibold">account!</h1>
                            <p>to optimize your selling prodcut</p>
                            <p class="font-10 font-weight-semibold"> Enjoy the advantage of premium. </p>
                            <button class="btn bg-white font-12">Get Premium</button>
                        </div>
                    </div>
                </div> -->
            </div> 
        </div>
    </div>
@stop    
@section('script')

@stop