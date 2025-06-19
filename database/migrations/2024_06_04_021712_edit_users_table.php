<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable()->after('name');
            $table->string('role')->nullable()->after('last_name');
            $table->string('cedula')->nullable()->after('email_verified_at');
            $table->string('celular')->nullable()->after('cedula');
            $table->date('f_inscripcion')->nullable()->after('password');
            $table->unsignedBigInteger('carrera_id')->nullable()->after('f_inscripcion');

            $table->foreign('carrera_id')->references('id')->on('carrera')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['carrera_id']);
            
            $table->dropColumn('carrera_id');
            $table->dropColumn('role');
            $table->dropColumn('last_name');
            $table->dropColumn('cedula');
            $table->dropColumn('celular');
            $table->dropColumn('f_inscripcion');
        });
    }
};