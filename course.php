<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style/pages.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
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

        
        <h1>Données sur les courses</h1>
        <table>
             <tr>
			     <th>Nom</th>
			     <th>Date</th>
			     <th>Année</th>
			     <th>Temps de la course</th>
		      </tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_F1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Course');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          echo "<th>".$ligne["NomCourse"]."</th>";
		          echo "<th>".$ligne["DateCourse"]."</th>";
		          echo "<th>".$ligne["AnneeCourse"]."</th>";
		          echo "<th>".$ligne["TempsCourse"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>