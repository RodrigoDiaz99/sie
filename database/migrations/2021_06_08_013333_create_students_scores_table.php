<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('score_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('score_id')->references('id')->on('scores');
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
        Schema::dropIfExists('student_score');
    }
}
