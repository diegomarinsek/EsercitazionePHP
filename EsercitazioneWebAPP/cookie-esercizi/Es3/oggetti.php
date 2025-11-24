<?php
if(!isset($_SESSION['utente'])){
     header("Location: index.php");
    exit;  
}
$oggetti = json_decode(file_get_contents("oggetti.json"), true);
if (isset($_GET['add'])){
    $id = $GET['add'];
    $_SESSION['carrello'][] = $id;
    header("Location: oggetti.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>