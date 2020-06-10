<?php

use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmes = [
            [
                'titulo' => 'Avengers: Endgame',
                'dt_lancamento' => '2019-04-22',
                'classificacao_id' => 1,
                'duracao' => '181'
            ],
            [
                'titulo' => 'Avatar',
                'dt_lancamento' => '2009-12-18',
                'classificacao_id' => 2,
                'duracao' => '162'
            ],
            [
                'titulo' => 'Titanic',
                'dt_lancamento' => '1997-11-19',
                'classificacao_id' => 3,
                'duracao' => '195'
            ],
            [
                'titulo' => 'Star Wars: The Force Awakens',
                'dt_lancamento' => '2015-12-18',
                'classificacao_id' => 4,
                'duracao' => '135'
            ],
            [
                'titulo' => 'Avengers: Infinity War',
                'dt_lancamento' => '2018-04-27',
                'classificacao_id' => 5,
                'duracao' => '149'
            ],
            [
                'titulo' => 'Jurassic World',
                'dt_lancamento' => '2015-06-12',
                'classificacao_id' => 6,
                'duracao' => '124'
            ],
            [
                'titulo' => 'Marvel\'s The Avengers',
                'dt_lancamento' => '2012-05-04',
                'classificacao_id' => 1,
                'duracao' => '143'
            ],
            [
                'titulo' => 'Avengers: Age of Ultron',
                'dt_lancamento' => '2015-04-01',
                'classificacao_id' => 2,
                'duracao' => '141'
            ],
            [
                'titulo' => 'Black Panther',
                'dt_lancamento' => '2018-02-16',
                'classificacao_id' => 3,
                'duracao' => '134'
            ],
            [
                'titulo' => 'Harry Potter and the Deathly Hallows - Part 2',
                'dt_lancamento' => '2011-07-15',
                'classificacao_id' => 4,
                'duracao' => '130'
            ],
            [
                'titulo' => 'Star Wars: The Last Jedi',
                'dt_lancamento' => '2017-12-15',
                'classificacao_id' => 5,
                'duracao' => '152'
            ],
            [
                'titulo' => 'Iron Man 3',
                'dt_lancamento' => '2013-05-03',
                'classificacao_id' => 6,
                'duracao' => '131'
            ],
            [
                'titulo' => 'Captain America: Civil War',
                'dt_lancamento' => '2016-05-06',
                'classificacao_id' => 1,
                'duracao' => '147'
            ],
            [
                'titulo' => 'Aquaman',
                'dt_lancamento' => '2018-12-21',
                'classificacao_id' => 2,
                'duracao' => '143'
            ],
            [
                'titulo' => 'Spider-Man: Far From Home',
                'dt_lancamento' => '2019-07-02',
                'classificacao_id' => 3,
                'duracao' => '129'
            ],
            [
                'titulo' => 'Captain Marvel',
                'dt_lancamento' => '2019-03-08',
                'classificacao_id' => 4,
                'duracao' => '124'
            ],
            [
                'titulo' => 'Transformers: Dark of the Moon',
                'dt_lancamento' => '2011-02-02',
                'classificacao_id' => 5,
                'duracao' => '157'
            ],
            [
                'titulo' => 'Skyfall',
                'dt_lancamento' => '2012-11-09',
                'classificacao_id' => 6,
                'duracao' => '143'
            ],
            [
                'titulo' => 'Transformers: Age of Extinction',
                'dt_lancamento' => '2014-07-27',
                'classificacao_id' => 1,
                'duracao' => '165'
            ],
            [
                'titulo' => 'The Dark Knight Rises',
                'dt_lancamento' => '2012-07-27',
                'classificacao_id' => 2,
                'duracao' => '165'
            ],
            [
                'titulo' => 'Joker',
                'dt_lancamento' => '2019-10-04',
                'classificacao_id' => 3,
                'duracao' => '122'
            ],
            [
                'titulo' => 'Pirates of the Caribbean: Dead Man\'s Chest',
                'dt_lancamento' => '2006-07-07',
                'classificacao_id' => 4,
                'duracao' => '151'
            ],
            [
                'titulo' => 'Aladdin',
                'dt_lancamento' => '2019-05-24',
                'classificacao_id' => 5,
                'duracao' => '128'
            ],
            [
                'titulo' => 'The Dark Knight',
                'dt_lancamento' => '2008-07-18',
                'classificacao_id' => 6,
                'duracao' => '152'
            ],
            [
                'titulo' => 'Spider-Man 3',
                'dt_lancamento' => '2007-05-03',
                'classificacao_id' => 1,
                'duracao' => '139'
            ],
            [
                'titulo' => 'Bohemian Rhapsody',
                'dt_lancamento' => '2018-11-02',
                'classificacao_id' => 2,
                'duracao' => '134'
            ],
            [
                'titulo' => 'Spectre',
                'dt_lancamento' => '2015-11-06',
                'classificacao_id' => 3,
                'duracao' => '148'
            ],
            [
                'titulo' => 'Spider-Man Homecoming',
                'dt_lancamento' => '2017-07-07',
                'classificacao_id' => 4,
                'duracao' => '133'
            ],
            [
                'titulo' => 'Batman v Superman: Dawn of Justice',
                'dt_lancamento' => '2016-03-25',
                'classificacao_id' => 5,
                'duracao' => '151'
            ],
            [
                'titulo' => 'Inception',
                'dt_lancamento' => '2010-07-16',
                'classificacao_id' => 6,
                'duracao' => '148'
            ],
            [
                'titulo' => 'Independence Day',
                'dt_lancamento' => '1996-07-02',
                'classificacao_id' => 1,
                'duracao' => '145'
            ],
            [
                'titulo' => '2012',
                'dt_lancamento' => '2009-11-13',
                'classificacao_id' => 2,
                'duracao' => '158'
            ],
            [
                'titulo' => 'Deadpool',
                'dt_lancamento' => '2016-02-11',
                'classificacao_id' => 3,
                'duracao' => '108'
            ],
            [
                'titulo' => 'Guardians of the Galaxy',
                'dt_lancamento' => '2014-08-01',
                'classificacao_id' => 4,
                'duracao' => '122'
            ]
        ];

        foreach ($filmes as $filme) {
            Filme::create($filme);
        }
    }
}
