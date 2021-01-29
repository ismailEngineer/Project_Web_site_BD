<?php
// Configuration de la connexion a la base de donnees
    include('acces_base_entrep_etudiant.php');
 
            $liste = isset($_POST['ckb']) ? $_POST['ckb'] : 'z';
            //echo $liste;
            if ($liste!='z')
            {
                for($i=0;$i<sizeof($liste);$i++)
                    {   
                        $ASupprimer = $liste[$i];
                        echo '<p>L etudiant dont id vaut : '.$ASupprimer.' a ete supprime.</p>';
                        //echo '<br/>';
                        $bdd->exec("
                            DELETE
                            FROM `etudiants`
                            WHERE `id_etudiant`= $ASupprimer
                                    ");
                    }
            }
            else
            {
                echo '<p> Rien à supprimer <p>';
            }
            
    
                        


 header("location:bu.php");
                         
?>


