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
        Schema::create('hometasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('course_id');
            $table->integer('number');
            $table->softDeletes();
            $table->timestamps();
            $table->index('course_id', 'hometask_course_idx');
            $table->foreign('course_id', 'hometask_course_fk')->on('courses')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hometasks');
    }
};
