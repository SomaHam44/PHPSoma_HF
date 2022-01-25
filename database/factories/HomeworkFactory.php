<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'assignment_title' => $this->faker->name(),
            'url' => $this->faker->imageUrl(),
            'feedback' => $this->faker->sentences(1, true),
            'point' => $this->faker->numberBetween(1, 5),

            //
        ];
    }
}
