 <link href="{{ asset('css/bidform.css') }}" rel="stylesheet">
 @extends('layouts.app')
 @section('content')
 <div class="container">
 </div>
 <div class="container" id="main-content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Nom de l'évènement:</h1>
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="alert updated ? 'alert-success':''" v-cloak>
                                <p class="lead">Titre de l'évènement</p>
                                <p>{{ $event->title }}</p><br>
                                <p class="lead">Date et heure de début:</p>
                                <p>{{ ($event->start_date) }}</p><br>
                                <p class="lead">Date et heure de fin:</p>
                                <p>{{ ($event->end_date) }}</p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">£</span>
                                    <input title="" class="form-control" type="number" v-model="bidAmount">
                                </div>
                                 <script language="JavaScript">
                
                function t()
                {
            var compteur=document.getElementById('compteur');
            s=duree;
            m=0;h=0;
            if(s<0)
                        {
                                compteur.innerHTML="Enchère terminée !<br/>"
            }
                        else
                        {
                                if(s>59)
                                {
                                        m=Math.floor(s/60);
                                        s=s-m*60
                }
                                if(m>59)
                                {
                                        h=Math.floor(m/60);
                    m=m-h*60
                                }
                if(s<10)
                                {
                                        s="0"+s
                }
                if(m<10)
                                {
                    m="0"+m
                }
                  compteur.innerHTML=h+":"+m+":"+s+"<br>"
            }
            duree=duree-1;
            window.setTimeout("t();",999);

        }
                
                </script>
                                <div class="col-sm-4" id="compterebours">Compte à rebours avant enchères :
                                    <br><div id="compteur"></div>
                                </div>
                                <script language="JavaScript">
                        duree="120";
                        t();
                </script>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button class="form-control btn btn-primary" @click="manualBid">Bid</button>
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

