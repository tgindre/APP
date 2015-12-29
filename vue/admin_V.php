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
            
	  <h1 id="slogan_description_admin">Espace administrateur</h1>
	<div id="description_admin">
	<p> <img id ="jeunes" src="image/jeunes.jpg" alt="4 jeunes"> </p>
    <p><span class="gras"> Permet : </span> </p>
    <ul id ='admin_liste'>
	<li>d’ajouter, supprimer ou bannir des utilisateurs</li>
        <li>d’ajouter, modifier ou supprimer des événements</li>
        <li>de modérer les commentaires et les messages du forum</li>
        <li>d’administrer la rubrique d’aide en ligne</li>
		</ul>

	</div>

	<p id="slogan2"> Où que tu sois, il y a un évènement pour toi ! </p>
	<p id = "slogan3" > Trouvez votre bonheur en recherchant dans le fil d'actualité l'évènement, près de chez vous, qui vous correspond </p>



			<div id = "recherche_avance"> <p> Recherche avancées <br/>
					<mark id ="app">Appuyer ici</mark> </p>
			</div>

        <?php
        include("pied_de_page.php"); ?>
        </body>


</html>

