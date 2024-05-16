<?php
require_once '../vendor/autoload.php';  // Ensure the correct path to include Composer's autoloader

// Database connection details
$host = 'localhost';  // Replace with your host
$dbname = 'recruitment-2306';  // Replace with your database name
$user = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

// PDO options for the database connection
$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Enable exceptions for errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Set the default fetch mode to associative array
    PDO::ATTR_EMULATE_PREPARES => false,  // Disable emulation of prepared statements
];

// Create a new PDO instance with the provided connection details and options
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $pdoOptions);

// Create a new FluentPDO Query instance
$query = new \Envms\FluentPDO\Query($pdo);

return $query;  // Return the FluentPDO object for use elsewhere
