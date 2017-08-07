@extends('layouts.app')
@section('content')



<div class="container">
</div>
<div class="container" id="main-content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Book</h1>
                </div>
                <?php
    // require 'vendor/autoload.php';
                use  Carbon\Carbon;
                $timestamp = '2017-08-03 00:00:00';
                $date = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp, 'Europe/Paris');
                $date->setTimezone('UTC +2');
                printf("Now: %s", Carbon::now(+2));
                ?>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="alert updated ? 'alert-success':''" v-cloak>


                                <p class="lead">currentBid </p>
                                <p>High Bidder: highBidder </p>
                            </div>
                            <p>With pictures</p>
                            <hr>
                            <p>
                                <small>Ends: Sun, Aug 20, 2017 8:26 PM
                                    (19 daysfrom now
                                    )
                                </small>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <div class="quick-bids" v-cloak>
                                <h3>Quick Bid</h3>
                                <p>
                                    <button class="btn btn-primary form-control" @click="bid(1)">Bid
                                       currentBid + 1 (
                                       Add £1 )</button>
                                   </p>
                                   <p>
                                    <button class="btn btn-primary form-control" @click="bid(5)">Bid
                                       currentBid + 5  (
                                       Add £5 )</button>
                                   </p>
                                   <p>
                                    <button class="btn btn-primary form-control" @click="bid(10)">Bid
                                       currentBid + 10
                                       ( Add £10 )</button>
                                   </p>
                                   <hr>
                                   <h3>Bid</h3>
                                   <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">£</span>
                                                <input title="" class="form-control" type="number" v-model="bidAmount">
                                            </div>
                                        </div>
                                    <div class="Chronometre">
                                        <span class="timer">25:00</span>
                                    </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="input" id="start" class="form-control btn btn-primary">Bid</button>
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
</div>
<script type="text/javascript" href="{{ asset('/public/js/chrono.js') }}"></script>
@endsection