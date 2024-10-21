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
	<?php 
	    require_once("../../bdd/connexion.php");
		require_once("../../model/admin/selection_imprime_eleve.php");
	?>
		<div align="center" style="	padding-top: 20px;">
			<h1 style="font-size: 45px;">
				LISTE DES ELEVES
			</h1>
		</div>

			<div class="col-md-12 col-xs-12 spacer">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info spacer">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						LISTE DES ELEVES
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
                    <table class="table table-striped">
							<head>
								<tr>
									<th>CODE</th><th>NOM_COMPLET</th><th>SEXE</th><th>CLASSE</th><th>TELEPHONE_TUTEUR</th><th>EMAIL_TUTEUR</th><th>ADRESSE_COMPLETE</th><th>ANNEE_SCOLAIRE</th><th>DATES</th>
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
											</tr>	
									<?php } ?>	
							</tbody>
							
						</table>
						<div style="padding-left: 600px;">
							<button  onclick="window.print()" class="btn btn-primary">Imprimer</button>
						</div>
					</div>
				</div>	
			</div>

	</body>
</html>