<?php

namespace Database\Seeders;

use Database\Factories\VilleFactory;
use Illuminate\Database\Seeder;
use App\Models\Ville;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Ville::factory(15)->create();
    }
}
