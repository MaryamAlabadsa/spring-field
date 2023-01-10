<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sender_name' => $this->faker->name,
            'comment_text' => $this->faker->text,
            'is_shown' => $this->faker->boolean,
            'project_id' => $this->faker->numberBetween(1,3),


        ];
    }
}
