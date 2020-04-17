<!DOCTYPE html>
<?php
    function getBdd()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Projet_F1;charset=utf8', 'root', 'root');
        return $bdd;
    }

    function enregistrer($nom, $prenom, $adresse, $numero, $mail, $mdp1)
    {

        $bdd = getBdd();
        $req = $bdd->prepare('INSERT INTO Utilisateur(nom, prenom, adresse, numero, mail, mdp1) 
                              Values(:nom, :prenom, :adresse, :numero, :mail, :mdp1)');
        $req->execute(array
        (
            'nom' => (string) $nom,
            'prenom' => (string) $prenom,
            'adresse' => (string) $adresse,
            'numero' => (int) $numero,
            'mail' => (string) $mail,
            'mdp1' => (string) $mdp1,
        ));

        $req->closeCursor();
    }
    
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <?php
            

            if(empty($_GET['nom']) AND empty($_GET['prenom']) AND empty($_GET['adresse']) AND empty($_GET['numero']) AND empty($_GET['mail']) AND empty($_GET['mdp1']) AND empty($_GET['mdp2']) AND $_GET['mdp1']!=$_GET['mdp2']){
                echo "<meta http-equiv='refresh' content='0;URL=inscription.php?nom=".$_GET['nom']."&prenom=".$_GET['prenom']."&adresse=".$_GET['adresse']."&numero=".$_GET['numero']."&mail=".$_GET['mail']."'>";
            }
            else{
                enregistrer($_GET['nom'], $_GET['prenom'], $_GET['adresse'], (int)$_GET['numero'], $_GET['mail'], $_GET['mdp1']);
                echo"<meta http-equiv='refresh' content='0; URL=../index.php'>";
            }
        ?>
    </head>



</html>


