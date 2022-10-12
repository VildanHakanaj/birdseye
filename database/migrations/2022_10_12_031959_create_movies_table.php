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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("title")->index();
            $table->string("thumbnail_trending_small", 191)->nullable();
            $table->string("thumbnail_trending_large", 191)->nullable();
            $table->string("thumbnail_regular_small", 191)->nullable();
            $table->string("thumbnail_regular_medium", 191)->nullable();
            $table->string("thumbnail_regular_large", 191)->nullable();
            $table->string("year");
            $table->unsignedInteger("category_id");
            $table->string("rating");
            $table->boolean("is_trending")->default(false);
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
        Schema::dropIfExists('movies');
    }
};
