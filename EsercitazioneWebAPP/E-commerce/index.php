<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
  <form action="auth.php" method = "POST">
     <label for="login"></label>    
     <input type="text" name ="login">
     <label for="password"></label>   
     <input type="password" name ="password">

     <input type="hidden" name="action" value="login">
    <button type="submit">Gianpeppino</button>

    <input type="submit" name = "invia">

    </form>

 <form action="auth.php">
 <label for="login"></label>    
     <input type="text" name ="login">
     <label for="password"></label>   
     <input type="password" name ="password">
    <input type="hidden" name="action" value="register">
    <button type="submit">Registrati</button> 
 </form>  

</body>
</html> 