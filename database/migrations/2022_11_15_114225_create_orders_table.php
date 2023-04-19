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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')
                ->nullable()
                ->constrained('platforms')
                ->onDelete('SET NULL');

            $table->foreignId('referral_email_id')
                ->nullable()
                ->constrained('sent_emails')
                ->nullOnDelete();

            $table->foreignId('referral_user_id')
                ->constrained('users')
                ->onDelete('cascade');

            $table->foreignId('customer_id')
                ->constrained('customers')
                ->onDelete('cascade');



            $table->integer('comment_count');
            $table->decimal('comment_per_price', 10, 2);
            $table->decimal('order_price', 10, 2);

            $table->tinyInteger('installment')->default(1);

            $table->string('profile_url', 5000)->nullable();
            $table->string('note', 255)->nullable();
            $table->boolean('status')->default(0);  // 0: İşlemde, 1: Tamamlandı
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
        Schema::dropIfExists('orders');
    }
};
