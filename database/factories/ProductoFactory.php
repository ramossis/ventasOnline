<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria_id'=>Categoria::all()->random()->id,
            'nombre'=>$this->faker->word(),
            'descripcion'=>$this->faker->randomElement(['
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga minima, ratione commodi sed deserunt eligendi illum. Quam, vero ratione necessitatibus distinctio, quasi quas expedita eius quibusdam omnis iure eos nemo!']),
            'precio'=>$this->faker->randomDigit(),
            'stock'=>$this->faker->randomDigit(),
            'oferta'=>$this->faker->randomDigit(),
            'fecha'=>$this->faker->date(),
            'imagen'=>$this->faker->text()
        ];
    }
}
