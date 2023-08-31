<?php

// database/migrations/xxxx_xx_xx_create_counselors_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselorsTable extends Migration
{
    public function up()
    {
        Schema::create('counselors', function (Blueprint $table) {
            $table->id('counselor_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
            $table->foreign('department_id')->references('department_id')->on('departments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('counselors');
    }
}
