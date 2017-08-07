//Classe object

var Chrono = function(currentTime) {
    this.time = currentTime;
    this.start = function() {
        start();
    };
};

//Déclaration des variables

var chrono1 = new Chrono(1501);
var compteur;

//Déclenchement des timers

$("#start").click(function() {
    compteur = setInterval(start, 1000);
    chrono1.start();
});

function start() {
    chrono1.time -= 1;
    var minute = Math.floor(chrono1.time / 60);
    var seconde = chrono1.time - minute * 60;
    if (minute == 0 && seconde == 0) {
        clearInterval(compteur);
        chrono1.time = 1501;
        alert("Enchère terminée !");
    }

    if (minute < 10) {
        minute = "0" + minute;
    } else {
        minute = minute;
    }
    if (seconde < 10) {
        seconde = "0" + seconde;
    } else {
        seconde = seconde;
    }
    $(".timer").html(minute + ":" + seconde);
}