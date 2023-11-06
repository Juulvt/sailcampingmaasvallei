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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complainttype_id')->constrained();
            $table->foreignId('statustype_id')->constrained();
            $table->unsignedBigInteger('prioritytype_id')->nullable();
            $table->foreign('prioritytype_id')->references('id')->on('prioritytypes');       
            $table->string('description');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
