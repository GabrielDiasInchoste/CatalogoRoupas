<?php

namespace Database\Seeders;

use App\Models\Sku;
use Illuminate\Database\Seeder;

class SkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sku::create(['nome'=>'Camiseta Preta','quantidade'=>'10','preco'=>'10.99','produto_id'=>'1']);
        Sku::create(['nome'=>'Calsa Jeans','quantidade'=>'100','preco'=>'11.99','produto_id'=>'2']);
        Sku::create(['nome'=>'Calsao Azul','quantidade'=>'5','preco'=>'44.99','produto_id'=>'3']);
        Sku::create(['nome'=>'Pijama Listrado','quantidade'=>'14','preco'=>'78.99','produto_id'=>'4']);
        Sku::create(['nome'=>'Bone Preto','quantidade'=>'25','preco'=>'45.99','produto_id'=>'5']);
        Sku::create(['nome'=>'Jaqueta Preta','quantidade'=>'44','preco'=>'66.99','produto_id'=>'6']);
        Sku::create(['nome'=>'Tenis Vermelho','quantidade'=>'77','preco'=>'88.99','produto_id'=>'7']);
        Sku::create(['nome'=>'Moleton Preto','quantidade'=>'68','preco'=>'56.99','produto_id'=>'8']);
        Sku::create(['nome'=>'Meia Branca','quantidade'=>'45','preco'=>'5.99','produto_id'=>'9']);

    }
}
