<?php

namespace Database\Factories;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email(),
            'ruc' => $this->faker->randomDigit(0,9),
            'phone' => $this->faker->phoneNumber(),
            'igv' => $this->faker->randomDigit(0,9),
            'address' => $this->faker->address(),
            'image' => $this->faker->name,
            'branch_id' => Branch::all()->random()->id,
        ];
    }
}
