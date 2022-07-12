<?php
		$titrefr = "ASTRONOMIE";
		$titreang = "ASTRONOMY";
		$bg = "./assets/img/bgtheme/astronomiebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire d'astronomie en Anglais - Français - Arabe">
		<meta name="keywords" content="espace, univers, relativité, gravité, science, fusée, spatial, mars, spacex, galaxy, planète, planet, earth, astronomie, astronomy, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></h1>

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
									<td>Aerodynamics</td>
									<td>aérodynamique</td>
									<td>الديناميكا الهوائية</td>
								</tr>
								<tr>
									<td>Alien</td>
									<td>extraterrestre</td>
									<td>كائن فضائي</td>
								</tr>
								<tr>
									<td>Altitude</td>
									<td>altitude</td>
									<td>ارتفاع</td>
								</tr>
								<tr>
									<td>Asteroid belt</td>
									<td>ceinture d'astéroïdes</td>
									<td>حزام الكويكبات</td>
								</tr>
								<tr>
									<td>Astronaut</td>
									<td>astronaute</td>
									<td>رائد فضاء</td>
								</tr>
								<tr>
									<td>Astronomer</td>
									<td>astronome</td>
									<td>عالم الفلك</td>
								</tr>
								<tr>
									<td>Astrophysics</td>
									<td>astrophysique</td>
									<td>الفيزياء الفلكية</td>
								</tr>
								<tr>
									<td>Atmosphere</td>
									<td>atmosphère</td>
									<td>الغلاف الجوي</td>
								</tr>
								<tr>
									<td>Aurora</td>
									<td>aurore</td>
									<td>الشفق القطبي</td>
								</tr>
								<tr>
									<td>Big bang</td>
									<td>big bang</td>
									<td>الانفجار العظيم</td>
								</tr>
								<tr>
									<td>Black hole</td>
									<td>trou noir</td>
									<td>الثقب الأسود</td>
								</tr>
								<tr>
									<td>Collision</td>
									<td>collision</td>
									<td>تصادم</td>
								</tr>
								<tr>
									<td>Combustion</td>
									<td>combustion</td>
									<td>الإحتراق</td>
								</tr>
								<tr>
									<td>Comet</td>
									<td>comète</td>
									<td>المذنب</td>
								</tr>
								<tr>
									<td>Constellation</td>
									<td>constellation</td>
									<td>كوكبة</td>
								</tr>
								<tr>
									<td>Cosmic ray</td>
									<td>rayon cosmique</td>
									<td>الأشعة الكونية</td>
								</tr>
								<tr>
									<td>Cosmos</td>
									<td>cosmos</td>
									<td>كون</td>
								</tr>
								<tr>
									<td>Crater</td>
									<td>cratère</td>
									<td>فوهة البركان</td>
								</tr>
								<tr>
									<td>Eclipse</td>
									<td>éclipse</td>
									<td>كسوف / خسوف</td>
								</tr>
								<tr>
									<td>Explosion</td>
									<td>explosion</td>
									<td>انفجار</td>
								</tr>
								<tr>
									<td>Extraterrestrial</td>
									<td>extra-terrestre</td>
									<td>خارج الأرض</td>
								</tr>
								<tr>
									<td>Flight</td>
									<td>vol</td>
									<td>طيران</td>
								</tr>
								<tr>
									<td>Galaxy</td>
									<td>galaxie</td>
									<td>المجرة</td>
								</tr>
								<tr>
									<td>Gravity</td>
									<td>gravité</td>
									<td>الجاذبية</td>
								</tr>
								<tr>
									<td>Hemisphere</td>
									<td>hémisphère</td>
									<td>نصف كرة</td>
								</tr>
								<tr>
									<td>Intergalactic</td>
									<td>intergalactique</td>
									<td>بين المجرات</td>
								</tr>
								<tr>
									<td>Interplanetary</td>
									<td>interplanétaire</td>
									<td>بين الكواكب</td>
								</tr>
								<tr>
									<td>Interplanetary</td>
									<td>interstellaire</td>
									<td>بين النجوم</td>
								</tr>
								<tr>
									<td>Journey</td>
									<td>périple</td>
									<td>رحلة</td>
								</tr>
								<tr>
									<td>Launch pad</td>
									<td>rampe de lancement</td>
									<td>منصة الإطلاق</td>
								</tr>
								<tr>
									<td>Light year</td>
									<td>année-lumière</td>
									<td>سنة ضوئية</td>
								</tr>
								<tr>
									<td>Lunar lander</td>
									<td>atterrisseur lunaire</td>
									<td>هبوط القمر</td>
								</tr>
								<tr>
									<td>Martian</td>
									<td>martien</td>
									<td>مريخي</td>
								</tr>
								<tr>
									<td>Meteor</td>
									<td>météorite</td>
									<td>نيزك</td>
								</tr>
								<tr>
									<td>Milky way</td>
									<td>voie lactée</td>
									<td>درب التبانة</td>
								</tr>
								<tr>
									<td>Moon</td>
									<td>lune</td>
									<td>القمر</td>
								</tr>
								<tr>
									<td>Observatory</td>
									<td>observatoire</td>
									<td>مرصد فلكي</td>
								</tr>
								<tr>
									<td>Orbit</td>
									<td>orbite</td>
									<td>مدار</td>
								</tr>
								<tr>
									<td>Oxygen</td>
									<td>oxygène</td>
									<td>أكسجين</td>
								</tr>
								<tr>
									<td>Probe</td>
									<td>sonde</td>
									<td>مسبار</td>
								</tr>
								<tr>
									<td>Radiation</td>
									<td>radiation</td>
									<td>إشعاع</td>
								</tr>
								<tr>
									<td>Rays</td>
									<td>rayons</td>
									<td>أشعة</td>
								</tr>
								<tr>
									<td>Rings of Saturn</td>
									<td>anneaux de Saturn</td>
									<td>حلقات من زحل</td>
								</tr>
								<tr>
									<td>Rocket</td>
									<td>fusée</td>
									<td>صاروخ</td>
								</tr>
								<tr>
									<td>Rotation</td>
									<td>rotation</td>
									<td>دوران</td>
								</tr>
								<tr>
									<td>Satellite</td>
									<td>satellite</td>
									<td>الأقمار الصناعية</td>
								</tr>
								<tr>
									<td>Scientist</td>
									<td>scientifique</td>
									<td>عالم</td>
								</tr>
								<tr>
									<td>Shooting star</td>
									<td>étoile filante</td>
									<td>شهاب</td>
								</tr>
								<tr>
									<td>Shuttle</td>
									<td>navette</td>
									<td>مكوك</td>
								</tr>
								<tr>
									<td>Size</td>
									<td>taille</td>
									<td>حجم</td>
								</tr>
								<tr>
									<td>Sky</td>
									<td>ciel</td>
									<td>سماء</td>
								</tr>
								<tr>
									<td>Solar system</td>
									<td>système solaire</td>
									<td>نظام شمسي</td>
								</tr>
								<tr>
									<td>Space</td>
									<td>espace</td>
									<td>الفضاء</td>
								</tr>
								<tr>
									<td>Space station</td>
									<td>station spatiale</td>
									<td>محطة فضاء</td>
								</tr>
								<tr>
									<td>Space suit</td>
									<td>combinaison spatiale</td>
									<td>بدلة الفضاء</td>
								</tr>
								<tr>
									<td>Spaceship</td>
									<td>vaisseau spatial</td>
									<td>المركبة الفضائية</td>
								</tr>
								<tr>
									<td>Speed of light</td>
									<td>vitesse de la lumière</td>
									<td>سرعة الضوء</td>
								</tr>
								<tr>
									<td>Star</td>
									<td>étoile</td>
									<td>نجمة</td>
								</tr>
								<tr>
									<td>Stratosphere</td>
									<td>stratosphère</td>
									<td>الستراتوسفير</td>
								</tr>
								<tr>
									<td>Sun</td>
									<td>soleil</td>
									<td>شمس</td>
								</tr>
								<tr>
									<td>Telescope</td>
									<td>télescope</td>
									<td>تلسكوب</td>
								</tr>
								<tr>
									<td>Temperature</td>
									<td>Temperature</td>
									<td>درجة الحرارة</td>
								</tr>
								<tr>
									<td>Trajectory</td>
									<td>trajectoire</td>
									<td>مسار</td>
								</tr>
								<tr>
									<td>Ultraviolet rays</td>
									<td>rayons ultraviolets</td>
									<td>الأشعة فوق البنفسجية</td>
								</tr>
								<tr>
									<td>Universe</td>
									<td>univers</td>
									<td>الكون</td>
								</tr>
								<tr>
									<td>Unknown flying object (UFO)</td>
									<td>objet volant non identifié (OVNI)</td>
									<td>كائن الطيران غير معروف</td>
								</tr>
								<tr>
									<td>Zero gravity</td>
									<td>gravité zéro</td>
									<td>انعدام الجاذبية</td>
								</tr>


								<tr>
									<td class="soustitre">Planet</td>
									<td class="soustitre">Planète</td>
									<td class="soustitre">كوكب</td>
								</tr>
								<tr>
									<td>Earth</td>
									<td>terre</td>
									<td>الأرض</td>
								</tr>
								<tr>
									<td>Jupiter</td>
									<td>Jupiter</td>
									<td>المشتري</td>
								</tr>
								<tr>
									<td>Mars</td>
									<td>Mars</td>
									<td>المريخ</td>
								</tr>
								<tr>
									<td>Mercury</td>
									<td>Mercure</td>
									<td>عطارد</td>
								</tr>
								<tr>
									<td>Neptune</td>
									<td>Neptune</td>
									<td>نبتون</td>
								</tr>
								<tr>
									<td>Pluto</td>
									<td>Pluton</td>
									<td>بلوتو</td>
								</tr>
								<tr>
									<td>Saturn</td>
									<td>Saturne</td>
									<td>زحل</td>
								</tr>
								<tr>
									<td>Uranus</td>
									<td>Uranus</td>
									<td>أورانوس</td>
								</tr>
								<tr>
									<td>Venus</td>
									<td>Vénus</td>
									<td>فينوس</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/signelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Signes astrologiques<?php endif; if($langue === 'english'): ?>Astrological signs<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="signes.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
