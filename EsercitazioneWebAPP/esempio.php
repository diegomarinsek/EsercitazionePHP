<?php $nome ="diego";?>
<html>
    <head></head>
    <body>
        <h1>LA MIA PRIMA WEBAPP</h1>
        <p>Ciao <?php echo($nome);?></p>
        <?php echo("<p>tipo: ".type($nome)."</p><p>".var_dump($nome)."</p>");?>
    </body>
</html>
