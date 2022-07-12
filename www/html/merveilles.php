<?php
		$titrefr = "LES MERVEILLES DU MONDE";
		$titreang = "THE WORLD'S WONDERS";
		$bg = "./assets/img/bgtheme/merveillesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Les merveilles du mondes<?php endif; if($langue === 'english'): ?>The world's wonders<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des merveilles du monde en Anglais - Français - Arabe">
		<meta name="keywords" content="merveilles, wonders, monument, museem, tour, eiffel, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Les merveilles du mondes<?php endif; if($langue === 'english'): ?>The world's wonders<?php endif; ?></h1>

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
									<td class="soustitre">The seven wonders of the modern world</td>
									<td class="soustitre">Les sept merveilles du monde moderne</td>
									<td class="soustitre">عجائب الدنيا السبع الحديثة</td>
								</tr>
								<tr>
									<td>The great Wall of China</td>
									<td>La Grande Muraille de Chine</td>
									<td>سور الصين العظيم</td>
								</tr>
								<tr>
									<td>The city of the petra</td>
									<td>La cité de pétra</td>
									<td>مدينة البتراء</td>
								</tr>
								<tr>
									<td>The Statue of Christ the Redeemer</td>
									<td>La Statue du christ Rédempteur</td>
									<td>تمثال المسيح الفادي</td>
								</tr>
								<tr>
									<td>The machu Picchu</td>
									<td>Le machu picchu</td>
									<td>ماتشو بيتشو</td>
								</tr>
								<tr>
									<td>Chichén itzá</td>
									<td>Chichen Itza</td>
									<td>هرم تشيتشن إيتزا</td>
								</tr>
								<tr>
									<td>The Colosseum</td>
									<td>Le Colisée</td>
									<td>كولوسيوم</td>
								</tr>
								<tr>
									<td>The Taj Mahal</td>
									<td>Le Taj Mahal</td>
									<td>تاج محل</td>
								</tr>

								<tr>
									<td class="soustitre">The seven wonders of the ancient world</td>
									<td class="soustitre">Les sept merveilles du monde antique</td>
									<td class="soustitre">عجائب الدنيا السبع في العالم القديم</td>
								</tr>
								<tr>
									<td>Pyramid of Cheops</td>
									<td>Pyramide de Khéops</td>
									<td>هرم خوفو</td>
								</tr>
								<tr>
									<td>Hanging Gardens of Babylon</td>
									<td>Jardins suspendus de babylone</td>
									<td>حدائق بابل المعلقة</td>
								</tr>
								<tr>
									<td>Statue of Zeus</td>
									<td>Statue de Zeus</td>
									<td>تمثال زيوس</td>
								</tr>
								<tr>
									<td>Temple of Artemis</td>
									<td>Temple d'Artémis</td>
									<td>معبد ارتميس</td>
								</tr>
								<tr>
									<td>Mausoleum of Halicarnassus</td>
									<td>Mausolée d'Halicarnasse</td>
									<td>ضريح هاليكارناسوس</td>
								</tr>
								<tr>
									<td>Colossus of Rhodes</td>
									<td>Colosse de Rhodes</td>
									<td>عملاق رودس</td>
								</tr>
								<tr>
									<td>Lighthouse of Alexandria</td>
									<td>Phare d'Alexandrie</td>
									<td>منارة الإسكندرية</td>
								</tr>

								<tr>
									<td class="soustitre">The two wonders of the world from the industrial era</td>
									<td class="soustitre">Les deux merveilles du monde de l'époque industrielle</td>
									<td class="soustitre">عجائب العالم من العصر الصناعي</td>
								</tr>
								<tr>
									<td>Statue of Liberty</td>
									<td>Statue de la liberté</td>
									<td>تمثال الحرية</td>
								</tr>
								<tr>
									<td>Eiffel Tower</td>
									<td>Tour eiffel</td>
									<td>برج إيفل</td>
								</tr>
								<tr>
									<td class="soustitre">The wonders of the architectural world</td>
									<td class="soustitre">Les merveilles du monde architectural</td>
									<td class="soustitre">عجائب العالم المعماري</td>
								</tr>
								<tr>
									<td>Timbuktu</td>
									<td>Tombouctou</td>
									<td>تمبكتو</td>
								</tr>
								<tr>
									<td>Kremlin</td>
									<td>Kremlin</td>
									<td>قصر الكرملين</td>
								</tr>
								<tr>
									<td class="soustitre">The wonders of the classical world</td>
									<td class="soustitre">Les merveilles du monde classique</td>
									<td class="soustitre">عجائب العالم الكلاسيكي</td>
								</tr>
								<tr>
									<td>Alhambra</td>
									<td>Alhambra</td>
									<td>قصر الحمراء</td>
								</tr>
								<tr>
									<td>Sydney opera</td>
									<td>Opéra de Sydney</td>
									<td>دار أوبرا سيدني</td>
								</tr>
								<tr>
									<td>St. Sophia Basilica</td>
									<td>Basilique Sainte Sophie</td>
									<td>كنيسة القديسة صوفيا</td>
								</tr>
								<tr>
									<td class="soustitre">The wonders of the monumental world</td>
									<td class="soustitre">Les merveilles du monde monumental</td>
									<td class="soustitre">عجائب العالم الضخم</td>
								</tr>
								<tr>
									<td>Acropolis of Athens</td>
									<td>Acropole d'Athènes</td>
									<td>أكروبوليس أثينا</td>
								</tr>
								<tr>
									<td>Stonehenge</td>
									<td>Stonehenge</td>
									<td>ستونهنج</td>
								</tr>
								<tr>
									<td>Moais of Easter Island</td>
									<td>Moaïs de l'île de Pâques</td>
									<td>مويس جزيرة الفصح</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/voyagelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="voyage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/geographielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="geographie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		