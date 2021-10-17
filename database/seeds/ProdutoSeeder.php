<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create(['nome' => 'Camiseta','categoria_id'=>'1']);
        Produto::create(['nome' => 'Calsa','categoria_id'=>'2']);
        Produto::create(['nome' => 'Calsao','categoria_id'=>'1']);
        Produto::create(['nome' => 'Pijama','categoria_id'=>'3']);
        Produto::create(['nome' => 'Bone','categoria_id'=>'1']);
        Produto::create(['nome' => 'Jaqueta','categoria_id'=>'1']);
        Produto::create(['nome' => 'Tenis','categoria_id'=>'4']);
        Produto::create(['nome' => 'Moleton','categoria_id'=>'1']);
        Produto::create(['nome' => 'Meia Rosa','categoria_id'=>'2']);
    }
}
