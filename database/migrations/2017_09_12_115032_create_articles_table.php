<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->text('content');
            $table->string('token')->nullable();
            $table->boolean('top')->default(0);
            $table->integer('category_id')->references('id')->on('article_categories')->onDelete('cascade')->default(1);
            $table->integer('type_id')->references('id')->on('article_types')->onDelete('cascade')->default(1);
            $table->tinyInteger('published')->references('id')->on('article_statuses')->default(1);
            $table->date('publish_date')->nullable();
            $table->date('close_date')->nullable();
            $table->integer('template_id')->default(1);
            $table->integer('status_id')->default(1);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->integer('created_by')->references('id')->on('users')->onDelete('cascade');
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
