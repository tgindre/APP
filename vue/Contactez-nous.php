 <!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_app.css"/>

	</head>
	<body>
	
<?php include("entete.php"); ?>
            

<div id="fond"> 
	<p class="contact"> Dites-nous si vous avez une question ou besoin d'un conseil ! </p> 	
        <form method="POST" action="traitement.php">
	<p>
		<label for="ameliorer">
		Sujet
		</label>
		<br />
		
		<textarea name="sujet" rows="2" cols="50">
		</textarea>
        </p>
	<p>
		<label for="ameliorer">
		Votre mail
		</label>
		<br />
		
		<textarea name="sujet" rows="2" cols="50">
		</textarea>
        </p>       
	<p>
		<label for="ameliorer">
		Message
		</label>
		<br />
		
		<textarea name="sujet" rows="12" cols="50">
		</textarea>
        </p>
        <input type="checkbox" name="Copie" id="copie" /> <label for="copie">J'aimerais recevoir une copie de mon message</label></br>
	<input class="envoyer" type="submit" name="envoyer" value="envoyer"/></br>
        </form>
</div>
			

	
			<div id = "recherche_avance"> <p> Recherche avancées <br/>
				<a href="trouver_even_v.php" id ="app">Appuyer ici</a> </p>
			</div>

   <?php include("pied_de_page.php") ; ?>
	</body>
</html>
