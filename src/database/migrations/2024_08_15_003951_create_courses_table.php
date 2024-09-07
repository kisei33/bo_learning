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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // 'id' column with auto-increment
            $table->string('title', 200)->default('');
            $table->text('introduction')->nullable();
            $table->dateTime('opened')->nullable();
            $table->dateTime('created');
            $table->dateTime('modified')->nullable();
            $table->dateTime('deleted')->nullable();
            $table->integer('sort_no')->default(0);
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('user_id');
            
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
