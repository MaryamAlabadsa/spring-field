<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->imageUrl,
            'original_name' => $this->faker->name,
            'mediaable_type' => 'project',
            'is_main' => $this->faker->boolean,
            'mediaable_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
