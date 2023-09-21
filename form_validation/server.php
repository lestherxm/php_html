<?php

if(isset($_POST["form"])){
    // Si @name ha sido enviado por HTTP POST, No es nula y No es un campo vacio, tomar dicho valor, caso contrario, setear la variable a NULL
    $name = (isset($_POST["name"]) && !empty($_POST["name"])) ? $_POST["name"] : null; 

    if ($name) {
        $message = "¡Bienvenido, $name!"; 
    }else{
        $message = "¡Acceso denegado!";
    }

}else{
    $message = "EL FORMULARIO NO FUE ENVIADO";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Forms</title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>
