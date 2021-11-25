<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sku;
use App\Models\Venda;
use App\Models\VendasSku;
use Illuminate\Database\QueryException;
use PDOException;

class VendasController extends Controller
{
    public function create()
    {
        $skus = Sku::all();
        return view('vendas.create', compact('skus'));
    }

    public function store(Request $request)
    {
        $venda = Venda::create([
            'nome' => $request->get('nome'),
            'cliente_id' => $request->get('cliente_id')
        ]);

        $skus = $request->skus;
        foreach ($skus as $a => $value) {
            VendasSku::create([
                'venda_id' => $venda->id,
                'sku_id' => $skus[$a]
            ]);
        }

        return redirect()->route('vendas');
    }

    public function index(Request $filtro)
    {
        $filtragem = $filtro->get('desc_filtro');

        if ($filtragem == null)
            $vendas = Venda::orderBy('nome')->paginate(10);
        else
            $vendas = Venda::where('nome', 'like', '%' . $filtragem . '%')->orderBy("nome")->paginate(10);
        return view('vendas.index', ['vendas' => $vendas, 'filtro' => $filtro->get('desc_filtro')]);
    }

    public function destroy($id)
    {
        try {
            VendasSku::where('venda_id',  $id)->delete();
            Venda::find($id)->delete();

            $ret = array('status' => 200, 'msg' => "null");
        } catch (QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
    }
}
