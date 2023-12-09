<?php

require './vendor/autoload.php';

session_start();
require './controllers/choisirheader.php';

require './routes.php';

Flight::start();


?>