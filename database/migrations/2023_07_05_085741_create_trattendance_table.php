<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrattendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_attendance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('ms_employee_id');
			$table-> date ('attendance_date');
			$table-> datetime('check_in');
			$table-> datetime('check_out');
			$table-> text('late_checkin_notes')->nullable();
			$table-> text('early_checkout_notes')->nullable();
			$table->foreign('ms_employee_id')->references('id')->on('employees');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trattendance');
    }
}
