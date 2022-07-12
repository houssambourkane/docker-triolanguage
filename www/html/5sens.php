<?php
		$titrefr = "LES 5 SENS";
		$titreang = "THE 5 SENSES";
		$bg = "./assets/img/bgtheme/5sensbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Les 5 sens<?php endif; if($langue === 'english'): ?>The 5 senses<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des 5 sens en Anglais - Français - Arabe">
		<meta name="keywords" content="senses, sens, 5, odorat, toucher, goût, taste, touch, l'ouïe, vue, sight, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Les 5 sens<?php endif; if($langue === 'english'): ?> The 5 senses<?php endif; ?></h1>

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
								<td class="soustitre">Sight</td>
								<td class="soustitre">La vue</td>
								<td class="soustitre">البصر  </td>
							</tr>
							<tr>
								<td>Astigmatism</td>
								<td>astigmatisme</td>
								<td>اللانقطية</td>
							</tr>
							<tr>
								<td>Binoculars</td>
								<td>jumelles</td>
								<td>نضار/ رؤية ثنائية</td>
							</tr>
							<tr>
								<td>Blind person</td>
								<td>personne aveugle</td>
								<td>شخص أعمى</td>
							</tr>
							<tr>
								<td>Braille</td>
								<td>braille</td>
								<td>بريل</td>
							</tr>
							<tr>
								<td>Bright</td>
								<td>brillant</td>
								<td>مشرق</td>
							</tr>
							<tr>
								<td>Brightness</td>
								<td>luminosité</td>
								<td>سطوع</td>
							</tr>
							<tr>
								<td>Colorblind</td>
								<td>daltonien</td>
								<td>عمى الالوان</td>
							</tr>
							<tr>
								<td>Cornea</td>
								<td>cornée</td>
								<td>قرنية</td>
							</tr>
							<tr>
								<td>Darkness</td>
								<td>obscurité</td>
								<td>ظلام</td>
							</tr>
							<tr>
								<td>Dazzling</td>
								<td>éblouissant</td>
								<td>باهر</td>
							</tr>
							<tr>
								<td>Eye exam</td>
								<td>examen de la vue</td>
								<td>فحص عين</td>
							</tr>
							<tr>
								<td>Eyes</td>
								<td>yeux</td>
								<td>عيون</td>
							</tr>
							<tr>
								<td>Eye's color</td>
								<td>couleur de l'œil</td>
								<td>لون العيون</td>
							</tr>
							<tr>
								<td>Glance</td>
								<td>coup d'œil</td>
								<td>لمحة</td>
							</tr>
							<tr>
								<td>Glasses</td>
								<td>lunettes</td>
								<td>نظارات</td>
							</tr>
							<tr>
								<td>Light</td>
								<td>lumière</td>
								<td>ضوء</td>
							</tr>
							<tr>
								<td>Look</td>
								<td>regard</td>
								<td>نظرة</td>
							</tr>
							<tr>
								<td>Magnifying glass</td>
								<td>loupe</td>
								<td>عدسة مكبرة</td>
							</tr>
							<tr>
								<td>Microscope</td>
								<td>microscope</td>
								<td>مجهر</td>
							</tr>
							<tr>
								<td>Nearsighted</td>
								<td>myope</td>
								<td>حسير البصر</td>
							</tr>
							<tr>
								<td>Night vision</td>
								<td>vision nocturne</td>
								<td>رؤية ليلية</td>
							</tr>
							<tr>
								<td>Panorama</td>
								<td>panorama</td>
								<td>بانوراما</td>
							</tr>
							<tr>
								<td>Polarized sunglasses</td>
								<td>lunettes de soleil polarisées</td>
								<td>النظارات الشمسية المستقطبة</td>
							</tr>
							<tr>
								<td>Pupil</td>
								<td>pupille</td>
								<td>بؤبؤ العين</td>
							</tr>
							<tr>
								<td>Retina</td>
								<td>rétine</td>
								<td>شبكية العين</td>
							</tr>
							<tr>
								<td>Sunglasses</td>
								<td>lunettes de soleil</td>
								<td>نظارة شمسية</td>
							</tr>
							<tr>
								<td>Telescope</td>
								<td>télescope</td>
								<td>تلسكوب</td>
							</tr>
							<tr>
								<td>Vision</td>
								<td>vision</td>
								<td>رؤية</td>
							</tr>

							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To blink</td>
								<td>cligner des yeux</td>
								<td>يرمش</td>
							</tr>
							<tr>
								<td>To contemplate</td>
								<td>Contempler</td>
								<td>يتأمل</td>
							</tr>
							<tr>
								<td>To examine</td>
								<td>examiner</td>
								<td>فحص</td>
							</tr>
							<tr>
								<td>To squint</td>
								<td>loucher</td>
								<td>الحول</td>
							</tr>
							<tr>
								<td>To wink</td>
								<td>loucher</td>
								<td>الحول</td>
							</tr>
							<tr>
								<td>To wink</td>
								<td>faire un clin d'œil</td>
								<td>يغمز</td>
							</tr>
							<tr>
								<td class="soustitre">Hearing</td>
								<td class="soustitre">L'ouïe</td>
								<td class="soustitre">السمع</td>
							</tr>
							<tr>
								<td>Acute hearing</td>
								<td>audition aiguë</td>
								<td>السمع الحاد</td>
							</tr>
							<tr>
								<td>Audible</td>
								<td>audible</td>
								<td>مسموع</td>
							</tr>
							<tr>
								<td>Buzzing</td>
								<td>bourdonnement</td>
								<td>الأز</td>
							</tr>
							<tr>
								<td>Crackling</td>
								<td>crépitement</td>
								<td>طقطقة</td>
							</tr>
							<tr>
								<td>Creaking</td>
								<td>grincement</td>
								<td>صرير</td>
							</tr>
							<tr>
								<td>Deaf</td>
								<td>sourd</td>
								<td>Deaf</td>
							</tr>
							<tr>
								<td>Deafening</td>
								<td>assourdissant</td>
								<td>أصم</td>
							</tr>
							<tr>
								<td>Earplugs</td>
								<td>bouchons d'oreille</td>
								<td>سدادات الأذن</td>
							</tr>
							<tr>
								<td>Ears</td>
								<td>oreilles</td>
								<td>آذان</td>
							</tr>
							<tr>
								<td>Echo</td>
								<td>écho</td>
								<td>صدى</td>
							</tr>
							<tr>
								<td>Headphones</td>
								<td>casque</td>
								<td>سماعات الرأس</td>
							</tr>
							<tr>
								<td>Intercom</td>
								<td>interphone</td>
								<td>الاتصال الداخلي</td>
							</tr>
							<tr>
								<td>Loud, noisy</td>
								<td>bruyant</td>
								<td>بصوت عال</td>
							</tr>
							<tr>
								<td>Loudspeaker</td>
								<td>haut-parleur</td>
								<td>مكبر الصوت</td>
							</tr>
							<tr>
								<td>Low</td>
								<td>faible</td>
								<td>منخفض</td>
							</tr>
							<tr>
								<td>Melodious</td>
								<td>mélodieux</td>
								<td>رخيم</td>
							</tr>
							<tr>
								<td>Noise</td>
								<td>bruit</td>
								<td>ضجيج</td>
							</tr>
							<tr>
								<td>Ringing</td>
								<td>sonnerie</td>
								<td>رنين</td>
							</tr>
							<tr>
								<td>Sharp</td>
								<td>pointu</td>
								<td>حاد</td>
							</tr>
							<tr>
								<td>Silence</td>
								<td>silence</td>
								<td>الصمت</td>
							</tr>
							<tr>
								<td>Song</td>
								<td>chanson</td>
								<td>أغنية</td>
							</tr>
							<tr>
								<td>Sound</td>
								<td>son</td>
								<td>صوت</td>
							</tr>
							<tr>
								<td>Sound barrier</td>
								<td>mur du son</td>
								<td>حاجز الصوت</td>
							</tr>
							<tr>
								<td>Voice</td>
								<td>voix</td>
								<td>صوت</td>
							</tr>
							<tr>
								<td>Whisper</td>
								<td>murmure, chuchottement</td>
								<td>همسة</td>
							</tr>
							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To hear</td>
								<td>entendre</td>
								<td>سمع</td>
							</tr>
							<tr>
								<td>To hum</td>
								<td>fredonner</td>
								<td>همهمة</td>
							</tr>
							<tr>
								<td>To listen</td>
								<td>écouter</td>
								<td>استماع</td>
							</tr>
							<tr>
								<td>To sing</td>
								<td>chanter</td>
								<td>يغني</td>
							</tr>
							<tr>
								<td>To snore</td>
								<td>ronfler</td>
								<td>خرخر</td>
							</tr>
							<tr>
								<td>To whisper</td>
								<td>chuchoter</td>
								<td>همس</td>
							</tr>
							<tr>
								<td>To whistle</td>
								<td>siffler</td>
								<td>صفر</td>
							</tr>

							<tr>
								<td class="soustitre">Touch</td>
								<td class="soustitre">Le toucher</td>
								<td class="soustitre">اللمس</td>
							</tr>
							<tr>
								<td>Cold</td>
								<td>froid</td>
								<td>بارد</td>
							</tr>
							<tr>
								<td>Fingers</td>
								<td>doigts</td>
								<td>الأصابع</td>
							</tr>
							<tr>
								<td>Fluffy</td>
								<td>duveteux</td>
								<td>زغبي</td>
							</tr>
							<tr>
								<td>Handshake</td>
								<td>serrement de main</td>
								<td>مصافحة</td>
							</tr>
							<tr>
								<td>Hard</td>
								<td>dur</td>
								<td>صلب</td>
							</tr>
							<tr>
								<td>Hot</td>
								<td>chaud</td>
								<td>حار</td>
							</tr>
							<tr>
								<td>Numbness</td>
								<td>Engourdissement</td>
								<td>خدر</td>
							</tr>
							<tr>
								<td>Rough</td>
								<td>dur</td>
								<td>خشن</td>
							</tr>
							<tr>
								<td>Silky</td>
								<td>soyeux</td>
								<td>حريري</td>
							</tr>
							<tr>
								<td>Skin</td>
								<td>peau</td>
								<td>بشرة</td>
							</tr>
							<tr>
								<td>Smooth</td>
								<td>lisse</td>
								<td>أملس</td>
							</tr>
							<tr>
								<td>Soft</td>
								<td>doux</td>
								<td>ناعم</td>
							</tr>

							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To caress</td>
								<td>caresser</td>
								<td>مداعبة</td>
							</tr>
							<tr>
								<td>To hit</td>
								<td>frapper</td>
								<td>ضرب</td>
							</tr>
							<tr>
								<td>To rub</td>
								<td>frotter</td>
								<td>فرك</td>
							</tr>
							<tr>
								<td>To scratch</td>
								<td>gratter</td>
								<td>خدش</td>
							</tr>
							<tr>
								<td>To tickle</td>
								<td>chatouiller</td>
								<td>دغدغة</td>
							</tr>
							<tr>
								<td>To touch</td>
								<td>toucher</td>
								<td>لمس</td>
							</tr>

							<tr>
								<td class="soustitre">Taste</td>
								<td class="soustitre">Le goût</td>
								<td class="soustitre">الذوق</td>
							</tr>
							<tr>
								<td>Appetite</td>
								<td>appétit</td>
								<td>شهية</td>
							</tr>
							<tr>
								<td>Bitter</td>
								<td>amer</td>
								<td>مر</td>
							</tr>
							<tr>
								<td>Delicious</td>
								<td>délicieux</td>
								<td>لذيذ</td>
							</tr>
							<tr>
								<td>Disgusting</td>
								<td>répugnant</td>
								<td>مقزز</td>
							</tr>
							<tr>
								<td>Flavor</td>
								<td>Saveur</td>
								<td>نكهة</td>
							</tr>
							<tr>
								<td>Lip</td>
								<td>lèvre</td>
								<td>شفة</td>
							</tr>
							<tr>
								<td>Mouth</td>
								<td>bouche</td>
								<td>فم</td>
							</tr>
							<tr>
								<td>Saliva</td>
								<td>salive</td>
								<td>لعاب</td>
							</tr>
							<tr>
								<td>Salty</td>
								<td>salé</td>
								<td>مالح</td>
							</tr>
							<tr>
								<td>Sour</td>
								<td>acide</td>
								<td>حامض</td>
							</tr>
							<tr>
								<td>Spicy</td>
								<td>épicé</td>
								<td>حار</td>
							</tr>
							<tr>
								<td>Sweet</td>
								<td>doux</td>
								<td>حلو</td>
							</tr>
							<tr>
								<td>Taste buds</td>
								<td>papilles</td>
								<td>براعم الذوق</td>
							</tr>
							<tr>
								<td>Tasteless</td>
								<td>insipide</td>
								<td>عديم الذوق</td>
							</tr>
							<tr>
								<td>Tongue</td>
								<td>langue</td>
								<td>لسان</td>
							</tr>
							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To chew</td>
								<td>mâcher</td>
								<td>مضغ</td>
							</tr>
							<tr>
								<td>To drink</td>
								<td>boire</td>
								<td>شرب</td>
							</tr>
							<tr>
								<td>To eat</td>
								<td>manger</td>
								<td>أكل</td>
							</tr>
							<tr>
								<td>To lick</td>
								<td>lécher</td>
								<td>لعق</td>
							</tr>
							<tr>
								<td>To savour</td>
								<td>savourer</td>
								<td>يتلذذ</td>
							</tr>
							<tr>
								<td>To swallow</td>
								<td>avaler</td>
								<td>ابتلاع</td>
							</tr>
							<tr>
								<td>To taste</td>
								<td>goûter</td>
								<td>تذوق</td>
							</tr>
							<tr>
								<td class="soustitre">Smell</td>
								<td class="soustitre">l'odorat</td>
								<td class="soustitre">الرائحة</td>
							</tr>
							<tr>
								<td>Aroma</td>
								<td>arôme</td>
								<td>نكهة</td>
							</tr>
							<tr>
								<td>Nose</td>
								<td>nez</td>
								<td>أنف</td>
							</tr>
							<tr>
								<td>Nostrils</td>
								<td>narines</td>
								<td>منخر</td>
							</tr>
							<tr>
								<td>Odorless</td>
								<td>inodore</td>
								<td>عديم الرائحة</td>
							</tr>
							<tr>
								<td>perfume</td>
								<td>parfum</td>
								<td>عطر</td>
							</tr>
							<tr>
								<td>Scent, smell, odour</td>
								<td>odeur</td>
								<td>رائحة</td>
							</tr>
							<tr>
								<td>Scented</td>
								<td>parfumé</td>
								<td>معطر</td>
							</tr>
							<tr>
								<td>sense of smell</td>
								<td>Odorat</td>
								<td>الشم</td>
							</tr>
							<tr>
								<td>Smoke</td>
								<td>fumée</td>
								<td>دخان</td>
							</tr>
							<tr>
								<td>Stench</td>
								<td>puanteur</td>
								<td>نتن</td>
							</tr>
							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To smell</td>
								<td>sentir</td>
								<td>يشم</td>
							</tr>
							<tr>
								<td>To sniff</td>
								<td>renifler</td>
								<td>شم</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/anatomielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Anatomie<?php endif; if($langue === 'english'): ?>Anatomy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="anatomie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/chimielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 style="text-transform: capitalize;" class="card-title"><?php if($langue === 'french'): ?>éléments chimiques et autres matières<?php endif; if($langue === 'english'): ?>Chemical elements and other matters<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="elementschimiques.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
