<?php
session_start();

$error = "";
$login = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $utenti = json_decode(file_get_contents("utenti.json"), true);
    $username = $_POST["username"];
    $password = $_POST["password"];

    $trovato = null;
    foreach ($utenti as $u) {
        if ($u["username"] === $username && $u["password"] === $password) {
            $trovato = $u;
            break;
        }
    }

    if ($trovato !== null) {
        $_SESSION["utente"] = [
            "id" => $trovato["id"],
            "username" => $trovato["username"]
        ];
        if (!isset($_SESSION["carrello"])) {
            $_SESSION["carrello"] = [];
        }
        $login = true;
    } else {
        $error = "Credenziali errate";
    }
}
?>
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

<?php
if ($error !== "") {
    echo "<p style='color:red;'>$error</p>";
}

if ($login) {
    echo "<p style='color:green;'>Login effettuato!</p>";
    echo "<a href='oggetti.php'>Vai ai prodotti</a>";
}
?>

</body>
</html>
