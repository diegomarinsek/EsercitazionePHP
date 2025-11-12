<?php
if (
isset($_COOKIE["preferenze"])){
 $parts = explode(";", $_COOKIE['personalizzazione']); 
$nome = $parts[1];
$cognome = $parts[2];
$inputfont = $parts[3];
$coloreTesto= = $parts[4];
$coloreSfondo= $parts[5];
 echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheda personalizzata</title>
</head>
<body style="background-color: <?php echo $coloreSfondo; ?>; color: <?php echo $coloreTesto; ?>; font-family: <?php echo $inputfont; ?>;">
 <?php
        echo "<p>Bentornato $nome $cognome</p>";
        echo '<p><a href="index.php">Torna alla home</a></p>';
    ?>
    
</body>
</html> '
}

echo ' <!DOCTYPE html>
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
</html>'


?>