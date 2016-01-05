<?php include('../model/model.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
       <body>
           <?php include('entete_admin.php');
           include('nom.php');
            if(!isset($nombreDePages)){
        if(isset($_GET['nbp'])){
            $nombreDePages=$_GET['nbp'];
        } else {
            $nombreDePages=1;
        }
    }
           $nb_even=10;
           $nombreParPage = 20;
           $formulaire='recherche_avancée_admin';
           if(!isset($_GET['page'])){
              $_GET['page']=1;
           }
          if(!isset($_GET['recherche'])){
               $_GET['recherche']=false;
           }
           $derniereven=($_GET['page'])*$nombreParPage;  
           $premiereven=($_GET['page']-1)*$nombreParPage+1;
           if($_SESSION['nb']<$derniereven){$derniereven=$_SESSION['nb'];}
           include('formulaire.php');
           
           if(!(isset($_GET['recherche']) && $_GET['recherche'])){
               echo 'pas de recheche';
           include('../controller/trouver_even_C_admin.php');
           }
           $i=$premiereven;
           while($i<=$derniereven){
        /*$_SESSION['n_even']=$i;  Pour reconnaitre l'evenement dans la page even_V */
               ?>
           <div class ="trouver_even">
           <a href="even_admin.php?nb=<?php echo $i?>" >
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
        <?php } ?>
           
           <p class="pages">
        
<?php


echo 'Page : ';

for ($p = 1 ; $p <= $nombreDePages ; $p++){ ?>
    <a href='trouver_even_V.php?page= <?php echo $p?>&nbp=<?php echo $nombreDePages?>&recherche=<?php echo $_GET['recherche']?>' > <?php echo $p ?>  </a> 
 
<?php  }

?>

 

</p>

 

<?php 

          include("pied_de_page.php");
           
           
           ?>
           
       </body>


</html>
