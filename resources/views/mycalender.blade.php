<link rel="stylesheet" href="{{ asset('css/mycalender.css') }}">
@extends('layouts.app')
@section('content')

<div class="container">

    <div class="panel panel-primary">

        @if (Route::has('login'))

        <div class="panel-heading" >



            <a href="listall" class="btn btn-default">Liste des évènements</a>
            @if (Auth::check())

            <a href="create" class="btn btn-default">Ajouter Evènement</a>
            <a href="list" class="btn btn-default">Espace personnel</a>

            @else

            @endif
        </div>
        @endif



        <div class="panel-body" >

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>

    </div>

</div>

@endsection



