<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
//use App\Http\Requests;
use DB;

use Session;

class AttendanceController extends Controller
{
    
    // Attendance form
    public function addAttendance()
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{

            //$result = DB::Table('table_name')->select('column1','column2')->where('id',1)->get();

            return view('admin_panel.attendance_add_form');
        }
    }

    // Attendance form save(insert)

    public function attendance_seve(Request $req)
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{


            $emp_id = $req->emp_id;
            $employee_id = $req->employee_id;
            $year = $req->punch_year;
            $month = $req->punch_month;
            $date = $req->punch_date;
            $punch_time = $req->punch_time;
            $attendance_flag = $req->attendance_flag;

            $created_at = $year."-".$month."-".$date;


            if (!empty($emp_id) && !empty($employee_id) && !empty($date) && !empty($month) && !empty($year) && !empty($punch_time) && !empty($attendance_flag)) {
                //echo "Set";

                $data = Attendance::where(['emp_id'=>$emp_id, 'year'=>$year, 'month'=>$month])->get();
                $dateSet = "date_".$date;

                if (count($data)>0) {
                    //echo "added -- Ready to update";

                    $data = DB::table('attendances')->where('emp_id', $emp_id)->where('year', $year)->where('month', $month)->where('attendance_status', '0')->update(["$dateSet"=>$attendance_flag, 'attendance_status'=>1, 'updated_at'=>$created_at]);

                    if ($data==1) {
                        echo "success";
                        //Session::put('name', $adm->name);
                    }else{
                        echo "error";
                    }


                }else{
                    //echo "not add -- Ready to save insert";
                    $table = new Attendance;
                    $table->emp_id = $emp_id;
                    $table->year = $year;
                    $table->month = $month;

                    if ($dateSet=="date_1") {
                        $table->date_1 = $attendance_flag;
                    }else{$table->date_1 = "";}

                    if ($dateSet=="date_2") {
                        $table->date_2 = $attendance_flag;
                    }else{$table->date_2 = "";}

                    if ($dateSet=="date_3") {
                        $table->date_3 = $attendance_flag;
                    }else{$table->date_3 = "";}

                    if ($dateSet=="date_4") {
                        $table->date_4 = $attendance_flag;
                    }else{$table->date_4 = "";}

                    if ($dateSet=="date_5") {
                        $table->date_5 = $attendance_flag;
                    }else{$table->date_5 = "";}

                    if ($dateSet=="date_6") {
                        $table->date_6 = $attendance_flag;
                    }else{$table->date_6 = "";}

                    if ($dateSet=="date_7") {
                        $table->date_7 = $attendance_flag;
                    }else{$table->date_7 = "";}

                    if ($dateSet=="date_8") {
                        $table->date_8 = $attendance_flag;
                    }else{$table->date_8 = "";}

                    if ($dateSet=="date_9") {
                        $table->date_9 = $attendance_flag;
                    }else{$table->date_9 = "";}

                    if ($dateSet=="date_10") {
                        $table->date_10 = $attendance_flag;
                    }else{$table->date_10 = "";}

                    if ($dateSet=="date_11") {
                        $table->date_11 = $attendance_flag;
                    }else{$table->date_11 = "";}

                    if ($dateSet=="date_12") {
                        $table->date_12 = $attendance_flag;
                    }else{$table->date_12 = "";}

                    if ($dateSet=="date_13") {
                        $table->date_13 = $attendance_flag;
                    }else{$table->date_13 = "";}

                    if ($dateSet=="date_14") {
                        $table->date_14 = $attendance_flag;
                    }else{$table->date_14 = "";}

                    if ($dateSet=="date_15") {
                        $table->date_15 = $attendance_flag;
                    }else{$table->date_15 = "";}

                    if ($dateSet=="date_16") {
                        $table->date_16 = $attendance_flag;
                    }else{$table->date_16 = "";}

                    if ($dateSet=="date_17") {
                        $table->date_17 = $attendance_flag;
                    }else{$table->date_17 = "";}

                    if ($dateSet=="date_18") {
                        $table->date_18 = $attendance_flag;
                    }else{$table->date_18 = "";}

                    if ($dateSet=="date_19") {
                        $table->date_19 = $attendance_flag;
                    }else{$table->date_19 = "";}

                    if ($dateSet=="date_20") {
                        $table->date_20 = $attendance_flag;
                    }else{$table->date_20 = "";}

                    if ($dateSet=="date_21") {
                        $table->date_21 = $attendance_flag;
                    }else{$table->date_21 = "";}

                    if ($dateSet=="date_22") {
                        $table->date_22 = $attendance_flag;
                    }else{$table->date_22 = "";}

                    if ($dateSet=="date_23") {
                        $table->date_23 = $attendance_flag;
                    }else{$table->date_23 = "";}

                    if ($dateSet=="date_24") {
                        $table->date_24 = $attendance_flag;
                    }else{$table->date_24 = "";}

                    if ($dateSet=="date_25") {
                        $table->date_25 = $attendance_flag;
                    }else{$table->date_25 = "";}

                    if ($dateSet=="date_26") {
                        $table->date_26 = $attendance_flag;
                    }else{$table->date_26 = "";}

                    if ($dateSet=="date_27") {
                        $table->date_27 = $attendance_flag;
                    }else{$table->date_27 = "";}

                    if ($dateSet=="date_28") {
                        $table->date_28 = $attendance_flag;
                    }else{$table->date_28 = "";}

                    if ($dateSet=="date_29") {
                        $table->date_29 = $attendance_flag;
                    }else{$table->date_29 = "";}

                    if ($dateSet=="date_30") {
                        $table->date_30 = $attendance_flag;
                    }else{$table->date_30 = "";}

                    if ($dateSet=="date_31") {
                        $table->date_31 = $attendance_flag;
                    }else{$table->date_31 = "";}

                    
                    $table->attendance_status = "1";
                    $table->status = "1";
                    $table->created_at = $created_at;
                    $table->updated_at = "";
                    $table->delete_at = "";
//echo $table;
                    if ($table->save()) {
                        echo "success";
                    }else{
                        echo "error";
                    }
                }

        //printf($data);



                    
            }else{

                echo "wrong";

            }


        }

    }

// check atendance add or not add
    public function checkAttendance(Request $req)
    {
        //echo "1";
        date_default_timezone_set('Asia/Kolkata');
        $year = date('Y');
        $month = date('m');
        $date = date('d');
        $dateSet = "date_".$date;
        $created_at = $year."-".$month."-".$date;

        if ($req->check=="check") { // attendance_status

            $data = Attendance::where(['year'=>$year, 'month'=>$month, 'attendance_status'=>'1'])->get();
            //printf($data);

            // if (count($data)>0) {
            // //echo "login";
            //     foreach($data as $field){
            //         if (strtok($field->updated_at,' ')==$created_at) {
            //             echo "currentDate"; 
            //         }else if(strtok($field->updated_at,' ')!=""){
            //             echo "currentBlank"; 
            //         }else{
            //         }
            //     }
            // }
            // die();

            if (count($data)>0) { // attendance_status=1
                //echo "added";
                foreach($data as $field){
                    $attendanceAddDate = strtok($field->updated_at,' ');

                    if ($attendanceAddDate==$created_at || $attendanceAddDate=="0") {

                        if($attendanceAddDate==$created_at){
                            echo "EmployeeCurrentDateAttendanceAdded"; 
                        }
                    }else{
                        echo "EmployeeCurrentDateNotMatch";
                        //echo $created_at;
                    } 
                    Session::put('lastAttendanceDate', $attendanceAddDate);
                }
            }else{ // attendance_status = 0
                echo "AdminAttendanceAccepted";
            }

        }
        

        



    }



    // Employee profile
    public function empployee_profile()
    {
        return view('admin_panel.profile');
    	
    }















    public function confirm_attendance()
    {
        return view('admin_panel.attendance_confirm');
    }

    
}
