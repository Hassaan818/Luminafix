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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->string('slug', 191)->unique();
            $table->string('job_title', 191);
            $table->text('short_description', 191);
            $table->string('email');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('facebook')->nullable();
            $table->string('X')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->foreignId('created_by')
            ->nullable()
                ->constrained('users');
            $table
                ->foreignId('updated_by')
                ->nullable()
                ->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
