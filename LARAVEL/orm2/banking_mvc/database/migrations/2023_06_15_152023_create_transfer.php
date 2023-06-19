<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->bigInteger('fees');     // phí 5%, 10%
            $table->double('fees_amount');
            $table->double('transaction_amount');
            $table->double('transfer_amount');

            $table->bigInteger('recipient_id')->unsigned();
            $table->foreign('recipient_id')->references('id')->on('customers')->onDelete('cascade');
            $table->bigInteger('sender_id')->unsigned();;
            $table->foreign('sender_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
