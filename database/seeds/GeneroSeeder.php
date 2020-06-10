<?php

use Illuminate\Database\Seeder;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            [ 'ds_genero' => 'Ação' ],
            [ 'ds_genero' => 'Animação' ],
            [ 'ds_genero' => 'Aventura' ],
            [ 'ds_genero' => 'Cinema de arte' ],
            [ 'ds_genero' => 'Chanchada' ],
            [ 'ds_genero' => 'Comédia' ],
            [ 'ds_genero' => 'Comédia Romântica' ],
            [ 'ds_genero' => 'Comédia Dramática' ],
            [ 'ds_genero' => 'Comédia de Ação' ],
            [ 'ds_genero' => 'Dança' ],
            [ 'ds_genero' => 'Documentário' ],
            [ 'ds_genero' => 'Docuficção' ],
            [ 'ds_genero' => 'Drama' ],
            [ 'ds_genero' => 'Espionagem' ],
            [ 'ds_genero' => 'Faroeste' ],
            [ 'ds_genero' => 'Fantasia Científica' ],
            [ 'ds_genero' => 'Ficção Científica' ],
            [ 'ds_genero' => 'Filmes de Guerra' ],
            [ 'ds_genero' => 'Musical' ],
            [ 'ds_genero' => 'Filme Policial' ],
            [ 'ds_genero' => 'Romance' ],
            [ 'ds_genero' => 'Seriado' ],
            [ 'ds_genero' => 'Suspense' ],
            [ 'ds_genero' => 'Terror' ]
        ];

        foreach ($generos as $genero) {
            Genero::create($genero);            
        }
    }
}
