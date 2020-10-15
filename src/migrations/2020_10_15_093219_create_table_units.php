<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_id');
            $table->string('client')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('barcode_no')->nullable();
            $table->datetime('manufactured_date')->nullable();
            $table->datetime('warranty_date')->nullable();
            $table->string('firmware_no')->nullable();
            $table->string('software_no')->nullable();
            $table->datetime('last_calibration_date')->nullable();
            $table->datetime('next_calibration_date')->nullable();
            $table->string('notes')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('units');
    }
}
