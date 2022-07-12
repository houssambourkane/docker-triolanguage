<?php
		$titrefr = "MAISON";
		$titreang = "HOUSE";
		$bg = "./assets/img/bgtheme/maisonbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Maison<?php endif; if($langue === 'english'): ?>House<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de maison en Anglais - Français - Arabe">
		<meta name="keywords" content="maison, house, villa, pièce, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, quartier, neighborhood, cuisine, chambre, salon, salle, bain, plafond, room, kitchen, bedroom, bathroom, toilet, palais, palace, castle, château, appartement, apartment, studio, décoration, decoration, meuble, meubles, furniture, furnitures, home">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Maison<?php endif; if($langue === 'english'): ?>House<?php endif; ?></h1>

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
									<td class="soustitre">The rooms of the house</td>
									<td class="soustitre">Les pièces de la maison</td>
									<td class="soustitre">غرف المنزل</td>
								</tr>
								<tr>
									<td>Backyard</td>
									<td>cours</td>
									<td>الفناء الخلفي</td>
								</tr>
								<tr>
									<td>Balcony</td>
									<td>balcon</td>
									<td>شرفة</td>
								</tr>
								<tr>
									<td>Basement</td>
									<td>cave</td>
									<td>قبو</td>
								</tr>
								<tr>
									<td>Bathroom</td>
									<td>salle de bains</td>
									<td>حمام</td>
								</tr>
								<tr>
									<td>Bedroom</td>
									<td>chambre</td>
									<td>غرفة</td>
								</tr>
								<tr>
									<td>Dining room</td>
									<td>salle à manger</td>
									<td>غرفة الطعام</td>
								</tr>
								<tr>
									<td>Floor</td>
									<td>étage</td>
									<td>طابق</td>
								</tr>
								<tr>
									<td>Frontyard</td>
									<td>cours (devant la maison)</td>
									<td>الفناء الأمامي</td>
								</tr>
								<tr>
									<td>Garage</td>
									<td>garage</td>
									<td>كراج</td>
								</tr>
								<tr>
									<td>Garden</td>
									<td>jardin</td>
									<td>حديقة</td>
								</tr>
								<tr>
									<td>Ground floor</td>
									<td>rez-de-chaussée</td>
									<td>الطابق الأرضي</td>
								</tr>
								<tr>
									<td>Hall</td>
									<td>hall</td>
									<td>صالة</td>
								</tr>
								<tr>
									<td>Hallway</td>
									<td>couloir</td>
									<td>مدخل</td>
								</tr>
								<tr>
									<td>Kitchen</td>
									<td>cuisine</td>
									<td>مطبخ</td>
								</tr>
								<tr>
									<td>Kids room</td>
									<td>chambre d'enfants</td>
									<td>غرفة الأطفال</td>
								</tr>
								<tr>
									<td>Laundry</td>
									<td>laverie</td>
									<td>مكان الغسيل</td>
								</tr>
								<tr>
									<td>Living room</td>
									<td>salon</td>
									<td>صالون</td>
								</tr>
								<tr>
									<td>Parking</td>
									<td>parking</td>
									<td>موقف سيارات</td>
								</tr>
								<tr>
									<td>Roof</td>
									<td>toit</td>
									<td>سقف</td>
								</tr>
								<tr>
									<td>Stairs</td>
									<td>escaliers</td>
									<td>درج</td>
								</tr>

								<tr>
									<th>Useful vocabulary</th>
									<th>Vocabulaire utile</th>
									<th>المفردات المفيدة</th>
								</tr>
								<tr>
									<td>Aircon</td>
									<td>climatiseur</td>
									<td>ايركون</td>
								</tr>
								<tr>
									<td>ironer</td>
									<td>fer à repasser</td>
									<td>مكواة</td>
								</tr>
								<tr>
									<td>ironer</td>
									<td>appartement</td>
									<td>شقة</td>
								</tr>
								<tr>
									<td>Armchair</td>
									<td>fauteuil</td>
									<td>أريكة</td>
								</tr>
								<tr>
									<td>Bed</td>
									<td>lit</td>
									<td>السرير</td>
								</tr>
								<tr>
									<td>Blanket</td>
									<td>couverture</td>
									<td>بطانية</td>
								</tr>
								<tr>
									<td>Blinds</td>
									<td>stores</td>
									<td>stores</td>
								</tr>
								<tr>
									<td>Broom</td>
									<td>balai</td>
									<td>مقشة</td>
								</tr>
								<tr>
									<td>Brush</td>
									<td>brosse</td>
									<td>فرشاة</td>
								</tr>
								<tr>
									<td>Building</td>
									<td>immeuble</td>
									<td>بنيان</td>
								</tr>
								<tr>
									<td>Carpet</td>
									<td>tapis</td>
									<td>سجادة</td>
								</tr>
								<tr>
									<td>Ceiling</td>
									<td>plafond</td>
									<td>سقف</td>
								</tr>
								<tr>
									<td>Central heating</td>
									<td>chauffage central</td>
									<td>التدفئة المركزية</td>
								</tr>
								<tr>
									<td>Chair</td>
									<td>chaise</td>
									<td>كرسي</td>
								</tr>
								<tr>
									<td>Chimney</td>
									<td>cheminée (sur le toit)</td>
									<td>مدخنة</td>
								</tr>
								<tr>
									<td>Clock</td>
									<td>horloge</td>
									<td>ساعة الحائط</td>
								</tr>
								<tr>
									<td>Cupboard</td>
									<td>placard</td>
									<td>مخزنة</td>
								</tr>
								<tr>
									<td>Curtain</td>
									<td>rideau</td>
									<td>ستارة</td>
								</tr>
								<tr>
									<td>Cushion</td>
									<td>coussin</td>
									<td>وسادة</td>
								</tr>
								<tr>
									<td>Door</td>
									<td>porte</td>
									<td>باب</td>
								</tr>
								<tr>
									<td>Doorbell</td>
									<td>sonnette</td>
									<td>الجرس</td>
								</tr>
								<tr>
									<td>Doormat</td>
									<td>paillasson</td>
									<td>ممسحة الأرجل</td>
								</tr>
								<tr>
									<td>Downstairs</td>
									<td>en bas</td>
									<td>الطابق الأسفل</td>
								</tr>
								<tr>
									<td>Drawer</td>
									<td>tiroir</td>
									<td>الساحب</td>
								</tr>
								<tr>
									<td>Dust</td>
									<td>poussière</td>
									<td>غبار</td>
								</tr>
								<tr>
									<td>Fan</td>
									<td>ventilateur</td>
									<td>مروحة</td>
								</tr>
								<tr>
									<td>Fence</td>
									<td>clôture</td>
									<td>سياج</td>
								</tr>
								<tr>
									<td>Fireplace</td>
									<td>cheminée</td>
									<td>المدفأة</td>
								</tr>
								<tr>
									<td>Furnitures</td>
									<td>meubles</td>
									<td>أثاث</td>
								</tr>
								<tr>
									<td>Gate</td>
									<td>portail</td>
									<td>portail</td>
								</tr>
								<tr>
									<td>Ground</td>
									<td>sol</td>
									<td>أرض</td>
								</tr>
								<tr>
									<td>Handle</td>
									<td>poignée</td>
									<td>مقبض</td>
								</tr>
								<tr>
									<td>Hanger</td>
									<td>cintre</td>
									<td>الشانق</td>
								</tr>
								<tr>
									<td>Home</td>
									<td>maison</td>
									<td>المنزل</td>
								</tr>
								<tr>
									<td>Key</td>
									<td>clé</td>
									<td>مفتاح</td>
								</tr>
								<tr>
									<td>Landlord</td>
									<td>propriétaire</td>
									<td>المالك</td>
								</tr>
								<tr>
									<td>Lawn</td>
									<td>pelouse</td>
									<td>الحديقة</td>
								</tr>
								<tr>
									<td>Letterbox</td>
									<td>boîte aux lettres</td>
									<td>الرسائل</td>
								</tr>
								<tr>
									<td>Light</td>
									<td>lumière</td>
									<td>ضوء</td>
								</tr>
								<tr>
									<td>Light switch</td>
									<td>interrupteur</td>
									<td>قابس الضوء</td>
								</tr>
								<tr>
									<td>Lightbulb</td>
									<td>ampoule</td>
									<td>المصباح</td>
								</tr>
								<tr>
									<td>Lock</td>
									<td>serrure</td>
									<td>قفل</td>
								</tr>
								<tr>
									<td>Machine washing</td>
									<td>machine à laver</td>
									<td>آلة الغسيل</td>
								</tr>
								<tr>
									<td>Mattress</td>
									<td>matelas</td>
									<td>فراش</td>
								</tr>
								<tr>
									<td>Mirror</td>
									<td>miroir</td>
									<td>مرآة</td>
								</tr>
								<tr>
									<td>Outside</td>
									<td>dehors</td>
									<td>الخارج</td>
								</tr>
								<tr>
									<td>Painting</td>
									<td>tableau</td>
									<td>لوحة</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>téléphone</td>
									<td>هاتف</td>
								</tr>
								<tr>
									<td>Pillow</td>
									<td>oreiller</td>
									<td>مخدة</td>
								</tr>
								<tr>
									<td>Quilt</td>
									<td>couette</td>
									<td>لحاف</td>
								</tr>
								<tr>
									<td>Radiator</td>
									<td>radiateur</td>
									<td>المشعاع</td>
								</tr>
								<tr>
									<td>Shutter</td>
									<td>volets</td>
									<td>مصاريع</td>
								</tr>
								<tr>
									<td>Sideboard</td>
									<td>buffet</td>
									<td>بوفيه</td>
								</tr>
								<tr>
									<td>Sofa</td>
									<td>canapé</td>
									<td>كنبة</td>
								</tr>
								<tr>
									<td>Table</td>
									<td>table</td>
									<td>الطاولة</td>
								</tr>
								<tr>
									<td>Television</td>
									<td>télévision</td>
									<td>التلفاز</td>
								</tr>
								<tr>
									<td>Tile</td>
									<td>tuile</td>
									<td>قرميدة</td>
								</tr>
								<tr>
									<td>trash can</td>
									<td>poubelle</td>
									<td>قمامة</td>
								</tr>
								<tr>
									<td>Upstairs</td>
									<td>en haut</td>
									<td>الطابق العلوي</td>
								</tr>
								<tr>
									<td>Vacuum</td>
									<td>aspirateur</td>
									<td>مكنسة كهرباء</td>
								</tr>
								<tr>
									<td>Wall</td>
									<td>mur</td>
									<td>حائط</td>
								</tr>
								<tr>
									<td>Wallpaper</td>
									<td>papier peint</td>
									<td>ورق الجدران</td>
								</tr>
								<tr>
									<td>Wardrobe</td>
									<td>armoire</td>
									<td>خزانة</td>
								</tr>
								<tr>
									<td>Window</td>
									<td>fenêtre</td>
									<td>نافذة</td>
								</tr>

								<tr>
									<td class="soustitre">Kitchen</td>
									<td class="soustitre">Cuisine</td>
									<td class="soustitre">مطبخ</td>
								</tr>
								<tr>
									<td class="sousoustitre">kitchen equipments</td>
									<td class="sousoustitre">Équipements de cuisine</td>
									<td class="sousoustitre">أدوات المطبخ</td>
								</tr>
								<tr>
									<td>Coffee maker</td>
									<td>cafetière électrique</td>
									<td>صانع القهوة</td>
								</tr>
								<tr>
									<td>Coffee pot</td>
									<td>cafetière</td>
									<td>وعاء القهوة</td>
								</tr>
								<tr>
									<td>Cooker hood</td>
									<td>hotte</td>
									<td>هود طباخ</td>
								</tr>
								<tr>
									<td>cooking plate</td>
									<td>plaque de cuisson</td>
									<td>لوحة الطبخ</td>
								</tr>
								<tr>
									<td>Deep fryer</td>
									<td>friteuse</td>
									<td>المقلاة</td>
								</tr>
								<tr>
									<td>Dishwasher</td>
									<td>lave vaisselle</td>
									<td>غسالة أطباق</td>
								</tr>
								<tr>
									<td>Electric carving knife</td>
									<td>couteau éléctrique</td>
									<td>سكين كهربائي</td>
								</tr>
								<tr>
									<td>Electric cooker</td>
									<td>cuisinière électrique</td>
									<td></td>
								</tr>
								<tr>
									<td>faucet</td>
									<td>robinet</td>
									<td>صنبور</td>
								</tr>
								<tr>
									<td>Freezer</td>
									<td>congélateur</td>
									<td>الفريزر</td>
								</tr>
								<tr>
									<td>Fridge</td>
									<td>réfrigérateur</td>
									<td>ثلاجة</td>
								</tr>
								<tr>
									<td>Gas cooker</td>
									<td>cuisinière à gaz</td>
									<td>فرن بالغاز</td>
								</tr>
								<tr>
									<td>Kettle</td>
									<td>bouilloire</td>
									<td>غلاية</td>
								</tr>
								<tr>
									<td>Microwave</td>
									<td>micro-onde</td>
									<td>الميكروويف</td>
								</tr>
								<tr>
									<td>Mixer</td>
									<td>mixeur</td>
									<td>خلاط</td>
								</tr>
								<tr>
									<td>Oven</td>
									<td>four</td>
									<td>فرن</td>
								</tr>
								<tr>
									<td>Stove</td>
									<td>cuisinière</td>
									<td>موقد</td>
								</tr>
								<tr>
									<td>Teapot</td>
									<td>théière</td>
									<td>براد شاى</td>
								</tr>
								<tr>
									<td>Toaster</td>
									<td>grille-pain</td>
									<td>محمصة خبز كهربائية</td>
								</tr>

								<tr>
									<td class="sousoustitre">Dishes</td>
									<td class="sousoustitre">Vaisselles</td>
									<td class="sousoustitre">أطباق</td>
								</tr>
								<tr>
									<td>Bowl</td>
									<td>bol</td>
									<td>زبدية / سلطانية</td>
								</tr>
								<tr>
									<td>Carafe</td>
									<td>carafe</td>
									<td>المصفق (إناء)</td>
								</tr>
								<tr>
									<td>Mug</td>
									<td>Chope</td>
									<td>إبريق خزفي</td>
								</tr>
								<tr>
									<td>Cup</td>
									<td>tasse</td>
									<td>كأس</td>
								</tr>
								<tr>
									<td>Jug</td>
									<td>cruche</td>
									<td>إبريق</td>
								</tr>
								<tr>
									<td>Plate</td>
									<td>assiette</td>
									<td>طبق</td>
								</tr>
								<tr>
									<td>Saucer</td>
									<td>soucoupe</td>
									<td>صحن</td>
								</tr>

								<tr>
									<td class="sousoustitre">Cultery</td>
									<td class="sousoustitre">Couverts</td>
									<td class="sousoustitre">أدوات المائدة</td>
								</tr>
								<tr>
									<td>Dessert spoon</td>
									<td>cuillère à dessert</td>
									<td>ملعقة التحلية</td>
								</tr>
								<tr>
									<td>Fork</td>
									<td>fourchette</td>
									<td>شوكة</td>
								</tr>
								<tr>
									<td>Knife</td>
									<td>couteau</td>
									<td>سكين</td>
								</tr>
								<tr>
									<td>Soup spoon</td>
									<td>cuillère à soupe</td>
									<td>ملعقة حساء</td>
								</tr>
								<tr>
									<td>Spoon</td>
									<td>cuillère</td>
									<td>ملعقة</td>
								</tr>
								<tr>
									<td>Teaspoon</td>
									<td>cuillère à café</td>
									<td>ملعقة شاي</td>
								</tr>

								<tr>
									<td class="sousoustitre">kitchenware</td>
									<td class="sousoustitre">Ustensiles de cuisine</td>
									<td class="sousoustitre">أدوات المطبخ</td>
								</tr>
								<tr>
									<td>Apron kitche</td>
									<td>tablier</td>
									<td>مطبخ المئزر</td>
								</tr>
								<tr>
									<td>Baking tray</td>
									<td>plaque de cuisson</td>
									<td>صينية الخبز</td>
								</tr>
								<tr>
									<td>Bottle</td>
									<td>bouteille</td>
									<td>قنينة</td>
								</tr>
								<tr>
									<td>Bottle-opener</td>
									<td>décapsuleur</td>
									<td>فتحت زجاجة</td>
								</tr>
								<tr>
									<td>Bread knife</td>
									<td>couteau à pain</td>
									<td>سكين الخبز</td>
								</tr>
								<tr>
									<td>Butter dish</td>
									<td>beurrier</td>
									<td>طبق الزبدة</td>
								</tr>
								<tr>
									<td>Carving knife</td>
									<td>couteau à découper</td>
									<td>سكين النحت</td>
								</tr>
								<tr>
									<td>Cheese grater</td>
									<td>râpe à fromage</td>
									<td>مبشرة الجبن</td>

								</tr>
								<tr>
									<td>Chopping board</td>
									<td>planche à découper</td>
									<td>لوح التقطيع</td>
								</tr>
								<tr>
									<td>Colander</td>
									<td>passoire</td>
									<td>مصفاة</td>
								</tr>
								<tr>
									<td>Cooking-pot</td>
									<td>marmite</td>
									<td>قدر الطبخ</td>
								</tr>
								<tr>
									<td>Corkscrew</td>
									<td>tire-bouchon</td>
									<td>لولب فليني</td>
								</tr>
								<tr>
									<td>Dish towel</td>
									<td>torchon</td>
									<td>قماشة لغسل الصحون</td>
								</tr>
								<tr>
									<td>Frying pan</td>
									<td>Poêle</td>
									<td>مقلاة</td>
								</tr>
								<tr>
									<td>Garlic press</td>
									<td>presse à ail</td>
									<td>الثوم الصحافة</td>
								</tr>
								<tr>
									<td>Ladle</td>
									<td>louche</td>
									<td>مغرفة</td>
								</tr>
								<tr>
									<td>Lid</td>
									<td>couvercle</td>
									<td>غطاء</td>
								</tr>
								<tr>
									<td>Oven mitt</td>
									<td>gant de cuisine</td>
									<td>قفاز المطبخ</td>
								</tr>
								<tr>
									<td>Peeler</td>
									<td>éplucheur</td>
									<td>مقشرة</td>
								</tr>
								<tr>
									<td>Pepper shaker</td>
									<td>poivrière</td>
									<td>الفلفل شاكر</td>
								</tr>
								<tr>
									<td>Pressure cooker</td>
									<td>cocotte minute</td>
									<td>قدر ضغط</td>
								</tr>
								<tr>
									<td>Rolling pin</td>
									<td>rouleau à pâtisserie</td>
									<td>مرقاق العجين</td>
								</tr>
								<tr>
									<td>Salt cellar</td>
									<td>salière</td>
									<td>شاكر الملح</td>
								</tr>
								<tr>
									<td>Saucepan</td>
									<td>casserole</td>
									<td>كسرولة</td>
								</tr>
								<tr>
									<td>Sieve</td>
									<td>tamis</td>
									<td>غربال</td>
								</tr>
								<tr>
									<td>Sugar bowl</td>
									<td>sucrier</td>
									<td>سكرية</td>
								</tr>
								<tr>
									<td>Table napkin</td>
									<td>serviette de table</td>
									<td>منديل الطاولة</td>
								</tr>
								<tr>
									<td>Tableclothe</td>
									<td>nappe</td>
									<td>مفرش المائدة</td>
								</tr>
								<tr>
									<td>Tin-opener</td>
									<td>ouvre boîte</td>
									<td>ouvre boîte</td>
								</tr>
								<tr>
									<td>Whisk</td>
									<td>fouet</td>
									<td>مخفقة البيض</td>
								</tr>

								<tr>
									<td class="soustitre">Bathroom</td>
									<td class="soustitre">Salle de bain</td>
									<td class="soustitre">حمام</td>
								</tr>
								<tr>
									<td>Aftershave</td>
									<td>après-rasage</td>
									<td>عطر بعد الحلاقة</td>
								</tr>
								<tr>
									<td>Bath</td>
									<td>baignoire</td>
									<td>حوض الإستحمام</td>
								</tr>
								<tr>
									<td>Bath mat</td>
									<td>tapis de bains</td>
									<td>سجادة الحمام</td>
								</tr>
								<tr>
									<td>bathrobe</td>
									<td>peignoir</td>
									<td>رداء الحمام</td>
								</tr>
								<tr>
									<td>bathroom scales</td>
									<td>Pèse-personne</td>
									<td>مقياس الحمام</td>
								</tr>
								<tr>
									<td>Beauty treatments</td>
									<td>Soins de beauté</td>
									<td>علاجات التجميل</td>
								</tr>
								<tr>
									<td>Bubble bath</td>
									<td>bain moussant</td>
									<td>حمام فقاعة</td>
								</tr>
								<tr>
									<td>Clippers</td>
									<td>coupe-ongles</td>
									<td>مقلمة الأظافر</td>
								</tr>
								<tr>
									<td>Comb</td>
									<td>peigne</td>
									<td>مشط</td>
								</tr>
								<tr>
									<td>Conditioner</td>
									<td>après-shampoing</td>
									<td>بعد الشامبو</td>
								</tr>
								<tr>
									<td>Cotton bud</td>
									<td>coton-tige</td>
									<td>مسحة القطن</td>
								</tr>
								<tr>
									<td>Dental floss</td>
									<td>fil dentaire</td>
									<td>خيط الأسنان</td>
								</tr>
								<tr>
									<td>Deodorant</td>
									<td>déodorant</td>
									<td>مزيل العرق</td>
								</tr>
								<tr>
									<td>Electric shaver</td>
									<td>rasoir électrique</td>
									<td>ماكينة حلاقة كهربائية</td>
								</tr>
								<tr>
									<td>Hairbrush</td>
									<td>brosse à cheveux</td>
									<td>فرشاة للشعر</td>
								</tr>
								<tr>
									<td>Hairdryer</td>
									<td>sèche-cheveux</td>
									<td>مجفف الشعر</td>
								</tr>
								<tr>
									<td>Medicine cupboard</td>
									<td>armoire à pharmacie</td>
									<td>خزانة الدواء</td>
								</tr>
								<tr>
									<td>Mirror</td>
									<td>miroir</td>
									<td>مرآة</td>
								</tr>
								<tr>
									<td>Mouthwash</td>
									<td>bain de bouche</td>
									<td>غسول الفم</td>
								</tr>
								<tr>
									<td>Perfum</td>
									<td>parfum</td>
									<td>عطر</td>
								</tr>
								<tr>
									<td>Razor</td>
									<td>rasoir</td>
									<td>موس الحلاقة</td>
								</tr>
								<tr>
									<td>Sanitary napkin</td>
									<td>serviette hygiénique</td>
									<td>منديل صحي</td>
								</tr>
								<tr>
									<td>Shampoo</td>
									<td>shampoing</td>
									<td>شامبو</td>
								</tr>
								<tr>
									<td>Shaving cream</td>
									<td>crème à raser</td>
									<td>كريم الحلاقة</td>
								</tr>
								<tr>
									<td>Shower gel</td>
									<td>gel douche</td>
									<td>كريم الحلاقة</td>
								</tr>
								<tr>
									<td>Soap</td>
									<td>savon</td>
									<td>صابون</td>
								</tr>
								<tr>
									<td>Tampon</td>
									<td>tampon</td>
									<td>حشا</td>
								</tr>
								<tr>
									<td>Sink</td>
									<td>lavabo</td>
									<td>lavabo</td>
								</tr>
								<tr>
									<td>Toilet</td>
									<td>toilettes</td>
									<td>مرحاض</td>
								</tr>
								<tr>
									<td>Toilet flush</td>
									<td>chasse d'eau</td>
									<td>سيفون الحمام</td>
								</tr>
								<tr>
									<td>Toilet paper</td>
									<td>papier toilette/papier hygiénique</td>
									<td>ورق الحمام</td>
								</tr>
								<tr>
									<td>Toiletries</td>
									<td>accessoires de toilette</td>
									<td>حاجيات المرحاض</td>
								</tr>
								<tr>
									<td>Toothbrush</td>
									<td>brosse à dents</td>
									<td>فرشاة الأسنان</td>
								</tr>
								<tr>
									<td>Toothpaste</td>
									<td>dentifrice</td>
									<td>معجون الأسنان</td>
								</tr>
								<tr>
									<td>Towel</td>
									<td>serviette</td>
									<td>منشفة</td>
								</tr>
								<tr>
									<td>Towel rack</td>
									<td>porte-serviettes</td>
									<td>رف منشفة</td>
								</tr>
								<tr>
									<td>Tweezer</td>
									<td>pince à épiler</td>
									<td>ملقط</td>
								</tr>
								<tr>
									<td>Wash glove</td>
									<td>Wash glove</td>
									<td>غسل قفاز</td>
								</tr>
								<tr>
									<td>Wax</td>
									<td>épilation</td>
									<td>إزالة الشعر</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/villelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Ville<?php endif; if($langue === 'english'): ?>City<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="ville.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/famillelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Famille<?php endif; if($langue === 'english'): ?>Family<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="famille.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		