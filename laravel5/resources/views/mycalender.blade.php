
@extends('template')
@extends('layouts.app')
@section('content')
@section('contenu')
<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading">

            MY Calendar
            <button><a href="create">Ajouter Evènement</a></button>
            <button><a href="list">Liste Evènements</a></button>

        </div>

        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>

</div>


@endsection


