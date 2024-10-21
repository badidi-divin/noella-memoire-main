<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ecole</title> 
	<link rel="stylesheet" type="text/css" href="../../includes/css/bootstrap.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				margin-top: 10px;
			}
			.space{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<?php
			require_once('menu.php');
		?>
	<!-- navigation end -->
	<?php 
	    require_once("../../bdd/connexion.php");
		require_once("../../model/admin/selection_eleve.php");
	?>
		<div class="col-md-12 col-xd-12 space">
			<form method="get" action="">
				<div class="form-group">
					<label for="motcle" class="control-label">
						<p>Mot Clé:</p>
					</label>
				<div class="form-group">
					<input type="text" class="form-control" name="motcle" value="<?php echo ($mc) ?>" placeholder="Entrer le valeur à chercher...">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Rechercher</button>
					<a href="imprimer_eleve.php" class="btn btn-primary">Imprimer</a>
					<a href="ajout-eleve.php" class="btn btn-primary">Ajouter</a>
				</div>				
				</div>
			</form>
		</div>

		<div align="center" style="	padding-top: 150px;">

			<h1 style="font-size: 45px;">
                LISTE DES ELEVES
			</h1>
		</div>

			<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						LISTE DES AGENTS
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<head>
								<tr>
									<th>CODE</th><th>NOM_COMPLET</th><th>SEXE</th><th>CLASSE</th><th>TELEPHONE_TUTEUR</th><th>EMAIL_TUTEUR</th><th>ADRESSE_COMPLETE</th><th>ANNEE_SCOLAIRE</th><th>DATES</th><th>ACTIONS</th>
								</tr>
							</head>
							<body>
								<?php while ($et=$ps->fetch()){?>
								<tr>
								<td><?php  echo($et['code_parent'])?></td>
								<td><?php  echo($et['nom_de_famille'])?></td>
								<td><?php  echo($et['sexe'])?></td>
                                <td><?php  echo($et['classes_eleve'])?></td>
                                <td><?php  echo($et['telephone_parent'])?></td>
                                <td><?php  echo($et['email_parent'])?></td>
                                <td><?php  echo($et['adresse_residence'])?></td>
                                <td><?php  echo($et['annee'])?></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
								<td><a onclick="return confirm('Etes-vous sûre...?');" href="../../model/admin/supprimer-agent.php?id=<?php echo($et['code_parent'])?>" class="btn btn-danger">Supprimer</a></td>
											</tr>	
									<?php } ?>	
							</body>
						</table>
					</div>
				</div>	
			</div>

	</body>
</html>