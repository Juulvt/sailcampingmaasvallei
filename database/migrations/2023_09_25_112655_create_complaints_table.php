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
            $table->foreignId('prioritytype_id')->constrained()->nullable();         
            $table->string('description');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('employee_id')->constrained(
                table: 'users', indexName: 'user_id'
            )->nullable();
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
