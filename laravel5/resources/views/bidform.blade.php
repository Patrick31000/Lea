<link rel="stylesheet" href="{{ asset('css/bidform.css') }}">
 <script src="{{ asset('js/bidform.js') }}"></script>
@extends('layouts.app')
@section('content')



    <div class="container" id="main-content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if($events)
                       
                        @foreach($events as $event)
                        <h1>{{ $event->title }}</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="alert updated ? 'alert-success':''" v-cloak>
                                    <p class="lead">Enchère actuelle : </p>
                                    <p>XXXX </p>
                                </div>
                                @endforeach
                                    <p>
                                @else
			                        <h2>No event yet!</h2>
			                    @endif
                                    </p>
                                <div class="Chronometre">
                                    <p>Temps retant avant fin enchère :</p>
                                    <span class="timer">25:00</span>
                                </div>
                                <div class="col-sm-4">
                                    <div class="quick-bids" v-cloak>
                                        <h3>Bid</h3>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"£</span>
                                                        <input title="" class="form-control" type="number" v-model="bidAmount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                               <button type="input" class="btn btn-md btn-primary" id="start">Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection


