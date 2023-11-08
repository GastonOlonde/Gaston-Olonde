<?php

require 'vendor/autoload.php';


Flight::route('/', function() {
    // Chargez la vue 'home.php' depuis le dossier 'views'
    Flight::render('home.php');
});

?>