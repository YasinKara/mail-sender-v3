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
        Schema::create('invoice_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->cascadeOnDelete();
            $table->tinyInteger('stage')
                ->default(1);   // 0: 1. Hatırlatma,
                                      // 1: 2. Hatırlatma,
                                      // 2: 3. Hatırlatma
                                      // 3: 4. Hatırlatma
            $table->boolean('status')->default(0);
            $table->timestamp('send_notification_date')->nullable();
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
        Schema::dropIfExists('invoice_notifications');
    }
};
