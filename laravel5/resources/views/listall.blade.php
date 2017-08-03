@extends('layouts.app')
@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		@if($events->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nom du propriétaire</th>
					<th>Titre de l'évènement</th>
					<th>Date et heure de début</th>
					<th>Date et heure de fin</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1;?>
				@foreach($events as $event)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td>{{ $event->name }}</td>
					<td>{{ $event->title }}</td>
					<td>{{ ($event->start_date) }}</td>
					<td>{{($event->end_date) }}</td>
				</tr>
				@endforeach
				</tbody>
			</table>
			@else
			<h2>No event yet!</h2>
			@endif
		</div>
	</div>
	@endsection