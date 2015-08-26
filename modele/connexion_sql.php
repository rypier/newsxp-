<?php

try
{
    #$bdd = new PDO('mysql:host=localhost;port=8889;dbname=CSV_DB', 'root', 'pierry_34539763');
    $bdd = new PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_3985968aeade495', 'b5c55c0de25058', '0e3fec64');
    //echo 'connexion reussie';
}

catch(Exception $e)
{
echo 'Une erreur est survenue !';
die();
}
