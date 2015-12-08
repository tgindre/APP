<?php 
    if ($formulaire == 'inscription'){
       ?>
          <div id="formulaire">
                <p> Rejoignez-vous, c'est tout simple</p>
                <form name="inscription" method="post" action="../controller/inscription_C.php">
                    <input class="information" type="text" name="nom" placeholder="Nom"/>
                    <input class="information" type="text" name="prenom" placeholder="prenom"/><br/>
                    Date de naissance : <br/> <input class="information" type="text" name="date" placeholder="jj/mm/aaaa"/><br/>
                    <input class="inscriptions" type="radio" name="genre" value="Femme"/>Femme<input class="inscriptions" type="radio" name="genre" value="Homme"/>Homme<br/>
                    <input class="information" type="text" name="pseudo" placeholder="Pseudo"/>
                    <input class="information" type="email" name="mail" placeholder="Email"/><br/>
                    <input class="information" type="password" name="password" placeholder="Mot de passe"/>
                    <input class="information" type='password' name='password_verif' placeholder="Retape ton mot de passe" /><br/>                   
                    Localisation (facultatif) : <br/> 
                    <input class="inscriptions" type="text" name="adresse" placeholder="Adresse"/><br/>
                    <input class="inscriptions" type="text" name="code_postal" placeholder="Code Postal"/>
                    <input class="inscriptions" type="text" name="ville" placeholder="Ville"/><br/>
                    <input class="inscriptions" type="text" name="pays" placeholder="Pays"/><br/>
                    <input class="valider" type="submit" name="inscr" value="Je m'inscris"/>
                </form>
            </div>
<?php
    } if($formulaire=='recherche'){
     ?>
<form name="recherche" method="post" action="recherche.php">
		<input class="recherche" type="text" name="date" placeholder="Date">
		<input class="recherche" type="text" name="lieu" placeholder="Lieu">
		<input class="recherche" type="text" name="type d'évènement" placeholder="type d'évènement">
		<input class="recherche" type="submit" name="valider" value="Recherche"/>
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
    <p class="ID" ><a href="#"> Mot de passe oublié ? </a></br>
    <a href="inscription_V.php"> Pas encore inscrit ? Viens t'inscrire gratuitement !</a></p>
    </form>
    </div>
   <?php } if ($formulaire == 'evenement') {
       ?>       
                <div id="creation_even">
                <h1>Création d'évènement</h1>
                <form name="creation_evenement" method="post" action="../controller/creation_even_C.php">
                    <label class="creation">Nom de l'évènement :</label><input class="creation" type="text" name="nom_even" placeholder="Nom de l'évènement"/><br/>
                    <label class="creation">descriptions de l'évènement : </label><textarea class="creation" name="description" placeholder="décription de l'évènement" rows="4"></textarea><br/>
                    <div id="creation_evenement2">
                    <label class="creation">Adresse de l'évènement : </label><input class="creation" type="text" name="adresse_even" placeholder="Adresse de l'évènement"/><br/>
                    <label class="creation">Ville</label><input class="creation" type="text" name="ville_even" placeholder="Ville de l'évènement"/><br/>
					<label class="creation" for="type-public">Type de public :</label>					
						<select class="creation" name="type-public" id="type-public">
							<option></option>
							<option value="0-8">0-8 ans</option>
							<option value="9-13">9-13 ans</option>
							<option value="14-17">14-17 ans</option>
							<option value="18-25">18-25 ans</option>
							<option value="26-35">26-35 ans</option>
							<option value="36-55">36-55 ans</option>
							<option value="55+">55+</option>
						</select> </br>
                    <label class="creation">Date de début : </label><input class="creation" type="text" name="date_debut"/><br/>
                    <label class="creation">Date de fin : </label><input class="creation" type="text" name="date_fin"/><br/>
                    <label class="creation">Horaire de l'évènement: </label><input class="creation" type="text" name="horaire" placeholder="ex : 4h42 - 17h30"/><br/>               
                    <label class="creation">Tarif min : </label><input class="creation" type="number" name="tarif_min"/><br/>
                    <label class="creation">Tarif max : </label><input class="creation" type="number" name="tarif_max"/><br/>
                    <label class="creation">Nombre de place de l'évènement : </label><input class="creation" type="number" name="nb_place"/><br/>
                    </div>
                    <input id="creation_valider" type="submit" name="creation_even" value="création"/>
                </form>
                </div>
    <?php   } else { }
       
 