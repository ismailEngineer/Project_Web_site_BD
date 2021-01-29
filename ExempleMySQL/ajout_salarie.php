<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css">

  <title> Ajout de salaries dans la base Personnel.</title>
  </head>
  <body>
  <div id="bandeau">
<h1> Ajout de fiches SALARIE</h1>
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
              <li><a href="ajout_salarie.html">Ajouter un salarie</a></li>
              <li><a href="suppr_salaries.php">Supprimer un salarie</a></li>
              <li><a href="liste_services.php">Liste des services</a></li>
              
              
          </ul></div>
      <div id="menu_bas"><h3>Menu bas</h3>
          <ul>
              <li> <a href="saisie_Salarie_req1.html">Budget du service d un salarie</a></li>
              
              </div>
  </div>	
  <div id="contenu">
      
      <form name="FormAjout" action="extd.php" method="post">
          <table border=0>
              <tr>
                  <td> Prenom </td>
                  <td> <input type="text" name ="prenom" maxlength="30" size="20"><br> </td>
              </tr>
              <tr>
                  <td> Nom </td>
                  <td> <input type="text" name ="nom" maxlength=35 size=20><br> </td>
              </tr>
              <tr>
                  <td> NSS: </td>
                  <td> <input type="text" name ="nss" maxlength=20 size=20><br> </td>
              </tr>
              <tr>
                  <td> sexe: </td>
                  <td>  <select name='sexe'>
                        <option value='0'>Choisissez le sexe</option>
                        <option value='F'>Femme</option>
                        <option value='M'>Homme</option>
                        </select>
                  </td>
              </tr>
              <tr>
                  <td> service: </td>
                <?php
                    // Connexion à la base de données
                    include('acces_base.php');
                    
                    // Création de la liste déroulante dynamique en fonction du résultat de la requete dans la bdd : objectif, lister tous les services possibles
                    
                    $reponse = $bdd->query('SELECT * FROM service');

                    echo '<td>';
                    echo "<select name='service'>";
                    echo "<option value='Choisir un batiment'>";
                    while ($donnees = $reponse->fetch()){
                        echo "Choisir un batiment";
                        echo '<option value='.$donnees['id'].'>'.$donnees['Nom'];
                        echo "</option>";
                    }
                    echo"</select>";
                    echo '</td>';
                    
                    // Fermeture de la requete.
                    $reponse->closeCursor();

                    ?>
              </tr>
              <tr>
                  <td> Salaire </td>
                  <td> <input type="text" name ="salaire" maxlength=9 size=8><br> </td>
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
