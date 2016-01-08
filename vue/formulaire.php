<?php 
    if ($formulaire == 'inscription'){ 
       ?>
          <div id="formulaire">
                <p> Rejoignez-vous, c'est tout simple</p>
                <form name="inscription" onsubmit="return verif_champ()" method="post" action="../controller/inscription_C.php">
                    <input class="information" type="text" name="nom" placeholder="Nom"/>
                    <input class="information" type="text" name="prenom" placeholder="prenom"/><br/>
                    Date de naissance : <br/> <input class="information" type="text" name="date" placeholder="jj/mm/aaaa"/><br/>
                    <input class="inscriptions" type="radio" name="genre" value="Femme"/>Femme<input class="inscriptions" type="radio" name="genre" value="Homme" checked="checked"/>Homme<br/>
                    <input id="pseudo" class="information" type="text" name="pseudo" placeholder="Pseudo"/>
                    <input id="email" class="information" type="email" name="mail" placeholder="Email"/><br/>
                    <input id="mdp" class="information" type="password" name="password" placeholder="Mot de passe"/>
                    <input class="information" type='password' name='password_verif' placeholder="Retape ton mot de passe" /><br/>
                    <?php if(isset($erreur)){?> 
                    <p id='erreur'> <?php echo $erreur; ?> </p>
                      <?php   } ?>
                    <h4 id="localisation"> Localisation (facultatif) :</h4> 
                    <input class="inscriptions" type="text" name="adresse" placeholder="Adresse"/><br/>
                    <input class="inscriptions" type="text" name="code_postal" placeholder="Code Postal"/>
                    <input class="inscriptions" type="text" name="ville" placeholder="Ville"/><br/>
                    <input class="inscriptions" type="text" name="pays" placeholder="Pays"/><br/>
                    <input class="valider" type="submit" name="inscr" value="Je m'inscris"/>
                </form>
            </div>

<?php } if($formulaire=='recherche'){
     ?>
<form name="recherche" method="post" action="../controller/recherche_C.php">
		<input class="recherche" type="text" name="date" placeholder="jj/mm/aaaa">
		<input class="recherche" type="text" name="lieu" placeholder="Lieu">
		<input class="recherche" type="text" name="type_even" placeholder="type d'évènement">
		<input class="recherche" type="submit" name="recherche" value="Recherche"/>
                </form>
<?php 
    } if ($formulaire =='connexion'){
        ?>
            <div id = "formulaire2"> 
    <p> Identification </p> <br/>
    <form name="Identification" method="post" action="../controller/connexion_C.php">
        <input class="Identification" type="email" name="mail" placeholder="Email"> </br>
        <input class="Identification" type="password" name="password" placeholder="Mot de passe"></br>
        <input class="connexion" type="submit" name="connexion" value="Connexion"/>
    <p class="ID" ><a href="page_apresmdpoublier.php"> Mot de passe oublié ? </a></br>
    <a href="inscription_V.php"> Pas encore inscrit ? Viens t'inscrire gratuitement !</a></p>
    </form>
    </div>
<?php 
    } if ($formulaire =='mdpoublier'){
        ?>
            <div id = "formulaire2"> 
    <h6><strong>Mot de passe perdu?</strong></h6>
	<p class="p1"> Vous ne vous souvenez plus de votre mot de passe ? Entrez votre adresse email et nous vous en enverrons un nouveau dans votre boîte mail.</p>
    <form name="Identification" method="post" action="../controller/renvoie_nouveau_mdp.php">
        <input class="Identification" type="email" name="mail" placeholder="Email"> </br>
        <input class="Validation" type="submit" name="Valide" value="Valide"/>
    </form>
    </div>	
<?php 
    } if ($formulaire =='reconnexion'){
        ?>
            <div id = "formulaire2"> 
    <p> Identification </p> <br/>
    <form name="Identification" method="post" action="../controller/connexion_C.php">
	    <?php echo "Vos identifiants vous ont été envoyés à l'adresse email saisie.</br>"; ?>
        <input class="Identification" type="email" name="mail" placeholder="Email"> </br>
        <input class="Identification" type="password" name="password" placeholder="Mot de passe"></br>
        <input class="connexion" type="submit" name="connexion" value="Connexion"/>
    <p class="ID" ><a href="page_apresmdpoublier.php"> Mot de passe oublié ? </a></br>
    <a href="inscription_V.php"> Pas encore inscrit ? Viens t'inscrire gratuitement !</a></p>
    </form>
    </div>
<?php } if ($formulaire == 'evenement') {
       ?>       
                <div id="creation_even">
                <h1>Création d'évènement</h1>
                <form name="creation_evenement" method="post" action="../controller/creation_even_C.php">
                    <label class="creation">Nom de l'évènement :</label><input class="creation" type="text" name="nom_even"/><br/>
                    <label class="creation">Descriptions de l'évènement : </label><textarea class="creation" name="description" rows="4"></textarea><br/>
                    <label class="creation">Type d'évènement </label><input class="creation" type="text" name="type_even"/><br/>
                    <div id="creation_evenement2">
                    <label class="creation">Adresse de l'évènement : </label><input class="creation" type="text" name="adresse_even"/><br/>
                    <label class="creation">Ville</label><input class="creation" type="text" name="ville_even"/><br/>
                    <label class="creation">type de public </label><input class="creation" type="text" name="type_public"/><br/>
                    <label class="creation">Date de début : </label><input class="creation" type="text" name="date_debut" placeholder="jj/mm/aaaa"/><br/>
                    <label class="creation">Date de fin : </label><input class="creation" type="text" name="date_fin" placeholder="jj/mm/aaaa"/><br/>
                    <label class="creation">Horaire de l'évènement : </label><input class="creation" type="text" name="horaire" placeholder="ex : 4h42 - 17h30"/><br/>               
                    <label class="creation">Tarif min : </label><input class="creation" type="number" name="tarif_min"/><br/>
                    <label class="creation">Tarif max : </label><input class="creation" type="number" name="tarif_max"/><br/>
                    <label class="creation">Nombre de place de l'évènement : </label><input class="creation" type="number" name="nb_place"/><br/>
                    </div>
                    <input id="creation_valider" type="submit" name="creation_even" value="création"/>
                </form>
                </div>
    <?php   } 
    if($formulaire=='recherche_avancée'){ ?>
         <div id="recherche_avancée">
                <h1>Recherche d'évènement</h1>
                <form name="creation_evenement" method="post" action="../controller/trouver_even_C.php">
                    <label class="creation">Nom de l'évènement :</label><input class="creation" type="text" name="nom_even"/><br/>
                    <label class="creation">Type d'évènement </label><input class="creation" type="text" name="type_even"/><br/>
                    <label class="creation">type de public </label><input class="creation" type="text" name="type_public"/><br/>
                    <label class="creation">Lieu</label><input class="creation" type="text" name="lieu"/><br/>                    
                    <label class="creation">Date l'évènement : </label><input class="creation" type="text" name="date_even"/><br/>
                    <input type="hidden" name="page" value=<?php echo htmlentities($_GET['page'])?> />
                    <input id="creation_valider" type="submit" name="recherche_av" value="recherche avancée"/>
                </form>
                </div>
        
   <?php } if($formulaire=='recherche_avancée_admin'){ ?>
         <div id="recherche_avancée">
                <h1>Recherche d'évènement</h1>
                <form name="creation_evenement" method="post" action="../controller/trouver_even_C_admin.php">
                    <label class="creation">Nom de l'évènement :</label><input class="creation" type="text" name="nom_even"/><br/>
                    <label class="creation">Type d'évènement </label><input class="creation" type="text" name="type_even"/><br/>
                    <label class="creation">type de public </label><input class="creation" type="text" name="type_public"/><br/>
                    <label class="creation">Lieu</label><input class="creation" type="text" name="lieu"/><br/>                    
                    <label class="creation">Date l'évènement : </label><input class="creation" type="text" name="date_even"/><br/>
                    <input type="hidden" name="page" value=<?php echo htmlentities($_GET['page'])?> />
                    <input id="creation_valider" type="submit" name="recherche_av" value="recherche avancée"/>
                </form>
                </div>
        
   <?php } if($formulaire=='utilisateur_admin'){ ?>
         <div id="recherche_avancée">
                <h1>Recherche d'utilisateur</h1>
                <form name="creation_evenement" method="post" action="../controller/trouver_utilisateur_C_admin.php">
                    <label class="creation">Nom de l'utilisateur :</label><input class="creation" type="text" name="nom"/><br/>
                    <label class="creation">Prénom de l'utilisateur : </label><input class="creation" type="text" name="prenom"/><br/>
                    <label class="creation">Pseudo de l'utilisateur :</label><input class="creation" type="text" name="pseudo"/><br/>
                    <label class="creation">Email de l'utilisateur : </label><input class="creation" type="email" name="mail"/><br/>                    
                    <label class="creation">Lieu </label><input class="creation" type="text" name="lieu"/><br/>
                    <input type="hidden" name="page" value=<?php echo htmlentities($_GET['page'])?> />
                    <input id="creation_valider" type="submit" name="utilisateur" value="recherche avancée"/>
                </form>
                </div>
        
   <?php }
   else { }
       
 