<?php
		$titrefr = "METEO";
		$titreang = "WEATHER";
		$bg = "./assets/img/bgtheme/meteobg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Météo<?php endif; if($langue === 'english'): ?>Weather<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de météo en Anglais - Français - Arabe">
		<meta name="keywords" content="météo, weather, pluie, neige, snow, rain, tempête, cyclone, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, prédiction">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Météo<?php endif; if($langue === 'english'): ?>Weather<?php endif; ?></h1>

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
									<td>Air pollution</td>
									<td>pollution de l'air</td>
									<td>تلوث الهواء</td>
								</tr>
								<tr>
									<td>Atmosphere</td>
									<td>atmosphère</td>
									<td>الغلاف الجوي</td>
								</tr>
								<tr>
									<td>Aurora borealis</td>
									<td>aurore boréale</td>
									<td>الشفق القطبي</td>
								</tr>
								<tr>
									<td>Avalanche</td>
									<td>avalanche</td>
									<td>انهيار ثلجي</td>
								</tr>
								<tr>
									<td>Barometer</td>
									<td>baromètre</td>
									<td>مقياس الضغط الجوي</td>
								</tr>
								<tr>
									<td>Black ice</td>
									<td>verglas</td>
									<td>الجليد الأسود</td>
								</tr>
								<tr>
									<td>Blazing</td>
									<td>brûlant</td>
									<td>ملتهب</td>
								</tr>
								<tr>
									<td>Blizzard</td>
									<td>blizzard, tempête de neige</td>
									<td>عاصفة ثلجية</td>
								</tr>
								<tr>
									<td>Bright</td>
									<td>brillant</td>
									<td>مشرق</td>
								</tr>
								<tr>
									<td>Clear</td>
									<td>clair</td>
									<td>واضح</td>
								</tr>
								<tr>
									<td>Climate</td>
									<td>climat</td>
									<td>مناخ</td>
								</tr>
								<tr>
									<td>Clouds</td>
									<td>nuages</td>
									<td>سحاب</td>
								</tr>
								<tr>
									<td>Cold</td>
									<td>froid</td>
									<td>البرد</td>
								</tr>
								<tr>
									<td>Cold breeze</td>
									<td>brise froide</td>
									<td>نسيم بارد</td>
								</tr>
								<tr>
									<td>Cold wave</td>
									<td>vague de froid</td>
									<td>موجة باردة</td>
								</tr>
								<tr>
									<td>Cool</td>
									<td>frais</td>
									<td>بارد</td>
								</tr>
								<tr>
									<td>Cyclone, hurricane</td>
									<td>cyclone, ouragan</td>
									<td>إعصار حلزوني</td>
								</tr>
								<tr>
									<td>Damp</td>
									<td>humide</td>
									<td>مبلل</td>
								</tr>
								<tr>
									<td>Dense fog</td>
									<td>brouillard dense</td>
									<td>ضباب كثيف</td>
								</tr>
								<tr>
									<td>Downpour</td>
									<td>averse</td>
									<td>هطول</td>
								</tr>
								<tr>
									<td>Drizzle</td>
									<td>bruine</td>
									<td>رذاذ</td>
								</tr>
								<tr>
									<td>Drought</td>
									<td>sécheresse</td>
									<td>جفاف</td>
								</tr>
								<tr>
									<td>Dry</td>
									<td>sec</td>
									<td>جاف</td>
								</tr>
								<tr>
									<td>Dry season</td>
									<td>saison sèche</td>
									<td>فصل جاف</td>
								</tr>
								<tr>
									<td>Fog</td>
									<td>brouillard</td>
									<td>ضباب</td>
								</tr>
								<tr>
									<td>Freezing</td>
									<td>gelé</td>
									<td>تجميد</td>
								</tr>
								<tr>
									<td>Frost</td>
									<td>givre</td>
									<td>صقيع</td>
								</tr>
								<tr>
									<td>Gloomy</td>
									<td>maussade, sombre</td>
									<td>كئيب</td>
								</tr>
								<tr>
									<td>Gust of wind</td>
									<td>rafale de vent</td>
									<td>هبة ريح</td>
								</tr>
								<tr>
									<td>Hailstones</td>
									<td>grêlons</td>
									<td>البرد</td>
								</tr>
								<tr>
									<td>Heat wave</td>
									<td>canicule, vague de chaleur</td>
									<td>موجة الحرارة</td>
								</tr>
								<tr>
									<td>Hot, warm</td>
									<td>chaud</td>
									<td>حار</td>
								</tr>
								<tr>
									<td>Humidity</td>
									<td>humidité</td>
									<td>رطوبة</td>
								</tr>
								<tr>
									<td>Icy wind</td>
									<td>vent glacial</td>
									<td>رياح جليدية</td>
								</tr>
								<tr>
									<td>Lightning</td>
									<td>éclair</td>
									<td>برق</td>
								</tr>
								<tr>
									<td>Meteorologist</td>
									<td>météorologue</td>
									<td>عالم الأرصاد الجوية</td>
								</tr>
								<tr>
									<td>Meteorology</td>
									<td>météorologie</td>
									<td>علم الارصاد الجوية</td>
								</tr>
								<tr>
									<td>Mist, haze</td>
									<td>brume</td>
									<td>ضباب</td>
								</tr>
								<tr>
									<td>Monsoon</td>
									<td>mousson</td>
									<td>ريح موسمية</td>
								</tr>
								<tr>
									<td>Nightfall</td>
									<td>tombée de la nuit</td>
									<td>حلول الظلام</td>
								</tr>
								<tr>
									<td>Overcast</td>
									<td>couvert</td>
									<td>ملبد بالغيوم</td>
								</tr>
								<tr>
									<td>Ozone</td>
									<td>ozone</td>
									<td>الأوزون</td>
								</tr>
								<tr>
									<td>Patch of fog</td>
									<td>nappe de brouillard</td>
									<td>رقعة الضباب</td>
								</tr>
								<tr>
									<td>Rain</td>
									<td>pluie</td>
									<td>مطر</td>
								</tr>
								<tr>
									<td>Rainbow</td>
									<td>arc-en-ciel</td>
									<td>قوس قزح</td>
								</tr>
								<tr>
									<td>Raindrop</td>
									<td>goutte de pluie</td>
									<td>قطرة مطر</td>
								</tr>
								<tr>
									<td>Rainy</td>
									<td>pluvieux</td>
									<td>ماطر</td>
								</tr>
								<tr>
									<td>Rainy season</td>
									<td>saisin des pluies</td>
									<td>موسم الأمطار</td>
								</tr>
								<tr>
									<td>Sandstorm</td>
									<td>tempête de sable</td>
									<td>عاصفة رملية</td>
								</tr>
								<tr>
									<td>Season</td>
									<td>saison</td>
									<td>فصل</td>
								</tr>
								<tr>
									<td>Sky</td>
									<td>ciel</td>
									<td>سماء</td>
								</tr>
								<tr>
									<td>Sleet</td>
									<td>neige fondue</td>
									<td>مطر متجمد</td>
								</tr>
								<tr>
									<td>Smog</td>
									<td>smog</td>
									<td>ضباب ودخان</td>
								</tr>
								<tr>
									<td>Snow</td>
									<td>neige</td>
									<td>ثلج</td>
								</tr>
								<tr>
									<td>Snowfall</td>
									<td>chutes de neiges</td>
									<td>تساقط الثلوج</td>
								</tr>
								<tr>
									<td>Snowflake</td>
									<td>flocon de neige</td>
									<td>ندفة الثلج</td>
								</tr>
								<tr>
									<td>Snowstorm</td>
									<td>tempête de neige</td>
									<td>العاصفة الثلجية</td>
								</tr>
								<tr>
									<td>Snowy</td>
									<td>enneigé , neigeux</td>
									<td>مثلج</td>
								</tr>
								<tr>
									<td>Soft rain</td>
									<td>pluie légère</td>
									<td>المطر الناعم</td>
								</tr>
								<tr>
									<td>Solar eclipse</td>
									<td>éclipse solaire</td>
									<td>كسوف الشمس</td>
								</tr>
								<tr>
									<td>Squall/gust </td>
									<td>bourrasque</td>
									<td>عاصفة مفاجئة</td>
								</tr>
								<tr>
									<td>Stormy</td>
									<td>orageux</td>
									<td>متلاطم الأمواج</td>
								</tr>
								<tr>
									<td>Sun</td>
									<td>soleil</td>
									<td>شمس</td>
								</tr>
								<tr>
									<td>Sun ray</td>
									<td>rayon de soleil</td>
									<td>أشعة الشمس</td>
								</tr>
								<tr>
									<td>Sunburn</td>
									<td>coup de soleil</td>
									<td>ضربة شمس</td>
								</tr>
								<tr>
									<td>Sunlight, sunshine</td>
									<td>lumière de soleil</td>
									<td>ضوء الشمس</td>
								</tr>
								<tr>
									<td>Sunny</td>
									<td>ensoleillé</td>
									<td>مشمس</td>
								</tr>
								<tr>
									<td>Sunrise</td>
									<td>lever du soleil/l'aube</td>
									<td>شروق الشمس</td>
								</tr>
								<tr>
									<td>Sunset</td>
									<td>coucher du soleil</td>
									<td>غروب الشمس</td>
								</tr>
								<tr>
									<td>Temperature</td>
									<td>température</td>
									<td>درجة الحرارة</td>
								</tr>
								<tr>
									<td>Thermometer</td>
									<td>thermomètre</td>
									<td>ميزان الحرارة</td>
								</tr>
								<tr>
									<td>Thunder</td>
									<td>tonnerre</td>
									<td>رعد</td>
								</tr>
								<tr>
									<td>Tornado</td>
									<td>tornade</td>
									<td>إعصار</td>
								</tr>
								<tr>
									<td>Torrential rain</td>
									<td>pluie torrentielle</td>
									<td>الامطار الغزيرة</td>
								</tr>
								<tr>
									<td>Tropical rain</td>
									<td>pluie tropicale</td>
									<td>الأمطار الاستوائية</td>
								</tr>
								<tr>
									<td>Tsunami</td>
									<td>tsunami</td>
									<td>تسونامي</td>
								</tr>
								<tr>
									<td>Twilight/dusk</td>
									<td>crépuscule</td>
									<td>الغسق</td>
								</tr>
								<tr>
									<td>Typhon</td>
									<td>typhon</td>
									<td>تيفون</td>
								</tr>
								<tr>
									<td>Visibility</td>
									<td>visibilité</td>
									<td>رؤية</td>
								</tr>
								<tr>
									<td>Warning</td>
									<td>avertissement</td>
									<td>تحذير</td>
								</tr>
								<tr>
									<td>Weather forecast</td>
									<td> prévisions météorologiques</td>
									<td>النشرة الجوية</td>
								</tr>
								<tr>
									<td>Wind</td>
									<td>vent</td>
									<td>ريح</td>
								</tr>
								<tr>
									<td>Windstorm</td>
									<td>tempête</td>
									<td>عاصفة</td>
								</tr>
								<tr>
									<td>Windy</td>
									<td>venteux</td>
									<td>عاصف</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/catastrophelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Catastrophes naturelles<?php endif; if($langue === 'english'): ?>Natural disasters<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="catastrophe.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		