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
        if(!isset($_GET['modifier'])){
        if(isset($_SESSION['photo'])){ ?>
        
        <div class="image_profil">
            <p><img src ="<?php echo $_SESSION['photo'] ?>" alt="Photo de profil"><span class='modifier'><a href="profil_V.php?modifier='0'">Modifier</a></span></p>
        </div>
        <div id='modifier1'><p><span class='modifier'><a href="profil_V.php?modifier=1">Modifier</a></span></p></div>
        <?php } else { ?>
        <div class="image_profil">
            <p><img src ="image/point-d-interrogation2.jpg" alt="?"> <span class='modifier'><a href="profil_V.php?modifier='0'">Modifier</a></span></p>
        </div>
        <div id='modifier1'><p><span class='modifier'><a href="profil_V.php?modifier=1">Modifier</a></span></p></div>
        <?php }
              echo '<p class="profil"> Pseudo : ' . htmlentities($_SESSION['pseudo']) .'<br/> Email : '.htmlentities($_SESSION['mail']).'<br/> Nom : '. htmlentities($_SESSION['nom']) . '<br/> Prénom : '.htmlentities($_SESSION['prenom']).'</p>'; 
              echo '<p class="profil"> Date de naissance : ' . htmlentities($_SESSION['date_n']) .'<br/> Adresse : '.htmlentities($_SESSION['adresse']).'<br/> Code postal : '. htmlentities($_SESSION['code_postal']) . '<br/> Ville : '.htmlentities($_SESSION['ville']).'<br/> Pays : '.htmlentities($_SESSION['pays']).'</p>';
        } else {
             switch ($_GET['modifier']) {
        case 0: ?>
        <form method="post" action="../controller/modif_profil_C.php" enctype="multipart/form-data">
            <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="image" id="mon_fichier" /><br />
            <input type="submit" name="image_profil" value="modifier" />
        </form>
        <?php
        break;
        case 1: ?>
                  <div id="creation_even">
                <p> Rejoignez-vous, c'est tout simple</p>
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Nom :</label><input class="creation" type="text" name="nom_m" placeholder="Nom"/><br/>
                    <label class="creation">Prénom :</label><input class="creation" type="text" name="prenom_m" placeholder="prenom"/><br/>
                    <label class="creation">Date de naissance : </label><input class="creation" type="text" name="date_m" placeholder="jj/mm/aaaa"/><br/>
                    <label class="creation">Pseudo</label><input class="creation" type="text" name="pseudo_m" placeholder="Pseudo"/><br/>
                    <label class="creation">Adresse mail :</label><input class="creation" type="email" name="mail_m" placeholder="Email"/><br/>                   
                    Localisation : <br/> 
                    <label class="creation">Adresse</label><input class="creation" type="text" name="adresse_m" placeholder="Adresse"/><br/>
                    <label class="creation">Code Postal :</label><input class="creation" type="text" name="code_postal_m" placeholder="Code Postal"/><br/>
                    <label class="creation">Ville :</label><input class="creation" type="text" name="ville_m" placeholder="Ville"/><br/>
                    <label class="creation">Pays :</label><input class="creation" type="text" name="pays_m" placeholder="Pays"/><br/>
                    <input class="valider" type="submit" name="modifier" value="modifier"/><br/>
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
               /* case 3 :
                    echo "Transfert réussi";
                break;*/
                }
            
        }
             include("pied_de_page.php"); ?>
              
              
              
              
        
