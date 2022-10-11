<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => substr(fake()->name(), 0, 100),
            'dpi' => Str::random(13),
            'address' => substr(fake()->address(), 0, 200),
            'telephone' => substr(fake()->phoneNumber(), 0, 20),
            'department' => substr(fake()->country(), 0, 50),
            'municipality' => substr(fake()->city(), 0, 50),
            'zone' => "Zona " . random_int(1, 20),
            'birthdate' => fake()->date(),
            'gender' => ["M", "F", "W"][random_int(0, 2)],
            'career' => substr(fake()->jobTitle(), 0, 100),
            'faculty' => substr(fake()->jobTitle(), 0, 100),
        ];
    }
}
