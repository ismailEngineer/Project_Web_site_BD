
<?php
// Configuration de la connexion a la base de donnees
    include('acces_base_entrep_etudiant.php');
 
    // insertion d'un enregistrement dans la base.
    
    $req = $bdd->prepare("INSERT INTO `etudiants` (`nom`,`prenom`,`genre`,`date_naissance`,`institut`,`specialite`,`contact_etudiant`,`password`,`reponse_question`) 
                         VALUES (:nom,:prenom,:genre,:date_naissance,:institut,:specialite,:contact_etudiant,:password,:reponse_question)");
    $req->execute(array('nom'=>isset($_POST['nom']) ? $_POST['nom'] : '',
                        'prenom'=>isset($_POST['prenom']) ? $_POST['prenom'] : '',
                        'genre'=>isset($_POST['genre']) ? $_POST['genre'] : '',
                        'date_naissance'=>isset($_POST['datee']) ? $_POST['datee'] : '',
                        'institut'=>isset($_POST['institut']) ? $_POST['institut'] : '',
                        'specialite'=>isset($_POST['specialite']) ? $_POST['specialite'] : '',
                        'contact_etudiant'=>isset($_POST['contact_etudiant']) ? $_POST['contact_etudiant'] : '',
                        'password'=>isset($_POST['password']) ? $_POST['password'] : '',
                        'reponse_question'=>isset($_POST['reponse_question']) ? $_POST['reponse_question'] : ''
                        ));
    $req->closeCursor();
                         

    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
    <title>Inscription</title>
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
                <a href="http://www.supportduweb.com/">Support du web</a><br />                <a href="http://www.supportduweb.com/kits-graphiques-designs-gratuits-template-html-css-valide-web-design.html">Kits graphiques/Designs</a>            </div>
            </div>
            <div class="content_ctn">
                <?php
    
                    $reponse = $bdd->query('SELECT * FROM `etudiants`');
                    
                  
                    echo '<table border=1>';
                    echo '<h1>liste des etudiants </h1>';
                    echo '<th> id_etudiant</th> <th> Nom </th> <th> Prénom </th> <th> institut </th> <th> Spécialité </th>';
                    
                    while ($donnees = $reponse->fetch())
                    {
                        echo '<tr><td>'.$donnees['id_etudiant'].' </td> <td>'.$donnees['nom'].'</td> <td>'.$donnees['prenom'].' </td><td>'.$donnees['institut'].' </td><td>'.$donnees['specialite'];
                    }                    
                                     
                                     
                echo '</table>';
               
                                     
                                     
                //Fermeture de le requete.
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
