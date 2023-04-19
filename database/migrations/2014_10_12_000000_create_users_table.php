<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_leader_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('SET NULL');

            $table->foreignId('role_id')
                ->nullable()
                ->constrained('roles')
                ->onDelete('SET NULL');
            $table->string('role', 50)->default('agent'); // TODO Bu alan kaldırılacak

            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->decimal('commission', 4,2)->nullable(); // Added
            $table->string('password', 50);
            $table->boolean('is_passive')->default(false);

            // TODO : Buradaki alanlar platform sistemine geçirilecek.
            $table->string('signature_name', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('signature_title', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('signature_email', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('signature_phone', 25)->nullable(); // TODO Bu alan kaldırılacak

            $table->string('sternen_signature_name', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('sternen_signature_title', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('sternen_signature_email', 100)->nullable(); // TODO Bu alan kaldırılacak
            $table->string('sternen_signature_phone', 25)->nullable(); // TODO Bu alan kaldırılacak

            $table->string('platform', 255)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
