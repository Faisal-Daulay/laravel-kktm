<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentParent>
 */
class StudentParentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fathers_name' => fake()->name(),
            'mothers_name' => fake()->name(),
            'fathers_phone_number' => fake()->phoneNumber(),
            'mothers_phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
