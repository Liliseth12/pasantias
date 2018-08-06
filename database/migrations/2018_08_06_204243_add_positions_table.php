<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position_name', 30);
            $table->timestamps();
        });

        Schema::create('employee_position', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employeefk')->unsigned();
            $table->integer('id_positionfk')->unsigned();
            $table->date('date');

            $table->foreign('id_employeefk')->references('id')->on('employees');
            $table->foreign('id_positionfk')->references('id')->on('positions');

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
        Schema::dropIfExists('positions');
    }
}
