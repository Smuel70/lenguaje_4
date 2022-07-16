<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{ 
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreCliente' => $this->faker->name(),
            'telefonoCliente'=>$this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'ciudadCliente' =>$this->faker->city(),
        ];
    }
}
