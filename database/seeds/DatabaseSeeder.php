<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(ClassificacaoSeeder::class);
        $this->call(DiretorSeeder::class);
        $this->call(AtorSeeder::class);
        $this->call(FilmeSeeder::class);
        $this->call(FilmeAtorSeeder::class);
        $this->call(FilmeDiretorSeeder::class);
    }
}
