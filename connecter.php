<?php
require('../configErreur.php');
session_start();
?>
<html>
<head>
	<title>Connecter </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<?php

		


		$bdd= new PDO('mysql:host=localhost;dbname=Projet_F1;','root','root');
		$query="Select * from Utilisateur where mail='".$_GET['mail']."' and mdp1='".$_GET['mdp1']."'";
		$reponse=$bdd->query($query);
		$Utilisateur=$reponse->fetch();


		if($Utilisateur['mail']!=''){
			$_SESSION['Utilisateur']=array($Utilisateur['nom'],$Utilisateur['prenom'],$Utilisateur['mail'],$Utilisateur['adresse'],$Utilisateur['numero']);
			header('Location:http://localhost:8888/projet/identification/indexco.php');
		else{
			header('Location:http://localhost:8888/projet/identification/connexion.php');
		}
		$reponse->closeCursor();

		
	?>

</head>

</html>