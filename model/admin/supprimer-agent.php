<?php
	//Récuperation du paramètre URL appelé code

	$id=$_GET['id'];

	require_once('../../bdd/connexion.php');

	$ps=$pdo->prepare("DELETE FROM parent WHERE code_parent=?");

	$params=array($id);

	$ps->execute($params);
	
	header("location:".$_SERVER['HTTP_REFERER']);