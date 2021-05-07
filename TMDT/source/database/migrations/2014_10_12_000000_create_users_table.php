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
            $table->string('username', 255)->changed();
            $table->string('password', 255)->changed();
            $table->string('fullname', 255)->changed();           
            $table->integer('role');
            $table->string('phonenumber', 12)->changed();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();    
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
