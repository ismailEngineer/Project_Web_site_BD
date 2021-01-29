
<?php
session_start();
// Configuration de la connexion a la base de donnees
    include('acces_base_entrep_etudiant.php');
 
    // insertion d'un enregistrement dans la base.
    //echo $_POST['nom'].$_POST['prenom']
    $req = $bdd->prepare('INSERT INTO `etudiants` (`nom`,`prenom`,`genre`,`date_naissance`,`institut`,`specialite`,`contact_etudiant`,`password`,`reponse_question`) 
                         VALUES (:nom,:prenom,:genre,:date_naissance,:institut,:specialite,:contact_etudiant,:password,:reponse_question)');
    $req->execute(array('nom'=>isset($_POST['nom']) ? $_POST['nom'] : '',
                        'prenom'=>isset($_POST['prenom']) ? $_POST['prenom'] : '',
                        'genre'=>isset($_POST['genre']) ? $_POST['genre'] : '',
                        'date_naissance'=>isset($_POST['date_naissance']) ? $_POST['date_naissance'] : '',
                        'institut'=>isset($_POST['institut']) ? $_POST['institut'] : '',
                        'specialite'=>isset($_POST['specialite']) ? $_POST['specialite'] : '',
                        'contact_etudiant'=>isset($_POST['contact_etudiant']) ? $_POST['contact_etudiant'] : '',
                        'password'=>isset($_POST['password']) ? $_POST['password'] : '',
                        'reponse_question'=>isset($_POST['reponse_question']) ? $_POST['reponse_question'] : ''
                        ));
    $req->closeCursor();
    $_SESSION['nom'] = $_POST['nom'];
    header('location:index.html');                     

    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>

