<?php 
		
	include('acces_base_entrep_etudiant.php');

	$recherche = $_GET['terme'];
	 $reponse = $bdd->query("SELECT * FROM `livre` WHERE `titre` LIKE '%$recherche%'");
	 while($donnees = $reponse->fetch())
                    {   $id_auteur = $donnees['id_auteur_livre'];
                		$id_bu = $donnees['disponibilite'];

                        $reponse_auteur = $bdd->query("SELECT * FROM `auteur` WHERE `id_auteur` = '$id_auteur'");
                        $donnees_auteur = $reponse_auteur->fetch();

                        $reponse_bibliotheque = $bdd->query("SELECT * FROM `bibliotheque` WHERE `id_bu` = '$id_bu'");
                        $donnees_bibliotheque = $reponse_bibliotheque->fetch();
                        
                        echo '<h4>'.$donnees['titre'].'</h4>';
                        echo '<u1>'.$donnees['date_publication'].'<br/>';        
                        echo '<u1>'.$donnees_auteur['nom_auteur'].'<br/>';
                        echo '<u1>'.$donnees_auteur['prenom_auteur'].'<br/>';
                        echo '<u1>'.$donnees_bibliotheque['nom_bu'].'<br/>';
                        
                    }
                    $reponse->closeCursor();


 ?>