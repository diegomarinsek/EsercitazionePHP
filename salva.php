<?php
$nomeFile = "file.json";
if(file_exists($nomeFile)){
        die("xddsdjs");

}else {
    $json = file_get_contents($nomeUtente);
    $array = json_decode($json,true);
    
    $nuovoUtente = [

        $login => "PAOLO",
        $password =>"qwerty"
    ];

    $array[] = $nuovoUtente;
    foreach($array as $utente){
        echo ("<p>");
        foreach ($utente as $k= $v)
            

    }
   
    
}


?>