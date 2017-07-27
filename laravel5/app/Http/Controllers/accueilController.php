<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    public function acc(){
    	return view('accueil');
    }
}
