<?php
		$titrefr = "LOISIRS";
		$titreang = "HOBBIES";
		$bg = "./assets/img/bgtheme/loisirbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de loisirs en Anglais - Français - Arabe">
		<meta name="keywords" content="loisir, hobby, hobbies, temps, libre, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, free, time, loisirs, divertissement, activité, activity">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></h1>

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
									<td>Art</td>
									<td>art</td>
									<td>الفن</td>
								</tr>
								<tr>
									<td>Biking</td>
									<td>Cyclisme</td>
									<td>كوب الدراجات</td>
								</tr>
								<tr>
									<td>Board games</td>
									<td>jeux de société</td>
									<td>ألعاب الطاولة</td>
								</tr>
								<tr>
									<td>Camping</td>
									<td>camping</td>
									<td>تخييم</td>
								</tr>
								<tr>
									<td>Choir</td>
									<td>chorale</td>
									<td>الكورال</td>
								</tr>
								<tr>
									<td>Cleaning</td>
									<td>faire du ménage</td>
									<td>تنظيف</td>
								</tr>
								<tr>
									<td>Computing</td>
									<td>informatique</td>
									<td>الحوسبة</td>
								</tr>
								<tr>
									<td>Cooking</td>
									<td>cuisiner</td>
									<td>طبخ</td>
								</tr>
								<tr>
									<td>Dance</td>
									<td>danse</td>
									<td>الرقص</td>
								</tr>
								<tr>
									<td>Diving</td>
									<td>la plongée</td>
									<td>الغوص</td>
								</tr>
								<tr>
									<td>Doing sport</td>
									<td>faire du sport</td>
									<td>ممارسة الرياضة</td>
								</tr>
								<tr>
									<td>drawing</td>
									<td>dessiner</td>
									<td>الرسم</td>
								</tr>
								<tr>
									<td>Driving</td>
									<td>la conduite</td>
									<td>القيادة</td>
								</tr>
								<tr>
									<td>Embroidery</td>
									<td>broderie</td>
									<td>التطريز</td>
								</tr>
								<tr>
									<td>Fishing</td>
									<td>la pêche</td>
									<td>صيد السمك</td>
								</tr>
								<tr>
									<td>Gardening</td>
									<td>jardinage</td>
									<td>بستنة</td>
								</tr>
								<tr>
									<td>Going to the cinema</td>
									<td>aller au cinéma</td>
									<td>الذهاب إلى السنيما</td>
								</tr>
								<tr>
									<td>Going to the gym</td>
									<td>Aller à la gym</td>
									<td>ذاهب للصالة الرياضية</td>
								</tr>
								<tr>
									<td>Going to the theater</td>
									<td>aller au théâtre</td>
									<td>الذهاب إلى المسرح</td>
								</tr>
								<tr>
									<td>Hiking</td>
									<td>la randonnée</td>
									<td>التنزه</td>
								</tr>
								<tr>
									<td>Horse riding</td>
									<td>équitation</td>
									<td>ركوب الخيل</td>
								</tr>
								<tr>
									<td>Hunting</td>
									<td>la chasse</td>
									<td>الصيد</td>
								</tr>
								<tr>
									<td>Jogging</td>
									<td>footing</td>
									<td>الركض</td>
								</tr>
								<tr>
									<td>Knitting</td>
									<td>tricotage</td>
									<td>حياكة</td>
								</tr>
								<tr>
									<td>Listen to music</td>
									<td>écouter de la musique</td>
									<td>الإستماع إلى الموسيقى</td>
								</tr>
								<tr>
									<td>Painting</td>
									<td>peinture</td>
									<td>فن الرسم</td>
								</tr>
								<tr>
									<td>Play the guitar</td>
									<td>jouer de la guitare</td>
									<td>لعب  الجيتار</td>
								</tr>
								<tr>
									<td>Playing chess</td>
									<td>jouer aux échecs</td>
									<td>لعب الشطرنج</td>
								</tr>
								<tr>
									<td>playing football</td>
									<td>jouer au football</td>
									<td>لعب كرة القدم</td>
								</tr>
								<tr>
									<td>Playing tennis</td>
									<td>jouer au tennis</td>
									<td>لعب التنس</td>
								</tr>
								<tr>
									<td>Poetry</td>
									<td>poésie</td>
									<td>الشعر</td>
								</tr>
								<tr>
									<td>Pottery</td>
									<td>poterie</td>
									<td>صناعة الفخار</td>
								</tr>
								<tr>
									<td>Reading</td>
									<td>La lecture</td>
									<td>القراءة</td>
								</tr>
								<tr>
									<td>running</td>
									<td>courir</td>
									<td>الجري</td>
								</tr>
								<tr>
									<td>Sailing</td>
									<td>Voile</td>
									<td>إبحار</td>
								</tr>
								<tr>
									<td>Sculpture</td>
									<td>sculpture</td>
									<td>فن النحت</td>
								</tr>
								<tr>
									<td>Sewing</td>
									<td>la couture</td>
									<td>خياطة</td>
								</tr>
								<tr>
									<td>Stamp collecting</td>
									<td>philatélie</td>
									<td>طوابعية</td>
								</tr>
								<tr>
									<td>Swimming</td>
									<td>natation</td>
									<td>السباحة</td>
								</tr>
								<tr>
									<td>To build</td>
									<td>construire</td>
									<td>بناء</td>
								</tr>
								<tr>
									<td>To collect</td>
									<td>collecter</td>
									<td>جمع</td>
								</tr>
								<tr>
									<td>To do voluntary work</td>
									<td>faire du bénévolat</td>
									<td>التطوع</td>
								</tr>
								<tr>
									<td>To go for walks</td>
									<td>se promener</td>
									<td>التجول</td>
								</tr>
								<tr>
									<td>To sing</td>
									<td>chanter</td>
									<td>غنى</td>
								</tr>
								<tr>
									<td>To take photographs</td>
									<td>prendre des photos</td>
									<td>التقاط الصور</td>
								</tr>
								<tr>
									<td>Travel</td>
									<td>voyage</td>
									<td>السفر</td>
								</tr>
								<tr>
									<td>Trekking</td>
									<td>Trekking</td>
									<td>الرحلات</td>
								</tr>
								<tr>
									<td>video games</td>
									<td>jeux vidéo</td>
									<td>العاب الكترونية</td>
								</tr>
								<tr>
									<td>Watching films</td>
									<td>regarder des films</td>
									<td>مشاهدة الأفلام</td>
								</tr>
								<tr>
									<td>Watching TV</td>
									<td>regarder la télé</td>
									<td>مشاهدة التلفاز</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/musiquelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Musique & instrument<?php endif; if($langue === 'english'): ?>Music & instrument<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="musique.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/voyagelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="voyage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		