<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
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
            'title' => $this->faker->title,
            'Brief' => $this->faker->title,
            'description' => $this->faker->text,

        ];
    }
}
