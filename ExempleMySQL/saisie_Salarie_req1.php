<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css">

<title> Exemple de projetction : recherche du budget du service d un salarie.</title>
</head>
<body>
<div id="bandeau">
<h1> Selectionnez un salarie</h1>
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

<form name="FormAjout" action="rech_salarie_service.php" method="post">
<table border=0>
<tr>
<td> Recherche par salarie : </td>
<?php
    // Connexion ˆ la base de donnŽes
    include('acces_base.php');
    
    // CrŽation de la liste dŽroulante dynamique en fonction du rŽsultat de la requete dans la bdd : objectif, lister tous les services possibles
    
    $reponse = $bdd->query('SELECT * FROM personnel order by nom');
    
    echo '<td>';
    echo "<select name='salarie'>";
    echo "<option value='Choisir un salarie'>";
    while ($donnees = $reponse->fetch()){
        echo "Choisir un salarie";
        echo '<option value='.$donnees['NSS'].'>'.$donnees['nom'].' '.$donnees['prenom'];
        echo "</option>";
    }
    echo"</select>";
    echo '</td>';
    
    // Fermeture de la requete.
    $reponse->closeCursor();
    
    ?>
</tr>
<tr>
<td colspan=2>
<input type="submit"  value="valider"></td>
</tr>
</form>
</table>
</div>

</body>
</html>
