<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl,
            'name' => $this->faker->name,
            'job_description' => $this->faker->name,
            'bio' => $this->faker->realText(300),
        ];
    }
}
