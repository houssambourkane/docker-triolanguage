<?php
		$titrefr = "MOYENS DE TRANSPORT";
		$titreang = "MEANS OF TRANSPORT";
		$bg = "./assets/img/bgtheme/moyensdetransportbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Moyens de transport<?php endif; if($langue === 'english'): ?>Means of transport<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des moyens de transport en Anglais - Français - Arabe">
		<meta name="keywords" content="moyen, transport, moyens, means, circulation, déplacement, transit, transport, transportation, véhicule, moteur, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Moyens de transport<?php endif; if($langue === 'english'): ?>Means of transport<?php endif; ?></h1>

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
									<td>Ambulance</td>
									<td>Ambulance</td>
									<td>سيارة إسعاف</td>
								</tr>
								<tr>
									<td>ballooning</td>
									<td>Montgolfière</td>
									<td>المنطاد</td>
								</tr>
								<tr>
									<td>Bike</td>
									<td>Vélo</td>
									<td>دراجة هوائية</td>
								</tr>
								<tr>
									<td>Boat</td>
									<td>Bateau</td>
									<td>قارب</td>
								</tr>
								<tr>
									<td>Bus</td>
									<td>bus</td>
									<td>حافلة</td>
								</tr>
								<tr>
									<td>Car</td>
									<td>Voiture</td>
									<td>سيارة</td>
								</tr>
								<tr>
									<td>Ferry</td>
									<td>ferry</td>
									<td>العبارة</td>
								</tr>
								<tr>
									<td>fire truck</td>
									<td>camion de pompier</td>
									<td>شاحنة إطفاء</td>
								</tr>
								<tr>
									<td>Helicopter</td>
									<td>Hélicoptère</td>
									<td>هليكوبتر</td>
								</tr>
								<tr>
									<td>Metro</td>
									<td>Métro</td>
									<td>مترو</td>
								</tr>
								<tr>
									<td>Moped</td>
									<td>Mobylette</td>
									<td>الدراجة</td>
								</tr>
								<tr>
									<td>Motorbike</td>
									<td>Moto</td>
									<td>دراجة نارية</td>
								</tr>
								<tr>
									<td>Plane</td>
									<td>avion</td>
									<td>طائرة</td>
								</tr>
								<tr>
									<td>Rocket</td>
									<td>Fusée</td>
									<td>صاروخ</td>
								</tr>
								<tr>
									<td>Scooter</td>
									<td>Scooter</td>
									<td>سكوتر</td>
								</tr>
								<tr>
									<td>Submarine</td>
									<td>Sous-marin</td>
									<td>غواصة</td>
								</tr>
								<tr>
									<td>Taxi</td>
									<td>taxi</td>
									<td>سيارة أجرة</td>
								</tr>
								<tr>
									<td>Tractor</td>
									<td>Tracteur</td>
									<td>جرارة</td>
								</tr>
								<tr>
									<td>Train</td>
									<td>train</td>
									<td>قطار</td>
								</tr>
								<tr>
									<td>Tram</td>
									<td>Tram</td>
									<td>ترام</td>
								</tr>
								<tr>
									<td>School bus</td>
									<td>transport scolaire</td>
									<td>النقل المدرسي</td>
								</tr>
								<tr>
									<td>Truck</td>
									<td>Camion</td>
									<td>شاحنة</td>
								</tr>
								<tr>
									<td>Van</td>
									<td>Camionnette</td>
									<td>عربة</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/voyagelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="voyage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/villelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Ville<?php endif; if($langue === 'english'): ?>City<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="ville.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		