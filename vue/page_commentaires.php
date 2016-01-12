<?php include('../model/model.php'); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
	</head>
	<body>
    <?php include("entete.php"); ?>
	
<?php

$requete_moyenne = mysql_query("SELECT AVG(list_note) FROM commentaire "); 
$moyenne = mysql_result($requete_moyenne,0); 
echo 'Spectateurs : . $moyenne . '
?>
	<h2>Commentaires</h2>

<?php
 
$req = $bdd->query('SELECT * FROM commentaire ORDER BY date');

while ($donnees = $req->fetch())
{
	$req2 = $bdd->prepare('SELECT * FROM utilisateur WHERE ID_utilisateur = :ID_utilisateur');
	$req2->execute(array('ID_utilisateur'=>$donnees['utilisateur']));
	
	$utilisateur = $req2->fetch();
	
?>
<p class="info" ><strong><?php echo $utilisateur['pseudo']; ?></strong> le <?php echo $donnees['date']; ?></p>
<p class="contenu"><?php echo nl2br(htmlspecialchars($donnees['contenu'])); ?></p>
<?php
} 
$req->closeCursor();
?>

	<form method="post" action="page_commentaires.php">
   <p>
       <label for="note">Quel note metteriez-vous ?</label><br />
       <select name="list_note" id="note">
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
		   <option value="9">9</option>
           <option value="10">10</option>
       </select>
   </p>

	<p> Comment avez-vous trouvez cet évènement ?</p>
	
	<p>
		<input type="text" name="Commentaire" placeholder="taper votre commentaire ici" size="80px" />
		<input type="submit" value="Publier" />
	</p>
	</form>
	
	</body>
	

	