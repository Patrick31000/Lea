
@extends('template')
@extends('layouts.app')
@section('contenu')
<div class="container">

    <div class="panel panel-primary">

        @if (Route::has('login'))

        <div class="panel-heading" >

            MY Calendar

            @if (Auth::check())

            <button><a href="create">Ajouter Evènement</a></button>
            <button><a href="list">Liste Evènements</a></button>

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



