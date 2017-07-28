<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{

	public function index()
	{
		
		$data = [
		'page_title' => 'Events',
		'events' => Event::orderBy('start_time')->get(),
		];
		return view('/list',$data);
		
	}
}
