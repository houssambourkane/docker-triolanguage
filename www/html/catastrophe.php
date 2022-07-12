<?php
		$titrefr = "CATASTROPHES NATURELLES";
		$titreang = "NATURAL DISASTERS";
		$bg = "./assets/img/bgtheme/catastrophebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Catastrophes naturelles<?php endif; if($langue === 'english'): ?>Natural disasters<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des catastrophes naturelles en Anglais - Français - Arabe">
		<meta name="keywords" content="érruption, erruption, apocalypse, fin, temps, catastrophes, naturelles, natural, disaster, tsunami, volcan, tremblement, terre, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Catastrophes naturelles<?php endif; if($langue === 'english'): ?>Natural disasters<?php endif; ?></h1>

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
									<td>alarm siren</td>
									<td>sirène d'alarme</td>
									<td>صفارات الانذار</td>
								</tr>
								<tr>
									<td>Avalanche</td>
									<td>avalanche</td>
									<td>انهيار ثلجي</td>
								</tr>
								<tr>
									<td>Charity</td>
									<td>organisme caritatif</td>
									<td>الاعمال الخيرية</td>
								</tr>
								<tr>
									<td>Course of a hurricane</td>
									<td>trajectoire d'un ouragan</td>
									<td>مسار الإعصار</td>
								</tr>
								<tr>
									<td>Cyclone</td>
									<td>cyclone</td>
									<td>الإعصار الحلزوني</td>
								</tr>
								<tr>
									<td>Destruction</td>
									<td>Destruction</td>
									<td>تدمير</td>
								</tr>
								<tr>
									<td>Disaster</td>
									<td>désastre</td>
									<td>كارثة</td>
								</tr>
								<tr>
									<td>Downpour</td>
									<td>déluge</td>
									<td>هطول</td>
								</tr>
								<tr>
									<td>Drought</td>
									<td>sécheresse</td>
									<td>الجفاف</td>
								</tr>
								<tr>
									<td>Earth tremor</td>
									<td>secousse sismique</td>
									<td>هزة أرضية</td>
								</tr>
								<tr>
									<td>Earthquake</td>
									<td>tremblement de terre / Séisme</td>
									<td>زلزال</td>
								</tr>
								<tr>
									<td>Epicenter</td>
									<td>épicentre</td>
									<td>المركز السطحي</td>
								</tr>
								<tr>
									<td>Epidemic</td>
									<td>épidémie</td>
									<td>وباء</td>
								</tr>
								<tr>
									<td>Eye of the cyclone</td>
									<td>œil du cyclone</td>
									<td>عين الإعصار</td>
								</tr>
								<tr>
									<td>Famine</td>
									<td>famine</td>
									<td>مجاعة</td>
								</tr>
								<tr>
									<td>Flood</td>
									<td>inondation</td>
									<td>فيضان</td>
								</tr>
								<tr>
									<td>Flooded river</td>
									<td>fleuve en crue</td>
									<td>نهر غمرته المياه</td>
								</tr>
								<tr>
									<td>Food supplies</td>
									<td>ravitaillement</td>
									<td>الامدادات الغذائية</td>
								</tr>
								<tr>
									<td>Fundraising</td>
									<td>collecte de fonds</td>
									<td>جمع التبرعات</td>
								</tr>
								<tr>
									<td>Heat wave</td>
									<td>canicule</td>
									<td>موجة الحرارة</td>
								</tr>
								<tr>
									<td>Human catastrophe</td>
									<td>catastrophe humaine</td>
									<td>كارثة بشرية</td>
								</tr>
								<tr>
									<td>Humanitarian aid</td>
									<td>aide humanitaire</td>
									<td>المساعدات الإنسانية</td>
								</tr>
								<tr>
									<td>Hurricane</td>
									<td>ouragan</td>
									<td>إعصار مداري</td>
								</tr>
								<tr>
									<td>Landslide</td>
									<td>glissement de terrain</td>
									<td>انهيار أرضي</td>
								</tr>
								<tr>
									<td>Lava</td>
									<td>lave</td>
									<td>حمم بركانية</td>
								</tr>
								<tr>
									<td>Magnitude of an earthquake</td>
									<td>Magnitude d'un séisme</td>
									<td>حجم الزلزال</td>
								</tr>
								<tr>
									<td>Natural phenomenon</td>
									<td>phénomène naturel</td>
									<td>ظاهرة طبيعية</td>
								</tr>
								<tr>
									<td>Property losses</td>
									<td>Pertes immobilières</td>
									<td>خسائر الممتلكات</td>
								</tr>
								<tr>
									<td>reconstruction program</td>
									<td>programme de reconstruction</td>
									<td>برنامج إعادة الإعمار</td>
								</tr>
								<tr>
									<td>Red Cross</td>
									<td>Croix Rouge</td>
									<td>الصليب الاحمر</td>
								</tr>
								<tr>
									<td>Refugee</td>
									<td>réfugié</td>
									<td>لاجئ</td>
								</tr>
								<tr>
									<td>Relief program</td>
									<td>programme de secours</td>
									<td>برنامج الاغاثة</td>
								</tr>
								<tr>
									<td>Relocation scheme</td>
									<td>programme de relogement</td>
									<td>مخطط الانتقال</td>
								</tr>
								<tr>
									<td>Rescue operation</td>
									<td>opération de secours</td>
									<td>عملية إنقاذ</td>
								</tr>
								<tr>
									<td>Richter scale</td>
									<td>échelle de Richter</td>
									<td>مقياس ريختر</td>
								</tr>
								<tr>
									<td>Rubble</td>
									<td>décombres</td>
									<td>أنقاض</td>
								</tr>
								<tr>
									<td>Scarcity of food</td>
									<td>manque de nourriture</td>
									<td>ندرة الغذاء</td>
								</tr>
								<tr>
									<td>Snowstorm</td>
									<td>tempête de neige</td>
									<td>العاصفة الثلجية</td>
								</tr>
								<tr>
									<td>Storm</td>
									<td>orage</td>
									<td>عاصفة</td>
								</tr>
								<tr>
									<td>Tectonic plate</td>
									<td>plaque tectonique</td>
									<td>لوحة تكتونية</td>
								</tr>
								<tr>
									<td>Thunder</td>
									<td>tonnerre</td>
									<td>الرعد</td>
								</tr>
								<tr>
									<td>Tidal wave</td>
									<td>raz de marée</td>
									<td>موجة مد و جزر</td>
								</tr>
								<tr>
									<td>Tornado</td>
									<td>tornade</td>
									<td>إعصار</td>
								</tr>
								<tr>
									<td>Tsunami</td>
									<td>Tsunami</td>
									<td>تسونامي</td>
								</tr>
								<tr>
									<td>Typhoon</td>
									<td>typhon</td>
									<td>إعصار التيفون</td>
								</tr>
								<tr>
									<td>Volcano eruption</td>
									<td>éruption volcanique</td>
									<td>ثوران بركان</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/meteologo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Météo<?php endif; if($langue === 'english'): ?>Weather<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="meteo.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/naturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nature<?php endif; if($langue === 'english'): ?>Nature<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nature.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
