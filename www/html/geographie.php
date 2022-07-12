<?php
		$titrefr = "GEOGRAPHIE";
		$titreang = "GEOGRAPHY";
		$bg = "./assets/img/bgtheme/geographiebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de géographie en Anglais - Français - Arabe">
		<meta name="keywords" content="emplacement, location, situation, mer, ocean, plage, méditérannée, lac, oriental, occidental, sud, nord, ouest, est, west, south, north, direction, geography, géographie, coordonné, géographique, GPS, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></h1>

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
									<td class="soustitre">Regions of the world</td>
									<td class="soustitre">Régions du monde</td>
									<td class="soustitre">مناطق العالم</td>
								</tr>
								<tr>
									<td>Basque country</td>
									<td>le pays basque</td>
									<td>بلد الباسك</td>
								</tr>
								<tr>
									<td>Brittany</td>
									<td>bretagne</td>
									<td>بريتاني</td>
								</tr>
								<tr>
									<td>Central europe</td>
									<td>europe centrale</td>
									<td>وروبا الوسطى</td>
								</tr>
								<tr>
									<td>Cornwall</td>
									<td>cornouailles</td>
									<td>كورنوال</td>
								</tr>
								<tr>
									<td>Corsica</td>
									<td>corse</td>
									<td>كورسيكا</td>
								</tr>
								<tr>
									<td>East</td>
									<td>orient</td>
									<td>الشرق</td>
								</tr>
								<tr>
									<td>Eastern europe</td>
									<td>europe de l'est</td>
									<td>أوروبا الغربية</td>
								</tr>
								<tr>
									<td>Far east</td>
									<td>Extrême-Orient</td>
									<td>الشرق الأقصى</td>
								</tr>
								<tr>
									<td>French riviera</td>
									<td>côte d'azur</td>
									<td>ريفيرا الفرنسية</td>
								</tr>
								<tr>
									<td>Lake district</td>
									<td>région des lacs</td>
									<td>منطقة البحيرة</td>
								</tr>
								<tr>
									<td>Middle east</td>
									<td>moyen-orient</td>
									<td>الشرق الأوسط</td>
								</tr>
								<tr>
									<td>Normandy</td>
									<td>normandie</td>
									<td>نورماندي</td>
								</tr>
								<tr>
									<td>The Alps</td>
									<td>les alpes</td>
									<td>جبال الألب</td>
								</tr>
								<tr>
									<td>West</td>
									<td>occident</td>
									<td>غرب</td>
								</tr>


								<tr>
									<td class="soustitre">American states</td>
									<td class="soustitre">états américains</td>
									<td class="soustitre">الولايات الأمريكية</td>
								</tr>
								<tr>
									<td>California</td>
									<td>californie</td>
									<td>كاليفورنيا</td>
								</tr>
								<tr>
									<td>Florida</td>
									<td>floride</td>
									<td>فلوريدا</td>
								</tr>
								<tr>
									<td>Georgia</td>
									<td>géorgie</td>
									<td>جورجيا</td>
								</tr>
								<tr>
									<td>Hawaii</td>
									<td>hawaï</td>
									<td>هاواي</td>
								</tr>
								<tr>
									<td>Louisiana</td>
									<td>louisiane</td>
									<td>لويزيانا</td>
								</tr>
								<tr>
									<td>New mexico</td>
									<td>nouveau-Mexique</td>
									<td>المكسيك جديدة</td>
								</tr>
								<tr>
									<td>New York</td>
									<td>New York</td>
									<td>نيويورك</td>
								</tr>
								<tr>
									<td>North carolina</td>
									<td>caroline du nord</td>
									<td>شمال كارولينا</td>
								</tr>
								<tr>
									<td>North dakota</td>
									<td>dakota du nord</td>
									<td>شمال داكوتا</td>
								</tr>
								<tr>
									<td>Virginia</td>
									<td>virginie</td>
									<td>فرجينيا</td>
								</tr>
								<tr>
									<td>Washington</td>
									<td>washington</td>
									<td>واشنطن</td>
								</tr>
								<tr>
									<td>West virginia</td>
									<td>virginie-occidentale</td>
									<td>فرجينيا الغربية</td>
								</tr>

								<tr>
									<td class="soustitre">The islands</td>
									<td class="soustitre">Les îles</td>
									<td class="soustitre">الجزر</td>
								</tr>
								<tr>
									<td>azores</td>
									<td>açores</td>
									<td>الأزور</td>
								</tr>
								<tr>
									<td>Balearic islands</td>
									<td>Îles Baléares</td>
									<td>جزر البليار</td>
								</tr>
								<tr>
									<td>Barbados</td>
									<td>barbade</td>
									<td>بربادوس</td>
								</tr>
								<tr>
									<td>Bermuda</td>
									<td>bermudes</td>
									<td>برمودا</td>
								</tr>
								<tr>
									<td>Canary islands</td>
									<td>îles canaries</td>
									<td>جزر الكناري</td>
								</tr>
								<tr>
									<td>Cayman islands</td>
									<td>îles caïman</td>
									<td>جزر كايمان</td>
								</tr>
								<tr>
									<td>Corfu</td>
									<td>corfou</td>
									<td>كورفو</td>
								</tr>
								<tr>
									<td>Crete</td>
									<td>crète</td>
									<td>كريت</td>
								</tr>
								<tr>
									<td>Cyprus</td>
									<td>chypre</td>
									<td>قبرص</td>
								</tr>
								<tr>
									<td>Faroe islands</td>
									<td>îles féroé</td>
									<td>جزر صناعية</td>
								</tr>
								<tr>
									<td>Fiji</td>
									<td>Fidji</td>
									<td>فيجي</td>
								</tr>
								<tr>
									<td>Jamaica</td>
									<td>jamaïque</td>
									<td>جامايكا</td>
								</tr>
								<tr>
									<td>Madeira</td>
									<td>madère</td>
									<td>الماديرا</td>
								</tr>
								<tr>
									<td>Mauritius</td>
									<td>maurice</td>
									<td>موريشيوس</td>
								</tr>
								<tr>
									<td>New caledonia</td>
									<td>nouvelle calédonie</td>
									<td>اليدونيا الجديدة</td>
								</tr>
								<tr>
									<td>Polynesia</td>
									<td>polynésie</td>
									<td>بولينيزيا</td>
								</tr>
								<tr>
									<td>Puerto rico</td>
									<td>porto rico</td>
									<td>بورتوريكو</td>
								</tr>
								<tr>
									<td>Sardinia</td>
									<td>sardaigne</td>
									<td>سردينيا</td>
								</tr>
								<tr>
									<td>Sicily</td>
									<td>sicile</td>
									<td>صقلية</td>
								</tr>
								<tr>
									<td>St lucia</td>
									<td>sainte lucia</td>
									<td>لوسيا المقدسة</td>
								</tr>
								<tr>
									<td>Trinidad</td>
									<td>trinidad</td>
									<td>ترينيداد</td>
								</tr>
								<tr>
									<td>West indies</td>
									<td>antilles</td>
									<td>جزر الهند الغربية</td>
								</tr>

								<tr>
									<td class="soustitre">the oceans</td>
									<td class="soustitre">Les océans</td>
									<td class="soustitre">المحيطات</td>
								</tr>
								<tr>
									<td>Antarctic ocean</td>
									<td>Océan antarctique</td>
									<td>المحيط المتجمد الجنوبي</td>
								</tr>
								<tr>
									<td>Arctic ocean</td>
									<td>océan arctique</td>
									<td>المحيط المتجمد الشمالي</td>
								</tr>
								<tr>
									<td>Atlantic ocean</td>
									<td>océan atlantique</td>
									<td>المحيط الأطلسي</td>
								</tr>
								<tr>
									<td>Indian ocean</td>
									<td>océan indien</td>
									<td>المحيط الهندي</td>
								</tr>
								<tr>
									<td>Pacific ocean</td>
									<td>océan pacifique</td>
									<td>المحيط الهادي</td>
								</tr>

								<tr>
									<td class="soustitre">The seas</td>
									<td class="soustitre">Les mers</td>
									<td class="soustitre">البحار</td>
								</tr>
								<tr>
									<td>Adriatic sea</td>
									<td>mer adriatique</td>
									<td>لبحر الأدرياتيكي</td>
								</tr>
								<tr>
									<td>Baltic sea</td>
									<td>mer baltique</td>
									<td>بحر البلطيق</td>
								</tr>
								<tr>
									<td>Black sea</td>
									<td>mer noire</td>
									<td>البحر الاسود</td>
								</tr>
								<tr>
									<td>Caspian sea</td>
									<td>mer caspienne</td>
									<td>بحر قزوين</td>
								</tr>
								<tr>
									<td>Dead sea</td>
									<td>mer morte</td>
									<td>البحر الميت</td>
								</tr>
								<tr>
									<td>Mediterranean sea</td>
									<td>mer méditerranée</td>
									<td>البحر الابيض المتوسط</td>
								</tr>
								<tr>
									<td>North sea</td>
									<td>mer du nord</td>
									<td>بحر الشمال</td>
								</tr>
								<tr>
									<td>Red sea</td>
									<td>mer rouge</td>
									<td>البحر الاحمر</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/histoirelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Histoire<?php endif; if($langue === 'english'): ?>History<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="histoire.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/payslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Pays<?php endif; if($langue === 'english'): ?>Countries<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="pays.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		