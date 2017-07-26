<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoController extends Controller
{
	public function create()
	{
		return view('infos');
	}
	public function store (Request $request){
		return 'le nom est ' . $request->input('nom');
	}
}
