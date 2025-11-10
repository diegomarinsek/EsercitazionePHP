<?php
/**
 * Leggere un file json
 *     - $path = utenti.json
 *     - file_exists($path) --> TRUE se esiste il file, FALSE altrimenti
 * Stampare il contenuto a video del file
 *     - aprire
 *
 */
$path = "utenti.json";
if(!file_exists($path))
    die("Errore il file non esiste");
else{
    $json = file_get_contents($path);
    $dati = json_decode($json, true);
    foreach($dati as $valore){
        echo "<p>";
        foreach($valore as $k => $v){
            echo "$k : $v <br>";
        }
        echo "</p>";
    }
}
?>
