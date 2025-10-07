<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('tagline')->nullable();
            $table->string('type')->nullable();
            $table->decimal('monthly_price', 8, 2)->nullable();
            $table->decimal('annual_price', 8, 2)->nullable();
            $table->decimal('monthly_discount', 8, 2)->nullable();
            $table->decimal('annual_discount', 8, 2)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
