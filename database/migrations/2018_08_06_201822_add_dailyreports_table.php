<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDailyreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyreports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_employeefk')->unsigned();
            $table->date('date');
            $table->time('arrival_time');
            $table->time('departure_time');
            $table->boolean('deduction')->nullable();
            $table->boolean('special_assignment')->nullable();
            $table->text('justification')->nullable();

            $table->foreign('id_employeefk')->references('id')->on('employees')->onDelete('cascade');

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
        Schema::dropIfExists('dailyreports');
    }
}
