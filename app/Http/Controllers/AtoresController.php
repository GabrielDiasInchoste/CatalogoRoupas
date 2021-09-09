<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtorRequest;
use App\Models\Ator;

class AtoresController extends Controller
{
    
	public function index() {
		$atores = Ator::all();
		return view('atores.index', ['atores'=>$atores]);
	}

	public function create() {
		$atores = Ator::all();
		return view('atores.create');
	}

	public function store(AtorRequest $request) {
		$novo_ator = $request->all();
		Ator::create($novo_ator);
		return redirect('atores');
	}

	public function destroy($id) {
		Ator::find($id)->delete();
		return redirect('atores');
	}
}