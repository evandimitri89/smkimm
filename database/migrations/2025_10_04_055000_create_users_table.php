<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Individual
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->text('address')->nullable();
            $table->string('profile_picture')->nullable();

            // Student-specific
            $table->string('NISN')->unique()->nullable();
            $table->string('NIS')->unique()->nullable();

            // Relations
            $table->foreignId('class_id')->nullable()->constrained('classes')->onDelete('set null');
            $table->foreignId('major_id')->nullable()->constrained('majors')->onDelete('set null');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');

            // Auth
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
    }
};
