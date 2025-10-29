<?php
echo "Hello world<br>";

$nome = "Drip.maze"; // Variabile che contiene il nome

// Uso di una variabile corretta e stringa ben formata
$html = "<h1 style='color: red;'>Hello $nome</h1>";

echo $html;

$lista = array(1,2,3,4,5,6,7,8,9,0);
echo("<h1>Contenuto lista</h1>");
foreach($lista as $k=>$v){
    echo("$k: $v");

}

?>