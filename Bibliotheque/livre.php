<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <title>Livre</title>
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
               <a href="bibliotheque.php">Bibliothéque</a> <br />              
               <a href="livre.php">Livres</a><br />                
               <a href="services.php">Services</a><br />                
               <a href="contact.php">Contact</a> <br />
               <a href="supprimer.php">supprimer</a><br />    
               <a href="seconnecter.php">Se connecter</a>  <br />  
               <a href="inscrire.php">s'inscrire</a>           </div>

            <div class="menu_v_top">Liens utiles</div>
            <div class="menu_v_ctn">
                <a href="http://www.supportduweb.com/">Support du web</a><br />                <a href="http://www.supportduweb.com/kits-graphiques-designs-gratuits-template-html-css-valide-web-design.html">Kits graphiques/Designs</a>            </div>
            </div>
            <div class="content_ctn">
                <h1> Liste des Livres</h1>
                <?php
                    include('acces_base_entrep_etudiant.php');
                    $reponse = $bdd->query('SELECT * FROM `livre`');
                    while($donnees = $reponse->fetch())
                    {   $id_auteur = $donnees['id_auteur_livre'];
                        $reponse_auteur = $bdd->query("SELECT * FROM `auteur` WHERE `id_auteur` = '$id_auteur'");
                        $donnees_auteur = $reponse_auteur->fetch();
                        echo '<h4>'.$donnees['titre'].'</h4>';
                        echo '<u1>'.$donnees['date_publication'].'<br/>';        
                        echo '<u1>'.$donnees_auteur['nom_auteur'].'<br/>';
                        echo '<u1>'.$donnees_auteur['prenom_auteur'].'<br/>';
                        
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