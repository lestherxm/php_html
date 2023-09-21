<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <!-- SIMPLE -->
        <!-- <label for="name">Name:</label>
        <input type="text" name="name" id="name"> -->
        
        <!-- ARRAYS -->
        <!-- <label>People:</label>
        <input type="text" name="people[]">
        <input type="text" name="people[]">
        <input type="text" name="people[]"> -->
        
        <!-- ASSOCIATIVE ARRAYS -->
        <!-- <label>Name:</label>
        <input type="text" name="personal[name]">
        <label>Email:</label>
        <input type="email" name="personal[email]">
        <label>Age:</label>
        <input type="number" name="personal[age]"> -->

        <!-- CHECKBOX -->
        <!-- <label for="hobbies">Hobbies:</label>
        <input type="checkbox" id="hobby1" name="hobbies[]" value="futbol">
        <label for="hobby1">Fútbol</label>
        <input type="checkbox" id="hobby2" name="hobbies[]" value="musica">
        <label for="hobby2">Música</label>
        <input type="checkbox" id="hobby3" name="hobbies[]" value="lectura">
        <label for="hobby3">Lectura</label> -->

        <!-- RADIOS -->
        <!-- Tienen que tener el mismo nombre -->
        <!-- <label>Hobbie:</label><br>
        <input type="radio" id="hobby1" name="hobbie" value="futbol">
        <label for="hobby1">Fútbol</label><br>
        <input type="radio" id="hobby2" name="hobbie" value="musica">
        <label for="hobby2">Música</label><br>
        <input type="radio" id="hobby3" name="hobbie" value="lectura">
        <label for="hobby3">Lectura</label><br> -->

        <!-- MULTIPLE FILES -->
        <label for="galery">Upload your images</label><br>
        <input type="file" multiple name="galery[]" id="galery"> <br><br>


        <button type="submit">SEND</button>
    </form>
</body>
</html>