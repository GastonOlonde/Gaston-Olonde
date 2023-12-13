<?php

require './vendor/mikecao/flight/flight/Flight.php';

require './vendor/mikecao/flight/flight/autoload.php';



session_start();
require './controllers/choisirheader.php';

require './routes.php';

Flight::start();


?>