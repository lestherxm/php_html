<?php
    $users = ["Juan", "Maria", "Pedro"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycles</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <ul>
        <?php foreach( $users as $user) : ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>