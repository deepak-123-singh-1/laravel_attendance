<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    
    // login page
    public function loginPage()
    {
        if (!Session::has('adminEmail')) {
            return view('admin_panel/index');
        }else{
            return redirect("dashboard");
        }
    }

    // login check
    public function loginCheck(Request $req){

        $email = $req->email;
        $password = md5($req->password);

        $admin =  Admin::where(['email'=>$email, 'password'=>$password, 'status'=>'1'])->get();
        $employee = Employee::where(['email_id'=>$email, 'password'=>$password, 'status'=>'1'])->get();
        
        if (count($admin)>0) {
            //echo "login";
            foreach($admin as $adm){
                Session::put('id', $adm->id);
                Session::put('name', $adm->name);
                Session::put('email', $adm->email);
                Session::put('role', $adm->user_role);
                Session::put('profile', $adm->profile);
                Session::put('adminStatus', $adm->itsAdmin);
            }

            Session::put('adminEmail', $email);
            return redirect("dashboard");

        }elseif(count($employee)>0) {
            //echo "login";
            foreach($employee as $emp){
                Session::put('emp_id', $emp->id);
                Session::put('name', $emp->name);
                Session::put('email', $emp->email_id);
                Session::put('employee_id', $emp->employee_id);
                Session::put('role', $emp->employee_role);
                Session::put('profile', $emp->employee_pic);
                Session::put('employeeStatus', $emp->itsEmployee);
            }

            Session::put('adminEmail', $email);
            return redirect("dashboard");

        }else{

            Session::flash('error',"Invalid Login");
            return redirect("/");

        }
    }

    // logout
    public function logout()
    {
        if (Session::has('adminEmail')) {
            Session::flush();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    // dashboard page
    public function dashboardPage()
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{
            return view('admin_panel/dashboard');
        }
    }

// Blank page
    public function blankPage()
    {
        return view('admin_panel/blank_page');
    }

}