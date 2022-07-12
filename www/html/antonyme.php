<?php
		$titrefr = "ANTONYMES";
		$titreang = "ANTONYMS";
		$bg = "./assets/img/bgtheme/antonymebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Antonymes<?php endif; if($langue === 'english'): ?>Antonyms<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire des antonymes en Anglais - Français - Arabe">
		<meta name="keywords" content="antonyms, antonym, antonymes, mot, mots contraires, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Antonymes<?php endif; if($langue === 'english'): ?>Antonyms<?php endif; ?></h1>

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
									<td class="soustitre">Nouns</td>
									<td class="soustitre">Noms</td>
									<td class="soustitre">الأسماء</td>
								</tr>
								<tr>
									<td class="motContdaire1">Addition</td>
									<td class="motContdaire1">Addition</td>
									<td class="motContdaire1">إضافة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Substraction</td>
									<td class="motContdaire1">Soustraction</td>
									<td class="motContdaire1">الطرح</td>
								</tr>
								<tr>
									<td class="motContdaire2">Advantages/pros</td>
									<td class="motContdaire2">avantages</td>
									<td class="motContdaire2">فوائد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Disadvantages/cons</td>
									<td class="motContdaire2">désavatanges/inconvénients</td>
									<td class="motContdaire2">سلبيات</td>
								</tr>
								<tr>
									<td class="motContdaire1">Asset</td>
									<td class="motContdaire1">actif</td>
									<td class="motContdaire1">أصول</td>
								</tr>
								<tr>
									<td class="motContdaire1">Liability</td>
									<td class="motContdaire1">passif</td>
									<td class="motContdaire1">مطلوبات</td>
								</tr>
								<tr>
									<td class="motContdaire2">Balance</td>
									<td class="motContdaire2">équilibre</td>
									<td class="motContdaire2">توازن</td>
								</tr>
								<tr>
									<td class="motContdaire2">Imbalance</td>
									<td class="motContdaire2">déséquilibre</td>
									<td class="motContdaire2">اختلال التوازن</td>
								</tr>
								<tr>
									<td class="motContdaire1">Beginning</td>
									<td class="motContdaire1">début</td>
									<td class="motContdaire1">البداية</td>
								</tr>
								<tr>
									<td class="motContdaire1">End</td>
									<td class="motContdaire1">fin</td>
									<td class="motContdaire1">النهاية</td>
								</tr>
								<tr>
									<td class="motContdaire2">Brother</td>
									<td class="motContdaire2">frère</td>
									<td class="motContdaire2">أخ</td>
								</tr>
								<tr>
									<td class="motContdaire2">Sister</td>
									<td class="motContdaire2">sœur</td>
									<td class="motContdaire2">أخت</td>
								</tr>
								<tr>
									<td class="motContdaire1">Ceiling</td>
									<td class="motContdaire1">plafond</td>
									<td class="motContdaire1">سقف</td>
								</tr>
								<tr>
									<td class="motContdaire1">Ground</td>
									<td class="motContdaire1">sol</td>
									<td class="motContdaire1">أرض</td>
								</tr>
								<tr>
									<td class="motContdaire2">Dawn</td>
									<td class="motContdaire2">aube</td>
									<td class="motContdaire2">فجر</td>
								</tr>
								<tr>
									<td class="motContdaire2">Dusk</td>
									<td class="motContdaire2">crépuscule</td>
									<td class="motContdaire2">الغسق</td>
								</tr>
								<tr>
									<td class="motContdaire1">Entrance</td>
									<td class="motContdaire1">entrée</td>
									<td class="motContdaire1">مدخل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Exit</td>
									<td class="motContdaire1">sortie</td>
									<td class="motContdaire1">مخرج</td>
								</tr>
								<tr>
									<td class="motContdaire2">Father</td>
									<td class="motContdaire2">père</td>
									<td class="motContdaire2">الآب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Mother</td>
									<td class="motContdaire2">mère</td>
									<td class="motContdaire2">الأم</td>
								</tr>
								<tr>
									<td class="motContdaire1">Friend</td>
									<td class="motContdaire1">ami</td>
									<td class="motContdaire1">صديق</td>
								</tr>
								<tr>
									<td class="motContdaire1">Enemy</td>
									<td class="motContdaire1">ennemi</td>
									<td class="motContdaire1">العدو</td>
								</tr>
								<tr>
									<td class="motContdaire2">Gain</td>
									<td class="motContdaire2">gain</td>
									<td class="motContdaire2">ربح</td>
								</tr>
								<tr>
									<td class="motContdaire2">Loss</td>
									<td class="motContdaire2">perte</td>
									<td class="motContdaire2">خسارة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Happiness</td>
									<td class="motContdaire1">Bonheur</td>
									<td class="motContdaire1">السعادة</td>
								</tr>
								<tr>
									<td class="motContdaire1">misfortune</td>
									<td class="motContdaire1">malheur</td>
									<td class="motContdaire1">مصيبة</td>
								</tr>
								<tr>
									<td class="motContdaire2">Importation</td>
									<td class="motContdaire2">importation</td>
									<td class="motContdaire2">استيراد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Exportation</td>
									<td class="motContdaire2">exportation</td>
									<td class="motContdaire2">تصدير</td>
								</tr>
								<tr>
									<td class="motContdaire1">Life</td>
									<td class="motContdaire1">vie</td>
									<td class="motContdaire1">الحياة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Death</td>
									<td class="motContdaire1">mort</td>
									<td class="motContdaire1">الموت</td>
								</tr>
								<tr>
									<td class="motContdaire2">Man</td>
									<td class="motContdaire2">homme</td>
									<td class="motContdaire2">رجل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Woman</td>
									<td class="motContdaire2">femme</td>
									<td class="motContdaire2">النساء</td>
								</tr>
								<tr>
									<td class="motContdaire1">Morning</td>
									<td class="motContdaire1">Matin</td>
									<td class="motContdaire1">صباح</td>
								</tr>
								<tr>
									<td class="motContdaire1">Evening</td>
									<td class="motContdaire1">soir</td>
									<td class="motContdaire1">مساء</td>
								</tr>
								<tr>
									<td class="motContdaire2">Opportunity</td>
									<td class="motContdaire2">opportunité</td>
									<td class="motContdaire2">فرصة</td>
								</tr>
								<tr>
									<td class="motContdaire2">Obstacle</td>
									<td class="motContdaire2">obstacle</td>
									<td class="motContdaire2">عائق/td>
								</tr>
								<tr>
									<td class="motContdaire1">Peace</td>
									<td class="motContdaire1">paix</td>
									<td class="motContdaire1">سلام</td>
								</tr>
								<tr>
									<td class="motContdaire1">War</td>
									<td class="motContdaire1">guerre</td>
									<td class="motContdaire1">حرب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Problem</td>
									<td class="motContdaire2">problème</td>
									<td class="motContdaire2">مشكلة</td>
								</tr>
								<tr>
									<td class="motContdaire2">Solution</td>
									<td class="motContdaire2">solution</td>
									<td class="motContdaire2">حل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Professor</td>
									<td class="motContdaire1">professeur</td>
									<td class="motContdaire1">أستاذ</td>
								</tr>
								<tr>
									<td class="motContdaire1">Student</td>
									<td class="motContdaire1">étudiant</td>
									<td class="motContdaire1">طالب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Question</td>
									<td class="motContdaire2">question</td>
									<td class="motContdaire2">سؤال</td>
								</tr>
								<tr>
									<td class="motContdaire2">Answer</td>
									<td class="motContdaire2">réponse</td>
									<td class="motContdaire2">إجابة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Right</td>
									<td class="motContdaire1">droite</td>
									<td class="motContdaire1">يمين</td>
								</tr>
								<tr>
									<td class="motContdaire1">Left</td>
									<td class="motContdaire1">gauche</td>
									<td class="motContdaire1">يسار</td>
								</tr>
								<tr>
									<td class="motContdaire2">Sun</td>
									<td class="motContdaire2">soleil</td>
									<td class="motContdaire2">شمس</td>
								</tr>
								<tr>
									<td class="motContdaire2">Moon</td>
									<td class="motContdaire2">lune</td>
									<td class="motContdaire2">القمر</td>
								</tr>
								<tr>
									<td class="motContdaire1">White</td>
									<td class="motContdaire1">blanc</td>
									<td class="motContdaire1">أبيض</td>
								</tr>
								<tr>
									<td class="motContdaire1">Black</td>
									<td class="motContdaire1">noir</td>
									<td class="motContdaire1">أسود</td>
								</tr>
								<tr>
									<td class="soustitre">invariable words</td>
									<td class="soustitre">mots invariables</td>
									<td class="soustitre">الكلمات الثابتة</td>
								</tr>
								<tr>
									<td class="motContdaire2">A lot</td>
									<td class="motContdaire2">beaucoup</td>
									<td class="motContdaire2">كثير</td>
								</tr>
								<tr>
									<td class="motContdaire2">Few</td>
									<td class="motContdaire2">peu</td>
									<td class="motContdaire2">قليل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Above</td>
									<td class="motContdaire1">dessus</td>
									<td class="motContdaire1">فوق</td>
								</tr>
								<tr>
									<td class="motContdaire1">below</td>
									<td class="motContdaire1">dessous</td>
									<td class="motContdaire1">أدناه</td>
								</tr>
								<tr>
									<td class="motContdaire2">Always</td>
									<td class="motContdaire2">toujours</td>
									<td class="motContdaire2">دائما</td>
								</tr>
								<tr>
									<td class="motContdaire2">Never</td>
									<td class="motContdaire2">jamais</td>
									<td class="motContdaire2">أبدا</td>
								</tr>
								<tr>
									<td class="motContdaire1">Before</td>
									<td class="motContdaire1">avant</td>
									<td class="motContdaire1">قبل</td>
								</tr>
								<tr>
									<td class="motContdaire1">After</td>
									<td class="motContdaire1">après</td>
									<td class="motContdaire1">بعد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Early</td>
									<td class="motContdaire2">tôt</td>
									<td class="motContdaire2">مبكرا</td>
								</tr>
								<tr>
									<td class="motContdaire2">Late</td>
									<td class="motContdaire2">tard</td>
									<td class="motContdaire2">متأخر</td>
								</tr>
								<tr>
									<td class="motContdaire1">Everything</td>
									<td class="motContdaire1">tout</td>
									<td class="motContdaire1">كل شيء</td>
								</tr>
								<tr>
									<td class="motContdaire1">Nothing</td>
									<td class="motContdaire1">rien</td>
									<td class="motContdaire1">ا شيئ</td>
								</tr>
								<tr>
									<td class="motContdaire2">Exactly</td>
									<td class="motContdaire2">exactement</td>
									<td class="motContdaire2">بالضبط</td>
								</tr>
								<tr>
									<td class="motContdaire2">approximately</td>
									<td class="motContdaire2">approximativement</td>
									<td class="motContdaire2">تقريبا</td>
								</tr>
								<tr>
									<td class="motContdaire1">First</td>
									<td class="motContdaire1">premier</td>
									<td class="motContdaire1">أول</td>
								</tr>
								<tr>
									<td class="motContdaire1">Last</td>
									<td class="motContdaire1">dernier</td>
									<td class="motContdaire1">آخر</td>
								</tr>
								<tr>
									<td class="motContdaire2">Here</td>
									<td class="motContdaire2">ici</td>
									<td class="motContdaire2">هنا</td>
								</tr>
								<tr>
									<td class="motContdaire2">There</td>
									<td class="motContdaire2">là-bas</td>
									<td class="motContdaire2">هناك</td>
								</tr>
								<tr>
									<td class="motContdaire1">In front of</td>
									<td class="motContdaire1">devant</td>
									<td class="motContdaire1">أمام</td>
								</tr>
								<tr>
									<td class="motContdaire1">Behind</td>
									<td class="motContdaire1">derrière</td>
									<td class="motContdaire1">خلف</td>
								</tr>
								<tr>
									<td class="motContdaire2">Inside</td>
									<td class="motContdaire2">intérieur</td>
									<td class="motContdaire2">في الداخل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Outside</td>
									<td class="motContdaire2">extérieur</td>
									<td class="motContdaire2">في الخارج</td>
								</tr>
								<tr>
									<td class="motContdaire1">Now</td>
									<td class="motContdaire1">maintenant</td>
									<td class="motContdaire1">الآن</td>
								</tr>
								<tr>
									<td class="motContdaire1">Later</td>
									<td class="motContdaire1">plus tard</td>
									<td class="motContdaire1">فيما بعد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Often</td>
									<td class="motContdaire2">souvent</td>
									<td class="motContdaire2">غالبا</td>
								</tr>
								<tr>
									<td class="motContdaire2">Scarcely/Seldom/rarely</td>
									<td class="motContdaire2">rarement</td>
									<td class="motContdaire2">نادرا</td>
								</tr>
								<tr>
									<td class="motContdaire1">On</td>
									<td class="motContdaire1">sur</td>
									<td class="motContdaire1">على</td>
								</tr>
								<tr>
									<td class="motContdaire1">Under</td>
									<td class="motContdaire1">sous</td>
									<td class="motContdaire1">أدناه</td>
								</tr>
								<tr>
									<td class="motContdaire2">Out</td>
									<td class="motContdaire2">dehors</td>
									<td class="motContdaire2">خارج</td>
								</tr>
								<tr>
									<td class="motContdaire2">In</td>
									<td class="motContdaire2">dedans</td>
									<td class="motContdaire2">داخل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Plus</td>
									<td class="motContdaire1">plus</td>
									<td class="motContdaire1">زائد</td>
								</tr>
								<tr>
									<td class="motContdaire1">Minus</td>
									<td class="motContdaire1">moins</td>
									<td class="motContdaire1">ناقص</td>
								</tr>
								<tr>
									<td class="motContdaire2">With</td>
									<td class="motContdaire2">avec</td>
									<td class="motContdaire2">مع</td>
								</tr>
								<tr>
									<td class="motContdaire2">Without</td>
									<td class="motContdaire2">sans</td>
									<td class="motContdaire2">بدون</td>
								</tr>
								<tr>
									<td class="motContdaire1">Yes</td>
									<td class="motContdaire1">oui</td>
									<td class="motContdaire1">نعم</td>
								</tr>
								<tr>
									<td class="motContdaire1">No</td>
									<td class="motContdaire1">non</td>
									<td class="motContdaire1">لا</td>
								</tr>
								<tr>
									<td class="motContdaire2">Yesterday</td>
									<td class="motContdaire2">hier</td>
									<td class="motContdaire2">امس</td>
								</tr>
								<tr>
									<td class="motContdaire2">Tomorrow</td>
									<td class="motContdaire2">demain</td>
									<td class="motContdaire2">غدا</td>
								</tr>
								<tr>
									<td class="soustitre">Adjectives</td>
									<td class="soustitre">Adjectifs</td>
									<td class="soustitre">الصفات</td>
								</tr>
								<tr>
									<td class="motContdaire2">Acquired</td>
									<td class="motContdaire2">Acquis</td>
									<td class="motContdaire2">مكتسب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Innate</td>
									<td class="motContdaire2">inné</td>
									<td class="motContdaire2">فطري</td>
								</tr>
								<tr>
									<td class="motContdaire1">Alive</td>
									<td class="motContdaire1">vivant</td>
									<td class="motContdaire1">حي</td>
								</tr>
								<tr>
									<td class="motContdaire1">Dead</td>
									<td class="motContdaire1">mort</td>
									<td class="motContdaire1">ميت</td>
								</tr>
								<tr>
									<td class="motContdaire2">Angry</td>
									<td class="motContdaire2">énervé</td>
									<td class="motContdaire2">منزعج</td>
								</tr>
								<tr>
									<td class="motContdaire2">Calm</td>
									<td class="motContdaire2">Calme</td>
									<td class="motContdaire2">هدوء</td>
								</tr>
								<tr>
									<td class="motContdaire1">Beautiful</td>
									<td class="motContdaire1">beau</td>
									<td class="motContdaire1">جميل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Ugly</td>
									<td class="motContdaire1">moche</td>
									<td class="motContdaire1">قبيح</td>
								</tr>
								<tr>
									<td class="motContdaire2">big</td>
									<td class="motContdaire2">gros</td>
									<td class="motContdaire2">كبير</td>
								</tr>
								<tr>
									<td class="motContdaire2">small</td>
									<td class="motContdaire2">petit</td>
									<td class="motContdaire2">صغير</td>
								</tr>
								<tr>
									<td class="motContdaire1">Brave</td>
									<td class="motContdaire1">courageux</td>
									<td class="motContdaire1">شجاع</td>
								</tr>
								<tr>
									<td class="motContdaire1">Fearful</td>
									<td class="motContdaire1">Peureux</td>
									<td class="motContdaire1">جبان</td>
								</tr>
								<tr>
									<td class="motContdaire2">Burning</td>
									<td class="motContdaire2">brûlant</td>
									<td class="motContdaire2">محرق</td>
								</tr>
								<tr>
									<td class="motContdaire2">Icy</td>
									<td class="motContdaire2">glacial</td>
									<td class="motContdaire2">جليدي</td>
								</tr>
								<tr>
									<td class="motContdaire1">Clean</td>
									<td class="motContdaire1">propre</td>
									<td class="motContdaire1">نظيف</td>
								</tr>
								<tr>
									<td class="motContdaire1">Dirty</td>
									<td class="motContdaire1">propre</td>
									<td class="motContdaire1">قذر</td>
								</tr>
								<tr>
									<td class="motContdaire2">Complicated</td>
									<td class="motContdaire2">compliqué</td>
									<td class="motContdaire2">معقد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Simple</td>
									<td class="motContdaire2">Simple</td>
									<td class="motContdaire2">بسيط</td>
								</tr>
								<tr>
									<td class="motContdaire1">Cool/cold</td>
									<td class="motContdaire1">froid</td>
									<td class="motContdaire1">بارد</td>
								</tr>
								<tr>
									<td class="motContdaire1">Hot/warm</td>
									<td class="motContdaire1">chaud</td>
									<td class="motContdaire1">دافئ</td>
								</tr>
								<tr>
									<td class="motContdaire2">Dark</td>
									<td class="motContdaire2">foncé</td>
									<td class="motContdaire2">داكن</td>
								</tr>
								<tr>
									<td class="motContdaire2">Clear</td>
									<td class="motContdaire2">Clair</td>
									<td class="motContdaire2">واضح</td>
								</tr>
								<tr>
									<td class="motContdaire1">Deep</td>
									<td class="motContdaire1">profond</td>
									<td class="motContdaire1">عميق</td>
								</tr>
								<tr>
									<td class="motContdaire1">Shallow</td>
									<td class="motContdaire1">peu profond</td>
									<td class="motContdaire1">ضحل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Domestic</td>
									<td class="motContdaire2">domestique</td>
									<td class="motContdaire2">منزلي</td>
								</tr>
								<tr>
									<td class="motContdaire2">Wild</td>
									<td class="motContdaire2">sauvage</td>
									<td class="motContdaire2">بري</td>
								</tr>
								<tr>
									<td class="motContdaire1">Dry</td>
									<td class="motContdaire1">sec</td>
									<td class="motContdaire1">جاف</td>
								</tr>
								<tr>
									<td class="motContdaire1">Wet</td>
									<td class="motContdaire1">mouillé</td>
									<td class="motContdaire1">مبلل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Easy</td>
									<td class="motContdaire2">facile</td>
									<td class="motContdaire2">سهل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Difficult/hard</td>
									<td class="motContdaire2">difficile/dur</td>
									<td class="motContdaire2">صعب</td>
								</tr>
								<tr>
									<td class="motContdaire1">Empty</td>
									<td class="motContdaire1">vide</td>
									<td class="motContdaire1">فارغة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Full</td>
									<td class="motContdaire1">plein</td>
									<td class="motContdaire1">ممتلئ</td>
								</tr>
								<tr>
									<td class="motContdaire2">Expensive</td>
									<td class="motContdaire2">cher</td>
									<td class="motContdaire2">مكلفة</td>
								</tr>
								<tr>
									<td class="motContdaire2">Cheap</td>
									<td class="motContdaire2">pas cher</td>
									<td class="motContdaire2">رخيص</td>
								</tr>
								<tr>
									<td class="motContdaire1">Fast</td>
									<td class="motContdaire1">rapide</td>
									<td class="motContdaire1">سريع</td>
								</tr>
								<tr>
									<td class="motContdaire1">Slow</td>
									<td class="motContdaire1">lent</td>
									<td class="motContdaire1">بطيء</td>
								</tr>
								<tr>
									<td class="motContdaire2">Fat</td>
									<td class="motContdaire2">gros</td>
									<td class="motContdaire2">سمين</td>
								</tr>
								<tr>
									<td class="motContdaire2">Skinny</td>
									<td class="motContdaire2">maigre</td>
									<td class="motContdaire2">جلداني</td>
								</tr>
								<tr>
									<td class="motContdaire1">Generous</td>
									<td class="motContdaire1">généreux</td>
									<td class="motContdaire1">سخي</td>
								</tr>
								<tr>
									<td class="motContdaire1">Stingy</td>
									<td class="motContdaire1">Radin/Avare</td>
									<td class="motContdaire1">بخيل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Guilty</td>
									<td class="motContdaire2">coupable</td>
									<td class="motContdaire2">مذنب</td>
								</tr>
								<tr>
									<td class="motContdaire2">innocent</td>
									<td class="motContdaire2">innocent</td>
									<td class="motContdaire2">برئ</td>
								</tr>
								<tr>
									<td class="motContdaire1">Haired</td>
									<td class="motContdaire1">Chevelu</td>
									<td class="motContdaire1">مشعر</td>
								</tr>
								<tr>
									<td class="motContdaire1">Bald</td>
									<td class="motContdaire1">chauve</td>
									<td class="motContdaire1">أصلع</td>
								</tr>
								<tr>
									<td class="motContdaire2">Happy</td>
									<td class="motContdaire2">heureux</td>
									<td class="motContdaire2">سعيد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Sad</td>
									<td class="motContdaire2">triste</td>
									<td class="motContdaire2">حزين</td>
								</tr>
								<tr>
									<td class="motContdaire1">Heavy</td>
									<td class="motContdaire1">lourd</td>
									<td class="motContdaire1">ثقيل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Light</td>
									<td class="motContdaire1">léger</td>
									<td class="motContdaire1">خفيف</td>
								</tr>
								<tr>
									<td class="motContdaire2">Huge</td>
									<td class="motContdaire2">énorme</td>
									<td class="motContdaire2">ضخم</td>
								</tr>
								<tr>
									<td class="motContdaire2">Tiny</td>
									<td class="motContdaire2">minuscule</td>
									<td class="motContdaire2">صغير جدا</td>
								</tr>
								<tr>
									<td class="motContdaire1">Included</td>
									<td class="motContdaire1">inclus</td>
									<td class="motContdaire1">متضمن</td>
								</tr>
								<tr>
									<td class="motContdaire1">Excluded</td>
									<td class="motContdaire1">exclu</td>
									<td class="motContdaire1">مستبعد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Interesting</td>
									<td class="motContdaire2">intéressant</td>
									<td class="motContdaire2">ممتع</td>
								</tr>
								<tr>
									<td class="motContdaire2">Boring</td>
									<td class="motContdaire2">ennuyeux</td>
									<td class="motContdaire2">ممل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Long/tall</td>
									<td class="motContdaire1">long/grand</td>
									<td class="motContdaire1">طويل</td>
								</tr>
								<tr>
									<td class="motContdaire1">Short</td>
									<td class="motContdaire1">court</td>
									<td class="motContdaire1">قصير</td>
								</tr>
								<tr>
									<td class="motContdaire2">luminous</td>
									<td class="motContdaire2">lumineux</td>
									<td class="motContdaire2">مضيئة</td>
								</tr>
								<tr>
									<td class="motContdaire2">Dark/obscure</td>
									<td class="motContdaire2">sombre/obscure</td>
									<td class="motContdaire2">مظلم</td>
								</tr>
								<tr>
									<td class="motContdaire1">Married</td>
									<td class="motContdaire1">marié</td>
									<td class="motContdaire1">متزوج</td>
								</tr>
								<tr>
									<td class="motContdaire1">Single</td>
									<td class="motContdaire1">célibataire</td>
									<td class="motContdaire1">أعزب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Narrow</td>
									<td class="motContdaire2">étroit</td>
									<td class="motContdaire2">ضيق</td>
								</tr>
								<tr>
									<td class="motContdaire2">Wide</td>
									<td class="motContdaire2">large</td>
									<td class="motContdaire2">عريض</td>
								</tr>
								<tr>
									<td class="motContdaire1">Near/close</td>
									<td class="motContdaire1">proche/près</td>
									<td class="motContdaire1">قريب</td>
								</tr>
								<tr>
									<td class="motContdaire1">Far</td>
									<td class="motContdaire1">loin</td>
									<td class="motContdaire1">بعيد</td>
								</tr>
								<tr>
									<td class="motContdaire2">New</td>
									<td class="motContdaire2">nouveau</td>
									<td class="motContdaire2">جديد</td>
								</tr>
								<tr>
									<td class="motContdaire2">Ancient/old</td>
									<td class="motContdaire2">ancien</td>
									<td class="motContdaire2">قديم</td>
								</tr>
								<tr>
									<td class="motContdaire1">Noisy</td>
									<td class="motContdaire1">bruyant</td>
									<td class="motContdaire1">مزعج</td>
								</tr>
								<tr>
									<td class="motContdaire1">Calm</td>
									<td class="motContdaire1">calme</td>
									<td class="motContdaire1">هادئ</td>
								</tr>
								<tr>
									<td class="motContdaire2">Open</td>
									<td class="motContdaire2">ouvert</td>
									<td class="motContdaire2">مفتوح</td>
								</tr>
								<tr>
									<td class="motContdaire2">Closed</td>
									<td class="motContdaire2">fermé</td>
									<td class="motContdaire2">مغلق</td>
								</tr>
								<tr>
									<td class="motContdaire1">Present</td>
									<td class="motContdaire1">présent</td>
									<td class="motContdaire1">حاضر</td>
								</tr>
								<tr>
									<td class="motContdaire1">Private</td>
									<td class="motContdaire1">privé</td>
									<td class="motContdaire1">خاص</td>
								</tr>
								<tr>
									<td class="motContdaire2">Rich</td>
									<td class="motContdaire2">riche</td>
									<td class="motContdaire2">غني</td>
								</tr>
								<tr>
									<td class="motContdaire2">Poor</td>
									<td class="motContdaire2">pauvre</td>
									<td class="motContdaire2">فقير</td>
								</tr>
								<tr>
									<td class="motContdaire1">Rough</td>
									<td class="motContdaire1">rugueux</td>
									<td class="motContdaire1">خشن</td>
								</tr>
								<tr>
									<td class="motContdaire1">Smooth</td>
									<td class="motContdaire1">lisse</td>
									<td class="motContdaire1">أملس</td>
								</tr>
								<tr>
									<td class="motContdaire2">Safe</td>
									<td class="motContdaire2">sûr</td>
									<td class="motContdaire2">آمن</td>
								</tr>
								<tr>
									<td class="motContdaire2">Dangerous</td>
									<td class="motContdaire2">dangereux</td>
									<td class="motContdaire2">خطير</td>
								</tr>
								<tr>
									<td class="motContdaire1">Same</td>
									<td class="motContdaire1">pareil</td>
									<td class="motContdaire1">نفسه</td>
								</tr>
								<tr>
									<td class="motContdaire1">Different</td>
									<td class="motContdaire1">différent</td>
									<td class="motContdaire1">مختلف</td>
								</tr>
								<tr>
									<td class="motContdaire2">Sweet</td>
									<td class="motContdaire2">sucré/doux</td>
									<td class="motContdaire2">حلو</td>
								</tr>
								<tr>
									<td class="motContdaire2">Bitter</td>
									<td class="motContdaire2">amer</td>
									<td class="motContdaire2">مر</td>
								</tr>
								<tr>
									<td class="motContdaire1">Thick</td>
									<td class="motContdaire1">épais</td>
									<td class="motContdaire1">سميك</td>
								</tr>
								<tr>
									<td class="motContdaire1">Thin</td>
									<td class="motContdaire1">fin</td>
									<td class="motContdaire1">نحيف</td>
								</tr>
								<tr>
									<td class="motContdaire2">True</td>
									<td class="motContdaire2">vrai</td>
									<td class="motContdaire2">صحيح</td>
								</tr>
								<tr>
									<td class="motContdaire2">Wrong</td>
									<td class="motContdaire2">faux</td>
									<td class="motContdaire2">خطأ</td>
								</tr>
								<tr>
									<td class="motContdaire1">Up</td>
									<td class="motContdaire1">haut</td>
									<td class="motContdaire1">فوق</td>
								</tr>
								<tr>
									<td class="motContdaire1">Down</td>
									<td class="motContdaire1">bas</td>
									<td class="motContdaire1">أسفل</td>
								</tr>
								<tr>
									<td class="motContdaire2">Useful</td>
									<td class="motContdaire2">utile</td>
									<td class="motContdaire2">نافع</td>
								</tr>
								<tr>
									<td class="motContdaire2">useless</td>
									<td class="motContdaire2">inutile</td>
									<td class="motContdaire2">بدون فائدة</td>
								</tr>
								<tr>
									<td class="motContdaire1">Vertical</td>
									<td class="motContdaire1">vertical</td>
									<td class="motContdaire1">عمودي</td>
								</tr>
								<tr>
									<td class="motContdaire1">Horizontal</td>
									<td class="motContdaire1">horizontal</td>
									<td class="motContdaire1">أفقي</td>
								</tr>
								<tr>
									<td class="motContdaire2">Young</td>
									<td class="motContdaire2">jeune</td>
									<td class="motContdaire2">شاب</td>
								</tr>
								<tr>
									<td class="motContdaire2">Old</td>
									<td class="motContdaire2">vieux</td>
									<td class="motContdaire2">عجوز</td>
								</tr>
								<tr>
									<td class="soustitre">Verbs</td>
									<td class="soustitre">Verbes</td>
									<td class="soustitre">أفعال</td>
								</tr>
								<tr>
									<td class="motContdaire1">To attach</td>
									<td class="motContdaire1">attacher</td>
									<td class="motContdaire1">ربط</td>
								</tr>
								<tr>
									<td class="motContdaire1">To detach</td>
									<td class="motContdaire1">détacher</td>
									<td class="motContdaire1">فصل</td>
								</tr>
								<tr>
									<td class="motContdaire2">To go up</td>
									<td class="motContdaire2">monter</td>
									<td class="motContdaire2">يصعد</td>
								</tr>
								<tr>
									<td class="motContdaire2">To go down</td>
									<td class="motContdaire2">descendre</td>
									<td class="motContdaire2">يهبط</td>
								</tr>
								<tr>
									<td class="motContdaire1">To increase</td>
									<td class="motContdaire1">augmenter</td>
									<td class="motContdaire1">ارتفاع</td>
								</tr>
								<tr>
									<td class="motContdaire1">To decrease</td>
									<td class="motContdaire1">diminuer</td>
									<td class="motContdaire1">تنقيص</td>
								</tr>
								<tr>
									<td class="motContdaire2">To continue</td>
									<td class="motContdaire2">continuer</td>
									<td class="motContdaire2">للاستمرار</td>
								</tr>
								<tr>
									<td class="motContdaire2">To stop</td>
									<td class="motContdaire2">arrêter</td>
									<td class="motContdaire2">توقف</td>
								</tr>
								<tr>
									<td class="motContdaire1">To take off</td>
									<td class="motContdaire1">décoller</td>
									<td class="motContdaire1">اقلاع</td>
								</tr>
								<tr>
									<td class="motContdaire1">to land</td>
									<td class="motContdaire1">atterrir</td>
									<td class="motContdaire1">هبوط </td>
								</tr>
								<tr>
									<td class="motContdaire2">To put on</td>
									<td class="motContdaire2">mettre</td>
									<td class="motContdaire2">ارتداء/وضع</td>
								</tr>
								<tr>
									<td class="motContdaire2">To remove/take off</td>
									<td class="motContdaire2">enlever</td>
									<td class="motContdaire2">إزالة</td>
								</tr>
								<tr>
									<td class="motContdaire1">To move forward</td>
									<td class="motContdaire1">avancer</td>
									<td class="motContdaire1">تحرك إلى الامام</td>
								</tr>
								<tr>
									<td class="motContdaire1">To move back</td>
									<td class="motContdaire1">reculer</td>
									<td class="motContdaire1">التحرك إلى الخلف</td>
								</tr>
								<tr>
									<td class="motContdaire2">To remember</td>
									<td class="motContdaire2">se rappeler</td>
									<td class="motContdaire2">تذكر</td>
								</tr>
								<tr>
									<td class="motContdaire2">To forget</td>
									<td class="motContdaire2">oublier</td>
									<td class="motContdaire2">تنسى</td>
								</tr>
								<tr>
									<td class="motContdaire1">To show</td>
									<td class="motContdaire1">montrer</td>
									<td class="motContdaire1">يعرض</td>
								</tr>
								<tr>
									<td class="motContdaire1">To hide</td>
									<td class="motContdaire1">cacher</td>
									<td class="motContdaire1">إخفاء</td>
								</tr>
								<tr>
									<td class="motContdaire2">To save money</td>
									<td class="motContdaire2">économiser</td>
									<td class="motContdaire2">لتوفير المال</td>
								</tr>
								<tr>
									<td class="motContdaire2">To spend money</td>
									<td class="motContdaire2">dépenser</td>
									<td class="motContdaire2">إنفاق المال</td>
								</tr>
								<tr>
									<td class="motContdaire1">To build</td>
									<td class="motContdaire1">construire</td>
									<td class="motContdaire1">بناء</td>
								</tr>
								<tr>
									<td class="motContdaire1">To destroy</td>
									<td class="motContdaire1">détruire</td>
									<td class="motContdaire1">تدمير</td>
								</tr>
								<tr>
									<td class="motContdaire2">To arrive</td>
									<td class="motContdaire2">arriver</td>
									<td class="motContdaire2">وصل</td>
								</tr>
								<tr>
									<td class="motContdaire2">To leave</td>
									<td class="motContdaire2">partir</td>
									<td class="motContdaire2">غادر</td>
								</tr>
								<tr>
									<td class="motContdaire1">To enter/go in</td>
									<td class="motContdaire1">entrer</td>
									<td class="motContdaire1">دخول</td>
								</tr>
								<tr>
									<td class="motContdaire1">To exit/go out</td>
									<td class="motContdaire1">sortir</td>
									<td class="motContdaire1">خروج</td>
								</tr>
								<tr>
									<td class="motContdaire2">To laugh</td>
									<td class="motContdaire2">rire</td>
									<td class="motContdaire2">ضحك</td>
								</tr>
								<tr>
									<td class="motContdaire2">To cry/weep</td>
									<td class="motContdaire2">pleurer</td>
									<td class="motContdaire2">يبكي</td>
								</tr>
								<tr>
									<td class="motContdaire1">To sell</td>
									<td class="motContdaire1">vendre</td>
									<td class="motContdaire1">بيع</td>
								</tr>
								<tr>
									<td class="motContdaire1">To buy</td>
									<td class="motContdaire1">acheter</td>
									<td class="motContdaire1">شراء</td>
								</tr>
								<tr>
									<td class="motContdaire2">To break</td>
									<td class="motContdaire2">casser</td>
									<td class="motContdaire2">كسر</td>
								</tr>
								<tr>
									<td class="motContdaire2">To repair/fix</td>
									<td class="motContdaire2">réparer</td>
									<td class="motContdaire2">أصلح</td>
								</tr>
								<tr>
									<td class="motContdaire1">To lend</td>
									<td class="motContdaire1">prêter</td>
									<td class="motContdaire1">يقرض</td>
								</tr>
								<tr>
									<td class="motContdaire1">To borrow</td>
									<td class="motContdaire1">emprunter</td>
									<td class="motContdaire1">يستلف</td>
								</tr>
								<tr>
									<td class="motContdaire2">To win</td>
									<td class="motContdaire2">gagner</td>
									<td class="motContdaire2">يربح</td>
								</tr>
								<tr>
									<td class="motContdaire2">To lose</td>
									<td class="motContdaire2">perdre</td>
									<td class="motContdaire2">يخسر</td>
								</tr>
								<tr>
									<td class="motContdaire1">To accelerate</td>
									<td class="motContdaire1">accélérer</td>
									<td class="motContdaire1">تسريع</td>
								</tr>
								<tr>
									<td class="motContdaire1">To slow down</td>
									<td class="motContdaire1">ralentir</td>
									<td class="motContdaire1">يبطئ</td>
								</tr>
								<tr>
									<td class="motContdaire2">To push</td>
									<td class="motContdaire2">pousser</td>
									<td class="motContdaire2">دفع</td>
								</tr>
								<tr>
									<td class="motContdaire2">To pull</td>
									<td class="motContdaire2">tirer</td>
									<td class="motContdaire2">جذب</td>
								</tr>
								<tr>
									<td class="motContdaire1">To take</td>
									<td class="motContdaire1">prendre</td>
									<td class="motContdaire1">أخذ</td>
								</tr>
								<tr>
									<td class="motContdaire1">To give</td>
									<td class="motContdaire1">donner</td>
									<td class="motContdaire1">إعطاء</td>
								</tr>
								<tr>
									<td class="motContdaire2">To sleep</td>
									<td class="motContdaire2">dormir</td>
									<td class="motContdaire2">نوم</td>
								</tr>
								<tr>
									<td class="motContdaire2">To wake up</td>
									<td class="motContdaire2">se réveiller</td>
									<td class="motContdaire2">إستيقاظ</td>
								</tr>
								<tr>
									<td class="motContdaire1">To hold</td>
									<td class="motContdaire1">tenir</td>
									<td class="motContdaire1">يمسك</td>
								</tr>
								<tr>
									<td class="motContdaire1">To release</td>
									<td class="motContdaire1">lâcher</td>
									<td class="motContdaire1">يترك</td>
								</tr>
								<tr>
									<td class="motContdaire2">To turn on/switch on</td>
									<td class="motContdaire2">allumer</td>
									<td class="motContdaire2">تشغيل</td>
								</tr>
								<tr>
									<td class="motContdaire2">To turn off/switch off</td>
									<td class="motContdaire2">éteindre</td>
									<td class="motContdaire2">إطفاء</td>
								</tr>
								<tr>
									<td class="motContdaire1">To send</td>
									<td class="motContdaire1">envoyer</td>
									<td class="motContdaire1">إرسال</td>
								</tr>
								<tr>
									<td class="motContdaire1">To receive</td>
									<td class="motContdaire1">recevoir</td>
									<td class="motContdaire1">استقبال</td>
								</tr>
								<tr>
									<td class="motContdaire2">To pass</td>
									<td class="motContdaire2">réussir</td>
									<td class="motContdaire2">اجتياز</td>
								</tr>
								<tr>
									<td class="motContdaire2">To fail</td>
									<td class="motContdaire2">rater</td>
									<td class="motContdaire2">فشل</td>
								</tr>
								<tr>
									<td class="motContdaire1">To love</td>
									<td class="motContdaire1">aimer</td>
									<td class="motContdaire1">يحب</td>
								</tr>
								<tr>
									<td class="motContdaire1">To hate</td>
									<td class="motContdaire1">détester</td>
									<td class="motContdaire1">يكره</td>
								</tr>
								<tr>
									<td class="motContdaire2">To write</td>
									<td class="motContdaire2">écrire</td>
									<td class="motContdaire2">يكتب</td>
								</tr>
								<tr>
									<td class="motContdaire2">To remove</td>
									<td class="motContdaire2">effacer</td>
									<td class="motContdaire2">مسح</td>
								</tr>
								<tr>
									<td class="motContdaire1">To fill</td>
									<td class="motContdaire1">remplir</td>
									<td class="motContdaire1">ملء</td>
								</tr>
								<tr>
									<td class="motContdaire1">To void</td>
									<td class="motContdaire1">vider</td>
									<td class="motContdaire1">فرغ</td>
								</tr>
								<tr>
									<td class="motContdaire2">To forbid/prevent</td>
									<td class="motContdaire2">interdire</td>
									<td class="motContdaire2">منع</td>
								</tr>
								<tr>
									<td class="motContdaire2"> To allow</td>
									<td class="motContdaire2">autoriser</td>
									<td class="motContdaire2">سمح</td>
								</tr>
								<tr>
									<td class="motContdaire1">To sit</td>
									<td class="motContdaire1">s'asseoir</td>
									<td class="motContdaire1">جلس</td>
								</tr>
								<tr>
									<td class="motContdaire1">To stand/rise</td>
									<td class="motContdaire1">se lever</td>
									<td class="motContdaire1">وقف</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/qualitedefautlogo.png" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Qualités & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="qualitedefaut.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/motdeliaisonlogo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Mot de liaison<?php endif; if($langue === 'english'): ?>Linking words<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="motdeliaison.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
