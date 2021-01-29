<link rel="stylesheet" type="text/css" href="styles.css">
<?php
// Configuration de la connexion à la base de données
    include('acces_base.php');
    
?>

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
<h1>Suppression d un salarie</h1>


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
<li><a href="liste_salaries.php">Liste des salaries</a></li>
<li><a href="ajout_salarie.php">Ajouter un salarie</a></li>
<li><a href="suppr_salaries.php">Supprimer un salarie</a></li>
<li><a href="liste_services.php">Liste des services</a></li>


</ul></div>
<div id="menu_bas"><h3>Menu bas</h3>
<ul>
<li> <a href="saisie_Salarie_req1.php">Budget du service d un salarie</a></li>

</div>
</div>
<div id="contenu">
<?php
    // Liste les salaries et ajoute une checkbox en fin de ligne pour recuperer la cle primaire (ici NSS) dans le champ 'ASupprimer'
    
    $reponse = $bdd->query('SELECT * FROM Personnel order by nom');
    
    echo '<h1>Choisissez un salarie a supprimer </h1>';
    echo '<FORM action="supprimer.php?" method="post">';
    echo '<table border=1>';
    echo '<th> NSS</th> <th> Nom </th> <th> Prenom </th> <th> service </th> <th> sexe </th> <th> Salaire </th>';
    
    while ($data = $reponse->fetch())
    {
        echo '<tr><td>'.$data['NSS'].' </td> <td>'.$data['nom'].' </td> <td>'.$data['prenom']. '</td><td>'. $data['service']. '</td><td> '. $data['sexe'].'</td> <td>' . $data['salaire']. '</td>  <td><input type="checkbox" NAME="ASupprimer" value='.$data['NSS'].'></td> </tr>';
    }
    
    echo '</table>';
    echo '<input type=submit  value="valider"></td>';
    echo '</form>';
    echo '</body>';
    echo '</html>';
    
    
    //Fermeture de la requete.
    $reponse->closeCursor();
    
 
// ...
?>

