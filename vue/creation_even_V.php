<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Sharetime</title>
        <link rel="stylesheet" href="style_APP.css"/>
    </head>
    <body>

        <?php 
             $formulaire = '';
        include("entete.php");
        $formulaire = '';        
        if (isset($_SESSION['pseudo'])) {
            if (isset($_GET['erreur'])) {
                switch ($_GET['erreur']) {
                    case 0:
                        echo "Erreur lors de la connection à la base";
                        break;
                    case 1:
                        echo "L'évènement à été crée";
                        break;
                    case 2:
                        echo "Probleme dans l'insertion du formulaire dans la base de donnée";
                        break;
                }
            }
            include("bandeau.php");
            $formulaire = 'evenement';
            include('formulaire.php');
        } else {
            include("bandeau.php"); ?>
        <h1 class="erreur"> Vous devez être connecté pour pouvoir créer un évenement </h1>
        <?php }
        ?>

        <div id = "recherche_avance"> <p> Recherche avancées <br/>
                <mark id ="app">Appuyer ici</mark> </p>
        </div>

        <?php include("pied_de_page.php"); ?>

    </body>


</html>
