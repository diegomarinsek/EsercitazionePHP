<?php
$risultato= "";
    if ($_SERVER["REQUEST_METHOD"]== "POST"){

        $num1 = (float) $_POST["primo_numero"];
        $num2 = (float) $_POST["secondo_numero"];
        $operazione = $_POST["operazione"];
        
        if($operazione == "somma"){
            include "funzioni/somma.php";
            $risultato = somma($num1,$num2);
        }elseif ($operazione == "sottrazione"){
            include "funzioni/sottrazione.php";
            $risultato = sottrazione($num1,$num2);
        }elseif ($operazione == "divisione"){
            include "funzioni/divisione.php";
             $risultato = divisione($num1,$num2);
        }elseif ($operazione == "moltiplicazione"){
            include "funzioni/moltiplicazione.php";
             $risultato = moltiplicazione($num1,$num2);
        }
    
        

    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Calcolatrice semplice</title>
</head>
<body>
    <h1>Calcolatrice PHP</h1>

    <form method="POST">
        <label>Numero 1:</label>
        <input type="number" name="primo_numero" step="any" required><br><br>

        <label>Numero 2:</label>
        <input type="number" name="secondo_numero" step="any" required><br><br>

        <label>Operazione:</label>
        <select name="operazione">
            <option value="somma">Somma (+)</option>
            <option value="sottrazione">Sottrazione (−)</option>
            <option value="moltiplicazione">Moltiplicazione (×)</option>
            <option value="divisione">Divisione (÷)</option>
        </select><br><br>

        <input type="submit" value="Calcola">
    </form>

    <?php if ($risultato !== ""): ?>
        <h2>Risultato: <?= $risultato ?></h2>
    <?php endif; ?>
</body>
</html>