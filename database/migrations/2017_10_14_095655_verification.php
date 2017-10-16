<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Verification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')
                ->references('id')->on('student')
                ->ondelete('cascade');
            $table->integer('stakeholder_id')->unsigned();
            $table->foreign('stakeholder_id')
                ->references('id')->on('stakeholder')
                ->ondelete('cascade');
            $table->string('payment_id')->nullable();
            $table->string('verification_status');
            $table->string('digital_sign')->nullable();
            $table->boolean('isRead')->nullable();
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
        Schema::dropIfExists('verification');
    }
}
