<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leerling>
 */
class LeerlingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    return [
        'voornaam' => $this->faker->firstName,
        'achternaam' => $this->faker->lastName,
        'email' => $this->faker->unique()->safeEmail,
        'telefoonnummer' => $this->faker->phoneNumber,
        'geboortedatum' => $this->faker->date('Y-m-d', '-18 years'),
    ];
}

}
