<?php

namespace Database\Factories;

use App\Models\Poste;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PosteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Poste::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'carte_graphique' =>$this->faker->name(),
            'processeur' =>$this->faker->name(),
            'carte_mere' =>$this->faker->name(),
            'ram' =>$this->faker->name(),
            'memoire' =>$this->faker->name(),
            'type' => true
               ];
    }
}

