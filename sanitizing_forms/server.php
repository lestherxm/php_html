<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];

$name = htmlentities($name); //Evita que posible codigo HTML dentro de un string sea interpretado por el browser
$username = addslashes($username); //Agrega slashes a caracteres de escape, como: ' " n
$username = htmlentities($username);
$onlywords = preg_replace("/\d/", "", $username); //Identifica los numeros y los cambia por "" (nada)
$onlynumbers = preg_replace("/\D/", "", $username); //Identifica lo que NO sea numero y lo cambia por "" (nada)
$email = filter_var($email, FILTER_SANITIZE_EMAIL); //Sanitiza el email eliminando todo lo NO valido para un email real
$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT); //

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h3>Welcome, <?= $name ?></h1>
    <hr>
    <p>Full username: <?= $username ?></p>
    <p>Only words: <?= $onlywords ?></p>
    <p>Only numbers: <?= $onlynumbers ?></p>
    <p>Email: <?= $email ?></p>
    <p>Age: <?= $age ?></p>
</body>
</html>