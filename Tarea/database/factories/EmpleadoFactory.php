<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreEmpleado' => $this->faker->name(),
            'telefonoEmpleado'=>$this->faker->phoneNumber(),
            'codigoEmpleado'=> $this ->faker->randomNumber(3, true),
            'ciudadEmpleado'=>$this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
