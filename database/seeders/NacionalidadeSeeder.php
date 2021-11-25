<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nacionalidade;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nacionalidade::create(['descricao' => 'Brasil']);
        Nacionalidade::create(['descricao' => 'Argentina']);
        Nacionalidade::create(['descricao' => 'Chile']);
        Nacionalidade::create(['descricao' => 'Paraguay']); 
        Nacionalidade::create(['descricao' => 'Espanha']); 
        Nacionalidade::create(['descricao' => 'Canada']); 
        Nacionalidade::create(['descricao' => 'Bolivia']); 
        Nacionalidade::create(['descricao' => 'Uruguay']); 
        Nacionalidade::create(['descricao' => 'Italia']); 
        Nacionalidade::create(['descricao' => 'Peru']); 
        Nacionalidade::create(['descricao' => 'Equador']); 
        Nacionalidade::create(['descricao' => 'Polonia']); 
       }
}
