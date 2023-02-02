<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
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
            $table->string('info_sid');
            $table->string('info_fname');
            $table->string('info_lname');
            $table->string('info_mname');
            $table->string('info_course');
            $table->string('date', 10);
            $table->string('time_in', 8);
            $table->string('time_out', 8);
            $table->boolean('sched_type');
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
        Schema::dropIfExists('attendances');
    }
}
