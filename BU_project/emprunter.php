<?php 
session_start();
if ($_SESSION['nom']=='z') header('location:inscrire.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Emprunter</title>
<!--
Next Level CSS Template
https://templatemo.com/tm-532-next-level
-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <link rel="stylesheet" href="css/bonus.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-10">
          <div class="tm-brand-container">
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name">Bibliothèque</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-2 tm-nav-col">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-0">
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="index.php">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="bu.php"> BU</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="livre.php">Livre</a>
                  </li>
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="service.php">
                      Service <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <?php if  ($_SESSION['nom'] == 'z'){
                    echo '<li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="inscrire.php">S_inscrire</a>
                  </li>';
                    echo '<li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="seconnecter.php">Se connecter </a>
                  </li>';} 
                    
                  else
                    {echo '<li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="profil.php">profil </a>
                  </li>'; 
                    echo '<li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="deconnexion.php">deconnecter</a>
                  </li>';

                    }?>
                </ul>
              </div>
            </nav>
            <form id= "searchbox" method= "get"  action="verif_form.php" autocomplete= "off">
                <input name= "q" type= "text" size= "15" placeholder= "Recherche..." />
                <input id= "button-submit" type= "submit" value="" />
              </form>
          </div>
          </div>
        </div>
      </div>

      <div class="row tm-welcome-row">
        <div class="col-12">
          <div
            class="tm-welcome-parallax tm-center-child"
            data-parallax="scroll"
            data-image-src="img/emprunter.jpg"
          >
            <div class="tm-bg-black-transparent tm-parallax-overlay">
              <h2>Emprunter</h2>
            </div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-right">
          <div class="text-content">
                  <h3 class="tm-text-secondary tm-mb-5">
                    Liste des livres que vous pourriez l'emprunter
                  </h3>
                  <p class="tm-mb-5">
                    
                    <table border = 2>
                      <thead>
                          <tr>
                              <th colspan="2">Les Livres</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Titre</td>
                              <td>Auteur</td>
                              <td>Date_de_publication</td>
                              <td>Description</td>
                              <td>selectionner</td>
                          </tr>
                          
                      </tbody>
                      <?php
                       include('acces_base_entrep_etudiant.php');
                    $reponse = $bdd->query('SELECT * FROM `livre`');
                    while($donnees = $reponse->fetch())
                    {
                        $id_auteur = $donnees['id_auteur_livre'];
                        $reponse_auteur = $bdd->query("SELECT * FROM `auteur` WHERE `id_auteur` = '$id_auteur'");
                        $donnees_auteur = $reponse_auteur->fetch();
                    
                          echo'<tr>';
                             echo '<td>'.$donnees['titre'].'</td>';
                             echo '<td>'.$donnees_auteur['nom_auteur'].'  '.$donnees_auteur['prenom_auteur'].'</td>';
                             echo '<td>'.$donnees['date_publication'] .'</td>';
                             echo '<td>'.$donnees['commentaire'].'</td>';
                             echo '<form name="FormAjout" action="extd_emprunter.php" method="post">';
                             echo '<td>
                                  <label class="tm-w-50">
                                    <input
                                      type="checkbox"
                                      name="ckb[]"
                                      class="filled-in"
                                      value="'.$donnees['id_livre'].'" />
                                    <span></span>
                                  </label>
                                  </td>';
                          echo'</tr>';
                       
                    }
                    echo'<tr>';
                    echo '<td>
                            <button
                              type="submit"
                              class="btn btn-secondary tm-btn-submit rounded-0">
                              emprunter
                            </button>
                          </td>';
                    echo'</tr>';
                    echo '<form>';
                    $reponse->closeCursor();
                      ?>
                    </table>
                  </p>
          </div>
            
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="row" id="tmCallToAction">
        <div class="col-12 tm-page-cols-container tm-call-to-action-col">
          <div class="tm-page-col-right">
            <div class="tm-call-to-action-box">
              <i class="fas fa-3x fa-rss-square tm-call-to-action-icon"></i>
              <div class="tm-call-to-action-text">
                <h3 class="tm-call-to-action-title">
                  Rester à jour!
                </h3>
                <p class="tm-call-to-action-description">
                  Pour recevoir toute les nouvelles informations a propos des livres, des bibliotheques,etc
                  Merci de saisir votre adresse mail.  
                </p>
                <form action="#" method="GET" class="tm-call-to-action-form">
                  <input type="email" name="email" placeholder="Email" class="tm-email-input"/>
                  <button type="submit" class="btn btn-primary">
                    Envoyer
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page footer -->
      <footer class="row tm-page-footer">
        <p class="col-12 tm-copyright-text mb-0">
          Copyright &copy; 2021 Ahmed Zaki et Ismail Hamrouni.
        </p>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function() {
        /* Isotope Gallery */

        // init isotope
        var $gallery = $(".tm-gallery").isotope({
          itemSelector: ".tm-gallery-item",
          layoutMode: "fitRows"
        });
        // layout Isotope after each image loads
        $gallery.imagesLoaded().progress(function() {
          $gallery.isotope("layout");
        });

        $(".filters-button-group").on("click", "a", function() {
          var filterValue = $(this).attr("data-filter");
          $gallery.isotope({ filter: filterValue });
          console.log("Filter value: " + filterValue);
        });

        /* Tabs */
        $(".tabgroup > div").hide();
        $(".tabgroup > div:first-of-type").show();
        $(".tabs a").click(function(e) {
          e.preventDefault();
          var $this = $(this),
            tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
            others = $this
              .closest("li")
              .siblings()
              .children("a"),
            target = $this.attr("href");
          others.removeClass("active");
          $this.addClass("active");

          // Scroll to tab content (for mobile)
          if ($(window).width() < 992) {
            $("html, body").animate(
              {
                scrollTop: $("#tmGallery").offset().top
              },
              200
            );
          }
        });
      });
    </script>
  </body>
</html>
