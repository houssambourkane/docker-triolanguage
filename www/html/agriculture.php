<?php
		$titrefr = "AGRICULTURE";
		$titreang = "AGRICULTURE";
		$bg = "./assets/img/bgtheme/agriculturebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Agriculture<?php endif; if($langue === 'english'): ?>Agriculture<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire d'agriculture en Anglais - Français - Arabe">
	<meta name="keywords" content="agriculture, paysan, tracteur, vegetables, faucher, légumes, ferme, fertile, fertilité, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Agriculture<?php endif; if($langue === 'english'): ?>Agriculture<?php endif; ?></h1>

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
								<td>Asparagus</td>
								<td>Asperge</td>
								<td>الهليون</td>
							</tr>
							<tr>
								<td>Autumn</td>
								<td>Automne</td>
								<td>الخريف</td>
							</tr>
							<tr>
								<td>Bark</td>
								<td>Écorce</td>
								<td>لحاء الشجر</td>
							</tr>
							<tr>
								<td>Barley</td>
								<td>Orge</td>
								<td>الشعير</td>
							</tr>
							<tr>
								<td>Basil</td>
								<td>Basilic</td>
								<td>ريحان</td>
							</tr>
							<tr>
								<td>Bean</td>
								<td>Haricot</td>
								<td>فاصوليا</td>
							</tr>
							<tr>
								<td>Bee</td>
								<td>Abeille</td>
								<td>نحلة</td>
							</tr>
							<tr>
								<td>Beetroot</td>
								<td>Betterave</td>
								<td>الشمندر</td>
							</tr>
							<tr>
								<td>Bellflower</td>
								<td>Campanule</td>
								<td>الجريس</td>
							</tr>
							<tr>
								<td>Bench</td>
								<td>Banc</td>
								<td>مقعد</td>
							</tr>
							<tr>
								<td>Bergamot</td>
								<td>Bergamote</td>
								<td>البرغموت</td>
							</tr>
							<tr>
								<td>Bouquet of flowers</td>
								<td>Bouquet de fleurs</td>
								<td>باقة من الزهور</td>
							</tr>
							<tr>
								<td>Boxwood</td>
								<td>Buis</td>
								<td>خشب البقس</td>
							</tr>
							<tr>
								<td>Branch</td>
								<td>Branche</td>
								<td>فرع شجرة</td>
							</tr>
							<tr>
								<td>Broccoli</td>
								<td>Brocoli</td>
								<td>بروكلي</td>
							</tr>
							<tr>
								<td>Brussel sprout</td>
								<td>Choux de bruxelles</td>
								<td>بروكسل تنبت</td>
							</tr>
							<tr>
								<td>Buttercup</td>
								<td>Renoncule</td>
								<td>عشبة الحوذان</td>
							</tr>
							<tr>
								<td>Butterfly</td>
								<td>Papillon</td>
								<td>فراشة</td>
							</tr>
							<tr>
								<td>Cabbage</td>
								<td>Chou</td>
								<td>الكرنب</td>
							</tr>
							<tr>
								<td>Carnation</td>
								<td>Œillet</td>
								<td>قرنفل</td>
							</tr>
							<tr>
								<td>Cassava</td>
								<td>Manioc</td>
								<td>المنيهوت</td>
							</tr>
							<tr>
								<td>Cauliflower</td>
								<td>Chou-fleur</td>
								<td>قرنبيط</td>
							</tr>
							<tr>
								<td>Celery</td>
								<td>Céleri</td>
								<td>كرفس</td>
							</tr>
							<tr>
								<td>Chickpeas</td>
								<td>Pois chiches</td>
								<td>حمص</td>
							</tr>
							<tr>
								<td>Chrysanthemum</td>
								<td>Chrysanthème</td>
								<td>أقحوان</td>
							</tr>
							<tr>
								<td>Cinnamon</td>
								<td>Cannelier</td>
								<td>قرفة</td>
							</tr>
							<tr>
								<td>Coriander</td>
								<td>Coriandre</td>
								<td>كزبرة</td>
							</tr>
							<tr>
								<td>wheat</td>
								<td>Blé</td>
								<td>قمح</td>
							</tr>
							<tr>
								<td>Corn</td>
								<td>Maïs</td>
								<td>حبوب ذرة</td>
							</tr>
							<tr>
								<td>Cotton Plant</td>
								<td>Cotonnier</td>
								<td>نبات القطن</td>
							</tr>
							<tr>
								<td>Cucumber</td>
								<td>Concombre</td>
								<td>خيار</td>
							</tr>
							<tr>
								<td>Cultivation</td>
								<td>Culture</td>
								<td>زراعة</td>
							</tr>
							<tr>
								<td>Daffodil</td>
								<td>Jonquille</td>
								<td>النرجس البري</td>
							</tr>
							<tr>
								<td>Daisy</td>
								<td>Marguerite</td>
								<td>أقحوان</td>
							</tr>
							<tr>
								<td>Dandelion</td>
								<td>Pissenlit</td>
								<td>الهندباء</td>
							</tr>
							<tr>
								<td>Eggplant</td>
								<td>Aubergine</td>
								<td>الباذنجان</td>
							</tr>
							<tr>
								<td>Fence</td>
								<td>Clôture</td>
								<td>سور</td>
							</tr>
							<tr>
								<td>Flower</td>
								<td>Fleur</td>
								<td>زهرة</td>
							</tr>
							<tr>
								<td>Flowerbed</td>
								<td>Parterre de fleurs</td>
								<td>مشتل أزهار</td>
							</tr>
							<tr>
								<td>Foliage</td>
								<td>Feuillage</td>
								<td>أوراق الشجر</td>
							</tr>
							<tr>
								<td>Gardening</td>
								<td>Jardinage</td>
								<td>بستنة</td>
							</tr>
							<tr>
								<td>Gentian</td>
								<td>Gentiana</td>
								<td>الجنطيانا</td>
							</tr>
							<tr>
								<td>Geranium</td>
								<td>Géranium</td>
								<td>إبرة الراعي</td>
							</tr>
							<tr>
								<td>Ginger</td>
								<td>Gingembre</td>
								<td>زنجبيل</td>
							</tr>
							<tr>
								<td>Grass</td>
								<td>Herbe</td>
								<td>نجيل</td>
							</tr>
							<tr>
								<td>Green bean</td>
								<td>Haricot vert</td>
								<td>فاصوليا خضراء</td>
							</tr>
							<tr>
								<td>Greenhouse</td>
								<td>Serre</td>
								<td>دفيئة</td>
							</tr>
							<tr>
								<td>Ground</td>
								<td>Terre</td>
								<td>أرض</td>
							</tr>
							<tr>
								<td>harvest</td>
								<td>Récolte</td>
								<td>حصاد</td>
							</tr>
							<tr>
								<td>Hawthorn</td>
								<td>L'aubépine</td>
								<td>الزعرور البرى</td>
							</tr>
							<tr>
								<td>Hedge</td>
								<td>Haie</td>
								<td>التحوط</td>
							</tr>
							<tr>
								<td>Hemp</td>
								<td>Chanvre</td>
								<td>قنب</td>
							</tr>
							<tr>
								<td>Honeysuckle</td>
								<td>Chèvrefeuille</td>
								<td>صريمة الجدي شجيرة</td>
							</tr>
							<tr>
								<td>Hop</td>
								<td>Houblon</td>
								<td>الجنجل</td>
							</tr>
							<tr>
								<td>Hose</td>
								<td>Tuyau</td>
								<td>خرطوم مياه</td>
							</tr>
							<tr>
								<td>Hyacinth</td>
								<td>Jacinthe</td>
								<td>الياقوتية</td>
							</tr>
							<tr>
								<td>Ivy</td>
								<td>Lierre</td>
								<td>لبلاب</td>
							</tr>
							<tr>
								<td>Jasmine</td>
								<td>Jasmin</td>
								<td>الياسمين</td>
							</tr>
							<tr>
								<td>Lavender</td>
								<td>Lavande</td>
								<td>الخزامى</td>
							</tr>
							<tr>
								<td>Lawn</td>
								<td>Pelouse</td>
								<td>مرجة خضراء</td>
							</tr>
							<tr>
								<td>Lawn mower</td>
								<td>Tondeuse à gazon</td>
								<td>جزازة العشب</td>
							</tr>
							<tr>
								<td>Leaf</td>
								<td>Feuille</td>
								<td>ورقة الشجر</td>
							</tr>
							<tr>
								<td>Leek</td>
								<td>Poireau</td>
								<td>كراث</td>
							</tr>
							<tr>
								<td>Lentils</td>
								<td>Lentilles</td>
								<td>عدس</td>
							</tr>
							<tr>
								<td>Lettuce</td>
								<td>Laitue</td>
								<td>الخس</td>
							</tr>
							<tr>
								<td>Lilacs</td>
								<td>Lilas</td>
								<td>الليلك</td>
							</tr>
							<tr>
								<td>Lily</td>
								<td>Lis</td>
								<td>زنبق</td>
							</tr>
							<tr>
								<td>Lily of the valley</td>
								<td>Muguet</td>
								<td>زنبق الوادي</td>
							</tr>
							<tr>
								<td>Malt</td>
								<td>Malt</td>
								<td>ملت</td>
							</tr>
							<tr>
								<td>Marshmallow</td>
								<td>Guimauve</td>
								<td>الخطمي</td>
							</tr>
							<tr>
								<td>Mint</td>
								<td>Menthe</td>
								<td>نعناع</td>
							</tr>
							<tr>
								<td>Mushroom</td>
								<td>Champignon</td>
								<td>فطر</td>
							</tr>
							<tr>
								<td>Oat</td>
								<td>Avoine</td>
								<td>شوفان</td>
							</tr>
							<tr>
								<td>Officinal sage</td>
								<td>Sauge officinale</td>
								<td>المريمية</td>
							</tr>
							<tr>
								<td>Onion</td>
								<td>Oignon</td>
								<td>بصلة</td>
							</tr>
							<tr>
								<td>Orchard</td>
								<td>Verger</td>
								<td>بستان</td>
							</tr>
							<tr>
								<td>Orchid</td>
								<td>Orchidée</td>
								<td>الأوركيد</td>
							</tr>
							<tr>
								<td>Parsley</td>
								<td>Persil</td>
								<td>بقدونس</td>
							</tr>
							<tr>
								<td>Path</td>
								<td>Chemin</td>
								<td>مسار</td>
							</tr>
							<tr>
								<td>Peanut</td>
								<td>Arachide</td>
								<td>الفول السوداني</td>
							</tr>
							<tr>
								<td>Peas</td>
								<td>Pois</td>
								<td>بازيلاء</td>
							</tr>
							<tr>
								<td>Peony</td>
								<td>Pivoine</td>
								<td>الفاوانيا</td>
							</tr>
							<tr>
								<td>Pepper</td>
								<td>Poivron</td>
								<td>فلفل</td>
							</tr>
							<tr>
								<td>Plant</td>
								<td>Plante</td>
								<td>نبتة</td>
							</tr>
							<tr>
								<td>Poppy</td>
								<td>Coquelicot</td>
								<td>خشخاش</td>
							</tr>
							<tr>
								<td>Pumpkin</td>
								<td>Citrouille</td>
								<td>يقطين</td>
							</tr>
							<tr>
								<td>Radish</td>
								<td>Radis</td>
								<td>فجل</td>
							</tr>
							<tr>
								<td>Rain</td>
								<td>Pluie</td>
								<td>مطر</td>
							</tr>
							<tr>
								<td>Root</td>
								<td>Racine</td>
								<td>جذر</td>
							</tr>
							<tr>
								<td>Rose</td>
								<td>Rose</td>
								<td>وردة</td>
							</tr>
							<tr>
								<td>Rosemary</td>
								<td>Romarin</td>
								<td>إكليل الجبل</td>
							</tr>
							<tr>
								<td>Rye</td>
								<td>Seigle</td>
								<td>شيلم مزروع</td>
							</tr>
							<tr>
								<td>Saffron</td>
								<td>Safran</td>
								<td>زعفران</td>
							</tr>
							<tr>
								<td>Salad</td>
								<td>Salade</td>
								<td>سلطة</td>
							</tr>
							<tr>
								<td>Seed</td>
								<td>Graine</td>
								<td>بذرة</td>
							</tr>
							<tr>
								<td>Sesame</td>
								<td>Sésame</td>
								<td>سمسم</td>
							</tr>
							<tr>
								<td>Snowdrop</td>
								<td>Perce-neige</td>
								<td>زهرة اللبن الثلجية</td>
							</tr>
							<tr>
								<td>Soil</td>
								<td>Sol</td>
								<td>تربة</td>
							</tr>
							<tr>
								<td>Spinach</td>
								<td>épinard</td>
								<td>سبانخ</td>
							</tr>
							<tr>
								<td>Spring</td>
								<td>printemps</td>
								<td>الربيع</td>
							</tr>
							<tr>
								<td>Spring onion</td>
								<td>oignon de printemps</td>
								<td>بصل الربيع</td>
							</tr>
							<tr>
								<td>Summer</td>
								<td>été</td>
								<td>الصيف</td>
							</tr>
							<tr>
								<td>Sun</td>
								<td>soleil</td>
								<td>شمس</td>
							</tr>
							<tr>
								<td>Sunflower</td>
								<td>tournesol</td>
								<td>دوار الشمس</td>
							</tr>
							<tr>
								<td>Thorn</td>
								<td>épine</td>
								<td>شوكة</td>
							</tr>
							<tr>
								<td>Tool</td>
								<td>outil</td>
								<td>أداة</td>
							</tr>
							<tr>
								<td>Trefoil</td>
								<td>Trèfle</td>
								<td>نفل</td>
							</tr>
							<tr>
								<td>Trunk</td>
								<td>tronc</td>
								<td>جذع</td>
							</tr>
							<tr>
								<td>Turnip</td>
								<td>navet</td>
								<td>لفت نبات</td>
							</tr>
							<tr>
								<td>Vegetable</td>
								<td>légumes</td>
								<td>الخضروات</td>
							</tr>
							<tr>
								<td>Wasp</td>
								<td>guêpe</td>
								<td>دبور</td>
							</tr>
							<tr>
								<td>Watering can</td>
								<td>arrosoir</td>
								<td>صفيحة للري</td>
							</tr>
							<tr>
								<td>Weed</td>
								<td>mauvaise herbe</td>
								<td>عشبة ضارة</td>
							</tr>
							<tr>
								<td>Wheelbarrow</td>
								<td>brouette</td>
								<td>عربة يدوية</td>
							</tr>
							<tr>
								<td>Winter</td>
								<td>hiver</td>
								<td>الشتاء</td>
							</tr>
							<tr>
								<td>Wood</td>
								<td>bois</td>
								<td>خشب</td>
							</tr>
							<tr>
								<td>Worm</td>
								<td>ver</td>
								<td>دودة</td>
							</tr>
							<tr>
								<td>Zucchini</td>
								<td>courgette</td>
								<td>كوسة</td>
							</tr>
							<tr>
								<td class="soustitre">Trees</td>
								<td class="soustitre">Arbres</td>
								<td class="soustitre">الأشجار</td>
							</tr>
							<tr>
								<td>Apple tree</td>
								<td>pommier</td>
								<td>شجرة تفاح</td>
							</tr>
							<tr>
								<td>Apricot tree</td>
								<td>Abricotier</td>
								<td>شجرة المشمش</td>
							</tr>
							<tr>
								<td>Avocado tree</td>
								<td>Avocatier</td>
								<td>شجرة الأفوكادو</td>
							</tr>
							<tr>
								<td>Banana tree</td>
								<td>Bananier</td>
								<td>شجرة الموز</td>
							</tr>
							<tr>
								<td>Beech tree</td>
								<td>Hêtre</td>
								<td>شجرة الزان</td>
							</tr>
							<tr>
								<td>Birch tree</td>
								<td>Bouleau</td>
								<td>شجرة البتولا</td>
							</tr>
							<tr>
								<td>Cacao tree</td>
								<td>Cacaoyer</td>
								<td>شجرة الكاكاو</td>
							</tr>
							<tr>
								<td>Carob tree</td>
								<td>Caroubier</td>
								<td>شجرة الخروب</td>
							</tr>
							<tr>
								<td>Cherry tree</td>
								<td>Cerisier</td>
								<td>شجرة كرز</td>
							</tr>
							<tr>
								<td>Chestnut tree</td>
								<td>Châtaignier</td>
								<td>شجرة الكستناء</td>
							</tr>
							<tr>
								<td>Coconut tree</td>
								<td>Cocotier</td>
								<td>شجرة جوزة الهند</td>
							</tr>
							<tr>
								<td>coffee tree</td>
								<td>Caféier</td>
								<td>شجرة البن</td>
							</tr>
							<tr>
								<td>Cypress</td>
								<td>Cyprès</td>
								<td>شجر السرو</td>
							</tr>
							<tr>
								<td>date-palm</td>
								<td>Dattier</td>
								<td>النخلة</td>
							</tr>
							<tr>
								<td>Elm tree</td>
								<td>Orme</td>
								<td>شجرة الدردار</td>
							</tr>
							<tr>
								<td>Fig tree</td>
								<td>Figuier</td>
								<td>شجرة التين</td>
							</tr>
							<tr>
								<td>Fir tree</td>
								<td>Sapin</td>
								<td>شجرة التنوب</td>
							</tr>
							<tr>
								<td>Guava tree</td>
								<td>Goyavier</td>
								<td>شجرة الجوافة</td>
							</tr>
							<tr>
								<td>Hazelnut tree</td>
								<td>Noisetier</td>
								<td>شجرة البندق</td>
							</tr>
							<tr>
								<td>Lemon tree</td>
								<td>Citronnier</td>
								<td>شجرة ليمون</td>
							</tr>
							<tr>
								<td>Mandarin tree</td>
								<td>Mandarinier</td>
								<td>شجرة اليوسفي</td>
							</tr>
							<tr>
								<td>Maple tree</td>
								<td>Érable</td>
								<td>شجرة القيقب</td>
							</tr>
							<tr>
								<td>mulberry tree</td>
								<td>Mûrier</td>
								<td>شجرة التوت</td>
							</tr>
							<tr>
								<td>Nutmeg tree</td>
								<td>Muscadier</td>
								<td>شجرة جوزة الطيب</td>
							</tr>
							<tr>
								<td>Oak tree</td>
								<td>Chêne</td>
								<td>شجرة البلوط</td>
							</tr>
							<tr>
								<td>Olivier</td>
								<td>Olivier</td>
								<td>شجرة الزيتون</td>
							</tr>
							<tr>
								<td>Orange tree</td>
								<td>Oranger</td>
								<td>شجرة البرتقال</td>
							</tr>
							<tr>
								<td>Peach tree</td>
								<td>Pêcher</td>
								<td>شجرة الخوخ</td>
							</tr>
							<tr>
								<td>Pear tree</td>
								<td>Poirier</td>
								<td>شجرة إجاص</td>
							</tr>
							<tr>
								<td>Pine tree</td>
								<td>Pin</td>
								<td>شجرة الصنوبر</td>
							</tr>
							<tr>
								<td>Plane tree</td>
								<td>Platane</td>
								<td>شجرة الطائرة</td>
							</tr>
							<tr>
								<td>Pomegranate tree</td>
								<td>Grenadier</td>
								<td>شجرة الرمان</td>
							</tr>
							<tr>
								<td>Poplar tree</td>
								<td>Peuplier</td>
								<td>شجرة حور</td>
							</tr>
							<tr>
								<td>Rose tree</td>
								<td>Rosier</td>
								<td>شجيرة الورد</td>
							</tr>
							<tr>
								<td>Shrub, bush</td>
								<td>Arbuste, arbrisseau, buisson</td>
								<td>شجيرة</td>
							</tr>
							<tr>
								<td>Strawberries tree</td>
								<td>Fraisier</td>
								<td>شجرة الفراولة</td>
							</tr>
							<tr>
								<td>Walnut tree</td>
								<td>noyer</td>
								<td>شجرة الجوز</td>
							</tr>
							<tr>
								<th>Useful verbs</th>
								<th>Verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To grow</td>
								<td>pousser</td>
								<td>ينمو</td>
							</tr>
							<tr>
								<td>To pick</td>
								<td>cueillir</td>
								<td>يقطف</td>
							</tr>
							<tr>
								<td>To plant</td>
								<td>planter</td>
								<td>يزرع</td>
							</tr>
							<tr>
								<td>To water</td>
								<td>arroser</td>
								<td>يسقي</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/naturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nature<?php endif; if($langue === 'english'): ?>Nature<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nature.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/legumeslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Légumes<?php endif; if($langue === 'english'): ?>Vegetables<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="legumes.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;">  <?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
