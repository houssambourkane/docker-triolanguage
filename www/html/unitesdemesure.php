<?php
		$titrefr = "SCIENCE & UNITES DE MESURE";
		$titreang = "SCIENCE & UNITS OF MEASURE";
		$bg = "./assets/img/bgtheme/unitesdemesurebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de la science et des unités de mesure en Anglais - Français - Arabe">
		<meta name="keywords" content="science, unité, mesure, unity, unities, unités, discipline, savant, scientific, scientifique, scientist, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></h1>

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
									<td class="soustitre">Units used in all scientific subjects</td>
									<td class="soustitre">Unités utilisées dans toutes les matières scientifiques</td>
									<td class="soustitre">الوحدات المستخدمة في جميع المواد العلمية</td>
								</tr>
								<tr>
									<td>Second</td>
									<td>Seconde</td>
									<td>الثانية</td>
								</tr>
								<tr>
									<td>Kilogram</td>
									<td>Kilogramme</td>
									<td>كيلوغرام</td>
								</tr>
								<tr>
									<td>Metre</td>
									<td>Mètre</td>
									<td>متر</td>
								</tr>
								<tr>
									<td>Square meter</td>
									<td>Mètre carré</td>
									<td>متر مربع</td>
								</tr>
								<tr>
									<td>Watt</td>
									<td>Watt</td>
									<td>واط</td>
								</tr>
								<tr>
									<td>Joule</td>
									<td>Joule</td>
									<td>جول وحدة طاقة</td>
								</tr>
								<tr>
									<td class="soustitre">Mechanical units</td>
									<td class="soustitre">Unités de mécanique</td>
									<td class="soustitre">الوحدات الميكانيكية</td>
								</tr>
								<tr>
									<td>Newton</td>
									<td>Newton</td>
									<td>نيوتن</td>
								</tr>
								<tr>
									<td>Pascal</td>
									<td>Pascal</td>
									<td>محدة ضغط</td>
								</tr>
								<tr>
									<td>Meter per second</td>
									<td>Mètre par seconde</td>
									<td>متر في الثانية الواحدة</td>
								</tr>
								<tr>
									<td>Radian per second</td>
									<td>Radian par seconde</td>
									<td>راديان في الثانية الواحدة</td>
								</tr>
								<tr>
									<td>Hertz</td>
									<td>Hertz</td>
									<td>Hertz</td>
								</tr>

								<tr>
									<td class="soustitre">Electronics units</td>
									<td class="soustitre">Unités d'électronique</td>
									<td class="soustitre">وحدات الالكترونيات</td>
								</tr>
								<tr>
									<td>Volt</td>
									<td>Volt</td>
									<td>فولت</td>
								</tr>
								<tr>
									<td>Ampere</td>
									<td>Ampère</td>
									<td>أمبير</td>
								</tr>
								<tr>
									<td>Ohm</td>
									<td>Ohm</td>
									<td>أوم</td>
								</tr>
								<tr>
									<td>Siemens</td>
									<td>Siemens</td>
									<td>سيمنز</td>
								</tr>
								<tr>
									<td>Farad</td>
									<td>Farad</td>
									<td>الفاراد</td>
								</tr>
								<tr>
									<td>Henry</td>
									<td>Henri</td>
									<td>هنري</td>
								</tr>
								<tr>
									<td>Coulomb</td>
									<td>Coulomb</td>
									<td>الكولون</td>
								</tr>
								<tr>
									<td>Weber</td>
									<td>Weber</td>
									<td>ويبر</td>
								</tr>
								<tr>
									<td>Tesla</td>
									<td>Tesla</td>
									<td>تسلا</td>
								</tr>

								<tr>
									<td class="soustitre">Temperature units</td>
									<td class="soustitre">Unités de température</td>
									<td class="soustitre">وحدات درجة الحرارة</td>
								</tr>
								<tr>
									<td>Kelvin</td>
									<td>Kelvin</td>
									<td>كلفن</td>
								</tr>
								<tr>
									<td>celsius</td>
									<td>Celsius</td>
									<td>سلسيوس</td>
								</tr>
								<tr>
									<td>Fahrenheit</td>
									<td>Fahrenheit</td>
									<td>فهرنهايت</td>
								</tr>
								<tr>
									<td class="soustitre">Radioactivity units</td>
									<td class="soustitre">Unités de radioactivité</td>
									<td class="soustitre">وحدات النشاط الإشعاعي</td>
								</tr>
								<tr>
									<td>becquerel</td>
									<td>becquerel</td>
									<td>بيكريل</td>
								</tr>
								
							
								<tr>
									<td class="soustitre">Scientific vocabulary</td>
									<td class="soustitre">Vocabulaire scientifique</td>
									<td class="soustitre">المفردات العلمية</td>
								</tr>
								<tr>
									<td>acid</td>
									<td>acide</td>
									<td>حمض</td>
								</tr>
								<tr>
									<td>addition</td>
									<td>addition</td>
									<td>إضافة</td>
								</tr>
								<tr>
									<td>algebra</td>
									<td>algèbre</td>
									<td>الجبر</td>
								</tr>
								<tr>
									<td>arithmetic</td>
									<td>arithmétique</td>
									<td>علم الحساب</td>
								</tr>
								<tr>
									<td>astronomy</td>
									<td>astronomie</td>
									<td>الفلك</td>
								</tr>
								<tr>
									<td>Chemical reaction</td>
									<td>réaction chimique</td>
									<td>تفاعل كيميائي</td>
								</tr>
								<tr>
									<td>chemist</td>
									<td>chimiste</td>
									<td>كيميائي</td>
								</tr>
								<tr>
									<td>chemistry</td>
									<td>chimie</td>
									<td>الكيمياء</td>
								</tr>
								<tr>
									<td>conclusion</td>
									<td>conclusion</td>
									<td>استنتاج</td>
								</tr>
								<tr>
									<td>countdown</td>
									<td>compte a rebours</td>
									<td>العد التنازلي</td>
								</tr>
								<tr>
									<td>demonstration</td>
									<td>démonstration</td>
									<td>برهنة</td>
								</tr>
								<tr>
									<td>discovery</td>
									<td>découverte</td>
									<td>اكتشاف</td>
								</tr>
								<tr>
									<td>division</td>
									<td>division</td>
									<td>القسمة</td>
								</tr>
								<tr>
									<td>equation</td>
									<td>équation</td>
									<td>معادلة</td>
								</tr>
								<tr>
									<td>even/odd</td>
									<td>pair/impair</td>
									<td>زوجي / فردي</td>
								</tr>
								<tr>
									<td>Experience/experiment</td>
									<td>expérience</td>
									<td>تجربة</td>
								</tr>
								<tr>
									<td>figure</td>
									<td>chiffre</td>
									<td>رقم</td>
								</tr>
								<tr>
									<td>flask</td>
									<td>ballon</td>
									<td>قارورة</td>
								</tr>
								<tr>
									<td>formula</td>
									<td>formule</td>
									<td>معادلة</td>
								</tr>
								<tr>
									<td>function</td>
									<td>fonction</td>
									<td>دالة</td>
								</tr>
								<tr>
									<td>gas</td>
									<td>gaz</td>
									<td>غاز</td>
								</tr>
								<tr>
									<td>gaseous</td>
									<td>gazeux</td>
									<td>الغازي</td>
								</tr>
								<tr>
									<td>geometry</td>
									<td>géométrie</td>
									<td>علم الهندسة</td>
								</tr>
								<tr>
									<td>invention</td>
									<td>invention</td>
									<td>اختراع</td>
								</tr>
								<tr>
									<td>inventor</td>
									<td>inventeur</td>
									<td>مخترع</td>
								</tr>
								<tr>
									<td>laboratory</td>
									<td>laboratoire</td>
									<td>مختبر</td>
								</tr>
								<tr>
									<td>lens</td>
									<td>lentille/objectif</td>
									<td>عدسة</td>
								</tr>
								<tr>
									<td>liquid</td>
									<td>liquide</td>
									<td>سائل</td>
								</tr>
								<tr>
									<td>mathematician</td>
									<td>mathématicien</td>
									<td>رياضياتي</td>
								</tr>
								<tr>
									<td>mathematics</td>
									<td>mathématiques</td>
									<td>الرياضيات</td>
								</tr>
								<tr>
									<td>multiplication</td>
									<td>multiplication</td>
									<td>عملية الضرب</td>
								</tr>
								<tr>
									<td>number</td>
									<td>nombre</td>
									<td>عدد</td>
								</tr>
								<tr>
									<td>operation</td>
									<td>opération</td>
									<td>عملية</td>
								</tr>
								<tr>
									<td>physicist</td>
									<td>physicien</td>
									<td>الفيزياء</td>
								</tr>
								<tr>
									<td>physics</td>
									<td>physique</td>
									<td>الفيزياء</td>
								</tr>
								<tr>
									<td>planet</td>
									<td>planète</td>
									<td>كوكب</td>
								</tr>
								<tr>
									<td>postulate</td>
									<td>postulat</td>
									<td>افتراض</td>
								</tr>
								<tr>
									<td>product</td>
									<td>produit</td>
									<td>حاصل الضرب</td>
								</tr>
								<tr>
									<td>progress</td>
									<td>progrès</td>
									<td>تقدم</td>
								</tr>
								<tr>
									<td>researcher</td>
									<td>chercheur</td>
									<td>باحث/td>
								</tr>
								<tr>
									<td>result</td>
									<td>résultat</td>
									<td>نتيجة</td>
								</tr>
								<tr>
									<td>science</td>
									<td>science</td>
									<td>العلم</td>
								</tr>
								<tr>
									<td>scientist</td>
									<td>scientifique</td>
									<td>عالم</td>
								</tr>
								<tr>
									<td>solar system</td>
									<td>système solaire</td>
									<td>النظام الشمسي</td>
								</tr>
								<tr>
									<td>solid</td>
									<td>solide</td>
									<td>صلب</td>
								</tr>
								<tr>
									<td>space</td>
									<td>espace</td>
									<td>الفضاء</td>
								</tr>
								<tr>
									<td>subtraction</td>
									<td>soustraction</td>
									<td>الطرح</td>
								</tr>
								<tr>
									<td>sum</td>
									<td>somme</td>
									<td>مجموع</td>
								</tr>
								<tr>
									<td>test tube</td>
									<td>éprouvette</td>
									<td>أنبوب اختبار</td>
								</tr>
								<tr>
									<td>theorem</td>
									<td>théorème</td>
									<td>نظرة رياضية</td>
								</tr>
								<tr>
									<td>Theory</td>
									<td>théorie</td>
									<td>نظرية</td>
								</tr>
								<tr>
									<td>universe</td>
									<td>univers</td>
									<td>الكون</td>
								</tr>
								<tr>
									<td>weightless</td>
									<td>état d’apesanteur</td>
									<td>عديم الوزن</td>
								</tr>

								<tr>
									<td class="soustitre">Geometry</td>
									<td class="soustitre">géométrie</td>
									<td class="soustitre">الهندسة</td>
								</tr>
								<tr>
									<td>square</td>
									<td>carré</td>
									<td>مربع</td>
								</tr>
								<tr>
									<td>circle</td>
									<td>cercle</td>
									<td>دائرة</td>
								</tr>
								<tr>
									<td>rectangle</td>
									<td>rectangle</td>
									<td>مستطيل</td>
								</tr>
								<tr>
									<td>triangle</td>
									<td>triangle</td>
									<td>مثلث</td>
								</tr>
								<tr>
									<td>diamond</td>
									<td>losange</td>
									<td>معين</td>
								</tr>
								<tr>
									<td>side</td>
									<td>coté</td>
									<td>جانب</td>
								</tr>
								<tr>
									<td>Intersection</td>
									<td>Intersection</td>
									<td>التقاطع</td>
								</tr>
								<tr>
									<td>Parallel</td>
									<td>parallèle</td>
									<td>موازي</td>
								</tr>
								<tr>
									<td>perpendicular</td>
									<td>perpendiculaire</td>
									<td>عمودي</td>
								</tr>
								<tr>
									<td>Horizontal</td>
									<td>Horizontal</td>
									<td>أفقي</td>
								</tr>
								<tr>
									<td>Vertical</td>
									<td>Vertical</td>
									<td>عمودي</td>
								</tr>
								<tr>
									<td>Abscisses</td>
									<td>Abscisses</td>
									<td>المحور الافقي</td>
								</tr>
								<tr>
									<td>Ordinates</td>
									<td>Ordonnées</td>
									<td>العمودي المحور</td>
								</tr>
								<tr>
									<td>Axis</td>
									<td>Axe</td>
									<td>محور</td>
								</tr>
								<tr>
									<td>diameter</td>
									<td>diamètre</td>
									<td>قطر الدائرة</td>
								</tr>
								<tr>
									<td>radius</td>
									<td>rayon</td>
									<td>نصف القطر</td>
								</tr>
								<tr>
									<td>bisector</td>
									<td>bissectrice</td>
									<td>المنصف</td>
								</tr>
								<tr>
									<td>area</td>
									<td>surface</td>
									<td>مساحة</td>
								</tr>
								<tr>
									<td>right angle</td>
									<td>angle droit</td>
									<td>زاوية مستقيمة</td>
								</tr>
								<tr>
									<td>acute/obtuse</td>
									<td>aigu/obtus</td>
									<td>حاد / منفرج</td>
								</tr>
								<tr>
									<td>curve</td>
									<td>courbe</td>
									<td>منحنى</td>
								</tr>
								<tr>
									<td>straight line</td>
									<td>une ligne droite</td>
									<td>خط مستقيم</td>
								</tr>
								<tr>
									<td>protractor</td>
									<td>rapporteur</td>
									<td>منقلة</td>
								</tr>
								<tr>
									<td>compass</td>
									<td>compas</td>
									<td>فرجار</td>
								</tr>
								<tr>
									<td class="soustitre">scientific disciplines</td>
									<td class="soustitre">disciplines scientifiques</td>
									<td class="soustitre">التخصصات العلمية</td>
								</tr>
								<tr>
									<td>Anthropology</td>
									<td>Anthropologie</td>
									<td>الأنثروبولوجيا</td>
								</tr>
								<tr>
									<td>Archeology</td>
									<td>Archéologie</td>
									<td>علم الآثار</td>
								</tr>
								<tr>
									<td>Artificial intelligence</td>
									<td>Intelligence artificielle</td>
									<td>ذكاء إصطناعي</td>
								</tr>
								<tr>
									<td>Biology</td>
									<td>Biologie</td>
									<td>البيولوجيا/علم الكائنات</td>
								</tr>
								<tr>
									<td>Cognitive science</td>
									<td>Science cognitive</td>
									<td>العلوم المعرفية</td>
								</tr>
								<tr>
									<td>Ecology</td>
									<td>Écologie</td>
									<td>علم البيئة</td>
								</tr>
								<tr>
									<td>Economy</td>
									<td>Économie</td>
									<td>الاقتصاد</td>
								</tr>
								<tr>
									<td>Ethnology</td>
									<td>Ethnologie</td>
									<td>الإثنولوجيا</td>
								</tr>
								<tr>
									<td>Histology</td>
									<td>Histologie</td>
									<td>علم الانسجة</td>
								</tr>
								<tr>
									<td>Linguistic</td>
									<td>Linguistique</td>
									<td>علم اللغات</td>
								</tr>
								<tr>
									<td>Natural science</td>
									<td>science naturelle</td>
									<td>علم الطبيعة</td>
								</tr>
								<tr>
									<td>Neuroscience/neurologie</td>
									<td>Neurosciences/neurologie</td>
									<td>علم الأعصاب</td>
								</tr>
								<tr>
									<td>Paleontology</td>
									<td>Paléontologie</td>
									<td>علم الحفريات</td>
								</tr>
								<tr>
									<td>Philology</td>
									<td>Philologie</td>
									<td>فقه اللغة</td>
								</tr>
								<tr>
									<td>Political science</td>
									<td>Science politique</td>
									<td>علوم سياسية</td>
								</tr>
								<tr>
									<td>Psychology</td>
									<td>Psychologie</td>
									<td>علم النفس</td>
								</tr>
								<tr>
									<td>Sociology</td>
									<td>Sociologie</td>
									<td>علم الاجتماع</td>
								</tr>
								<tr>
									<td>Zoology</td>
									<td>Zoologie</td>
									<td>علم الحيوان</td>
								</tr>
								<tr>
									<td class="soustitre">Scientific instruments and machines</td>
									<td class="soustitre">Instruments et machines scientifiques</td>
									<td class="soustitre">الأجهزة والآلات العلمية</td>
								</tr>
								<tr>
									<td>Alternator</td>
									<td>Alternateur</td>
									<td>المولد</td>
								</tr>
								<tr>
									<td>Amperemeter</td>
									<td>Ampèremètre</td>
									<td>مقياس التيار الكهربائي</td>
								</tr>
								<tr>
									<td>Amplifier</td>
									<td>Amplificateur</td>
									<td>المضخم</td>
								</tr>
								<tr>
									<td>Anemometer</td>
									<td>Anémomètre</td>
									<td>مقياس شدة الريح</td>
								</tr>
								<tr>
									<td>Antenna</td>
									<td>Antenne</td>
									<td>هوائي</td>
								</tr>
								<tr>
									<td>Artificial satellite</td>
									<td>Satellite artificiel</td>
									<td>قمر اصطناعي</td>
								</tr>
								<tr>
									<td>Audiometer</td>
									<td>Audiomètre</td>
									<td>مقياس السمع</td>
								</tr>
								<tr>
									<td>Barometer</td>
									<td>Baromètre</td>
									<td>بارومتر</td>
								</tr>
								<tr>
									<td>Blood pressure monitor</td>
									<td>Tensiomètre</td>
									<td>جهاز قياس ضغط الدم</td>
								</tr>
								<tr>
									<td>Calculator</td>
									<td>Calculatrice</td>
									<td>آلة حاسبة</td>
								</tr>
								<tr>
									<td>Camera</td>
									<td>Caméra</td>
									<td>آلة تصوير</td>
								</tr>
								<tr>
									<td>Circuit breaker</td>
									<td>Disjoncteur</td>
									<td>قاطع دائرة</td>
								</tr>
								<tr>
									<td>Collimator</td>
									<td>Collimateur</td>
									<td>ميزاء</td>
								</tr>
								<tr>
									<td>Compass</td>
									<td>Boussole</td>
									<td>بوصلة</td>
								</tr>

								
								<tr>
									<td>Compressor</td>
									<td>Compresseur</td>
									<td>ضاغط</td>
								</tr>
								<tr>
									<td>Computer</td>
									<td>Ordinateur</td>
									<td>الحاسوب</td>
								</tr>
								<tr>
									<td>Condenser</td>
									<td>Condenseur</td>
									<td>مكثف</td>
								</tr>
								<tr>
									<td>Detector</td>
									<td>Détecteur</td>
									<td>كاشف</td>
								</tr>
								<tr>
									<td>Diode</td>
									<td>Diode</td>
									<td>الصمام الثنائي</td>
								</tr>
								<tr>
									<td>Dynamo</td>
									<td>Dynamo</td>
									<td>دينامو</td>
								</tr>
								<tr>
									<td>Electric wire</td>
									<td>Fil électrique</td>
									<td>سلك كهربائي</td>
								</tr>
								<tr>
									<td>Electroscope</td>
									<td>Électroscope</td>
									<td>المكشاف الكهربائي</td>
								</tr>
								<tr>
									<td>Engine</td>
									<td>Moteur</td>
									<td>محرك</td>
								</tr>
								<tr>
									<td>Evaporator</td>
									<td>Évaporateur</td>
									<td>المبخر</td>
								</tr>
								<tr>
									<td>Freezer</td>
									<td>Congélateur</td>
									<td>الفريزر</td>
								</tr>
								<tr>
									<td>Generator</td>
									<td>Générateur</td>
									<td>مولد كهرباء</td>
								</tr>
								<tr>
									<td>Gravimeter</td>
									<td>Gravimètre</td>
									<td>مقياس الجاذبية</td>
								</tr>
								<tr>
									<td>Heliometer</td>
									<td>Héliomètre</td>
									<td>هيليومتر</td>
								</tr>
								<tr>
									<td>Hydraulic press</td>
									<td>Presse hydraulique</td>
									<td>الضغط الهيدروليكي</td>
								</tr>
								<tr>
									<td>Hydrometer</td>
									<td>Hydromètre</td>
									<td>مقياس السوائل</td>
								</tr>
								<tr>
									<td>Inclinometer</td>
									<td>Inclinomètre</td>
									<td>الميل</td>
								</tr>
								<tr>
									<td>Incubator</td>
									<td>Incubateur</td>
									<td>حاضنة</td>
								</tr>
								<tr>
									<td>Inductor</td>
									<td>Inducteur</td>
									<td>محث</td>
								</tr>
								<tr>
									<td>Interrupter</td>
									<td>Interrupteur</td>
									<td>قابس الضوء</td>
								</tr>
								<tr>
									<td>Lamp</td>
									<td>Lampe</td>
									<td>مصباح</td>
								</tr>
								<tr>
									<td>Laser</td>
									<td>Laser</td>
									<td>الليزر</td>
								</tr>
								<tr>
									<td>Manometer</td>
									<td>Manomètre</td>
									<td>مقياس الضغط</td>
								</tr>
								<tr>
									<td>Microscope</td>
									<td>Microscope</td>
									<td>مجهر</td>
								</tr>
								<tr>
									<td>Nuclear reactor</td>
									<td>Réacteur nucléaire</td>
									<td>مفاعل نووي</td>
								</tr>
								<tr>
									<td>Optical fiber</td>
									<td>Fibre optique</td>
									<td>الألياف البصرية</td>
								</tr>
								<tr>
									<td>Oximeter</td>
									<td>Oxymètre</td>
									<td>مقياس التأكسج</td>
								</tr>
								<tr>
									<td>pH meter</td>
									<td>pH-mètre</td>
									<td>مقياس درجة الحموضة</td>
								</tr>
								<tr>
									<td>Polarizer</td>
									<td>Polariseur</td>
									<td>المستقطب</td>
								</tr>
								<tr>
									<td>Radar</td>
									<td>Radar</td>
									<td>رادار</td>
								</tr>
								<tr>
									<td>Radiometer</td>
									<td>Radiomètre</td>
									<td>مقياس الإشعاع</td>
								</tr>
								<tr>
									<td>Refracting telescope</td>
									<td>Lunette astronomique</td>
									<td>مقراب انكساري</td>
								</tr>
								<tr>
									<td>Refractometer</td>
									<td>Réfractomètre</td>
									<td>مقياس إنكسار</td>
								</tr>
								<tr>
									<td>Refrigerator</td>
									<td>Réfrigérateur</td>
									<td>ثلاجة</td>
								</tr>
								<tr>
									<td>Resistor</td>
									<td>Résisteur</td>
									<td>المقاوم</td>
								</tr>
								<tr>
									<td>Scanner</td>
									<td>Scanner</td>
									<td>ماسح ضوئي</td>
								</tr>
								<tr>
									<td>Scintillator</td>
									<td>Scintillateur</td>
									<td>وميض</td>
								</tr>
								<tr>
									<td>Sensor</td>
									<td>Capteur</td>
									<td>المستشعر</td>
								</tr>
								<tr>
									<td>Spectroscopy</td>
									<td>Spectroscopie</td>
									<td>التحليل الطيفي</td>
								</tr>
								<tr>
									<td>Stethoscope</td>
									<td>Stéthoscope</td>
									<td>سماعة الطبيب</td>
								</tr>
								<tr>
									<td>Stopwatch</td>
									<td>Chronomètre</td>
									<td>ساعة التوقيف</td>
								</tr>
								<tr>
									<td>Synthesizer</td>
									<td>Synthétiseur</td>
									<td>مركب</td>
								</tr>
								<tr>
									<td>Telescope</td>
									<td>Télescope</td>
									<td>تلسكوب</td>
								</tr>
								<tr>
									<td>Television</td>
									<td>Télévision</td>
									<td>التلفاز</td>
								</tr>
								<tr>
									<td>Thermometer</td>
									<td>Thermomètre</td>
									<td>ميزان الحرارة</td>
								</tr>
								<tr>
									<td>Thermoscope</td>
									<td>Thermoscope</td>
									<td>منظار حراري</td>
								</tr>
								<tr>
									<td>Timer</td>
									<td>Minuterie</td>
									<td>مؤقت</td>
								</tr>
								<tr>
									<td>Voltmeter</td>
									<td>Voltmètre</td>
									<td>الفولتميتر</td>
								</tr>

								<tr>
									<th>Useful verbs</th>
									<th>Verbes utiles</th>
									<th>أفعال مفيدة</th>
								</tr>
								<tr>
									<td>to add</td>
									<td>additionner</td>
									<td>لإضافت</td>
								</tr>
								<tr>
									<td>to calculate</td>
									<td>calculer</td>
									<td>ليحسب</td>
								</tr>
								<tr>
									<td>to conquer</td>
									<td>conquérir</td>
									<td>لقهر</td>
								</tr>
								<tr>
									<td>to count</td>
									<td>compter</td>
									<td>للعد</td>
								</tr>
								<tr>
									<td>to decrease</td>
									<td>décroître</td>
									<td>لتنقيص</td>
								</tr>
								<tr>
									<td>to demonstrate</td>
									<td>démontrer</td>
									<td>برهن</td>
								</tr>
								<tr>
									<td>to discover</td>
									<td>découvrir</td>
									<td>لاكتشاف</td>
								</tr>
								<tr>
									<td>to dissolve</td>
									<td>(se) dissoudre</td>
									<td>ليذوب</td>
								</tr>
								<tr>
									<td>to divide</td>
									<td>diviser</td>
									<td>لتقسيم</td>
								</tr>
								<tr>
									<td>to draw a line</td>
									<td>tracer une ligne</td>
									<td>لرسم خط</td>
								</tr>
								<tr>
									<td>to evaporate</td>
									<td>s’évaporer</td>
									<td>لتتبخر</td>
								</tr>
								<tr>
									<td>to experiment</td>
									<td>expérimenter</td>
									<td>للتجربة</td>
								</tr>
								<tr>
									<td>to explore</td>
									<td>explorer</td>
									<td>لاستكشاف</td>
								</tr>
								<tr>
									<td>to increase</td>
									<td>croître</td>
									<td>لارتفاع</td>
								</tr>
								<tr>
									<td>to invade</td>
									<td>envahir</td>
									<td>لتغزو</td>
								</tr>
								<tr>
									<td>to land on the moon</td>
									<td>alunir</td>
									<td>للهبوط على القمر</td>
								</tr>
								<tr>
									<td>to launch a rocket</td>
									<td>lancer une fusée</td>
									<td>لإطلاق صاروخ</td>
								</tr>
								<tr>
									<td>to magnify</td>
									<td>agrandir</td>
									<td>لتكبير</td>
								</tr>
								<tr>
									<td>to make a mistake</td>
									<td>faire une erreur</td>
									<td>لارتكاب خطأ</td>
								</tr>
								<tr>
									<td>to melt</td>
									<td>fondre</td>
									<td>تذوب</td>
								</tr>
								<tr>
									<td>to multiply</td>
									<td>multiplier</td>
									<td>لمضاعفت</td>
								</tr>
								<tr>
									<td>to probe space</td>
									<td>sonder l’espace</td>
									<td>لاستكشاف الفضاء</td>
								</tr>
								<tr>
									<td>to put into orbit</td>
									<td>mettre en orbite</td>
									<td>لوضعه في المدار</td>
									</tr>
								<tr>
									<td>to serve mankind</td>
									<td>servir l’humanité</td>
									<td>لخدمة البشرية</td>
								</tr>
								<tr>
									<td>to solve a problem</td>
									<td>résoudre un problème</td>
									<td>حل مشكلة</td>
								</tr>
								<tr>
									<td>to spin around</td>
									<td>tourner</td>
									<td>لتدور</td>
								</tr>
								<tr>
									<td>to subtract</td>
									<td>soustraire</td>
									<td>طرح</td>
								</tr>
								<tr>
									<td>To test</td>
									<td>tester</td>
									<td>لاختبار</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/astronomielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Astronomie<?php endif; if($langue === 'english'): ?>Astronomy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="astronomie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/anatomielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Anatomie<?php endif; if($langue === 'english'): ?>Anatomy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="anatomie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		
		