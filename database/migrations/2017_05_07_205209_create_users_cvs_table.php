<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_full_name');
            $table->string('user_address');
            $table->string('user_phone');
            $table->string('user_email');
            $table->string('user_objective');
            $table->string('user_education');
            $table->string('user_date_of_birth');
            $table->string('user_experience');
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
        Schema::dropIfExists('users_cvs');
    }
}
