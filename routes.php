<?php

require './vendor/mikecao/flight/flight/autoload.php';



Flight::route('/', function() {
    // Chargez la vue 'home.php' depuis le dossier 'views'
    Flight::render('home.php');
});
Flight::route('/projets', function() {
    // Chargez la vue 'home.php' depuis le dossier 'views'
    Flight::render('projets.php');
});

?>