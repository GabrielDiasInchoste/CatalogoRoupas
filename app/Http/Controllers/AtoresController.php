<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtoresController extends Controller
{
    
	public function index() {
		$nome = "Johnny Depp";
		return view('atores', ['nome'=>$nome]);
	}

}

