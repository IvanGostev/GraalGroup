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
            $table->id();
            $table->string('title');
            $table->string('img')->nullable();
            $table->text('description');
            $table->unsignedBigInteger("user_id");
            $table->softDeletes();
            $table->timestamps();
            $table->index('user_id', 'course_user_idx');
            $table->foreign('user_id', 'course_user_fk')->on('users')->references('id');

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
