<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <title>Bibliotheque</title>
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
               <a href="inscrire.php">s'inscrire</a>           
           </div>

            <div class="menu_v_top">Liens utiles</div>
            <div class="menu_v_ctn">
                <a href="http://www.supportduweb.com/">Support du web</a><br />                <a href="http://www.supportduweb.com/kits-graphiques-designs-gratuits-template-html-css-valide-web-design.html">Kits graphiques/Designs</a>            </div>
            </div>
            <div class="content_ctn">
                <h1> Liste des Bibliothèques</h1>
                <?php
                    include('acces_base_entrep_etudiant.php');
                    $reponse = $bdd->query('SELECT * FROM `bibliotheque`');
                    while($donnees = $reponse->fetch())
                    {
                        echo '<h4>'.$donnees['nom_bu'].'</h4>';
                        echo '<u1>'.$donnees['ville'].'<br/>';
                        echo '<u1>'.$donnees['contcat_BU'].'<br/>';
                    }
                    $reponse->closeCursor();
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