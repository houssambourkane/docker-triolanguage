<?php
		$titrefr = "BRICOLAGE";
		$titreang = "DIY";
		$bg = "./assets/img/bgtheme/bricolagebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Bricolage<?php endif; if($langue === 'english'): ?>DIY<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de bricolage en Anglais - Français - Arabe">
		<meta name="keywords" content="bricolage, DIY, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Bricolage<?php endif; if($langue === 'english'): ?>DIY<?php endif; ?></h1>

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
									<td class="soustitre">Diy jobs</td>
									<td class="soustitre">métiers de bricolage</td>
									<td class="soustitre">DIY مهنة </td>
								</tr>
								<tr>
									<td>Carpentry</td>
									<td>menuiserie</td>
									<td>نجارة</td>
								</tr>
								<tr>
									<td>Electricity</td>
									<td>électricité</td>
									<td>كهرباء</td>
								</tr>
								<tr>
									<td>Leatherwork</td>
									<td>travail du cuir</td>
									<td>صناعة الجلود</td>
								</tr>
								<tr>
									<td>Masonry</td>
									<td>maçonnerie</td>
									<td>البناء</td>
								</tr>
								<tr>
									<td>painter/painting</td>
									<td>peintre/peinture</td>
									<td>طلاء</td>
								</tr>
								<tr>
									<td>Plumbing</td>
									<td>plomberie</td>
									<td>السباكة</td>
								</tr>
								<tr>
									<td>Sculpture</td>
									<td>sculpture</td>
									<td>النحت</td>
								</tr>
								<tr>
									<td>Upholstery</td>
									<td>tapisserie</td>
									<td>تنجيد</td>
								</tr>
								<tr>
									<td class="soustitre">DIY tools (do-it-yourself)</td>
									<td class="soustitre">Outils de bricolage</td>
									<td class="soustitre">DIY أدوات</td>
								</tr>
								<tr>
									<td>Anvil</td>
									<td>enclume</td>
									<td>سندان</td>
								</tr>
								<tr>
									<td>Axe</td>
									<td>hache</td>
									<td>فأس</td>
								</tr>
								<tr>
									<td>Blade</td>
									<td>lame</td>
									<td>نصل</td>
								</tr>
								<tr>
									<td>Blowtorch</td>
									<td>Chalumeau</td>
									<td>موقد اللحام</td>
								</tr>
								<tr>
									<td>Bolt</td>
									<td>boulon</td>
									<td>مسمار ملولب</td>
								</tr>
								<tr>
									<td>Bracket</td>
									<td>équerre</td>
									<td>قوس</td>
								</tr>
								<tr>
									<td>Brick</td>
									<td>brique</td>
									<td>قالب طوب</td>
								</tr>
								<tr>
									<td>Cement</td>
									<td>ciment</td>
									<td>أسمنت</td>
								</tr>
								<tr>
									<td>Chainsaw</td>
									<td>tronçonneuse</td>
									<td>المنشار</td>
								</tr>
								<tr>
									<td>Chisel</td>
									<td>burin</td>
									<td>إزميل</td>
								</tr>
								<tr>
									<td>Circular saw</td>
									<td>Scie circulaire</td>
									<td>منشار دائري</td>
								</tr>
								<tr>
									<td>Clamp</td>
									<td>Serre-joint</td>
									<td>ثبت بملزم</td>
								</tr>
								<tr>
									<td>Cord/rope</td>
									<td>corde</td>
									<td>الحبل</td>
								</tr>
								<tr>
									<td>Crimper</td>
									<td>Pince</td>
									<td>كماشة</td>
								</tr>
								<tr>
									<td>Cutter</td>
									<td>cutter</td>
									<td>القاطع</td>
								</tr>
								<tr>
									<td>Drill</td>
									<td>Perceuse</td>
									<td>ثاقب</td>
								</tr>
								<tr>
									<td>Electric screwdriver</td>
									<td>Visseuse électrique</td>
									<td>مفك كهربائي</td>
								</tr>
								<tr>
									<td>Extension cord</td>
									<td>rallonge</td>
									<td>سلك توصيل</td>
								</tr>
								<tr>
									<td>Flashlight</td>
									<td>lampe de poche</td>
									<td>مصباح يدوي</td>
								</tr>
								<tr>
									<td>Gloves</td>
									<td>gants</td>
									<td>قفازات</td>
								</tr>
								<tr>
									<td>Grinder</td>
									<td>meuleuse</td>
									<td>طاحونة</td>
								</tr>
								<tr>
									<td>Hammer</td>
									<td>Marteau</td>
									<td>مطرقة</td>
								</tr>
								<tr>
									<td>Handle</td>
									<td>manche</td>
									<td>مقبض</td>
								</tr>
								<tr>
									<td>Knife</td>
									<td>couteau</td>
									<td>سكين</td>
								</tr>
								<tr>
									<td>Ladder</td>
									<td>échelle</td>
									<td>سلم</td>
								</tr>
								<tr>
									<td>Mallet</td>
									<td>maillet</td>
									<td>مطرقة خشبية</td>
								</tr>
								<tr>
									<td>Metal file</td>
									<td>Lime à métaux</td>
									<td>ملف معدني</td>
								</tr>
								<tr>
									<td>Nail</td>
									<td>clou</td>
									<td>مسمار</td>
								</tr>
								<tr>
									<td>Pallet</td>
									<td>palette</td>
									<td>لوحة</td>
								</tr>
								<tr>
									<td>Pickaxe</td>
									<td>pioche</td>
									<td>معول</td>
								</tr>
								<tr>
									<td>Pinceau</td>
									<td>paint brush</td>
									<td>فرشاة الرسم</td>
								</tr>
								<tr>
									<td>Pipe</td>
									<td>tuyau</td>
									<td>أنبوب</td>
								</tr>
								<tr>
									<td>Ruler</td>
									<td>règle</td>
									<td>مسطرة</td>
								</tr>
								<tr>
									<td>Sander</td>
									<td>Ponceuse</td>
									<td>ساندر</td>
								</tr>
								<tr>
									<td>Sandpaper</td>
									<td>Papier de verre</td>
									<td>ورق زجاج</td>
								</tr>
								<tr>
									<td>Saw</td>
									<td>Scie</td>
									<td>منشار</td>
								</tr>
								<tr>
									<td>Scissors</td>
									<td>Ciseaux</td>
									<td>مقص</td>
								</tr>
								<tr>
									<td>Scotch</td>
									<td>scotch</td>
									<td>سكوتش</td>
								</tr>
								<tr>
									<td>Screw</td>
									<td>Vis</td>
									<td>برغي</td>
								</tr>
								<tr>
									<td>Screwdriver</td>
									<td>Tournevis</td>
									<td>مفك براغي</td>
								</tr>
								<tr>
									<td>Shovel</td>
									<td>pelle</td>
									<td>مجرفة</td>
								</tr>
								<tr>
									<td>Sickle</td>
									<td>faucille</td>
									<td>منجل</td>
								</tr>
								<tr>
									<td>spanner</td>
									<td>Clé plate</td>
									<td>مفتاح البراغي</td>
								</tr>
								<tr>
									<td>Spirit level</td>
									<td>Niveau à bulle</td>
									<td>مستوى الروح</td>
								</tr>
								<tr>
									<td>Stapler</td>
									<td>agrafeuse</td>
									<td>كابسة ورق</td>
								</tr>
								<tr>
									<td>Stepladder</td>
									<td>escabeau</td>
									<td>سلم نقال</td>
								</tr>
								<tr>
									<td>String/thread</td>
									<td>ficelle/fil</td>
									<td>خيط</td>
								</tr>
								<tr>
									<td>Tape measure</td>
									<td>Mètre à ruban</td>
									<td>شريط القياس</td>
								</tr>
								<tr>
									<td>Tile</td>
									<td>carreau</td>
									<td>بلاط</td>
								</tr>
								<tr>
									<td>Toolbox</td>
									<td>boîte à outils</td>
									<td>صندوق الأدوات</td>
								</tr>
								<tr>
									<td>Trowel</td>
									<td>truelle</td>
									<td>مجرفة</td>
								</tr>
								<tr>
									<td>Wheelbarrow</td>
									<td>brouette</td>
									<td>عربة يدوية</td>
								</tr>
								<tr>
									<td>Wood rasps</td>
									<td>Râpes à bois</td>
									<td>مشابك خشبية</td>
								</tr>
								<tr>
									<td>Wrench</td>
									<td>Clé à molette</td>
									<td>مفتاح الربط</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/materiauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les matériaux<?php endif; if($langue === 'english'): ?>Materials<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="materiaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

