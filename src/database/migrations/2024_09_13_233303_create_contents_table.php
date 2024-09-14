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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->default(0);
            $table->integer('user_id')->nullable(false);
            $table->string('title', 200)->default('');
            $table->string('file_name', 200)->nullable();
            $table->string('kind', 20)->default('');
            $table->dateTime('opened')->nullable();
            $table->dateTime('created');
            $table->dateTime('modified')->nullable();
            $table->dateTime('deleted')->nullable();
            $table->integer('sort_no')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
