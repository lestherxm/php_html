<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        <!-- HOW CHECKBOX WORKS -->
        <p>¿Qué frutas te gustan?</p>
        <input type="checkbox" name="frutas[]" value="manzana" id="fruta1">
        <label for="fruta1">Manzana</label><br>
        <input type="checkbox" name="frutas[]" value="naranja" id="fruta2">
        <label for="fruta2">Naranja</label><br>
        <input type="checkbox" name="frutas[]" value="plátano" id="fruta3">
        <label for="fruta3">Plátano</label><br>
        <!-- HOW RADIO WORKS -->
        <p>¿Qué color prefieres?</p>
        <input type="radio" name="color" value="rojo" id="color1">
        <label for="color1">Rojo</label><br>
        <input type="radio" name="color" value="verde" id="color2">
        <label for="color2">Verde</label><br>
        <input type="radio" name="color" value="azul" id="color3">
        <label for="color3">Azul</label><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>