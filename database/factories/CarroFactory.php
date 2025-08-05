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
    public function definition(): array
    {
        return [
            'cor' => $this->faker->safeColorName(),         // Ex: "azul"
            'modelo' => $this->faker->word(),               // Ex: "civic"
            'ano' => $this->faker->year(),                  // Ex: 2015
            'placa' => strtoupper($this->faker->bothify('???-####')), // Ex: "ABC-1234"
            'user_id' => User::factory(),                   // Cria um user e associa
        ];
    }
}
