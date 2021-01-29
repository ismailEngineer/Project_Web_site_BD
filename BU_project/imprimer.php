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
    <title>Impression</title>
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
            </nav>
            <form id= "searchbox" method= "get"  action="#" autocomplete= "off">
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
            data-image-src="img/impression.jpg"
          >
            <div class="tm-bg-black-transparent tm-parallax-overlay">
              <h2>Impression</h2>
            </div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4">
        <div class="col-12 tm-page-cols-container">
          
          <div class="tm-page-col-right">
            <h3 class="tm-text-secondary tm-mb-5">
                    Entrez le fichier à imprimer</h3>
            <div class="text-content">
              <form
              action="ext_imprimer.php"
              method="POST"
              id="tm_contact_form"
              enctype="multipart/form-data">
              <div class="form-group">
                <input
                  type="text"
                  id="contact_etudiant"
                  name="contact_etudiant"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Email"
                  required="" />
              </div>
              <div class="form-group-2 input-field">
                <select class="tm-select" name="id_bu" id="id_bu">
                  <option value="select">Selectionner votre institut</option>
                  <?php
                   include('acces_base_entrep_etudiant.php');
                    $reponse = $bdd->query('SELECT * FROM `bibliotheque`');
                    while($donnees = $reponse->fetch())
                    {
                        echo'<option value='.$donnees['id_bu'].'>'.$donnees['nom_bu'].'</option>';
                    }
                    ?>
                  <option value="Autre">Autre</option>
                </select>
              </div>
              <div class="form-group-2">
                <input
                  type="date"
                  id="date"
                  name="date"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Date impression"
                  required="" />
              </div>
                  <div class="tm-mb-6 file-upload-container">
                <input
                  id="file_name_label"
                  type="text"
                  class="border-top-0 border-right-0 border-left-0"
                  placeholder="Fichier"
                  disabled />
                <label class="btn btn-outline btn-file">
                  Importer
                  <input
                    type="file"
                    name="file_to_upload"
                    style="display: none;" />
                </label>
              </div>

              <div class="">
                <button
                  type="submit"
                  class="btn btn-secondary tm-btn-submit rounded-0">
                  Imprimer
                </button>
              </div>
            </form>
                
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
                  <input type="email" name="email" placeholder="Email" class="tm-email-input" required />
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
