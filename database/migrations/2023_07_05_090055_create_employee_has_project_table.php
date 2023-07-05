<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeHasProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_has_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('ms_employee_id');
			$table->unsignedBigInteger ('ms_project_id');
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
        Schema::dropIfExists('employee_has_project');
    }
}
