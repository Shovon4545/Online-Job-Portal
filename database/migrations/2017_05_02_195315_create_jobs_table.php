<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('job_tittle');
            $table->string('job_category');
            $table->string('job_nature');
            $table->string('job_educational_req');
            $table->string('job_year_of_exp');
            $table->string('job_salary');
            $table->string('job_location');
            $table->string('job_description');
            $table->string('job_dead_line');
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
        Schema::dropIfExists('jobs');
    }
}
