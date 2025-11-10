
<html>
    <head>
     <title>Controllo Credenziali</title>
    </head>
    <body>
        
        <h1>Controllo Credenziali</h1>
        <?php 
        $login = $_GET["login"];
        $password = $_GET[$login];
        if($listaUtenti[$login] === $_GET["password"])
            echo("<p> Accesso consentito </p>");
        
            else
                echo("<p> Accesso negato </p>");
            
        ?>
    </body>
</html>