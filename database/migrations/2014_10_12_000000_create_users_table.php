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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username', '32')->unique();
            $table->string('email', '100')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('phone_number');
            $table->string('location');
            $table->integer('user_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_type_id')->references('id')->on('user_types')
            ->onUpdate('cascade')->onDelete('cascade');
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
