<?php
		$titrefr = "ELEMENTS CHIMIQUE ET AUTRES MATIERES";
		$titreang = "CHEMICAL ELEMENTS AND OTHER MATTERS";
		$bg = "./assets/img/bgtheme/elementschimiquesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Les éléments chimiques et autres matières<?php endif; if($langue === 'english'): ?>Chemical elements and other matters<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire des éléments chimiques en Anglais - Français - Arabe">
		<meta name="keywords" content="chemistry, chimie, oxydation, désoxydation, réaction, molécule, ion, cation, proton, neutron, noyau, atome, atom, éléments, chimiques, tableau, mendeleïev, table, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Les éléments chimiques et autres matières<?php endif; if($langue === 'english'): ?>Chemical elements and other matters<?php endif; ?></h1>

					<div class="trait_dessus"><hr></div>

		       <?php include('title_features.php'); ?>

					</div>

					<div class="table_simil">
		      	<table class="table table-hover col-md-3 w-75" style="margin-top:30px; margin-bottom: 30px;background-color: white;" id="tbl">
							<tr>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Signe<?php endif; if($langue === 'english'): ?>Sign<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Anglais<?php endif; if($langue === 'english'): ?>English<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th2_couleur ?>;"><?php if($langue === 'french'): ?>Français<?php endif; if($langue === 'english'): ?>French<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th3_couleur ?>;"><?php if($langue === 'french'): ?>Arabe<?php endif; if($langue === 'english'): ?>Arabic<?php endif; ?></th>
							</tr>
							<tr>
										<td>Al</td>
										<td>aluminium</td>
										<td>aluminium</td>
										<td>الألومنيوم</td>
									</tr>
									<tr>
										<td>Sb</td>
										<td>antimony</td>
										<td>antimoine</td>
										<td>الأنتيمون</td>
									</tr>
									<tr>
										<td>Ag</td>
										<td>silver</td>
										<td>argent</td>
										<td>الفضة</td>
									</tr>
									<tr>
										<td>Ar</td>
										<td>argon</td>
										<td>argon</td>
										<td>الأرجون</td>
									</tr>
									<tr>
										<td>As</td>
										<td>arsenic</td>
										<td>arsenic</td>
										<td>الزرنيخ</td>
									</tr>
									<tr>
										<td>N</td>
										<td>nitrogen</td>
										<td>azote</td>
										<td>نتروجين</td>
									</tr>
									<tr>
										<td>Be</td>
										<td>beryllium</td>
										<td>béryllium</td>
										<td>البيريليوم</td>
									</tr>
									<tr>
										<td>Bi</td>
										<td>bismuth</td>
										<td>bismuth</td>
										<td>البزموت</td>
									</tr>
									<tr>
										<td>B</td>
										<td>boron</td>
										<td>bore</td>
										<td>البورون</td>
									</tr>
									<tr>
										<td>Br</td>
										<td>bromine</td>
										<td>brome</td>
										<td>البروم</td>
									</tr>
									<tr>
										<td>Ca</td>
										<td>calcium</td>
										<td>calcium</td>
										<td>الكلسيوم</td>
									</tr>
									<tr>
										<td>C</td>
										<td>carbon</td>
										<td>carbone</td>
										<td>الكربون</td>
									</tr>
									<tr>
										<td>Ce</td>
										<td>Cerium</td>
										<td>cérium</td>
										<td>السيريوم</td>
									</tr>
									<tr>
										<td>Cs</td>
										<td>cesium</td>
										<td>césium</td>
										<td>السيريوم</td>
									</tr>
									<tr>
										<td>Cl</td>
										<td>chlorine</td>
										<td>chlore</td>
										<td>الكلور</td>
									</tr>
									<tr>
										<td>Cr</td>
										<td>chromium</td>
										<td>chrome</td>
										<td>الكروم</td>
									</tr>
									<tr>
										<td>Co</td>
										<td>cobalt</td>
										<td>cobalt</td>
										<td>الكوبالت</td>
									</tr>
									<tr>
										<td>Cu</td>
										<td>copper</td>
										<td>cuivre</td>
										<td>النحاس</td>
									</tr>
									<tr>
										<td>Sn</td>
										<td>tin</td>
										<td>étain</td>
										<td>القصدير</td>
									</tr>
									<tr>
										<td>Fe</td>
										<td>iron</td>
										<td>fer</td>
										<td>الحديد</td>
									</tr>
									<tr>
										<td>F</td>
										<td>fluorine</td>
										<td>fluor</td>
										<td>الفلور</td>
									</tr>
									<tr>
										<td>Ga</td>
										<td>Gallium</td>
										<td>gallium</td>
										<td>الغاليوم</td>
									</tr>
									<tr>
										<td>Hf</td>
										<td>hafnium</td>
										<td>hafnium</td>
										<td>الهافنيوم</td>
									</tr>
									<tr>
										<td>He</td>
										<td>helium</td>
										<td>hélium</td>
										<td>الهيليوم</td>
									</tr>
									<tr>
										<td>Ho</td>
										<td>holmium</td>
										<td>holmium</td>
										<td>الهولميوم</td>
									</tr>
									<tr>
										<td>H</td>
										<td>hydrogen</td>
										<td>hydrogène</td>
										<td>الهيدروجين</td>
									</tr>
									<tr>
										<td>I</td>
										<td>iodine</td>
										<td>iode</td>
										<td>اليود</td>
									</tr>
									<tr>
										<td>Kr</td>
										<td>krypton</td>
										<td>krypton</td>
										<td>الكربتون</td>
									</tr>
									<tr>
										<td>Li</td>
										<td>lithium</td>
										<td>lithium</td>
										<td>الليثيوم</td>
									</tr>
									<tr>
										<td>Lu</td>
										<td>lutetium</td>
										<td>lutétium</td>
										<td>اللوتيتيوم</td>
									</tr>
									<tr>
										<td>Mg</td>
										<td>magnesium</td>
										<td>magnésium</td>
										<td>المغنيسيوم</td>
									</tr>
									<tr>
										<td>Hg</td>
										<td>mercury</td>
										<td>mercure</td>
										<td>الزئبق</td>
									</tr>
									<tr>
										<td>Mo</td>
										<td>molybdenum</td>
										<td>molybdène</td>
										<td>الموليبدينوم</td>
									</tr>
									<tr>
										<td>Nd</td>
										<td>neodymium</td>
										<td>néodyme</td>
										<td>النيوديميوم</td>
									</tr>
									<tr>
										<td>Ne</td>
										<td>neon</td>
										<td>néon</td>
										<td>النيون</td>
									</tr>
									<tr>
										<td>Ni</td>
										<td>nickel</td>
										<td>nickel</td>
										<td>النيكل</td>
									</tr>
									<tr>
										<td>Nb</td>
										<td>niobium</td>
										<td>niobium</td>
										<td>النيوبيوم</td>
									</tr>
									<tr>
										<td>Au</td>
										<td>gold</td>
										<td>or</td>
										<td>الذهب</td>
									</tr>
									<tr>
										<td>O</td>
										<td>oxygen</td>
										<td>oxygène</td>
										<td>الأكسجين</td>
									</tr>
									<tr>
										<td>P</td>
										<td>phosphorus</td>
										<td>phosphore</td>
										<td>الفوسفور</td>
									</tr>
									<tr>
										<td>Pt</td>
										<td>platinum</td>
										<td>platine</td>
										<td>البلاتين</td>
									</tr>
									<tr>
										<td>Pb</td>
										<td>lead</td>
										<td>plomb</td>
										<td>الرصاص</td>
									</tr>
									<tr>
										<td>K</td>
										<td>potassium</td>
										<td>potassium</td>
										<td>البوتاسيوم</td>
									</tr>
									<tr>
										<td>Rb</td>
										<td>rubidium</td>
										<td>rubidium</td>
										<td>الروبيديوم</td>
									</tr>
									<tr>
										<td>Se</td>
										<td>selenium</td>
										<td>sélénium</td>
										<td>السيلينيوم</td>
									</tr>
									<tr>
										<td>Si</td>
										<td>silicon</td>
										<td>silicium</td>
										<td>السيليكون</td>
									</tr>
									<tr>
										<td>Na</td>
										<td>sodium</td>
										<td>sodium</td>
										<td>الصوديوم</td>
									</tr>
									<tr>
										<td>S</td>
										<td>sulfur</td>
										<td>soufre</td>
										<td>الكبريت</td>
									</tr>
									<tr>
										<td>Zn</td>
										<td>zinc</td>
										<td>zinc</td>
										<td>الزنك</td>
									</tr>								
									<tr>
										<td class="soustitre">Other metals</th>
										<td class="soustitre">Autres métaux</th>
										<td class="soustitre">معادن أخرى</th>
									</tr>
									<tr>
										<td>Alloy</td>
										<td>alliage</td>
										<td>أشابة</td>
									</tr>
									<tr>
										<td>brass</td>
										<td>laiton</td>
										<td>النحاس</td>
									</tr>
									<tr>
										<td>Bronze</td>
										<td>bronze</td>
										<td>برونز</td>
									</tr>
									<tr>
										<td>Steel</td>
										<td>acier</td>
										<td>صلب</td>
									</tr>
									<tr>
										<td>Titanium</td>
										<td>titane</td>
										<td>التيتانيوم</td>
									</tr>
									<tr>
										<td>Uranium</td>
										<td>uranium</td>
										<td>اليورانيوم</td>
									</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sciencelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="unitesdemesure.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/armeslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Armes<?php endif; if($langue === 'english'): ?>Weapons<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="armes.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
