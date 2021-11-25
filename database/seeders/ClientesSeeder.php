<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(['nome'=>'Pedro','telefone'=>'05499654478','nacionalidade_id'=>'1']);
        Cliente::create(['nome'=>'Paulo','telefone'=>'05599654875','nacionalidade_id'=>'2']);
        Cliente::create(['nome'=>'Gabriel','telefone'=>'05598584135','nacionalidade_id'=>'3']);
        Cliente::create(['nome'=>'Roger','telefone'=>'0413545258','nacionalidade_id'=>'4']);
        Cliente::create(['nome'=>'Vitinho','telefone'=>'0303545258','nacionalidade_id'=>'5']);
        Cliente::create(['nome'=>'Marcos','telefone'=>'01185456895','nacionalidade_id'=>'6']);
        Cliente::create(['nome'=>'Regina','telefone'=>'07745875636','nacionalidade_id'=>'7']);
        Cliente::create(['nome'=>'Edinho','telefone'=>'06845684525','nacionalidade_id'=>'8']);
        Cliente::create(['nome'=>'Liu','telefone'=>'06745658785','nacionalidade_id'=>'9']);
        Cliente::create(['nome'=>'Daniele','telefone'=>'04564556445','nacionalidade_id'=>'10']);
        Cliente::create(['nome'=>'Alex','telefone'=>'02298743597','nacionalidade_id'=>'11']);
        Cliente::create(['nome'=>'Ariel','telefone'=>'07785654254','nacionalidade_id'=>'12']);

    }
}
