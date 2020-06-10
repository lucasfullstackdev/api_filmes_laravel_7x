<?php

use Illuminate\Database\Seeder;
use App\Models\Ator;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atores = [
            ['nm_ator' => 'Leonardo DiCaprio'],
            ['nm_ator' => 'Will Smith'],
            ['nm_ator' => 'Tom Hanks'],
            ['nm_ator' => 'Marlon Brando'],
            ['nm_ator' => 'Brad Pitt'],
            ['nm_ator' => 'Tom Cruise'],
            ['nm_ator' => 'Denzel Washington'],
            ['nm_ator' => 'Robert De Niro'],
            ['nm_ator' => 'Anthony Hopkins'],
            ['nm_ator' => 'Morgan Freeman'],
            ['nm_ator' => 'George Clooney'],
            ['nm_ator' => 'Robert Downey Jr.'],
            ['nm_ator' => 'Harrison Ford'],
            ['nm_ator' => 'Al Pacino'],
            ['nm_ator' => 'Clint Eastwood'],
            ['nm_ator' => 'Johnny Depp'],
            ['nm_ator' => 'Chris Evans'],
            ['nm_ator' => 'Adam Sandler'],
            ['nm_ator' => 'Sylvester Stallone'],
            ['nm_ator' => 'Jack Nicholson'],
            ['nm_ator' => 'John Travolta'],
            ['nm_ator' => 'Matt Damon'],
            ['nm_ator' => 'Angelina Jolie'],
            ['nm_ator' => 'Mel Gibson'],
            ['nm_ator' => 'Jim Carrey'],
            ['nm_ator' => 'Dwayne Johnson'],
            ['nm_ator' => 'Meryl Streep'],
            ['nm_ator' => 'Samuel L. Jackson'],
            ['nm_ator' => 'Bruce Willis'],
            ['nm_ator' => 'Nicolas Cage'],
            ['nm_ator' => 'Robin Williams'],
            ['nm_ator' => 'Chris Hemsworth'],
            ['nm_ator' => 'Chris Pratt'],
            ['nm_ator' => 'Paul Rudd'],
            ['nm_ator' => 'Benedict Cumberbatch'],
            ['nm_ator' => 'Tom Holland'],
            ['nm_ator' => 'Chadwick Boseman'],
            ['nm_ator' => 'Brie Larson'],
            ['nm_ator' => 'Scarlett Johansson'],
            ['nm_ator' => 'Jeremy Renner'],
            ['nm_ator' => 'Mark Ruffalo'],
            ['nm_ator' => 'Sebastian Stan'],
            ['nm_ator' => 'Anthony Mackie'],
            ['nm_ator' => 'Elizabeth Olsen'],
            ['nm_ator' => 'Don Cheadle'],
            ['nm_ator' => 'Tom Hiddleston']
        ];

        foreach ($atores as $ator) {
            Ator::create($ator);
        }
    }
}
