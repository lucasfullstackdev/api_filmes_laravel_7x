<?php

use Illuminate\Database\Seeder;
use App\Models\Filme;
use App\Models\Ator;
use App\Models\FilmeAtor;

class FilmeAtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = Filme::all();
        $atores = Ator::all();
        
        foreach ($atores as $ator) {
            FilmeAtor::create([
                "filme_id" => $filmes->random()->id,
                "ator_id" => $atores->random()->id
            ]);
        }
    }
}
