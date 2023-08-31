<?php

// database/migrations/xxxx_xx_xx_create_excuse_slips_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcuseSlipsTable extends Migration
{
    public function up()
    {
        Schema::create('excuse_slips', function (Blueprint $table) {
            $table->id('excuse_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->text('reason');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    public function down()
    {
        Schema::dropIfExists('excuse_slips');
    }
}
