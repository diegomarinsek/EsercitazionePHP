<?php
session_start();

if (!isset($_SESSION['utente'])) {
    echo "<p>Devi fare il login prima. <a href='index.php'>Vai al login</a></p>";
    exit;
}

$oggetti = json_decode(file_get_contents("oggetti.json"), true);

if (!isset($_SESSION['carrello'])) {
    $_SESSION['carrello'] = [];
}

if (isset($_GET['add'])) {
    $id = $_GET['add'];
    if (!isset($_SESSION['carrello'][$id])) {
        $_SESSION['carrello'][$id] = 1;
    } else {
        $_SESSION['carrello'][$id]++;
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Prodotti</title>
</head>
<body>

<h1>Lista Prodotti</h1>

<?php
foreach ($oggetti as $prodotto) {
    echo "<div>";
    echo "<h3>" . $prodotto['nome'] . "</h3>";
    echo "<a href='oggetti.php?add=" . $prodotto['id'] . "'>Aggiungi al carrello</a>";
    echo "</div><hr>";
}
?>

<p><a href="carrello.php">Vai al carrello</a></p>
<p><a href="logout.php">Logout</a></p>

</body>
</html>

