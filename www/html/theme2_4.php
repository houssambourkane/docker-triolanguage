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
                            <a class="portfolio-link" data-bs-toggle="" href="nature.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/naturelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Nature<?php endif; if($langue === 'english'): ?>Nature<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de tous ce qui se trouve dans la nature<?php endif; if($langue === 'english'): ?>Discover the vocabulary of all that is in nature<?php endif; ?></div>
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
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'alimentation : nutriments, repas, ingrédients, viande, poisson, dessert et les différents goûts<?php endif; if($langue === 'english'): ?>Discover the vocabulary of food: nutrients, meals, ingredients, meat, fish, dessert and different tastes<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="nombre.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/nombrelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Nombres<?php endif; if($langue === 'english'): ?>Numbers<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des nombres de 1 à 1 000 000 000 000<?php endif; if($langue === 'english'): ?>Discover the vocabulary of numbers from 1 to 1,000,000,000,000<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="ecole.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/ecolelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>L'école<?php endif; if($langue === 'english'): ?>The school<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de l'école et des termes utilisés au milieu scolaire<?php endif; if($langue === 'english'): ?>Discover school vocabulary and terms used in schools<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="oiseaux.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/oiseauxlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Oiseaux<?php endif; if($langue === 'english'): ?>Birds<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des oiseaux<?php endif; if($langue === 'english'): ?>Discover the vocabulary of birds<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="pays.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/payslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Pays<?php endif; if($langue === 'english'): ?>Countries<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des continents et pays du monde<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the continents and countries of the world<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="qualitedefaut.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/antonymelogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Qualités & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des qualités et des défauts<?php endif; if($langue === 'english'): ?>Discover the vocabulary of qualities and faults<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="quantite.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/quantitelogo2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Quantité<?php endif; if($langue === 'english'): ?>Quantity<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des mesures de quantité<?php endif; if($langue === 'english'): ?>Discover the vocabulary of quantity measurements<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="sentiments.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/sentimentlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Sentiments & émotions<?php endif; if($langue === 'english'): ?>Feelings & emotions<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des sentiments et émotions de joie, tristesse, d'amour...<?php endif; if($langue === 'english'): ?>Discover the vocabulary of feelings and emotions of joy, sadness, love...<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="sport.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/sportlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Sport<?php endif; if($langue === 'english'): ?>Sport<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de sport<?php endif; if($langue === 'english'): ?>Discover sports vocabulary<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="temps.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/tempslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des indicateurs de temps et des durées<?php endif; if($langue === 'english'): ?>Discover the vocabulary of time indicators and durations<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="vetement.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/vetementlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Vêtements<?php endif; if($langue === 'english'): ?>Clothing<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des vêtements qu'on porte : sur la tête, sur le corps et sur les pieds<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the clothes we wear: on the head, on the body and on the feet<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                     <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" href="theme2_3.php" style="color: <?php echo $text_couleur2 ?>;">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="theme2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">1</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">2</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_3.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">3</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_4.php" style="color : <?php echo $text_couleur; ?>;background-color: <?php echo $couleur ?>;">4</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_5.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">5</a></li>
                        <li class="page-item">
                          <a class="page-link" href="theme2_5.php" style="color: <?php echo $text_couleur2 ?>;">Next</a>
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