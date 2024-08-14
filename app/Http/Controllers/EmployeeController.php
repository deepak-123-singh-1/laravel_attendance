<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
//use File;

// use Validation;


class EmployeeController extends Controller
{
    // Employee manager
    public function employee_form()
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{
            return view('admin_panel/employee_add_form');
        }
    }

    // View all employee
    public function allEmployee()
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{
            //$data =  Employee::orderBy('id','DESC')->get();
            $data = Employee::where(['status'=>'1'])->orderBy('id', 'DESC')->paginate(10);
            return view('admin_panel/employee_view_all')->with("empData", $data);

        }
    }

// Insert form data 
    public function employeeform_save(Request $req)
    {
        if (!Session::has('adminEmail')) {
            return redirect('/');
        }else{
            // // form name set for insert in a variable

            //dd($req->all());
            // first set the name of input box then validate
            $rules = [
                'name' => "required",
                'emp_id' => "required",
                'employee_pic' => "required|mimes:jpg,jpeg,png,webp|max:800", // 800 kilobytes
                'interview_date' => "required",
                'joining_date' => "required",
                'fields' => "required",
                'role' => "required",
                'type' => "required",
                'period' => "required",
                'experience' => "required",
                'experience_latter' => "mimes:jpg,jpeg,png,webp|max:800",
                'bank_details' => "required",
                'previous_salary' => "required",
                'salery_sleep_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'joining_salery' => "required",
                'resume' => "mimes:jpg,jpeg,png,webp|max:800",
                'address_card_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'pan_card_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'email_id' => "required",
                'phone_number' => "required",
                'password' => "required",
                'birth_of_date' => "required",
                'gender' => "required",
                'marital' => "required",
                'qualification_details' => "required",
                'address' => "required|max:255",
            ];

            $this->validate($req, $rules); // apply for show validation

            $path = "public/emp_documents/".strtolower(str_replace(' ', '_', $req->name))."_".time();
            if (!is_dir("storage/app/".$path)) {
                mkdir("storage/app/".$path);
            };  
            $table = new Employee;
            $table->admin_id = "1";
            $table->name = $req->name;
            $table->employee_id = $req->emp_id;

            if (empty($req->file('employee_pic'))) {
                $table->employee_pic = "";
            }else{
                $employee_pic_nn = "profile_pic.".$req->file('employee_pic')->getClientOriginalExtension();
                $employee_pic_path_nn = $req->file('employee_pic')->storeAs($path, $employee_pic_nn);
                $table->employee_pic = "storage/app/".$employee_pic_path_nn;
            }
            
            $table->interview_date = $req->interview_date;
            $table->joining_date = $req->joining_date;
            $table->employee_fields  = $req->fields;
            $table->employee_role  = $req->role;
            $table->employee_type  = $req->type;
            $table->joining_base  = $req->period;
            $table->work_experience  = $req->experience;
            $table->bank_details  = $req->bank_details;
            $table->previous_salary  = $req->previous_salary;
            $table->joining_salery  = $req->joining_salery;

            if (empty($req->file('resume'))) {
                $table->resume_copy  = "";
            }else{
                $resume_nn = "resume.".$req->file('resume')->getClientOriginalExtension();
                $resume_path_nn = $req->file('resume')->storeAs($path, $resume_nn);
                $table->resume_copy  = "storage/app/".$resume_path_nn;
            }
            

            if (empty($req->file('experience_latter'))) {
                $table->experience_copy  = "";
            }else{
                $experience_nn = "experience_latter.".$req->file('experience_latter')->getClientOriginalExtension(); 
                $experience_path_nn = $req->file('experience_latter')->storeAs($path, $experience_nn);
                $table->experience_copy  = "storage/app/".$experience_path_nn;
            }

            
            if (empty($req->file('salery_sleep_copy'))) {
                $table->salery_sleep_copy  = "";
            }else{
                $salery_sleep_nn = "salery_sleep_copy.".$req->file('salery_sleep_copy')->getClientOriginalExtension();
                $salery_sleep_path_nn = $req->file('salery_sleep_copy')->storeAs($path, $salery_sleep_nn);
                $table->salery_sleep_copy  = "storage/app/".$salery_sleep_path_nn;
            }

            $table->itsEmployee  = $req->itsEmployee;

            if (empty($req->file('adhar_card_copy'))) {
                $table->aadhar_copy  = "";
            }else{
                $adhar_nn = "adhar_card_copy.".$req->file('adhar_card_copy')->getClientOriginalExtension();
                $adhar_path_nn = $req->file('adhar_card_copy')->storeAs($path, $adhar_nn);
                $table->aadhar_copy  = $adhar_path_nn;
            }

            if (empty($req->file('pan_card_copy'))) {
                $table->pan_card_copy  = "";
            }else{
                $pan_nn = "pan_card_copy.".$req->file('pan_card_copy')->getClientOriginalExtension();
                $pan_path_nn = $req->file('pan_card_copy')->storeAs($path, $pan_nn);
                $table->pan_card_copy  = "storage/app/".$pan_path_nn; 
            }

            $table->email_id  = $req->email_id;
            $table->phone  = $req->phone_number;
            $table->password  = md5($req->password);
            $table->birth_date  = $req->birth_of_date;
            $table->gender  = $req->gender;
            $table->marital_status  = $req->marital;
            $table->qualification_details  = $req->qualification_details;
            $table->full_address  = $req->address;
            $table->path  = $path;
            $table->status  = "1";
            $table->delete_at  = "1";

        
            if ($table->save()) {
        
                Session::flash('success', "Employee details add successfuly...");
                return redirect("employeeForm");
            
            }else{
                // echo "not upload...";
                Session::flash('error', "Something is wrong...");
                return redirect("employeeForm");
            }
            
        }
    }


// Delete employee data
    public function delete_employee($emp_id){

        //echo "Ok ".$emp_id;
        $emp = Employee::find($emp_id);
        
        if ($emp->delete()) {
            unlink($emp->employee_pic);
            unlink($emp->resume_copy);
            unlink($emp->experience_copy);
            unlink($emp->salery_sleep_copy);
            unlink($emp->aadhar_copy);
            unlink($emp->pan_card_copy);
            rmdir($emp->path);
             

            //echo "Delete";
            Session::flash('success', "Employee delete successfuly...");
            return redirect("allEmployee");

           
        }else{

            Session::flash('error', "Something is wrong...1");
            return redirect("allEmployee");
        }
        



    }


    public function edit_employee($emp_id)
    {
        //echo "ok";
        if (!Session::has('adminEmail')) {
            return redirect("/");
        }else{
            
            $emp = Employee::find($emp_id);
            return view('admin_panel.employee_edit_form')->with('emp_data', $emp);

        }

    }

    public function employee_edit_form_update_post(Request $req)
    {
        //echo "ok";
        if (!Session::has('adminEmail')) {
            return redirect("/");
        }else{
            //echo $req->employee_id;
            $rules = [
                'name' => "required",
                'emp_id' => "required",
                'employee_pic' => "mimes:jpg,jpeg,png,webp|max:800", // 800 kilobytes
                'interview_date' => "required",
                'joining_date' => "required",
                'fields' => "required",
                'role' => "required",
                'type' => "required",
                'period' => "required",
                'experience' => "required",
                'experience_latter' => "mimes:jpg,jpeg,png,webp|max:800",
                'bank_details' => "required",
                'previous_salary' => "required",
                'salery_sleep_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'joining_salery' => "required",
                'resume' => "mimes:jpg,jpeg,png,webp|max:800",
                'address_card_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'pan_card_copy' => "mimes:jpg,jpeg,png,webp|max:800",
                'email_id' => "required",
                'phone_number' => "required",
                'password' => "",
                'birth_of_date' => "required",
                'gender' => "required",
                'marital' => "required",
                'qualification_details' => "required",
                'address' => "required|max:255",
            ];

            if ($this->validate($req, $rules)) {
                //echo "all set";

                $path = "public/emp_documents/".strtolower(str_replace(' ', '_', $req->name))."_".time();
                // if (!is_dir("storage/app/".$path)) {
                //     mkdir("storage/app/".$path);
                // }; 
                $table = Employee::find($req->employee_id);
                // printf($data);

                // echo "<br>".$req->file('employee_pic');
                // echo "<br>".$req->file('resume');
                // echo "<br>".$req->file('experience_latter');
                // echo "<br>".$req->file('salery_sleep_copy');
                // echo "<br>".$req->file('adhar_card_copy');
                // echo "<br>".$req->file('pan_card_copy');

                $table->admin_id = "1";
                $table->name = $req->name;
                $table->employee_id = $req->emp_id;

                if (empty($req->file('employee_pic'))) {

                    if (empty($req->old_employee_pic)) {
                        $table->employee_pic  = "";
                    }else{
                        $table->employee_pic = $req->old_employee_pic;
                    }

                }else{
        // storage/app/public/emp_documents/surya_singh_1652958302/profile_pic.jpg
                    if (file_exists($req->old_employee_pic)) {
                        unlink($req->old_employee_pic);
                    };
                    $employee_pic_nn = "profile_pic.".$req->file('employee_pic')->getClientOriginalExtension();
                    $employee_pic_path_nn = $req->file('employee_pic')->storeAs($req->old_path, $employee_pic_nn);
                    $table->employee_pic = "storage/app/".$employee_pic_path_nn;

                    
                }
                

                $table->interview_date = $req->interview_date;
                $table->joining_date = $req->joining_date;
                $table->employee_fields  = $req->fields;
                $table->employee_role  = $req->role;
                $table->employee_type  = $req->type;
                $table->joining_base  = $req->period;
                $table->work_experience  = $req->experience;
                $table->bank_details  = $req->bank_details;
                $table->previous_salary  = $req->previous_salary;
                $table->joining_salery  = $req->joining_salery;

                if (empty($req->file('resume'))) {

                    if (empty($req->old_resume_copy)) {
                        $table->resume_copy  = "";
                    }else{
                        $table->resume_copy  = $req->old_resume_copy;
                    }

                }else{

                    if (file_exists($req->old_resume_copy)) {
                        unlink($req->old_resume_copy);
                    };
                    //unlink($req->old_resume_copy);
                    $resume_nn = "resume.".$req->file('resume')->getClientOriginalExtension();
                    $resume_path_nn = $req->file('resume')->storeAs($req->old_path, $resume_nn);
                    $table->resume_copy  = "storage/app/".$resume_path_nn;  
                }

                if (empty($req->file('experience_latter'))) {

                    if (empty($req->old_experience_copy)) {
                        $table->experience_copy  = "";
                    }else{
                        $table->experience_copy  = $req->old_experience_copy;
                    }
                }else{

                    if (file_exists($req->old_experience_copy)) {
                        unlink($req->old_experience_copy);
                    };

                    $experience_nn = "experience_latter.".$req->file('experience_latter')->getClientOriginalExtension(); 
                    $experience_path_nn = $req->file('experience_latter')->storeAs($req->old_path, $experience_nn);
                    $table->experience_copy  = "storage/app/".$experience_path_nn;
                }

                
                if (empty($req->file('salery_sleep_copy'))) {
                    if (empty($req->old_salery_sleep_copy)) {
                        $table->salery_sleep_copy  = "";
                    }else{
                        $table->salery_sleep_copy  = $req->old_salery_sleep_copy;
                    }
                }else{

                    if (file_exists($req->old_salery_sleep_copy)) {
                        unlink($req->old_salery_sleep_copy);
                    };

                    $salery_sleep_nn = "salery_sleep_copy.".$req->file('salery_sleep_copy')->getClientOriginalExtension();
                    $salery_sleep_path_nn = $req->file('salery_sleep_copy')->storeAs($req->old_path, $salery_sleep_nn);
                    $table->salery_sleep_copy  = "storage/app/".$salery_sleep_path_nn;
                }

                $table->itsEmployee  = $req->itsEmployee;

                if (empty($req->file('adhar_card_copy'))) {
                    if (empty($req->old_aadhar_copy)) {
                        $table->aadhar_copy  = "";
                    }else{
                        $table->aadhar_copy  = $req->old_aadhar_copy;
                    }
                }else{

                    if (file_exists($req->old_aadhar_copy)) {
                        unlink($req->old_aadhar_copy);
                    };

                    $adhar_nn = "adhar_card_copy.".$req->file('adhar_card_copy')->getClientOriginalExtension();
                    $adhar_path_nn = $req->file('adhar_card_copy')->storeAs($req->old_path, $adhar_nn);
                    $table->aadhar_copy  = "storage/app/".$adhar_path_nn;
                }

                if (empty($req->file('pan_card_copy'))) {
                    if (empty($req->old_pan_card_copy)) {
                        $table->pan_card_copy  = "";
                    }else{
                        $table->pan_card_copy  = $req->old_pan_card_copy;
                    }
                }else{
                    
                    if (file_exists($req->old_pan_card_copy)) {
                        unlink($req->old_pan_card_copy);
                    };

                    $pan_nn = "pan_card_copy.".$req->file('pan_card_copy')->getClientOriginalExtension();
                    $pan_path_nn = $req->file('pan_card_copy')->storeAs($req->old_path, $pan_nn);
                    $table->pan_card_copy  = "storage/app/".$pan_path_nn;
                }

                $table->email_id  = $req->email_id;
                $table->phone  = $req->phone_number;

                if (empty($req->password)) {
                    $table->password  = $req->old_password;
                }else{
                    $table->password  = md5($req->password);
                }

                $table->birth_date  = $req->birth_of_date;
                $table->gender  = $req->gender;
                $table->marital_status  = $req->marital;
                $table->qualification_details  = $req->qualification_details;
                $table->full_address  = $req->address;
                $table->path  = $req->old_path;
                $table->status  = "1";
                $table->delete_at  = "1";

            
                if ($table->save()) {
                    
                    Session::flash('success', "Employee details update successfuly...");
                    return redirect("employee_edit/$req->employee_id");
                
                }else{
                    // echo "not upload...";
                    Session::flash('error', "Something is wrong...");
                    return redirect("employee_edit/$req->employee_id");
                }



            }
            

        }

    }



}
