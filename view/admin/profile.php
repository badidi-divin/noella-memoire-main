<?php
	session_start();
	require_once('../../bdd/connexion.php');
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

		<div align="center" style="	padding-top: 90px;">

			<h1 style="font-size: 45px;">
				Bienvenue madame  <?php echo $_SESSION['user_name']; ?>
			</h1>
			<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
		</div>
		
		<div align="center">
			<h2><img src="../../images/eleve.png" alt="" width="100px" height="100px"><?php
                $nblmd=$pdo->prepare('SELECT * FROM parent');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?></h2>
				<h2><img src="../../images/information.png" alt="" width="100px" height="100px"><?php
                $nblmd=$pdo->prepare('SELECT * FROM publication');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?></h2>
				<h2><img src="../../images/1077114.png" alt="" width="100px" height="100px"><?php
                $nblmd=$pdo->prepare('SELECT * FROM individuel');
                $nblmd->execute();
                $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?></h2>
		</div>
		<footer>
			
		</footer>
	</body>
</html>