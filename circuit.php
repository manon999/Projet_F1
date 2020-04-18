<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style/pages.css" type="text/css" media="screen" />
        <title>Circuit</title>
        
    </head>
    
    <body>
       <div id="menu" class="projet">
            <img class="imgpres" src="../images/f1.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="deconnexion.php">Se déconnecter</a></li>
                <li><a href="indexco.php">Acceuil</a></li>
            </ul>
        </div>
        <table>
            <h1>Données sur les circuits</h1>
             <tr>
			     <th>Nom</th>
			     <th>Ville</th>
			     <th>Pays du Circuit</th>
		      </tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_F1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Circuit');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          //echo"<th>"<a href="article/".$ligne[nom].".html{" > .$ligne["nom"]. </a>"</th>"
		          echo "<th>".$ligne["NomCircuit"]."</th>";
		          echo "<th>".$ligne["VilleCircuit"]."</th>";
		          echo "<th>".$ligne["PaysCircuit"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
        </table>
    </body>
    
</html>