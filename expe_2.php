<?php
#include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/modele/connexion_sql.php');
include_once('modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    #include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/controleur/experimentation_2.php');
    include_once('controleur/experimentation_2.php');
}