<header>
            <div id="entete">

                 <ul>   <li><a href="profil_V.php"><?php echo htmlentities($_SESSION['pseudo']) ?> <span class="tiret">|</span></a></li>
			<li><a href="../controller/deconnexion_C.php">deconnexion</a></li>
		</ul>
             </div>
    
            <img id="nom" src ="image/nom.png" alt="sharetime">

             <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="gerer_even.php">gérer les évènements <span class="tiret">|</span></a></li>
			<li><a href="gerer_utilisateur.php">gérer les utilisateurs <span class="tiret">|</span></a></li>
			<li><a href="#">Aide <span class="tiret">|</span></a></li>
			<li><a href="#">Forum  <span class="tiret">|</span></a></li>
                        <li><a href="admin_V.php">Espace administrateur<span class="tiret">|</span></a></li>
		</ul>
                </nav>

	</header>
