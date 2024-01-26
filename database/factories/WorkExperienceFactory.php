<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkExperience>
 */
class WorkExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position' => $this->faker->word,
            'company_name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'url' => $this->faker->url,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'user_id' => 1,
        ];
    }
}
