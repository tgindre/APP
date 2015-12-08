<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title> Sharetime</title>
    <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>
        <?php include("entete.php")  ?>
        <?php if(isset($_GET['erreur'])){
            echo  htmlentities($_GET['erreur']);
        } ?>
        <?php $formulaire='connexion' ?>
        <?php include("bandeau.php") ?>
        <?php include("pied_de_page.php") ?>
    
    </body>
</html>

