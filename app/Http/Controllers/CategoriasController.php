<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Database\QueryException;
use PDOException;

class CategoriasController extends Controller
{
	public function index(Request $filtro)
	{
		$filtragem = $filtro->get('desc_filtro');

        if ($filtragem == null) 
    		$categorias = Categoria::orderBy('nome')->paginate(5);
        else
            $categorias = Categoria::where('nome', 'like', '%'.$filtragem.'%')->orderBy("nome")->paginate(5);
		return view('categorias.index', ['categorias'=>$categorias, 'filtro'=>$filtro->get('desc_filtro')]);
	}

	public function create()
	{
		$categorias = Categoria::all();
		return view('categorias.create');
	}

	public function store(CategoriaRequest $request)
	{
		$novo_categoria = $request->all();
		Categoria::create($novo_categoria);
		return redirect()->route('categorias');
	}

	public function destroy($id)
	{
		try {
			Categoria::find($id)->delete();
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
		$categoria = Categoria::find($id);
		return view('categorias.edit', compact('categoria'));
	}

	public function update(CategoriaRequest $request, $id)
	{
		Categoria::find($id)->update($request->all());
		return redirect()->route('categorias');
	}
}
