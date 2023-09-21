<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        button:hover{
            cursor: pointer;
        }
    </style>
    <title>Senting Files to the Server! 📂</title>
</head>
<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <br>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="image">Image:</label>
        <br>
        <input type="file" name="image" id="image">
        <br><br>
        <!-- Por defecto, los botones son de tipo submit -->
        <button type="submit">UPLOAD</button>
    </form>
</body>
</html>