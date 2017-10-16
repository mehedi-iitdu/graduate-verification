<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Permission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('permission', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')
              ->references('id')->on('user')
              ->ondelete('cascade');
          $table->integer('student_id')->unsigned();
          $table->foreign('student_id')
                  ->references('id')->on('student')
                  ->ondelete('cascade');
          $table->integer('semester_no')->unsigned();
          $table->string('message');
          $table->boolean('isApproved');
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
        //
    }
}
