<?php
session_start();
#include_once($_SERVER["DOCUMENT_ROOT"].'/experimentationNews/modele/Article.class.php');
include_once('modele/Article.class.php');
$article = new Article();
$sources  = $article -> get_source();

foreach($sources as $key => $texte_source)
{
    $sources[$key]['text_ID']= $texte_source['text_ID'];
}

foreach($sources as $texte_source) 
{
    $id_source =  $texte_source['text_ID'];
}

$sims = $article -> get_sim($id_source);
foreach($sims as $key => $texte_sim)
{
    $sims[$key]['target_similar_ID']= $texte_sim['target_similar_ID'];
}

foreach($sims as $texte_sim) {
    $id_sim = $texte_sim['target_similar_ID'];
}

$diffs = $article -> get_diff($id_source);
foreach($diffs as $key => $texte_diff)
{
    $diffs[$key]['target_different_ID']= $texte_diff['target_different_ID'];
}

foreach($diffs as $texte_diff) {
    $id_diff = $texte_diff['target_different_ID'];
}

$comps = $article -> get_comp($id_source);
foreach($comps as $key => $text_comp)
{
    $comps[$key]['target_complementary_ID']= $text_comp['target_complementary_ID'];
}

foreach($comps as $texte_comp) {
    $id_comp = $texte_comp['target_complementary_ID'];
}

#foreach($texts as $key => $text)
#	    {
#	    	$texts[$key]['title'] = htmlspecialchars($text['title']);
#		$texts[$key]['description']= htmlspecialchars($text['description']);
#	    }

$source_txts = $article -> get_text($id_source);
$sims_txts = $article -> get_text($id_sim);
$diffs_txts = $article -> get_text($id_diff);
$comps_txts = $article -> get_text($id_comp);


foreach($diffs_txts as $diff_txt)
{
    $description_diff = utf8_encode($diff_txt['description']);
}
      
foreach($comps_txts as $comp_txt)
{
    $description_comp = utf8_encode($comp_txt['description']);
}

$txts['texte'] = $description_diff;
$txts['classe'] = 'different';
$txts['id'] = $id_diff;

$txts_2['texte'] = $description_comp;
$txts_2['classe'] = 'complementary';
$txts_2['id'] = $id_comp;

$array_ass = array($txts, $txts_2);

$_SESSION['id_source'] = $id_source;
$_SESSION['id_diff'] = $id_diff;
$_SESSION['id_comp'] = $id_comp;
$_SESSION['id_sim'] = $id_sim;
$_SESSION['texte_source'] = $source_txts;
$_SESSION['texte_diff'] = $diffs_txts;
$_SESSION['texte_comp'] = $comps_txts;
$_SESSION['texte_sim'] = $sims_txts;

#echo $id_source;
include_once('vue/experimentation.php');

