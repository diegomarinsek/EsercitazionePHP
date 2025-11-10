<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2 cookie</title>
</head>
<body>
    <form action="personalizzazione.php" method = POST>
    <label for= "nome">Inserire nome</label>
    <input type="text" name = "nome">
    <label for= "cognome">Inserire cognome</label>
    <input type="text" name = "cognome"> 
    <label for="inputfont">Inserire font desiderato</label>
    <input type="text" name = "inputfont">
    <label for="coloreTesto">Inserire colore font </label>
    <input type="color" name = "coloreTesto">
    <label for="coloreSfondo">Inserire colore sfondo </label>
    <input type="color" name = "coloreSfondo">
    <button type = "submit">Invia</button>
    </form>
</body>
</html>

<?php


?>