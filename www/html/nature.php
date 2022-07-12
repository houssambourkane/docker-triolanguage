<?php
		$titrefr = "NATURE";
		$titreang = "NATURE";
		$bg = "./assets/img/bgtheme/naturebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Nature<?php endif; if($langue === 'english'): ?>Nature<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de nature en Anglais - Français - Arabe">
		<meta name="keywords" content="nature, naturel, verdure, vie, terre, monde, earth, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Nature<?php endif; if($langue === 'english'): ?>Nature<?php endif; ?></h1>

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
									<td>Acorn</td>
									<td>gland</td>
									<td>البلوط</td>
								</tr>
								<tr>
									<td>Animals</td>
									<td>animaux</td>
									<td>الحيوانات</td>
								</tr>
								<tr>
									<td>Bark</td>
									<td>écorce</td>
									<td>لحاء الشجر</td>
								</tr>
								<tr>
									<td>Beach</td>
									<td>plage</td>
									<td>شاطئ</td>
								</tr>
								<tr>
									<td>Blade of grass</td>
									<td>brin d'herbe</td>
									<td>شفرة العشب</td>
								</tr>
								<tr>
									<td>Branch</td>
									<td>branche</td>
									<td>غصن</td>
								</tr>
								<tr>
									<td>Bush</td>
									<td>buisson</td>
									<td>شجيرة</td>
								</tr>
								<tr>
									<td>Canopy</td>
									<td>canopée</td>
									<td>ظلة</td>
								</tr>
								<tr>
									<td>Canyon</td>
									<td>canyon</td>
									<td>واد ضيق</td>
								</tr>
								
								<tr>
									<td>Cave</td>
									<td>grotte</td>
									<td>كهف</td>
								</tr>
								<tr>
									<td>Cliff</td>
									<td>falaise</td>
									<td>جرف</td>
								</tr>
								<tr>
									<td>Cloud</td>
									<td>nuage</td>
									<td>سحابة</td>
								</tr>
								<tr>
									<td>Coast</td>
									<td>côte</td>
									<td>ساحل</td>
								</tr>
								<tr>
									<td>Desert</td>
									<td>désert</td>
									<td>صحراء</td>
								</tr>
								<tr>
									<td>Downpour</td>
									<td>pluie diluvienne</td>
									<td>الامطار الغزيرة</td>
								</tr>
								<tr>
									<td>Drought</td>
									<td>sécheresse</td>
									<td>جفاف</td>
								</tr>
								<tr>
									<td>Earth</td>
									<td>terre</td>
									<td>أرض</td>
								</tr>
								<tr>
									<td>Ecosystem</td>
									<td>écosystème</td>
									<td>النظام البيئي</td>
								</tr>
								<tr>
									<td>Estuary</td>
									<td>estuaire</td>
									<td>مصب النهر</td>
								</tr>
								<tr>
									<td>Fern</td>
									<td>fougère</td>
									<td>الختشار سرخس</td>
								</tr>
								<tr>
									<td>Field</td>
									<td>champ</td>
									<td>حقل</td>
								</tr>
								<tr>
									<td>Fir tree</td>
									<td>sapin</td>
									<td>شجرة التنوب</td>
								</tr>
								<tr>
									<td>Flood</td>
									<td>inondation</td>
									<td>فيضان</td>
								</tr>
								<tr>
									<td>Flowers</td>
									<td>fleurs</td>
									<td>الزهور</td>
								</tr>
								<tr>
									<td>Fog</td>
									<td>brouillard</td>
									<td>ضباب</td>
								</tr>
								<tr>
									<td>Foliage</td>
									<td>feuillage</td>
									<td>أوراق الشجر</td>
								</tr>
								<tr>
									<td>Food chain</td>
									<td>chaîne alimentaire</td>
									<td>سلسلة غذائية</td>
								</tr>
								<tr>
									<td>Forest</td>
									<td>forêt</td>
									<td>غابة</td>
								</tr>
								
								<tr>
									<td>Geyser</td>
									<td>geyser</td>
									<td>نبع ماء حار</td>
								</tr>
								<tr>
									<td>Glacier</td>
									<td>glacier</td>
									<td>مجلدة</td>
								</tr>
								<tr>
									<td>Grass</td>
									<td>herbe</td>
									<td>عشب</td>
								</tr>
								<tr>
									<td>Ground</td>
									<td>sol</td>
									<td>أرض</td>
								</tr>
								<tr>
									<td>Grove</td>
									<td>bosquet</td>
									<td>بستان</td>
								</tr>
								<tr>
									<td>Hail</td>
									<td>grêle</td>
									<td>البرد</td>
								</tr>
								<tr>
									<td>Heat</td>
									<td>chaleur</td>
									<td>الحرارة</td>
								</tr>
								<tr>
									<td>Hill</td>
									<td>colline</td>
									<td>تل</td>
								</tr>
								<tr>
									<td>Hurricane</td>
									<td>cyclone</td>
									<td>إعصار مداري</td>
								</tr>
								<tr>
									<td>Jungle</td>
									<td>jungle</td>
									<td>أدغال</td>
								</tr>
								<tr>
									<td>Lake</td>
									<td>lac</td>
									<td>بحيرة</td>
								</tr>

								<tr>
									<td>Land</td>
									<td>terrain</td>
									<td>أرض</td>
								</tr>
								<tr>
									<td>Leaf</td>
									<td>feuille</td>
									<td>ورقة</td>
								</tr>
								<tr>
									<td>Lightning</td>
									<td>éclair</td>
									<td>صاعقة</td>
								</tr>
								<tr>
									<td>Maple</td>
									<td>érable</td>
									<td>شجرة القيقب</td>
								</tr>
								<tr>
									<td>Monsoon</td>
									<td>mousson</td>
									<td>ريح موسمية</td>
								</tr>
								
								<tr>
									<td>Moon</td>
									<td>lune</td>
									<td>قمر</td>
								</tr>
								<tr>
									<td>Mountain</td>
									<td>montagne</td>
									<td>جبل</td>
								</tr>
								<tr>
									<td>Mud</td>
									<td>boue</td>
									<td>طين</td>
								</tr>
								<tr>
									<td>Mushroom</td>
									<td>champignon</td>
									<td>فطر</td>
								</tr>
								<tr>
									<td>Ocean</td>
									<td>océan</td>
									<td>المحيط</td>
								</tr>
								<tr>
									<td>Pine cone</td>
									<td>pomme de pin</td>
									<td>مخروط الصنوبر</td>
								</tr>
								<tr>
									<td>Pine tree</td>
									<td>pin</td>
									<td>شجرة الصنوبر</td>
								</tr>
								<tr>
									<td>Polar</td>
									<td>polaire</td>
									<td>قطبي</td>
								</tr>
								<tr>
									<td>Pond</td>
									<td>étang</td>
									<td>بركة ماء</td>
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
									<td>Redwood</td>
									<td>séquoia</td>
									<td>الخشب الأحمر</td>
								</tr>
								<tr>
									<td>River</td>
									<td>rivière</td>
									<td>نهر</td>
								</tr>
								<tr>
									<td>Rock</td>
									<td>rocher</td>
									<td>صخرة</td>
								</tr>
								<tr>
									<td>Root</td>
									<td>racine</td>
									<td>جذر</td>
								</tr>
								<tr>
									<td>Sand</td>
									<td>sable</td>
									<td>رمل</td>
								</tr>
								<tr>
									<td>Sap</td>
									<td>sève</td>
									<td>عصارة النبات</td>	
								</tr>
								<tr>
									<td>Savannah</td>
									<td>savane</td>
									<td>السافانا</td>
								</tr>
								<tr>
									<td>Sea</td>
									<td>mer</td>
									<td>بحر</td>
								</tr>
								<tr>
									<td>Shore</td>
									<td>rivage</td>
									<td>ساحل</td>
								</tr>
								<tr>
									<td>Sky</td>
									<td>ciel</td>
									<td>سماء</td>
								</tr>
								<tr>
									<td>Snow</td>
									<td>neige</td>
									<td>ثلج</td>
								</tr>
								<tr>
									<td>Snowflake</td>
									<td>flocon de neige</td>
									<td>ندفة الثلج</td>
								</tr>
								<tr>
									<td>Soil</td>
									<td>terre</td>
									<td>أرض</td>
								</tr>
								<tr>
									<td>Star</td>
									<td>étoile</td>
									<td>نجمة</td>
								</tr>
								<tr>
									<td>Stone</td>
									<td>pierre</td>
									<td>حجر</td>
								</tr>
								<tr>
									<td>Storm</td>
									<td>tempête</td>
									<td>عاصفة</td>
								</tr>
								<tr>
									<td>Stream</td>
									<td>ruisseau</td>
									<td>تيار</td>
								</tr>
								<tr>
									<td>Stump</td>
									<td>souche</td>
									<td>جدعة الشجرة</td>
								</tr>
								<tr>
									<td>Sun</td>
									<td>soleil</td>
									<td>شمس</td>
								</tr>
								<tr>
									<td>Sunrise</td>
									<td>lever du soleil</td>
									<td>شروق الشمس</td>
								</tr>
								<tr>
									<td>Sunset</td>
									<td>coucher du soleil</td>
									<td>غروب الشمس</td>
								</tr>
								<tr>
									<td>Swamp/marsh</td>
									<td>marais/marécage</td>
									<td>مستنقع</td>
								</tr>
								<tr>
									<td>Temperature</td>
									<td>température</td>
									<td>درجة الحرارة</td>
								</tr>
								<tr>
									<td>Tornado</td>
									<td>tornade</td>
									<td>زوبعة</td>
								</tr>
								<tr>
									<td>Volcano</td>
									<td>volcan</td>
									<td>بركان</td>
								</tr>
								<tr>
									<td>Waterfall</td>
									<td>cascade/chute d'eau</td>
									<td>شلال</td>
								</tr>
								<tr>
									<td>Wave</td>
									<td>vague</td>
									<td>موجة</td>
								</tr>
								<tr>
									<td>Weather</td>
									<td>météo</td>
									<td>حالة الطقس</td>
								</tr>
								<tr>
									<td>Wind</td>
									<td>vent</td>
									<td>رياح</td>
								</tr>
								<tr>
									<td>Wood</td>
									<td>bois</td>
									<td>خشب</td>
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
							  <img src="./assets/img/logotheme/agriculturelogo2.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Agriculture<?php endif; if($langue === 'english'): ?>Agriculture<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="agriculture.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		