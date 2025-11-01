<?php
$login = $_POST["login"];
$password = $_POST["password"];
$action = $_POST["action"];

if ($action == "register"){
    json_encode(["login" => $login, "password" => $password])
}


?>
