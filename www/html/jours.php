<?php
		$titrefr = "JOURS - MOIS - SAISONS";
		$titreang = "DAYS - MONTHS - SEASONS";
		$bg = "./assets/img/bgtheme/joursbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Jours - mois - saisons<?php endif; if($langue === 'english'): ?>Days - months - seasons<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de jours, mois et saisons en Anglais - Français - Arabe">
		<meta name="keywords" content="jour, mois, saison, day, month, year, season, date, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, calendrier, géogrien, semestre, trimestre, semaine, week, end">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Jours - mois - saisons<?php endif; if($langue === 'english'): ?>Days - months - seasons<?php endif; ?></h1>

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
									<td class="soustitre">Days</td>
									<td class="soustitre">Jours</td>
									<td class="soustitre">الأيام</td>
								</tr>
								<tr>
									<td>Monday</td>
									<td>lundi</td>
									<td>الاثنين</td>
								</tr>
								<tr>
									<td>Tuesday</td>
									<td>mardi</td>
									<td>الثلاثاء</td>
								</tr>
								<tr>
									<td>Wednesday</td>
									<td>mercredi</td>
									<td>الأربعاء</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td>jeudi</td>
									<td>الخميس</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td>vendredi</td>
									<td>الجمعة</td>
								</tr>
								<tr>
									<td>Saturday</td>
									<td>samedi</td>
									<td>السبت</td>
								</tr>
								<tr>
									<td>Sunday</td>
									<td>dimanche</td>
									<td>الأحد</td>
								</tr>
								<tr>
									<td class="soustitre">Months</td>
									<td class="soustitre">Mois</td>
									<td class="soustitre">الشهور</td>
								</tr>
								<tr>
									<td>Januar</td>
									<td>janvier</td>
									<td>يناير</td>
								</tr>
								<tr>
									<td>February</td>
									<td>février</td>
									<td>فبراير</td>
								</tr>
								<tr>
									<td>March</td>
									<td>mars</td>
									<td>مارس</td>
								</tr>
								<tr>
									<td>April</td>
									<td>avril</td>
									<td>أبريل</td>
								</tr>
								<tr>
									<td>May</td>
									<td>mai</td>
									<td>مايو</td>
								</tr>
								<tr>
									<td>June</td>
									<td>juin</td>
									<td>يونيو</td>
								</tr>
								<tr>
									<td>July</td>
									<td>juillet</td>
									<td>يوليو</td>
								</tr>
								<tr>
									<td>August</td>
									<td>août</td>
									<td>أغسطس</td>
								</tr>
								<tr>
									<td>September</td>
									<td>septembre</td>
									<td>سبتمبر</td>
								</tr>
								<tr>
									<td>October</td>
									<td>octobre</td>
									<td>اكتوبر</td>
								</tr>
								<tr>
									<td>November</td>
									<td>novembre</td>
									<td>نوفمبر</td>
								</tr>
								<tr>
									<td>December</td>
									<td>décembre</td>
									<td>ديسمبر</td>
								</tr>
								<tr>
									<td class="soustitre">Seasons</td>
									<td class="soustitre">Saisons</td>
									<td class="soustitre">فصول</td>
								</tr>
								<tr>
									<td>Winter</td>
									<td>hiver</td>
									<td>الشتاء</td>
								</tr>
								<tr>
									<td>Spring</td>
									<td>printemps</td>
									<td>الربيع</td>
								</tr>
								<tr>
									<td>Summer</td>
									<td>été</td>
									<td>الصيف</td>
								</tr>
								<tr>
									<td>Autumn</td>
									<td>automne</td>
									<td>الخريف</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/tempslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Le temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="temps.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/signelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Signes astrologiques<?php endif; if($langue === 'english'): ?>Astrological signs<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="signes.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		