<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles_entrep_etudiant.css">

  <title> Ajout un employee dans la base Employees.</title>
  </head>
  <body>
  <div id="bandeau">
<h1> Ajout de fiches employee</h1>
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
              <li> <a href="saisie_Salarie_req1.html">Budget du service d un salarie</a></li>
              
              </div>
  </div>	
  <div id="contenu">
      
      <form name="FormAjout" action="extd_entrep_etudiant.php" method="post">
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
                  <td> ID: </td>
                  <td> <input type="text" name ="id_etudiant" maxlength=20 size=20><br> </td>
              </tr>
              <tr>
                  <td> institut </td>
                  <td> <input type="text" name ="institut" maxlength=20 size=20><br> </td>
              </tr>
              <tr>
                  <td> Specialite </td>
                  <td> <input type="text" name ="specialite" maxlength=20 size=20><br> </td>
              </tr>
              <tr>
                  <td> Contact_etudiant </td>
                  <td> <input type="text" name ="contact_etudiant" maxlength=20 size=20><br> </td>
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
