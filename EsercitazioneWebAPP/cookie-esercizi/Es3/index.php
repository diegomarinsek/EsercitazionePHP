<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $utente = json_decode(file_get_contents("utente.json"), true);
    $username = $_POST["username"];
    $password = $_POST["password"];

    function verificaCredenziali($username, $password, $utente) {
        return $username === $utente['username'] &&
               $password === $utente['password'];
    }

    if (verificaCredenziali($username, $password, $utente)) {

        $_SESSION['utente'] = $utente;
        header("Location: oggetti.php");
        exit;

    } else {
        $error = "Credenziali errate";
    }
}

?>
