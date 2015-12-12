<?php include("../model/model.php") ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>
        <?php $formulaire='';
              $i=$_SESSION['n_even'];
              include("entete.php");
              include("bandeau.php");
              if($_SESSION['tarif_min'.$i]==$_SESSION['tarif_max'.$i]){
                  $tarif=$_SESSION['tarif_min'.$i];
              } else {
                 $tarif=$_SESSION['tarif_min'.$i].'€-'.$_SESSION['tarif_max'.$i].'€'; 
              }
              if($_SESSION['date_debut'.$i]==$_SESSION['date_fin'.$i]){
                  $date=$_SESSION['date_debut'.$i];
              } else {
                 $date='de'.$_SESSION['date_debut'.$i].'à'.$_SESSION['date_fin'.$i].'€'; 
              }
              if(!isset($_GET['modifier'])){
        echo'<div class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</div>';
        
        if(isset($_SESSION['photo_even'.$i])){ ?>
        
        <div class="image_profil">
            <p><a href="even_V.php?modifier='0'">Modifier</a><br/>
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de l'evenement"></p>
        </div>
        <div class='modifier1'><p><span class='modifier'><a href="even_V.php?modifier='1'">Modifier</a></span></p></div>
        <?php } else { ?>
        <div class="image_profil">
            <p><span><a href="even_V.php?modifier='0'">Modifier</a></span><br/>
                <img src ="image/point-d-interrogation2.jpg" alt="?"></p>
        </div>
        <div class='modifier1'><p><span class='modifier'><a href="even_V.php?modifier='1'">Modifier</a></span></p></div>
        <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/>'.htmlentities($_SESSION['type_even'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>'; 
              echo '<p class="profil"> Type de public '.htmlentities($_SESSION['type_public'.$i]).'<br/> ' . htmlentities($date) .'<br/> Horaire '.htmlentities($_SESSION['horaire'.$i]). '<br/> Tarif : '.htmlentities($tarif).'<br/> Nombre de place : '.htmlentities($_SESSION['nb_participants'.$i]).'<br/> </p>';
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
