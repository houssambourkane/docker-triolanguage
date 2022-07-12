<?php
		$titrefr = "COULEURS";
		$titreang = "COLORS";
		$bg = "./assets/img/bgtheme/couleursbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Couleurs<?php endif; if($langue === 'english'): ?>Colors<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire de couleurs en Anglais - Français - Arabe">
		<meta name="keywords" content="couleur, color, couleurs, colors, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Couleurs<?php endif; if($langue === 'english'): ?>Colors<?php endif; ?></h1>

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
									<td>Beige</td>
									<td>beige</td>
									<td>البيج</td>
								</tr>
								<tr>
									<td>Black</td>
									<td>noir</td>
									<td>أسود</td>
								</tr>
								<tr>
									<td>Blue</td>
									<td>bleu</td>
									<td>أزرق</td>
								</tr>
								<tr>
									<td>Brown</td>
									<td>marron</td>
									<td>البني</td>
								</tr>
								<tr>
									<td>Dark</td>
									<td>foncé</td>
									<td>داكن</td>
								</tr>
								<tr>
									<td>Golden</td>
									<td>doré</td>
									<td>ذهبي</td>
								</tr>
								<tr>
									<td>Green</td>
									<td>vert</td>
									<td>أخضر</td>
								</tr>
								<tr>
									<td>Grey</td>
									<td>gris</td>
									<td>الرمادي</td>
								</tr>
								<tr>
									<td>Mauve</td>
									<td>mauve</td>
									<td>خبازي</td>
								</tr>
								<tr>
									<td>Orange</td>
									<td>orange</td>
									<td>البرتقالي</td>
								</tr>
								<tr>
									<td>Pink</td>
									<td>rose</td>
									<td>وردي</td>
								</tr>
								<tr>
									<td>Purple / violet</td>
									<td>violet</td>
									<td>البنفسجي</td>
								</tr>
								<tr>
									<td>Red</td>
									<td>rouge</td>
									<td>أحمر</td>
								</tr>
								<tr>
									<td>Silver</td>
									<td>argenté</td>
									<td>فضي</td>
								</tr>
								<tr>
									<td>White</td>
									<td>blanc</td>
									<td>أبيض</td>
								</tr>
								<tr>
									<td>Yellow</td>
									<td>jaune</td>
									<td>الأصفر</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/vetementlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Vêtements<?php endif; if($langue === 'english'): ?>Clothing<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="vetement.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/maquillage.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Maquillage<?php endif; if($langue === 'english'): ?>Make-up<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="maquillage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

