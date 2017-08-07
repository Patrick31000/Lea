<link href="{{ asset('css/plandusite.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="titre">Plan Du Site</h1>
	<h2>Partie Visiteur</h2>
	<ol>
	<li><a href="http://127.0.0.1:8000/">Acceuil</a></li>
	<li><a href="http://127.0.0.1:8000/listall">Liste des Événements</a></li>
	</ol>

	<h2>Partie Connecté</h2>
	<ol>
	<li><a href="http://127.0.0.1:8000/">Accueil</a></li>
	<li><a href="http://127.0.0.1:8000/listall">Liste des Événements</a></li>
	<li><a href="http://127.0.0.1:8000/login">Se connecter</a></li>
	<li><a href="http://127.0.0.1:8000/create">Ajouter un événement</a></li>
	<li><a href="http://127.0.0.1:8000/list">Événements personnels</a></li>
	<li><a href="http://127.0.0.1:8000/bidform?1">Espace d'enchère</a></li>
	</ol>
</div>
@endsection