<?php include('../model/model.php'); ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title> Sharetime</title>
	<link rel="stylesheet" href="style_APP.css"/>
	</head>
	<body>
    <?php $formulaire= 'recherche'; 
    include("entete_admin.php"); 
    include("bandeau.php");
    $nb_even=3;?>
            
	  <h1 id="slogan_description">Parce que ShareTime n'est pas qu'un site, c'est :</h1>
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
      <?php include('../model/trouver_even_M.php');  
           $i=1;
           while($i<=$_SESSION['nb']){
        /*$_SESSION['n_even']=$i;  Pour reconnaitre l'evenement dans la page even_V */
               if(isset($_SESSION['photo_even'.$i])&& $_SESSION['photo_even'.$i]!=''){ ?>
           <div class="even"> <a href="even_V.php?nb=<?php echo $i?>" >
           <img class="images" src="<?php echo $_SESSION['photo_even'.$i] ?>" alt="photo de l'évènement"><p class="text_image"><?php echo $_SESSION['nom_even'.$i]?></p> </a> </div>
        <?php } else { ?>
          <div class="even"> <a href="even_V.php?nb=<?php echo $i?>" >
           <img class="images" src="image/point-d-interrogation2.jpg" alt="photo de l'évènement"><p class="text_image"><?php echo $_SESSION['nom_even'.$i]?></p> </a> </div>
            <?php }
            $i++; 
            }
            ?>
        <div class="spacer"> </div>
       </div>

			<div id = "recherche_avance"> <p> Recherche avancées <br/>
					<mark id ="app">Appuyer ici</mark> </p>
			</div>

        <?php
        include("pied_de_page.php"); ?>
        </body>


</html>

