<?php

declare(strict_types=1);

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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('caption_image');
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('keywords');
            $table->string('link');

            $table->foreignId('user_id')->constrained();
            $table->foreign('category_id')->references('id')->on('portfolio_categories')->onDelete('cascade');
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
        Schema::dropIfExists('portfolios');
    }
};
