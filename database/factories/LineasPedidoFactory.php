<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;
use App\Models\Producto;
class LineasPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pedido_id'=>Pedido::all()->random()->id,
            'producto_id'=>Producto::all()->random()->id,
            'unidades'=>$this->faker->randomDigitNotNull()
        ];
    }
}
