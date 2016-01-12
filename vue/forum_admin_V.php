<?php
include_once "../model/model.php";
include_once "../controller/forum_addPost.class.php";

if(!isset($_SESSION['admin']) OR !$_SESSION['admin'])
{
    header('Location: forum_index.php');
}

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
	<title>Administration du forum</title>
	<meta name="author" content="Timothee Gindre">
	<link rel="stylesheet" href="style_APP.css"/>
</head>
<body>
	<?php include("entete_admin.php"); ?>
	<h1>Administration du forum de ShareTime</h1>
	<div id="Cforum">
		<?php

		echo 'Bienvenue ' . $_SESSION['pseudo'] . ' !';

		if(isset($_GET['sujet']))// Si on est dans un sujet
		{
			$_GET['sujet'] = htmlspecialchars($_GET['sujet']);
			?>

			<div class='categories'>
				<h1><?php echo $_GET['sujet']; ?></h1>
			</div>

			<?php 

			$select = "post";
			include "../model/forum_index_M.php";

			?>
			<br><a href="forum_admin_V.php?categorie=<?php echo $_GET['categorie']; ?>" >Autres sujets</a>
			<?php
			while($reponse = $requete->fetch())
			{
				?>
				<div class='post'>
					<?php

					$select ="utilisateur";
					include "../model/forum_index_M.php";

					echo $utilisateur['pseudo'] . ' : ';
					echo '<br>' . $reponse['contenu'];
					?>
					<form name="categorie" method="post" action="../controller/forum_admin_C.php">
						
						<input type="text" name="name_categorie" value="<?php echo $_GET['categorie']; ?>" hidden>
						<input type="text" name="name_sujet" value="<?php echo $_GET['sujet']; ?>" hidden>
						<input type="text" name="id_post" value="<?php echo $reponse['id']; ?>" hidden>
						<input type="text" name="post">
						<input type="submit" name="modifPost" value="Modifier"/>
						<input type="submit" name="suppPost" value="Supprimer"/>
					</form>
					<?php
					echo '<br>'. $reponse['date'];
				?>
				</div>
					
				<?php
						
			}

			if(isset($_SESSION['pseudo']))
			{
				?>
				<form method="post" action="forum_admin_V.php?categorie=<?php echo $_GET['categorie'];?>&sujet=<?php echo $_GET['sujet']; ?>">
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

			<a href="forum_admin_V.php">Autres catégories</a>
			
			<?php
			}
			else
			{
				echo 'Vous devez être connecté pour ajouter un sujet';
			}

			$select ="sujet";
			include "../model/forum_index_M.php";

			while($reponse = $requete->fetch()){
				?>
				<div class="categories">
					
					<!-- Modifier ou supprimer un sujet -->
					<form name="categorie" method="post" action="../controller/forum_admin_C.php">
						<a href="forum_admin_V.php?categorie=<?php echo $_GET['categorie']; ?>&sujet=<?php echo $reponse['name']; ?>"><?php echo $reponse['name']; ?></a>
						<input type="text" name="id_sujet" value="<?php echo $reponse['id']; ?>" hidden>
						<input type="text" name="name_categorie" value="<?php echo $_GET['categorie']; ?>" hidden>
						<input type="text" name="name_sujet">
						<input type="submit" name="modifSujet" value="Modifier"/>
						<input type="submit" name="suppSujet" value="Supprimer"/>
					</form>
				</div>
				<?php
			}
			?>
			<br> <!-- Ajouter un sujet -->
			<form name="categorie" method="post" action="../controller/forum_admin_C.php">
				<input type="text" name="name_categorie" value="<?php echo $_GET['categorie']; ?>" hidden>
				<input type="text" name="name_sujet">
				<input type="submit" name="addSujet" value="Ajouter un sujet"/>
			</form>
			<?php
		}

		else { //Si on est sur une page normale

			$select ="categorie";
			include "../model/forum_index_M.php";
			
			while($reponse = $requete->fetch()){
			?>

			<div class='categories'>
				
				<!-- Modifier ou supprimer une catégorie -->
				<form name="categorie" method="post" action="../controller/forum_admin_C.php">
					<a href="forum_admin_V.php?categorie=<?php echo $reponse['name']; ?>"><?php echo $reponse['name']; ?></a>
					<input type="text" name="id_categorie" value="<?php echo $reponse['id']; ?>" hidden>
					<input type="text" name="name_categorie">
					<input id="categorie" type="submit" name="modifCategorie" value="Modifier"/>
					<input id="categorie" type="submit" name="suppCategorie" value="Supprimer"/>
				</form>
				
			</div>

			<?php
			}
			?>
			<br> <!-- Ajouter une catégorie -->
			<form name="categorie" method="post" action="../controller/forum_admin_C.php"><!-- Ajouter une catégorie -->
				<input type="text" name="nom_categorie">
				<input type="submit" name="addCategorie" value="Ajouter une catégorie"/>
			</form>
		<?php
		}
		?>

			
	</div>
	<?php include("pied_de_page.php"); ?>
</body>
</html>