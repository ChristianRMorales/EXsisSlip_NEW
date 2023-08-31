<?php

// database/migrations/xxxx_xx_xx_create_feedback_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->unsignedBigInteger('excuse_id');
            $table->unsignedBigInteger('sender_id');
            $table->text('feedback');
            $table->timestamps();

            $table->foreign('excuse_id')->references('excuse_id')->on('excuse_slips');
            $table->foreign('sender_id')->references('user_id')->on('app_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
