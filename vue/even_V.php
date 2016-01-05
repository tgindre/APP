<?php include("../model/model.php") ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <?php $formulaire='';
              include("entete.php");
              include("nom.php");
              if(!(isset($_GET['supr']) && $_GET['supr']==42)){
              if (isset($_GET['nb'])){$i=htmlentities($_GET['nb']);}
              if(!isset($_GET['modifier'])){             
              if($_SESSION['tarif_min'.$i]==$_SESSION['tarif_max'.$i]){
                  $tarif=$_SESSION['tarif_min'.$i];
              } else {
                 $tarif=$_SESSION['tarif_min'.$i].'€-'.$_SESSION['tarif_max'.$i].'€'; 
              }
              if($_SESSION['date_debut'.$i]==$_SESSION['date_fin'.$i]){
                  $date=$_SESSION['date_debut'.$i];
              } else {
                 $date='du '.$_SESSION['date_debut'.$i].'au '.$_SESSION['date_fin'.$i].''; 
              }
        echo'<div> <span class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</span></div>';
        if(!isset($_SESSION['id'])){$_SESSION['id']=-1;}
        if($_SESSION['id_createur'.$i]==$_SESSION['id']){
        if(isset($_SESSION['photo_even'.$i]) && $_SESSION['photo_even'.$i]!=''){
        ?>
        <div class="image_profil">
            <p><a href="even_V.php?modifier='0'&nb=<?php echo $i?>">Modifier</a><br/>
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de l'evenement"></p>          
        </div>
        <?php } else { ?>
        <div class="image_profil">
            <p><span><a href="even_V.php?modifier='0'&nb=<?php echo $i?>">Modifier</a></span><br/>
                <img src ="image/point-d-interrogation2.jpg" alt="?"></p>
        </div>
        <?php } ?>
            <div class="profil">   
                <form class="supprimer" method="post" action="../controller/modif_even_C.php" name="suppr">
                <input type="hidden" name="numero" value=<?php echo $i?> />
                <input class="supprimer" type="button" name="supprimer" value="Supprimer"  onclick="verif_confirm()"/><br/>
                </form>
         <?php echo '<p>' . htmlentities($_SESSION['nom_even'.$i]) .' <span class=\'modifier\'><a href="even_V.php?modifier=1&nb='.$i.'">Modifier</a></span><br/> '.htmlentities($_SESSION['description'.$i]).'<br/>'.htmlentities($_SESSION['type_even'.$i]).' <span class=\'modifier\'><a href="even_V.php?modifier=2&nb='.$i.'">Modifier</a></span><br/> '.htmlentities($_SESSION['adresse_even'.$i]).' <span class=\'modifier\'><a href="even_V.php?modifier=3&nb='.$i.'">Modifier</a></span></p>'; 
              echo '<p> Type de public '.htmlentities($_SESSION['type_public'.$i]).' <span class=\'modifier\'><a href="even_V.php?modifier=5&nb='.$i.'">Modifier</a></span><br/> ' . htmlentities($date) .' <span class=\'modifier\'><a href="even_V.php?modifier=6&nb='.$i.'">Modifier</a></span><br/> Horaire '.htmlentities($_SESSION['horaire'.$i]). ' <span class=\'modifier\'><a href="even_V.php?modifier=7&nb='.$i.'">Modifier</a></span><br/> Tarif : '.htmlentities($tarif).' <span class=\'modifier\'><a href="even_V.php?modifier=8&nb='.$i.'">Modifier</a></span><br/> Nombre de place : '.htmlentities($_SESSION['nb_participants'.$i]).' <span class=\'modifier\'><a href="even_V.php?modifier=9&nb='.$i.'">Modifier</a></span><br/> </p>'; ?>
            </div>
        <?php    } else{
           if(isset($_SESSION['photo_even'.$i]) && $_SESSION['photo_even'.$i]!=''){
        ?>
        <div class="image_profil">
            <p><img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de l'evenement"></p>
        </div>
        <?php } else { ?>
        <div class="image_profil">
            <p><img src ="image/point-d-interrogation2.jpg" alt="?"></p>
        </div>
         <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/>'.htmlentities($_SESSION['type_even'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>'; 
              echo '<p class="profil"> Type de public '.htmlentities($_SESSION['type_public'.$i]).'<br/> ' . htmlentities($date) .'<br/> Horaire '.htmlentities($_SESSION['horaire'.$i]). '<br/> Tarif : '.htmlentities($tarif).'<br/> Nombre de place : '.htmlentities($_SESSION['nb_participants'.$i]).'<br/> </p>';
        }
        } else {
              switch ($_GET['modifier']) {
        case 0: ?>
        <form method="post" action="../controller/modif_even_C.php" enctype="multipart/form-data">
            <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input type="file" name="image" id="mon_fichier" /><br />
            <input type="hidden" name="numero" value=<?php echo $i?> />
            <input type="submit" name="image_even" value="modifier" />
        </form>
            <?php
              break;
          case 1: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Nom de l'évènement :</label><input class="creation" type="text" name="nom_even"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_nom_even" value="modifier"/><br/>
                </form>
            </div> <?php
        break;
            case 2: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Type d'évènement :</label><input class="creation" type="text" name="type_even"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_type_even" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 3: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Adresse de l'évènement :</label><input class="creation" type="text" name="adresse_even"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_adresse_even" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 4: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Ville :</label><input class="creation" type="text" name="ville_even"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_ville_even" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 5: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Type de public :</label><input class="creation" type="text" name="type_public"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_type_public" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 6: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Date de début :</label><input class="creation" type="text" name="date_debut"/><br/>
                    <label class="creation">Date de fin :</label><input class="creation" type="text" name="date_fin"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_date_even" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
  
                case 7: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Horaire de l'évènement :</label><input class="creation" type="text" name="horaire"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_horaire" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                    case 8: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Tarif min :</label><input class="creation" type="number" name="tarif_min"/><br/>
                    <label class="creation">Tarif max :</label><input class="creation" type="number" name="tarif_max"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_tarif" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                    case 9: ?>
                <div id="creation_even">
                <form method="post" action="../controller/modif_even_C.php">
                    <label class="creation">Nombre de place de l'évènement :</label><input class="creation" type="number" name="nb_place"/><br/>
                    <input type="hidden" name="numero" value=<?php echo $i?> />
                    <input class="valider" type="submit" name="modif_nb_place" value="modifier"/><br/>
                </form>
            </div> <?php
        break;
              }
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
                case 3 :
                    echo "Evenement supprimer";
                break;
              }
            }
           } else {
            echo "Evenement supprimer";   
           }
         
            include("pied_de_page.php"); ?>
