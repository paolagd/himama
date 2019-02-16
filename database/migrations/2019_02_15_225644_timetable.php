<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Timetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('timetable', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('check_in');
            $table->timestamp('check_out')->nullable();
            $table->unsignedInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employee')->onDelete('restrict');
        }); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timetable');
    }
}
