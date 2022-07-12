<?php
		$titrefr = "HISTOIRE";
		$titreang = "HISTORY";
		$bg = "./assets/img/bgtheme/histoirebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Histoire<?php endif; if($langue === 'english'): ?>History<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire d'histoire en Anglais - Français - Arabe">
		<meta name="keywords" content="history, histoire, archéologie, passé, past, archeology, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Histoire<?php endif; if($langue === 'english'): ?>History<?php endif; ?></h1>

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
										<td>Age of Enlightenment</td>
										<td>Siècle des Lumières</td>
										<td>عصر الأنوار</td>
									</tr>
									<tr>
										<td>Alexander the Great</td>
										<td>Alexandre le Grand</td>
										<td>الإسكندر الأكبر</td>
									</tr>
									<tr>
										<td>Amphitheater</td>
										<td>amphithéâtre</td>
										<td>مدرج</td>
									</tr>
									<tr>
										<td>Amphora</td>
										<td>amphore</td>
										<td>الأمفورة</td>
									</tr>
									<tr>
										<td>Anarchism</td>
										<td>Anarchisme</td>
										<td>فوضوية</td>
									</tr>
									<tr>
										<td>Ancestor</td>
										<td>ancêtre</td>
										<td>سلف</td>
									</tr>
									<tr>
										<td>Anthropology</td>
										<td>anthropologie</td>
										<td>علم الانسان</td>
									</tr>
									<tr>
										<td>Antiquity</td>
										<td>antiquité</td>
										<td>العصور القديمة</td>
									</tr>
									<tr>
										<td>Apollinaire</td>
										<td>Apollinaire</td>
										<td>أبولينير</td>
									</tr>
									<tr>
										<td>Aqueduct</td>
										<td>aqueduc</td>
										<td>قناة مقنطرة</td>
									</tr>
									<tr>
										<td>Archeology</td>
										<td>archéologie</td>
										<td>علم الآثار</td>
									</tr>
									<tr>
										<td>Architecture</td>
										<td>architecture</td>
										<td>هندسة معمارية</td>
									</tr>
									<tr>
										<td>Army</td>
										<td>armée</td>
										<td>جيش</td>
									</tr>
									<tr>
										<td>Art</td>
										<td>art</td>
										<td>فن</td>
									</tr>
									<tr>
										<td>Attila the Hun</td>
										<td>Attila le Hun</td>
										<td>أتيلا الهون</td>
									</tr>
									<tr>
										<td>Author</td>
										<td>auteur</td>
										<td>مؤلف</td>
									</tr>
									<tr>
										<td>Autobiography</td>
										<td>autobiographie</td>
										<td>السيرة ذاتية</td>
									</tr>
									<tr>
										<td>Barbarous</td>
										<td>barbare</td>
										<td>همجي</td>
									</tr>
									<tr>
										<td>Bastille</td>
										<td>Bastille</td>
										<td>الباستيل</td>
									</tr>
									<tr>
										<td>Battle</td>
										<td>bataille</td>
										<td>توراتي</td>
									</tr>
									<tr>
										<td>Biography</td>
										<td>biographie</td>
										<td>سيرة شخصية</td>
									</tr>
									<tr>
										<td>Burial</td>
										<td>enterrement</td>
										<td>دفن</td>
									</tr>
									<tr>
										<td>Capitalism</td>
										<td>Capitalisme</td>
										<td>رأسمالية</td>
									</tr>
									<tr>
										<td>Castle</td>
										<td>château</td>
										<td>قلعة</td>
									</tr>
									<tr>
										<td>Catacomb</td>
										<td>catacombe</td>
										<td>سرداب الموتى</td>
									</tr>
									<tr>
										<td>Cave</td>
										<td>cave</td>
										<td>كهف</td>
									</tr>
									<tr>
										<td>Celtic</td>
										<td>celtique</td>
										<td>سلتيك</td>
									</tr>
									<tr>
										<td>Ceramic</td>
										<td>céramique</td>
										<td>سيراميك</td>
									</tr>
									<tr>
										<td>Christianity</td>
										<td>christianisme</td>
										<td>مسيحية</td>
									</tr>
									<tr>
										<td>Chronic</td>
										<td>chronique</td>
										<td>مزمن</td>
									</tr>
									<tr>
										<td>Chronology</td>
										<td>chronologie</td>
										<td>التسلسل الزمني</td>
									</tr>
									<tr>
										<td>Church</td>
										<td>Église</td>
										<td>كنيسة</td>
									</tr>
									<tr>
										<td>Civilization</td>
										<td>civilisation</td>
										<td>حضارة</td>
									</tr>
									<tr>
										<td>Collapse</td>
										<td>effondrement</td>
										<td>انهدام</td>
									</tr>
									<tr>
										<td>Colonial</td>
										<td>colonial</td>
										<td>مستعمرة</td>
									</tr>
									<tr>
										<td>Colony</td>
										<td>colonie</td>
										<td>مستعمرة</td>
									</tr>
									<tr>
										<td>Communism</td>
										<td>communisme</td>
										<td>الشيوعية</td>
									</tr>
									<tr>
										<td>Conflict</td>
										<td>conflit</td>
										<td>نزاع</td>
									</tr>
									<tr>
										<td>Conquest</td>
										<td>Conquête</td>
										<td>فتح</td>
									</tr>
									<tr>
										<td>Constitution</td>
										<td>Constitution</td>
										<td>دستور</td>
									</tr>
									<tr>
										<td>Contemporary</td>
										<td>contemporain</td>
										<td>معاصر</td>
									</tr>
									<tr>
										<td>Convention</td>
										<td>Convention</td>
										<td>اتفاقية</td>
									</tr>
									<tr>
										<td>Craft</td>
										<td>Artisanat</td>
										<td>الحرفيين</td>
									</tr>
									<tr>
										<td>Culture</td>
										<td>culture</td>
										<td>ثقافة</td>
									</tr>
									<tr>
										<td>Defeat</td>
										<td>défaite</td>
										<td>هزيمة</td>
									</tr>
									<tr>
										<td>Democracy</td>
										<td>Démocratie</td>
										<td>ديمقراطية</td>
									</tr>
									<tr>
										<td>Descendant</td>
										<td>descendant</td>
										<td>السليل</td>
									</tr>
									<tr>
										<td>Development</td>
										<td>développement</td>
										<td>تنمية</td>
									</tr>
									<tr>
										<td>Dictatorship</td>
										<td>Dictature</td>
										<td>الدكتاتورية</td>
									</tr>
									<tr>
										<td>Dinosaurs</td>
										<td>dinosaures</td>
										<td>الديناصورات</td>
									</tr>
									<tr>
										<td>Diplomacy</td>
										<td>Diplomatie</td>
										<td>دبلوماسية</td>
									</tr>
									<tr>
										<td>Dynasty</td>
										<td>dynastie</td>
										<td>سلالة حاكمة</td>
									</tr>
									<tr>
										<td>Egyptian</td>
										<td>égyptien</td>
										<td>مصري</td>
									</tr>
									<tr>
										<td>Egyptology</td>
										<td>égyptologie</td>
										<td>علم الآثار المصرية</td>
									</tr>
									<tr>
										<td>Emperor</td>
										<td>Empereur</td>
										<td>إمبراطور</td>
									</tr>
									<tr>
										<td>Era</td>
										<td>ère</td>
										<td>عصر</td>
									</tr>
									<tr>
										<td>Ethnography</td>
										<td>Ethnographie</td>
										<td>الأثنوغرافيا الوصفية</td>
									</tr>
									<tr>
										<td>Ethnology</td>
										<td>ethnologie</td>
										<td>علم الأعراق البشرية</td>
									</tr>
									<tr>
										<td>Etymology</td>
										<td>étymologie</td>
										<td>علم أصول الكلمات</td>
									</tr>
									<tr>
										<td>Event</td>
										<td>événement</td>
										<td>حدث</td>
									</tr>
									<tr>
										<td>Evidence</td>
										<td>preuve</td>
										<td>دليل</td>
									</tr>
									<tr>
										<td>Evolution</td>
										<td>évolution</td>
										<td>تطور</td>
									</tr>
									<tr>
										<td>Existence</td>
										<td>existence</td>
										<td>وجود</td>
									</tr>
									<tr>
										<td>Exodus</td>
										<td>exode</td>
										<td>رحيل</td>
									</tr>
									<tr>
										<td>Expedition</td>
										<td>expédition</td>
										<td>البعثة</td>
									</tr>
									<tr>
										<td>Exploration</td>
										<td>exploration</td>
										<td>استكشاف</td>
									</tr>
									<tr>
										<td>Folklore</td>
										<td>Folklore</td>
										<td>التراث الشعبي</td>
									</tr>
									<tr>
										<td>Fortress</td>
										<td>forteresse</td>
										<td>حصن</td>
									</tr>
									<tr>
										<td>Fossil</td>
										<td>fossile</td>
										<td>الحجري</td>
									</tr>
									<tr>
										<td>Freedom</td>
										<td>liberté</td>
										<td>حرية</td>
									</tr>
									<tr>
										<td>Funerary</td>
										<td>funéraire</td>
										<td>الجنائزية</td>
									</tr>
									<tr>
										<td>Genealogy</td>
										<td>généalogie</td>
										<td>علم الانساب</td>
									</tr>
									<tr>
										<td>Genesis</td>
										<td>genèse</td>
										<td>سفر التكوين</td>
									</tr>
									<tr>
										<td>Geography</td>
										<td>géographie</td>
										<td>جغرافية</td>
									</tr>
									<tr>
										<td>Geology</td>
										<td>géologie</td>
										<td>جيولوجيا</td>
									</tr>
									<tr>
										<td>Gladiator</td>
										<td>gladiateur</td>
										<td>المصارع</td>
									</tr>
									<tr>
										<td>Gothic</td>
										<td>Gothique</td>
										<td>قوطي</td>
									</tr>
									<tr>
										<td>Government</td>
										<td>gouvernement</td>
										<td>حكومة</td>
									</tr>
									<tr>
										<td>Greeks</td>
										<td>grecs</td>
										<td>اليونانيون</td>
									</tr>
									<tr>
										<td>Hammurabi code</td>
										<td>Code Hammurabi</td>
										<td>قانون حمورابي</td>
									</tr>
									<tr>
										<td>Heritage</td>
										<td>patrimoine</td>
										<td>تراث</td>
									</tr>
									<tr>
										<td>Hero/Heroin</td>
										<td>Héro/héroïne</td>
										<td>بطلة/بطل</td>
									</tr>
									<tr>
										<td>Hieroglyphs</td>
										<td>hiéroglyphes</td>
										<td>الهيروغليفية</td>
									</tr>
									<tr>
										<td>Historian</td>
										<td>historien</td>
										<td>مؤرخ</td>
									</tr>
									<tr>
										<td>Idealism</td>
										<td>idéalisme</td>
										<td>مثالية</td>
									</tr>
									<tr>
										<td>Ideology</td>
										<td>idéologie</td>
										<td>أيديولوجية</td>
									</tr>
									<tr>
										<td>Immigration</td>
										<td>Immigration</td>
										<td>هجرة</td>
									</tr>
									<tr>
										<td>Imperialism</td>
										<td>Impérialisme</td>
										<td>الإمبريالية</td>
									</tr>
									<tr>
										<td>Indigenous</td>
										<td>indigène</td>
										<td>الشعوب الأصلية</td>
									</tr>
									<tr>
										<td>Invaders</td>
										<td>envahisseurs</td>
										<td>الغزاة</td>
									</tr>
									<tr>
										<td>Invention</td>
										<td>invention</td>
										<td>اختراع</td>
									</tr>
									<tr>
										<td>Islam</td>
										<td>islam</td>
										<td>الإسلام</td>
									</tr>
									<tr>
										<td>Judaism</td>
										<td>Judaïsme</td>
										<td>يهودية</td>
									</tr>
									<tr>
										<td>King</td>
										<td>roi</td>
										<td>ملك</td>
									</tr>
									<tr>
										<td>Kingdoms</td>
										<td>royaumes</td>
										<td>ممالك</td>
									</tr>
									<tr>
										<td>Knight</td>
										<td>chevalier</td>
										<td>فارس</td>
									</tr>
									<tr>
										<td>Legend</td>
										<td>légende</td>
										<td>أسطورة</td>
									</tr>
									<tr>
										<td>Library</td>
										<td>bibliothèque</td>
										<td>مكتبة</td>
									</tr>
									<tr>
										<td>Linguist</td>
										<td>linguiste</td>
										<td>لغوي</td>
									</tr>
									<tr>
										<td>Literature</td>
										<td>littérature</td>
										<td>الأدب</td>
									</tr>
									<tr>
										<td>Mankind</td>
										<td>humanité</td>
										<td>بشرية</td>
									</tr>
									<tr>
										<td>Manuscript</td>
										<td>manuscrit</td>
										<td>مخطوطة</td>
									</tr>
									<tr>
										<td>Medieval</td>
										<td>médiéval</td>
										<td>من القرون الوسطى</td>
									</tr>
									<tr>
										<td>Megalith</td>
										<td>mégalithe</td>
										<td>المغليث</td>
									</tr>
									<tr>
										<td>Memorial</td>
										<td>mémorial</td>
										<td>نصب تذكاري</td>
									</tr>
									<tr>
										<td>Mesolithic</td>
										<td>mésolithique</td>
										<td>الميزوليتي</td>
									</tr>
									<tr>
										<td>Militarism</td>
										<td>Militarisme</td>
										<td>عسكرية</td>
									</tr>
									<tr>
										<td>Modernism</td>
										<td>Modernisme</td>
										<td>عصرية</td>
									</tr>
									<tr>
										<td>Monarchy</td>
										<td>monarchie</td>
										<td>الملكية</td>
									</tr>
									<tr>
										<td>Monument</td>
										<td>monument</td>
										<td>نصب تذكاري</td>
									</tr>
									<tr>
										<td>Mosaic</td>
										<td>mosaïque</td>
										<td>فسيفساء</td>
									</tr>
									<tr>
										<td>Mosque</td>
										<td>Mosquée</td>
										<td>مسجد</td>
									</tr>
									<tr>
										<td>Mummy</td>
										<td>momie</td>
										<td>مومياء</td>
									</tr>
									<tr>
										<td>Museum</td>
										<td>musée</td>
										<td>متحف</td>
									</tr>
									<tr>
										<td>Myth</td>
										<td>mythe</td>
										<td>أسطورة</td>
									</tr>
									<tr>
										<td>Mythology</td>
										<td>mythologie</td>
										<td>علم الأساطير</td>
									</tr>
									<tr>
										<td>Nationalism</td>
										<td>Nationalisme</td>
										<td>قومية</td>
									</tr>
									<tr>
										<td>Naturalism</td>
										<td>Naturalisme</td>
										<td>طبيعية</td>
									</tr>
									<tr>
										<td>Naval</td>
										<td>naval</td>
										<td>بحري</td>
									</tr>
									<tr>
										<td>Nazism</td>
										<td>Nazisme</td>
										<td>النازية</td>
									</tr>
									<tr>
										<td>Necropolis</td>
										<td>nécropole</td>
										<td>مقبرة كبيرة</td>
									</tr>
									<tr>
										<td>Neolithic</td>
										<td>néolithique</td>
										<td>العصر الحجري الحديث</td>
									</tr>
									<tr>
										<td>Nobility</td>
										<td>Noblesse</td>
										<td>نبل</td>
									</tr>
									<tr>
										<td>Nomadic</td>
										<td>nomade</td>
										<td>بدوي</td>
									</tr>
									<tr>
										<td>Orientalism</td>
										<td>Orientalisme</td>
										<td>استشراق</td>
									</tr>
									<tr>
										<td>Pacifism</td>
										<td>Pacifisme</td>
										<td>السلامية</td>
									</tr>
									<tr>
										<td>Painting</td>
										<td>peinture</td>
										<td>فن الرسم</td>
									</tr>
									<tr>
										<td>Paleolithic</td>
										<td>paléolithique</td>
										<td>العصر الحجري القديم</td>
									</tr>
									<tr>
										<td>Paleontology</td>
										<td>paléontologie</td>
										<td>علم المتحجرات</td>
									</tr>
									<tr>
										<td>Pantheon</td>
										<td>panthéon</td>
										<td>البانتيون</td>
									</tr>
									<tr>
										<td>Patriotism</td>
										<td>Patriotisme</td>
										<td>حب الوطن</td>
									</tr>
									<tr>
										<td>People</td>
										<td>peuple</td>
										<td>الناس</td>
									</tr>
									<tr>
										<td>Period</td>
										<td>période</td>
										<td>فترة</td>
									</tr>
									<tr>
										<td>Persians</td>
										<td>persans</td>
										<td>الفرس</td>
									</tr>
									<tr>
										<td>Pharaoh</td>
										<td>pharaon</td>
										<td>فرعون</td>
									</tr>
									<tr>
										<td>Philosophy</td>
										<td>philosophie</td>
										<td>فلسفة</td>
									</tr>
									<tr>
										<td>Plague</td>
										<td>Peste</td>
										<td>طاعون</td>
									</tr>
									<tr>
										<td>Poem</td>
										<td>poème</td>
										<td>قصيدة</td>
									</tr>
									<tr>
										<td>Population</td>
										<td>population</td>
										<td>سكان</td>
									</tr>
									<tr>
										<td>Prehistory</td>
										<td>préhistoire</td>
										<td>قبل التاريخ</td>
									</tr>
									<tr>
										<td>Prince</td>
										<td>prince</td>
										<td>أمير</td>
									</tr>
									<tr>
										<td>Princess</td>
										<td>princesse</td>
										<td>أميرة</td>
									</tr>
									<tr>
										<td>Prospecting</td>
										<td>prospection</td>
										<td>التنقيب</td>
									</tr>
									<tr>
										<td>Pyramids</td>
										<td>pyramides</td>
										<td>الاهرام</td>
									</tr>
									<tr>
										<td>Queen</td>
										<td>reine</td>
										<td>ملكة</td>
									</tr>
									<tr>
										<td>Racism</td>
										<td>Racisme</td>
										<td>عنصرية</td>
									</tr>
									<tr>
										<td>Realism</td>
										<td>Réalisme</td>
										<td>الواقعية</td>
									</tr>
									<tr>
										<td>Reign</td>
										<td>règne</td>
										<td>حكم</td>
									</tr>
									<tr>
										<td>Religion</td>
										<td>religion</td>
										<td>دين</td>
									</tr>
									<tr>
										<td>Renaissance</td>
										<td>renaissance</td>
										<td>عصر النهضة</td>
									</tr>
									<tr>
										<td>Republic</td>
										<td>république</td>
										<td>جمهورية</td>
									</tr>
									<tr>
										<td>Republicanism</td>
										<td>Républicanisme</td>
										<td>الجمهورياتية</td>
									</tr>
									<tr>
										<td>Resistance</td>
										<td>Résistance</td>
										<td>مقاومة</td>
									</tr>
									<tr>
										<td>Revolution</td>
										<td>révolution</td>
										<td>ثورة</td>
									</tr>
									<tr>
										<td>Romans</td>
										<td>romains</td>
										<td>الرومان</td>
									</tr>
									<tr>
										<td>Romanticism</td>
										<td>Romantisme</td>
										<td>الرومانسية</td>
									</tr>
									<tr>
										<td>Ruins</td>
										<td>ruines</td>
										<td>أطلال</td>
									</tr>
									<tr>
										<td>Sarcophagus</td>
										<td>sarcophage</td>
										<td>التابوت الحجري</td>
									</tr>
									<tr>
										<td>Science</td>
										<td>science</td>
										<td>علم</td>
									</tr>
									<tr>
										<td>Sculpture</td>
										<td>Sculpture</td>
										<td>نحت</td>
									</tr>
									<tr>
										<td>Searcher</td>
										<td>chercheur</td>
										<td>باحث</td>
									</tr>
									<tr>
										<td>Settlement</td>
										<td>règlement</td>
										<td>مستوطنة</td>
									</tr>
									<tr>
										<td>Slavery</td>
										<td>Esclavage</td>
										<td>عبودية</td>
									</tr>
									<tr>
										<td>Statue</td>
										<td>Statue</td>
										<td>تمثال</td>
									</tr>
									<tr>
										<td>Sword</td>
										<td>épée</td>
										<td>سيف</td>
									</tr>
									<tr>
										<td>Symbolism</td>
										<td>Symbolisme</td>
										<td>رمزية</td>
									</tr>
									<tr>
										<td>Temple</td>
										<td>temple</td>
										<td>معبد</td>
									</tr>
									<tr>
										<td>Territory</td>
										<td>territoire</td>
										<td>منطقة</td>
									</tr>
									<tr>
										<td>Territory</td>
										<td>territoire</td>
										<td>منطقة</td>
									</tr>
									<tr>
										<td>Testimony</td>
										<td>témoignage</td>
										<td>شهادة</td>
									</tr>
									<tr>
										<td>The Odyssey</td>
										<td>l'Odyssée</td>
										<td>الأوديسة</td>
									</tr>
									<tr>
										<td>The Roman empire</td>
										<td>l'empire Romain</td>
										<td>الإمبراطورية الرومانية</td>
									</tr>
									<tr>
										<td>The Rosetta stone</td>
										<td>la pierre de Rosette</td>
										<td>حجر رشيد</td>
									</tr>
									<tr>
										<td>Theology</td>
										<td>théologie</td>
										<td>علم اللاهوت</td>
									</tr>
									<tr>
										<td>Theory</td>
										<td>théorie</td>
										<td>نظرية</td>
									</tr>
									<tr>
										<td>Thesis</td>
										<td>thèse</td>
										<td>أطروحة</td>
									</tr>
									<tr>
										<td>Trace</td>
										<td>trace</td>
										<td>أثر</td>
									</tr>
									<tr>
										<td>Tradition</td>
										<td>tradition</td>
										<td>التقليد</td>
									</tr>
									<tr>
										<td>Translation</td>
										<td>traduction</td>
										<td>ترجمة</td>
									</tr>
									<tr>
										<td>Triumphal arch</td>
										<td>Arc de triomphe</td>
										<td>قوس النصر</td>
									</tr>
									<tr>
										<td>Vestige</td>
										<td>vestige</td>
										<td>بقايا</td>
									</tr>
									<tr>
										<td>Victory</td>
										<td>Victoire</td>
										<td>انتصار</td>
									</tr>
									<tr>
										<td>Viking</td>
										<td>viking</td>
										<td>الفايكينغ</td>
									</tr>
									<tr>
										<td>War</td>
										<td>guerre</td>
										<td>حرب</td>
									</tr>
									<tr>
										<td>Warrior</td>
										<td>guerrier</td>
										<td>محارب</td>
									</tr>
									<tr>
										<td>Wreck</td>
										<td>épave</td>
										<td>حطام سفينة</td>
									</tr>
									<tr>
										<td>Writing</td>
										<td>écriture</td>
										<td>الكتابة</td>
									</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/tempslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Le temps<?php endif; if($langue === 'english'): ?>Time<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="temps.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/geographielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="geographie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		