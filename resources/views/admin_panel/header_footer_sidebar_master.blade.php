hfghfghf

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>@yield('titleArea',"Suraj")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes">

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('public/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/feather/css/feather.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/animate.css/css/animate.css') }}">

    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/pages/notification/notification.css') }}">
        <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/icofont/css/icofont.css') }}">

<style type="text/css">
    .fixed-button.active{
        bottom: 10px !important;
        display: none;
    }
</style>

<!-- Model -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- <style type="text/css">
.modal-confirm {    
  color: #636363;
  width: 325px;
  font-size: 14px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
  border: 3px solid #224580;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
} 
.modal-confirm .icon-box {
    color: #fff;
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -70px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #224580;
    padding: 15px;
    text-align: center;
    box-shadow: 0px 2px 2px rgb(0 0 0 / 10%);
}
.modal-confirm .icon-box i {
    font-size: 58px !important;
    position: relative !important;
    top: -21px !important;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: #224580;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: #6fb32b;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
.material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
}
</style> -->


<!-- Alert show in Alert icon -->
<style type="text/css">
.bell_div{
    position: relative;
    margin-top: 28px;
    margin-right: 20px;
}
.btn-bell {
    position: absolute;
    color: red;
    font-size: 20px;
    animation-name: bell-ring;
    animation-duration: 2s;
    transform: translate(50%, 50%);
    animation-iteration-count: infinite;
    margin-bottom: 0px !important;
    left: 0px;
}
@keyframes bell-ring {
    0% {
        transform: translate(-50%, -50%);
    }5%, 15% {
        transform: translate(-50%, -50%) rotate(25deg);
    }10%, 20% {
        transform: translate(-50%, -50%) rotate(-25deg);
    }25%  {
        transform: translate(-50%, -50%) rotate(0deg);
    }100% {
        transform: translate(-50%, -50%) rotate(0deg);
    }
}
.bell-border {
    height: 30px; 
    width: 30px;
    position: absolute;
    border-radius: 50%;
    border: 1px solid red !important;
    animation-name: bord-pop;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    box-shadow: 0px 0px 5px 1px black;
}
@keyframes bord-pop {
    0% {
        transform: translate(-50%, -50%);
    }
    50% {
        transform: translate(-50%, -50%) scale(1.9);
        opacity: 0.1;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.9);
        opacity: 0;
    }
}
.bg-c-red{top: 18px !important;}
</style>




</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="{{ asset('public/assets/images/logo.png') }}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="bell_div">


                                    <div class="bell-border" id="belBoreder"></div>
                                    <a href="javascript:void(0)" class="btn-bell">
                                        <i class="ti-bell"></i>
                                        <span class="bg-c-red" id="alert_icon"></span>
                                    </a>




                                </div>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">45</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">

                                            <img class="d-flex align-self-center img-radius" src="{{ asset(Session('profile')) }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">{{ Session('name') }} &nbsp 
                                                    <label class="label label-default" style="color: #af2e2e !important">{{ Session('lastAttendanceDate') }}</label>
                                                    <label class="label pull-right label-danger" id="atndc_notify"></label>
                                                </h5>
                                                <p class="notification-msg" id="notfiy_attendance"></p>
                                                <!-- <span class="notification-time">30 minutes ago</span> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{ asset('public/assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{ asset('public/assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="javascript:void(0)" class="waves-effect waves-light">
                                    <img src="{{ asset(Session('profile')) }}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Session('role') }} : {{ Session('adminStatus') }} {{ Session('employeeStatus') }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="{{url('logout')}}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header"> 
                                    <img class="img-80 img-radius" src="{{ asset(Session('profile')) }}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Session('name') }}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="{{ url('logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <!-- <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label> -->
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="pcoded-navigation-label">Navigation</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{url('dashboard')}}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            @if(Session('adminStatus')=='1')
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Employee manager</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{url('employeeForm')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add employee</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('allEmployee')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">view employee</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Attendance manager</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{url('confirmAttendance')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Confirm attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('allEmployee')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Attendance employee</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Task manager</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item" title="FnF">
                                        <li class="pcoded-hasmenu active">
                                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                                <span class="pcoded-mtext">Full & Final manager</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="active">
                                                    <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext">Add attendance</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext">View attendance</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>


                                    <ul class="pcoded-item pcoded-left-item">
                                        <li class="">
                                            <a href="{{url('blankPage')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext">Blank Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                            @endif

                            @if(Session('employeeStatus')=='2')
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Attendance manager</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{url('addAttendance')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add convance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('profile')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View profile</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                            <span class="pcoded-mtext">Task manager</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Add attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="{{url('#')}}" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">View attendance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            @endif
                             
                        </div>
                    </nav>
<!-- main page -->

        @yield('MiddleSection')

<!-- end main page -->
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('public/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/script.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/morris.js/morris.js') }}"></script>
    <script src="{{ asset('public/assets/pages/chart/morris/morris-custom-chart.js') }}"></script>

        <!-- notification js -->
<!--     <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap-growl.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/pages/notification/notification.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/script.js') }}"></script> -->

    
</body>
</html>
<!-- Time and Date -->
    <script> //Time
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
 
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
 
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
 
            let currentTime = hour + " : " + min + " : " + sec + "&nbsp&nbsp" + am_pm;
 
            document.getElementById("clock").innerHTML = currentTime;
        }
 
        showTime();
    </script>
    <script type="text/javascript"> //Date
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + ' / ' + mm + ' / ' + yyyy;
        //document.write(today);
        document.getElementById("date").innerHTML = today;

    </script>

<!-- calendar js  -->
<script type="text/javascript">
  function generate_year_range(start, end) {
    var years = "";
    for (var year = start; year <= end; year++) {
    years += "<option value='" + year + "'>" + year + "</option>";
    }
    return years;
  }

  today = new Date();
  currentMonth = today.getMonth();
  currentYear = today.getFullYear();
  selectYear = document.getElementById("year");
  selectMonth = document.getElementById("month");


  createYear = generate_year_range(1970, 2050);


  document.getElementById("year").innerHTML = createYear;

  var calendar = document.getElementById("calendar");
  var lang = calendar.getAttribute('data-lang');

  var months = "";
  var days = "";

  var monthDefault = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  var dayDefault = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

  if (lang == "en") {
    months = monthDefault;
    days = dayDefault;
  } else if (lang == "id") {
    months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    days = ["Ming", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"];
  } else if (lang == "fr") {
    months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    days = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
  } else {
    months = monthDefault;
    days = dayDefault;
  }


  var $dataHead = "<tr>";
  for (dhead in days) {
    $dataHead += "<th data-days='" + days[dhead] + "'>" + days[dhead] + "</th>";
  }
    $dataHead += "</tr>";

  //alert($dataHead);
  document.getElementById("thead-month").innerHTML = $dataHead;

  monthAndYear = document.getElementById("monthAndYear");
  showCalendar(currentMonth, currentYear);



  function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
  }

  function previous() {
    currentYear = (currentMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    showCalendar(currentMonth, currentYear);
  }

  function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
  }

  function showCalendar(month, year) {

    var firstDay = ( new Date( year, month ) ).getDay();

    tbl = document.getElementById("calendar-body");


    tbl.innerHTML = "";


    monthAndYear.innerHTML = months[month] + " " + year;
    selectYear.value = year;
    selectMonth.value = month;

  // creating all cells
  var date = 1;
  for ( var i = 0; i < 6; i++ ) {

    var row = document.createElement("tr");


    for ( var j = 0; j < 7; j++ ) {
      if ( i === 0 && j < firstDay ) {
        cell = document.createElement( "td" );
        cellText = document.createTextNode("");
        cell.appendChild(cellText);
        row.appendChild(cell);
      } else if (date > daysInMonth(month, year)) {
        break;
      } else {
        cell = document.createElement("td");
        cell.setAttribute("data-date", date);
        cell.setAttribute("data-month", month + 1);
        cell.setAttribute("data-year", year);
        cell.setAttribute("data-month_name", months[month]);
        cell.className = "cust-date-picker";
        cell.innerHTML = "<span>" + date + "</span>";

        if ( date === today.getDate() && year === today.getFullYear() && month === today.getMonth() ) {
          cell.className = "cust-date-picker selected";
        }
        row.appendChild(cell);
        date++;
      }
    }
    tbl.appendChild(row);
  }

}

  function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
  }
</script>


<!-- Calender  -->
<script type="text/javascript">
$(document).ready(function () {
    
    //var selectedDate = $('.selected').attr("data-date");
        var clYear = $('.selected').attr("data-year");
        var clMonth = $('.selected').attr("data-month");
        var clDay = $('.selected').attr("data-date");
        
        var date = new Date();
        var year = date.getFullYear();
        var month = date.getMonth()+1;
        var day = date.getDate();
        var cdate = day;

        if (day<10 || clDay<10) {
          var day = "0"+day;
          var clDay = "0"+clDay;
        };
        if(month<10 || clMonth<10){
          var month = "0"+month;
          var clMonth = "0"+clMonth;
        };

    // check current date in calendar then click

        $('.cust-date-picker').each(function(element) {

            
            var clDay = $(this).attr("data-date");

            if (clDay<cdate) { // Previous added
                $(this).css( "backgroundColor", "rgb(93 159 93)" );
                $(this).css( "cursor", "not-allowed" );
                $(this).attr( "title", "Previous added" );
            };
            if (cdate<clDay) {
                $(this).css( "backgroundColor", "rgb(191 191 79)" );
                $(this).css( "cursor", "not-allowed" );
                $(this).attr( "title", "Next day" );
            }

            if (cdate==clDay) { // Ready to add in current date
                $(this).css( "backgroundColor", "white" );
                $(this).css( "cursor", "pointer");
                $(this).attr( "title", "Ready to add" );


                $(this).click(function(){

                    // define present and half-day
                    let time = new Date();
                    let hour = time.getHours();
                    let min = time.getMinutes();
                    let sec = time.getSeconds();
                    am_pm = "AM";

                    if (hour > 12) {
                        hour -= 12;
                        am_pm = "PM";
                    };
                    if (hour == 0) {
                        hr = 12;
                        am_pm = "AM";
                    };

                    hour = hour < 10 ? "0" + hour : hour;
                    min = min < 10 ? "0" + min : min;
                    sec = sec < 10 ? "0" + sec : sec;

                    // add punch date and time on click / #punch_year, #punch_month , #punch_date
                    $('#punch_year').val(clYear);
                    $('#punch_month').val(clMonth);
                    $('#punch_date').val(clDay);

                    // set current time 
                    var currentTimeSet = hour+":"+min+":"+sec+" "+am_pm;
                    $('#punch_time').val(currentTimeSet);

                    // background color add on calender red
                    $(this).css("background","#ff5252");
                    $(this).css("color","white");



                    // Attendance select option selected when click on active current date
                    var currentTime = hour+"-"+min+"-"+am_pm;
                    if ((currentTime>="09-00-AM") && (currentTime<="10-30-AM")) {
                        //alert("it time to present");
                        var attendanceStatus = $("#attendance_flag #P").attr("value");
                        if (attendanceStatus=='P') {
                            $("#attendance_flag #P").attr("selected","selected");

                            $(this).addClass("calenderClicked");
                        }

                    }else if(((currentTime>="10-31-AM") && (currentTime<="12-59-PM")) || ((currentTime>="01-00-PM") && (currentTime<="01-30-PM"))){
                        //alert("its time to Half day");
                        var attendanceStatus = $("#attendance_flag #HD").attr("value");
                        if (attendanceStatus=='HD') {
                            $("#attendance_flag #HD").attr("selected","selected");

                            $(this).addClass("calenderClicked");
                            
                        }

                    }else if((currentTime>="01-31-PM") && (currentTime<="06-30-PM")){
                        //alert("its time to leave");
                        var attendanceStatus = $("#attendance_flag #A").attr("value");
                        if (attendanceStatus=='A') {
                            $("#attendance_flag #A").attr("selected","selected");

                            $(this).addClass("calenderClicked");

                        }

                    }else if((currentTime>="00-000-AM") && (currentTime<="12-59-AM")){
                        //alert("Time is UP");
                        var attendanceStatus = $("#attendance_flag #A").attr("value");
                        if (attendanceStatus=='A') {
                            $("#attendance_flag #A").attr("selected","selected");

                            $(this).addClass("calenderClicked");

                        }
                    }
                });   
            }
        });


    // attendance data submit by AJAX

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#attendance_submit").click(function(e){

    e.preventDefault();
        
        var className = $(".cust-date-picker").hasClass("calenderClicked");

        var emp_id = $('#emp_id').val();
        var employee_id = $('#employee_id').val();
        var punch_date = $('#punch_date').val();
        var punch_month = $('#punch_month').val();
        var punch_year = $('#punch_year').val();
        var punch_time = $('#punch_time').val();
        var attendance_flag = $('#attendance_flag').val();
        
        if (className==true) {
            if (emp_id!="" && punch_date!="" && punch_month!="" && punch_year!="" && punch_time!="") {
                $.ajax({
                   url:"{{ url('addAttendancePost') }}",
                   method:'POST',
                   data:{ emp_id:emp_id, employee_id:employee_id, punch_date:punch_date, punch_month:punch_month, punch_year:punch_year, punch_time:punch_time, attendance_flag:attendance_flag
                   },
                   success:function(response){
                      ///alert(response);
                        if (response==="success") { // success 
                            $('.alert_section').click();
                        };

                        if (response==="wrong"){ // error
                            $('.alert_section').click();
                            $("#alert_head").text("Warning : ");
                            $("#alert_msg").text(" Something is wrong...!");

                            $(".modal-content").addClass('modal_content_wrong');
                            $(".thumb").addClass('thumb_wrong');

                        }

                        if (response==="error"){ // error
                            $('.alert_section').click();
                            $("#alert_head").text("Error : ");
                            $("#alert_msg").text(" Attendance already added...!");

                            $(".modal-content").addClass('modal_content_errot');
                            $(".thumb").addClass('thumb_error');

                        }
                   }
                });
            }else{
                alert("First click current date on calender...");
            }

        }else{
            alert("First click current date on calender...");
        }
    });
});
</script>

<!-- Alert show in Alert icon -->
<script type="text/javascript">  
        var date = new Date();
        var year = date.getFullYear();
        var month = date.getMonth()+1;
        var day = date.getDate();

        if (day<10) {
          var day = "0"+day;
        };
        if(month<10){
          var month = "0"+month;
        };
        var current = year+"-"+month+"-"+day;
    function sendRequest(){
        

        $.ajax({
            
            url:"{{ url('checkAttendance') }}",
            method:'get',
            data:{ check:"check"},

            success: function(result){
                //alert(result);
                if (result=="EmployeeCurrentDateAttendanceAdded") {
                    //$('.badge').append(result+", ");
                    $('#alert_icon').removeClass("badge");
                    $('#belBoreder').addClass("bell-border");
                    $('.bell_div').attr("title","Attendance added");

                    $('#atndc_notify').text("Added");
                    $('#notfiy_attendance').text("Today your attendance have added...!");
                    $('#atndc_notify').css("background","red");

                }else if(result=="AdminAttendanceAccepted"){
                    $('#alert_icon').addClass("badge");
                    $('.bell_div').attr("title","Attendance accepted");
                    $('#atndc_notify').html("<a href='{{url("profile")}}'>Accepted</a>");
                    $('#notfiy_attendance').text("Your attendance accepted by Admin...!");
                    $('#atndc_notify').css("background","green");

                }else if (result=='EmployeeCurrentDateNotMatch') {
                    $('.bell_div').attr("title","Atd. not add");
                    $('#atndc_notify').html("<a href='{{url("addAttendance")}}'>Not</a>");
                    $('#notfiy_attendance').text("Today youre attendance not add, Please add...!");
                }

                //alert(result);

                setTimeout(function(){
                    sendRequest();
                }, 1000);
            }
        });
    }
    sendRequest();
</script>