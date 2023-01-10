<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'location' => $this->faker->address,
            'Brief_description' => $this->faker->realText,
            'description' => $this->faker->text,
            'completed_time' => $this->faker->dateTime,

        ];
    }
}
