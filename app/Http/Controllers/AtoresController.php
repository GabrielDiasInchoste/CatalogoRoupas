<?php

namespace App\Http\Controllers;

use App\Models\Ator;
use Illuminate\Http\Request;

class AtoresController extends Controller
{
    
	public function index() {
		$atores = Ator::all();
		return view('atores', ['atores'=>$atores]);
	}

}

