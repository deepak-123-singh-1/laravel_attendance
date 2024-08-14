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
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id');
            $table->string('year', 4);
            $table->string('month', 2);
            $table->string('date_1', 2)->nullable();
            $table->string('date_2', 2)->nullable();
            $table->string('date_3', 2)->nullable();
            $table->string('date_4', 2)->nullable();
            $table->string('date_5', 2)->nullable();
            $table->string('date_6', 2)->nullable();
            $table->string('date_7', 2)->nullable();
            $table->string('date_8', 2)->nullable();
            $table->string('date_9', 2)->nullable();
            $table->string('date_10', 2)->nullable();
            $table->string('date_11', 2)->nullable();
            $table->string('date_12', 2)->nullable();
            $table->string('date_13', 2)->nullable();
            $table->string('date_14', 2)->nullable();
            $table->string('date_15', 2)->nullable();
            $table->string('date_16', 2)->nullable();
            $table->string('date_17', 2)->nullable();
            $table->string('date_18', 2)->nullable();
            $table->string('date_19', 2)->nullable();
            $table->string('date_20', 2)->nullable();
            $table->string('date_21', 2)->nullable();
            $table->string('date_22', 2)->nullable();
            $table->string('date_23', 2)->nullable();
            $table->string('date_24', 2)->nullable();
            $table->string('date_25', 2)->nullable();
            $table->string('date_26', 2)->nullable();
            $table->string('date_27', 2)->nullable();
            $table->string('date_28', 2)->nullable();
            $table->string('date_29', 2)->nullable();
            $table->string('date_30', 2)->nullable();
            $table->string('date_31', 2)->nullable();
            $table->string('notification_status', 3)->comment("1=Show & 0=Not show");
            $table->string('status', 2)->comment("1=active & 0=Not active");
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
        Schema::dropIfExists('attendances');
    }
};
