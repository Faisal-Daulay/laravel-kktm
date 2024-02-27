<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'fullname' => fake()->name(),
            'matric_number' => fake()->numerify('MN-#####'),
            'ic' => fake()->numerify('############'),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'semester' => fake()->biasedNumberBetween(1, 10),
            'program_of_study' => fake()->randomElement(['Laboratory', 'Diagnostic', 'Therapeutic', 'ICT', 'Radiology']),
            'phone_number' => fake()->phoneNumber(),
            'religion' => fake()->randomElement(['Islam', 'Non Islam']),
            'races' => fake()->randomElement(['Melayu', 'Cina', 'India']),
            'date_of_birth' => fake()->dateTimeBetween('-27 years', '-18 years'),
            'birthplace' => fake()->address(),
            'gender' => fake()->randomElement(['male', 'female']),
            'age' => fake()->biasedNumberBetween(20, 30)
        ];
    }
}
