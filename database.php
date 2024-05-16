<?php
require_once '../vendor/autoload.php';  // Assicurati che il percorso sia corretto per includere l'autoloader di Composer

$host = 'localhost';  // Sostituisci con il tuo host
$dbname = 'recruitment-2306';  // Sostituisci con il nome del tuo database
$user = 'root';  // Sostituisci con il tuo username del database
$password = '';  // Sostituisci con la tua password del database

$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Abilita le eccezioni per gli errori
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Imposta il modo di fetch predefinito a associative array
    PDO::ATTR_EMULATE_PREPARES => false,  // Disabilita l'emulazione delle prepared statements
];

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $pdoOptions);
$query = new \Envms\FluentPDO\Query($pdo);

return $query;  // Restituisce l'oggetto FluentPDO per essere utilizzato altrove
