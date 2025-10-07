<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pillars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->text('short_description')->nullable();
            $table->string('background_image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pillars');
    }
};
