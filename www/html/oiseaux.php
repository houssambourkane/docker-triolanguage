<?php
		$titrefr = "OISEAUX";
		$titreang = "BIRDS";
		$bg = "./assets/img/bgtheme/oiseauxbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Les oiseaux<?php endif; if($langue === 'english'): ?>Birds<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des oiseaux en Anglais - Français - Arabe">
		<meta name="keywords" content="oiseaux, birds, bird, volant, voler, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, niche, cage">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Les oiseaux<?php endif; if($langue === 'english'): ?>Birds<?php endif; ?></h1>

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
									<td>albatross</td>
									<td>albatros</td>
									<td>ألباتروس</td>
								</tr>
								<tr>
									<td>canary</td>
									<td>canari</td>
									<td>كناري</td>
								</tr>
								<tr>
									<td>cassowary</td>
									<td>casoar</td>
									<td>كاسوري</td>
								</tr>
								<tr>
									<td>chick</td>
									<td>poussin</td>
									<td>كتكوت</td>
								</tr>
								<tr>
									<td>chicken</td>
									<td>poulet</td>
									<td>دجاج</td>
								</tr>
								<tr>
									<td>cock</td>
									<td>coq</td>
									<td>ديك</td>
								</tr>
								<tr>
									<td>cockatoo</td>
									<td>cacatoès</td>
									<td>الككتوه ببغاء</td>
								</tr>
								<tr>
									<td>cormorant</td>
									<td>cormoran</td>
									<td>الغاق طائر مائي</td>
								</tr>
								<tr>
									<td>crane</td>
									<td>grue</td>
									<td>طائر الكركي</td>
								</tr>
								<tr>
									<td>crow</td>
									<td>corbeau</td>
									<td>أسحم</td>
								</tr>
								<tr>
									<td>cuckoo</td>
									<td>coucou</td>
									<td>الوقواق</td>
								</tr>
								<tr>
									<td>dove</td>
									<td>Colombe</td>
									<td>حمامة</td>
								</tr>
								<tr>
									<td>duck</td>
									<td>canard</td>
									<td>بط</td>
								</tr>
								<tr>
									<td>eagle</td>
									<td>aigle</td>
									<td>نسر</td>
								</tr>
								<tr>
									<td>egret</td>
									<td>aigrette</td>
									<td>البلشون الأبيض</td>
								</tr>
								<tr>
									<td>emu</td>
									<td>émeu</td>
									<td>الإمو طائر استرالي</td>
								</tr>
								<tr>
									<td>falcon</td>
									<td>faucon</td>
									<td>صقر</td>
								</tr>
								<tr>
									<td>goose</td>
									<td>oie</td>
									<td>أوز</td>
								</tr>
								<tr>
									<td>gull</td>
									<td>mouette</td>
									<td>نورس طائر مائي</td>
								</tr>
								<tr>
									<td>hen</td>
									<td>poule</td>
									<td>دجاجة</td>
								</tr>
								<tr>
									<td>heron</td>
									<td>héron</td>
									<td>بلشون</td>
								</tr>
								<tr>
									<td>hummingbird</td>
									<td>colibri</td>
									<td>طنين الطيور</td>
								</tr>
								<tr>
									<td>ibis</td>
									<td>ibis</td>
									<td>أبو منجل</td>
								</tr>
								<tr>
									<td>jay</td>
									<td>geai</td>
									<td>قيق</td>
								</tr>
								<tr>
									<td>kestrel</td>
									<td>crécerelle</td>
									<td>العاسوق</td>
								</tr>
								<tr>
									<td>kingfisher</td>
									<td>martin-pêcheur</td>
									<td>الرفراف طائر</td>
								</tr>
								<tr>
									<td>magpie</td>
									<td>pie</td>
									<td>غراب العقعق</td>
								</tr>
								<tr>
									<td>osprey</td>
									<td>balbuzard</td>
									<td>العقاب النسارية</td>
								</tr>
								<tr>
									<td>ostrich</td>
									<td>autruche</td>
									<td>نعامة</td>
								</tr>
								<tr>
									<td>owl</td>
									<td>hibou</td>
									<td>بومة</td>
								</tr>
								<tr>
									<td>owl</td>
									<td>hibou</td>
									<td>بومة</td>
								</tr>
								<tr>
									<td>parakeet</td>
									<td>perruche</td>
									<td>ببغاء</td>
								</tr>
								<tr>
									<td>parrot</td>
									<td>perroquet</td>
									<td>ببغاء</td>
								</tr>
								<tr>
									<td>partridge</td>
									<td>perdrix</td>
									<td>الحجل</td>
								</tr>
								<tr>
									<td>peacock</td>
									<td>paon</td>
									<td>طاووس</td>
								</tr>
								<tr>
									<td>pelican</td>
									<td>pélican</td>
									<td>بجع</td>
								</tr>
								<tr>
									<td>penguin</td>
									<td>pingouin</td>
									<td>البطريق</td>
								</tr>
								<tr>
									<td>petrel</td>
									<td>pétrel</td>
									<td>طائر النوء</td>
								</tr>
								<tr>
									<td>pheasant</td>
									<td>faisan</td>
									<td>التدرج</td>
								</tr>
								<tr>
									<td>pigeon</td>
									<td>pigeon</td>
									<td>حمامة</td>
								</tr>
								<tr>
									<td>pink flamingo</td>
									<td>flamand rose</td>
									<td>البشروس</td>
								</tr>
								<tr>
									<td>quail</td>
									<td>caille</td>
									<td>السمان</td>
								</tr>
								<tr>
									<td>robin</td>
									<td>rouge-gorge</td>
									<td>أبو الحناء</td>
								</tr>
								<tr>
									<td>seagull</td>
									<td>goéland</td>
									<td>نورس</td>
								</tr>
								<tr>
									<td>sparrow</td>
									<td>moineau</td>
									<td>عصفور</td>
								</tr>
								<tr>
									<td>sparrowhawk</td>
									<td>épervier</td>
									<td>الباشق</td>
								</tr>
								<tr>
									<td>stork</td>
									<td>cigogne</td>
									<td>اللقلق</td>
								</tr>
								<tr>
									<td>swallow</td>
									<td>hirondelle</td>
									<td>الخطاف</td>
								</tr>
								<tr>
									<td>swan</td>
									<td>cygne</td>
									<td>بجعة</td>
								</tr>
								<tr>
									<td>titmouse</td>
									<td>mésange</td>
									<td>القرقف</td>
								</tr>
								<tr>
									<td>toucan</td>
									<td>toucan</td>
									<td>الطوقان</td>
								</tr>
								<tr>
									<td>turkey</td>
									<td>dinde</td>
									<td>ديك رومي</td>
								</tr>
								<tr>
									<td>vulture</td>
									<td>vautour</td>
									<td>نسر</td>
								</tr>
								<tr>
									<td>wader</td>
									<td>échassier</td>
									<td>الطائر المخوض</td>
								</tr>
								<tr>
									<td>woodpecker</td>
									<td>pic</td>
									<td>نقار الخشب</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/insectelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les insectes<?php endif; if($langue === 'english'): ?>Insects<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="insecte.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/animauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Animaux<?php endif; if($langue === 'english'): ?>Animals<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="animaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		