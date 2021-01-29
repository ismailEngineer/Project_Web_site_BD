<?php
session_start();
if (isset($_POST['valider']))
 {
    echo ($_POST['valider']);
    $_SESSION['contact_etudiant']=$_POST['contact_etudiant'];
    $_SESSION['password']=$_POST['password'];
    header('location:verification_connexion.php');
 }
 if (isset($_POST['mot']))
 {
 	$_SESSION['contact_etudiant']=$_POST['contact_etudiant'];

 	$variable = $_SESSION['contact_etudiant'];
 	echo $variable;
 	include('acces_base_entrep_etudiant.php');
 	$reponse = $bdd->query("SELECT * FROM `etudiants` WHERE `contact_etudiant` LIKE '$variable'");
 	if ($donnees = $reponse->fetch())
 		{
 			echo $donnees['nom'];
 			$_SESSION['id_etudiant'] = $donnees['id_etudiant'];
 			header('location:formulaire_mot_passe.php');
 		}
 	else {
 		echo '<h1> baaaaaaaraaaaaaa nayzek </h1>';
 	}
 	


 }
 ?>