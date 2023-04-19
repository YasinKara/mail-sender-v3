<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('referral_email_id')
                ->nullable()
                ->constrained('sent_emails')
                ->nullOnDelete();
            $table->foreignId('referral_user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('name', 150)->nullable();
            $table->string('gender', 50)->nullable();

            $table->string('email', 255)->unique();
            $table->string('email_second', 255)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('phone_number_second', 20)->nullable();

            $table->string('note', 255)->nullable();

            // TODO : Buradaki alanlar, addressler tablosuna taşınacak.
            $table->string('company', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('address', 300)->nullable();

            $table->boolean('disabled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};


