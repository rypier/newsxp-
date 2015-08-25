<?php
    class Article {
    	  	
	
	public function get_source() {
	    global $bdd;
	    $req = $bdd->prepare("SELECT * FROM text ORDER BY RAND() LIMIT 1");
	    $req->execute();
	    $text_sources = $req->fetchAll();
	    return $text_sources;
	}

	public function get_sim($idTextCible) {
	    global $bdd;
	    $req = $bdd->prepare("SELECT * FROM similar WHERE source_ID = '".$idTextCible."' ORDER BY RAND() LIMIT 1"); 
	    $req->execute();
	    $text_sims = $req->fetchAll();
	    return $text_sims;
	}

	function get_diff($idTextCible) {
	    global $bdd;
	    $req = $bdd->prepare("SELECT * FROM different WHERE source_ID = '".$idTextCible."' ORDER BY RAND() LIMIT 1"); 
	    $req->execute();
	    $text_diffs = $req->fetchAll();
	    return $text_diffs;
	}

	function get_comp($idTextCible) {
	    global $bdd;
	    $req = $bdd->prepare("SELECT * FROM complementary WHERE source_ID = '".$idTextCible."' ORDER BY RAND() LIMIT 1"); 
	    $req->execute();
	    $text_comps = $req->fetchAll();
	    return $text_comps;
	}
	
	function get_text($idText) {
	    global $bdd;
	    $req = $bdd->prepare("SELECT * FROM text WHERE text_ID = '".$idText."'"); 
	    $req->execute();
	    $texts = $req->fetchAll();
	    return $texts;
	}
    }