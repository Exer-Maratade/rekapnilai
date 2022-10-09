<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gadik>
 */
class GadikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
  
            'Name' => fake()->Name(),
            'Nrp' => fake()->Nrp()->unique(),
            'Pangkat' => fake()->Pangkat(),
            'Jabatan' => fake()->Jabatan(),
  
        ];
    }
}
