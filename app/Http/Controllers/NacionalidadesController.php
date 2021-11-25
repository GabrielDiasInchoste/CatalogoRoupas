<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nacionalidade;
use App\Http\Requests\NacionalidadeRequest;
use Illuminate\Database\QueryException;
use PDOException;

class NacionalidadesController extends Controller
{
    public function index(Request $filtro)
	{
		$filtragem = $filtro->get('desc_filtro');

        if ($filtragem == null) 
    		$nacionalidades = Nacionalidade::orderBy('descricao')->paginate(10);
        else
            $nacionalidades = Nacionalidade::where('descricao', 'like', '%'.$filtragem.'%')->orderBy("descricao")->paginate(10);
		return view('nacionalidades.index', ['nacionalidades'=>$nacionalidades, 'filtro'=>$filtro->get('desc_filtro')]);
	}

	public function create()
	{
		$nacionalidades = Nacionalidade::all();
		return view('nacionalidades.create');
	}

	public function store(NacionalidadeRequest $request)
	{
		$novo_nacionalidade = $request->all();
		Nacionalidade::create($novo_nacionalidade);
		return redirect()->route('nacionalidades');
	}

	public function destroy($id)
	{
		try {
			Nacionalidade::find($id)->delete();
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
		$nacionalidade = Nacionalidade::find($id);
		return view('nacionalidades.edit', compact('nacionalidade'));
	}

	public function update(NacionalidadeRequest $request, $id)
	{
		Nacionalidade::find($id)->update($request->all());
		return redirect()->route('nacionalidades');
	}}
