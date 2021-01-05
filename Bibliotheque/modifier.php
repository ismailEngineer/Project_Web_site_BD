<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <title>Acceuil</title>
</head>
<body>
    <div class="site">
        <div class="header">
	        <span><img src="logo1.jpg" alt="Logo"/></span>
        </div>
        <div class="clean"></div>
        <div class="content">
            <div class="menu_v">
            <div class="menu_v_top">Menu</div>
            <div class="menu_v_ctn">
                <a href="index.php">Acceuil</a><br />
               <a href="bibliotheque.php">Bibliothéque</a> <br/>
               <a href="livre.php">Livres</a><br/>                
               <a href="services.php">Services</a><br/>                
               <a href="contact.php">Contact</a><br/> 
               <a href="supprimer.php">supprimer</a><br />   
               <a href="seconnecter.php">Se connecter</a> <br/>  
               <a href="inscrire.php">s'inscrire</a>           
            </div>
            </div>
            <div class="content_ctn">
                <h1> modifier un étudiant</h1>
              <?php
    
                session_start();
        
                include('acces_base_entrep_etudiant.php');
            
                
                $reponse = $bdd->query('SELECT * FROM `etudiants`ORDER BY `id_etudiant` ASC');
                
              
                echo '<table border=1>';
                echo '<th> Nom </th> <th> Prenom </th> <th> institut </th> <th> specialité </th> <th> selectionner </th></tr>';
                
                $i = 0;
      
                while ($donnees = $reponse->fetch())
                {   
                  $i = $i+1;
                    echo '</td> <td>'.$donnees['nom'].'</td> <td>'.$donnees['prenom'].' </td><td>'.$donnees['institut'].' </td><td>'.$donnees['specialite'].' </td><td>'.'<form name="FormAjout" action="ext_modif_formulaire.php" method="post">'.'<input type="checkbox" name="maListe" value="'.$donnees['id_etudiant'].'"/>'.$donnees['id_etudiant'].'</td></tr>';
                }
                
              
                echo '</table>';
                
                // echo '<form name="FormAjout" action="extd_supprim.php" method="post"> <input type="checkbox" name="case" value="on"/><input type="submit" value="Supprimer" /> </form>';
                echo '<input type="submit" value="modifier" /> </form>';
                //echo '</body>';
                
                
                //Fermeture de la requte.
                $reponse->closeCursor();
                
                // ...
      



              ?>
            </div>
        </div>
    
        <div class="foot">
            <span>
                                
            </span>
        </div>

    </div>
</body>
</html>