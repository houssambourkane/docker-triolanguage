<?php
		$titrefr = "VETEMENTS";
		$titreang = "CLOTHING";
		$bg = "./assets/img/bgtheme/vetementbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Vêtement<?php endif; if($langue === 'english'): ?>Clothing<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des vêtements en Anglais - Français - Arabe">
	<meta name="keywords" content="vocabulaire, dress, dressing, chapeaux, vêtements, clothing, vocabulary, mode, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Vêtement<?php endif; if($langue === 'english'): ?>Clothing<?php endif; ?></h1>

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
								<td class="soustitre">On the head</td>
								<td class="soustitre">Sur la tête</td>
								<td class="soustitre">على الرأس</td>
							</tr>
							<tr>
								<td>Beanie</td>
								<td>bonnet</td>
								<td>قبعة صغيرة</td>
							</tr>
							<tr>
								<td>Beret</td>
								<td>béret</td>
								<td>قلنسوه قبعة</td>
							</tr>
							<tr>
								<td>Bowler hat</td>
								<td>chapeau melon</td>
								<td>قبعة سوداء مستديرة</td>
							</tr>
							<tr>
								<td>Cap</td>
								<td>casquette</td>
								<td>كاب</td>
							</tr>
							<tr>
								<td>Swimming cap</td>
								<td>bonnet de bain</td>
								<td>قبعة السباحة</td>
							</tr>

							<tr>
								<td class="soustitre">On the body</td>
								<td class="soustitre">Sur le corps</td>
								<td class="soustitre">على الجسم</td>
							</tr>
							<tr>
								<td>anorak</td>
								<td>anorak</td>
								<td>معطف مشمع مع قبعة</td>
							</tr>
							<tr>
								<td>Bath robe</td>
								<td>peignoir de bain</td>
								<td>رداء الحمام</td>
							</tr>
							<tr>
								<td>Belt</td>
								<td>ceinture</td>
								<td>حزام</td>
							</tr>
							<tr>
								<td>Bikini</td>
								<td>bikini</td>
								<td>بيكيني</td>
							</tr>
							<tr>
								<td>Blouse</td>
								<td>chemisier</td>
								<td>بلوزة</td>
							</tr>
							<tr>
								<td>Bow tie</td>
								<td>nœud papillon</td>
								<td>ربطة القوس</td>
							</tr>
							<tr>
								<td>Boxer shorts</td>
								<td>boxer-short</td>
								<td>شورتات الملاكم</td>
							</tr>
							<tr>
								<td>Bra</td>
								<td>soutien-gorge</td>
								<td>حمالة صدر</td>
							</tr>
							<tr>
								<td>Braces/suspenders</td>
								<td>bretelles</td>
								<td>حمالات البنطلون</td>
							</tr>
							<tr>
								<td>Button</td>
								<td>bouton</td>
								<td>زر</td>
							</tr>
							<tr>
								<td>Coat</td>
								<td>manteau</td>
								<td>معطف</td>
							</tr>
							<tr>
								<td>Dress</td>
								<td>robe</td>
								<td>فستان</td>
							</tr>
							<tr>
								<td>Gloves</td>
								<td>gants</td>
								<td>قفازات</td>
							</tr>
							<tr>
								<td>Jacket</td>
								<td>veste</td>
								<td>السترة</td>
							</tr>
							<tr>
								<td>Jeans</td>
								<td>jean</td>
								<td>جينز</td>
							</tr>
							<tr>
								<td>Jersey</td>
								<td>tricot</td>
								<td>جيرسي</td>
							</tr>
							<tr>
								<td>Knickers</td>
								<td>culotte</td>
								<td>كلسون</td>
							</tr>
							<tr>
								<td>Leather jacket</td>
								<td>veste en cuir</td>
								<td>سترة جلدية</td>
							</tr>
							<tr>
								<td>Miniskirt</td>
								<td>minijupe</td>
								<td>تنورة قصيرة</td>
							</tr>
							<tr>
								<td>Nightdress</td>
								<td>chemise de nuit</td>
								<td>قميص نوم</td>
							</tr>
							<tr>
								<td>Outfit</td>
								<td>tenue</td>
								<td>ملابس</td>
							</tr>
							<tr>
								<td>Overalls</td>
								<td>salopette</td>
								<td>الدنغري</td>
							</tr>
							<tr>
								<td>Overcoat</td>
								<td>pardessus</td>
								<td>معطف</td>
							</tr>
							<tr>
								<td>Pajama/pyjamas</td>
								<td>pyjama</td>
								<td>لباس نوم</td>
							</tr>
							<tr>
								<td>Panties/underpants</td>
								<td>sous-vêtements/slip/caleçon</td>
								<td>سراويل تحتية</td>
							</tr>
							<tr>
								<td>Pant</td>
								<td>pantalon</td>
								<td>سروال</td>
							</tr>
							<tr>
								<td>Pantyhose</td>
								<td>collant</td>
								<td>جوارب طويلة</td>
							</tr>
							<tr>
								<td>Raincoat</td>
								<td>imperméable</td>
								<td>معطف واق من المطر</td>
							</tr>
							<tr>
								<td>Scarf</td>
								<td>écharpe</td>
								<td>وشاح</td>
							</tr>
							<tr>
								<td>Shawl</td>
								<td>châle</td>
								<td>شال</td>
							</tr>
							<tr>
								<td>Shirt</td>
								<td>chemise</td>
								<td>قميص</td>
							</tr>
							<tr>
								<td>Short</td>
								<td>short</td>
								<td>شورت</td>
							</tr>
							<tr>
								<td>Skirt</td>
								<td>jupe</td>
								<td>تنورة</td>
							</tr>
							<tr>
								<td>Suit</td>
								<td>costume/complet/costard</td>
								<td>بدلة</td>
							</tr>
							<tr>
								<td>Sweater</td>
								<td>pull</td>
								<td>سترة</td>
							</tr>
							<tr>
								<td>Swimming trunks/bathing suit</td>
								<td>maillot de bain</td>
								<td>لباس السباحة</td>
							</tr>
							<tr>
								<td>Tie</td>
								<td>cravate</td>
								<td>ربطة عنق</td>
							</tr>
							<tr>
								<td>Tracksuit</td>
								<td>survêtement</td>
								<td>بدلة رياضية</td>
							</tr>
							<tr>
								<td>T-shirt</td>
								<td>tee-shirt</td>
								<td>تي شيرت</td>
							</tr>
							<tr>
								<td>Undershirt</td>
								<td>maillot de corps</td>
								<td>قميص داخلي</td>
							</tr>
							<tr>
								<td>Uniform</td>
								<td>uniforme</td>
								<td>زي موحد/td>
							</tr>
							<tr>
								<td>Vest</td>
								<td>gilet</td>
								<td>صدرية الرجل</td>
							</tr>
							<tr>
								<td class="soustitre">On the feet</td>
								<td class="soustitre">sur les pieds</td>
								<td class="soustitre">على القدمين</td>
							</tr>
							<tr>
								<td>Ballerina</td>
								<td>Ballerine</td>
								<td>باليرينا</td>
							</tr>
							<tr>
								<td>Boot</td>
								<td>Botte</td>
								<td>حذاء طويل</td>
							</tr>
							<tr>
								<td>Brogue</td>
								<td>Brogue</td>
								<td>البروغ حذاء أيرلندي</td>
							</tr>
							<tr>
								<td>Espadrille</td>
								<td>Espadrille</td>
								<td>اسبادريل</td>
							</tr>
							<tr>
								<td>Heel</td>
								<td>Talon</td>
								<td>كعب</td>
							</tr>
							<tr>
								<td>Oriental slipper</td>
								<td>Babouche</td>
								<td>النعال</td>
							</tr>
							<tr>
								<td>Sandal</td>
								<td>Sandale</td>
								<td>صندل</td>
							</tr>
							<tr>
								<td>Slipper</td>
								<td>Pantoufle</td>
								<td>شبشب</td>
							</tr>
							<tr>
								<td>Socks</td>
								<td>chaussettes</td>
								<td>جوارب</td>
							</tr>

							<tr>
								<td class="soustitre">Accessory</td>
								<td class="soustitre">accessoire</td>
								<td class="soustitre">ملحق</td>
							</tr>
							<tr>
								<td>Bracelet</td>
								<td>Bracelet</td>
								<td>سوار</td>
							</tr>
							<tr>
								<td>Earring</td>
								<td>Boucle d'oreilles</td>
								<td>حلقات للاذن</td>
							</tr>
							<tr>
								<td>Glasses</td>
								<td>Lunette de vue</td>
								<td>نظارات</td>
							</tr>
							<tr>
								<td>Handbag/purse</td>
								<td>Sac à main</td>
								<td>حقيبة اليد</td>
							</tr>
							<tr>
								<td>Jewelry</td>
								<td>Bijoux</td>
								<td>مجوهرات</td>
							</tr>
							<tr>
								<td>Necklace</td>
								<td>Collier</td>
								<td>عقد قلادة</td>
							</tr>
							<tr>
								<td>Pendant</td>
								<td>Pendentif</td>
								<td>قلادة</td>
							</tr>
							<tr>
								<td>Piercing</td>
								<td>Piercing</td>
								<td>ثقب الجسد</td>
							</tr>
							<tr>
								<td>Ring</td>
								<td>Bague</td>
								<td>خاتم</td>
							</tr>
							<tr>
								<td>Sunglasses</td>
								<td>Lunette de soleil</td>
								<td>نظارة شمسية</td>
							</tr>
							<tr>
								<td>Tattoo</td>
								<td>Tatouage</td>
								<td>وشم</td>
							</tr>
							<tr>
								<td>Wallet</td>
								<td>Portefeuille</td>
								<td>محفظة نقود</td>
							</tr>
							<tr>
								<td>Watch</td>
								<td>Montre</td>
								<td>ساعة</td>
							</tr>

							<tr>
								<td class="soustitre">Clothes vocabulary</td>
								<td class="soustitre">Vocabulaires de vêtement</td>
								<td class="soustitre">مفردات الملابس</td>
							</tr>
							<tr>
								<td>Cashmere</td>
								<td>Cachemire</td>
								<td>الكشمير</td>
							</tr>
							<tr>
								<td>Changing room</td>
								<td>cabine d'essayage</td>
								<td>غرفة التبديل</td>
							</tr>
							<tr>
								<td>Cotton</td>
								<td>coton</td>
								<td>قطن</td>
							</tr>
							<tr>
								<td>Felt</td>
								<td>feutre</td>
								<td>لباد</td>
							</tr>
							<tr>
								<td>Flannel</td>
								<td>flanelle</td>
								<td>الفانيلي</td>
							</tr>
							<tr>
								<td>Fur</td>
								<td>fourrure</td>
								<td>فرو</td>
							</tr>
							<tr>
								<td>Leather</td>
								<td>cuir</td>
								<td>جلد</td>
							</tr>
							<tr>
								<td>Nylon</td>
								<td>nylon</td>
								<td>نايلون</td>
							</tr>
							<tr>
								<td>Polyester</td>
								<td>polyester</td>
								<td>البوليستر</td>
							</tr>
							<tr>
								<td>Shoe size</td>
								<td>pointure</td>
								<td>مقاس الحذاء</td>
							</tr>
							<tr>
								<td>Silk</td>
								<td>soie</td>
								<td>حرير</td>
							</tr>
							<tr>
								<td>Size</td>
								<td>taille</td>
								<td>مقاس</td>
							</tr>
							<tr>
								<td>Suede</td>
								<td>daim</td>
								<td>جلد الظباء</td>
							</tr>
							<tr>
								<td>Tweed</td>
								<td>tweed</td>
								<td>بذلة تويدية</td>
							</tr>
							<tr>
								<td>Velours</td>
								<td>velvet</td>
								<td>الفيلور</td>
							</tr>
							<tr>
								<td>Woollen</td>
								<td>laine</td>
								<td>صوفي</td>
							</tr>

							<tr>
								<td class="soustitre">Useful verbs/expressions of clothes</td>
								<td class="soustitre">Verbes/expressions utiles de vêtements </td>
								<td class="soustitre">أفعال /التعبيرات مفيدة للملابس</td>
							</tr>
							<tr>
								<td>To buckle one's belt</td>
								<td>attacher sa ceinture</td>
								<td>ربط حزامه</td>
							</tr>
							<tr>
								<td>To dress up</td>
								<td>s'habiller</td>
								<td>اللباس</td>
							</tr>
							<tr>
								<td>To fasten the bra</td>
								<td>attacher le soutien-gorge</td>
								<td>ربط حمالة الصدر</td>
							</tr>
							<tr>
								<td>To put on</td>
								<td>mettre</td>
								<td>ارتداء</td>
							</tr>
							<tr>
								<td>To put one's shoes on</td>
								<td>se chausser</td>
								<td>لبس حذاء</td>
							</tr>
							<tr>
								<td>To take off</td>
								<td>enlever</td>
								<td>إزالة</td>
							</tr>
							<tr>
								<td>To tie one's shoes</td>
								<td>faire ses lacets</td>
								<td>ربط الأحذية</td>
							</tr>
							<tr>
								<td>To tie one's tie</td>
								<td>attacher sa cravate</td>
								<td>ربط ربطة العنق</td>
							</tr>
							<tr>
								<td>To try on</td>
								<td>essayer</td>
								<td>يجرب</td>
							</tr>
							<tr>
								<td>To undress</td>
								<td>se déshabiller</td>
								<td>لخلع ملابسه</td>
							</tr>
							<tr>
								<td>To wear</td>
								<td>porter</td>
								<td>لبس</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/maquillage.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Maquillage<?php endif; if($langue === 'english'): ?>Make-up<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="maquillage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/couleurslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Couleurs<?php endif; if($langue === 'english'): ?>Colors<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="couleurs.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		