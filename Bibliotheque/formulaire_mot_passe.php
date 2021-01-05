<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <title>Mot passe oublié</title>
</head>
<body>
    <div class="site">
        <div class="header">
	        <span><img src="logo1.jpg" alt="Logo" /></span>
        </div>
         <div class="content">
            <div class="menu_v">
            <div class="menu_v_top">Menu</div>
            <div class="menu_v_ctn">
              <a href="index.php">Acceuil</a><br />
               <a href="bibliotheque.php">Bibliothéque</a> <br/>
               <a href="livre.php">Livres</a><br/>                
               <a href="services.php">Services</a><br/>                
               <a href="contact.php">Contact</a><br/> 
               <a href="seconnecter.php">Se connecter</a> <br/>  
               <a href="inscrire.php">s'inscrire</a>  <br/>
               <?php 
                        session_start();
                        if ($_SESSION['id_etudiant']) 
                            {  $nom = $_SESSION['nom'];
                                if ($nom == "admin")
                                {
                                    echo '<a href="ajout_bibliotheque.php">ajouter une bibliotheque</a><br />';
                                    echo '<a href="supprimer.php">supprimer</a><br />';
                                    echo '<a href="modifier.php">modifier</a><br />';
                                }
                            
                            }
                 ?>           </div>

            </div>
            <div class="content_ctn">
                
                <h2>Verification du Compte</h2>
                <form name="FormAjout" action="reponse_question.php" method="post">
                    <table border=0>
                      <tr>
                          <td> Reponse : </td>
                          <p> Quelle est votre couleur préférer ?<p>
                      </tr>
                      <tr>
                          <td> <input type="text" name ="reponse_question" maxlength="30" size="20"> </td>
                      </tr>             
                      <tr>
                          <td colspan=2> 
                              <input type="submit"  value="valider"></td>
                      </tr>
                    </table>
                </form>
            </div>
            </div>
        </div>
        <div class="foot">
            <span>
                                <a href="http://validator.w3.org/check?uri=referer">Valide (X)html strict 1.0</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">Valide Css 2.1</a> | <a href="http://www.supportduweb.com/">Design par SupportduWeb.com</a>
            </span>
        </div>

    </div>
</body>
</html>