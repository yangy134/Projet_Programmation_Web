<?php
session_start();

require 'flight/autoload.php';

Flight::set('flight.handle_errors', false);
$link = mysqli_connect('u2.ensg.eu', 'geo', '', 'geobase');

if (!$link) {
  die('Erreur de connexion');
} else {
  echo '';
}
mysqli_set_charset($link, "utf8");
Flight::set('lien', $link);

//Les routes !!

Flight::route('/', function () {
    Flight::render('accueil');
});


Flight::start();

?>