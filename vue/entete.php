	<header>
             <div id="entete">
                 <?php if(isset($_SESSION['pseudo'])){
                ?> 
                 <ul>   <li><a href="profil_v.php"><?php echo htmlentities($_SESSION['pseudo']) ?> <span class="tiret">|</span></a></li>
			<li><a href="../controller/deconnexion_c.php">deconnexion</a></li>
		</ul>
                <?php } else { 
                    ?>
                 <ul>
                        <li><a href="connexion_v.php">connexion</a></li>
			<li><a href="inscription_v.php"><span class="tiret">|</span>inscription</a></li>
		</ul>
                <?php } ?>
            </div>
            <img id="nom" src ="image/nom.png" alt="sharetime"/>
         <?php  
         if(isset($_SESSION['admin']) && $_SESSION['admin'] ){ ?>
             <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="trouver_even_v.php">Trouver un évènement <span class="tiret">|</span></a></li>
			<li><a href="creation_even_v.php">Proposer un évènement <span class="tiret">|</span></a></li>
			<li><a href="aide1.php">Aide <span class="tiret">|</span></a></li>
			<li><a href="forum_index.php">Forum  <span class="tiret">|</span></a></li>
                        <li><a href="admin_v.php">Espace administrateur<span class="tiret">|</span></a></li>
		</ul>
                </nav>
            
         <?php } else { ?>
            <nav>
		<ul class="menu">
			<li><a href="page_accueil.php"><span class="tiret">|</span> Accueil <span class="tiret">|</span></a></li>
			<li><a href="trouver_even_v.php">Trouver un évènement <span class="tiret">|</span></a></li>
			<li><a href="creation_even_v.php">Proposer un évènement <span class="tiret">|</span></a></li>
			<li><a href="aide1.php">Aide <span class="tiret">|</span></a></li>
			<li><a href="forum_index.php">Forum  <span class="tiret">|</span></a></li>
		</ul>
                </nav>
         <?php } ?>
	</header>