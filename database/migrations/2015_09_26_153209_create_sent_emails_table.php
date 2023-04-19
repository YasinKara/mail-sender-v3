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
        Schema::create('sent_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('users');
            $table->foreignId('platform_id')
                ->nullable()
                ->constrained('platforms');
            $table->foreignId('signature_id')
                ->nullable()
                ->constrained('signatures');

            $table->string('mail_code', 50)->nullable();
            $table->string('customer_email', 300);
            $table->string('customer_name', 300)->nullable();
            $table->string('customer_gender', 50);
            $table->string('package_name', 100)->nullable();


            $table->string('company_name', 255)->nullable();
            $table->string('first_phone_number', 20)->nullable();
            $table->string('second_phone_number', 20)->nullable();

            $table->boolean('approval')->default(false);
            $table->timestamp('approval_date')->nullable();

            $table->integer('installment')->default(1);
            $table->integer('comment_count')->default(0);
            $table->decimal('comment_per_price', 15, 2)->default(0);
            $table->decimal('package_price', 15, 2)->default(0);

            $table->boolean('is_switzerland')->default(false);

            $table->string('profile_link', 5000)->nullable();
            $table->mediumText('sent_email_html')->nullable();

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
        Schema::dropIfExists('sent_emails');
    }
};
