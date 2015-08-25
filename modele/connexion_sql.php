<?php

try
{
    $bdd = new PDO('mysql:host=localhost;port=8889;dbname=CSV_DB', 'root', 'pierry_34539763');
    //echo 'connexion reussie';
}

catch(Exception $e)
{
echo 'Une erreur est survenue !';
die();
}
