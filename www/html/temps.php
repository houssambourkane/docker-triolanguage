<?php
		$titrefr = "TEMPS";
		$titreang = "TIME";
		$bg = "./assets/img/bgtheme/tempsbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de temps en Anglais - Français - Arabe">
		<meta name="keywords" content="lapse, année, millénaire, minute, seconde, année, year, second, heure, hour, siècle, century, mois, month, temps, time, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></h1>

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
									<td>Morning</td>
									<td>Matin</td>
									<td>صباح</td>
								</tr>
								<tr>
									<td>Midday</td>
									<td>midi</td>
									<td>الظهر</td>
								</tr>
								<tr>
									<td>Afternoon</td>
									<td>Après-midi</td>
									<td>بعد الظهر</td>
								</tr>
								<tr>
									<td>Evening</td>
									<td>Soir</td>
									<td>مساء</td>
								</tr>
								<tr>
									<td>Night</td>
									<td>nuit</td>
									<td>ليل</td>
								</tr>
								<tr>
									<td>Midnight</td>
									<td>Minuit</td>
									<td>منتصف الليل</td>
								</tr>
								<tr>
									<td>Dawn</td>
									<td>aube</td>
									<td>الفجر</td>
								</tr>
								<tr>
									<td>Weekend</td>
									<td>Week-end</td>
									<td>نهاية الأسبوع</td>
								</tr>
								<tr>
									<td>Today</td>
									<td>aujourd'hui</td>
									<td>اليوم</td>
								</tr>
								<tr>
									<td>Yesterday</td>
									<td>hier</td>
									<td>أمس</td>
								</tr>
								<tr>
									<td>Tomorrow</td>
									<td>demain</td>
									<td>غدا</td>
								</tr>
								<tr>
									<td>Tonight</td>
									<td>ce soir</td>
									<td>هذه الليلة</td>
								</tr>
								<tr>
									<td>The day before</td>
									<td>la veille</td>
									<td>قبل يوم واحد</td>
								</tr>
								<tr>
									<td>Millisecond</td>
									<td>milliseconde</td>
									<td>مللي ثانية</td>
								</tr>
								<tr>
									<td>Second</td>
									<td>Seconde</td>
									<td>الثانية</td>
								</tr>
								<tr>
									<td>Minute</td>
									<td>Minute</td>
									<td>دقيقة</td>
								</tr>
								<tr>
									<td>Hour</td>
									<td>Heure</td>
									<td>ساعة</td>
								</tr>
								<tr>
									<td>Day</td>
									<td>Jour</td>
									<td>يوم</td>
								</tr>
								<tr>
									<td>Week</td>
									<td>Semaine</td>
									<td>أسبوع</td>
								</tr>
								<tr>
									<td>Fortnight</td>
									<td>quinze jours</td>
									<td>خمسة عشر يوما</td>
								</tr>
								<tr>
									<td>Month</td>
									<td>mois</td>
									<td>شهر</td>
								</tr>
								<tr>
									<td>Trimester/quarter year</td>
									<td>trimestre</td>
									<td>ثلث السنة</td>
								</tr>
								<tr>
									<td>Semester/half year</td>
									<td>semestre</td>
									<td>نصف السنة</td>
								</tr>
								<tr>
									<td>Year</td>
									<td>année</td>
									<td>عام</td>
								</tr>
								<tr>
									<td>Decade</td>
									<td>décennie</td>
									<td>عقد</td>
								</tr>
								<tr>
									<td>Century</td>
									<td>siècle</td>
									<td>قرن</td>
								</tr>
								<tr>
									<td>Millennium</td>
									<td>Millénaire</td>
									<td>ألف عام</td>
								</tr>
								<tr>
									<td>Light Year</td>
									<td>Année-lumière</td>
									<td>سنة ضوئية</td>
								</tr>
								<tr>
									<td>Era</td>
									<td>ère/époque</td>
									<td>عصر</td>
								</tr>
								<tr>
									<td>Period</td>
									<td>période</td>
									<td>فترة</td>
								</tr>
								<tr>
									<td>Instant</td>
									<td>instant</td>
									<td>لحظة</td>
								</tr>
								<tr>
									<td>moment</td>
									<td>moment</td>
									<td>لحظة</td>
								</tr>
								<tr>
									<td>Momentary</td>
									<td>momentané/provisoire</td>
									<td>مؤقت</td>
								</tr>
								<tr>
									<td>Temporary</td>
									<td>Temporaire</td>
									<td>مؤقت</td>
								</tr>
								<tr>
									<td>Duration</td>
									<td>durée</td>
									<td>المدة الزمنية</td>
								</tr>
								<tr>
									<td>Durable</td>
									<td>lasting</td>
									<td>متحمل</td>
								</tr>
								<tr>
									<td>Permanent</td>
									<td>permanent</td>
									<td>دائم</td>
								</tr>
								<tr>
									<td>Lapse of time</td>
									<td>laps de temps</td>
									<td>فترة زمنية</td>
								</tr>
								<tr>
									<td>Eternity</td>
									<td>éternité</td>
									<td>أبدية</td>
								</tr>
								<tr>
									<td>Infinity</td>
									<td>infinité</td>
									<td>ما لا نهاية</td>
								</tr>
								<tr>
									<td>deadline</td>
									<td>Date limite/échéance</td>
									<td>حد اقصى/الموعد الأخير</td>
								</tr>
								<tr>
									<td>Leap year</td>
									<td>année bissextile</td>
									<td>سنة كبيسة</td>
								</tr>
								<tr>
									<td>Quarter of an hour</td>
									<td>Quart d'heure</td>
									<td>ربع ساعة</td>
								</tr>
								<tr>
									<td>Half an hour</td>
									<td>demi-heure</td>
									<td>نصف ساعة</td>
								</tr>
								<tr>
									<td>Half time</td>
									<td>Mi-temps</td>
									<td>نصف الوقت</td>
								</tr>
								<tr>
									<td>Season</td>
									<td>saison</td>
									<td>الموسم</td>
								</tr>
								<tr>
									<td>Time out</td>
									<td>temps mort</td>
									<td>نفذ الوقت</td>
								</tr>
								<tr>
									<td>Timetable</td>
									<td>emploi de temps</td>
									<td>الجدول الزمني</td>
								</tr>
								<tr>
									<td>Watchmaker</td>
									<td>horloger</td>
									<td>ساعاتي</td>
								</tr>
								<tr>
									<td>At the same time</td>
									<td>en même temps</td>
									<td>في نفس الوقت</td>
								</tr>
								<tr>
									<td>Chronic</td>
									<td>chronique</td>
									<td>مزمن</td>
								</tr>
								<tr>
									<td>Chronological</td>
									<td>chronologique</td>
									<td>ترتيب زمني</td>
								</tr>
								<tr>
									<td>Contemporary</td>
									<td>contemporain</td>
									<td>معاصر</td>
								</tr>
								<tr>
									<td>Quickly</td>
									<td>rapidement</td>
									<td>بسرعة</td>
								</tr>
								<tr>
									<td>Slowly</td>
									<td>lentement</td>
									<td>ببطء</td>
								</tr>
								<tr>
									<td>Slow motion</td>
									<td>Ralenti</td>
									<td>حركة بطيئة</td>
								</tr>
								<tr>
									<td>Updated</td>
									<td>actualisé/mis à jour</td>
									<td>محدث</td>
								</tr>
								<tr>
									<td>Outdated</td>
									<td>obsolète/dépassé</td>
									<td>قديم</td>
								</tr>
								<tr>
									<td>Spare time</td>
									<td>temps de repos</td>
									<td>وقت الراحة</td>
								</tr>
								<tr>
									<td>Past</td>
									<td>passé</td>
									<td>الماضي</td>
								</tr>
								<tr>
									<td>Present</td>
									<td>présent</td>
									<td>الحاضر</td>
								</tr>
								<tr>
									<td>Future</td>
									<td>futur</td>
									<td>المستقبل</td>
								</tr>

								<tr>
									<td class="soustitre">Time measuring</td>
									<td class="soustitre">Mesure du temps</td>
									<td class="soustitre">قياس الوقت</td>
								</tr>
								<tr>
									<td>Calendar</td>
									<td>calendrier</td>
									<td>التقويم</td>
								</tr>
								<tr>
									<td>Gregorian calendar</td>
									<td>calendrier grégorien</td>
									<td>التقويم الميلادي</td>
								</tr>
								<tr>
									<td>Hijri calendar</td>
									<td>Calendrier Hijri</td>
									<td>التقويم الهجري</td>
								</tr>
								<tr>
									<td>Clock</td>
									<td>horloge</td>
									<td>ساعة حائط</td>
								</tr>
								<tr>
									<td>Cog/gear</td>
									<td>rouage</td>
									<td>الترس</td>
								</tr>
								<tr>
									<td>Dial</td>
									<td>cadran</td>
									<td>قرص الساعة</td>
								</tr>
								<tr>
									<td>Pendulum</td>
									<td>pendule</td>
									<td>بندول الساعة</td>
								</tr>
								<tr>
									<td>Pile</td>
									<td>batterie</td>
									<td>البطارية</td>
								</tr>
								<tr>
									<td>Sandglass/hourglass</td>
									<td>Sablier</td>
									<td>الساعة الرملية</td>
								</tr>
								<tr>
									<td>Stopwatch</td>
									<td>chronomètre</td>
									<td>ساعة التوقيف</td>
								</tr>
								<tr>
									<td>Timer</td>
									<td>minuteur</td>
									<td>مؤقت</td>
								</tr>
								<tr>
									<td>Wall clock</td>
									<td>pendule murale</td>
									<td>ساعة حائط</td>
								</tr>
								<tr>
									<td>Watch</td>
									<td>montre</td>
									<td>ساعة</td>
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
							  <img src="./assets/img/logotheme/motdeliaisonlogo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Mots de liaison<?php endif; if($langue === 'english'): ?>Linking words<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="motdeliaison.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		