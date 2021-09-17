<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');            
            $table->string('email')->unique();
            $table->string('user_type')->default('admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
<<<<<<< HEAD
=======
            $table->rememberToken();
            $table->timestamps();
>>>>>>> bc582d84cbfd4ac6afddd79e5d6634ad1f74a48c
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