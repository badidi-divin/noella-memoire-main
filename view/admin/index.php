<?php
	session_start();
	// Connection datatabase
	require_once '../../bdd/connexion.php';
	require_once '../../model/admin/admin.php';
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
<div class="contenair space col-md-6 col-xd-12 col-md-offset-3">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="a"> AUTHENTIFICATION</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="">
				<div class="form-group">
					<label class="control-label">
						Pseudo:
					</label>
					<input type="text" name="Pseudo_admin" required="required" class="form-control" placeholder="Entrer le Pseudo">
				</div>
			 	<div class="form-group">
					<input type="password" name="Mdp_admin" placeholder="Mot de Passe" required="required"  class="form-control" />
				</div>
				<div class="form-group a">
					<button type="submit" class="btn btn-primary" name="formconnect">Login</button>
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