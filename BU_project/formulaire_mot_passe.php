<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Connexion</title>
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
                    <a class="nav-link" href="index.html">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="bu.php"> BU</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="livre.php">Livre</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="service.html">Service</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="inscrire.php">S'inscrire</a>
                  </li>
                  <li class="nav-item ">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="seconnecter.php">Se connecter <span class="sr-only">(current)</span></a>
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
          <div class="tm-page-col-left tm-welcome-box tm-bg-gradient">
            <p class="tm-welcome-text">
              <em
                >"Allez-y connectez vous on vous attend !!"</em
              >
            </p>
          </div>
          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/login.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-mb-3">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left">
            <div class="tm-contact-container tm-mb-6">
              <div class="tm-address-container">
                <h2 class="tm-text-secondary tm-mb-6">Adresse</h2>
                <address>
                  <p>
                    60 Rue Michel Ange<br />
                    Saint Nazaire 44600<br />
                    France
                  </p>
                </address>
              </div>

              <div class="tm-location-container">
                <h2 class="tm-text-secondary tm-mb-4">Location</h2>
                <a href="#"><img src="img/map.jpg" alt="Map image" class="img-fluid" /></a>
              </div>
            </div>
          </div>
          <div class="tm-page-col-right tm-form-container">
            <h2>Verification du Compte</h2>
              <form
              action="reponse_question.php"
              method="POST"
              id="tm_contact_form"
              enctype="multipart/form-data">
                      <div class="form-group-2">
                          <td> Reponse : </td>
                          <p> Quelle est votre couleur préférer ?<p>
                      </div>
                      <div class="form-group-2">
                           <input type="text" name ="reponse_question" maxlength="30" size="20"> </td>
                      </div>             
                      <div class="form-group-2">
                          
                             <button type="submit"name='modifier' class="btn btn-secondary tm-btn-submit rounded-0"> Modifier </button> 
                     </div>
                   
                </form>
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
      $(document).on("change", ":file", function() {
        var input = $(this),
          numFiles = input.get(0).files ? input.get(0).files.length : 1,
          label = input
            .val()
            .replace(/\\/g, "/")
            .replace(/.*\//, "");
        input.trigger("fileselect", [numFiles, label]);
      });

      $(document).ready(function() {
        $(":file").on("fileselect", function(event, numFiles, label) {
          $("#file_name_label").attr("placeholder", label);
        });
      });
    </script>
  </body>
</html>