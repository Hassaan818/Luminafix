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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('facebook', 191)->nullable();
            $table->string('instagram', 191)->nullable();
            $table->string('X', 191)->nullable();
            $table->string('linkedin', 191)->nullable();
            $table->longText('terms_and_conditions');
            $table->longText('privacy_policy');
            $table
            ->foreignId('created_by')
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
        Schema::dropIfExists('settings');
    }
};
