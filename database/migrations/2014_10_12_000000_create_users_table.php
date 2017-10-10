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
            $table->string('avatar')->nullable();
            $table->string('token')->nullable();
            $table->string('uid')->nullable();
            $table->string('title')->nullable();
            $table->string('department')->references('id')->on('departments')->onDelete('cascade')->default(1);
            $table->string('password');
            $table->integer('profile_id')->references('id')->on('profiles')->onDelete('cascade')->default(0);
            $table->integer('status_id')->references('id')->on('user_status')->onDelete('cascade')->default(1);
            $table->integer('pre_status_id')->references('id')->on('user_status')->onDelete('cascade')->default(1);
            $table->string('role')->nullable();
            $table->boolean('banned')->default(0);
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
