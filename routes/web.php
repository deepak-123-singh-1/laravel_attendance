<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;


use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Login page
Route::get('/', [AdminController::class, 'loginPage']);

// Login check
Route::post('/loginCheck', [AdminController::class, 'loginCheck']);

// Logout
Route::get('/logout', [AdminController::class, 'logout']);

// dashboard page
Route::get('/dashboard', [AdminController::class, 'dashboardPage']);


// its admin

	// View all Employes
	Route::get('/allEmployee', [EmployeeController::class, 'allEmployee']);
	// employee manager form open
	Route::get('/employeeForm', [EmployeeController::class, 'employee_form']);
	// data insert
	Route::post('/employeeformSave', [EmployeeController::class, 'employeeform_save']);
	// Delete Employee
	Route::get('/employee_delete/{emp_id}', [EmployeeController::class, 'delete_employee']);
	// Edit employee form open
	Route::get('employee_edit/{emp_id}', [EmployeeController::class, 'edit_employee']);
	// Edit employee form update POST
	Route::post('employee_edit_form_update', [EmployeeController::class, 'employee_edit_form_update_post']);



// employee 
	// add Attendance form
	Route::get('addAttendance', [AttendanceController::class, 'addAttendance']);

	// add attendance form post
	Route::post('addAttendancePost', [AttendanceController::class, 'attendance_seve']);

	// Alert attendance check and show in alert option
	Route::get('checkAttendance', [AttendanceController::class, 'checkAttendance']);




	

	// Employee profile
	Route::get('profile', [AttendanceController::class, 'empployee_profile']);












	// confirm attendance
	Route::get('confirmAttendance', [AttendanceController::class, 'confirm_attendance']);







	












// Blank Page
Route::get('/blankPage', [AdminController::class, 'blankPage']);