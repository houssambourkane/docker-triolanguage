<?php
		$titrefr = "EPICES";
		$titreang = "SPICES";
		$bg = "./assets/img/bgtheme/epicesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>

<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Epices<?php endif; if($langue === 'english'): ?>Spices<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des épices en Anglais - Français - Arabe">
		<meta name="keywords" content="epices, spices, assaisonnement, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="text-transform:capitalize;margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>épices<?php endif; if($langue === 'english'): ?>Spices<?php endif; ?></h1>

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
									<td>Anise</td>
									<td>Anis</td>
									<td>يانسون</td>
								</tr>
								<tr>
									<td>Badiane</td>
									<td>Badiane</td>
									<td>باديان</td>
								</tr>
								<tr>
									<td>Caraway</td>
									<td>Carvi</td>
									<td>كمون</td>
								</tr>
								<tr>
									<td>Cardamom</td>
									<td>Cardamome</td>
									<td>هال</td>
								</tr>
								<tr>
									<td>chilli pepper</td>
									<td>Piment</td>
									<td>فلفل حلو</td>
								</tr>
								<tr>
									<td>Cinnamon</td>
									<td>Cannelle</td>
									<td>قرفة</td>
								</tr>
								<tr>
									<td>Clove</td>
									<td>Girofle</td>
									<td>القرنفل</td>
								</tr>
								<tr>
									<td>Colombo</td>
									<td>Colombo</td>
									<td>كولومبو</td>
								</tr>
								<tr>
									<td>Coriander</td>
									<td>Coriandre</td>
									<td>كزبرة</td>
								</tr>
								<tr>
									<td>Cumin</td>
									<td>Cumin</td>
									<td>كمون</td>
								</tr>
								<tr>
									<td>Curry</td>
									<td>Curry</td>
									<td>الكاري</td>
								</tr>
								<tr>
									<td>Dill</td>
									<td>Aneth</td>
									<td>شبت</td>
								</tr>
								<tr>
									<td>Fennel</td>
									<td>Fenouil</td>
									<td>شمر</td>
								</tr>
								<tr>
									<td>Fenugreek</td>
									<td>Fenugrec</td>
									<td>حلبة</td>
								</tr>
								<tr>
									<td>Galangal</td>
									<td>Galanga</td>
									<td>الخولنجان</td>
								</tr>
								<tr>
									<td>Garlic</td>
									<td>Ail</td>
									<td>ثوم</td>
								</tr>
								<tr>
									<td>Ginger</td>
									<td>Gingembre</td>
									<td>زنجبيل</td>
								</tr>
								<tr>
									<td>Licorice</td>
									<td>Réglisse</td>
									<td>عرق السوس</td>
								</tr>
								<tr>
									<td>Mustard seeds</td>
									<td>Moutarde graines</td>
									<td>بذور الخردل</td>
								</tr>
								<tr>
									<td>Nigella</td>
									<td>Nigelle</td>
									<td>حبة البركة</td>
								</tr>
								<tr>
									<td>Nutmeg</td>
									<td>Muscade</td>
									<td>جوزة الطيب</td>
								</tr>
								<tr>
									<td>Paprika</td>
									<td>Paprika</td>
									<td>فلفل أحمر</td>
								</tr>
								<tr>
									<td>Poppy</td>
									<td>Pavot</td>
									<td>خشخاش</td>
								</tr>
								<tr>
									<td>Ras el hanout</td>
									<td>Ras el hanout</td>
									<td>رأس الهانوت</td>
								</tr>
								<tr>
									<td>Saffron</td>
									<td>Safran</td>
									<td>زعفران</td>
								</tr>
								<tr>
									<td>Sesame</td>
									<td>Sésame</td>
									<td>سمسم</td>
								</tr>
								<tr>
									<td>Sumach</td>
									<td>Sumac</td>
									<td>السماق</td>
								</tr>
								<tr>
									<td>Turmeric</td>
									<td>Curcuma</td>
									<td>الكركم</td>
								</tr>
								<tr>
									<td>Vanilla</td>
									<td>Vanille</td>
									<td>الفانيليا</td>
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
							  <img src="./assets/img/logotheme/nutrimentslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nutriments<?php endif; if($langue === 'english'): ?>Nutriments<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nutriments.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		