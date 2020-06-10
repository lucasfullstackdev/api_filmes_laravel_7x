<?php

use Illuminate\Database\Seeder;
use App\Models\Diretor;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diretores = [
            ['nm_diretor' => 'Steven Spielberg'],
            ['nm_diretor' => 'Martin Scorsese'],
            ['nm_diretor' => 'James Cameron'],
            ['nm_diretor' => 'Quentin Tarantino'],
            ['nm_diretor' => 'Christopher Nolan'],
            ['nm_diretor' => 'Woody Allen'],
            ['nm_diretor' => 'George Lucas'],
            ['nm_diretor' => 'Tim Burton'],
            ['nm_diretor' => 'David Fincher'],
            ['nm_diretor' => 'Alfred Hitchcock'],
            ['nm_diretor' => 'Clint Eastwood'],
            ['nm_diretor' => 'Peter Jackson'],
            ['nm_diretor' => 'Robert De Niro'],
            ['nm_diretor' => 'Roman Polanski'],
            ['nm_diretor' => 'Guillermo Del Toro'],
            ['nm_diretor' => 'Sam Mendes'],
            ['nm_diretor' => 'Zack Snyder']
        ];

        foreach ($diretores as $diretor) {
            Diretor::create($diretor);
        }
    }
}
