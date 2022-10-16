<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'provincia'=>$this->faker->randomElement(['P. Dalence','Oruro']),
            'localidad'=>$this->faker->randomElement(['Oruro','Oruro']),
            'direccion'=>$this->faker->word(),
            'coste'=>$this->faker->randomDigit(),
            'estado'=>$this->faker->randomElement(['En Proceso','Entregado']),
            'fecha'=>$this->faker->date(),
            'hora'=>$this->faker->time()
        ];
    }
}
