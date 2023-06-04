<?php

namespace Database\Seeders;

use Database\Factories\EtudiantFactory;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class EtudiantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Etudiant::factory(100)->create();
    }
}
