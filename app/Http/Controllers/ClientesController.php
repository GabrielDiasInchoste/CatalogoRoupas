<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Database\QueryException;
use PDOException;

class ClientesController extends Controller
{
    public function index(Request $filtro)
	{
		$filtragem = $filtro->get('desc_filtro');

        if ($filtragem == null) 
    		$clientes = Cliente::orderBy('nome')->paginate(10);
        else
            $clientes = Cliente::where('nome', 'like', '%'.$filtragem.'%')->orderBy("nome")->paginate(10);
		return view('clientes.index', ['clientes'=>$clientes, 'filtro'=>$filtro->get('desc_filtro')]);
	}

	public function create()
	{
		$clientes = Cliente::all();
		return view('clientes.create');
	}

	public function store(ClienteRequest $request)
	{
		$novo_cliente = $request->all();
		Cliente::create($novo_cliente);
		return redirect()->route('clientes');
	}

	public function destroy($id)
	{
		try {
			Cliente::find($id)->delete();
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
		$cliente = Cliente::find($id);
		return view('clientes.edit', compact('cliente'));
	}

	public function update(ClienteRequest $request, $id)
	{
		Cliente::find($id)->update($request->all());
		return redirect()->route('clientes');
	}}
