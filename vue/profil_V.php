<?php include("../model/model.php") ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>
        <?php $formulaire='';
              include("entete.php");
              include('nom.php');
        if(!(isset($_GET['suppr']))){
        if(!isset($_GET['modifier'])){
        if(isset($_SESSION['photo']) && $_SESSION['photo']!=''){ ?>
        
        <div class="image_profil">
            <p><img src ="<?php echo $_SESSION['photo'] ?>" alt="Photo de profil"><span class='modifier'><a href="profil_V.php?modifier='0'">Modifier</a></span></p>
        </div>
        <?php } else { ?>
        <div class="image_profil">
            <p><img src ="image/point-d-interrogation2.jpg" alt="?"> <span class='modifier'><a href="profil_V.php?modifier='0'">Modifier</a></span></p>
        </div>
        <?php } ?>
        <div class="profil">   
                <form method="post" action="../controller/modif_profil_C.php" id="confirm_suppr" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));">
                <input type="hidden" name="numero" value=<?php echo $i?> />
                <input class="supprimer" type="submit" name="supprimer" value="Supprimer" /><br/>
                </form>
        </div>
    <?php     echo '<p class="profil"> Pseudo : ' . htmlentities($_SESSION['pseudo']) .' <span class=\'modifier\'><a href="profil_V.php?modifier=1">Modifier</a></span><br/> Email : '.htmlentities($_SESSION['mail']).' <span class=\'modifier\'><a href="profil_V.php?modifier=2">Modifier</a></span><br/> Nom : '. htmlentities($_SESSION['nom']) . ' <span class=\'modifier\'><a href="profil_V.php?modifier=3">Modifier</a></span><br/> Prénom : '.htmlentities($_SESSION['prenom']).'<span class=\'modifier\'><a href="profil_V.php?modifier=4">Modifier</a></span><br/> Date de naissance : ' . htmlentities($_SESSION['date_n']) .' <span class=\'modifier\'><a href="profil_V.php?modifier=5">Modifier</a></span></p>'; 
              echo '<p class="profil"> Adresse : '.htmlentities($_SESSION['adresse']).' <span class=\'modifier\'><a href="profil_V.php?modifier=6">Modifier</a></span><br/> Code postal : '. htmlentities($_SESSION['code_postal']) . ' <span class=\'modifier\'><a href="profil_V.php?modifier=7">Modifier</a></span><br/> Ville : '.htmlentities($_SESSION['ville']).' <span class=\'modifier\'><a href="profil_V.php?modifier=8">Modifier</a></span><br/> Pays : '.htmlentities($_SESSION['pays']).' <span class=\'modifier\'><a href="profil_V.php?modifier=9">Modifier</a></span></p>';
        } else {
            
            /* modification du profil ligne par ligne*/ 
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
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Pseudo</label><input class="creation" type="text" name="pseudo" placeholder="Pseudo"/><br/>
                    <input class="valider" type="submit" name="modifier_pseudo" value="modifier"/><br/>
                </form>
            </div> <?php
        break;
            case 2: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Adresse mail :</label><input class="creation" type="email" name="mail" placeholder="Email"/><br/>
                    <input class="valider" type="submit" name="modifier_mail" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 3: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Nom :</label><input class="creation" type="text" name="nom" placeholder="Nom"/><br/>
                    <input class="valider" type="submit" name="modifier_nom" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 4: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Prénom :</label><input class="creation" type="text" name="prenom" placeholder="prenom"/><br/>
                    <input class="valider" type="submit" name="modifier_prenom" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 5: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Date de naissance : </label><input class="creation" type="text" name="date" /><br/>
                    <input class="valider" type="submit" name="modifier_date_n" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 6: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Adresse</label><input class="creation" type="text" name="adresse" placeholder="Adresse"/><br/>
                    <input class="valider" type="submit" name="modifier_adresse" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 7: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Code Postal :</label><input class="creation" type="text" name="code_postal" placeholder="Code Postal"/><br/>
                    <input class="valider" type="submit" name="modifier_code_postal" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 8: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Ville :</label><input class="creation" type="text" name="ville" placeholder="Ville"/><br/>
                    <input class="valider" type="submit" name="modifier_ville" value="modifier"/><br/>
                </form>
            </div> <?php    
        break;
                case 9: ?>
                <div id="creation_even">
                <form name="inscription" method="post" action="../controller/modif_profil_C.php">
                    <label class="creation">Pays :</label><input class="creation" type="text" name="pays" placeholder="Pays"/><br/>
                    <input class="valider" type="submit" name="modifier_pays" value="modifier"/><br/>
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
                    echo "Deja existant";
                break;
                }
            
        }
        } else {
            echo "Evenement supprimer";  
        }
?>
           
<?php        include('../controller/profil_C.php');
        
        $i=1;
        if (isset($even)){
            echo '<h1 class="profil">Evènement créé</h1>' ;
            while($i<=$_SESSION['nb']){
            $_SESSION['n_even']=$i; ?>
            <div class ="trouver_even">
                <a href="even_V.php?nb=<?php echo $i?>" >
            <?php
            echo'<div><span class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</span></div>';
        
           if(isset($_SESSION['photo_even'.$i]) && $_SESSION['photo_even'.$i]!=''){ ?>
        
            <div class="image_profil">
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de profil">
            </div>
            <?php } else { ?>
            <div class="image_profil">
                <img src ="image/point-d-interrogation2.jpg" alt="?">
            </div>
                <?php }
                echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>';
                $i++; ?>
            </a></div>
        <?php
        }
            }
        else {
            echo '<h1 class="profil">Aucun évènement créé</h1>' ;
        }
             include("pied_de_page.php"); ?>
       </body>


</html>

              
              
              
              
        
