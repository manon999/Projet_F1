<!DOCTYPE html>
<html>
	<head>
	 	<meta charset ="UTF-8"/>
	<link rel="stylesheet" href="../style/pages.css" type="text/css" media="screen" />
        <title> Inscription </title> 
        <style type="text/css">
        table{
            border-collapse: collapse;
        }
    </style>
    </head>
     <body>

     	 <div id="menu" class="projet">
            <img class="imgpres" src="../images/f1.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../identification/connexion.php">Se connecter</a></li>
                <li><a href="../index.php">Acceuil</a></li>
            </ul>
        </div>

     	<?php
	       if(!isset($_GET['n'])){
	       	   $_GET['nom']="";
		      $_GET['prenom']="";
		      $_GET['adresse']="";
		      $_GET['numero']="";
		      $_GET['mail']="";
		      }
        ?>
    <h1 class="connexion"><center> Fiche d'inscription </h1></center>
   
    <center>
    <form method="get" action="enregistrement.php" autocomplete="off"> 
       
        <table>
	
 		<br><tr><td>Nom : </td><td> <input type="text" name="nom" value="<?php echo($_GET['nom'])?>" /></td></tr>
 		<br><tr><td>Prenom : </td><td> <input type="text" name="prenom" value="<?php echo($_GET['prenom'])?>" /></td></tr>
 		<br><tr><td>Adresse : </td><td> <input type="text" name="adresse" value="<?php echo($_GET['adresse'])?>" /></td></tr>
 		<br><tr><td>Numéro de téléphone : </td><td> <input type="text" name="numero" value="<?php echo($_GET['numero'])?>" /></td></tr>
 		<br><tr><td>Adresse mail : </td><td> <input type="text" name="mail" value="<?php echo($_GET['mail'])?>" /></td></tr>
		<tr><td>Mot de passe : </td><td> <input type="password" name="mdp1" /></td></tr>
        <tr><td>Confirmer votre mot de passe:</td><td><input type="password" name="mdp2" value=''/></td></tr>
 		<tr><td></td><td><input class="bt" type="submit" value="S'inscrire"></td></tr>
	
	</table>



    </form></center>

</body>
</html>