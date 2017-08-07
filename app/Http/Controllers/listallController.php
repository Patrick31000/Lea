<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

use App\User;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class listallController extends Controller
{
   public function index()
	{
		
		$data = [
		'page_title' => 'Events',
		'events' => Event::orderBy('start_date')->get(),
		];
		return view('/listall',$data);
		
	}
}
