<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientReview>
 */
class ClientReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'company' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'review' => $this->faker->paragraph,
            'image' => 'https://picsum.photos/150/150',
        ];
    }
}
