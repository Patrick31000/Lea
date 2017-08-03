@extends('template')
@section('contenu')



<div class="container">
    </div>
    <div class="container" id="main-content">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Book</h1>
                        </div>

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
<?php 
 
$annee = date('Y');
$event = mktime(8, 0, 0, 10, 22, $annee);
        
 if ($event < time())
 $event = mktime(8, 0, 0, 10, 22, ++$annee);

 $tps_restant = $event - time(); // $noel sera toujours plus grand que le timestamp actuel, vu que c'est dans le futur. ;)

//============ CONVERSIONS

$i_restantes = $tps_restant / 60;
$H_restantes = $i_restantes / 60;
$d_restants = $H_restantes / 24;


$s_restantes = floor($tps_restant % 60); // Secondes restantes
$i_restantes = floor($i_restantes % 60); // Minutes restantes
$H_restantes = floor($H_restantes % 24); // Heures restantes
$d_restants = floor($d_restants); // Jours restants
//==================

setlocale(LC_ALL, 'fr_FR');

echo 'Nous sommes le '. strftime('<strong>%d %B %Y</strong>, et il est <strong>%Hh%M</strong>') .'.<br />'

   . 'Il reste exactement <strong>'. $d_restants .' jours</strong>, <strong>'. $H_restantes .' heures</strong>,'
   . ' <strong>'. $i_restantes .' minutes</strong> et <strong>'. $s_restantes .'s</strong> avant la fin des enchères';


?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="form-control btn btn-primary" @click="manualBid">Bid</button>
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
<script>
//     new Vue({
//         el: '#main-content',

//         data: {
//             bidAmount: 21,
//             currentBid: 20,
//             currentTimestamp: 0,
//             highBidder: 'Chesty La Rue',
//             updated: false,
//             relatedItems: [
//                                 ]
//         },

//         methods: {
//             manualBid: function () {
//                 this.makeBid(this.bidAmount);
//             },
//             bid: function (amount) {
//                 this.makeBid(amount + this.currentBid);
//             },
//             makeBid: function (amount) {
//                 var options = {
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//                     }
//                 };
//                 this.$http.post('http://auctioneer.btk.scot/bid/book', {amount: amount}, options);
//             }
//         },

//         ready: function () {
//             socket.on("bids-channel41:App\\Events\\BidReceived", function (data) {
//                 var newBid = parseFloat(data.currentTotal);
//                 if (newBid > this.currentBid) {
//                     this.currentBid = newBid;
//                     this.currentTimestamp = data.timestamp;
//                     this.highBidder = data.highBidder;
//                     this.updated = true;
//                     setTimeout(function () {
//                         this.updated = false;
//                     }.bind(this), 350);
//                 }
//             }.bind(this));
//                     }
//     });
// </script>
// <script>
//     new Vue({
//         el: '#users-online',
//         data: {
//             usersOnline: 1
//         },
//         ready: function () {
//             socket.on('visitorsConnected', function (data) {
//                 this.usersOnline = data;
//             }.bind(this));
//         }
//     });
</script>
@endsection