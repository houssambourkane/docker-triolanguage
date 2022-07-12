<?php
		$titrefr = "MAQUILLAGE";
		$titreang = "MAKE-UP";
		$bg = "./assets/img/bgtheme/maquillagebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Maquillage<?php endif; if($langue === 'english'): ?>Make-up<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de maquillage en Anglais - Français - Arabe">
		<meta name="keywords" content="maquillage, makeup, artist, estéthique, crème, creme, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, self, care, self-care, visage, soin, beauté, beauty, tutoriel, tuto, tutorial">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Maquillage<?php endif; if($langue === 'english'): ?>Make-up<?php endif; ?></h1>

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
									<td>Anti-wrinkle</td>
									<td>antirides</td>
									<td>مكافحة تجعد</td>
								</tr>
								<tr>
									<td>Blush brush</td>
									<td>Pinceau à fard à joues</td>
									<td>فرشاة أحمر الخدود</td>
								</tr>
								<tr>
									<td>Blusher</td>
									<td>fard à joues</td>
									<td>أحمر الخدود</td>
								</tr>
								<tr>
									<td>Bronzer</td>
									<td>bronzer</td>
									<td>برونزر</td>
								</tr>
								<tr>
									<td>Complexion</td>
									<td>teint</td>
									<td>بشرة</td>
								</tr>
								<tr>
									<td>Concealer</td>
									<td>correcteur</td>
									<td>مصحح</td>
								</tr>
								<tr>
									<td>Contouring</td>
									<td>Contouring</td>
									<td>الكنتور</td>
								</tr>
								<tr>
									<td>Eyebrow pencil</td>
									<td>crayon à sourcils</td>
									<td>قلم الحواجب</td>
								</tr>
								<tr>
									<td>Eyeliner</td>
									<td>Eyeliner</td>
									<td>كحل</td>
								</tr>
								<tr>
									<td>Eyeshadow</td>
									<td>fard à paupières</td>
									<td>ظلال العيون</td>
								</tr>
								<tr>
									<td>Face powder</td>
									<td>poudre de visage</td>
									<td>بودرة الوجه</td>
								</tr>
								<tr>
									<td>Facial/facial care</td>
									<td>soin du visage</td>
									<td>العناية بالوجه</td>
								</tr>
								<tr>
									<td>Foundation</td>
									<td>fond de teint</td>
									<td>كريم أساس</td>
								</tr>
								<tr>
									<td>Hair dye</td>
									<td>teinture de cheveux</td>
									<td>صبغ الشعر</td>
								</tr>
								<tr>
									<td>Highlighter</td>
									<td>Highlighter</td>
									<td>هيغليغتر</td>
								</tr>
								<tr>
									<td>Lip gloss</td>
									<td>brillant à lèvres</td>
									<td>ملمع الشفاه</td>
								</tr>
								<tr>
									<td>Lipstick</td>
									<td>rouge à lèvres</td>
									<td>أحمر شفاه</td>
								</tr>
								<tr>
									<td>Make-up</td>
									<td>maquillage</td>
									<td>ماكياج</td>
								</tr>
								<tr>
									<td>Manicure</td>
									<td>manucure</td>
									<td>مانيكير</td>
								</tr>
								<tr>
									<td>Mascara</td>
									<td>mascara</td>
									<td>المسكرة</td>
								</tr>
								<tr>
									<td>Mirror</td>
									<td>miroir</td>
									<td>مرآة</td>
								</tr>
								<tr>
									<td>Moisturizer</td>
									<td>crème hydratante</td>
									<td>كريم ترطيب</td>
								</tr>
								<tr>
									<td>Nail file</td>
									<td>lime à ongles</td>
									<td>ملف الأظافر</td>
								</tr>
								<tr>
									<td>Nail polish</td>
									<td>vernis à ongle</td>
									<td>طلاء الأظافر</td>
								</tr>
								<tr>
									<td>Nail polish remover</td>
									<td>dissolvant</td>
									<td>سائل تنظيف الأظافر</td>
								</tr>
								<tr>
									<td>Pedicure</td>
									<td>pédicure</td>
									<td>باديكير</td>
								</tr>
								<tr>
									<td>Straightener</td>
									<td>Lisseur</td>
									<td>مكواة شعر</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/couleurslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Couleurs<?php endif; if($langue === 'english'): ?>Colors<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="couleurs.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/mariagelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="mariage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		