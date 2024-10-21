<?php
	session_start();
	// Connection datatabase
	require_once '../../bdd/connexion.php';
	require_once '../../model/admin/insert-eleve.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width-device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.css">
	<style type="text/css">
		.spacer{
				margin-top: 10px;
			}
			.space{
				margin-top: 70px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
</head>
<body>
	<!-- Navigation -->
		<?php require_once('menu.php');   ?>
	<!-- navigation end -->
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a">AJOUTER</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label">
						NOM COMPLET
					</label>
					<input type="text" name="nom_de_famille" required="required" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">
                        SEXE
					</label>
					<select name="sexe" id="" class="form-control">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>
				</div>
                <div class="form-group">
					<label class="control-label">
                        CLASSE
					</label>
					<select name="classe_eleve" id="" class="form-control">
                        <option value="7ème">7ème</option>
                        <option value="8ème">8ème</option>
                        <option value="1ere Com">1ere Com</option>
                        <option value="2ème Com">2ème Com</option>
                        <option value="3ème Com">3ème Com</option>
                        <option value="4ème Com">4ème Com</option>
                    </select>
				</div>
                <div class="form-group">
					<label class="control-label">
                        TELEPHONE TUTEUR
					</label>
					<input type="number" name="telephone_parent" required="required" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">
                        EMAIL TUTEUR 
					</label>
					<input type="email" name="email_parent" required="required" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">
                        ADRESSE COMPLETE
					</label>
					<input type="text" name="adresse_residence" required="required" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">
                        ANNEE SCOLAIRE
					</label>
					<select name="annee" id="" class="form-control">
                        <option value="2023-2024">2023-2024</option>
                        <option value="2024-2025">2024-2025</option>
                        <option value="2025-2026">2025-2026</option>
                    </select>
				</div>
				<div class="form-group a">
					<button type="submit" class="btn btn-primary" name="formconnect">Enregistrer</button>
				</div>
			</form>
			<?php
			if (isset($erreur)) {
				echo "<font color='red'>".$erreur."</font>";
			}
		?>
		</div>
	</div>
</div>
</body>
</html>