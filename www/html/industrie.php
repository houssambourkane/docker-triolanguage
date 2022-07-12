<?php
		$titrefr = "INDUSTRIE";
		$titreang = "INDUSTRY";
		$bg = "./assets/img/bgtheme/industriebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Industrie<?php endif; if($langue === 'english'): ?>Industry<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire d'industrie en Anglais - Français - Arabe">
		<meta name="keywords" content="industrie, fabrique, logistique, manufacturing, manufacture, co2, pollution, ecologie, factory, industry, usine, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Industrie<?php endif; if($langue === 'english'): ?>Industry<?php endif; ?></h1>

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
									<td>Assemblage</td>
									<td>Assemblage</td>
									<td>تجميع</td>
								</tr>
								<tr>
									<td>Automation</td>
									<td>automatisation</td>
									<td>التشغيل الآلي</td>
								</tr>
								<tr>
									<td>Consumer goods</td>
									<td>biens de consommation</td>
									<td>بضائع المستهلكين</td>
								</tr>
								<tr>
									<td>Contractor</td>
									<td>entrepreneur</td>
									<td>مقاول</td>
								</tr>
								<tr>
									<td>Deep drawing</td>
									<td>Emboutissage</td>
									<td>سحب عميق</td>
								</tr>
								<tr>
									<td>Drilling</td>
									<td>Perçage</td>
									<td>حفر</td>
								</tr>
								<tr>
									<td>Engineering</td>
									<td>ingénierie</td>
									<td>هندسة</td>
								</tr>
								<tr>
									<td>Facilities</td>
									<td>installations</td>
									<td>مرافق</td>
								</tr>
								<tr>
									<td>Factory</td>
									<td>usine</td>
									<td>مصنع</td>
								</tr>
								<tr>
									<td>Field</td>
									<td>secteur d'activité</td>
									<td>مجال النشاط</td>
								</tr>
								<tr>
									<td>Finished product</td>
									<td>produit fini</td>
									<td>منتج منتهي</td>
								</tr>
								<tr>
									<td>Forge</td>
									<td>Forge</td>
									<td>تشكيل</td>
								</tr>
								<tr>
									<td>Handling</td>
									<td>Manutention</td>
									<td>معالجة</td>
								</tr>
								<tr>
									<td>Heat treatment</td>
									<td>Traitement thermique</td>
									<td>معالجة حرارية</td>
								</tr>
								<tr>
									<td>industrial</td>
									<td>Industriel</td>
									<td>صناعي</td>
								</tr>
								<tr>
									<td>Industrial machine</td>
									<td>Machine industrielle</td>
									<td>آلة صناعية</td>
								</tr>
								<tr>
									<td>Labor</td>
									<td>main d'œuvre</td>
									<td>اليد العاملة</td>
								</tr>
								<tr>
									<td>Logistics</td>
									<td>logistique</td>
									<td>الخدمات اللوجستية</td>
								</tr>
								<tr>
									<td>Machine tool</td>
									<td>machine-outil</td>
									<td>أداة آلة</td>
								</tr>
								<tr>
									<td>Maintenance</td>
									<td>maintenance</td>
									<td>اعمال صيانة</td>
								</tr>
								<tr>
									<td>Manufacturer</td>
									<td>fabricant</td>
									<td>الصانع</td>
								</tr>
								<tr>
									<td>manufacturing</td>
									<td>Secteur d'industrie</td>
									<td>قطاع الصناعة</td>
								</tr>
								<tr>
									<td>Mass production</td>
									<td>production en série</td>
									<td>الإنتاج بكثافة</td>
								</tr>
								<tr>
									<td>Material handling</td>
									<td>Manutention</td>
									<td>مناولة</td>
								</tr>
								<tr>
									<td>Milling</td>
									<td>Fraisage</td>
									<td>طحن</td>
								</tr>
								<tr>
									<td>Multi-skilled worker</td>
									<td>ouvrier polyvalent</td>
									<td>عامل متعدد المهارات</td>
								</tr>
								<tr>
									<td>Nuclear plant</td>
									<td>Centrale nucléaire</td>
									<td>محطة نووية</td>
								</tr>
								<tr>
									<td>Painting</td>
									<td>Peinture</td>
									<td>طلاء</td>
								</tr>
								<tr>
									<td>Packaging</td>
									<td>conditionnement</td>
									<td>التغليف</td>
								</tr>
								<tr>
									<td>Planing</td>
									<td>Rabotage</td>
									<td>التخطيط</td>
								</tr>
								<tr>
									<td>Pollution</td>
									<td>Pollution</td>
									<td>التلوث</td>
								</tr>
								<tr>
									<td>Power plant</td>
									<td>centrale électrique</td>
									<td>محطة توليد الكهرباء</td>
								</tr>
								<tr>
									<td>Procurement</td>
									<td>approvisionnement</td>
									<td>توريد</td>
								</tr>
								<tr>
									<td>Product</td>
									<td>produit</td>
									<td>المنتج</td>
								</tr>
								<tr>
									<td>Production control</td>
									<td>gestion de production</td>
									<td>مراقبة الإنتاج</td>
								</tr>
								<tr>
									<td>Production costs</td>
									<td>coût de production</td>
									<td>تكاليف الإنتاج</td>
								</tr>
								<tr>
									<td>Production line</td>
									<td>chaîne de production</td>
									<td>سلسلة الإنتاج</td>
								</tr>
								<tr>
									<td>Raw materials</td>
									<td>matières premières (MP)</td>
									<td>مواد اولية</td>
								</tr>
								<tr>
									<td>Reliability</td>
									<td>fiabilité</td>
									<td>الموثوقية</td>
								</tr>
								<tr>
									<td>Robotics</td>
									<td>Robotique</td>
									<td>علم الروبوتات</td>
								</tr>
								<tr>
									<td>Schedule</td>
									<td>planning</td>
									<td>برنامج</td>
								</tr>
								<tr>
									<td>Scrap</td>
									<td>rebut/feraille</td>
									<td>خردة</td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td>expédition/livraison</td>
									<td>الشحن</td>
								</tr>
								<tr>
									<td>Spare sparts</td>
									<td>pièces de rechange</td>
									<td>قطع التبديل</td>
								</tr>
								<tr>
									<td>Standardization</td>
									<td>Standardisation</td>
									<td>التقييس</td>
								</tr>
								<tr>
									<td>Stockout/shortage</td>
									<td>rupture de stock</td>
									<td>نفاذ المخزون</td>
								</tr>
								<tr>
									<td>Subcontracting</td>
									<td>Sous-traitance</td>
									<td>مقاولة فرعية</td>
								</tr>
								<tr>
									<td>Temporary worker</td>
									<td>intérimaire</td>
									<td>عامل مؤقت</td>
								</tr>
								<tr>
									<td>Tool</td>
									<td>outil</td>
									<td>أداة</td>
								</tr>
								<tr>
									<td>Tooling</td>
									<td>Outillage</td>
									<td>الأدوات</td>
								</tr>
								<tr>
									<td>Warehouse</td>
									<td>entrepôt</td>
									<td>مستودع</td>
								</tr>
								<tr>
									<td>Waste</td>
									<td>déchets/gaspillage</td>
									<td>المخلفات</td>
								</tr>
								<tr>
									<td>workshop</td>
									<td>atelier</td>
									<td>ورشة عمل</td>
								</tr>
								<tr>
									<td>Yield</td>
									<td>rendement</td>
									<td>المردود</td>
								</tr>

								
								
								<tr>
									<td class="soustitre">sectors</td>
									<td class="soustitre">secteurs</td>
									<td class="soustitre">القطاعات</td>
								</tr>
								<tr>
									<td>Aeronautical sector</td>
									<td>Secteur aéronautique</td>
									<td>قطاع الملاحة الجوية</td>
								</tr>
								<tr>
									<td>Agribusiness</td>
									<td>Secteur agroalimentaire</td>
									<td>الأعمال الزراعية</td>
								</tr>
								<tr>
									<td>Astronautical sector</td>
									<td>Secteur astronautique</td>
									<td>قطاع الملاحة الفضائية</td>
								</tr>
								<tr>
									<td>Building/construction industry</td>
									<td>secteur de construction</td>
									<td>قطاع البناء</td>
								</tr>
								<tr>
									<td>Buildings and public works</td>
									<td>Bâtiments et travaux public (BTP)</td>
									<td>المباني والأشغال العامة</td>
								</tr>
								<tr>
									<td>Chemical industry</td>
									<td>Industrie chimique</td>
									<td>الصناعة الكيميائية</td>
								</tr>
								<tr>
									<td>Electrotechnical construction</td>
									<td>Construction électrotechnique</td>
									<td>البناء الكهروتقني</td>
								</tr>
								<tr>
									<td>Railway construction</td>
									<td>Construction ferroviaire</td>
									<td>بناء السكك الحديدية</td>
								</tr>
								<tr>
									<td>Mechanical construction</td>
									<td>Construction mécanique</td>
									<td>بناء ميكانيكي</td>
								</tr>
								<tr>
									<td>Shipbuilding</td>
									<td>Construction navale</td>
									<td>بناء السفن</td>
								</tr>
								<tr>
									<td>Electronics</td>
									<td>Électronique</td>
									<td>إلكترونيات</td>
								</tr>
								<tr>
									<td>energy production</td>
									<td>production d'énergie</td>
									<td>إنتاج الطاقة</td>
								</tr>
								<tr>
									<td>Home appliance</td>
									<td>Électroménager</td>
									<td>الأجهزة المنزلية</td>
								</tr>
								<tr>
									<td>Mining industry</td>
									<td>Industrie minière</td>
									<td>صناعة التعدين</td>
								</tr>
								<tr>
									<td>Motor industry</td>
									<td>secteur de l'automobile</td>
									<td>قطاع السيارات</td>
								</tr>
								<tr>
									<td>Oil industry</td>
									<td>secteur pétrolier</td>
									<td>قطاع البترول</td>
								</tr>
								
								<tr>
									<td>Paper industry</td>
									<td>Industrie papetière</td>
									<td>صناعة الورق</td>
								</tr>
								<tr>
									<td>Pharmaceutical industry</td>
									<td>industrie pharmaceutique</td>
									<td>صناعة الادوية</td>
								</tr>
								<tr>
									<td>Shipping industry</td>
									<td>industrie maritime</td>
									<td>الصناعة البحرية</td>
								</tr>
								<tr>
									<td>Steel industry</td>
									<td>Sidérurgie</td>
									<td>صناعة الفولاذ</td>
								</tr>
								<tr>
									<td>Textile industry</td>
									<td>Industrie textile</td>
									<td>صناعة النسيج</td>
								</tr>
								<tr>
									<td>Textile industry</td>
									<td>Industrie textile</td>
									<td>صناعة النسيج</td>
								</tr>
								<tr>
									<td>Textile industry</td>
									<td>Industrie textile</td>
									<td>صناعة النسيج</td>
								</tr>
								<tr>
									<td>Wood industry</td>
									<td>Industrie du bois</td>
									<td>صناعة الخشب</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/informatiquelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Informatique<?php endif; if($langue === 'english'): ?>Informatique<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="informatique.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/metierslogo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Métiers<?php endif; if($langue === 'english'): ?>Jobs<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="metiers.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		