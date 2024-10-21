<?php
// pour recuperer les informations notées sur le formulaire
	if (isset($_POST['formconnect'])) {
   // respecter ce qui est demandé sur le formulaire
	$nom_de_famille=htmlspecialchars($_POST['nom_de_famille']);
	$sexe=htmlspecialchars($_POST['sexe']);
	$classe_eleve=htmlspecialchars($_POST['classe_eleve']);
    $telephone_parent=htmlspecialchars($_POST['telephone_parent']);
	$email_parent=htmlspecialchars($_POST['email_parent']);
	$annee=htmlspecialchars($_POST['annee']);
    $adresse_residence=htmlspecialchars($_POST['adresse_residence']);
    $code=strtoupper(substr(md5(uniqid(rand())), 0, 5)).date('m/y');;
	$errors=array();
	//Création de l'objet prepare et envoie de la requête
	$ps=$pdo->prepare("INSERT INTO parent(code_parent,nom_de_famille,sexe,classes_eleve,telephone_parent,email_parent,adresse_residence,annee)VALUES(?,?,?,?,?,?,?,?)");
					    //Pour bien recupere les données on crée un table de parametre
					    $params=array($code,$nom_de_famille,$sexe,$classe_eleve,$telephone_parent,$email_parent,$adresse_residence,$annee);
					    //Execution de la requête par leur paramètre en ordre 
					    $ps->execute($params);
						// Pour recuperer l'id du user
						?>
						<script type="text/javascript">
							alert('Enregistrement Effectué!')
						</script>
						<script>
							window.open('eleve.php','_self')
						</script>

					<?php
						exit();
	}
	
