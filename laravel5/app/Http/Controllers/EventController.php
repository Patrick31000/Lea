<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

use App\User;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class EventController extends Controller

{
	// Edite une liste de tous les évènements

	public function edit(Request $request)
	{
		
		$data = [
		'page_title' => 'Events',
		'events' => Auth::user()->events,
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
		Auth::user()->events()->save($event);
		
		$request->session()->flash('success', 'The event was successfully saved!');
		return redirect('/');
	}

	//Fonction pour afficher les données dans le formulaire  de modification

	public function show($id)
	{
		$event = Event::findOrFail($id);
		
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
    	

    	$time = explode(" - ", $request->input('date'));
    	$event                  = Event::findOrFail($id);
    	$event->name            = $request->input('name');
    	$event->title           = $request->input('title');
    	$event->start_date      = $time[0];
    	$event->end_date        = $time[1];
    	$event->save();

    	return redirect('/list');
    }
}



