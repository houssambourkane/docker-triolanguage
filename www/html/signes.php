<?php
		$titrefr = "LES SIGNES ASTROLOGIQUES";
		$titreang = "THE ASTROLOGICAL SIGNS";
		$bg = "./assets/img/bgtheme/signesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Signes astrologiques<?php endif; if($langue === 'english'): ?>Astrological signs<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des signes astrologiques en Anglais - Français - Arabe">
		<meta name="keywords" content="astrologie, astrologique, signe, zodiaque, zodiac, birth, astrology, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="text-transform:capitalize;margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Signes astrologiques<?php endif; if($langue === 'english'): ?>Astrological signs<?php endif; ?></h1>

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
										<td>Aries</td>
										<td>Bélier</td>
										<td>برج الحمل</td>
									</tr>
									<tr>
										<td>Taurus</td>
										<td>Taureau</td>
										<td>برج الثور</td>
									</tr>
									<tr>
										<td>Gemini</td>
										<td>Gémeaux</td>
										<td>الجوزاء برج</td>
									</tr>
									<tr>
										<td>Cancer</td>
										<td>Cancer</td>
										<td>برج السرطان</td>
									</tr>
									<tr>
										<td>Leo</td>
										<td>Lion</td>
										<td>برج الأسد</td>
									</tr>
									<tr>
										<td>Virgo</td>
										<td>Vierge</td>
										<td>برج العذراء</td>
									</tr>
									<tr>
										<td>Libra</td>
										<td>Balance</td>
										<td>برج الميزان</td>
									</tr>
									<tr>
										<td>Scorpio</td>
										<td>Scorpion</td>
										<td>برج العقرب</td>
									</tr>
									<tr>
										<td>Sagittarius</td>
										<td>Sagittaire</td>
										<td>برج الرامي</td>
									</tr>
									<tr>
										<td>Capricorn</td>
										<td>Capricorne</td>
										<td>برج الجدي</td>
									</tr>
									<tr>
										<td>Aquarius</td>
										<td>Verseau</td>
										<td>برج الدلو</td>
									</tr>
									<tr>
										<td>Pisces</td>
										<td>Poissons</td>
										<td>برج الحوت</td>
									</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/astronomielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="astronomie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/jourslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Jours - mois - saisons<?php endif; if($langue === 'english'): ?>Days- months - seasons<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="jours.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		