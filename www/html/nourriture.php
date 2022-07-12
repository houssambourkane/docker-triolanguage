<?php
		$titrefr = "NOURRITURE & ALIMENTATION";
		$titreang = "FOOD ";
		$bg = "./assets/img/bgtheme/nourriturebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de nourriture en Anglais - Français - Arabe">
		<meta name="keywords" content="nourriture, food, feed, manger, nourrir, commestible, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></h1>

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
								<td class="soustitre">Nutrients</td>
								<td class="soustitre">Nutriments</td>
								<td class="soustitre">العناصر الغذائية</td>
							</tr>
							<tr>
								<td>Carbohydrates</td>
								<td>Glucides</td>
								<td>الكربوهيدرات</td>
							</tr>
							<tr>
								<td>Fats</td>
								<td>Gras</td>
								<td>الدهون</td>
							</tr>
							<tr>
								<td>Fiber</td>
								<td>Fibre</td>
								<td>ليف</td>
							</tr>
							<tr>
								<td>Minerals</td>
								<td>Minéraux</td>
								<td>المعادن</td>
							</tr>
							<tr>
								<td>Proteins</td>
								<td>Protéines</td>
								<td>البروتينات</td>
							</tr>
							<tr>
								<td>Vitamins</td>
								<td>Vitamines</td>
								<td>الفيتامينات</td>
							</tr>
							<tr>
								<td>Water</td>
								<td>Eau</td>
								<td>ماء</td>
							</tr>
							<tr>
								<td class="soustitre">Meal</td>
								<td class="soustitre">repas</td>
								<td class="soustitre">وجبة</td>
							</tr>
							<tr>
								<td>Appetizing</td>
								<td>appétissant</td>
								<td>فاتح للشهية</td>
							</tr>
							<tr>
								<td>Breakfast</td>
								<td>petit déjeuner</td>
								<td>وجبة افطار</td>
							</tr>
							<tr>
								<td>Dinner/Supper</td>
								<td>dîner/souper</td>
								<td>عشاء</td>
							</tr>
							<tr>
								<td>Dish of the day</td>
								<td>plat du jour</td>
								<td>طبق اليوم</td>
							</tr>
							<tr>
								<td>Edible</td>
								<td>comestible</td>
								<td>صالح للأ كل</td>
							</tr>
							<tr>
								<td>Fast food</td>
								<td>fast food</td>
								<td>الوجبات السريعة</td>
							</tr>
							<tr>
								<td>Inedible</td>
								<td>non comestible</td>
								<td>غير صالح للأكل</td>
							</tr>
							<tr>
								<td>Lunch</td>
								<td>déjeuner</td>
								<td>غداء</td>
							</tr>
							<tr>
								<td>Main course</td>
								<td>plat principal</td>
								<td>الطبق الرئيسي</td>
							</tr>
							<tr>
								<td>Menu</td>
								<td>menu</td>
								<td>قائمة طعام</td>
							</tr>
							<tr>
								<td>Recipe</td>
								<td>recette</td>
								<td>وصفة</td>
							</tr>
							<tr>
								<td>Starter, appetizer</td>
								<td>l'entrée</td>
								<td>مقبلات</td>
							</tr>
							<tr>
								<td>Uneatable</td>
								<td>immangeable</td>
								<td>غير نافع للأكل</td>
							</tr>

							<tr>
								<td class="soustitre">Ingredients</td>
								<td class="soustitre">ingrédients</td>
								<td class="soustitre">مكونات</td>
							</tr>
							<tr>
								<td>Basil</td>
								<td>basilic</td>
								<td>ريحان</td>
							</tr>
							<tr>
								<td>Bread</td>
								<td>pain</td>
								<td>خبز</td>
							</tr>
							<tr>
								<td>Butter</td>
								<td>beurre</td>
								<td>زبدة</td>
							</tr>
							<tr>
								<td>Candy</td>
								<td>bonbon</td>
								<td>حلوى</td>
							</tr>
							<tr>
								<td>Cane sugar</td>
								<td>sucre de canne</td>
								<td>سكر القصب</td>
							</tr>
							<tr>
								<td>Cereal</td>
								<td>céréale</td>
								<td>حبوب</td>
							</tr>
							<tr>
								<td>Cheese</td>
								<td>fromage</td>
								<td>جبنة</td>
							</tr>
							<tr>
								<td>Chocolate</td>
								<td>chocolat</td>
								<td>شوكولاتة</td>
							</tr>
							<tr>
								<td>Chocolate bar</td>
								<td>tablette de chocolat</td>
								<td>قطعة شوكولاتة</td>
							</tr>
							<tr>
								<td>Cinnamon</td>
								<td>cannelle</td>
								<td>قرفة</td>
							</tr>
							<tr>
								<td>Cloves</td>
								<td>clous de girofle</td>
								<td>قرنفل</td>
							</tr>
							<tr>
								<td>Cookie</td>
								<td>biscuit</td>
								<td>بسكويت</td>
							</tr>
							<tr>
								<td>Cottage cheese</td>
								<td>fromage blanc</td>
								<td>الجبن الأبيض</td>
							</tr>
							<tr>
								<td>Curry</td>
								<td>curry</td>
								<td>كاري</td>
							</tr>
							<tr>
								<td>Egg</td>
								<td>œuf</td>
								<td>بيضة</td>
							</tr>
							<tr>
								<td>Fat</td>
								<td>gras</td>
								<td>دهن</td>
							</tr>
							<tr>
								<td>Flour</td>
								<td>farine</td>
								<td>طحين</td>
							</tr>
							<tr>
								<td>Garlic</td>
								<td>ail</td>
								<td>ثوم</td>
							</tr>
							<tr>
								<td>Herbs</td>
								<td>herbes</td>
								<td>أعشاب</td>
							</tr>
							<tr>
								<td>Honey</td>
								<td>miel</td>
								<td>عسل</td>
							</tr>
							<tr>
								<td>Icing sugar</td>
								<td>sucre glace</td>
								<td>مسحوق السكر</td>
							</tr>
							<tr>
								<td>Jam</td>
								<td>confiture</td>
								<td>مربى</td>
							</tr>
							<tr>
								<td>Jelly</td>
								<td>gelée</td>
								<td>هلام</td>
							</tr>
							<tr>
								<td>Ketchup</td>
								<td>ketchup</td>
								<td>كاتشب</td>
							</tr>
							<tr>
								<td>Light</td>
								<td>allégé</td>
								<td>مخفف</td>
							</tr>
							<tr>
								<td>Margarine</td>
								<td>margarine</td>
								<td>سمن</td>
							</tr>
							<tr>
								<td>Mayonnaise</td>
								<td>mayonnaise</td>
								<td>مايونيز</td>
							</tr>
							<tr>
								<td>Mint</td>
								<td>menthe</td>
								<td>نعناع</td>
							</tr>
							<tr>
								<td>Mustard</td>
								<td>moutard</td>
								<td>خردل</td>
							</tr>
							<tr>
								<td>Nutmeg</td>
								<td>muscade</td>
								<td>جوزة الطيب</td>
							</tr>
							<tr>
								<td>oat flakes</td>
								<td>Flocons d'avoine</td>
								<td>دقيق الشوفان</td>
							</tr>
							<tr>
								<td>Oat</td>
								<td>avoine</td>
								<td>الشوفان</td>
							</tr>
							<tr>
								<td>Oil</td>
								<td>huile</td>
								<td>زيت</td>
							</tr>
							<tr>
								<td>Olive oil</td>
								<td>huile d'olive</td>
								<td>زيت الزيتون</td>
							</tr>
							<tr>
								<td>Omelette</td>
								<td>Omelette</td>
								<td>عجة البيض</td>
							</tr>
							<tr>
								<td>Orange marmalade</td>
								<td>marmelade d'orange</td>
								<td>مربى البرتقال</td>
							</tr>
							<tr>
								<td>Parsley</td>
								<td>persil</td>
								<td>بقدونس</td>
							</tr>
							<tr>
								<td>Pasta</td>
								<td>pâte</td>
								<td>معكرونة</td>
							</tr>
							<tr>
								<td>Pastry</td>
								<td>pâtisserie</td>
								<td>معجنات</td>
							</tr>
							<tr>
								<td>Pepper</td>
								<td>poivre</td>
								<td>فلفل</td>
							</tr>
							<tr>
								<td>Poached/Boiled egg</td>
								<td>œuf poché/bouilli</td>
								<td>بيض مسلوق</td>
							</tr>
							<tr>
								<td>Colza oil</td>
								<td>huile de colza</td>
								<td>زيت كولزا</td>
							</tr>
							<tr>
								<td>Rice</td>
								<td>riz</td>
								<td>أرز</td>
							</tr>
							<tr>
								<td>Rosemary</td>
								<td>romarin</td>
								<td>إكليل الجبل</td>
							</tr>
							<tr>
								<td>Salt</td>
								<td>sel</td>
								<td>ملح</td>
							</tr>
							<tr>
								<td>Sauce</td>
								<td>sauce</td>
								<td>صلصة</td>
							</tr>
							<tr>
								<td>Scrambled eggs</td>
								<td>œuf brouillés</td>
								<td>بيض مخفوق</td>
							</tr>
							<tr>
								<td>Seasoning</td>
								<td>assaisonnement</td>
								<td>توابل</td>
							</tr>
							<tr>
								<td>Semolina</td>
								<td>semoule</td>
								<td>سميد</td>
							</tr>
							<tr>
								<td>Skimmed milk</td>
								<td>lait écrémé</td>
								<td>حليب خالي الدسم</td>
							</tr>
							<tr>
								<td>Sliced bread</td>
								<td>pain tranché</td>
								<td>خبز مقطع</td>
							</tr>
							<tr>
								<td>Soup</td>
								<td>soupe</td>
								<td>حساء</td>
							</tr>
							<tr>
								<td>Spices</td>
								<td>épices</td>
								<td>التوابل</td>
							</tr>
							<tr>
								<td>Starch</td>
								<td>amidon</td>
								<td>نشاء</td>
							</tr>
							<tr>
								<td>Sugar</td>
								<td>sucre</td>
								<td>السكر</td>
							</tr>
							<tr>
								<td>Sunflower oil</td>
								<td>huile de tournesol</td>
								<td>زيت عباد الشمس</td>
							</tr>
							<tr>
								<td>Tart/pie</td>
								<td>tarte</td>
								<td>فطيرة</td>
							</tr>
							<tr>
								<td>Toast</td>
								<td>pain grillé</td>
								<td>خبز محمص</td>
							</tr>
							<tr>
								<td>Vinegar</td>
								<td>vinaigre</td>
								<td>خل</td>
							</tr>
							<tr>
								<td>Wholewheat bread</td>
								<td>pain complet</td>
								<td>خبز أسمر</td>
							</tr>

							<tr>
								<td class="soustitre">Meat</td>
								<td class="soustitre">viande</td>
								<td class="soustitre">لحم</td>
							</tr>
							<tr>
								<td>Bacon</td>
								<td>bacon</td>
								<td>لحم خنزير مقدد</td>
							</tr>
							<tr>
								<td>Beef</td>
								<td>bœuf</td>
								<td>لحم بقري</td>
							</tr>
							<tr>
								<td>Boiled ham</td>
								<td>Jambon cuit</td>
								<td>لحم الخنزير المسلوق</td>
							</tr>
							<tr>
								<td>Chicken</td>
								<td>poulet</td>
								<td>دجاج</td>
							</tr>
							<tr>
								<td>Chicken breast</td>
								<td>blanc de poulet</td>
								<td>صدر دجاج</td>
							</tr>
							<tr>
								<td>Cooked meat</td>
								<td>viande cuite</td>
								<td>لحم مطبوخ</td>
							</tr>
							<tr>
								<td>Cutlet</td>
								<td>côtelette</td>
								<td>كستلاتة</td>
							</tr>
							<tr>
								<td>Duck</td>
								<td>canard</td>
								<td>بطة</td>
							</tr>
							<tr>
								<td>Goose</td>
								<td>oie</td>
								<td>أوز</td>
							</tr>
							<tr>
								<td>Gravy</td>
								<td>sauce de viande</td>
								<td>صلصة اللحم</td>
							</tr>
							<tr>
								<td>Ham</td>
								<td>jambon</td>
								<td>لحم خنزير</td>
							</tr>
							<tr>
								<td>Kidneys</td>
								<td>rognons</td>
								<td>كلاوي</td>
							</tr>
							<tr>
								<td>Knuckle of ham</td>
								<td>jambonneau</td>
								<td>المفصل من لحم الخنزير</td>
							</tr>
							<tr>
								<td>Lamb</td>
								<td>agneau</td>
								<td>لحم ضأن</td>
							</tr>
							<tr>
								<td>Liver</td>
								<td>foie</td>
								<td>كبد</td>
							</tr>
							<tr>
								<td>Minced meat</td>
								<td>viande hachée</td>
								<td>لحم مفروم</td>
							</tr>
							<tr>
								<td>Mutton</td>
								<td>mouton</td>
								<td>لحم الضأن</td>
							</tr>
							<tr>
								<td>Pork</td>
								<td>porc</td>
								<td>لحم خنزير</td>
							</tr>
							<tr>
								<td>Rabbit</td>
								<td>lapin</td>
								<td>أرنب</td>
							</tr>
							<tr>
								<td>Rare/bleeding</td>
								<td>saignant</td>
								<td>نزيف</td>
							</tr>
							<tr>
								<td>Red meat</td>
								<td>viande rouge</td>
								<td>لحم أحمر</td>
							</tr>
							<tr>
								<td>roast</td>
								<td>rôti</td>
								<td>مشوي</td>
							</tr>
							<tr>
								<td>Sausage</td>
								<td>saucisse</td>
								<td>سجق</td>
							</tr>
							<tr>
								<td>Smoked ham</td>
								<td>jambon fumé</td>
								<td>لحم خنزير مدخن</td>
							</tr>
							<tr>
								<td>Steak</td>
								<td>steak</td>
								<td>شريحة لحم</td>
							</tr>
							<tr>
								<td>Tender</td>
								<td>tendre</td>
								<td>طري</td>
							</tr>
							<tr>
								<td>Tough</td>
								<td>dur</td>
								<td>قاسي</td>
							</tr>
							<tr>
								<td>Turkey</td>
								<td>dinde</td>
								<td>ديك رومي</td>
							</tr>
							<tr>
								<td>Veal</td>
								<td>veau</td>
								<td>لحم العجل</td>
							</tr>
							<tr>
								<td>Venison</td>
								<td>gibier</td>
								<td>لحم الغزال</td>
							</tr>
							<tr>
								<td>Well-done</td>
								<td>bien cuit</td>
								<td>مطبوخ جيدا</td>
							</tr>
							<tr>
								<td>White meat</td>
								<td>viande blanche</td>
								<td>لحم ابيض</td>
							</tr>
							<tr>
								<td>Wing</td>
								<td>aile</td>
								<td>جناح</td>
							</tr>

							<tr>
								<td class="soustitre">Fish and seafood</td>
								<td class="soustitre">poissons et fruits de mer</td>
								<td class="soustitre">سمك و مأكولات بحرية</td>
							</tr>
							<tr>
								<td>Anchovy</td>
								<td>anchois</td>
								<td>أنشوفة</td>
							</tr>
							<tr>
								<td>Cod</td>
								<td>cabillaud, morue</td>
								<td>القد</td>
							</tr>
							<tr>
								<td>Crab</td>
								<td>crabe</td>
								<td>سلطعون</td>
							</tr>
							<tr>
								<td>Crawfish/Crayfish</td>
								<td>écrevisse</td>
								<td>جراد البحر</td>
							</tr>
							<tr>
								<td>Fish sticks</td>
								<td>bâtonnets de poisson</td>
								<td>عصا السمك</td>
							</tr>
							<tr>
								<td>Haddock</td>
								<td>églefin</td>
								<td>الحدوق</td>
							</tr>
							<tr>
								<td>Herring</td>
								<td>hareng</td>
								<td>سمك مملح</td>
							</tr>
							<tr>
								<td>Lobster</td>
								<td>homard/langouste</td>
								<td>سرطان البحر</td>
							</tr>
							<tr>
								<td>Mackerel</td>
								<td>maquereau</td>
								<td>سمك الأسقمري</td>
							</tr>
							<tr>
								<td>Mullet</td>
								<td>mulet/rouget</td>
								<td>سمك البوري</td>
							</tr>
							<tr>
								<td>Mussel</td>
								<td>moule</td>
								<td>بلح البحر</td>
							</tr>
							<tr>
								<td>Octopus</td>
								<td>Poulpe, pieuvre</td>
								<td>أخطبوط</td>
							</tr>
							<tr>
								<td>Oysters</td>
								<td>huîtres</td>
								<td>المحار</td>
							</tr>
							<tr>
								<td>Salmon</td>
								<td>saumon</td>
								<td>السالمون</td>
							</tr>
							<tr>
								<td>Sardine</td>
								<td>Sardine</td>
								<td>السردين</td>
							</tr>
							<tr>
								<td>Seabass</td>
								<td>bar</td>
								<td>القاروص</td>
							</tr>
							<tr>
								<td>Sea-urchin</td>
								<td>oursin</td>
								<td>قنفذ البحر</td>
							</tr>
							<tr>
								<td>Shellfish</td>
								<td>crustacé</td>
								<td>القشريات</td>
							</tr>
							<tr>
								<td>Shrimp/scampi</td>
								<td>crevette</td>
								<td>جمبري</td>
							</tr>
							<tr>
								<td>Sole</td>
								<td>Sole</td>
								<td>سمك موسى</td>
							</tr>
							<tr>
								<td>Squid</td>
								<td>calamar</td>
								<td>حبار</td>
							</tr>
							<tr>
								<td>Trout</td>
								<td>truite</td>
								<td>السلمون المرقط</td>
							</tr>
							<tr>
								<td>Tuna</td>
								<td>thon</td>
								<td>تونة</td>
							</tr>
							<tr>
								<td>Whiting</td>
								<td>merlan</td>
								<td>البياض</td>
							</tr>

							<tr>
								<td class="soustitre">Dessert</td>
								<td class="soustitre">dessert</td>
								<td class="soustitre">حلوى</td>
							</tr>
							<tr>
								<td>Cake</td>
								<td>gâteau</td>
								<td>كيك</td>
							</tr>
							<tr>
								<td>Cheesecake</td>
								<td>cheesecake</td>
								<td>تشيز كيك</td>
							</tr>
							<tr>
								<td>Cookie</td>
								<td>biscuit</td>
								<td>بسكويت</td>
							</tr>
							<tr>
								<td>Cream</td>
								<td>crème</td>
								<td>كريم</td>
							</tr>
							<tr>
								<td>Custard</td>
								<td>crème anglaise</td>
								<td>كاسترد</td>
							</tr>
							<tr>
								<td>Donut</td>
								<td>beignet</td>
								<td>دونات</td>
							</tr>
							<tr>
								<td>Flan</td>
								<td>flan</td>
								<td>فلان</td>
							</tr>
							<tr>
								<td>Fresh cream</td>
								<td>crème fraîche</td>
								<td>كريمة طازجة</td>
							</tr>
							<tr>
								<td>Ice cream</td>
								<td>glace</td>
								<td>بوظة</td>
							</tr>
							<tr>
								<td>Jelly</td>
								<td>gelée</td>
								<td>هلام</td>
							</tr>
							<tr>
								<td>Madeleine</td>
								<td>Madeleine</td>
								<td>مادلين</td>
							</tr>
							<tr>
								<td>Pancake</td>
								<td>crêpe</td>
								<td>كريب</td>
							</tr>
							<tr>
								<td>Pie/tart</td>
								<td>tarte</td>
								<td>فطيرة</td>
							</tr>
							<tr>
								<td>Pudding</td>
								<td>pudding</td>
								<td>بودنغ</td>
							</tr>
							<tr>
								<td>Tiramisu</td>
								<td>Tiramisu</td>
								<td>تيراميسو</td>
							</tr>
							<tr>
								<td>Waffle</td>
								<td>Gaufre</td>
								<td>وافل</td>
							</tr>
							<tr>
								<td>Whipped cream</td>
								<td>crème chantilly</td>
								<td>كريمة مخفوقة</td>
							</tr>

							<tr>
								<td class="soustitre">Taste</td>
								<td class="soustitre">Goût</td>
								<td class="soustitre">المذاق</td>
							</tr>
							<tr>
								<td>Bitter</td>
								<td>amer</td>
								<td>مرارة</td>
							</tr>
							<tr>
								<td>Hot</td>
								<td>fortement épicé</td>
								<td>حار جدا</td>
							</tr>
							<tr>
								<td>Peppery</td>
								<td>poivré</td>
								<td>فلفلي</td>
							</tr>
							<tr>
								<td>Pungent</td>
								<td>piquant</td>
								<td>لذع</td>
							</tr>
							<tr>
								<td>Salty</td>
								<td>salé</td>
								<td>مالح</td>
							</tr>
							<tr>
								<td>Sour</td>
								<td>acide, aigre</td>
								<td>حامض</td>
							</tr>
							<tr>
								<td>Spicy</td>
								<td>épicé</td>
								<td>حار</td>
							</tr>
							<tr>
								<td>Strong</td>
								<td>fort</td>
								<td>قوي</td>
							</tr>
							<tr>
								<td>Sweet</td>
								<td>sucré</td>
								<td>حلو</td>
							</tr>
							<tr>
								<td>Tasteless/bland</td>
								<td>fade</td>
								<td>عديم الذوق</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nutrimentslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nutriments<?php endif; if($langue === 'english'): ?>Nutriments<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nutriments.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/fruitlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Fruits<?php endif; if($langue === 'english'): ?>Fruits<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="fruits.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		