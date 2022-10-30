<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_projects', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('keyword_sentence')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->string('link_text')->nullable();
            $table->string('testimonial')->nullable();
            $table->string('testimonial_author')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('featured_projects');
    }
}
