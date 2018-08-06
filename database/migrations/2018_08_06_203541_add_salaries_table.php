<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('amount');
            $table->date('date');
            $table->timestamps();
        });

        Schema::create('employee_salary', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employeefk')->unsigned();
            $table->integer('id_salary')->unsigned();

            $table->foreign('id_employeefk')->references('id')->on('employees');
            $table->foreign('id_salary')->references('id')->on('salaries');

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
        Schema::dropIfExists('salaries');
    }
}
