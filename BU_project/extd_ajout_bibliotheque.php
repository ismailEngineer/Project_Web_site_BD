<?php
// Configuration de la connexion a la base de donnees
    include('acces_base_entrep_etudiant.php');
 
    // insertion d'un enregistrement dans la base.
    
    $req = $bdd->prepare('INSERT INTO `bibliotheque` (`nom_bu`,`ville`,`contact_BU`) 
                         VALUES (:nom_bu,:ville,:contact_BU)');
    $req->execute(array('nom_bu'=>isset($_POST['nom_bu']) ? $_POST['nom_bu'] : '',
                        'ville'=>isset($_POST['ville']) ? $_POST['ville'] : '',
                        'contact_BU'=>isset($_POST['contact_BU']) ? $_POST['contact_BU'] : ''
                        ));
    $req->closeCursor();
                         
    header("location:bu.php");
    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>
