<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Aggiorna queste variabili con le tue credenziali di connessione
$host = 'localhost';
$dbname = 'recruitment-2306';
$user = 'username';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    echo "Connessione al database riuscita! <br>";

    // Esegue una query semplice
    $stmt = $pdo->query('SELECT NOW() as currentTime');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "Ora corrente del server: " . $row['currentTime'];

} catch (PDOException $e) {
    echo "Errore di connessione al database: " . $e->getMessage();
}
echo "hello world!";