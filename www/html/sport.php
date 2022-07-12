<?php
		$titrefr = "SPORT";
		$titreang = "SPORT";
		$bg = "./assets/img/bgtheme/sportbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Sport<?php endif; if($langue === 'english'): ?>Sport<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire du sport en Anglais - Français - Arabe">
		<meta name="keywords" content="sport, entrainement, training, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="text-transform:capitalize;margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Sport<?php endif; if($langue === 'english'): ?>Sport<?php endif; ?></h1>

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
									<td>Aerobic</td>
									<td>Aérobic</td>
									<td>التمارين الرياضية</td>
								</tr>
								<tr>
									<td>Aikido</td>
									<td>Aïkido</td>
									<td>أيكيدو</td>
								</tr>
								<tr>
									<td>Archery</td>
									<td>tir à l'arc</td>
									<td>الرمي بالقوس</td>
								</tr>
								<tr>
									<td>Athlete</td>
									<td>athlète</td>
									<td>رياضي</td>
								</tr>
								<tr>
									<td>Aviation</td>
									<td>Aviation</td>
									<td>طيران</td>
								</tr>
								<tr>
									<td>Badminton</td>
									<td>badminton</td>
									<td>تنس الريشة</td>
								</tr>
								<tr>
									<td>Baseball</td>
									<td>base-ball</td>
									<td>البيسبول</td>
								</tr>
								<tr>
									<td>Basketball</td>
									<td>Basket-ball</td>
									<td>كرة السلة</td>
								</tr>
								<tr>
									<td>Billiards</td>
									<td>Billard</td>
									<td>البلياردو</td>
								</tr>
								<tr>
									<td>Boxing</td>
									<td>boxe</td>
									<td>الملاكمة</td>
								</tr>
								<tr>
									<td>Car racing</td>
									<td>course automobile</td>
									<td>سباق السيارات</td>
								</tr>
								<tr>
									<td>Criquet</td>
									<td>cricket</td>
									<td>كريكيت</td>
								</tr>
								<tr>
									<td>Curling</td>
									<td>Curling</td>
									<td>الكرلنغ</td>
								</tr>
								<tr>
									<td>Cycling</td>
									<td>cyclisme</td>
									<td>ركوب الدراجات</td>
								</tr>
								<tr>
									<td>Dancing</td>
									<td>danse</td>
									<td>الرقص</td>
								</tr>
								<tr>
									<td>Diving</td>
									<td>plongée sous-marine</td>
									<td>الغوص</td>
								</tr>
								<tr>
									<td>Fencing</td>
									<td>escrime</td>
									<td>مبارزة بالسيف</td>
								</tr>
								<tr>
									<td>Figure skating</td>
									<td>patinage artistique</td>
									<td>التزلج على الجليد</td>
								</tr>
								<tr>
									<td>Football</td>
									<td>football</td>
									<td>كرة القدم</td>
								</tr>
								<tr>
									<td>Golf</td>
									<td>golf</td>
									<td>جولف</td>
								</tr>
								<tr>
									<td>Gymnastics</td>
									<td>gymnastique</td>
									<td>رياضة بدنية</td>
								</tr>
								<tr>
									<td>Handball</td>
									<td>handball</td>
									<td>كرة اليد</td>
								</tr>
								<tr>
									<td>Hockey</td>
									<td>Hockey</td>
									<td>الهوكي</td>
								</tr>
								<tr>
									<td>Horse riding</td>
									<td>équitation</td>
									<td>ركوب الخيل</td>
								</tr>
								<tr>
									<td>Ice skating</td>
									<td>patinage sur glace</td>
									<td>التزلج على الجليد</td>
								</tr>
								<tr>
									<td>Indoor handball</td>
									<td>handball intérieur</td>
									<td>كرة اليد الداخلية</td>
								</tr>
								<tr>
									<td>Jogging</td>
									<td>footing</td>
									<td>الركض</td>
								</tr>
								<tr>
									<td>Judo</td>
									<td>judo</td>
									<td>الجودو</td>
								</tr>
								<tr>
									<td>Karate</td>
									<td>Karaté</td>
									<td>الكاراتي</td>
								</tr>
								<tr>
									<td>Motocross</td>
									<td>motocross</td>
									<td>موتوكروس</td>
								</tr>
								<tr>
									<td>mountaineering</td>
									<td>alpinisme</td>
									<td>تسلق الجبال</td>
								</tr>
								<tr>
									<td>Olympics</td>
									<td>jeux olympiques</td>
									<td>الألعاب الأولمبية</td>
								</tr>
								<tr>
									<td>Polo</td>
									<td>polo</td>
									<td>لعبة البولو</td>
								</tr>
								<tr>
									<td>Rock climbing</td>
									<td>escalade</td>
									<td>التسلق</td>
								</tr>
								<tr>
									<td>Rowing</td>
									<td>aviron</td>
									<td>تجديف</td>
								</tr>
								<tr>
									<td>Rugby</td>
									<td>rugby</td>
									<td>كرة القدم الامريكية</td>
								</tr>
								<tr>
									<td>Running</td>
									<td>course</td>
									<td>سباق</td>
								</tr>
								<tr>
									<td>Skiing</td>
									<td>ski</td>
									<td>تزلج</td>
								</tr>
								<tr>
									<td>Skydiving</td>
									<td>Parachutisme</td>
									<td>القفز بالمظلات</td>
								</tr>
								<tr>
									<td>Snowboarding</td>
									<td>snowboard</td>
									<td>على الجليد</td>
								</tr>
								<tr>
									<td>Surf</td>
									<td>surf</td>
									<td>ركوب الأمواج</td>
								</tr>
								<tr>
									<td>Swimming</td>
									<td>natation</td>
									<td>السباحة</td>
								</tr>
								<tr>
									<td>Table tennis</td>
									<td>tennis de table</td>
									<td>تنس الطاولة</td>
								</tr>
								<tr>
									<td>Taekwondo</td>
									<td>Taekwondo</td>
									<td>التايكوندو</td>
								</tr>
								<tr>
									<td>Tennis</td>
									<td>Tennis</td>
									<td>التنس</td>
								</tr>
								<tr>
									<td>Volleyball</td>
									<td>volley-ball</td>
									<td>الكرة الطائرة</td>
								</tr>
								<tr>
									<td>Water polo</td>
									<td>water polo</td>
									<td>كرة الماء</td>
								</tr>
								<tr>
									<td>Weight lifting</td>
									<td>musculation</td>
									<td>رفع الاثقال</td>
								</tr>
								<tr>
									<td>Windsurfing</td>
									<td>planche à voile</td>
									<td>ركوب الأمواج</td>
								</tr>
								<tr>
									<td>Wrestling</td>
									<td>catch</td>
									<td>مصارعة</td>
								</tr>
								<tr>
									<td>Yoga</td>
									<td>yoga</td>
									<td>اليوغا</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/fitnesslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Fitness<?php endif; if($langue === 'english'): ?>Fitness<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="fitness.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/loisirslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="loisirs.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		
		
		