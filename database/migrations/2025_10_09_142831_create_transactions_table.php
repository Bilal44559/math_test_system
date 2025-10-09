<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->string('stripe_payment_id')->unique();
            $table->string('stripe_payment_method')->nullable();
            $table->integer('amount'); // amount in cents
            $table->string('currency', 10)->default('cad');
            $table->string('status')->default('succeeded');
            $table->text('description')->nullable();
            $table->string('receipt_email')->nullable();
            $table->json('stripe_response')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
