<?php include('../model/model.php');

if(!isset($_SESSION['admin']) OR !$_SESSION['admin'])
{
    header('Location: page_accueil.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_app.css"/>
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
           $nombreParPage = 5;
           $formulaire='utilisateur_admin';
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
           include('../controller/trouver_utilisateur_c_admin.php');
           }
           $i=$premiereven;
           while($i<=$derniereven){
               ?>
           <div class ="trouver_even">
           <a href="profil_admin.php?nb=<?php echo $i?>" >
       <?php echo'<div><span class="nom_even">'.htmlentities($_SESSION['pseudo'.$i]) .'</span></div>';
        
        if(isset($_SESSION['photo'.$i])&& $_SESSION['photo'.$i]!=''){ ?>
        
        <div class="image_profil">
                <img src ="<?php echo $_SESSION['photo'.$i] ?>" alt="Photo de l'utilisateur">
        </div>
        <?php } else { ?>
        <div class="image_profil">
                <img src ="image/point-d-interrogation2.jpg" alt="?">
        </div>
            <?php }
              echo '<p class="profil">' . htmlentities($_SESSION['nom'.$i]) .'<br/> '.htmlentities($_SESSION['prenom'.$i]).'<br/> '.htmlentities($_SESSION['ville'.$i]).'</p>'; 
            $i++; ?>
           </a></div>
        <?php } ?>
           
           <p class="pages">
        
<?php


echo 'Page : ';

for ($p = 1 ; $p <= $nombreDePages ; $p++){ ?>
    <a href='gerer_utilisateur.php?page= <?php echo $p?>&nbp=<?php echo $nombreDePages?>&recherche=<?php echo $_GET['recherche']?>' > <?php echo $p ?>  </a> 
 
<?php  }

?>

 

</p>

 

<?php 

          include("pied_de_page.php");
           
           
           ?>
           
       </body>


</html>