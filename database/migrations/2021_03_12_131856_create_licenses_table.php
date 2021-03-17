<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->increments('licenses_id');
            $table->string('licenses_name');
            $table->boolean('licenses_hide')->nullable();
            $table->integer('storagetime');
            $table->string('licenses_color')->nullable();
            $table->string('licenses_partent')->nullable();
            $table->datetime('licenses_createddate')->nullable();
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
        Schema::dropIfExists('licenses');
    }
}
