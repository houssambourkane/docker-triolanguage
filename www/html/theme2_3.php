<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Triolanguage</title>
  
  <?php include('links.php'); ?>
</head>
<body>
    <?php include('alert.php') ?>
  <div class="column">


   <?php include('header_main.php'); ?>

    <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php if($langue === 'french'): ?>Listes de thèmes<?php endif; if($langue === 'english'): ?>List of themes<?php endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if($langue === 'french'): ?>Plus de 60 thèmes disponibles<?php endif; if($langue === 'english'): ?>More than 60 themes available<?php endif; ?></h3>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="jours.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/jourslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Jours - mois - saisons<?php endif; if($langue === 'english'): ?>Days - months - seasons<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des jours de la semaine, des mois et des saisons<?php endif; if($langue === 'english'): ?>Discover the vocabulary of days of the week, months and seasons<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="materiaux.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/materiauxlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Les matériaux<?php endif; if($langue === 'english'): ?>The materials<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des matériaux, notamment ceux de construction<?php endif; if($langue === 'english'): ?>Discover the vocabulary of materials, especially construction materials<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="merveilles.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/merveilleslogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Les merveilles du monde<?php endif; if($langue === 'english'): ?>The world's wonders<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des merveilles du monde : moderne, antique, architectural, monumental et de l'époque industrielle<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the wonders of the world: modern, ancient, architectural, monumental and from the industrial era<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="signes.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/signelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Signes astrologiques<?php endif; if($langue === 'english'): ?>Astrological signs<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des signes zodiaques<?php endif; if($langue === 'english'): ?>Discover the vocabulary of zodiac signs<?php endif; ?></div>
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
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="mariage.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/mariagelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de mariage et de l'amour<?php endif; if($langue === 'english'): ?>Discover the vocabulary of marriage and love<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="maquillage.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/maquillage.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Maquillage<?php endif; if($langue === 'english'): ?>Make-up<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire du maquillage<?php endif; if($langue === 'english'): ?>Discover the vocabulary of makeup<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="meteo.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/meteologo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Météo<?php endif; if($langue === 'english'): ?>Weather<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de météo<?php endif; if($langue === 'english'): ?>Discover the weather vocabulary<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="metiers.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/metierslogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Métiers<?php endif; if($langue === 'english'): ?>Jobs<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez les termes des différents métiers<?php endif; if($langue === 'english'): ?>Discover the terms of different professions<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="motdeliaison.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/motdeliaisonlogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Mots de liaison<?php endif; if($langue === 'english'): ?>Linking words<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des mots de liaison : d'introduction, de conclusion, de cause, de but...<?php endif; if($langue === 'english'): ?>Discover the vocabulary of linking words: introduction, conclusion, cause, goal ...<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="moyensdetransport.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/avionlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Moyens de transport<?php endif; if($langue === 'english'): ?>Means of transport<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des moyens de transports et des véhicules<?php endif; if($langue === 'english'): ?>Discover the vocabulary of means of transport and vehicles<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="musique.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/musiquelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Musique & instrument<?php endif; if($langue === 'english'): ?>Music & instrument<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de genre de musique et des différents instruments<?php endif; if($langue === 'english'): ?>Discover the vocabulary of music kind and different instruments<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                     <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" href="theme2_2.php" style="color: <?php echo $text_couleur2 ?>;">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="theme2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">1</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">2</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_3.php" style="color : <?php echo $text_couleur; ?>;background-color: <?php echo $couleur ?>;">3</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_4.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">4</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_5.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">5</a></li>
                        <li class="page-item">
                          <a class="page-link" href="theme2_4.php" style="color: <?php echo $text_couleur2 ?>;">Next</a>
                        </li>
                      </ul>
                    </nav>

                </div>
            </div>
        </section>


    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  </div>
</body>
</html>