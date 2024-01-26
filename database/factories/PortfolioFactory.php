<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
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
            'category_id' => rand(1, 5),
            'image' => $this->faker->imageUrl(425, 425),
            'caption_image' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'sub_title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'keywords' => $this->faker->sentence(),
            'link' => $this->faker->url(),
        ];
    }
}
