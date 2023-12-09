<?php

$url = urldecode($_SERVER['REQUEST_URI']);


if (strpos($url, '/Gaston/projets') !== false) {
        include('../Gaston/includes/headerprojets.php');
    } else {
        include('../Gaston/includes/headerhome.php');
    }
?>