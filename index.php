<?php

require './includes/flight-master/flight/Flight.php';

require './includes/flight-master/flight/autoload.php';


session_start();
require './controllers/choisirheader.php';

require './routes.php';

Flight::start();


?>