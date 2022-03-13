<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeaturedProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(800, 600),
            'category' => $this->faker->sentence,
            'title' => $this->faker->sentence,
            'keyword_sentence' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'link_text' => $this->faker->sentence,
            'testimonial' => $this->faker->paragraph,
            'testimonial_author' => $this->faker->name,
            'user_id'=> 1
        ];
    }
}
