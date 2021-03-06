<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('token');
            $table->string('uid');
            $table->string('title');
            $table->string('password');
            $table->integer('profile_id')->references('id')->on('profiles')->onDelete('cascade');
            $table->integer('status_id')->references('id')->on('user_status')->onDelete('cascade');
            $table->integer('pre_status_id')->references('id')->on('user_status')->onDelete('cascade');
            $table->string('role');
            $table->boolean('banned');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
