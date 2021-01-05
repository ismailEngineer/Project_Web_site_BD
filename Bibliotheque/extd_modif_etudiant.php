<?php
    include('acces_base_entrep_etudiant.php');
 
            session_start();
            $AModif = $_SESSION['modif'];
            if ($AModif!='0')
            {
                //"UPDATE `etudiants` SET `nom` = 'hhamkjjhlg' , `nom` = 'issjfyjj', `institut` = 'insaaa' WHERE `etudiants`.`id_etudiant` = '6'"
                        
                            $nom =  $_POST['nom']; $prenom = $_POST['prenom']; $specialite =  $_POST['specialite']; $institut = $_POST['institut'];
                            $contact_etudiant = $_POST['contact_etudiant'];
                            echo $AModif; echo '</br>'; 
                            echo $nom; echo '</br>';
                            echo $prenom; echo '</br>';
                            echo $specialite; echo '</br>';
                            echo $institut; echo '</br>';
                            echo $contact_etudiant; echo '</br>';
                            echo 'done';
                            $bdd->exec( "UPDATE `etudiants` SET `nom` = '$nom' , `prenom` = '$prenom', `institut` = '$institut',
                                        `specialite` = '$specialite', `contact_etudiant`= '$contact_etudiant' 
                                         WHERE `etudiants`.`id_etudiant` = '$AModif'"
                                        );
                            // $bdd->exec( "UPDATE `etudiants` SET `nom` = 'hhamkjjhlg' , `nom` = 'issjfyjj', `institut` = 'insaaa' WHERE `etudiants`.`id_etudiant` = '6'"
                            //             );
                        
            }
            else
            {
                echo '<p> Rien à modifier <p>';
            }
            
    
                        


    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>