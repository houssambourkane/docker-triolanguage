<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage</title>
  <?php include('links.php'); ?>
</head>
<body>
  <?php include('alert.php') ?>
  <div class="column">


   <?php include('header_main.php'); ?>

    <header class="masthead">
            <div class="container">
                
                <div class="masthead-subheading"><?php if($langue === 'french'): ?>Bienvenue sur Triolanguage !<?php endif; if($langue === 'english'): ?>Welcome to Triolanguage !<?php endif; ?></div>
                <div class="masthead-heading text-uppercase"><?php if($langue === 'french'): ?>Apprenez le vocabulaire anglais - français - arabe<?php endif; if($langue === 'english'): ?>LEARN ENGLISH - FRENCH - ARABIC VOCABULARY<?php endif; ?></div>
                <?php /* <a class="btn  btn-xl text-uppercase" href="theme2.php" style="background-color:<?php echo $th1_couleur ?>; width:auto;height:auto;font-size: 30px; color :<?php echo $text_couleur2 ?>"><?php if($langue === 'french'): ?>Voir les thèmes<?php endif; if($langue === 'english'): ?>See all themes<?php endif; ?></a> */ ?>
                <a href="theme2.php" class="animated-button1">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                 <?php if($langue === 'french'): ?>Voir les thèmes<?php endif; if($langue === 'english'): ?>See all themes<?php endif; ?>
                </a>
               

            </div>
        </header>
    <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php if($langue === 'french'): ?>Services<?php endif; if($langue === 'english'): ?>Services<?php endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: <?php echo $couleur ?>;"></i>
                            <i class="fas fa-file-alt fa-stack-1x fa-inverse" style="color: <?php echo $th1_couleur ?>;"></i>
                        </span>
                        <h4 class="my-3"><?php if($langue === 'french'): ?>Fiches thématiques<?php endif; if($langue === 'english'): ?>Thematic sheets<?php endif; ?></h4>
                        <p class="text-muted"><?php if($langue === 'french'): ?>Dans la section thèmes, plus de 50 thèmes sont disponibles avec plus de 10 000 mots traduits en trois langues (Anglais, Français et Arabe)<?php endif; if($langue === 'english'): ?>In the themes section, more than 50 themes are available with more than 10,000 words translated into three languages (English, French and Arabic)<?php endif; ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: <?php echo $couleur ?>;"></i>
                            <i class="fas fa-book fa-stack-1x fa-inverse" style="color: <?php echo $th1_couleur ?>;"></i>
                        </span>
                        <h4 class="my-3"><?php if($langue === 'french'): ?>E-livre<?php endif; if($langue === 'english'): ?>E-book<?php endif; ?></h4>
                        <p class="text-muted"><?php if($langue === 'french'): ?>Livre contenant des tables de tous les thèmes disponibles, ce qui vous permettra de les consulter sans avoir à se connecter à internet<?php endif; if($langue === 'english'): ?>Book containing tables of all the available themes, which will allow you to consult them without having to connect to the internet<?php endif; ?></p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x" style="color: <?php echo $couleur ?>;"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse" style="color: <?php echo $th1_couleur ?>;"></i>
                        </span>
                        <h4 class="my-3"><?php if($langue === 'french'): ?>Paiement sécurisé<?php endif; if($langue === 'english'): ?>Secured payment<?php endif; ?></h4>
                        <p class="text-muted"><?php if($langue === 'french'): ?>Paiement effectué par stripe, une plateforme dotée d'une sécurité complète et d'une conformité strictes aux réglementations<?php endif; if($langue === 'english'): ?>Payment made by stripe, a platform with full security and strict compliance with regulations<?php endif; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php if($langue === 'french'): ?>Thèmes<?php endif; if($langue === 'english'): ?>Themes<?php endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if($langue === 'french'): ?>Top 6 thèmes les plus visités<?php endif; if($langue === 'english'): ?>Top 6 most visited themes<?php endif; ?></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="astronomie.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/astronomielogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'espace et de l'astrologie<?php endif; if($langue === 'english'): ?>Discover the vocabulary of space and astrology<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="geographie.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/geographielogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la géographie, notamment les régions du monde, les états américains, les îles, les océans et les mers<?php endif; if($langue === 'english'): ?>Discover the vocabulary of geography, including regions of the world, US states, islands, oceans and seas<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="5sens.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/les5senslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Les 5 sens<?php endif; if($langue === 'english'): ?>The 5 senses<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des 5 sens : la vue, le toucher, l'ouïe, le goût et l'odorat<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the 5 senses: sight, touch, hearing, taste and smell<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="maison.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/maisonlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Maison<?php endif; if($langue === 'english'): ?>House<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des pièces de la maison, de la cuisine, et de la salle de bain<?php endif; if($langue === 'english'): ?>Discover the vocabulary of rooms in the house, of the kitchen, and of the bathroom<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="nourriture.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/nourriturelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'alimentation : repas, ingrédients, viande, poisson, dessert et les différents goûts<?php endif; if($langue === 'english'): ?>Discover the vocabulary of food: meals, ingredients, meat, fish, dessert and different tastes<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="entrepriseentretien.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/entrepriselogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Entreprise & entretien<?php endif; if($langue === 'english'): ?>Company & interview<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des entreprises et de ses département, de l'employement et de l'entretien<?php endif; if($langue === 'english'): ?>Discover the vocabulary of companies and their departments, of employment and of interview<?php endif; ?></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
          <?php include('footer.php'); ?>
        </footer>
  </div>
  

</body>
</html>