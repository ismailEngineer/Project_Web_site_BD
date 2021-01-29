<?php
session_start()
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bibliotheque</title>
<!--
Next Level CSS Template
https://templatemo.com/tm-532-next-level
-->
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
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
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="#"
                      >Home <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="bu.php">BU</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="gallery.php">Livres</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="gallery.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="gallery.php">S'inscrire</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="gallery.php">Se connecter</a>
                  </li>
                </ul>
              </div>

            </nav>
            <form id= "searchbox" method= "get"  action="#" autocomplete= "off">
                <input name= "q" type= "text" size= "15" placeholder= "Recherche..." />
                <input id= "button-submit" type= "submit" value="" />
              </form>

          </div>
        </div>
      </div>

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left tm-welcome-box tm-bg-primary">
            <p class="tm-welcome-text">
              <em>"Lire, C'est boire et manger.
              L'esprit qui ne lit pas maigrit comme le corps qui ne mange pas."</em>
            </p>
          </div>
          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/blue-contem-girl.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-right">
            <h2 class="tm-text-secondary tm-mb-5">
              Description
            </h2>
            <p class="tm-mb-6">
              Ce site est un rassemblement de <strong>toutes les bibliothèques de la France</strong>, il permet aux étudiants de reserver gérer en temps réel leur emprunts et la disponibilitée des livres auprès de chez eux.
            </p>

          </div>
        </div>
      </section>

      <div class="tm-page-col-right">
        <h2 class="tm-text-secondary tm-mb-5">
              Les Fonctionnalités
            </h2>
        <div class="row tm-pt-7 tm-pb-6">
          <div class="col-md-6 tm-home-section-2-left">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/image-1.jpg"></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                Réserver une place dans la BU 
              </h3>
              <p class="tm-mb-5">
                Vous cherchez une place calme pour se concentrer et lire tranquillement ? 
                créez une compte et connectez vous sur le site pour decouvrir toutes nos fonctionnalités.
              </p>
              <ul class="tm-list-plus">
                <li>decouvrir des nouvelles ouvrages</li>
                <li>imprimez vous documents </li>
                <li>emprunter un livre </li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-6 tm-home-section-2-right">
            <div
              class="img-fluid tm-mb-4 tm-small-parallax"
              data-parallax="scroll"
              data-image-src="img/image-2.jpg"></div>
            <div>
              <h3 class="tm-text-secondary tm-mb-4">
                Trouver des livres
              </h3>
              <p class="tm-section-2-text">
                Notre Bibliothèque contient tous les categories des livres:
              </p>
              <ul class="tm-list-plus">
                <li>Sciences et technologies</li>
                <li>Arts </li>
                <li>Roman </li>
                <li>Histoire</li>
                <li>Etc... </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- row -->

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
  </body>
</html>