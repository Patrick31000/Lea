<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

use Carbon\Carbon;

class EventController extends Controller

{
	// Edite une liste de tous les évènements

	public function edit()
	{
		
		$data = [
		'page_title' => 'Events',
		'events' => Event::orderBy('start_date')->get(),
		];
		return view('/list',$data);
		
	}

	//Supprime un évènement

	public function destroy($id)
	{
		$event = Event::find($id);
		$event->delete();
		
		return redirect('/list');
	}

	//



	//Affiche les évènements dans le calendrier

	public function index()

	{

		$events = [];
		

		$data = Event::all();

		if($data->count()){

			foreach ($data as $key => $value) {

				$events[] = Calendar::event(


					$value->title,

					false,

					// new Carbon($value->start_date),

					// new Carbon($value->end_date)

					new \DateTime($value->start_date),

					new \DateTime($value->end_date)

					);

			}

		}

		$calendar = Calendar::addEvents($events);

		return view('mycalender', compact('calendar'));

	}

	//Affiche la page de création d'évènements au clic

	public function create()
	{
		return view('/create');
	}

	//Fonction de création d'un nouvel élément.

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

	//Fonction pour afficher les données dans le formulaire  de modification

	public function show($id)
	{
		$event = Event::findOrFail($id);
		// $event->name = $request->input('name');
		// $event->title = $request->input('title');
		// $event->start_date =  $this->change_date_format_fullcalendar($event->start_date);
		// $event->end_date =  $this->change_date_format_fullcalendar($event->end_date);
		
		$data = [
		'page_title' 	=> 'Edit '.$event->title,
		'event'			=> $event,
		];
		
		return view('edit', $data);
	}

    /**
     * Fonction qui met à jour la BDD avec les nouvelles données
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	// $this->validate($request, [
    	// 	'name'	=> 'required|min:5|max:15',
    	// 	'title' => 'required|min:5|max:100',
    	// 	'date'	=> 'required|available|duration'
    	// 	]);

    	$time = explode(" - ", $request->input('time'));

    	$event 					= Event::findOrFail($id);
    	$event->name			= $request->input('name');
    	$event->title 			= $request->input('title');
    	$event->start_date		= $this->change_date_format_fullcalendar($event->start_date);
    	$event->end_date 		= $this->change_date_format_fullcalendar($event->end_date);
    	$event->save();

    	return redirect('/list');
    }
}



