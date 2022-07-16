<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

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
            'nombreProducto' => $this->faker->name(),
            'codigoProducto' => $this ->faker->ean8(),
            'precioProducto' => $this->faker->numberbetween(1, 1000),
            'cantidadProducto' => $this->faker->numberbetween(1, 100),
        ];
    }
}
