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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onDelete('cascade');

            $table->string('invoice_number', 50);

            $table->decimal('amount', 10, 2);

            $table->boolean('payment_status')->default(0);
            $table->decimal('payment_amount', 10, 2);

            $table->boolean('called')->default(0);
            $table->timestamp('called_date')->nullable();

            $table->boolean('is_sent')->default(0);
            $table->timestamp('sent_date')->nullable();

            $table->string('invoice_file', 1000)->nullable();
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
        Schema::dropIfExists('invoices');
    }
};
