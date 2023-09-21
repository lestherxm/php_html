<?php
    $age = 18;
    $isAnAdult = ($age >= 18); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <!-- ESTO NO SE DEBE DE HACER -->
    <?php if ($isAnAdult) {
        echo "<p>You're an adult because you're $age years old</p>";
    }else{
        echo "<p>You're not an adult because you're $age years old</p>";
    }
    ?>
    <!-- ESTO ES ACEPTABLE -->
    <?php if($isAnAdult) {?>
        <p>You're an adult because you're <?= $age ?> years old</p>
    <?php }else{?>
        <p>You're not an adult because you're <?= $age ?> years old</p>
    <?php }?>
    <hr>
    <!-- ESTA ES LA MEJOR FORMA DE HACER ESTO -->
    <?php if($isAnAdult): ?>
        <p>You're an adult because you're <?= $age ?> years old</p>
    <?php else: ?>
        <p>You're not an adult because you're <?= $age ?> years old</p>
    <?php endif; ?>
</body>
</html>