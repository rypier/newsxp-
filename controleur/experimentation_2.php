<?php
session_start();
#include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/modele/Article.class.php');
include_once('modele/Article.class.php');
$source_txts = $_SESSION['texte_source'];
$sims_txts = $_SESSION['texte_sim'];
$id_sim = $_SESSION['id_sim'] ;
$id_comp_before = $_SESSION['id_comp'];
$id_source = $_SESSION['id_source'];

$article = new Article();
#echo $id_source;


do {
    $comps = $article -> get_comp($id_source);
    foreach($comps as $key => $text_comp)
    {
        $comps[$key]['target_complementary_ID']= $text_comp['target_complementary_ID'];
    }

    foreach($comps as $texte_comp) 
    {
    $id_comp = $texte_comp['target_complementary_ID'];
    }
}while($id_comp == $id_comp_before);

$comps_txts = $article -> get_text($id_comp);

foreach($sims_txts as $sim_txt)
{
    $description_sim = utf8_encode($sim_txt['description']);
}
      
foreach($comps_txts as $comp_txt)
{
    $description_comp = utf8_encode($comp_txt['description']);
}

$txts['texte'] = $description_sim;
$txts['classe'] = 'similar';
$txts['id'] = $id_sim;

$txts_2['texte'] = $description_comp;
$txts_2['classe'] = 'complementary';
$txts_2['id'] = $id_comp;

$array_ass = array($txts, $txts_2);

include_once('vue/experimentation_2.php');