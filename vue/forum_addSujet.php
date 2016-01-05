<?php //session_start();
include_once "../model/model.php";
include_once "../controller/forum_addSujet.class.php";
//$bdd = bdd();

if(isset($_POST['name']) AND isset($_POST['sujet'])){

	$addSujet = new addSujet($_POST['name'],$_POST['sujet'],$_POST['categorie']);
	$verif = $addSujet->verif();
	if($verif == 'ok'){
		if($addSujet->insert()){
			header('Location: forum_index.php?categorie='.$_GET['categorie']. '&sujet='.$_POST['name']);
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
	<title>Mon super forum !</title>
	<meta name="author" content="Timothee Gindre">
	<link rel="stylesheet" type="text/css" href="forum_general.css" />
	<link rel="stylesheet" href="style_APP.css"/>
	<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css' >
<head>
<body>
	<?php include("entete.php"); ?>
	<h1>Ajouter un sujet</h1>
	<div id="Cforum">
		<?php echo 'Bienvenue : ' . $_SESSION['pseudo'] . ' ! - <a href="forum_deconnexion.php">Deconnexion</a> '; ?>

		<form method="post" action="forum_addSujet.php?categorie=<?php echo $_GET['categorie']; ?>" >
			<p>
				<br><input type="text" name="name" placeholder="Nom du sujet..." /><br>
				<textarea name="sujet" placeholder="Contenu du sujet..." ></textarea>
				<input type="hidden" value="<?php echo $_GET['categorie']; ?>" name="categorie" >
				<input type="submit" value="Ajouter le sujet">
				<?php
				if(isset($erreur)){
					echo $erreur;
				}
				?>
				<br><a href="forum_index.php?categorie=<?php echo $_GET['categorie']; ?>" >Revenir aux sujets</a>
			</p>
	</div>
	<?php include("pied_de_page.php"); ?>
</body>
</html>
