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
                            <a class="portfolio-link" data-bs-toggle="" href="ville.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/villelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Ville<?php endif; if($langue === 'english'): ?>City<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des différents emplacements et lieux d'une ville<?php endif; if($langue === 'english'): ?>Discover the vocabulary of different locations and places in a city<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="voyage.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/voyagelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire utiles pour voyager en train, en avion, en bâteau ou en voiture<?php endif; if($langue === 'english'): ?>Discover useful vocabulary for traveling by train, plane, boat or car<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="comptabilite.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/comptabilitelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Comptabilité & gestion<?php endif; if($langue === 'english'): ?>Accounting & management<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la comptabilité et de la gestion<?php endif; if($langue === 'english'): ?>Discover the vocabulary of accounting and management<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="droit.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/droitlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Droit<?php endif; if($langue === 'english'): ?>Law<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire juridique, les lois et les tribunaux<?php endif; if($langue === 'english'): ?>Discover legal vocabulary, laws and courts<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="economie.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/economielogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading" style="text-transform: capitalize;"><?php if($langue === 'french'): ?>économie<?php endif; if($langue === 'english'): ?>Economy<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'économie générale<?php endif; if($langue === 'english'): ?>Discover the vocabulary of general economics<?php endif; ?></div>
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
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="finance.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/financelogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Finance<?php endif; if($langue === 'english'): ?>Finance<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la finance<?php endif; if($langue === 'english'): ?>Discover the vocabulary of finance<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="industrie.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/industrielogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Industrie<?php endif; if($langue === 'english'): ?>Industry<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'industrie<?php endif; if($langue === 'english'): ?>Discover industry vocabulary<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="informatique.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/informatiquelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Informatique<?php endif; if($langue === 'english'): ?>Informatique<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire informatique, du hardware et du software<?php endif; if($langue === 'english'): ?>Discover the vocabulary of computers, hardware and software<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    



                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="marketing.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/marketinglogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Marketing<?php endif; if($langue === 'english'): ?>Marketing<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire du marketing et des termes utilisés dans ce domaine<?php endif; if($langue === 'english'): ?>Discover the vocabulary of marketing and terms used in this field<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="politique.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/politiquelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Politique & gouvernance<?php endif; if($langue === 'english'): ?>Politics & governance<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la politique : la séparation des pouvoirs, les élections, la monarchie...<?php endif; if($langue === 'english'): ?>Discover the vocabulary of politics: the separation of powers, elections, the monarchy...<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="unitesdemesure.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/sciencelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la science et des unités de mesures : de mécanique, d'électronique, de température, de radioactivité...<?php endif; if($langue === 'english'): ?>Discover the vocabulary of science and units of measurement: mechanics, electronics, temperature, radioactivity...<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                     <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item ">
                          <a class="page-link" href="theme2_4.php" style="color: <?php echo $text_couleur2 ?>;">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="theme2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">1</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">2</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_3.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">3</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_4.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">4</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_5.php" style="color : <?php echo $text_couleur; ?>;background-color: <?php echo $couleur ?>;">5</a></li>
                        <li class="page-item disabled" >
                          <a class="page-link">Next</a>
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