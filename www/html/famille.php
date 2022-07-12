<?php
		$titrefr = "FAMILLE";
		$titreang = "FAMILY";
		$bg = "./assets/img/bgtheme/famillebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Famille<?php endif; if($langue === 'english'): ?>Family<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de la famille en Anglais - Français - Arabe">
		<meta name="keywords" content="parenté, fratérnité, famille, family, father, sister, mother, brother, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, enfant, fils, fille, oncle, tante, uncle, grand, mere, pere, frere, soeur, parents, parent, neveux, nephew">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Famille<?php endif; if($langue === 'english'): ?>Family<?php endif; ?></h1>

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
									<td>Adopted</td>
									<td>adopté</td>
									<td>متبنى</td>
								</tr>
								<tr>
									<td>Adults</td>
									<td>adultes</td>
									<td>الكبار</td>
								</tr>
								<tr>
									<td>Aunt</td>
									<td>tante</td>
									<td>عمة / خالة</td>
								</tr>
								<tr>
									<td>Baby</td>
									<td>bébé</td>
									<td>طفل</td>
								</tr>
								<tr>
									<td>Boyfriend</td>
									<td>copain</td>
									<td>صاحب</td>
								</tr>
								<tr>
									<td>Bride</td>
									<td>mariée</td>
									<td>عروس</td>
								</tr>
								<tr>
									<td>Brother</td>
									<td>frère</td>
									<td>الأخ</td>
								</tr>
								<tr>
									<td>Cadet</td>
									<td>Cadet</td>
									<td>أخ أصغر</td>
								</tr>
								<tr>
									<td>Child</td>
									<td>enfant</td>
									<td>طفل</td>
								</tr>
								<tr>
									<td>Children</td>
									<td>enfants</td>
									<td>أطفال</td>
								</tr>
								<tr>
									<td>Cousin</td>
									<td>cousin(e)</td>
									<td>ولد عم / ابنة عم</td>
								</tr>
								<tr>
									<td>Daughter</td>
									<td>fille</td>
									<td>ابنة</td>
								</tr>
								<tr>
									<td>Eldest</td>
									<td>Aîné</td>
									<td>الاكبر سنا</td>
								</tr>
								<tr>
									<td>Father / dad</td>
									<td>père / papa</td>
									<td>الآب</td>
								</tr>
								<tr>
									<td>Fiancé(e)</td>
									<td>fiancé(e)</td>
									<td>خطيب(ة)</td>
								</tr>
								<tr>
									<td>Girlfriend</td>
									<td>copine</td>
									<td>صديقة</td>
								</tr>
								<tr>
									<td>Goddaughter</td>
									<td>filleule</td>
									<td>إبنة بالمعمودية</td>
								</tr>
								<tr>
									<td>Godfather</td>
									<td>parrain</td>
									<td>عراب</td>
								</tr>
								<tr>
									<td>Godmother</td>
									<td>marraine</td>
									<td>العرابة</td>
								</tr>
								<tr>
									<td>Godson</td>
									<td>filleul</td>
									<td>إبن بالمعمودية</td>
								</tr>
								<tr>
									<td>Grandchild</td>
									<td>petit-enfant</td>
									<td>حفيد</td>
								</tr>
								<tr>
									<td>Grandchildren</td>
									<td>petits-enfants</td>
									<td>أحفاد</td>
								</tr>
								<tr>
									<td>Granddaughter</td>
									<td>petite-fille</td>
									<td>حفيدة</td>
								</tr>
								<tr>
									<td>Grandfather</td>
									<td>grand-père</td>
									<td>جد</td>
								</tr>
								<tr>
									<td>Grandmother</td>
									<td>grand-mère</td>
									<td>جدة</td>
								</tr>
								<tr>
									<td>Grandson</td>
									<td>petit-fils</td>
									<td>حفيد</td>
								</tr>
								<tr>
									<td>Great grandfather</td>
									<td>arrière grand-père</td>
									<td>الجد الأكبر</td>
								</tr>
								<tr>
									<td>Great grandmother</td>
									<td>arrière grand-mère</td>
									<td>الأكبر الجدة</td>
								</tr>
								<tr>
									<td>Groom</td>
									<td>marié</td>
									<td>عريس</td>
								</tr>
								<tr>
									<td>Halfbrother</td>
									<td>demi-frère (biologique)</td>
									<td>نصف أخ</td>
								</tr>
								<tr>
									<td>Halfsister</td>
									<td>demi-sœur (biologique)</td>
									<td>نصف أخت</td>
								</tr>
								<tr>
									<td>Husband</td>
									<td>mari</td>
									<td>الزوج</td>
								</tr>
								<tr>
									<td>Mother / mum</td>
									<td>mère / maman</td>
									<td>الأم</td>
								</tr>
								<tr>
									<td>Nephew</td>
									<td>neveu</td>
									<td>ابن الأخ / إبن الأ خت</td>
								</tr>
								<tr>
									<td>Niece</td>
									<td>nièce</td>
									<td>ابنة الاخ / ابنة الأ خت</td>
								</tr>
								<tr>
									<td>Only child</td>
									<td>enfant unique</td>
									<td>طفل واحد</td>
								</tr>
								<tr>
									<td>Siblings</td>
									<td>frères et sœurs</td>
									<td>إخوة وأخوات</td>
								</tr>
								<tr>
									<td>Sister</td>
									<td>sœur</td>
									<td>الأخت</td>
								</tr>
								<tr>
									<td>Son</td>
									<td>fils</td>
									<td>ابن</td>
								</tr>
								<tr>
									<td>Spouse</td>
									<td>époux / épouse</td>
									<td>الزوج</td>
								</tr>
								<tr>
									<td>Stepbrother</td>
									<td>demi-frère (pas de lien parental)</td>
									<td>أخ غير شقيق</td>
								</tr>
								<tr>
									<td>Stepfather</td>
									<td>beau-père</td>
									<td>زوج الأم</td>
								</tr>
								<tr>
									<td>Stepmother</td>
									<td>belle-mère</td>
									<td>زوجة الأب</td>
								</tr>
								<tr>
									<td>Stepsister</td>
									<td>demi-sœur (pas de lien parental)</td>
									<td>أخت غير شقيقة</td>
								</tr>
								<tr>
									<td>Teenager</td>
									<td>adolescent</td>
									<td>مراهق</td>
								</tr>
								<tr>
									<td>Twin</td>
									<td>jumeaux</td>
									<td>التوأم</td>
								</tr>
								<tr>
									<td>Uncle</td>
									<td>oncle</td>
									<td>عم / خال</td>
								</tr>
								<tr>
									<td>Wife</td>
									<td>femme</td>
									<td>الزوجة</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/maisonlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Maison<?php endif; if($langue === 'english'): ?>House<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="maison.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/mariagelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="mariage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		