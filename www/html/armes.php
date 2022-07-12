<?php
		$titrefr = "ARMES";
		$titreang = "WEAPONS";
		$bg = "./assets/img/bgtheme/armesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Armes<?php endif; if($langue === 'english'): ?>Weapons<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des armes en Anglais - Français - Arabe">
		<meta name="keywords" content="armes, guns, gun, rifle, pistole, pistolet, fusil, sniper, bazooka, armes, weapons, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Armes<?php endif; if($langue === 'english'): ?>Weapons<?php endif; ?></h1>

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
									<td class="">Firearm</td>
									<td class="">Arme à feu</td>
									<td class="">سلاح ناري</td>
								</tr>
								<tr>
									<td>Long gun</td>
									<td>Arme d'épaule</td>
									<td>مسدس طويل</td>
								</tr>
								<tr>
									<td>Handgun</td>
									<td>Arme de poing</td>
									<td>مسدس</td>
								</tr>
								<tr>
									<td>Cannon</td>
									<td>Canon</td>
									<td>مدفع</td>
								</tr>
								<tr>
									<td>carbine</td>
									<td>Carabine</td>
									<td>بندقية</td>
								</tr>
								<tr>
									<td>Rifle</td>
									<td>Fusil</td>
									<td>بندقية</td>
								</tr>
								<tr>
									<td>precision rifle</td>
									<td>Fusil de précision</td>
									<td>بندقية الدقة</td>
								</tr>
								<tr>
									<td>Gun</td>
									<td>Pistolet</td>
									<td>مسدس</td>
								</tr>
								<tr>
									<td>silenced</td>
									<td>Silencieux</td>
									<td>كاتم</td>
								</tr>
								<tr>
									<td>machine gun</td>
									<td>Mitrailleuse</td>
									<td>مدفع رشاش</td>
								</tr>
								<tr>
									<td>Rocket launcher</td>
									<td>Lance-roquettes</td>
									<td>قاذفة الصواريخ</td>
								</tr>
								<tr>
									<td>Shotgun</td>
									<td>Fusil à pompe</td>
									<td>بندقية الصيد</td>
								</tr>
								<tr>
									<td>Revolver</td>
									<td>Revolver</td>
									<td>مسدس</td>
								</tr>
								<tr>
									<td>Submachine gun</td>
									<td>Mitraillette</td>
									<td>بندقية رشاشة</td>
								</tr>
								<tr>
									<td>assault rifle</td>
									<td>Fusil d'assaut</td>
									<td>بندقية الاقتحام</td>
								</tr>
								<tr>
									<td>Sniper</td>
									<td>Tireur d'élite</td>
									<td>قناص</td>
								</tr>
								
								<tr>
									<td class="soustitre">White weapon</td>
									<td class="soustitre">Arme blanche</td>
									<td class="soustitre">سلاح أبيض</td>
								</tr>
								<tr>
									<td>Axe</td>
									<td>Hache</td>
									<td>فأس</td>
								</tr>
								<tr>
									<td>Bardiche</td>
									<td>Bardiche</td>
									<td>برديش</td>
								</tr>
								<tr>
									<td>Baton</td>
									<td>Bâton</td>
									<td>عصا</td>
								</tr>
								<tr>
									<td>Dagger</td>
									<td>Dague</td>
									<td>خنجر</td>
								</tr>
								<tr>
									<td>Halberd</td>
									<td>Hallebarde</td>
									<td>المطرد</td>
								</tr>
								<tr>
									<td>Hammer</td>
									<td>Marteau</td>
									<td>مطرقة</td>
								</tr>
								<tr>
									<td>Katana</td>
									<td>Katana</td>
									<td>كاتانا</td>
								</tr>
								<tr>
									<td>Knife</td>
									<td>Couteau</td>
									<td>سكين</td>
								</tr>
								<tr>
									<td>Kris</td>
									<td>Kris (arme)</td>
									<td>كريس</td>
								</tr>
								<tr>
									<td>Kukri</td>
									<td>kukri</td>
									<td>كوكري</td>
								</tr>
								<tr>
									<td>Machete</td>
									<td>Machette</td>
									<td>المنجل</td>
								</tr>
								<tr>
									<td>Pertuisane</td>
									<td>Pertuisane</td>
									<td>برتوسان</td>
								</tr>
								<tr>
									<td>Saber</td>
									<td>Sabre</td>
									<td>سيف قاطع</td>
								</tr>
								<tr>
									<td>Spear</td>
									<td>Lance</td>
									<td>رمح</td>
								</tr>
								<tr>
									<td>Sword</td>
									<td>Épée</td>
									<td>سيف</td>
								</tr>
								<tr>
									<td>Vouge</td>
									<td>vouge</td>
									<td>فوج</td>
								</tr>
								<tr>
									<td>War scythe</td>
									<td>Faux de guerre </td>
									<td>منجل الحرب</td>
								</tr>
								<tr>
									<td class="soustitre">Throwing weapon</td>
									<td class="soustitre">Arme de jet</td>
									<td class="soustitre">سلاح الرمي</td>
								</tr>
								<tr>
									<td>Arc/Bow</td>
									<td>Arc</td>
									<td>قوس</td>
								</tr>
								<tr>
									<td>Arrow</td>
									<td>Flèche</td>
									<td>سهم</td>
								</tr>
								<tr>
									<td>Boomerang</td>
									<td>Boomerang</td>
									<td>بوميرانج</td>
								</tr>
								<tr>
									<td>Crossbow</td>
									<td>Arbalète</td>
									<td>القوس والنشاب</td>
								</tr>
								<tr>
									<td>Throwing knife</td>
									<td>Couteau de lancer</td>
									<td>سكين الرمي</td>
								</tr>
								<tr>
									<td class="soustitre">Ammunition</td>
									<td class="soustitre">Munition</td>
									<td class="soustitre">الذخيرة</td>
								</tr>
								<tr>
									<td>Bullet</td>
									<td>Balle</td>
									<td>رصاصة</td>
								</tr>
								<tr>
									<td>Load</td>
									<td>charge</td>
									<td>حمولة</td>
								</tr>
								<tr>
									<td>Missile</td>
									<td>Missile</td>
									<td>صاروخ</td>
								</tr>
								<tr>
									<td>Projectile</td>
									<td>projectile</td>
									<td>قذيفة</td>
								</tr>
								<tr>
									<td>Rocket</td>
									<td>Roquette</td>
									<td>روكيت</td>
								</tr>
								<tr>
									<td>Torpedo</td>
									<td>Torpille</td>
									<td>قذيفة نسف السفن</td>
								</tr>
								<tr>
									<td class="soustitre">Explosive</td>
									<td class="soustitre">Explosif</td>
									<td class="soustitre">متفجر</td>
								</tr>
								<tr>
									<td>Black powder</td>
									<td>Poudre noir</td>
									<td>مسحوق أسود</td>
								</tr>
								<tr>
									<td>Bomb</td>
									<td>Bombe</td>
									<td>قنبلة</td>
								</tr>
								<tr>
									<td>Explosive device</td>
									<td>Engin explosif</td>
									<td>عبوة ناسفة</td>
								</tr>
								<tr>
									<td>Grenade</td>
									<td>Grenade</td>
									<td>قنبلة يدوية</td>
								</tr>
								<tr>
									<td>Land mine</td>
									<td>Mine terrestre</td>
									<td>الألغام الأرضية</td>
								</tr>
								<tr>
									<td>Trinitrotoluene</td>
									<td>Trinitrotoluène (TNT)</td>
									<td>ثلاثي نيتروتولوين</td>
								</tr>

								<tr>
									<td class="soustitre">Other categories</td>
									<td class="soustitre">Autres catégories</td>
									<td class="soustitre">فئات أخرى</td>
								</tr>
								<tr>
									<td>Biological weapon</td>
									<td>Arme biologique</td>
									<td>سلاح بيولوجي</td>
								</tr>
								<tr>
									<td>Chemical weapon</td>
									<td>Arme chimique</td>
									<td>سلاح كيميائي</td>
								</tr>
								<tr>
									<td>Nuclear weapon</td>
									<td>Arme nucléaire</td>
									<td>السلاح النووي</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/chimielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 style="text-transform: capitalize;" class="card-title"><?php if($langue === 'french'): ?>éléments chimiques et autre matières<?php endif; if($langue === 'english'): ?>Chemical elements and other matters<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="elementschimiques.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/materiauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les matériaux<?php endif; if($langue === 'english'): ?>Materials<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="materiaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
