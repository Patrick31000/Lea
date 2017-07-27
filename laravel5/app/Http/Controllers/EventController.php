<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

class EventController extends Controller

{



	public function index()

	{

		$events = [];

		$data = Event::all();

		if($data->count()){

			foreach ($data as $key => $value) {

				$events[] = Calendar::event(

					$value->title,

					true,

					new \DateTime($value->start_date),

					new \DateTime($value->end_date.' +1 day')

					);

			}

		}

		$calendar = Calendar::addEvents($events);

		return view('mycalender', compact('calendar'));

	}


	public function createEvent(Request $request)
	{
		return view('create');
	}



	public function store(Request $request)
{
  	$time = explode(" - ", $request->input('time'));
	$event = new Event;
	$event->name = $request->input('name');
	$event->title = $request->input('title');
	$event->start_date = $time[0];
	$event->end_date = $time[1];
	// dd($request->input());
	$event->save();
	
	$request->session()->flash('success', 'The event was successfully saved!');
	return redirect('/create');
}

}
