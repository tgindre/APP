<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
	<link rel="stylesheet" href="APPCSS.css"/>

	</head>
	
	<body>
	<?php $formulaire= 'recherche'; 
    include("entete.php"); 
    include("nom.php");
    $nb_even=3;?>
	
	<div class="faq">
		<h1>FAQ</h1>
	</div>
	
	
	
	<div class="q0">
		<div class="titre">ShareTime, comment ça marche? </div>
		
		<div class="categories_faq">	
			
				<div class="categorie1">
					<p class="one">1.</p> 
						<div class="rechercher"><strong><a href="trouver_even_V.php" class="R">Rechercher</a> </strong></div><div class="rec"> en quelques clics des évènements</div>
				</div>
				
				<div class="categorie2">
					<p class="two">2.</p>
						<div class="selectionner"><strong>Selectionner </strong></div><div class="sel">le ou les évènements de mon choix !</div>
				</div>
				
				<div class="categorie3">
					<p class="three">3.</p>
						<div class="val"><strong>Valider</strong></div> <div class="v"> en s'inscrivant aux différents évènements choisis! </div>
				</div>			
		</div>		
	</div>
	<ul>
		
		
		
		<div class="q1">
			<li><strong class="trouver">Je voudrais trouver un évènement.</strong></br>
					<em>	Pour cela rien de plus simple!
						Cliquez sur recherches avancées dans la bar d'accueil puis renseignez les différents champs et enfin appuyez sur entrée. 
						Il ne vous reste plus qu'à faire votre choix parmi les différents évènements proposés!
						Pour accéder à la page "Trouver un évènement" <a href="trouver_even_V.php" class="find">cliquez-ici</a>
			</em></li>
		</div>
		
		
		
		<div class="q2">
			<li><strong class="perdu">Je ne trouve pas d'évènement/je ne trouve pas l'évènement que je cherche.</strong></br>
						<em>Peut-être avez-vous mal renseigné certains champs dans la recherche avancée, ou peut-être vous êtes vous trompés sur l'othographe du
						nom de l'évènement... 
						sinon c'est tout simplement que l'évènement n'existe pas ou plus!
						Pour accéder à la page "Trouver un évènement" <a href="trouver_even_V.php" class="find">cliquez-ici</a>
						</em>
			</li>
		</div>
		
		
		
		<div class="q3">
			<li><strong class="creation">Je souhaiterais créer un évènement.</strong></br>
						<em>Pour cela renseignez tous les champs de la page <em>"Proposer un évènement".</em>
						Il est possible de proposer plusieurs évènements à la fois.
						Pour accéder à la page "Créer un évènement" <a href="creation_even_V.php" class="create">cliquez-ici</a>
						</em>
			</li>
		</div>

		<div class="q4">
			<li><strong class="contact">Pour toutes autres informations/questions supplémentaires</strong></br>
						<em>N'hésitez pas à vous référez au manuel utilisateur en cliquant <a href="Contactez-nous.php" class="call" >ici!</a>
						</br>ou à défaut pensez à vérifier que les réponses à vos questions ne sont pas dans le <a href="forum_index.php" class="f" >forum!</a>
						</em>
			</li>
		</div>
	</ul>
	
	 <?php
        include("pied_de_page.php"); ?>
	</body>
</html>