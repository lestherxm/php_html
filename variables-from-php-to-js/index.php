<?php
$users = array(
    array(
        "id" => 0,
        "username" => "Elias",
    ),
    array(
        "id" => 1,
        "username" => "Juancho",
    ),
    array(
        "id" => 2,
        "username" => "Henry",
    ),
);
$username = 'Lesther';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From PHP to JS!</title>
</head>
<body>
    <script>
        // json_encode es una funcion de PHP que convierte el array de PHP en un STRING en formato JSON
        // JSON.parse es una funcion de JAVASCRIPT que convierte un STRING a un objeto en formato JSON
        let users = JSON.parse('<?= json_encode($users) ?>');
        let username = '<?=$username?>';
    </script>
    <h1>Lista de usuarios</h1>
    <p>Hola, <?= $username ?></p>
    <script src="./index.js"></script>
</body>
</html>