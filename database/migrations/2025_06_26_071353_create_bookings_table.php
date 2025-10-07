<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ensures foreign key support

            $table->id();

            // product_id foreign key
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');

            // therapy_id foreign key
            $table->foreignId('therapy_id')->nullable()->constrained('therapies')->onDelete('cascade');

            $table->date('date')->nullable();
            $table->string('time_slot')->nullable();
            $table->json('addons')->nullable();
            $table->decimal('total_price', 8, 2)->nullable();
            $table->timestamps();

            // guest_id foreign key
            $table->foreignId('guest_id')->nullable()->constrained('guests')->onDelete('cascade');

            // shop_hour_slot_id foreign key
            $table->unsignedBigInteger('shop_hour_slot_id')->nullable();
            $table->foreign('shop_hour_slot_id')->references('id')->on('shop_hour_slots')->onDelete('set null');

            $table->string('broswer_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
