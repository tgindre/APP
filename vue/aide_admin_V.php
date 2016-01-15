<?php include_once "../model/model.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_app.css"/>
</head>
<body id="fond">
	<?php include("entete_admin.php"); ?> 
	
	<div for="ameliorer">

		<?php
		$requete = $bdd->query('SELECT * FROM aide');
		while($reponse = $requete->fetch())
			{
				?>
				<!-- Modifier ou supprimer un sujet -->
				<form name="categorie" method="post" action="../controller/aide_admin_c.php">
					<input type="text" name="id_aide" value="<?php echo $reponse['id']; ?>" hidden>
					<p class="cou1"><?php echo $reponse['question'] ; ?></p>
					<p class="tiret"><?php echo $reponse['reponse'] ; ?></p>
					<input type="text" name="question" value="Titre"><br>
					<textarea name="reponse">Explication</textarea>
					<input type="submit" name="modif_aide" value="Modifier"/>
					<input type="submit" name="supp_aide" value="Supprimer"/>
				</form>
				<?php
			}
			?>

		<!-- Ajouter une nouvelle question et une nouvelle réponse -->
		<form name="categorie" method="post" action="../controller/aide_admin_c.php">
			<input type="text" name="add_question" value="Nouveau titre"><br>
			<textarea name="add_reponse">Nouvelle explication</textarea>
			<input type="submit" name="add_aide" value="Ajouter">
		</form>
	</div>
		

<?php include("pied_de_page.php"); ?>

</body>
</html>