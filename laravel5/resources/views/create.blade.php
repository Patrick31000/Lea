@extends('layouts.app')
@section('content')


<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/') }}">Events</a></li>
			<li class="active">Add new event</li>
		</ol>
	</div>
</div>


<div class="row">
	<div class="col-lg-6">

		<form action="{{ url('/post/create') }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
				<label for="name">Votre nom :</label>
				<input type="text" class="form-control" name="name" placeholder="Nom" value="{{ old('name') }}">
				@if ($errors->has('name'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
					{{ $errors->first('name') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('title')) has-error has-feedback @endif">
				<label for="title">Titre de la réservation</label>
				<input type="text" class="form-control" name="title" placeholder="Titre réservation" value="{{ old('title') }}">
				@if ($errors->has('title'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
					{{ $errors->first('title') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('time')) has-error @endif">
				<label for="time">Date et heure de la réservation</label>
				<div class="input-group">
					<input type="text" class="form-control" name="time" placeholder="Sélectionnez votre tranche horaire" value="{{ old('time') }}">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
				@if ($errors->has('time'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
					{{ $errors->first('time') }}
					</p>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Enregistrer !</button>
		</form>
	</div>
</div>
@endsection

@section('js')
<script src=""{{ asset('css/daterangepicker.js') }}></script>
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"minDate": moment('<?php echo date('Y-m-d G')?>'),
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "YYYY/MM/DD H:mm",
			"separator": " - ",
		}
	});
});
</script>
@endsection
