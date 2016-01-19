<header>
            <div id="entete">

                 <ul>   <li><a href="profil_v.php"><?php echo htmlentities($_SESSION['pseudo']) ?> <span class="tiret">|</span></a></li>
			<li><a href="../controller/deconnexion_c.php">deconnexion</a></li>
		</ul>
             </div>
    
            <img id="nom" src ="image/nom.png" alt="sharetime">

             <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="gerer_even.php">Gérer les évènements <span class="tiret">|</span></a></li>
			<li><a href="gerer_utilisateur.php">Gérer les utilisateurs <span class="tiret">|</span></a></li>
			<li><a href="aide1.php">Aide <span class="tiret">|</span></a></li>
			<li><a href="forum_admin_v.php">Gérer le Forum  <span class="tiret">|</span></a></li>
                        <li><a href="admin_v.php"><span id="mode_admin"> Mode administrateur</span><span class="tiret">|</span></a></li>
		</ul>
                </nav>

	</header>
