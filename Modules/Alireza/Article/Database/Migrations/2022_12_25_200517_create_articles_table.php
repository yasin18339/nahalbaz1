<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('CASCADE');
            $table->foreignId('category_id')->constrained('categories')->onDelete('CASCADE');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('time_to_read');
            $table->string('imageName');
            $table->string('imagePath');
            $table->string('score')->default(0);
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', Alireza\Article\Models\Article::$statuses);
            $table->enum('type', Alireza\Article\Models\Article::$types)->default(Alireza\Article\Models\Article::TYPE_NORMAL);
            $table->longText('body');
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
        Schema::dropIfExists('articles');
    }
}
