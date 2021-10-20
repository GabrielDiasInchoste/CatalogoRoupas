<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkuRequest;
use App\Models\Sku;
use Illuminate\Database\QueryException;
use PDOException;

class SkuController extends Controller
{
	public function index()
	{
		$skus = Sku::orderBy('nome')->paginate(5);
		return view('skus.index', ['skus' => $skus]);
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
