<?php
    include once 'config.php'; // path e il nome del file da includere
    if(isset ($name))
        echo "<h1>$name</h1>";
    else
        echo "<h1>Impossibile accedere al file config.php</h1>"
?>
