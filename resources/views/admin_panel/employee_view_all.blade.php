@extends('admin_panel/header_footer_sidebar_master')

@section('titleArea') Blank page @endsection

@section('MiddleSection')

<style type="text/css">
    tr th{
        //background: #dae6f9;
    }
    tr td{
        font-size: 12px;
    }
    tr td:nth-child(1){
        font-weight: bold;
        //background: #dae6f9;
    }
    .justify-content-sm-between{
        width: 100%;
    }
</style>
	<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">All Employes</h5>
                        <p class="m-b-0">Welcome to employee page</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a>Employes</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <!--  -->
                    <!-- Hover table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>All Employees</h5>
                            <span>All active employee Edit and Delete hete...</span>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-trash close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th><b>#</b></th>
                                            <th><b>Image</b></th>
                                            <th><b>Name</b></th>
                                            <th><b>ID</b></th>
                                            <th><b>Fields</b></th>
                                            <th><b>Role</b></th>
                                            <th><b>Gender</b></th>
                                            <th><b>Contacts</b></th>
                                            <th><b>Joining</b></th>
                                            <th><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php

                                            $sn = 1;
                                        @endphp
                                        @if(count($empData)>0)
                                            @foreach($empData as $emp)
                                                <tr>
                                                    <td scope="row">{{$sn++}}</td>
                                                    <td>
                                                        <img src="{{asset($emp->employee_pic)}}" style="height: 60px; width: 80px;">
                                                    </td>
                                                    <td>{{$emp->name}}</td>
                                                    <td>{{$emp->employee_id}}</td>
                                                    <td>{{$emp->employee_fields}}</td>
                                                    <td>{{$emp->employee_role}}</td>
                                                    <td>{{$emp->gender}}</td>
                                                    <td>{{$emp->email_id}}<br>{{$emp->phone}}</td>
                                                    <td>{{$emp->joining_date}}</td>
                                                    <td class="btn-group" style="width:115px;">
                                                        <a href="{{url('employee_edit')}}/{{$emp->id}}" class="btn btn-sm waves-effect waves-light btn-info"><i class="fa fa-edit"></i><!-- Edit --></a>

                                                        <a href="{{url('employee_delete')}}/{{$emp->id}}" class="btn btn-sm waves-effect waves-light btn-danger" onclick="return confirm('Are you sure to delete...')"><i class="fa fa-trash"></i><!-- Edit --></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10" class="text-center">You Don't have any data...!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                {!! $empData->withQueryString()->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>
                    <!-- Hover table card end -->
                </div>
            </div>
        </div>
    </div>



</div>



@endsection