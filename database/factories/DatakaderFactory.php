<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DatakaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    //  id name photo status komisariat jurusan email angkatan number_phone created_at updated_at
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'photo' => $this->faker->unique()->safeEmail(),
            'status' => $this->faker->randomLetter(8),
            'komisariat' => $this->faker->randomLetter(8),
            'jurusan' => $this->faker->randomLetter(8),
            'email' => $this->faker->unique()->safeEmail(),
            'angkatan' => $this->faker->randomDigit(4),
            'number_phone' => $this->faker->randomDigit(12),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
