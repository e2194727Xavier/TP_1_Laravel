<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
 * The name of the factory's corresponding model.
 *
 * @var string
 */
    protected $model = \App\Models\Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
                'address' => $this->faker->address,
                'phone' => $this->faker->phoneNumber,
                'email' => $this->faker->unique()->safeEmail(),
                'date_of_birth' => $this->faker->date('Y-m-d'),
                'ville_id' => Ville::all()->random()->id // Sélectionne aléatoirement un ID d'une instance de Ville existante dans la base de données.
            ];
    }
}


