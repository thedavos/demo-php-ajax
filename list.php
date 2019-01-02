<?php

require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM users");

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1>List Users</h1>
        <a href="index.php">Home</a>
	    <table class="table">
	        <tr>
		        <th>Name</th>
		        <th>Email</th>
		        <th>Edit</th>
	        </tr>
	        <?php foreach ($queryResult->fetchAll(PDO::FETCH_ASSOC) as $row):?>
		        <tr>
		            <td><?=$row["name"];?></td>
		            <td><?=$row["lastname"];?></td>
		            <td><?=$row["email"];?></td>
              </tr>
	        <?php endforeach; ?>
        </table>
    </div>
    </body>
</html>