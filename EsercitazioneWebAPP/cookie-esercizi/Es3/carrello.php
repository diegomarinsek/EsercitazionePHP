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
if (!isset($_SESSION['carrello'])) {
    $_SESSION['carrello'] = [];
}
if (isset($_GET['rimuovi'])) {
    $idDaRimuovere = $_GET['rimuovi'];

    if (isset($_SESSION['carrello'][$idDaRimuovere])) {
        $_SESSION['carrello'][$idDaRimuovere] = 0; 
    }

    header("Location: carrello.php");
    exit;
}

if(isset($_POST['aggiungi'])){
    $idProdotto = $_POST['aggiungi'];
    if(!isset($_SESSION['carrello'][$idProdotto])){
        $_SESSION['carrello'][$idProdotto] = 1;
    }else{
        $_SESSION['carrello'][$idProdotto]++;
    }
}
echo '
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
</head>
<body>
        <h1>Il tuo carrello</h1>

</body>
</html>'

        

