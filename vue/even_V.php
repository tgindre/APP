<?php include("../model/model.php") ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>
        <?php $formulaire='';
              include("entete.php");
              include("bandeau.php");
              if($_SESSION['tarif_min']==$_SESSION['tarif_max']){
                  $tarif=$_SESSION['tarif_min'];
              } else {
                 $tarif=$_SESSION['tarif_min'].'€-'.$_SESSION['tarif_max'].'€'; 
              }
              if($_SESSION['date_debut']==$_SESSION['date_fin']){
                  $date=$_SESSION['date_debut'];
              } else {
                 $date='de'.$_SESSION['date_debut'].'à'.$_SESSION['date_fin'].'€'; 
              }
        echo'<div class="nom_even">'.htmlentities($_SESSION['ville_even']) .'</div>';
        
        if(isset($_SESSION['photo_even'])){ ?>
        
        <div class="image_profil">
            <p><a href="#">Modifier</a><br/>
                <img src ="<?php echo $_SESSION['photo_even'] ?>" alt="Photo de profil"></p>
        </div>
        <div id='modifier1'><p><span class='modifier_even'><a href="#">Modifier</a></span></p></div>
        <?php } else { ?>
        <div class="image_profil">
            <p><span class='modifier'><a href="#">Modifier</a></span><br/>
                <img src ="image/point-d-interrogation2.jpg" alt="?"></p>
        </div>
        <div id='modifier1'><p><span class='modifier'><a href="#">Modifier</a></span></p></div>
        <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even']) .'<br/> '.htmlentities($_SESSION['description']).'<br/> '.htmlentities($_SESSION['adresse_even']).'</p>'; 
              echo '<p class="profil"> Type de public '.htmlentities($_SESSION['type_public']).'<br/> ' . htmlentities($date) .'<br/> Horaire '.htmlentities($_SESSION['horaire']). '<br/> Tarif : '.htmlentities($tarif).'<br/> Nombre de place : '.htmlentities($_SESSION['nb_participants']).'<br/> </p>';

             include("pied_de_page.php"); ?>
