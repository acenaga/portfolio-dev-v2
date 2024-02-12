<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->boolean('isActive')->default(false);
            $table->foreignId('user_id')->constrained();

            $table->timestamps();
        });

        DB::table('sections')->insert([
            ['name' => 'about', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'service', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'featured projects', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'skills', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'experiences', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'portfolio', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'blog', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'testimonial', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],
            ['name' => 'contact / footer', 'isActive' => false, 'user_id' => 1, 'created_at' => now()],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
