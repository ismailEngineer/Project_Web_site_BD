
<?php
// Configuration de la connexion a la base de donnees
    include('acces_base_entrep_etudiant.php');
 
    // insertion d'un enregistrement dans la base.
    
    $req = $bdd->prepare('INSERT INTO `etudiants` (`id_etudiant`,`nom`,`prenom`,`institut`,`specialite`,`contact_etudiant`) 
                         VALUES (:id_etudiant,:nom,:prenom,:institut,:specialite,:contact_etudiant)');
    $req->execute(array('id_etudiant'=>isset($_POST['id_etudiant']) ? $_POST['id_etudiant'] : '',
                        'nom'=>isset($_POST['nom']) ? $_POST['nom'] : '',
                        'prenom'=>isset($_POST['prenom']) ? $_POST['prenom'] : '',
                        'institut'=>isset($_POST['institut']) ? $_POST['institut'] : '',
                        'specialite'=>isset($_POST['specialite']) ? $_POST['specialite'] : '',
                        'contact_etudiant'=>isset($_POST['contact_etudiant']) ? $_POST['contact_etudiant'] : ''
                        ));
    $req->closeCursor();
                         

    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles_entrep_etudiant.css">
<title>Entrep Etudiant  </title>
</head>

<body>
<div id="bandeau">
<h1>Liste des employees apres ajout</h1>


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
<div id="contenu"><p>Nouvelle liste des employees</p>
<?php
    
    
        $reponse = $bdd->query('SELECT * FROM `etudiants`');
        
      
        echo '<table border=1>';
        echo '<h1>liste des salaries </h1>';
        echo '<th> id_etudiant</th> <th> Nom </th> <th> Prénom </th> <th> institut </th> <th> Spécialité </th> <th> contact_etudiant </th>';
        
        while ($donnees = $reponse->fetch())
        {
            echo '<tr><td>'.$donnees['id_etudiant'].' </td> <td>'.$donnees['nom'].'</td> <td>'.$donnees['prenom'].' </td><td>'.$donnees['institut'].' </td><td>'.$donnees['specialite'].' </td><td>'.$donnees['contact_etudiant'];
        }                    
                         
                         
    echo '</table>';
    echo '</body>';
    echo '</html>';
                         
                         
    //Fermeture de le requete.
    $reponse->closeCursor();
                    
    // ...
    ?>

