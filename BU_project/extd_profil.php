<?php
    include('acces_base_entrep_etudiant.php');
 
            session_start();
            $AModif = $_SESSION['id_etudiant'];
            if ($AModif!='0')
            {
                //"UPDATE `etudiants` SET `nom` = 'hhamkjjhlg' , `nom` = 'issjfyjj', `institut` = 'insaaa' WHERE `etudiants`.`id_etudiant` = '6'"
                        
                              
                           
                           
                            echo $AModif; echo '</br>'; 
                            echo 'done';
                            if (isset($_POST['nom'])) {echo 'nom';$nom =  $_POST['nom'];$bdd->exec( "UPDATE `etudiants` SET `nom` = '$nom' WHERE `etudiants`.`id_etudiant` = '$AModif'");}
                            if (isset($_POST['prenom'])) {echo 'prenom';$prenom = $_POST['prenom'];$bdd->exec( "UPDATE `etudiants` SET `prenom` = '$prenom' WHERE `etudiants`.`id_etudiant` = '$AModif'");}
                            if (isset($_POST['specialite'])) {echo 'spec';$specialite =  $_POST['specialite'];$bdd->exec( "UPDATE `etudiants` SET `specialite` = '$specialite' WHERE `etudiants`.`id_etudiant` = '$AModif'");}

                            if (isset($_POST['institut'])) {echo 'ins';$institut = $_POST['institut']; $bdd->exec( "UPDATE `etudiants` SET`institut` = '$institut' WHERE `etudiants`.`id_etudiant` = '$AModif'");}
                            if (isset($_POST['contact_etudiant'])) {echo 'mail'; $contact_etudiant = $_POST['contact_etudiant'];$bdd->exec( "UPDATE `etudiants` SET `contact_etudiant`= '$contact_etudiant' WHERE `etudiants`.`id_etudiant` = '$AModif'");}

                            if (isset($_POST['date_naissance'])) {echo 'date';$date_naissance = $_POST['date_naissance']; $bdd->exec( "UPDATE `etudiants` SET`date_naissance` = '$date_naissance' WHERE `etudiants`.`id_etudiant` = '$AModif'");}
                            if (isset($_POST['reponse_question'])) { echo 'ques';$reponse_question = $_POST['reponse_question'];$bdd->exec( "UPDATE `etudiants` SET `reponse_question`= '$reponse_question' WHERE `etudiants`.`id_etudiant` = '$AModif'");}

                                        
                                       
                            // $bdd->exec( "UPDATE `etudiants` SET `nom` = 'hhamkjjhlg' , `nom` = 'issjfyjj', `institut` = 'insaaa' WHERE `etudiants`.`id_etudiant` = '6'"
                            //             );
                        
            }
            else
            {
                echo '<p> Rien à modifier <p>';
            }
            
    
               header('location:profil.php')         


    // Affichage de la liste de salaries pour confirmation de l'insertion.
                         
?>