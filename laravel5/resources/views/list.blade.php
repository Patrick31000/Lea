@extends('layouts.app')

@section('content')
<?php
    // require 'vendor/autoload.php';
    use  Carbon\Carbon;
    $timestamp = '2017-08-03 00:00:00';
    $date = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp, 'Europe/Paris');
    $date->setTimezone('UTC +2');
    printf("Now: %s", Carbon::now(+2));
?>
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
					<th>#</th>
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
					<td><a href="{{ route('update', $event->id) }}">{{ $event->title }}</a></td>
					<td>{{ ($event->start_date) }}</td>
					<td>{{($event->end_date) }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('show', $event->id) }}">
							<span class="glyphicon glyphicon-edit"></span> Show</a> 

							<a class="btn btn-danger btn-xs" href="{{ route('delete', $event->id) }}"><span class="glyphicon glyphicon-delete"></span> Delete</a> 

							<a class="btn btn-success btn-xs" href="{{ route('bidform', $event->id) }}"><span class="glyphicon glyphicon-bid"></span> Bid</a> 

						</td>
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