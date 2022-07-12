<?php
		$titrefr = "INSECTES";
		$titreang = "INSECTS";
		$bg = "./assets/img/bgtheme/insectebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Insectes<?php endif; if($langue === 'english'): ?>Insects<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des insectes en Anglais - Français - Arabe">
		<meta name="keywords" content="insecte, insect, arachnides, arachnide, arakne, bug, bugs, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Insectes<?php endif; if($langue === 'english'): ?>Insects<?php endif; ?></h1>

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
									<td>ant</td>
									<td>fourmi</td>
									<td>نملة</td>
								</tr>
								<tr>
									<td>bee</td>
									<td>abeille</td>
									<td>نحلة</td>
								</tr>
								<tr>
									<td>bee hive</td>
									<td>ruche</td>
									<td>خلية النحل</td>
								</tr>
								<tr>
									<td>beetle</td>
									<td>scarabée</td>
									<td>خنفسة سوداء</td>
								</tr>
								<tr>
									<td>bug</td>
									<td>punaise</td>
									<td>بق</td>
								</tr>
								<tr>
									<td>bumble-bee</td>
									<td>bourdon</td>
									<td>الطنانة نحلة ضخمة</td>
								</tr>
								<tr>
									<td>butterfly</td>
									<td>papillon</td>
									<td>فراشة</td>
								</tr>
								<tr>
									<td>caterpillar</td>
									<td>chenille</td>
									<td>يرقانة الفراشة</td>
								</tr>
								<tr>
									<td>cicada</td>
									<td>cigale</td>
									<td>الزيز</td>
								</tr>
								<tr>
									<td>cockchafer</td>
									<td>hanneton</td>
									<td>الدودة البيضاء</td>
								</tr>
								<tr>
									<td>cockroach</td>
									<td>cafard</td>
									<td>صرصور</td>
								</tr>
								<tr>
									<td>cocoon</td>
									<td>cocon</td>
									<td>شرنقة</td>
								</tr>
								<tr>
									<td>cricket</td>
									<td>grillon</td>
									<td>كريكيت</td>
								</tr>
								<tr>
									<td>dragonfly</td>
									<td>libellule</td>
									<td>اليعسوب</td>
								</tr>
								<tr>
									<td>earwig</td>
									<td>perce-oreille</td>
									<td>إبو مقص</td>
								</tr>
								<tr>
									<td>firefly</td>
									<td>luciole</td>
									<td>يراعة</td>
								</tr>
								<tr>
									<td>flea</td>
									<td>puce</td>
									<td>برغوث</td>
								</tr>
								<tr>
									<td>fly</td>
									<td>mouche</td>
									<td>ذبابة</td>
								</tr>
								<tr>
									<td>gnat</td>
									<td>moucheron</td>
									<td>ذبابة صغيرة</td>
								</tr>
								<tr>
									<td>grasshopper</td>
									<td>sauterelle</td>
									<td>جندب</td>
								</tr>
								<tr>
									<td>hornet</td>
									<td>frelon</td>
									<td>زنبور</td>
								</tr>
								<tr>
									<td>horsefly</td>
									<td>taon</td>
									<td>ذبابة الخيل</td>
								</tr>
								<tr>
									<td>insect bite</td>
									<td>piqûre d'insecte</td>
									<td>لدغ الحشرات</td>
								</tr>
								<tr>
									<td>ladybird</td>
									<td>coccinelle</td>
									<td>دعسوقة خنفساء صغيرة</td>
								</tr>
								<tr>
									<td>lice</td>
									<td>poux</td>
									<td>قمل</td>
								</tr>
								<tr>
									<td>maggot</td>
									<td>ver</td>
									<td>دودة</td>
								</tr>
								<tr>
									<td>millepede</td>
									<td>mille-pattes</td>
									<td>أم أربعة و اربعين</td>
								</tr>
								<tr>
									<td>mosquito</td>
									<td>moustique</td>
									<td>بعوض</td>
								</tr>
								<tr>
									<td>moth</td>
									<td>papillon de nuit</td>
									<td>فراشة الليل</td>
								</tr>
								<tr>
									<td>praying mantis</td>
									<td>mante religieuse</td>
									<td>الصلاة السرعوف</td>
								</tr>
								<tr>
									<td>scorpion</td>
									<td>scorpion</td>
									<td>عقرب</td>
								</tr>
								<tr>
									<td>slug</td>
									<td>limace</td>
									<td>يرقانة</td>
								</tr>
								<tr>
									<td>snail</td>
									<td>escargot</td>
									<td>حلزون</td>
								</tr>
								<tr>
									<td>spider</td>
									<td>araignée</td>
									<td>عنكبوت</td>
								</tr>
								<tr>
									<td>spider web</td>
									<td>toile d'araignée</td>
									<td>شبكة العنكبوت</td>
								</tr>
								<tr>
									<td>stick insect</td>
									<td>phasme</td>
									<td>عصا الحشرات</td>
								</tr>
								<tr>
									<td>termite</td>
									<td>termite</td>
									<td>نمل أبيض</td>
								</tr>
								<tr>
									<td>tick</td>
									<td>tique</td>
									<td>قرادة</td>
								</tr>
								<tr>
									<td>wasp</td>
									<td>guêpe</td>
									<td>دبور</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/animauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Animaux<?php endif; if($langue === 'english'): ?>Animals<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="animaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/oiseauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les oiseaux<?php endif; if($langue === 'english'): ?>Birds<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="oiseaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		