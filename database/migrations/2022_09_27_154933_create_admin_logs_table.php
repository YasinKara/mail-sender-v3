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
        // TODO : Log tablosu teke düşürülecek
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');

            $table->string('log_type', 200)->nullable();
            $table->string('log_title', 300)->nullable();
            $table->string('log_message', 1000)->nullable();
            $table->string('detail_message', 10000)->nullable();

            $table->string('file', 150)->nullable();
            $table->string('line', 50)->nullable();
            $table->string('code', 150)->nullable();
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
        Schema::dropIfExists('admin_logs');
    }
};
