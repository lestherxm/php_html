<?php
    $name = "Lesther";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Text With PHP</title>
</head>
<body>
    <h1>¡Hola, <?= $name ?>!</h1>
    <?php echo "<b>This is a bold text printed with PHP - Way 1</b><br>"; ?>
    <?= "<b>This is a bold text printed with PHP 2 - Way 2</b>" ?>
    
</body>
</html>