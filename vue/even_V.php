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
              if(!isset($_GET['modifier'])){
        echo'<div class="nom_even">'.htmlentities($_SESSION['ville_even']) .'</div>';
        
        if(isset($_SESSION['photo_even'])){ ?>
        
        <div class="image_profil">
            <p><a href="even_V.php?modifier='0'">Modifier</a><br/>
                <img src ="<?php echo $_SESSION['photo_even'] ?>" alt="Photo de l'evenement"></p>
        </div>
        <div id='modifier1'><p><span class='modifier_even'><a href="even_V.php?modifier='1'">Modifier</a></span></p></div>
        <?php } else { ?>
        <div class="image_profil">
            <p><span class='modifier1'><a href="even_V.php?modifier='0'">Modifier</a></span><br/>
                <img src ="image/point-d-interrogation2.jpg" alt="?"></p>
        </div>
        <div id='modifier1'><p><span class='modifier'><a href="even_V.php?modifier='1'">Modifier</a></span></p></div>
        <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even']) .'<br/> '.htmlentities($_SESSION['description']).'<br/> '.htmlentities($_SESSION['adresse_even']).'</p>'; 
              echo '<p class="profil"> Type de public '.htmlentities($_SESSION['type_public']).'<br/> ' . htmlentities($date) .'<br/> Horaire '.htmlentities($_SESSION['horaire']). '<br/> Tarif : '.htmlentities($tarif).'<br/> Nombre de place : '.htmlentities($_SESSION['nb_participants']).'<br/> </p>';
              } else {
              switch ($_GET['modifier']) {
        case 0: ?>
        <form method="post" action="../controller/modif_even_C.php" enctype="multipart/form-data">
            <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="image" id="mon_fichier" /><br />
            <input type="submit" name="image_even" value="modifier" />
        </form>
            <?php
              break;}
              }
              
              if(isset($_GET['erreur'])){
            switch ($_GET['erreur']) {
                case 0 : 
                    echo "Erreur lors du transfert";
                 break;
                case 1:
                    echo "Le fichier est trop gros";
                    break;
                 case 2:
                    echo "Extension incorrecte";
                    break;
               /* case 3 :
                    echo "Transfert réussi";
                break;*/
              }
            }
            include("pied_de_page.php"); ?>
