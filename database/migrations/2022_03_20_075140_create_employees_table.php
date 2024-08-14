<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->comment("Admin id");
            $table->string('name');
            $table->string('employee_pic')->nullable();
            $table->string('employee_id');
            $table->string('interview_date');
            $table->string('joining_date');
            $table->string('employee_fields')->comment("IT, account and etc.");
            $table->string('employee_role')->comment("project manajer, developer and etc.");
            $table->string('employee_type')->comment("fresher or experience");
            $table->string('joining_base')->comment("traning, internship or direct work and etc.");
            $table->string('work_experience')->comment("month, year");
            $table->string('bank_details');
            $table->integer('previous_salary')->comment("previous company salary");
            $table->integer('joining_salery');
            $table->string('resume_copy')->nullable();
            $table->string('experience_copy')->nullable();
            $table->string('salery_sleep_copy')->nullable();
            $table->string('itsEmployee', 1)->comment("2 = its employee");
            $table->string('email_id');
            $table->string('phone');
            $table->string('password', 100);
            $table->string('birth_date')->comment("date of birth");
            $table->string('gender');
            $table->string('marital_status');
            $table->integer('qualification_details')->comment("all qualification details");
            $table->string('aadhar_copy')->nullable();
            $table->string('pan_card_copy')->nullable();
            $table->string('full_address');
            $table->string('path', 100)->comment("storage main folder");
            $table->string('status')->comment("1=active & 0=Not active");
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('delete_at')->comment("date add when delete");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
