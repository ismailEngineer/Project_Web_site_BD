<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Gestion de Base de donnees: Utilisation de Php/MySQL  </title>
</head>

<body>
<div id="bandeau">
<h1>Liste des clients  </h1>


</div>
<div id="menu">
<div id="menu_accueil">
<h3>Accueil</h3>
<ul>
<li><a href="index.php">Accueil</a></li>
</ul></div>
<div id="menu_haut">
<h3>Menu haut</h3>
<ul>
<li><a href="liste_salaries.php">Liste des clients</a></li>
<li><a href="ajout_salarie.php">Ajouter un salarie</a></li>
<li><a href="suppr_salaries.php">Supprimer un salarie</a></li>
<li><a href="liste_services.php">Liste des services</a></li>


</ul></div>
<div id="menu_bas"><h3>Menu bas</h3>
<ul>
<li> <a href="saisie_Salarie_req1.php">Budget du service d un salarie</a></li>

</div>
</div>
<div id="contenu"><p>Liste des salaries</p>
<?php
//Ici du contenu PHP
    
    
        // Configuration de la connexion à la base de données
        include('acces_base.php');
    
        // Liste des salaries dans la base.
        $reponse = $bdd->query('SELECT * FROM Personnel order by nom');
        
        //echo '<body>';
        //echo '<h1>liste des salaries </h1>';
        echo '<table border=1>';
        echo '<th> NSS</th> <th> Nom </th> <th> Prenom </th> <th> service </th> <th> sexe </th> <th> Salaire </th> ';
        
        while ($donnees = $reponse->fetch())
        {
            echo '<tr><td>'.$donnees['NSS'].' </td> <td>'.$donnees['nom'].'</td> <td>'.$donnees['prenom'].' </td><td>'.$donnees['service'].' </td><td>'.$donnees['sexe'].' </td><td>'.$donnees['salaire'].' </td></tr>';
        }
        
        
        echo '</table>';
        //echo '</body>';
        
        
        //Fermeture de la requte.
        $reponse->closeCursor();
        
        // ...
    



?>




</p>
</body>

</html>

