<?php
		$titrefr = "BOISSON";
		$titreang = "BEVERAGE";
		$bg = "./assets/img/bgtheme/boissonbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Boisson<?php endif; if($langue === 'english'): ?>Beverage<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire de boisson en Anglais - Français - Arabe">
		<meta name="keywords" content="café, coffee, boire, drink, boisson, beverage, cola, limonade, jus, bière, beer, vodka, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Boisson<?php endif; if($langue === 'english'): ?>Beverage<?php endif; ?></h1>

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
									<td>Alcohol</td>
									<td>alcool</td>
									<td>كحول</td>
								</tr>
								<tr>
									<td>Beer</td>
									<td>bière</td>
									<td>بيرة</td>
								</tr>
								<tr>
									<td>Beverage</td>
									<td>breuvage</td>
									<td>مشروب</td>
								</tr>
								<tr>
									<td>Black coffee</td>
									<td>café noir</td>
									<td>قهوة سوداء</td>
								</tr>
								<tr>
									<td>Bottle</td>
									<td>bouteille</td>
									<td>قنينة</td>
								</tr>
								<tr>
									<td>Brandy</td>
									<td>cognac</td>
									<td>براندي</td>
								</tr>
								<tr>
									<td>Champagne</td>
									<td>champagne</td>
									<td>شامبانيا</td>
								</tr>
								<tr>
									<td>Cider</td>
									<td>cidre</td>
									<td>عصير التفاح</td>
								</tr>
								<tr>
									<td>Cocktail</td>
									<td>cocktail</td>
									<td>كوكتيل</td>
								<tr>
									<td>coffee cream</td>
									<td>café crème</td>
									<td>قهوة بالحليب</td>
								</tr>
								</tr>
								<tr>
									<td>Coke</td>
									<td>coca</td>
									<td>فحم الكوك</td>
								</tr>
								<tr>
									<td>cup</td>
									<td>tasse</td>
									<td>كأس</td>
								</tr>
								<tr>
									<td>energy drink</td>
									<td>boisson énergisante</td>
									<td>مشروب الطاقة</td>
								</tr>
								<tr>
									<td>Fruit juice</td>
									<td>jus de fruit</td>
									<td>عصير فواكه</td>
								</tr>
								<tr>
									<td>Gin</td>
									<td>gin</td>
									<td>جين</td>
								</tr>
								<tr>
									<td>Ground coffee</td>
									<td>café moulu</td>
									<td>البن المطحون</td>
								</tr>
								<tr>
									<td>Herbal tea</td>
									<td>tisane</td>
									<td>شاي اعشاب</td>
								</tr>
								<tr>
									<td>Hot chocolate</td>
									<td>chocolat chaud</td>
									<td>شكولاته ساخنة</td>
								</tr>
								<tr>
									<td>Hydromel</td>
									<td>Hydromel</td>
									<td>هيدروميل</td>
								</tr>
								<tr>
									<td>Ice cube</td>
									<td>glaçon</td>
									<td>مكعبات الثلج</td>
								</tr>
								<tr>
									<td>Juice</td>
									<td>jus</td>
									<td>عصير</td>
								</tr>
								<tr>
									<td>Lemonade</td>
									<td>limonade/boisson gazeuse</td>
									<td>مشروب غازي</td>
								</tr>
								<tr>
									<td>Liqueur</td>
									<td>liqueur</td>
									<td>ليكور</td>
								</tr>
								<tr>
									<td>Milk</td>
									<td>lait</td>
									<td>حليب</td>
								</tr>
								<tr>
									<td>Milky drink</td>
									<td>Boisson lactée</td>
									<td>مشروب حليبي</td>
								</tr>
								<tr>
									<td>Mineral water</td>
									<td>eau minérale</td>
									<td>ماء معدني</td>
								</tr>
								<tr>
									<td>Orange juice</td>
									<td>jus d'orange</td>
									<td>عصير البرتقال</td>
								</tr>
								<tr>
									<td>Orangeade</td>
									<td>orangeade</td>
									<td>عصير البرتقال</td>
								</tr>
								<tr>
									<td>Pint of beer</td>
									<td>pinte de bière</td>
									<td>نصف لتر من البيرة</td>
								</tr>
								<tr>
									<td>Red/rosé/white wine</td>
									<td>vin rouge/rosé/blanc</td>
									<td>النبيذ الأحمر / روز / الأبيض</td>
								</tr>
								<tr>
									<td>Refreshment</td>
									<td>rafraîchissement</td>
									<td>مرطبات</td>
								</tr>
								<tr>
									<td>Rum</td>
									<td>rhum</td>
									<td>رم شراب</td>
								</tr>
								<tr>
									<td>Soda</td>
									<td>soda</td>
									<td>مشروب غازي</td>
								</tr>
								<tr>
									<td>Soft drink</td>
									<td>boisson non alcoolisée</td>
									<td>مشروب غير كحولي</td>
								</tr>

								<tr>
									<td>Sparkling water</td>
									<td>eau gazeuse</td>
									<td>مياه غازية</td>
								</tr>
								<tr>
									<td>Sparkling wine</td>
									<td>Vin pétillant</td>
									<td>النبيذ الفوار</td>
								</tr>
								<tr>
									<td>Spirit</td>
									<td>alcool fort</td>
									<td>كحول قوي</td>
								</tr>
								<tr>
									<td>Syrup</td>
									<td>Sirop</td>
									<td>شراب مركز</td>
								</tr>
								<tr>
									<td>Sweet</td>
									<td>Sucré</td>
									<td>حلو</td>
								</tr>
								<tr>
									<td>Table wine</td>
									<td>vin de table</td>
									<td>النبيذ الجدول</td>
								</tr>
								<tr>
									<td>Tea</td>
									<td>thé</td>
									<td>شاي</td>
								</tr>
								<tr>
									<td>Tonic water</td>
									<td>L'eau tonique</td>
									<td>مياه مقوية</td>
								</tr>
								<tr>
									<td>Vegetable juice</td>
									<td>jus de légume</td>
									<td>عصير خضار</td>
								</tr>
								<tr>
									<td>Vodka</td>
									<td>vodka</td>
									<td>فودكا</td>
								</tr>
								<tr>
									<td>Whisky</td>
									<td>Whisky</td>
									<td>ويسكي</td>
								</tr>
								<tr>
									<td>White coffee</td>
									<td>café au lait</td>
									<td>قهوة بيضاء</td>
								</tr>
								<tr>
									<td>Wine bar</td>
									<td>bar</td>
									<td>شريط النبيذ</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nourriturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nourriture.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/epiceslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 style="text-transform: capitalize;" class="card-title"><?php if($langue === 'french'): ?>épices<?php endif; if($langue === 'english'): ?>Spices<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="epices.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		
