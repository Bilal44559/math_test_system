<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagecontentTable extends Migration
{
    public function up()
    {
        Schema::create('pagecontent', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('paragraphs')->nullable();
            $table->json('bullet_points')->nullable();
            $table->json('images')->nullable();

            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pagecontent');
    }
}
