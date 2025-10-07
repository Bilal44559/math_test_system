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
        Schema::table('booking_details', function (Blueprint $table) {
            $table->unsignedBigInteger('shop_hour_slot_id')->nullable();
            $table->foreign('shop_hour_slot_id')->references('id')->on('shop_hour_slots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('booking_details', function (Blueprint $table) {
            $table->dropForeign(['shop_hour_slot_id']);
            $table->dropColumn('shop_hour_slot_id');
        });
    }
};
