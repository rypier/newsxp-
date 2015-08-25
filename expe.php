<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/controleur/experimentation.php');
}