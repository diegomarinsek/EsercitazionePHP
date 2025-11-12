<?php
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$inputfont = $_POST["inputfont"];
$coloreTesto= = $_POST["coloreTesto"];
$coloreSfondo= $_POST["coloreSfondo"];


$valori =($nome,$cognome,$inputfont,$coloreTesto,$coloreSfondo);
setcookie("preferenze",$valori,time()+200);
?>
<!DOCTYPE html>
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
</html>