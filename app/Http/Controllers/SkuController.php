<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SkuRequest;
use App\Models\Sku;
use Illuminate\Database\QueryException;
use PDOException;

class SkuController extends Controller
{
	public function index(Request $filtro)
	{
		$filtragem = $filtro->get('desc_filtro');

        if ($filtragem == null) 
    		$skus = Sku::orderBy('nome')->paginate(10);
        else
            $skus = Sku::where('nome', 'like', '%'.$filtragem.'%')->orderBy("nome")->paginate(10);
		return view('skus.index', ['skus'=>$skus, 'filtro'=>$filtro->get('desc_filtro')]);
	}

	public function create()
	{
		$skus = Sku::all();
		return view('skus.create');
	}

	public function store(SkuRequest $request)
	{
		$novo_sku = $request->all();
		Sku::create($novo_sku);
		return redirect()->route('skus');
	}

	public function destroy($id)
	{
		try {
			Sku::find($id)->delete();
			$ret = array('status' => 200, 'msg' => "null");
		} catch (QueryException $e) {
			$ret = array('status' => 500, 'msg' => $e->getMessage());
		} catch (PDOException $e) {
			$ret = array('status' => 500, 'msg' => $e->getMessage());
		}
		return $ret;
	}

	public function edit($id)
	{
		$sku = Sku::find($id);
		return view('skus.edit', compact('sku'));
	}

	public function update(SkuRequest $request, $id)
	{
		Sku::find($id)->update($request->all());
		return redirect()->route('skus');
	}
}
