<?php
		$titrefr = "FORME GEOMETRIQUES";
		$titreang = "GEOMETRIC SHAPES";
		$bg = "./assets/img/bgtheme/formegeobg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Forme géométriques<?php endif; if($langue === 'english'): ?>Geometric shapes<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des formes géométriques en Anglais - Français - Arabe">
		<meta name="keywords" content="forme, géométrique, geometric, form, carré, triangle, rectangle, géométrie, geometry, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, architecture, architect, shape, shapes">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Forme géométriques<?php endif; if($langue === 'english'): ?>Geometric shapes<?php endif; ?></h1>

					<div class="trait_dessus"><hr></div>

		       <?php include('title_features.php'); ?>

					</div>

					<div class="table_simil">
		      	<table class="table table-hover col-md-3 w-75" style="margin-top:30px; margin-bottom: 30px;background-color: white;" id="tbl">
							<tr>
								<th class="col-md-4" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Anglais<?php endif; if($langue === 'english'): ?>English<?php endif; ?></th>
								<th class="col-md-4" style="background-color:<?php echo $th2_couleur ?>;"><?php if($langue === 'french'): ?>Français<?php endif; if($langue === 'english'): ?>French<?php endif; ?></th>
								<th class="col-md-4" style="background-color:<?php echo $th3_couleur ?>;"><?php if($langue === 'french'): ?>Arabe<?php endif; if($langue === 'english'): ?>Arabic<?php endif; ?></th>
							</tr>
							<tr>
									<td>Arrow</td>
									<td>flèche</td>
									<td>سهم</td>
								</tr>
								<tr>
									<td>Circle</td>
									<td>cercle</td>
									<td>دائرة</td>
								</tr>
								<tr>
									<td>Heart</td>
									<td>cœur</td>
									<td>قلب</td>
								</tr>
								<tr>
									<td>Heptagon</td>
									<td>Heptagone</td>
									<td>مسبع</td>
								</tr>
								<tr>
									<td>Hexagon</td>
									<td>Hexagone</td>
									<td>مسدس</td>
								</tr>
								<tr>
									<td>Line</td>
									<td>ligne</td>
									<td>خط</td>
								</tr>
								<tr>
									<td>Lozenge</td>
									<td>Losange</td>
									<td>معين</td>
								</tr>
								<tr>
									<td>Octagon</td>
									<td>Octogone</td>
									<td>مثمن</td>
								</tr>
								<tr>
									<td>Pentagon</td>
									<td>Pentagone</td>
									<td>المخمس</td>
								</tr>
								<tr>
									<td>Pyramid</td>
									<td>pyramide</td>
									<td>هرم</td>
								</tr>
								<tr>
									<td>Quadrilateral</td>
									<td>Quadrilatère</td>
									<td>رباعي</td>
								</tr>
								<tr>
									<td>Rectangle</td>
									<td>rectangle</td>
									<td>مستطيل</td>
								</tr>
								<tr>
									<td>Square</td>
									<td>carré</td>
									<td>مربع</td>
								</tr>
								<tr>
									<td>Star</td>
									<td>étoile</td>
									<td>نجمة</td>
								</tr>
								<tr>
									<td>Triangle</td>
									<td>triangle</td>
									<td>مثلث</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sciencelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Sciences & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="unitesdemesure.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/astronomielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="astronomie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
						</div>
					</div>

					<?php include('publicite.php') ?>

      </div>
    </section>

    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  
	</body>
</html>

		
		