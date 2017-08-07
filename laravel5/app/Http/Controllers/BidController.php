<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

use App\User;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
	
	public function show($id)
	{
		$event = Event::findOrFail($id);
		
		$data = [
		'page_title' 	=> 'Edit '.$event->title,
		'event'			=> $event,
		];
		
		return view('bidform', $data);
	}

}
