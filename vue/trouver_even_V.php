<?php include('../model/model.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
       <body>
           <?php include('entete.php');
           include('nom.php');
           $nb_even=10;
           $formulaire='recherche_avancée';
           include('formulaire.php');
           if(!(isset($_SESSION['type']))){
               echo 'pas de recherche<br/>';
           include('../model/trouver_even_M.php');
           }
           $i=1;
           while($i<=$_SESSION['nb']){
        /*$_SESSION['n_even']=$i;  Pour reconnaitre l'evenement dans la page even_V */?>
           <div class ="trouver_even">
           <a href="even_V.php?nb=<?php echo $i?>" >
       <?php echo'<div><span class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</span></div>';
        
        if(isset($_SESSION['photo_even'.$i])&& $_SESSION['photo_even'.$i]!=''){ ?>
        
        <div class="image_profil">
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de l'evenement">
        </div>
        <?php } else { ?>
        <div class="image_profil">
                <img src ="image/point-d-interrogation2.jpg" alt="?">
        </div>
            <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>'; 
            $i++; ?>
           </a></div>
        <?php }
            
          include("pied_de_page.php");
           
           
           ?>
           
       </body>


</html>
