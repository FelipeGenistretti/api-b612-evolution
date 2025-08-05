<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static $modelos = [
    'Civic', 'Corolla', 'Golf', 'Fiesta', 'Onix', 'HB20', 'Ka', 'Uno', 'Polo', 'Focus',
    'Cruze', 'Sentra', 'Jetta', 'Camry', 'Versa', 'Astra', 'Fusion', 'Tucson', 'Sorento', 'Sportage',
    'Creta', 'HR-V', 'Compass', 'Renegade', 'Tracker', 'Ecosport', 'Kicks', 'Mobi', 'Argo', 'Pulse',
    'Sandero', 'Logan', 'Captur', 'Duster', 'EcoSport', 'Etios', 'Siena', 'Toro', 'Strada', 'Ranger',
    'Amarok', 'Frontier', 'Saveiro', 'S10', 'Hilux', 'Corolla Cross', 'T-Cross', 'Jeep Grand Cherokee', 'Cherokee', 'Wrangler'
    ];

    public function definition(): array
    {
        return [
            'cor' => $this->faker->safeColorName(),         // Ex: "azul"
            'modelo' => $this->faker->randomElement(self::$modelos),               // Ex: "civic"
            'ano' => $this->faker->year(),                  // Ex: 2015
            'placa' => strtoupper($this->faker->bothify('???-####')), // Ex: "ABC-1234"
            'user_id' => User::factory(),                   // Cria um user e associa
        ];
    }
}
