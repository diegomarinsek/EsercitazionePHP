<?php
session_start();

$error = "";
$statoLogin = false; 
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $utenti = json_decode(file_get_contents("utenti.json"), true);

    $username = $_POST["username"];
    $password = $_POST["password"];

    $utenteTrovato = null;

    foreach ($utenti as $utente) {
        if ($utente["username"] === $username && $utente["password"] === $password) {
            $utenteTrovato = $utente;
            break;
        }
    }

    if ($utenteTrovato !== null) {
        $_SESSION["utente"] = [
            "id" => $utenteTrovato["id"],
            "username" => $utenteTrovato["username"]
        ];

        if (!isset($_SESSION["carrello"])) {
            $_SESSION["carrello"] = [];
        }

        $statoLogin = true; // 

    } else {
        $error = "Credenziali errate";
    }
}

echo '
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST">
    <label>Username:
        <input type="text" name="username" required>
    </label><br><br>

    <label>Password:
        <input type="password" name="password" required>
    </label><br><br>

    <button type="submit">Accedi</button>
</form>
';


if ($error !== "") {
    echo "<p style='color:red;'>$error</p>";
}


if ($statoLogin) {
    echo "
        <p style='color:green;'>Login effettuato!</p>
        <a href='oggetti.php'>Vai ai prodotti</a>
    ";
}

echo '
</body>
</html>
';
?>
