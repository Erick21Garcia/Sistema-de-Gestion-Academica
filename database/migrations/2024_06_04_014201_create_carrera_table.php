<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('carrera', function (Blueprint $table) {
            $table->id();
            $table->string('carrera_name', 100);
            $table->unsignedBigInteger('facultad_id');
            $table->text('carrera_description')->nullable();
            $table->foreign('facultad_id')->references('id')->on('facultad')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carrera');
    }
};