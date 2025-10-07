<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('therapy_addons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('therapy_id');
            $table->unsignedBigInteger('addon_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('therapy_id')
                  ->references('id')->on('therapies')
                  ->onDelete('cascade');

            $table->foreign('addon_id')
                  ->references('id')->on('product_addons')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('therapy_addons');
    }
};
