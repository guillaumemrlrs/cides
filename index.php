<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="img/icon.png" />
  <link href="fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <title>Cides - Plomberie, Chauffage, Climatisation</title>
</head>
<body>
    <header>
      <a href="" class="logo"><img src="img/cides_logo.svg" width="100" height="65" alt=""></a>
      <div class="menu-toggle"></div>
      <nav>
          <ul>
              <li><a href="#domainesactivites">Domaines d'activités</a></li>
              <li><a href="#qualifications">Qualifications</a></li>
              <li><a href="#realisations">Réalisations</a></li>
              <li><a href="#quisuisje">Qui suis-je ?</a></li>
              <li><a href="#mecontacter">Me contacter</a></li>
          </ul>
      </nav>
      <div class="clearfix"></div>
    </header>
    <div id="domainesactivites"></div>
    <div class="section1">
      <div class="inner">
        <h1><span class="orange">Domaines</span><span class="blue"> d'activités</span></h1>
        <div class="border"></div>
            <div class="row">
                    <div class="col">
                    <div class="subsection1">
                      <img src="img/plomberie.png" alt="">
                      <div class="name">Plomberie</div>
                      <p>
                        Répare, règle et entretient les équipements sanitaires, ainsi que les canalisatons de distribution de gaz, d'eau et d'évacuation.
                      </p>
                    </div>
                  </div>

                    <div class="col">
                      <div class="subsection1">
                        <img src="img/chauffage.png" alt="">
                        <div class="name">Chauffage</div>
                        <p>
                          Réalise l'installation de système de chauffages, l'entretien et le dépannage de chaudières.
                        </p>
                      </div>
                    </div>

                      <div class="col">
                        <div class="subsection1">
                          <img src="img/climatisation.png" alt="">
                          <div class="name">Climatisation</div>
                          <p>
                            Assure l'installation d'équipements de conditionnement d'air et de climatisation.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

    <div id="qualifications"></div>
    <div class="section1">
      <div class="inner">
        <h1><span class="orange">Quali</span><span class="blue">fications</span></h1>
            <div class="row">
              <div class="col">
              <div class="subsection1">
                <img src="img/qualibat.png" alt="">
                <div class="name">Qualibat</div>
                <p>
                   C'est le premier réseau de France de professionnels du bâtiment avec plus de 72 000 entreprises et artisans. Sa  mission est d'évaluer les compétences et les capacités des entreprises de tous les secteurs du bâtiment. Cette certification est à renouveler  tous  les  quatre  ans.
                </p>
              </div>
            </div>

              <div class="col">
                <div class="subsection1">
                  <img src="img/rge.png" alt="">
                  <div class="name">Rge</div>
                  <p>
                    Le label est réservé aux artisans et entreprises du bâtiment, spécialisés dans les travaux d’efficacité énergétique en rénovation. Le label RGE vous donne notamment droit à une réduction d'impôt sur le montant des travaux et vous permets de bénéficier des différentes aides proposées dans le cadre de la rénovation énergétiques.
                  </p>
                </div>
              </div>
              </div>
            </div>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

        <div id="realisations"></div>

          <div class="gallery-section">
            <div class="inner-width">
              <h1><span class="orange">Réali</span><span class="blue">sations</span></h1>
              <div class="border"></div>
              <div class="gallery">

                <a href="img/picture1.jpg" class="image">
                  <img src="img/picture1.jpg" alt="">
                </a>

                <a href="img/picture2.jpg" class="image">
                  <img src="img/picture2.jpg" alt="">
                </a>

                <a href="img/picture3.jpg" class="image">
                  <img src="img/picture3.jpg" alt="">
                </a>

                <a href="img/picture4.jpg" class="image">
                  <img src="img/picture4.jpg" alt="">
                </a>

              </div>
            </div>
          </div>

          <script>
          $(".gallery").magnificPopup({
            delegate:'a',
            type:'image',
            gallery:{
              enabled:true
            }
          });
          </script>

          <div id="quisuisje"></div>
          <div class="section2">
            <h1>Qui suis-je ?</h1>
            <div class="pic">
              <img src="img/profilepic.jpg" alt="">
              <i class="fas fa-quote-right"></i>
            </div>
            <h2> Philippe Pinto</h2>
            <p>Ingénieur réalité virtuelle de formation puis chef de projet informatique pendant plus de dix ans, j'ai décidé de faire une reconversion professionnelle assez originale. Au terme d'une formation chez les Apprentis d'Auteuil j'ai obtenu le CAP d'installateur thermique et sanitaire et créé ma propre entreprise en décembre 2013.</p>
          </div>

          <div class="container">

            <div class="contact-method">
              <a href="#mecontacter"><i class="fas fa-envelope"></i></a>
              <span>contact@cides-sarl.fr</span>
            </div>

            <div class="contact-method">
              <i class="fas fa-phone"></i>
              <span>06 23 64 29 06</span>
            </div>

            <div class="contact-method">
              <a href="https://goo.gl/maps/SG9iEqncEHBaZiT86" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
              <span>2 RTE DE TOULOUSE, GEMIL</span>
            </div>

          </div>
          <div id="mecontacter"></div>
          <div class="contact-section">
            <h1>Me contacter</h1>
            <div class="border2"></div>
            <h3>Besoin d'un devis ? Ou de renseignements ?</h3>
            <form class="contact-form" action="sendmessage.php" method="post">
              <input type="text" class="contact-form-text" placeholder="Votre nom complet" name="nom">
              <input type="text" class="contact-form-text" placeholder="Votre ville" name="ville">
              <input type="text" class="contact-form-text" placeholder="Votre adresse e-mail" name="email">
              <input type="text" class="contact-form-text" placeholder="Votre numéro de téléphone" name="tel">
              <textarea class="contact-form-text" placeholder="Votre demande" name="message"></textarea>
              <h5> Rassurez-moi... Vous n'êtes pas un robot ? Combien font 1+3 ?</h5>
              <input type="text" class="contact-form-captcha" name="captcha">
              <input type="submit" name="submit" class="contact-form-btn" value="Envoyer">
            </form>
          </div>

          <div class="footer">
            <div class="footer-bottom">
              © 2019 Cides SARL - <a href="mentions_legales.php">Mentions légales.</a>
            </div>
          </div>
          <script type="text/javascript" src="script.js"> </script>
          <button id="topBtn"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

          <script>
          $(document).ready(function(){
            $('.menu-toggle').click(function(){
              $('.menu-toggle').toggleClass('active')
              $('nav').toggleClass('active')
            })
          })
          </script>
</body>
</html>
