<?php

require './vendor/autoload.php';

session_start();
require './includes/header.php';

require './routes.php';

Flight::start();


?>