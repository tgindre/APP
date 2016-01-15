<?php
include_once "../model/model.php";
include_once "../controller/forum_addpost.class.php";


if(isset($_POST['name']) AND isset($_POST['sujet'])){

	$addPost = new addPost($_POST['name'],$_POST['sujet']);
	$verif = $addPost->verif();
	if($verif == 'ok'){
		if($addPost->insert()){
				
		}
	}
	else { //si on a une erreur
		$erreur = $verif;

	}
}
	
?>
<!DOCTYPE html>
<head>
	<meta charset='utf-8' />
	<title>Forum de ShareTime</title>
	<link rel="stylesheet" href="style_app.css"/>
</head>
<body>
	<?php include("entete.php"); ?>
	<h1>Bienvenue sur le forum de ShareTime !</h1>
	<div id="Cforum">
		<?php

		echo 'Bienvenue ';

		if(isset($_SESSION['pseudo'])) //Prendre en compte le pseudo s'il existe
		{
			echo $_SESSION['pseudo'];
		}

		echo ' !';

		if(isset($_GET['sujet']))// Si on est dans un sujet
		{
			$_GET['sujet'] = htmlspecialchars($_GET['sujet']);
			?>

			<div class='categories'>
				<h1><?php echo $_GET['sujet']; ?></h1>
			</div>

			<?php

			$select = "post";
			include "../model/forum_index_m.php";

			?>
			<br><a href="forum_index.php?categorie=<?php echo $_GET['categorie']; ?>" >Autres sujets</a>
			<?php
			while($reponse = $requete->fetch())
			{
				?>
				<div class='post'>
					<?php

					$select ="utilisateur";
					include "../model/forum_index_m.php";
	
					if(isset($utilisateur['photo']) && $utilisateur['photo']!=''){ ?>
        
        				
            				<h5><img src ="<?php echo $_SESSION['photo'] ?>" alt="Photo de profil">
       	 				
        			<?php
        			}
        			else { ?>
        				
            				<h5><img src ="image/point-d-interrogation2.jpg" alt="?">
        				
        				<?php
        			}
					echo $utilisateur['pseudo'] . '</h5>';
					echo '<p>' . $reponse['contenu'] . '</p>';
					echo $reponse['date'];
				?>
				</div>
					
				<?php
						
			}

			if(isset($_SESSION['pseudo']))
			{
				?>
				<form method="post" action="forum_index.php?categorie=<?php echo $_GET['categorie'];?>&sujet=<?php echo $_GET['sujet']; ?>">
					<textarea name="sujet" placeholder="Votre message..."></textarea>
					<input type="hidden" name="name" value="<?php echo $_GET['sujet']; ?>">
					<input type="submit" value="Ajouter à la conversation">
				<?php
				if(isset($erreur)){
					echo $erreur;
				}
				?>
				</form>

				<?php
			}
			else
			{
				echo 'Vous devez être connecté pour publier un message sur le forum';
			}
		}

		else if(isset($_GET['categorie'])){// Si on est dans une catégorie
			$_GET['categorie'] = htmlspecialchars($_GET['categorie']);
			?>

			<div class='categories'>
				<h1><?php echo $_GET['categorie']; ?></h1>
			</div>

			<?php
			if(isset($_SESSION['pseudo']))//empêcher les utilisateurs non connectés de publier
			{

			?>

			<a href="forum_addsujet.php?categorie=<?php echo $_GET['categorie']; ?>">Ajouter un sujet</a> ou <a href="forum_index.php">Autres catégories</a>
			
			<?php
			}
			else
			{
				echo 'Vous devez être connecté pour ajouter un sujet';
			}

			$select ="sujet";
			include "../model/forum_index_m.php";

			
			while($reponse = $requete->fetch()){
				?>
				<div class="categories">
					<a href="forum_index.php?categorie=<?php echo $_GET['categorie']; ?>&sujet=<?php echo $reponse['name']; ?>"><h1><?php echo $reponse['name']; ?><h1></a>
				</div>
				<?php
			}
			?>

			<?php
		}

		else { //Si on est sur une page normale

			
			$select ="categorie";
			include "../model/forum_index_m.php";

			while($reponse = $requete->fetch()){
			?>

			<div class='categories'>
				<a href="forum_index.php?categorie=<?php echo $reponse['name']; ?>"><?php echo $reponse['name']; ?></a>
			</div>

			<?php
			}

		}
		?>

			
	</div>
	<?php include("pied_de_page.php"); ?>
</body>
</html>