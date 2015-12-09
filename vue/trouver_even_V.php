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
           include('../model/trouver_even_M.php');
           $i=1;
           while($i<=4){
        echo'<div class="nom_even">'.htmlentities($_SESSION['ville_even'.$i]) .'</div>';
        
        if(isset($_SESSION['photo_even'.$i])){ ?>
        
        <div class="image_profil">
                <img src ="<?php echo $_SESSION['photo_even'.$i] ?>" alt="Photo de profil">
        </div>
        <?php } else { ?>
        <div class="image_profil">
                <img src ="image/point-d-interrogation2.jpg" alt="?">
        </div>
            <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom_even'.$i]) .'<br/> '.htmlentities($_SESSION['description'.$i]).'<br/> '.htmlentities($_SESSION['adresse_even'.$i]).'</p>'; 
            }
          include("pied_de_page.php");
           
           
           ?>
           
       </body>


</html>
