<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('shift');
            $table->time('time');
            $table->string('part_number');
            $table->string('desc_name_part');
            $table->string('batch_number');
            $table->string('output');
            $table->string('cycle_time');
            $table->string('remarks');
            $table->string('down_time');
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
        Schema::dropIfExists('daily_report');
    }
};
