<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('info_id');
            $table->integer('info_sid');
            $table->string('info_fname');
            $table->string('info_lname');
            $table->string('info_mname');
            $table->string('info_course');
            $table->string('info_yr_lvl');
            $table->string('date', 10);
            $table->string('time_in', 15);
            $table->string('time_out', 15)->nullable();
            $table->string('sched_type');
            $table->string('sched_entry');
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
        Schema::dropIfExists('attendance');
    }
}
