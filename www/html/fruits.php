<?php
		$titrefr = "FRUITS";
		$titreang = "FRUITS";
		$bg = "./assets/img/bgtheme/fruitsbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Fruits<?php endif; if($langue === 'english'): ?>Fruits<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de fruit en Anglais - Français - Arabe">
		<meta name="keywords" content="lexique, fruits, fruit, arbre, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, sec, fraiche, frais, fresh, nutritionnelle, nutritional, vitamine, c, d, a, b, e">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Fruits<?php endif; if($langue === 'english'): ?>Fruits<?php endif; ?></h1>

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
									<td class="soustitre">Dried fruit </td>
									<td class="soustitre">fruit sec</td>
									<td class="soustitre">فاكهة جافة</td>
								</tr>
								<tr>
									<td>Almond</td>
									<td>Amande</td>
									<td>لوز</td>
								</tr>
								<tr>
									<td>Cashew nut</td>
									<td>Noix de cajou</td>
									<td>جوز الكاجو</td>
								</tr>
								<tr>
									<td>Chestnut</td>
									<td>Châtaigne</td>
									<td>كستناء</td>
								</tr>
								<tr>
									<td>Coconut</td>
									<td>Noix de coco</td>
									<td>جوز الهند</td>
								</tr>
								<tr>
									<td>Date</td>
									<td>datte</td>
									<td>تمر</td>
								</tr>
								<tr>
									<td>Hazelnut</td>
									<td>Noisette</td>
									<td>بندق</td>
								</tr>
								<tr>
									<td>Macadamia nut</td>
									<td>Noix de macadamia</td>
									<td>المكاديميا المكسرات</td>
								</tr>
								<tr>
									<td>Peanut</td>
									<td>Cacahuète</td>
									<td>الفول السوداني</td>
								</tr>
								<tr>
									<td>Pecan nuts</td>
									<td>Noix de pécan</td>
									<td>جوز البقان</td>
								</tr>
								<tr>
									<td>Pistachio</td>
									<td>Pistache</td>
									<td>فستق</td>
								</tr>
								<tr>
									<td>Tamarind</td>
									<td>Tamarin</td>
									<td>تمر هندي</td>
								</tr>
								<tr>
									<td>Walnut</td>
									<td>Noix</td>
									<td>جوز</td>
								</tr>

								<tr>
									<td class="soustitre">Red berry</td>
									<td class="soustitre">Fruit rouge</td>
									<td class="soustitre">الفاكهة الحمراء</td>
								</tr>
								<tr>
									<td>Aronia</td>
									<td>Aronia</td>
									<td>أرونيا</td>
								</tr>
								<tr>
									<td>Blackberry</td>
									<td>mûre</td>
									<td>العليق</td>
								</tr>
								<tr>
									<td>Blackcurrant</td>
									<td>cassis</td>
									<td>عنب الثعلب</td>
								</tr>
								<tr>
									<td>Blueberry</td>
									<td>myrtille</td>
									<td>توت بري</td>
								</tr>
								<tr>
									<td>Fraise des bois</td>
									<td>Groseille à maquereau</td>
									<td>الكشمش</td>
								</tr>
								<tr>
									<td>Grape</td>
									<td>raisin</td>
									<td>عنب</td>
								</tr>
								<tr>
									<td>huckleberry</td>
									<td>airelle</td>
									<td>عنب الدب</td>
								</tr>
								<tr>
									<td>Mirabelle</td>
									<td>Mirabelle</td>
									<td>ميرابل</td>
								</tr>
								<tr>
									<td>Morello</td>
									<td>Griotte</td>
									<td>موريلو</td>
								</tr>
								<tr>
									<td>Muroise</td>
									<td>Mûroise</td>
									<td>توت لوغان</td>
								</tr>
								<tr>
									<td>Pomegranate</td>
									<td>grenade</td>
									<td>رمانة</td>
								</tr>
								<tr>
									<td>Raspberry</td>
									<td>framboise</td>
									<td>التوت</td>
								</tr>
								<tr>
									<td>Strawberry</td>
									<td>fraise</td>
									<td>الفراولة</td>
								</tr>
								<tr>
									<td>Sweet Cherry</td>
									<td>Merise</td>
									<td>حلوة الكرز</td>
								</tr>


								<tr>
									<td class="soustitre">Stone fruit</td>
									<td class="soustitre">Fruit à noyaux</td>
									<td class="soustitre">فاكهة الحجر</td>
								</tr>
								<tr>
									<td>African plum</td>
									<td>safou</td>
									<td>البرقوق الأفريقي</td>
								</tr>
								<tr>
									<td>Avocado</td>
									<td>avocat</td>
									<td>أفوكادو</td>
								</tr>
								<tr>
									<td>Cherry</td>
									<td>cerise</td>
									<td>الكرز</td>
								</tr>
								<tr>
									<td>damson</td>
									<td>Quetsche</td>
									<td>الدمسون</td>
								</tr>
								<tr>
									<td>Durian</td>
									<td>durian</td>
									<td>دوريان</td>
								</tr>
								<tr>
									<td>Jujube</td>
									<td>Jujube</td>
									<td>عناب</td>
								</tr>
								<tr>
									<td>Lychee</td>
									<td>Litchi</td>
									<td>ليتشي</td>
								</tr>
								<tr>
									<td>Morello</td>
									<td>Griotte</td>
									<td>موريلو</td>
								</tr>
								<tr>
									<td>Nectarine</td>
									<td>Nectarine</td>
									<td>زليقة</td>
								</tr>
								<tr>
									<td>Peach</td>
									<td>Pêche</td>
									<td>خوخ</td>
								</tr>
								<tr>
									<td>Plum</td>
									<td>Prune</td>
									<td>برقوق</td>
								</tr>
								<tr>
									<td>Rambutan</td>
									<td>Ramboutan</td>
									<td>الرامبوتان</td>
								</tr>


								<tr>
									<td class="soustitre">Yellow fruit</td>
									<td class="soustitre">Fruit  jaune</td>
									<td class="soustitre">فاكهة صفراء</td>
								</tr>
								<tr>
									<td>Apple</td>
									<td>pomme</td>
									<td>تفاحة</td>
								</tr>
								<tr>
									<td>Banana</td>
									<td>banane</td>
									<td>موز</td>
								</tr>
								<tr>
									<td>Bergamot</td>
									<td>Bergamote</td>
									<td>البرغموت</td>
								</tr>
								<tr>
									<td>Citron</td>
									<td>Cédrat</td>
									<td>الأترج</td>
								</tr>
								<tr>
									<td>Lemon</td>
									<td>citron</td>
									<td>ليمونة</td>
								</tr>
								<tr>
									<td>Medlar</td>
									<td>Nèfle</td>
									<td>المشملة</td>
								</tr>
								<tr>
									<td>Mirabelle</td>
									<td>Mirabelle</td>
									<td>ميرابل</td>
								</tr>
								<tr>
									<td>Pear</td>
									<td>poire</td>
									<td>كمثرى</td>
								</tr>
								<tr>
									<td>Quince</td>
									<td>Coing</td>
									<td>سفرجل</td>
								</tr>
								<tr>
									<td>Yuzu</td>
									<td>Yuzu</td>
									<td>يوزو</td>
								</tr>

								
								<tr>
									<td class="soustitre">Exotic fruit</td>
									<td class="soustitre">Fruit exotique</td>
									<td class="soustitre">الفاكهة الغريبة</td>
								</tr>
								<tr>
									<td>Acai</td>
									<td>Açaï</td>
									<td>أكي</td>
								</tr>
								<tr>
									<td>African plum</td>
									<td>safou</td>
									<td>البرقوق الأفريقي</td>
								</tr>
								<tr>
									<td>Avocado</td>
									<td>avocat</td>
									<td>أفوكادو</td>
								</tr>
								<tr>
									<td>Banana</td>
									<td>banane</td>
									<td>موز</td>
								</tr>
								<tr>
									<td>carambola</td>
									<td>Carambole</td>
									<td>فاكهة النجمة</td>
								</tr>
								<tr>
									<td>Date</td>
									<td>Datte</td>
									<td>تمر</td>
								</tr>
								<tr>
									<td>Granadilla</td>
									<td>Grenadille</td>
									<td>جارنادايلا</td>
								</tr>
								<tr>
									<td>Guava</td>
									<td>Goyave</td>
									<td>جوافة</td>
								</tr>
								<tr>
									<td>Jaboticaba</td>
									<td>Jaboticaba</td>
									<td>جابوتيكابا</td>
								</tr>
								<tr>
									<td>Kiwi</td>
									<td>kiwi</td>
									<td>كيوي</td>
								</tr>
								<tr>
									<td>Lychee</td>
									<td>Litchi</td>
									<td>ليتشي</td>
								</tr>
								<tr>
									<td>Mango</td>
									<td>mangue</td>
									<td>مانجو</td>
								</tr>
								<tr>
									<td>Mangosteen</td>
									<td>mangoustan</td>
									<td>مانغوستين</td>
								</tr>
								<tr>
									<td>Papaya</td>
									<td>papaye</td>
									<td>بابايا</td>
								</tr>
								<tr>
									<td>Rambutan</td>
									<td>Ramboutan</td>
									<td>الرامبوتان</td>
								</tr>
								<tr>
									<td>sapodilla</td>
									<td>Sapotille</td>
									<td>سبوتة مألوفة</td>
								</tr>
								<tr>
									<td>Star apple</td>
									<td>Caïmite</td>
									<td>نجمة التفاح</td>
								</tr>


								<tr>
									<td class="soustitre">Citrus fruit</td>
									<td class="soustitre">Agrume</td>
									<td class="soustitre">الحمضيات</td>
								</tr>
								<tr>
									<td>Bergamot</td>
									<td>Bergamote</td>
									<td>البرغموت</td>
								</tr>
								<tr>
									<td>Bitter orange</td>
									<td>Bigaradier</td>
									<td>نارنج</td>
								</tr>
								<tr>
									<td>blood orange</td>
									<td>Orange sanguine</td>
									<td>برتقال الدم</td>
								</tr>
								<tr>
									<td>Calamondin</td>
									<td>Calamondin</td>
									<td>كلمنتينا</td>
								</tr>
								<tr>
									<td>Citron</td>
									<td>Cédrat</td>
									<td>الأترج</td>
								</tr>
								<tr>
									<td>Clementine</td>
									<td>Clémentine</td>
									<td>كليمنتين</td>
								</tr>
								<tr>
									<td>Grapefruit</td>
									<td>pamplemousse</td>
									<td>جريب فروت</td>
								</tr>
								<tr>
									<td>Kumquat</td>
									<td>Kumquat</td>
									<td>كمكوات</td>
								</tr>
								<tr>
									<td>Lemon</td>
									<td>citron</td>
									<td>ليمونة</td>
								</tr>
								<tr>
									<td>Lime</td>
									<td>Citron vert</td>
									<td>ليمون أخضر</td>
								</tr>
								<tr>
									<td>Mandarin</td>
									<td>Mandarine</td>
									<td>اليوسفي</td>
								</tr>
								<tr>
									<td>Mineola</td>
									<td>Mineola</td>
									<td>مينيولا</td>
								</tr>
								<tr>
									<td>Orange</td>
									<td>Orange</td>
									<td>برتقال</td>
								</tr>
								<tr>
									<td>Yuzu</td>
									<td>Yuzu</td>
									<td>يوزو</td>
								</tr>


								<tr>
									<td class="soustitre">Green fruit</td>
									<td class="soustitre">Fruit vert</td>
									<td class="soustitre">الفاكهة الخضراء</td>
								</tr>
								<tr>
									<td>Apple</td>
									<td>pomme</td>
									<td>تفاحة</td>
								</tr>
								<tr>
									<td>Guava</td>
									<td>Goyave</td>
									<td>جوافة</td>
								</tr>
								<tr>
									<td>Grapes</td>
									<td>Raisin</td>
									<td>عنب</td>
								</tr>
								<tr>
									<td>Lime</td>
									<td>Citron vert</td>
									<td>ليمون أخضر</td>
								</tr>
								<tr>
									<td>Papaya</td>
									<td>Papaye</td>
									<td>بابايا</td>
								</tr>
								<tr>
									<td>Pear</td>
									<td>poire</td>
									<td>كمثرى</td>
								</tr>
								<tr>
									<td>Watermelon</td>
									<td>Pastèque</td>
									<td>بطيخ</td>
								</tr>


								<tr>
									<td class="soustitre">Orange fruit</td>
									<td class="soustitre">Fruit orange</td>
									<td class="soustitre">فاكهة البرتقال</td>
								</tr>
								<tr>
									<td>Apricot</td>
									<td>Abricot</td>
									<td>مشمش</td>
								</tr>
								<tr>
									<td>Bitter orange</td>
									<td>Bigaradier</td>
									<td>نارنج</td>
								</tr>
								<tr>
									<td>blood orange</td>
									<td>Orange sanguine</td>
									<td>برتقال الدم</td>
								</tr>
								<tr>
									<td>Calamondin</td>
									<td>Calamondin</td>
									<td>كلمنتينا</td>
								</tr>
								<tr>
									<td>Clementine</td>
									<td>Clémentine</td>
									<td>كليمنتين</td>
								</tr>
								<tr>
									<td>Grapefruit</td>
									<td>pamplemousse</td>
									<td>جريب فروت</td>
								</tr>
								<tr>
									<td>Kaki</td>
									<td>kaki</td>
									<td>كاكي</td>
								</tr>
								<tr>
									<td>Kumquat</td>
									<td>Kumquat</td>
									<td>كمكوات</td>
								</tr>
								<tr>
									<td>Mandarin</td>
									<td>Mandarine</td>
									<td>اليوسفي</td>
								</tr>
								<tr>
									<td>Mineola</td>
									<td>Mineola</td>
									<td>مينيولا</td>
								</tr>
								<tr>
									<td>Mirabelle</td>
									<td>Mirabelle</td>
									<td>ميرابل</td>
								</tr>
								<tr>
									<td>Orange</td>
									<td>Orange</td>
									<td>برتقال</td>
								</tr>
								<tr>
									<td>Peach</td>
									<td>Pêche</td>
									<td>خوخ</td>
								</tr>
								<tr>
									<td>Pineapple</td>
									<td>Ananas</td>
									<td>أناناس</td>
								</tr>


								<tr>
									<td class="soustitre">Other fruits</td>
									<td class="soustitre">Autres fruits</td>
									<td class="soustitre">فواكه أخرى</td>
								</tr>
								<tr>
									<td>Cherimoya</td>
									<td>Chérimole</td>
									<td>شيريموياز</td>
								</tr>
								<tr>
									<td>Dragon fruit</td>
									<td>Fruit du dragon</td>
									<td>فاكهة التنين</td>
								</tr>
								<tr>
									<td>Fig</td>
									<td>figue</td>
									<td>تين</td>
								</tr>
								<tr>
									<td>Jackfruit</td>
									<td>fruit de jacquier</td>
									<td>الكاكايا</td>
								</tr>
								<tr>
									<td>Melon</td>
									<td>melon</td>
									<td>شمام</td>
								</tr>
								<tr>
									<td>Pitaya</td>
									<td>Pitaya</td>
									<td>بيتايا</td>
								</tr>
								<tr>
									<td>Raisin</td>
									<td>raisin sec</td>
									<td>زبيب</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/legumeslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Légumes<?php endif; if($langue === 'english'): ?>Vegetables<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="legumes.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nourriturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nourriture.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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