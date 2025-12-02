<?php
session_start();

if (!isset($_SESSION['utente'])) {
    echo "<p>Devi effettuare il login per vedere il carrello.</p>";
    exit;
}

$oggetti = json_decode(file_get_contents("oggetti.json"), true);
$prodottiPerId = [];

foreach ($oggetti as $p) {
    $prodottiPerId[$p['id']] = $p['nome'];
}

if (!isset($_SESSION['carrello'])) {
    $_SESSION['carrello'] = [];
}

if (isset($_GET['rimuovi'])) {
    $id = $_GET['rimuovi'];
    if (isset($_SESSION['carrello'][$id])) {
        unset($_SESSION['carrello'][$id]);
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Carrello</title>
</head>
<body>

<h1>Il tuo carrello</h1>

<?php
if (empty($_SESSION['carrello'])) {
    echo "<p>Il tuo carrello è vuoto.</p>";
} else {
    echo "<ul>";
    foreach ($_SESSION['carrello'] as $id => $qta) {
        if (!isset($prodottiPerId[$id])) continue;
        echo "<li>" . $prodottiPerId[$id] . " — Quantità: " . $qta . 
             " <a href='carrello.php?rimuovi=$id'>Rimuovi</a></li>";
    }
    echo "</ul>";
}
?>

<p><a href="oggetti.php">Torna ai prodotti</a></p>

</body>
</html>
