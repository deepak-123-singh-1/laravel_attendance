@extends('admin_panel/header_footer_sidebar_master')

@section('titleArea') Blank page @endsection

@section('MiddleSection')


<style type="text/css">
    .form-control, select{
        border: 1px solid silver !important;
        height: 35px !important;
    }
    /*select{
        height: 0px !important;
        border: 1px solid silver !important;
    }*/
    .form-control[type="file"]{
        font-size: 11px;
    }
    .address{
        height: 100px !important;
    }
    .required:
</style>


<!-- Page-header end -->
<div class="pcoded-content">
    <!-- Page-header start -->
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Employee manager</h5>
                        <p class="m-b-0">Welcome to Employee manager form</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('dashboard')}}"> <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Employee manager</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Employee form</h5>
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                    
                                    @if(Session::has('success'))
                                        <div class="alert-white m-t-25 bg-success form-group form-primary text-center" style="padding: 3px 10px;">
                                            <b style="font-weight: bold;">Success!... </b> {{Session('success')}}
                                        </div>
                                    @endif 
                                    @if(Session::has('error'))
                                        <div class="alert-white m-t-25 bg-danger form-group form-primary" style="padding: 3px 10px;">
                                            <b style="font-weight: bold;">Error!... </b> {{Session('error')}}
                                        </div>
                                    @endif
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li>
                                                <i class="fa fa fa-wrench open-card-option"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-window-maximize full-card"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-minus minimize-card"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-refresh reload-card"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-trash close-card"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                <!-- main form page -->
                                <form class="row" action="{{url('employeeformSave')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="itsEmployee" value="1">
                                    <div class="col-lg-4" title="Employee name">
                                        <div class="form-group">
                                            <label for="name">Name 
                                                <span class="text-danger">
                                                    {{$errors->first('name')}}
                                                </span>
                                            </label>
                                            <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Employee name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="emp_id">Employee ID
                                                <span class="text-danger">
                                                    {{$errors->first('emp_id')}}
                                                </span>
                                            </label>
                                            <input type="text" name="emp_id" value="{{old('emp_id')}}" id="emp_id" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="employee_pic">Profile image
                                                <span class="text-danger">
                                                    {{$errors->first('employee_pic')}}
                                                </span>
                                            </label>
                                            <input type="file" name="employee_pic" id="employee_pic" value="{{old('employee_pic')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="interview_date">Interview date
                                                <span class="text-danger">
                                                    {{$errors->first('interview_date')}}
                                                </span>
                                            </label>
                                            <input type="date" name="interview_date" id="interview_date" value="{{old('interview_date')}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="joining_date">Joining date
                                                <span class="text-danger">
                                                    {{$errors->first('joining_date')}}
                                                </span>
                                            </label>
                                            <input type="date" name="joining_date" id="joining_date" value="{{old('joining_date')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="fields">Employee fields
                                                <span class="text-danger">
                                                    {{$errors->first('fields')}}
                                                </span>
                                            </label>
                                            <select name="fields" id="fields" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="HR">HR</option>
                                                <option value="IT">IT</option>
                                                <option value="Data entery">Data entery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="role">Employee role
                                                <span class="text-danger">
                                                    {{$errors->first('role')}}
                                                </span>
                                            </label>
                                            <select name="role" id="role" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="Web developer">Web developer</option>
                                                <option value="Backend developer">Backend developer</option>
                                                <option value="Web designer">Web designer</option>
                                                <option value="Data entery">Data entery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="type">Employee type
                                                <span class="text-danger">
                                                    {{$errors->first('type')}}
                                                </span>
                                            </label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="Fresher">Fresher</option>
                                                <option value="Experience">Experience</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="period">Employee period
                                                <span class="text-danger">
                                                    {{$errors->first('period')}}
                                                </span>
                                            </label>
                                            <select name="period" id="period" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="Traning">Traning</option>
                                                <option value="Enternship">Enternship</option>
                                                <option value="Direct joine">Direct joine</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="experience">Work experience
                                                <span class="text-danger">
                                                    {{$errors->first('experience')}}
                                                </span>
                                            </label>
                                            <input type="text" name="experience" id="experience" value="{{old('experience')}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="experience_latter">Experience latter
                                                <span class="text-danger">
                                                    {{$errors->first('experience_latter')}}
                                                </span>
                                            </label>
                                            <input type="file" name="experience_latter" id="experience_latter" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group form-default">
                                            <label for="bank_details">Bank details
                                                <span class="text-danger">
                                                    {{$errors->first('bank_details')}}
                                                </span>
                                            </label>
                                            <textarea name="bank_details" id="bank_details" class="form-control address">{{old('bank_details')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="previous_salary">Previous salary
                                                <span class="text-danger">
                                                    {{$errors->first('previous_salary')}}
                                                </span>
                                            </label>
                                            <input type="number" name="previous_salary" id="previous_salary" value="{{old('previous_salary')}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="salery_sleep_copy">Previous salery copy
                                                <span class="text-danger">
                                                    {{$errors->first('salery_sleep_copy')}}
                                                </span>
                                            </label>
                                            <input type="file" name="salery_sleep_copy" id="salery_sleep_copy" value="{{old('salery_sleep_copy')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="joining_salery">Joining salery
                                                <span class="text-danger">
                                                    {{$errors->first('joining_salery')}}
                                                </span>
                                            </label>
                                            <input type="number" name="joining_salery" id="joining_salery"value="{{old('joining_salery')}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="resume">Resume(CV)
                                                <span class="text-danger">
                                                    {{$errors->first('resume')}}
                                                </span>
                                            </label>
                                            <input type="file" name="resume" id="resume" value="{{old('resume')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="adhar_card_copy">Aadhar card copy
                                                <span class="text-danger">
                                                    {{$errors->first('address_card_copy')}}
                                                </span>
                                            </label>
                                            <input type="file" name="adhar_card_copy" id="adhar_card_copy" value="{{old('adhar_card_copy')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="pan_card_copy">Pan card numb/Copy
                                                <span class="text-danger">
                                                    {{$errors->first('pan_card_copy')}}
                                                </span>
                                            </label>
                                            <input type="file" name="pan_card_copy" id="pan_card_copy" value="{{old('pan_card_copy')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="email_id">Email ID
                                                <span class="text-danger">
                                                    {{$errors->first('email_id')}}
                                                </span>
                                            </label>
                                            <input type="email" name="email_id" id="email_id" value="{{old('email_id')}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="phone_number">Phone number
                                                <span class="text-danger">
                                                    {{$errors->first('phone_number')}}
                                                </span>
                                            </label>
                                            <input type="number" name="phone_number" id="phone_number" value="{{old('phone_number')}}" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group form-default">
                                            <label for="phone_number">Password
                                                <span class="text-danger">
                                                    {{$errors->first('password')}}
                                                </span>
                                            </label>
                                            <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="birth_of_date" class="">Birth date
                                                <span class="text-danger">
                                                    {{$errors->first('birth_of_date')}}
                                                </span>
                                            </label>
                                            <input type="date" name="birth_of_date" id="birth_of_date" value="{{old('birth_of_date')}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label id="gender">Gender
                                                <span class="text-danger">
                                                    {{$errors->first('gender')}}
                                                </span>
                                            </label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="marital">Marital status
                                                <span class="text-danger">
                                                    {{$errors->first('marital')}}
                                                </span>
                                            </label>
                                            <select name="marital" id="marital" class="form-control">
                                                <option value="">- Select -</option>
                                                <option value="Married">Married</option>
                                                <option value="Un-married">Un-married</option>
                                                <!-- <option value="Direct joine">Direct joine</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-default">
                                            <label for="qualification_details">Qualification details
                                                <span class="text-danger">
                                                    {{$errors->first('email_id')}}
                                                </span>
                                            </label>
                                            <textarea name="qualification_details" id="qualification_details" class="form-control address">{{old('qualification_details')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group form-default">
                                            <label for="address">Full address
                                                <span class="text-danger">
                                                    {{$errors->first('address')}}
                                                </span>
                                            </label>
                                            <textarea name="address" id="address" class="form-control address">{{old('address')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pull-right">
                                        <div class="pull-right">
                                            <input type="reset" name="form_reset" class="btn btn-danger waves-effect">
                                            <input type="submit" name="form_submit" class="btn btn-primary waves-effect">
                                        </div>
                                    </div>


                                </form>
                                
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="styleSelector"></div>











@endsection