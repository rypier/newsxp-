<!DOCTYPE html>
<html lang = "en">
<head>
    <!--link rel="stylesheet" media="screen" href="application-987d06d8b8864f5dc5d9324059ae2d3345edc55b159d1069ad80e016fbdbba64.css" /-->
    <link rel="stylesheet" media="screen" href="style.css" />
    <script src="jquery.elastic.source.js" type="text/javascript"></script>
    <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
    <script src="jquery.elastic.source.js" type="text/javascript"></script>
    <title>Expériementation</title>
    <meta charset = "utf-8">
</head>


<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<body>
<header>
    <h1></h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">accueil</a></li>
        <li>|</li>
        <li><a href="expe.php">expérimentation</a></li>
    </ul>
</nav>

<section>
    
    <?php
        $rand_keys = array_rand($array_ass, 2);
        $txt_1 = $array_ass[$rand_keys[0]];
        $txt_2 = $array_ass[$rand_keys[1]];
        $classe_1 = $txt_1['classe'];
        $classe_2 = $txt_2['classe'];
        $id_1 = $txt_1['id'];
        $id_2 = $txt_2['id']; 
        $id_source = $_SESSION['id_source'];      
    ?>
    <fieldset>
    <form method="post" id="Form1" action="expe_2.php">
        <p>STEP 1</p>
        <p class="psource">
        <label class="light" for="text_area">Source</label>
        <?php
            foreach($source_txts as $source_txt)
            {
        ?>
        <textarea readonly id="text_area" class="expand"><?php echo (utf8_encode($source_txt['description']));?></textarea>
        <input type="hidden" name="text_source_id" value="<?php echo $id_source; ?>">
        <?php
            }
        ?>
      </p>
      <hr>

      <p class="separate">
        <label class="light" for="text_area">Target 1</label>
        
        <textarea readonly id="text_area_1" class="expand"><?php echo $txt_1['texte']; ?></textarea>
        <input type="hidden" name="text_target_1_id" value="<?php echo $id_1; ?>">
        <input type="hidden" name="text_target_1_classe" value="<?php echo $classe_1; ?>">
        <label>
          <input type="radio" class="radio_1" name="radio_button" value="radio_1" required> More Similar
        </label>
      </p>

      <p class="separate margin">
        <label class="light" for="text_area">Target 2</label>
        <textarea readonly id="text_area_2" class="expand"><?php echo $txt_2['texte']; ?></textarea>
        <input type="hidden" name="text_target_2_id" value="<?php echo $id_2; ?>">
        <input type="hidden" name="text_target_2_classe" value="<?php echo $classe_2; ?>">
        <label>
          <input type="radio" class="radio_2" name="radio_button" value="radio_2" required> More Similar
        </label>
      </p>

      <p><input class="button" type="submit" value="Next" /></p>
      </form>
    </fieldset>
</section>

<footer>
  <p>2015 1D Lab. All rights reserved.</p>
</footer>

</body>
</html>