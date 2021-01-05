<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <title>Acceuil</title>
</head>
<body>
    <div class="site">
        <div class="header">
	        <span><img src="logo1.jpg" alt="Logo"/></span>
            <form action = "verif_form.php" method = "get">
                <h3 align="center"/><input  type = "search" name = "terme" size="30"> 
                <input  type = "submit" name = "s" value = "Rechercher"></h3>
            </form>
        </div>
        <div class="clean"></div>
        <div class="content">
            <div class="menu_v">
            <div class="menu_v_top">Menu</div>
            <div class="menu_v_ctn">  
                
               <a href="index.php">Acceuil</a><br />
               <a href="bibliotheque.php">Bibliothéque</a> <br/>
               <a href="livre.php">Livres</a><br/>                
               <a href="services.php">Services</a><br/>                
               <a href="contact.php">Contact</a><br/> 
               <a href="seconnecter.php">Se connecter</a> <br/>  
               <a href="inscrire.php">s'inscrire</a>  <br/>
               <?php 
                        session_start();
                        if ($_SESSION['id_etudiant']) 
                            {  $nom = $_SESSION['nom'];
                                if ($nom == "admin")
                                {
                                    echo '<a href="ajout_bibliotheque.php">ajouter une bibliotheque</a><br />';
                                    echo '<a href="supprimer.php">supprimer</a><br />';
                                    echo '<a href="modifier.php">modifier</a><br />';
                                }
                                else
                                {
                                    echo '<a href="profil.php">Profil</a><br/>';

                                }
                            
                            }
                 ?>
                  
                        
           </div>

        
            
            </div>
            <div class="content_ctn">
                    <?php 
                        
                        if (!$_SESSION['id_etudiant']) 
                            {
                              $_SESSION['id_etudiant'] = 0;
                              $_SESSION['nom'] = 0;
                            } else {
                                $id_etudiant = $_SESSION['id_etudiant'];
                                $nom = $_SESSION['nom'];
                                echo '<h1>Bienvenue '.$nom.'</h1>';
                            }
            
                ?>
				                <h1>Description</h1>

                <div class="paragraphe">
                    ce site est un rassemblement de toutes les bibliothèques de la France, il permet aux étudiants de gérer en temps réel leur emprunts et la disponibilitée des livres auprès de chez eux.
                </div>
                <h1>Listes</h1>

                <div class="paragraphe">
                    <h2>Listes à puces</h2>
	                <div class="paragraphe">
                        <ul>
                            <li>Accueil</li>
                            <li>Produits</li>
                            <li>Téléchargements</li>

                            <li>Contact</li>
                        </ul>
                    </div>
                    <h2>Listes à numéro</h2>
	                <div class="paragraphe">
                        <ol>
                            <li>Accueil</li>

                            <li>Produits</li>
                            <li>Téléchargements</li>
                            <li>Contact</li>
                        </ol>
					</div>
				</div>
                <h1>Éléments de formulaire</h1>

                <div class="paragraphe">
                	<h2>Boutons</h2>
                    <div class="paragraphe">
                    	<input type="submit" value="Input submit" />
                        <input type="reset" value="Input reset" />
                    	<input type="button" value="Input button" />
                    	<button>Button</button>
                    </div>

                	<h2>Listes et Choix</h2>
                    <div class="paragraphe">
						<select>
                        	<option>Select</option>
                        	<option>Option 1</option>
                        	<option>Option 2</option>
                        	<option>Option 3</option>

                        	<option>Option 4</option>
                        </select>
                        <input type="checkbox" /> Case à cocher
                        <input type="radio" name="radio1" />Option 1 <input type="radio" name="radio1" /> Option 2
                    </div>
                	<h2>Insertion de texte</h2>
                    <div class="paragraphe">

						<input type="text" value="Input text" />
                        <input type="password" value="123456" /><br />
                        <textarea cols="60" rows="4">Insertion de paragraphe(Textarea)</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="clean"></div>

        <div class="foot">
            <span>
                                <a href="http://validator.w3.org/check?uri=referer">Valide (X)html strict 1.0</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">Valide Css 2.1</a> | <a href="http://www.supportduweb.com/">Design par SupportduWeb.com</a>
            </span>
        </div>

    </div>
</body>
</html>