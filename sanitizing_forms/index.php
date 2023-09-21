<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📝 Sanitizing forms 🧹🧽🫧</title>
</head>
<body>
    <form action="server.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name"><br>

        <label for="username">User name:</label><br>
        <input type="text" name="username" id="username"><br>
        
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email"><br>
        
        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age"><br>

        <br><button type="submit">SEND</button>
    </form>
</body>
</html>