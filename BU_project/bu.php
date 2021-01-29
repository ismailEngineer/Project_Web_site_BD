<?php 
session_start();
if (!isset($_SESSION['nom'])) $_SESSION['nom'] = 'z';
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Liste des Bibliothéques</title>
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
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="bu.php">
                      BU <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="livre.php">Livre</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="service.php">Service</a>
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

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left tm-welcome-box tm-bg-gradient">
            <p class="tm-welcome-text">
              <em
                >"Le paradis,à n'en pas douter.n'est q'une immense bibliothèque."</em
              >
            </p>
          </div>
          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/pink-contem-girl.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        <div class="col-12 tm-tabs-container tm-page-cols-container">
        <?php 
        if ($_SESSION['id_etudiant'] == '18')  
        {
        echo'<div class="tm-page-col-left">
        <ul class="navbar-nav ml-auto mr-0">
              <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="ajout_bibliotheque.php">Ajouter bibliothèque</a>
              </li>
              <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="supprimer.php">supprimer etudiant</a>
              </li>
              </u1>
              
          </div>';
        }
          ?>
          <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
              
              <div id="tab1">
                <div class="text-content">

                  <h3 class="tm-text-secondary tm-mb-5">
                    Liste des Bibliothèques
                  </h3>
                  
                    <table border = 2>
                      <thead>
                          <tr>
                              <th colspan="2">Les Bibliothéques</th>
                          </tr>
                      </thead>
                      
                          <tr>
                              <td>Nom de la Bibliothèque</td>
                              <td>localisation</td>
                              <td>Contact de la bibliothéque</td>
              
                          </tr>

                      <?php
                       include('acces_base_entrep_etudiant.php');
                    $reponse = $bdd->query('SELECT * FROM `bibliotheque`');
                    while($donnees = $reponse->fetch())
                    {
                      
                          echo'<tr>';
                             echo '<td>'.$donnees['nom_bu'].'</td>';
                             echo '<td>'.$donnees['ville'].'</td>';
                             echo '<td>'.$donnees['contact_BU'].'</td>';
                          echo'</tr>';
                       
                    }
                    $reponse->closeCursor();
                      ?>
                      
                       
                    </table>
                  </p>
                
                </div>
                <h3 class="tm-text-secondary tm-mb-5">
                    Quelques Photos des Bibliothèques:</h3>
                <div class="row tm-pt-5">
                  <div class="col-md-4 text-center">
                    <div class="tm-about-person mx-auto">
                      <img
                        src="img/bib_paris.jpg"
                        alt="Image"
                        class="img-fluid tm-mb-1"
                      />
                      <h4 class="tm-text-secondary tm-mb-1">
                        Bibliothèques Paris
                      </h4>
                    </div>
                  </div>

                  <div class="col-md-4 text-center">
                    <div class="tm-about-person mx-auto">
                      <img
                        src="img/bib_lyon.jpg"
                        alt="Image"
                        class="img-fluid tm-mb-1"
                      />
                      <h4 class="tm-text-secondary tm-mb-1">Bibliothèque Lyon</h4>
                    </div>
                  </div>

                  <div class="col-md-4 text-center">
                    <div class="tm-about-person mx-auto">
                      <img
                        src="img/bib_marseille.jpg"
                        alt="Image"
                        class="img-fluid tm-mb-1"
                      />
                      <h4 class="tm-text-secondary tm-mb-1">Bibliothèque Marseille</h4>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="tm-about-person mx-auto">
                      <img
                        src="img/bib_saint.png"
                        alt="Image"
                        class="img-fluid tm-mb-1"
                      />
                      <h4 class="tm-text-secondary tm-mb-1">Bibliothèque Saint Nazaire</h4>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
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
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function() {
        // Tabs
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
          $(tabgroup)
            .children("div")
            .hide();
          $(target).show();

          // Scroll to tab content (for mobile)
          if ($(window).width() < 992) {
            $("html, body").animate(
              {
                scrollTop: $("#first-tab-group").offset().top
              },
              200
            );
          }
        });
      });
    </script>
  </body>
</html>