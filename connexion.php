<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="../style/pages.css" type="text/css" media="screen" />
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
                <li id="co"><a href="../identification/inscription.php">Créer un compte</a></li>
                <li><a href="../index.php">Acceuil</a></li>
            </ul>
        </div><br>

    </br><br>
    <center><h1 class="connexion">Connexion</h1></center>
    <center>
    
    <form method="GET" action="connecter.php" autocomplete="off" >
    
    <table>
    
        <br><tr><td>E-mail : </td><td> <input type="text" name="mail" value="<?php echo($_GET['mail'])?>" /></td></tr>
        <tr><td>Mot de passe : </td><td> <INPUT type="password" name="mdp1" value=''/></td></tr>
        <tr><td></td><td><input class ="bt"type="submit" value="Se connecter"></td></tr>
    
    </table>

    </form></center>
    
    

</body>
</html>