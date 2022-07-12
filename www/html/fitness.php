<?php
		$titrefr = "FITNESS";
		$titreang = "FITNESS";
		$bg = "./assets/img/bgtheme/fitnessbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Fitness<?php endif; if($langue === 'english'): ?>Fitness<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de fitness en Anglais - Français - Arabe">
		<meta name="keywords" content="fitness, workout, entrainement, sprint, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Fitness<?php endif; if($langue === 'english'): ?>Fitness<?php endif; ?></h1>

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
									<td>Aerobics</td>
									<td>Aérobie</td>
									<td>التمارين الرياضية</td>
								</tr>
								<tr>
									<td>Body</td>
									<td>Corps</td>
									<td>الجسم</td>
								</tr>
								<tr>
									<td>Bottle</td>
									<td>Bouteille</td>
									<td>زجاجة</td>
								</tr>
								<tr>
									<td>calorie</td>
									<td>calorie</td>
									<td>سعر كالوري</td>
								</tr>
								<tr>
									<td>Cardio</td>
									<td>Cardio</td>
									<td>تدريب</td>
								</tr>
								<tr>
									<td>Coach</td>
									<td>Entraîneur</td>
									<td>مدرب</td>
								</tr>
								<tr>
									<td>Cool down</td>
									<td>Refroidir</td>
									<td>يبرد</td>
								</tr>
								<tr>
									<td>Diet</td>
									<td>régime</td>
									<td>حمية</td>
								</tr>
								<tr>
									<td>Dieting</td>
									<td>Suivre un régime</td>
									<td>الرجيم</td>
								</tr>
								<tr>
									<td>Dose</td>
									<td>dose</td>
									<td>جرعة</td>
								</tr>
								<tr>
									<td>Endurance</td>
									<td>Endurance</td>
									<td>قدرة التحمل</td>
								</tr>
								<tr>
									<td>Energy</td>
									<td>Énergie</td>
									<td>الطاقة</td>
								</tr>
								<tr>
									<td>Fit</td>
									<td>En forme</td>
									<td>لائق بدنيا</td>
								</tr>
								<tr>
									<td>Gym</td>
									<td>Gym/salle de sport</td>
									<td>الجمنازيوم/نادي رياضي</td>
								</tr>
								<tr>
									<td>Gym gloves</td>
									<td>Gants de gym</td>
									<td>قفازات الصالة الرياضية</td>
								</tr>
								<tr>
									<td>Gym instructor</td>
									<td>Instructeur de gym</td>
									<td>مدرب رياضي</td>
								</tr>
								<tr>
									<td>Healthy food</td>
									<td>Nourriture saine</td>
									<td>الطعام الصحي</td>
								</tr>
								<tr>
									<td>Height</td>
									<td>taille</td>
									<td>طول القامة</td>
								</tr>
								<tr>
									<td>Jogging</td>
									<td>Jogging</td>
									<td>الركض</td>
								</tr>
								<tr>
									<td>Junk food</td>
									<td>Malbouffe</td>
									<td>الوجبات السريعة</td>
								</tr>
								<tr>
									<td>Metabolism</td>
									<td>métabolisme</td>
									<td>التمثيل الغذائي</td>
								</tr>
								<tr>
									<td>Motivation</td>
									<td>Motivation</td>
									<td>التحفيز</td>
								</tr>
								<tr>
									<td>Nutrients</td>
									<td>Nutriments</td>
									<td>العناصر الغذائية</td>
								</tr>
								<tr>
									<td>Nutrition</td>
									<td>Nutrition</td>
									<td>التغذية</td>
								</tr>
								<tr>
									<td>Program/schedule</td>
									<td>programme</td>
									<td>برنامج</td>
								</tr>
								<tr>
									<td>Punch bag</td>
									<td>Sac de boxe</td>
									<td>كيس لكمة</td>
								</tr>
								<tr>
									<td>Repetition</td>
									<td>répétition</td>
									<td>تكرار</td>
								</tr>
								<tr>
									<td>Rest</td>
									<td>récupération</td>
									<td>استراحة</td>
								</tr>
								<tr>
									<td>Running</td>
									<td>course</td>
									<td>ركض</td>
								</tr>
								<tr>
									<td>Set</td>
									<td>série</td>
									<td>سلسلة</td>
								</tr>
								<tr>
									<td>Shaker</td>
									<td>shaker</td>
									<td>شاكر</td>
								</tr>
								<tr>
									<td>Speed-walk</td>
									<td>Tapis roulant</td>
									<td>جهاز السير</td>
								</tr>
								<tr>
									<td>Supplements</td>
									<td>Suppléments</td>
									<td>المكملات</td>
								</tr>
								<tr>
									<td>Trainers</td>
									<td>chaussures de sport</td>
									<td>أحذية رياضية</td>
								</tr>
								<tr>
									<td>Training session</td>
									<td>séance d'entraînement</td>
									<td>حصة  تدريبية</td>
								</tr>
								<tr>
									<td>Vitamins</td>
									<td>vitamines</td>
									<td>فيتامينات</td>
								</tr>
								<tr>
									<td>Weight</td>
									<td>Poids</td>
									<td>وزن</td>
								</tr>
								<tr>
									<td>Yoga</td>
									<td>Yoga</td>
									<td>اليوجا</td>
								</tr>
								<tr>
									<td class="soustitre">Gym material</td>
									<td class="soustitre">Matériel de la salle de sport</td>
									<td class="soustitre">مواد الجمنازيوم</td>
								</tr>
								<tr>
									<td>Ankle weights</td>
									<td>poids chevilles</td>
									<td>أوزان الكاحل</td>
								</tr>
								<tr>
									<td>Climbing rope</td>
									<td>corde lisse</td>
									<td>حبل التسلق</td>
								</tr>
								<tr>
									<td>Dumbbell</td>
									<td>haltère</td>
									<td>الدمبل</td>
								</tr>
								<tr>
									<td>Mat</td>
									<td>tapis</td>
									<td>حصيرة رياضية</td>
								</tr>
								<tr>
									<td>Pull up bar</td>
									<td>barre de traction</td>
									<td></td>
								</tr>
								<tr>
									<td>Skipping rope</td>
									<td>corde à sauter</td>
									<td>حبل النط</td>
								</tr>
								<tr>
									<td>Timer</td>
									<td>minuteur</td>
									<td>مؤقت</td>
								</tr>
								<tr>
									<td>Weight bench</td>
									<td>banc de musculation</td>
									<td>مقعد الوزن</td>
								</tr>
								<tr>
									<td>Muscles</td>
									<td>Muscles</td>
									<td>العضلات</td>
								</tr>
								<tr>
									<td>Abs</td>
									<td>abdominaux</td>
									<td>عضلات المعدة</td>
								</tr>
								<tr>
									<td>Arm</td>
									<td>bras</td>
									<td>ذراع</td>
								</tr>
								<tr>
									<td>Back</td>
									<td>dos</td>
									<td>ظهر</td>
								</tr>
								<tr>
									<td>Biceps</td>
									<td>biceps</td>
									<td>العضلة ذات الرأسين</td>
								</tr>
								<tr>
									<td>Buttock</td>
									<td>fesse</td>
									<td>ردف</td>
								</tr>
								<tr>
									<td>Calf</td>
									<td>mollet</td>
									<td>ساق</td>
								</tr>
								<tr>
									<td>Forearm</td>
									<td>avant-bras</td>
									<td>الساعد</td>
								</tr>
								<tr>
									<td>Hand</td>
									<td>main</td>
									<td>يد</td>
								</tr>
								<tr>
									<td>Leg</td>
									<td>jambe</td>
									<td>رجل</td>
								</tr>
								<tr>
									<td>Love handle</td>
									<td>Poignée d'amour</td>
									<td>مقبض الحب</td>
								</tr>
								<tr>
									<td>Lower back</td>
									<td>bas du dos</td>
									<td>اسفل الظهر</td>
								</tr>
								<tr>
									<td>Nape</td>
									<td>nuque</td>
									<td>قفا</td>
								</tr>
								<tr>
									<td>Neck</td>
									<td>cou</td>
									<td>العنق</td>
								</tr>
								<tr>
									<td>Pectorals/chest</td>
									<td>pectoraux/poitrine</td>
									<td>صدر</td>
								</tr>
								<tr>
									<td>Quadriceps</td>
									<td>quadriceps</td>
									<td>عضلة رباعية الرؤوس</td>
								</tr>
								<tr>
									<td>Shoulder</td>
									<td>épaule</td>
									<td>كتف</td>
								</tr>
								<tr>
									<td>Thigh</td>
									<td>cuisse</td>
									<td>الفخذ</td>
								</tr>
								<tr>
									<td>Trapezius</td>
									<td>trapèze</td>
									<td>طرابزيوس</td>
								</tr>
								<tr>
									<td>Triceps</td>
									<td>triceps</td>
									<td>ثلاثية الرؤوس عضلة</td>
								</tr>
								<tr>
									<td>Upper back</td>
									<td>haut du dos</td>
									<td>اعلى الظهر</td>
								</tr>
								<tr>
									<td>Useful verbs</td>
									<td>verbes utiles</td>
									<td>أفعال مفيدة</td>
								</tr>
								<tr>
									<td>To lose weight</td>
									<td>perdre du poids</td>
									<td>تخفيف الوزن</td>
								</tr>
								<tr>
									<td>to gain weight</td>
									<td>gagner du poids</td>
									<td>زيادة الوزن</td>
								</tr>
								<tr>
									<td>To go to the gym</td>
									<td>aller à la salle de sport</td>
									<td>الذهاب إلى صالة الالعاب الرياضية</td>
								</tr>
								<tr>
									<td>To warm up</td>
									<td>se réchauffer</td>
									<td>التسخين</td>
								</tr>
								<tr>
									<td>To stretch up</td>
									<td>S'étirer</td>
									<td>لتمتد</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sportlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Sport<?php endif; if($langue === 'english'): ?>Sport<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="sport.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nutrimentslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nutriments<?php endif; if($langue === 'english'): ?>Nutrients<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nutriments.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		