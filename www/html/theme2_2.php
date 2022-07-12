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
                            <a class="portfolio-link" data-bs-toggle="" href="epices.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/epiceslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading" style="text-transform: capitalize;"><?php if($langue === 'french'): ?>épices<?php endif; if($langue === 'english'): ?>spices<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des épices qu'on utilise au quotidien dans notre cuisine<?php endif; if($langue === 'english'): ?>Discover the vocabulary of spices that we use every day in our kitchen<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="famille.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/famillelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Famille<?php endif; if($langue === 'english'): ?>Family<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des différents membres de la famille<?php endif; if($langue === 'english'): ?>Discover the vocabulary of different family members<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="fitness.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/fitnesslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Fitness<?php endif; if($langue === 'english'): ?>Fitness<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire de la salle de sport et du matériel d'entraînement<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the gym and training equipment<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="formegeo.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/formegeologo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Forme géométriques<?php endif; if($langue === 'english'): ?>Geometric shapes<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des différentes formes géométriques<?php endif; if($langue === 'english'): ?>Discover the vocabulary of different geometric shapes<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="fruits.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/fruitlogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Fruits<?php endif; if($langue === 'english'): ?>Fruits<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des différents types de fruits : Sec, rouge, à noyaux, jaune, exotique, vert, orange, agrume et d'autres<?php endif; if($langue === 'english'): ?>Discover the vocabulary of the different types of fruits: Dry, red, stone, yellow, exotic, green, orange, citrus and others<?php endif; ?></div>
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
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="histoire.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/histoirelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Histoire<?php endif; if($langue === 'english'): ?>History<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez et voyagez dans le temps avec un lexique historique<?php endif; if($langue === 'english'): ?>Discover and go back in time with some historical vocabulary<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="loisirs.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/loisirslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des loisirs et des divertissements<?php endif; if($langue === 'english'): ?>Discover the vocabulary of leisure and entertainment<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="insecte.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/insectelogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Insectes<?php endif; if($langue === 'english'): ?>Insects<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des insectes<?php endif; if($langue === 'english'): ?>Discover the vocabulary of insects<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="legumes.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/legumeslogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Légumes<?php endif; if($langue === 'english'): ?>Vegetables<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaire des légumes<?php endif; if($langue === 'english'): ?>Discover the vocabulary of vegetables<?php endif; ?></div>
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
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="" href="devise.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./assets/img/portfolio/deviselogo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php if($langue === 'french'): ?>Les devises<?php endif; if($langue === 'english'): ?>Currencies<?php endif; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php if($langue === 'french'): ?>Découvrez le vocabulaires des différentes devises avec leurs symboles<?php endif; if($langue === 'english'): ?>Discover the vocabularies of the different currencies with their symbols<?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                     <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link" href="theme2.php" style="color: <?php echo $text_couleur2 ?>;">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="theme2.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">1</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_2.php" style="color : <?php echo $text_couleur; ?>;background-color: <?php echo $couleur ?>;">2</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_3.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">3</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_4.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">4</a></li>
                        <li class="page-item"><a class="page-link" href="theme2_5.php" style="color : <?php echo $text_couleur2; ?>;background-color: <?php echo $text_couleur ?>;">5</a></li>
                        <li class="page-item">
                          <a class="page-link" href="theme2_3.php" style="color: <?php echo $text_couleur2 ?>;">Next</a>
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