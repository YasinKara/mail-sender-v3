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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->constrained('orders')
                ->onDelete('cascade');

            $table->foreignId('invoice_id')
                ->nullable()
                ->constrained('invoices')
                ->onDelete('cascade');

            $table->string('owner', 255)->nullable();
            $table->string('content', 1500)->nullable();


            $table->boolean('lawyer_took_action')->default(0);
            $table->timestamp('removed_date')->nullable();

            $table->string('image', 1000)->nullable();
            $table->string('note', 500)->nullable();

            // TODO : Bu kolon güncellenecek
            $table->boolean('status')->default(0);  // (0 && laywer_took_action 0: Beklemede), (0 && laywer_took_action 1: İşlemde), (1: Silindi), (2: Faturalandırıldı (Onaylandı)), (3: Reddedildi),
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
        Schema::dropIfExists('comments');
    }
};
