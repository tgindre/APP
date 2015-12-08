<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
	</head>
	<body>
    <?php $formulaire= 'recherche' ?>
    <?php include("entete.php"); ?>
    <?php include("bandeau.php"); ?>
            
	  <h1 style="color: #f16a99;">Parce que ShareTime n'est pas qu'un site, c'est :</h1>
	<div id="description">
	<p> <img id ="jeunes" src="image/jeunes.jpg" alt="4 jeunes"> </p>
    <p>Une <span class="gras"> grande vision </span> des évènements des le premier coup</p>
    <p>Le <span class="gras"> partage d'évènements </span> sur les réseaux sociaux</p>
    <p>Des <span class="gras"> alertes personnalisées</span></p>
    <p>Des <span class="gras"> échanges de vos critiques,avis, note sur le forum</span> de discussion dédié exclusivement aux membres de ShareTime</p>
	</div>

	<p id="slogan2"> Où que tu sois, il y a un évènement pour toi ! </p>
	<p id = "slogan3" > Trouvez votre bonheur en recherchant dans le fil d'actualité l'évènement, près de chez vous, qui vous correspond </p>

			<div class ="conteneur">
				<p class="even"> <a href="#"><img class="images" src="image/pique-nique.jpg" alt="even_pique-nique"><br/> <span class="text_image">Paris, en famille</span> </a> </p>
				<p class="even"> <a href="#"><img class="images" src="image/DIRTY-DANCING-TOURNEE.jpg" alt="even_dirty-dancing_tournee"><br/> <span class="text_image">Lille, entre amis</span></a> </p>
				<p class="even"> <a href="#"><img class="images" src="image/couple-a-velo.jpg" alt="even_balade_?_velo"><br/> <span class="text_image">Nice en amoureux</span></a> </p>
			  <div class="spacer"> </div>
			</div>

			<div id = "recherche_avance"> <p> Recherche avancées <br/>
					<mark id ="app">Appuyer ici</mark> </p>
			</div>


	<?php include("pied_de_page.php"); ?>

	</body>


</html>
