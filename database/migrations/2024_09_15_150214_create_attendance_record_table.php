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
        Schema::create('attendance_record', function (Blueprint $table) {
            $table->id('record_id');
            $table->foreignId('employee_id')->constrained('employees', 'employee_id')->onDelete('cascade');
            $table->date('date');
            $table->time('time_in')->nullable();
            $table->time('break_in')->nullable();
            $table->time('break_out')->nullable();
            $table->time('time_out')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_record');
    }
};
