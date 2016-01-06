<?php include('../model/model.php'); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
	</head>
	<body>
    <?php $formulaire= '';
    include("entete_admin.php"); 
    include("bandeau.php");
    $nb_even=3;?>
        <a  class="modif_photo" href="admin_V.php?modifier='0'">Modifier</a><br/>    
	  <h1 id="slogan_description_admin">Espace administrateur</h1>
         <?php if(!isset($_GET['modifier'])){ ?>
	<div id="description_admin">
	<p> <img id ="jeunes" src="image/accueil.jpg" alt="photo accueil"> </p>
    <p><span class="gras"> Permet : </span> </p>
    <ul id ='admin_liste'>
	<li>d’ajouter, supprimer ou bannir des utilisateurs</li>
        <li>d’ajouter, modifier ou supprimer des événements</li>
        <li>de modérer les commentaires et les messages du forum</li>
        <li>d’administrer la rubrique d’aide en ligne</li>
		</ul>
    <a  class="modif_photo" href="admin_V.php?modifier='1'">Modifier</a><br/>
	</div>

	<p id="slogan2"> Où que tu sois, il y a un évènement pour toi ! </p>
	<p id = "slogan3" > Trouvez votre bonheur en recherchant dans le fil d'actualité l'évènement, près de chez vous, qui vous correspond </p>



			<div id = "recherche_avance"> <p> Recherche avancées <br/>
					<mark id ="app">Appuyer ici</mark> </p>
			</div>

        <?php
         } else {  
             switch ($_GET['modifier']) {
        case 0: ?>
        <div>
        <h1>Image bandeau</h1>
        <form method="post" action="../controller/modif_photo_C.php" enctype="multipart/form-data">
            <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input type="file" name="image" id="mon_fichier" /><br />
            <input type="submit" name="image_bandeau" value="modifier" />
        </form>
                </div>
            <?php
              break;
          case 1: ?>
                 <div>
       <h1>Image accueil</h1>
        <form method="post" action="../controller/modif_photo_C.php" enctype="multipart/form-data">
            <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
            <input type="file" name="image" id="mon_fichier" /><br />
            <input type="submit" name="image_accueil" value="modifier" />
        </form>        </div>
             <?php
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
        </body>


</html>

