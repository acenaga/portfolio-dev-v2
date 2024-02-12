<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'institute_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'url' => $this->faker->url,
            'start_date' => $this->faker->year,
            'end_date' => $this->faker->year,
            'user_id' => 1,
        ];
    }
}
