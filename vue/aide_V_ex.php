<?php include_once "../model/model.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
</head>
<body id="fond">
	<?php include("entete.php"); ?> 
	
	<div for="ameliorer">

		<?php
		$requete = $bdd->query('SELECT * FROM aide');
		while($reponse = $requete->fetch())
			{
				?>
				<p class="cou1"><?php echo $reponse['question'] ; ?></p>
				<p class="tiret"><?php echo $reponse['reponse'] ; ?></p>
				<?php
			}
			?>
	</div>
		

<?php include("pied_de_page.php"); ?>

</body>
</html>