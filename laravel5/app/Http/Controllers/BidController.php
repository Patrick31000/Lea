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
    public function bid($id){

       $data = [
		'page_title' => 'Events',
		'events' => Auth::user()->events,
		];
		return view('/bidform',$data);
		
    }
}
