@extends('admin_panel/header_footer_sidebar_master')

@section('titleArea') Dashboard @endsection

@section('MiddleSection')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                        <p class="m-b-0">Welcome to Material Able</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        
                        <!-- Bar Chart start -->
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bar Chart</h5>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-block">
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Project statustic start -->
                        <div class="col-xl-12">
                            <div class="card proj-progress-card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Published Project</h6>
                                            <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Completed Task</h6>
                                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Successfull Task</h6>
                                            <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Ongoing Project</h6>
                                            <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project statustic end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
@endsection