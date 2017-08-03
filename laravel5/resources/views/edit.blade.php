@extends('template')

@section('contenu')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/events') }}">Events</a></li>
			<li class="active">Edit - {{ $event->title }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		

		<form action="{{ route('update', $event->id) }}" method="GET">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT" />
			<div class="form-group @if($errors->has('name')) has-error has-feedback @endif">
				<label for="name">Your Name</label>
				<input type="text" class="form-control" name="name" value="{{ $event->name }}" placeholder="E.g. Pisyek">
				@if ($errors->has('name'))
				<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('name') }}
				</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('title')) has-error has-feedback @endif">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" value="{{ $event->title }}" placeholder="E.g. My event's title">
				@if ($errors->has('title'))
				<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('title') }}
				</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('date')) has-error @endif">
				<label for="date">Date</label>
				<div class="input-group">
					<input type="text" class="form-control" name="date" value="{{ $event->start_date . ' - ' . $event->end_date }}" placeholder="Select your time">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
				@if ($errors->has('date'))
				<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('date') }}
				</p>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>		
	</div>
</div>
@endsection

@section('js')
<script src=""{{ asset('css/daterangepicker.js') }}></script>
<script type="text/javascript">
	$(function () {
		$('input[name="date"]').daterangepicker({
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