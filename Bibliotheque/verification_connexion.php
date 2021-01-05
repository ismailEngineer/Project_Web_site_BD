<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <title>Connexion</title>
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
               <a href="bibliotheque.php">Bibliothéque</a> <br />              <a href="livre.php">Livres</a><br />                <a href="services.php">Services</a><br />                <a href="contact.php">Contact</a> <br />    <a href="seconnecter.php">Se connecter</a>  <br />  <a href="inscrire.php">s'inscrire</a>           </div>

            <div class="menu_v_top">Liens utiles</div>
            <div class="menu_v_ctn">
                <a href="http://www.supportduweb.com/">Support du web</a><br/>                <a href="http://www.supportduweb.com/kits-graphiques-designs-gratuits-template-html-css-valide-web-design.html">Kits graphiques/Designs</a>            </div>
            </div>
            <div class="content_ctn">
                <?php
                    include('acces_base_entrep_etudiant.php');
                    session_start();
                    $mail = $_SESSION['contact_etudiant'];
                    $mot_de_passe = $_SESSION['password'];
                    $reponse = $bdd->query("SELECT * FROM `etudiants` WHERE `contact_etudiant` LIKE '$mail'");
                    //if ($reponse->aille() ?)
                    if ($donnees = $reponse->fetch())
                    {  

                     while ($donnees)
                      {
                        //echo 'ttttttttt';
                        if ($mot_de_passe == $donnees['password']) 
                        {
                            
                            $_SESSION['id_etudiant'] = $donnees['id_etudiant'];
                            $_SESSION['nom'] = $donnees['nom'];

                            
                             header('location:index.php');
                        }
                        else 
                        {
                            echo '<h1>mail ou mot passe incorrect  </h1>';
                            echo '<form name="FormAjout" action="seconnecter.php" method="post">
                            <input type="submit"  value="revenir"> </form>';
                            // mettre un bouton pour ressaiyer et revenir a la page de connexion
                        }
                        $donnees = $reponse->fetch();
                      }
                    }
                    else {  echo '<h1>mail ou mot passe incorrect  </h1>';
                            echo '<form name="FormAjout" action="seconnecter.php" method="post">
                            <input type="submit"  value="revenir"> </form>';

                    }
                   
                    $reponse->closeCursor();
                ?> 
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
                   