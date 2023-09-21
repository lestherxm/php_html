<?php
// Obtener las frutas seleccionadas
if (isset($_POST['frutas'])) {
    $frutas = $_POST['frutas'];
    echo "Te gustan estas frutas: " . implode(" - ", $frutas);
} else {
    echo "No has seleccionado ninguna fruta.";
}
echo "<br>";
// Obtener el color seleccionado
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    echo "Tu color preferido es: " . $color;
} else {
    echo "No has seleccionado ningún color.";
}
