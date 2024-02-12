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
        Schema::create('work_responsibilities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('work_experience_id');
            $table->string('description')->nullable();

            $table->timestamps();

            $table->foreign('work_experience_id')->references('id')->on('work_experiences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_responsibilities');
    }
};
