<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousedigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehousedigitals', function (Blueprint $table) {
            $table->increments('warehouse_id');
            $table->string('warehouse_search');
            $table->integer('warehouse_storagetime');
            $table->boolean('warehouse_thuoctinh')->nullable();
            $table->text('warehouse_nameofdocument');
            $table->string('warehouse_filemain')->nullable();
            $table->string('warehouse_Attachments')->nullable();
            $table->integer('warehouse_cate')->unsigned();
            $table->foreign('warehouse_cate')
                  ->references('cate_id')
                  ->on('categories')
                  ->ondelete('cascade');
            $table->integer('warehouse_licenses')->unsigned();
            $table->foreign('warehouse_licenses')
                        ->references('licenses_id')
                        ->on('licenses')
                        ->ondelete('cascade');
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
        Schema::dropIfExists('warehousedigitals');
    }
}
