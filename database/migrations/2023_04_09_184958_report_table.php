<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('shift');
            $table->time('time');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
};
