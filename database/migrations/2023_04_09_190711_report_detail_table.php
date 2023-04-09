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
        Schema::create('report_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained('report');
            $table->string('part_number');
            $table->string('desc_name_part');
            $table->string('batch_number');
            $table->integer('output');
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('report_detail');
    }
};
