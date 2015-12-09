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
              include('nom.php');
              echo $_SESSION['id'] .'-'.$_SESSION['pseudo'];
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
              echo '<p class="profil"> Pseudo : ' . htmlentities($_SESSION['pseudo']) .' <span class=\'modifier\'><a href="profil_V.php?modifier=1">Modifier</a></span><br/> Email : '.htmlentities($_SESSION['mail']).'<br/> Nom : '. htmlentities($_SESSION['nom']) . '<br/> Prénom : '.htmlentities($_SESSION['prenom']).'</p>'; 
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
                    <label class="creation">Nom :</label><input class="creation" type="text" name="nom" placeholder="Nom"/><br/>
                    <label class="creation">Prénom :</label><input class="creation" type="text" name="prenom" placeholder="prenom"/><br/>
                    <label class="creation">Date de naissance : </label><input class="creation" type="text" name="date" placeholder="jj/mm/aaaa"/><br/>
                    <label class="creation">Pseudo</label><input class="creation" type="text" name="pseudo" placeholder="Pseudo"/><br/>
                    <label class="creation">Adresse mail :</label><input class="creation" type="email" name="mail" placeholder="Email"/><br/>                   
                    Localisation : <br/> 
                    <label class="creation">Adresse</label><input class="creation" type="text" name="adresse" placeholder="Adresse"/><br/>
                    <label class="creation">Code Postal :</label><input class="creation" type="text" name="code_postal" placeholder="Code Postal"/><br/>
                    <label class="creation">Ville :</label><input class="creation" type="text" name="ville" placeholder="Ville"/><br/>
                    <label class="creation">Pays :</label><input class="creation" type="text" name="pays" placeholder="Pays"/><br/>
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
        if($_SESSION['adresse']==''){
            echo 'adresse est vide';
        }
?>
        <h1>Evènement crée</h1>
           
<?php        include('../model/profil_M.php');
        
        $i=1;
           while($i<=$_SESSION['nb']){
        echo'<div class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</div>';
        
        if(isset($_SESSION['photo_even'.$i])){ ?>
        
        <div class="image_profil">
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de profil">
        </div>
        <?php } else { ?>
        <div class="image_profil">
                <img src ="image/point-d-interrogation2.jpg" alt="?">
        </div>
            <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>'; 
              echo '<p class="profil"> Type de public '.htmlentities($_SESSION['type_public'.$i]).'<br/> ' . htmlentities($date) .'<br/> Horaire '.htmlentities($_SESSION['horaire'.$i]). '<br/> Tarif : '.htmlentities($tarif).'<br/> Nombre de place : '.htmlentities($_SESSION['nb_participants'.$i]).'<br/> </p>';
              }
             include("pied_de_page.php"); ?>
       </body>


</html>

              
              
              
              
        
