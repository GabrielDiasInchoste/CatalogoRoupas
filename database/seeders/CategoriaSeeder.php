<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nome' => 'Masculino']);
        Categoria::create(['nome' => 'Feminino']);
        Categoria::create(['nome' => 'Infaltil']);
        Categoria::create(['nome' => 'Calsado']);
    }
}
