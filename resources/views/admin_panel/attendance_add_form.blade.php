@extends('admin_panel/header_footer_sidebar_master')

@section('titleArea') Add attendance form-DK @endsection

@section('MiddleSection')

<style type="text/css">


.wrapper {
    max-width: 1100px;
  }

  .container-calendar {
    background: #ffffff;
    padding: 15px;
    //max-width: 475px;
    margin: 0 auto;
    overflow: auto;
    border-radius: 2px;
    border: 1px dashed #448aff;
  }

  .button-container-calendar #previous, .button-container-calendar #next {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #00a2b7;
    color: #fff;
    border: 1px solid #0aa2b5;
    border-radius: 4px;
    padding: 5px 10px;
  }

  .table-calendar {
    border-collapse: collapse;
    width: 100%;
  }

  .table-calendar td, .table-calendar th {
    padding: 5px;
    border: 1px solid #e2e2e2;
    text-align: center;
    vertical-align: top;
  }
  .cust-date-picker, #calendar_previous, #calendar_next{
    cursor: pointer;
  }
  .cust-date-picker.selected {
    font-weight: bold;
    outline: 1px dashed #00BCD4;

  }

  .cust-date-picker.selected span {
    border-bottom: 2px solid currentColor;
  }

  /* sunday */
  .cust-date-picker:nth-child(1) {
    color: red;
  }

  /* friday */
  .cust-date-picker:nth-child(6) {
    color: green;
  }

  #monthAndYear {
    text-align: center;
    margin-top: 0;
  }

  .button-container-calendar {
    position: relative;
    margin-bottom: 1em;
    overflow: hidden;
    clear: both;
  }

  #previous {
    float: left;
  }

  #next {
    float: right;
  }

  .footer-container-calendar {
    margin-top: 1em;
    border-top: 1px solid #cccccc;;
    padding: 10px 0;
    display: none;
  }

  .footer-container-calendar #month {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #ffffff;
    color: #585858;
    border: 1px solid #bfc5c5;
    border-radius: 3px;
    padding: 5px 1em;
  }
.card .card-block table tr th {
    padding-bottom: 20px;
    background: #448aff;
}
#punch_year, #punch_month , #punch_date {
  outline: 0px;
  border: 0px !important;
}
#thead-month tr th {
    color: white;
}
</style>

<!-- alert model -->
<style type="text/css">
.modal-confirm {    
  color: #636363;
  font-size: 14px;
}
 .middle_sec{
    color: white;
 }
.modal-content{
  padding: 10px 16px 8px 16px;
  border-radius: 5px;
  border: none;
  border: 3px solid #448aff;
  background: rgba(68, 138, 255, 0.3);
}
.modal_content_errot{
  padding: 10px 16px 8px 16px;
  border-radius: 5px;
  border: none;
  border: 3px solid #448aff;
  background: rgba(68, 138, 255, 0.3);
}
.modal_content_wrong{
  padding: 10px 16px 8px 16px;
  border-radius: 5px;
  border: none;
  border: 3px solid #ffb103;
  background: rgba(220, 128, 1, 0.3);
}
.thumb {
  color: #fff;
  border-radius: 4px;
  background: #448aff;
  text-decoration: none;
  padding: 7px 12px;
}
.thumb i {
    font-size: 18px !important;
    position: relative !important;  
}
.modal-dialog{
  margin: auto;
  top: 59px;
}
.fa-times{
  color: red;
  font-size: 15px;
  cursor: pointer;
  -webkit-animation: blink 2s infinite both;
  animation: blink 2s infinite both;
}
.modal_content_errot{
  border: 3px solid #ff5252;
  background: rgba(255, 82, 82, 0.3);
}
.middle_sec_error{
    color: #ff5252;
}
.thumb_error {
  color: #fff;
  background: #ff5252;
}
.thumb_wrong { 
  color: #ffb103;
  background: rgba(220, 128, 1, 0.3);
}
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
                            <h5 class="m-b-10">Attendance manager</h5>
                            <p class="m-b-0">Welcome to Attendance</p>
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
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pt-0">
                                        <h5>Attendance manager</h5>
                                        <span>You can add attendance here...!</span>
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h2 id="clock" class="formate"></h2>
                                            </div>                                            
                                            <div class="col-lg-6">
                                                <h2 id="date" class="formate"></h2>
                                            </div>                                            
                                        </div>
                                        <!-- main form page -->
                                        <form method="post"  class="row" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <input type="hidden" id="emp_id" class="col-lg-6 form-control" value="{{ Session('emp_id') }}">

                                            <div class="col-lg-6">
                                              <div class="col-lg-12 pl-0 pr-0">
                                                    <div class="form-group">
                                                        <label for="employee_id">Employee ID 
                                                            <span class="text-danger">
                                                                {{$errors->first('employee_id')}}
                                                            </span>
                                                        </label>
                                                        <input type="text" name="employee_id" id="employee_id" value="{{Session('employee_id')}}" class="form-control" placeholder="Employee id" autocomplete="off" readonly="on">
                                                    </div>
                                                </div>
                                                <!-- date set -->
                                                <div class="col-lg-12 pl-0 pr-0">
                                                    <div class="form-group">
                                                        <label for="punch_year">Punch date
                                                            <span class="text-danger">
                                                                {{$errors->first('punch_year')}}
                                                            </span>
                                                            <span class="show"></span>
                                                        </label>
                                                        <div class="form-control pt-1">
                                                          <div class="row pl-2 pr-2">
                                                            
                                                            <input type="text" name="punch_date" id="punch_date" value="{{old('punch_date')}}" class="col-lg-4" placeholder="DD" autocomplete="off" readonly="on">

                                                            <input type="text" name="punch_month" id="punch_month" value="{{old('punch_month')}}" class="col-lg-4" placeholder="MM" autocomplete="off" readonly="on">

                                                            <input type="text" name="punch_year" id="punch_year" value="{{old('punch_year')}}" class="col-lg-4" placeholder="YYYY" autocomplete="off" readonly="on">


                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 pl-0 pr-0">
                                                    <div class="form-group">
                                                        <label for="punch_time">Punch time
                                                            <span class="text-danger">
                                                                {{$errors->first('punch_time')}}
                                                            </span>
                                                            <span class="show"></span>
                                                        </label>
                                                        <input type="text" name="punch_time" id="punch_time" value="{{old('punch_time')}}" class="form-control" placeholder="Click on calender" autocomplete="off" readonly="on">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 pl-0 pr-0">
                                                    <div class="form-group">
                                                        <label for="attendance_flag">Attendance status<!-- Its time to(distribute among all) -->
                                                            <span class="text-danger">
                                                                {{$errors->first('attendance_flag')}}
                                                            </span>
                                                        </label>
                                                        <select name="role" id="attendance_flag" class="form-control" readonly="on">
                                                            <option value="">- Select -</option>
                                                            <option value="P" id="P">Present</option>
                                                            <option value="HD" id="HD">Half Day</option>
                                                            <option value="A" id="A">Absent</option>
                                                            <option value="L" id="L">Live</option>
                                                            <option value="ML">Medical Live</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="name">Absent Calendar
                                                    <span class="text-danger">
                                                        {{$errors->first('name')}}
                                                    </span>
                                                </label>
                                                <div class="wrapper">
                                                    <div class="container-calendar">

                                                  <div class="button-container-calendar pt-2">
                                                    <div class="row">
                                                      <div class="col-sm-2">
                                                        <!-- <input type="button" name="" id="calendar_previous" onclick="previous()" value="‹" required=""> -->
                                                        <input type="button" name="" id="calendar_previous" value="‹" required="">

                                                      </div>
                                                      <div class="col-sm-8">
                                                        <h5 id="monthAndYear"></h5>
                                                      </div>
                                                      <div class="col-sm-2 text-right">
                                                        <!-- <input type="button" name="" id="calendar_next" onclick="next()" value="›" required=""> -->
                                                        <input type="button" name="" id="calendar_next" value="›" required="">

                                                      </div>
                                                    </div>
                                                  </div>

                                                    <table class="table-calendar" id="calendar" data-lang="en">
                                                      <thead id="thead-month"><tr><th data-days="Sun">Sun</th><th data-days="Mon">Mon</th><th data-days="Tue">Tue</th><th data-days="Wed">Wed</th><th data-days="Thu">Thu</th><th data-days="Fri">Fri</th><th data-days="Sat">Sat</th></tr></thead>
                                                      <tbody id="calendar-body"><tr><td data-date="1" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>1</span></td><td data-date="2" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked absent_day"><span>2</span></td><td data-date="3" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>3</span></td><td data-date="4" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>4</span></td><td data-date="5" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>5</span></td><td data-date="6" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>6</span></td><td data-date="7" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>7</span></td></tr><tr><td data-date="8" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>8</span></td><td data-date="9" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>9</span></td><td data-date="10" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>10</span></td><td data-date="11" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>11</span></td><td data-date="12" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>12</span></td><td data-date="13" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>13</span></td><td data-date="14" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>14</span></td></tr><tr><td data-date="15" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>15</span></td><td data-date="16" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>16</span></td><td data-date="17" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker selected clicked absent_day"><span>17</span></td><td data-date="18" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>18</span></td><td data-date="19" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked absent_day"><span>19</span></td><td data-date="20" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>20</span></td><td data-date="21" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>21</span></td></tr><tr><td data-date="22" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>22</span></td><td data-date="23" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>23</span></td><td data-date="24" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>24</span></td><td data-date="25" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>25</span></td><td data-date="26" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>26</span></td><td data-date="27" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>27</span></td><td data-date="28" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>28</span></td></tr><tr><td data-date="29" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker"><span>29</span></td><td data-date="30" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>30</span></td><td data-date="31" data-month="5" data-year="2022" data-month_name="May" class="cust-date-picker clicked"><span>31</span></td></tr><tr></tr></tbody>
                                                    </table>

                                                    <div class="footer-container-calendar">
                                                      <label for="month">Jump To: </label>
                                                      <div class="dropdown bootstrap-select"><select id="month" onchange="jump()" class="" tabindex="-98">
                                                      <option value="0">Jan</option>
                                                      <option value="1">Feb</option>
                                                      <option value="2">Mar</option>
                                                      <option value="3">Apr</option>
                                                      <option value="4">May</option>
                                                      <option value="5">Jun</option>
                                                      <option value="6">Jul</option>
                                                      <option value="7">Aug</option>
                                                      <option value="8">Sep</option>
                                                      <option value="9">Oct</option>
                                                      <option value="10">Nov</option>
                                                      <option value="11">Dec</option>
                                                      </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="month" title="May"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">May</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                                      <div class="dropdown bootstrap-select"><select id="year" onchange="jump()" class="" tabindex="-98"><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="year" title="2022"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">2022</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>       
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>





                                            <div class="col-lg-12 mt-4 pull-right">
                                                <div class="pull-right">
                                                    <input type="reset" name="form_reset" class="btn btn-danger waves-effect">
                                                    <!-- <input > -->
                                                    <button id="attendance_submit" class="btn btn-primary waves-effect ">Submit</button>
                                                </div>
                                            </div>




                                        </form>
                                    </div>



























<!-- <ul class="notifications">
    <li>
        <button class="btn btn-primary waves-effect" data-type="inverse" data-animation-in="animated flipInX" data-animation-out="animated flipOutX">Flip In X</button>
    </li>
</ul> -->














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

<!-- Alert Model -->
<a href="#myModal" class="trigger-btn alert_section" data-toggle="modal" style="display: none;">Open Modal</a>
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm col-md-6">

    <div class="modal-content">

      <div class="row">
        <div class="col-md-1">
          <span class="thumb"><i class="start-icon fa fa-thumbs-up faa-bounce animated"></i></span>
        </div>
        <div class="col-md-10 middle_sec">
          <span><b style="font-weight: bold;" id="alert_head">Success : </b> <span id="alert_msg"> Attendance add successfully...! </span></span>
        </div>
        <div class="col-md-1">
          <span class="fa-times" data-dismiss="modal">
            <i class="fa fa-times greencross"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

 




@endsection