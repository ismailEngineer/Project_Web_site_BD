<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles_entrep_etudiant.css">
<title>Entrep Etudiant </title>
</head>

<body>
<div id="bandeau">
<h1>Liste des employées</h1>


</div>
<div id="menu">
<div id="menu_accueil">
<h3>Accueil</h3>
<ul>
<li><a href="index_entrep_etudiant.php">Accueil</a></li>
</ul></div>
<div id="menu_haut">
<h3>Menu haut</h3>
<ul>
<li><a href="Liste_entreprises.php">Liste des entreprises</a></li>
<li><a href="Liste_employees.php">Liste des employées</a></li>
<li><a href="ajout_employee.php">ajout_employees</a></li>


</ul></div>
<div id="menu_bas"><h3>Menu bas</h3>
<ul>
<li> <a href="saisie_Salarie_req1.php">Budget du service d un salarie</a></li>

</div>
</div>
<div id="contenu"><p>Liste des employées</p>
<?php
//Ici du contenu PHP
    
    
        // Configuration de la connexion à la base de données
        include('acces_base_entrep_etudiant.php');
    
        // Liste des salaries dans la base.
        $reponse = $bdd->query('SELECT * FROM `entreprise`');
        
        //echo '<body>';
        //echo '<h1>liste des salaries </h1>';
        echo '<table border=1>';
        echo '<th> id_entreprise</th> <th> Nom_entreprise </th> <th> ville </th> <th> adresse </th> <th> type </th> <th> contact </th> <th> activite </th> ';
        
        while ($donnees = $reponse->fetch())
        {
            echo '<tr><td>'.$donnees['id_entreprise'].' </td> <td>'.$donnees['nom_entreprise'].'</td> <td>'.$donnees['ville'].' </td><td>'.$donnees['adresse'].' </td><td>'.$donnees['type'].' </td><td>'.$donnees['contact'].' </td><td>'.$donnees['activite'].'</td></tr>';
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
