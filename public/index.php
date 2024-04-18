<?php

// Hier ist der  einstieg punkt unsere App

// Fehlermeldugen aktiviren
error_reporting(error_level:E_ALL);
ini_set(option:'display_errors', value:'1');

// Autoloading
require_once __DIR__ . '/../vendor/autoload.php';

// Con la prima variabile richiami la pagina (importare) e poi chiami la funzione
$controller = new \App\Controller\HomeController();
$controller -> index();
