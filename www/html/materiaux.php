<?php
		$titrefr = "MATERIAUX";
		$titreang = "MATERIALS";
		$bg = "./assets/img/bgtheme/materiauxbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Matériaux<?php endif; if($langue === 'english'): ?>Materials<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de matériaux en Anglais - Français - Arabe">
		<meta name="keywords" content="materiaux, materiels, construction, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Matériaux<?php endif; if($langue === 'english'): ?>Materials<?php endif; ?></h1>

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
									<td class="soustitre">building materials</td>
									<td class="soustitre">Matériaux de construction</td>
									<td class="soustitre">مواد البناء</td>
								</tr>
								<tr>
									<td>Brick</td>
									<td>brique</td>
									<td>قالب طوب</td>
								</tr>
								<tr>
									<td>Cement</td>
									<td>ciment</td>
									<td>أسمنت</td>
								</tr>
								<tr>
									<td>Concrete</td>
									<td>béton</td>
									<td>الخرسانة</td>
								</tr>
								<tr>
									<td>Epoxy</td>
									<td>époxy</td>
									<td>الايبوكسي</td>
								</tr>
								<tr>
									<td>Fiberglass</td>
									<td>fibre de verre</td>
									<td>الألياف الزجاجية</td>
								</tr>
								<tr>
									<td>Glass</td>
									<td>verre</td>
									<td>زجاج</td>
								</tr>
								<tr>
									<td>Granite</td>
									<td>granit</td>
									<td>غرانيت</td>
								</tr>
								<tr>
									<td>Gravel</td>
									<td>gravier</td>
									<td>حصى</td>
								</tr>
								<tr>
									<td>Marble</td>
									<td>marbre</td>
									<td>رخام</td>
								</tr>
								<tr>
									<td>Metal</td>
									<td>métal</td>
									<td>فلز</td>
								</tr>
								<tr>
									<td>Plaster</td>
									<td>plâtre</td>
									<td>جص</td>
								</tr>
								<tr>
									<td>Plastic</td>
									<td>plastique</td>
									<td>بلاستيك</td>
								</tr>
								<tr>
									<td>Plywood</td>
									<td>contre-plaqué</td>
									<td>خشب رقائقي</td>
								</tr>
								<tr>
									<td>Sand</td>
									<td>sable</td>
									<td>رمل</td>
								</tr>
								<tr>
									<td>Slate</td>
									<td>ardoise</td>
									<td>لائحة</td>
								</tr>
								<tr>
									<td>Stone</td>
									<td>pierre</td>
									<td>حجر</td>
								</tr>
								<tr>
									<td>Timber</td>
									<td>bois</td>
									<td>خشب</td>
								</tr>

								<tr>
									<td class="soustitre">Other materials</td>
									<td class="soustitre">Autre matériaux</td>
									<td class="soustitre">مواد أخرى</td>
								</tr>
								<tr>
									<td>Asbestos</td>
									<td>amiante</td>
									<td>الحرير الصخري</td>
								</tr>
								<tr>
									<td>Ash</td>
									<td>cendre</td>
									<td>رماد</td>
								</tr>
								<tr>
									<td>Cardboard</td>
									<td>carton</td>
									<td>كرتون</td>
								</tr>
								<tr>
									<td>Chalk</td>
									<td>craie</td>
									<td>الطباشير</td>
								</tr>
								<tr>
									<td>Clay</td>
									<td>argile</td>
									<td>طين</td>
								</tr>
								<tr>
									<td>Coal</td>
									<td>charbon</td>
									<td>فحم</td>
								</tr>
								<tr>
									<td>Diamond</td>
									<td>diamant</td>
									<td>الماس</td>
								</tr>
								<tr>
									<td>Dust</td>
									<td>poussière</td>
									<td>غبار</td>
								</tr>
								<tr>
									<td>Feather</td>
									<td>plume</td>
									<td>ريشة</td>
								</tr>
								<tr>
									<td>Gas</td>
									<td>gaz</td>
									<td>غاز</td>
								</tr>
								<tr>
									<td>Ice</td>
									<td>glace</td>
									<td>جليد</td>
								</tr>
								<tr>
									<td>Mud</td>
									<td>boue</td>
									<td>طين</td>
								</tr>
								<tr>
									<td>Oil</td>
									<td>pétrole/huile</td>
									<td>البترول/نفط</td>
								</tr>
								<tr>
									<td>Paper</td>
									<td>papier</td>
									<td>ورق</td>
								</tr>
								<tr>
									<td>Paraffin</td>
									<td>paraffine</td>
									<td>البارافين</td>
								</tr>
								<tr>
									<td>Petrol</td>
									<td>Essence</td>
									<td>بنزين</td>
								</tr>
								<tr>
									<td>Porcelain</td>
									<td>porcelaine</td>
									<td>الخزف</td>
								</tr>
								<tr>
									<td>Rubber</td>
									<td>caoutchouc</td>
									<td>مطاط</td>
								</tr>
								<tr>
									<td>Silica</td>
									<td>silice</td>
									<td>السيليكا</td>
								</tr>
								<tr>
									<td>Smoke</td>
									<td>fumée</td>
									<td>دخان</td>
								</tr>
								<tr>
									<td>Steam</td>
									<td>vapeur</td>
									<td>بخار</td>
								</tr>
								<tr>
									<td>Straw</td>
									<td>paille</td>
									<td>قش</td>
								</tr>
								<tr>
									<td>Water</td>
									<td>eau</td>
									<td>ماء</td>
								</tr>
								<tr>
									<td>Wax</td>
									<td>cire</td>
									<td>شمع</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/formegeo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Formes géométriques<?php endif; if($langue === 'english'): ?>Geometric shapes<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="formegeo.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/industrielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Industrie<?php endif; if($langue === 'english'): ?>Industry<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="industrie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		