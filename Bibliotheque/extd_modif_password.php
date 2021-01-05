<?php
	session_start();
	include('acces_base_entrep_etudiant.php');
	$nouveau_mot_passe=$_POST['password'];
	echo $nouveau_mot_passe;
	$AModif = $_SESSION['id_etudiant'];
	$bdd->exec( "UPDATE `etudiants` SET `password` = '$nouveau_mot_passe' WHERE `etudiants`.`id_etudiant` = '$AModif'"
                                        );
	header('location:seconnecter.php');
?>