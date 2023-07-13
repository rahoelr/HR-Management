<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nik');
            $table->string('npwp');
            $table->string('full_name');
            $table->string('tempat_lahir');
            $table->string('gender');
            $table->text('address');
            $table->string('jabatan');
            $table->dateTime('start_masa_kerja');
            $table->dateTime('end_masa_kerja');
            $table->boolean('is_active');
			$table->foreign('user_id')->references('id')->on('users');


            $table->softDeletes();
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
        Schema::dropIfExists('employees');
    }
}
