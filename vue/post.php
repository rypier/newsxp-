<?php
session_start();
include_once('../modele/connexion_sql.php');
#include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/modele/connexion_sql.php');
#include_once('modele/connexion_sql.php');
#include_once('modele/connexion_sql.php');
$text_choose = $_POST['radio_button'];

if($text_choose == 'radio_1') {
    $id_target_2 = $_POST['text_target_1_id'];
    $classe_target_2 = $_POST['text_target_1_classe'];
}
 
if($text_choose == 'radio_2') {
    $id_target_2 = $_POST['text_target_2_id'];
    $classe_target_2 = $_POST['text_target_2_classe'];
}

$text_source_id = $_SESSION['id_source'];
$id_target_1 =  $_SESSION['id_target'];
$classe_target_1 = $_SESSION['classe_target'];
$real_classe_target_1 = $_SESSION['etiquette_target'];
$real_classe_target_2 = 'similar';

$req = $bdd->prepare('INSERT INTO evaluation(source_ID, target_1, target_2, real_class_1, real_class_2, false_class_1, false_class_2) VALUES(:text_source_id, :id_target_1, :id_target_2, :real_classe_target_1, :real_classe_target_2, :classe_target_1, :classe_target_2)');
        $req->execute(array(
	'text_source_id' => $text_source_id,
	'id_target_1' => $id_target_1,
	'id_target_2' => $id_target_2,
	'real_classe_target_1' => $real_classe_target_1,
	'real_classe_target_2' => $real_classe_target_2,
	'classe_target_1' => $classe_target_1,
        'classe_target_2' => $classe_target_2,
	));
        

session_write_close();
#include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/expe.php');
header('Location:../expe.php');