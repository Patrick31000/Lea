
@extends('template')
@extends('layouts.app')
@section('contenu')
<div class="container">

    <div class="panel panel-primary">

        @if (Route::has('login'))

        <div class="panel-heading" >

            MY Calendar

            <button><a href="listall">Liste des évènements</a></button>
            @if (Auth::check())

            <button><a href="create">Ajouter Evènement</a></button>
            <button><a href="list">Espace personnel</a></button>

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



