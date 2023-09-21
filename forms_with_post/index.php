<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with get</title>
    <style>
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="./server.php" method="post">
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <label for="age">Age</label>
        <br>
        <input type="number" name="age" id="age">
        <br><br>
        <!-- Por defecto, los botones son de tipo submit, es buena practica especificarlo explicitamente -->
        <button type="submit">UPLOAD</button>
    </form>
</body>
</html>