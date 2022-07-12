<?php
		$titrefr = "QUANTITE";
		$titreang = "QUANTITY";
		$bg = "./assets/img/bgtheme/quantitebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Quantité<?php endif; if($langue === 'english'): ?>Quantity<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de quantité en Anglais - Français - Arabe">
		<meta name="keywords" content="quantite, quantity, amount, countable, uncountable, compter, kilogramme, gramme, litre, poids, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Quantité<?php endif; if($langue === 'english'): ?>Quantity<?php endif; ?></h1>

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
									<td>A glass of</td>
									<td>Un verre de</td>
									<td>كأس من</td>
								</tr>
								<tr>
									<td>A jar of</td>
									<td>un pot de</td>
									<td>برطمان من</td>
								</tr>
								<tr>
									<td>A kilo of</td>
									<td>Un kilo de</td>
									<td>كيلو من</td>
								</tr>
								<tr>
									<td>A liter of</td>
									<td>Un litre de</td>
									<td>لتر من</td>
								</tr>
								<tr>
									<td>A lot of</td>
									<td>beaucoup de</td>
									<td>من كثير</td>
								</tr>
								<tr>
									<td>A packet of</td>
									<td>un paquet de</td>
									<td>علبة من</td>
								</tr>
								<tr>
									<td>Amount</td>
									<td>montant</td>
									<td>كمية</td>
								</tr>
								<tr>
									<td>Barely</td>
									<td>à peine</td>
									<td>بالكاد</td>
								</tr>
								<tr>
									<td>Bottle</td>
									<td>bouteille</td>
									<td>قنينة</td>
								</tr>
								<tr>
									<td>Box</td>
									<td>boîte</td>
									<td>صندوق</td>
								</tr>
								<tr>
									<td>Enough</td>
									<td>Assez</td>
									<td>كفى</td>
								</tr>
								<tr>
									<td>Excessively</td>
									<td>excessivement</td>
									<td>بإفراط</td>
								</tr>
								<tr>
									<td>Extremely</td>
									<td>extrêmement</td>
									<td>إلى أبعد الحدود</td>
								</tr>
								<tr>
									<td>Half</td>
									<td>Moitié</td>
									<td>نصف</td>
								</tr>
								<tr>
									<td>Little</td>
									<td>peu</td>
									<td>قليل</td>
								</tr>
								<tr>
									<td>Nothing</td>
									<td>rien</td>
									<td>لا شيء</td>
								</tr>
								<tr>
									<td>Quantity</td>
									<td>quantité</td>
									<td>كمية</td>
								</tr>
								<tr>
									<td>Quarter</td>
									<td>quart</td>
									<td>ربع</td>
								</tr>
								<tr>
									<td>Several</td>
									<td>nombreux</td>
									<td>العديد من</td>
								</tr>
								<tr>
									<td>Slice</td>
									<td>morceau</td>
									<td>شريحة</td>
								</tr>
								<tr>
									<td>Very</td>
									<td>très</td>
									<td>جدا</td>
								</tr>

								<tr>
									<td class="soustitre">Kitchen measurement unit</td>
									<td class="soustitre">Unité de mesure de cuisine </td>
									<td class="soustitre">وحدة قياس المطبخ</td>
								</tr>
								<tr>
									<td>cup (c)</td>
									<td>tasse</td>
									<td>كأس</td>
								</tr>
								<tr>
									<td>tablespoon (tbs)</td>
									<td>cuillère à soupe</td>
									<td>ملعقة كبيرة</td>
								</tr>
								<tr>
									<td>Teaspoon (tsp)</td>
									<td>cuillère à thé/café</td>
									<td>ملعقة شاي/قهوة</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nombrelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nombres<?php endif; if($langue === 'english'): ?>Numbers<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nombre.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/tempslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Le temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="temps.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		