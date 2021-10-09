<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkuRequest;
use App\Models\Sku;

class SkuController extends Controller
{
    public function index() {
		$skus = Sku::orderBy('nome')->paginate(5);
		return view('skus.index', ['skus'=>$skus]);
	}

	public function create() {
		$skus = Sku::all();
		return view('skus.create');
	}

	public function store(SkuRequest $request) {
		$novo_sku = $request->all();
		Sku::create($novo_sku);
		return redirect()->route('skus');
	}

	public function destroy($id) {
		Sku::find($id)->delete();
		return redirect()->route('skus');
	}

	public function edit($id) {
		$sku = Sku::find($id);
		return view('skus.edit', compact('sku'));
	}

	public function update(SkuRequest $request,$id) {
		Sku::find($id)->update($request->all());
		return redirect()->route('skus');
	}}
