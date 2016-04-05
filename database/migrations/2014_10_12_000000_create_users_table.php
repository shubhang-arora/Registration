<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('contact')->unique();
            $table->string('city');
            $table->string('state');
            $table->integer('subject_id');
            $table->integer('role');
            $table->string('college');
            $table->string('cgpa');
            $table->string('year');
            $table->string('course');
            $table->string('percentage');
            $table->integer('night');
            $table->string('institute');
            $table->string('experience');
            $table->text('about_you');
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
        Schema::drop('users');
    }
}
