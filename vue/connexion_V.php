<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <title> Sharetime</title>
    <link rel="stylesheet" href="style_app.css"/>
    </head>
    <body>
        <?php include("entete.php")  ?>
        <?php if(isset($_GET['erreur'])){
                        switch ($_GET['erreur']) {
                case 0 : 
                    $erreur= 'Votre mot de passe ne correspond pas';
                 break;
                case 1:
                    $erreur= 'Votre adresse mail n existe pas';
                    break;
              }
        } ?>
        <?php $formulaire='connexion' ?>
        <?php include("bandeau.php") ?>
        <?php include("pied_de_page.php") ?>
    
    </body>
</html>

