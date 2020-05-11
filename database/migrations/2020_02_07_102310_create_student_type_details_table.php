<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTypeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_type_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('student_id');
            $table->Integer('class_id');
            $table->Integer('type_id');
            $table->Integer('batch_id');
            $table->Integer('roll_id');
            $table->Integer('type_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_type_details');
    }
}
