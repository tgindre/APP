<?php include("../model/model.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>
        
        <?php include("entete.php");
        $formulaire='inscription';
        if(isset($_GET['erreur'])){
    switch ($_GET['erreur']) {
        case 0:
        echo "Erreur lors de la connection à la base";
        break;
        case 1:
        echo "Vos deux mots de passe ne sont pas les mêmes";
        break;
        case 2:
        echo "Probleme dans l'insertion du formulaire dans la base de donnée";
        break;
    }
} 
        include("bandeau.php") ?>

        <div id = "recherche_avance"> <p> Recherche avancées <br/>
                <mark id ="app">Appuyer ici</mark> </p>
        </div>

        <?php include("pied_de_page.php"); ?>

    </body>


</html>
