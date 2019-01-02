<?php
require_once 'config.php';

$result = false;

if (!empty($_POST)) {
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST["lastname"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $sql = "INSERT INTO users(name, lastname, email) VALUES (:name, :lastname, :email)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'name' => $name,
        'lastname' => $lastname,
        'email'=> $email
    ]);
    header("refresh: 1; url=add.php");
}

?>