<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrtimesheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tr_timesheet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('ms_employee_id');
			$table->unsignedBigInteger ('ms_project_id');
			$table-> date ('work_date');
			$table-> time('workhour_start');
			$table-> time('workhour_end');
			$table-> string('work_location');
			$table-> text('task');
			$table-> text('completed_task');
			$table-> text('todo_task');
			$table->foreign('ms_employee_id')->references('id')->on('employees');
			$table->foreign('ms_project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trtimesheet_');
    }
}
