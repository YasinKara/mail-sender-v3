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
        Schema::create('sent_email_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sent_email_id')
                ->constrained('sent_emails')
                ->cascadeOnDelete();

            $table->string('comment', 255)
                ->nullable();

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
        Schema::dropIfExists('sent_email_comments');
    }
};
