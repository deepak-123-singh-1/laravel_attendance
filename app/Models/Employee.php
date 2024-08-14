<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'admin_id',
        'name',
        'emp_id',
        'interview_date',
        'joining_date',
        'fields',
        'role',
        'type',
        'period',
        'experience',
        'bank_details',
        'previous_salary',
        'joining_salery',
        'email_id',
        'phone_number',
        'birth_of_date',
        'gender',
        'marital',
        'qualification_details',
        'address',
    ];
    
}
