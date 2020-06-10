<?php

use Illuminate\Database\Seeder;

use App\Models\Filme;
use App\Models\Diretor;
use App\Models\FilmeDiretor;

class FilmeDiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = Filme::all();
        $diretores = Diretor::all();

        foreach ($filmes as $filme) {
            FilmeDiretor::create([
                "filme_id" => $filmes->random()->id,
                "diretor_id" => $diretores->random()->id
            ]);
        }
    }
}
