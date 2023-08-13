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
        Schema::create('status_hometasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('hometask_id');
            $table->integer('status')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->index('user_id', 'status_hometask_user_idx');
            $table->index('hometask_id', 'status_hometask_hometask_idx');

            $table->foreign('user_id', 'status_hometask_user_fk')->on('users')->references('id');
            $table->foreign('hometask_id', 'status_hometask_hometask_fk')->on('hometasks')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_hometasks');
    }
};
