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
        Schema::create('user_lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->index('user_id', 'user_lesson_user_idx');
            $table->index('lesson_id', 'user_lesson_lesson_idx');
            $table->index('course_id', 'user_lesson_course_idx');

            $table->foreign('user_id', 'user_lesson_user_fk')->on('users')->references('id');
            $table->foreign('lesson_id', 'user_lesson_hometask_fk')->on('lessons')->references('id');
            $table->foreign('course_id', 'user_lesson_course_fk')->on('courses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_lessons');
    }
};
