<?php

use Illuminate\Database\Seeder;
use App\Models\Filme;
use App\Models\Genero;
use App\Models\FilmeGenero;

class FilmeGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = Filme::all();
        $generos = Genero::all();

        foreach ($filmes as $filme) {
            FilmeGenero::create([
                'filme_id' => $filmes->random()->id,
                'genero_id' => $generos->random()->id
            ]);
        }
    }
}
