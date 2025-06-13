<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brandsAndModels = [
            'Tesla' => ['Model S', 'Model 3', 'Model X', 'Model Y', 'Cybertruck'],
            'BMW' => ['1 Series', '3 Series', '5 Series', 'X3', 'X5', 'i3', 'i4'],
            'Audi' => ['A1', 'A3', 'A4', 'A6', 'Q3', 'Q5', 'e-tron', 'RS6'],
            'Toyota' => ['Corolla', 'Yaris', 'Auris', 'RAV4', 'C-HR', 'Prius', 'Hilux'],
        ];

        $brand = $this->faker->randomElement(array_keys($brandsAndModels));
        $model = $this->faker->randomElement($brandsAndModels[$brand]);

        return [
            'brand' => $brand,
            'model' => $model,
            'license_plate' => $this->generateDutchLicensePlate(),
            'fuel_type' => $this->faker->randomElement(['electric', 'gasoline']),
            'is_active' => $this->faker->boolean(90),
            'note' => $this->faker->optional()->sentence(),
        ];
    }

    private function generateDutchLicensePlate(): string
    {
        $formats = [
            '??-##-##',
            '##-##-??',
            '##-??-##',
            '??-##-??',
            '??-??-##',
            '##-??-??',
            '??-###-?',  // modern
        ];

        $format = $this->faker->randomElement($formats);
        return strtoupper($this->faker->bothify($format));
    }
}
