	<header>
             <div id="entete">
                 <?php if(isset($_SESSION['pseudo'])){
                ?> 
                 <ul>   <li><a href="profil_V.php"><?php echo htmlentities($_SESSION['pseudo']) ?> <span class="tiret">|</span></a></li>
			<li><a href="../controller/deconnexion_C.php">deconnexion</a></li>
		</ul>
                <?php } else { 
                    ?>
                 <ul>
                        <li><a href="connexion_V.php">connexion</a></li>
			<li><a href="inscription_V.php"><span class="tiret">|</span>inscription</a></li>
		</ul>
                <?php } ?>
            </div>
            <img id="nom" src ="image/nom.png" alt="sharetime">
         <?php  
         if(isset($_SESSION['admin']) && $_SESSION['admin'] ){ ?>
             <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="trouver_even_V.php">Trouver un évènement <span class="tiret">|</span></a></li>
			<li><a href="creation_even_V.php">Proposer un évènement <span class="tiret">|</span></a></li>
			<li><a href="aide.php">Aide <span class="tiret">|</span></a></li>
			<li><a href="forum_index.php">Forum  <span class="tiret">|</span></a></li>
                        <li><a href="admin_V.php">Espace administrateur<span class="tiret">|</span></a></li>
		</ul>
                </nav>
            
         <?php } else { ?>
            <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="trouver_even_V.php">Trouver un évènement <span class="tiret">|</span></a></li>
			<li><a href="creation_even_V.php">Proposer un évènement <span class="tiret">|</span></a></li>
			<li><a href="#">Aide <span class="tiret">|</span></a></li>
			<li><a href="#">Forum  <span class="tiret">|</span></a></li>
		</ul>
                </nav>
         <?php } ?>
	</header>