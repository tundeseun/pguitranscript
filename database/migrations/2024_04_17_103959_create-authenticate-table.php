<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */



public function up(): void
{
    Schema::create('authenticate', function (Blueprint $table) {
        $table->id();
        $table->integer('matric');
        $table->string('password');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('authenticate');
}

};
