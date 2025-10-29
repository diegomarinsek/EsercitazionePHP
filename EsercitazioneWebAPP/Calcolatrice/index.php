<?php
$risultato= "";
    if ($_SERVER["REQUEST_METHOD"]== "POST"){

        $num1 = $_POST["primo numero"];
        $num2 = $_POST["secondo numero"];
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
