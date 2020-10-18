<?php

namespace Database\Factories;

use App\Models\Conta;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'saldo' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10000),
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
