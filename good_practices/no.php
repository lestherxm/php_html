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
        <?php
        for ($i=1; $i <= 10; $i++) { 
            echo "<li>" . "9 x " . $i . " = " . (9 * $i) . "</li>";
        }
        ?>
    </ul>
</body>
</html>