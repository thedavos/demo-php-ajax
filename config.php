<?php

$dbHost = "localhost";
$dbName = "demo-ajax";
$dbUser = "root";
$dbPass = "";

try {
    // PDO es un objeto que acepta 3 argumentos. tipo y ubicación de la base de datos
    // nombre de la base de datos, y el usuario y la contraseña de la base de datos.
    $pdo = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
}