<?php
session_start();
if (!isset($_SESSION['utente'])) {
    header("Location: index.php");
    exit;
}
$oggetti = json_decode(file_get_contents("oggetti.json"), true);
$prodottiperId= [];
foreach ($oggetti as $prodotto){
    $prodottiperId[$prodotto['id']] = $prodotto['nome'];
    
}


?>