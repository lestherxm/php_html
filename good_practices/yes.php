<?php
    $table_9 = [];
    for ($i=1; $i <= 10; $i++) {
        $result = 9 * $i;
        $text = "9 * $i = $result";
        array_push($table_9, $text);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO</title>
</head>
<body>
    <h1>Tabla del 9</h1>
    <ul>
        <?php foreach($table_9 as $item) : ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
    </body>
</html>