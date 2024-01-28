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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('table_id')->default(null);
            // $table->enum('table', [
            //     'T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7',
            // ])->default(null);
            $table->time('time');
            $table->date('date');
            $table->enum('status', ['diproses', 'selesai'])->default('diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
