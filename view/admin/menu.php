<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="eleve.php">Elèves</a>
				</li>
                <li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="communique.php">Communiqué General</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="individuel.php">communiqué Individuel</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter[<?= $_SESSION['user_name'];  ?>]</a>
				</li>
			</ul>
		</div>