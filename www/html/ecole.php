<?php
		$titrefr = "L'ECOLE";
		$titreang = "THE SCHOOL";
		$bg = "./assets/img/bgtheme/ecolebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>L'école<?php endif; if($langue === 'english'): ?>The school<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de nutriment en Anglais - Français - Arabe">
	<meta name="keywords" content="school, école, université, studying, étudier, études, studies, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>L'école<?php endif; if($langue === 'english'): ?>The school<?php endif; ?></h1>

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
								<td class="soustitre">At school</td>
								<td class="soustitre">à l'école</td>
								<td class="soustitre">في المدرسة</td>
							</tr>
							<tr>
								<td>Assembly hall</td>
								<td>salle de réunion</td>
								<td>قاعة الإجتماعات</td>
							</tr>
							<tr>
								<td>Boarding school, internal school</td>
								<td>internat </td>
								<td>مدرسة داخلية</td>
							</tr>
							<tr>
								<td>Classroom</td>
								<td>salle de cours, classe</td>
								<td>قاعة الدراسة</td>
							</tr>
							<tr>
								<td>Course/class</td>
								<td>cours</td>
								<td>درس</td>
							</tr>
							<tr>
								<td>Gym</td>
								<td>gymnase</td>
								<td>قاعة الرياضة</td>
							</tr>
							<tr>
								<td>Kindergarten</td>
								<td>jardin d'enfants</td>
								<td>روضة الأطفال</td>
							</tr>
							<tr>
								<td>Laboratory</td>
								<td>laboratoire</td>
								<td>مختبر</td>
							</tr>
							<tr>
								<td>Library</td>
								<td>bibliothèque</td>
								<td>مكتبة</td>
							</tr>
							<tr>
								<td>Playground</td>
								<td>terrain de jeu</td>
								<td>ملعب</td>
							</tr>
							<tr>
								<td>Recess</td>
								<td>récréation</td>
								<td>استراحة</td>
							</tr>
							<tr>
								<td>School uniform</td>
								<td>uniforme scolaire</td>
								<td>زي مدرسي</td>
							</tr>
							<tr>
								<td>Yard</td>
								<td>cour</td>
								<td>ساحة</td>
							</tr>
							<tr>
								<td>principal's office</td>
								<td>bureau du directeur de l'école</td>
								<td>مكتب مدير المدرسة</td>
							</tr>
							<tr>
								<td>teacher's room</td>
								<td>salle des professeurs</td>
								<td>غرفة المعلمين</td>
							</tr>
							<tr>
								<td class="soustitre">School types</td>
								<td class="soustitre">types d'écoles </td>
								<td class="soustitre">أنواع المدارس</td>
							</tr>
							<tr>
								<td>Faculty</td>
								<td>faculté</td>
								<td>كلية</td>
							</tr>
							<tr>
								<td>Institute</td>
								<td>institut</td>
								<td>معهد</td>
							</tr>
							<tr>
								<td>Nursery school</td>
								<td>école maternelle</td>
								<td>مدرسة حضانة</td>
							</tr>
							<tr>
								<td>Primary school, elementary school</td>
								<td>école primaire, école élémentaire</td>
								<td>مدرسة ابتدائية</td>
							</tr>
							<tr>
								<td>Private school</td>
								<td>école privée</td>
								<td>مدرسة خاصة</td>
							</tr>
							<tr>
								<td>Public school</td>
								<td>école publique</td>
								<td>مدرسة عامة</td>
							</tr>
							<tr>
								<td>Secondary school</td>
								<td>école secondaire</td>
								<td>مدرسة ثانوية</td>
							</tr>
							<tr>
								<td>University, college</td>
								<td>université</td>
								<td>جامعة</td>
							</tr>
							<tr>
								<td class="soustitre">The classroom</td>
								<td class="soustitre">la classe</td>
								<td class="soustitre">الفصل</td>
							</tr>
							<tr>
								<td>Backpack</td>
								<td>Sac à dos, cartable</td>
								<td>حقيبة الظهر</td>
							</tr>
							<tr>
								<td>Blackboard</td>
								<td>tableau</td>
								<td>سبورة</td>
							</tr>
							<tr>
								<td>Book</td>
								<td>livre</td>
								<td>كتاب</td>
							</tr>
							<tr>
								<td>Calculator</td>
								<td>calculatrice</td>
								<td>آلة حاسبة</td>
							</tr>
							<tr>
								<td>Chair</td>
								<td>chaise</td>
								<td>كرسي</td>
							</tr>
							<tr>
								<td>Chalk</td>
								<td>craie</td>
								<td>الطباشير</td>
							</tr>
							<tr>
								<td>Compass</td>
								<td>compas</td>
								<td>فرجار</td>
							</tr>
							<tr>
								<td>Computer</td>
								<td>ordinateur</td>
								<td>الحاسوب</td>
							</tr>
							<tr>
								<td>Comrade</td>
								<td>camarade</td>
								<td>الرفيق</td>
							</tr>
							<tr>
								<td>Desk</td>
								<td>bureau</td>
								<td>مكتب</td>
							</tr>
							<tr>
								<td>Dictionary</td>
								<td>dictionnaire</td>
								<td>قاموس</td>
							</tr>
							<tr>
								<td>Drawing paper</td>
								<td>papier à dessin</td>
								<td>ورقة الرسم</td>
							</tr>
							<tr>
								<td>Easel</td>
								<td>chevalet</td>
								<td>الحامل</td>
							</tr>
							<tr>
								<td>Eraser, rubber</td>
								<td>gomme</td>
								<td>ممحاة</td>
							</tr>
							<tr>
								<td>Exercise book</td>
								<td>cahier d'exercice</td>
								<td>كتاب التمارين</td>
							</tr>
							<tr>
								<td>Felt pen</td>
								<td>feutre</td>
								<td>قلم لبادي</td>
							</tr>
							<tr>
								<td>Folder</td>
								<td>dossier</td>
								<td>مجلد</td>
							</tr>
							<tr>
								<td>Locker</td>
								<td>casier</td>
								<td>خزانة</td>
							</tr>
							<tr>
								<td>Notebook</td>
								<td>cahier</td>
								<td>دفتر</td>
							</tr>
							<tr>
								<td>Overhead projector</td>
								<td>rétroprojecteur</td>
								<td>جهاز عرض الصور الشفافة</td>
							</tr>
							<tr>
								<td>Paint brush</td>
								<td>pinceau</td>
								<td>فرشاة</td>
							</tr>
							<tr>
								<td>Painting</td>
								<td>peinture </td>
								<td>تلوين</td>
							</tr>
							<tr>
								<td>Pen</td>
								<td>stylo</td>
								<td>قلم</td>
							</tr>
							<tr>
								<td>Pencil</td>
								<td>crayon</td>
								<td>قلم الرصاص</td>
							</tr>
							<tr>
								<td>Pencil case</td>
								<td>trousse</td>
								<td>مقلمة</td>
							</tr>
							<tr>
								<td>Pencil sharpener</td>
								<td>taille-crayon</td>
								<td>مبرأة</td>
							</tr>
							<tr>
								<td>Professor</td>
								<td>professeur</td>
								<td>أستاذ</td>
							</tr>
							<tr>
								<td>Ruler</td>
								<td>règle</td>
								<td>مسطرة </td>
							</tr>
							<tr>
								<td>School bag</td>
								<td>sac d'école</td>
								<td>حقيبة المدرسة</td>
							</tr>
							<tr>
								<td>Sponge</td>
								<td>éponge</td>
								<td>إسفنج</td>
							</tr>
							<tr>
								<td>Student</td>
								<td>élève</td>
								<td>طالب</td>
							</tr>
							<tr>
								<td>table</td>
								<td>table</td>
								<td>طاولة</td>
							</tr>
							<tr>
								<td>Teacher</td>
								<td>enseignant</td>
								<td>معلم</td>
							</tr>
							<tr>
								<td>Textbook</td>
								<td>manuel scolaire</td>
								<td>الكتب المدرسية</td>
							</tr>
							<tr>
								<td>Tube of paint</td>
								<td>tube de peinture</td>
								<td>أنبوب من الطلاء</td>
							</tr>
							<tr>
								<td>White board</td>
								<td>tableau blanc</td>
								<td>لوحة بيضاء</td>
							</tr>
							<tr>
								<td class="soustitre">Teaching</td>
								<td class="soustitre">enseignement</td>
								<td class="soustitre">التعليم</td>
							</tr>
							<tr>
								<td>Bachelor's degree</td>
								<td>licence</td>
								<td>الإجازة</td>
							</tr>
							<tr>
								<td>Certificate</td>
								<td>certificat</td>
								<td>شهادة</td>
							</tr>
							<tr>
								<td>Course</td>
								<td>cours</td>
								<td>درس</td>
							</tr>
							<tr>
								<td>Curriculum</td>
								<td>cursus scolaire</td>
								<td>المناهج الدراسية</td>
							</tr>
							<tr>
								<td>Diploma</td>
								<td>diplôme</td>
								<td>دبلوم</td>
							</tr>
							<tr>
								<td>Essay</td>
								<td>dissertation</td>
								<td>مقال</td>
							</tr>
							<tr>
								<td>Examination/test</td>
								<td>examen/test</td>
								<td>اختبار</td>
							</tr>
							<tr>
								<td>Exercise</td>
								<td>exercice</td>
								<td>تمرين</td>
							</tr>
							<tr>
								<td>Freshman</td>
								<td>étudiant de première année</td>
								<td>الطالب الجامعي الجديد</td>
							</tr>
							<tr>
								<td>Graduate student</td>
								<td>étudiant diplômé</td>
								<td>متخرج</td>
							</tr>
							<tr>
								<td>Graduation</td>
								<td>obtention du diplôme</td>
								<td>التخرج</td>
							</tr>
							<tr>
								<td>High-school-diploma</td>
								<td>baccalauréat</td>
								<td>شهادة البكالوريا</td>
							</tr>
							<tr>
								<td>Homeworks</td>
								<td>devoirs</td>
								<td>الواجبات المنزلية</td>
							</tr>
							<tr>
								<td>Master's degree</td>
								<td>master</td>
								<td>الماجستير</td>
							</tr>
							<tr>
								<td>Oral test</td>
								<td>épreuve orale</td>
								<td>اختبار شفوي</td>
							</tr>
							<tr>
								<td>PhD</td>
								<td>doctorat</td>
								<td>دكتوراه</td>
							</tr>
							<tr>
								<td>Post-graduate student </td>
								<td>étudiant de troisième cycle</td>
								<td>طالب دراسات عليا</td>
							</tr>
							<tr>
								<td>Practice test</td>
								<td>examen blanc</td>
								<td>اختبار الممارسة</td>
							</tr>
							<tr>
								<td>Presentation</td>
								<td>présentation, exposé</td>
								<td>عرض</td>
							</tr>
							<tr>
								<td>Prizegiving</td>
								<td>remise des prix</td>
								<td>توزيع الجوائز</td>
							</tr>
							<tr>
								<td>Report card</td>
								<td>bulletin scolaire</td>
								<td>كشف النقاط</td>
							</tr>
							<tr>
								<td>School year</td>
								<td>année scolaire</td>
								<td>السنة دراسية</td>
							</tr>
							<tr>
								<td>Written test</td>
								<td>test écrit</td>
								<td>امتحان كتابي</td>
							</tr>
							<tr>
								<td class="soustitre">School useful vocabulary</td>
								<td class="soustitre">vocabulaire utile de l'école</td>
								<td class="soustitre">المفردات المدرسية مفيدة</td>
							</tr>
							<tr>
								<td>Answer</td>
								<td>réponse</td>
								<td>إجابة</td>
							</tr>
							<tr>
								<td>Bell</td>
								<td>cloche</td>
								<td>جرس</td>
							</tr>
							<tr>
								<td>Christmas holidays</td>
								<td>vacances de noël</td>
								<td>عطلة عيد الميلاد</td>
							</tr>
							<tr>
								<td>Department</td>
								<td>département</td>
								<td>قسم</td>
							</tr>
							<tr>
								<td>discipline</td>
								<td>discipline</td>
								<td>انضباط</td>
							</tr>
							<tr>
								<td>Easter holidays</td>
								<td>vacances de pâques</td>
								<td>عطلة عيد الفصح</td>
							</tr>
							<tr>
								<td>Exchange visit</td>
								<td>visite d'échange</td>
								<td>تبادل الزيارات</td>
							</tr>
							<tr>
								<td>Lecture</td>
								<td>conférence</td>
								<td>محاضرة</td>
							</tr>
							<tr>
								<td>Mistake</td>
								<td>erreur</td>
								<td>خطأ</td>
							</tr>
							<tr>
								<td>project</td>
								<td>projet</td>
								<td>مشروع </td>
							</tr>
							<tr>
								<td>question</td>
								<td>question</td>
								<td>سؤال</td>
							</tr>
							<tr>
								<td>School holidays</td>
								<td>vacances scolaires</td>
								<td>العطل المدرسية</td>
							</tr>
							<tr>
								<td>School record</td>
								<td>dossier scolaire</td>
								<td>سجل المدرسة</td>
							</tr>
							<tr>
								<td>School trip</td>
								<td>voyage scolaire</td>
								<td>رحلة مدرسية</td>
							</tr>
							<tr>
								<td>Subject</td>
								<td>sujet</td>
								<td>موضوع</td>
							</tr>
							<tr>
								<td>Summer holidays</td>
								<td>vacances d'été</td>
								<td>عطلات الصيف</td>
							</tr>
							<tr>
								<td>term</td>
								<td>terme</td>
								<td>مصطلح</td>
							</tr>
							<tr>
								<td>Timetable</td>
								<td>emploi du temps</td>
								<td>الجدول الزمني</td>
							</tr>
							<tr>
								<td>Translation</td>
								<td>traduction</td>
								<td>ترجمة</td>
							</tr>
							<tr>
								<td>Tuition fees</td>
								<td>frais de scolarité</td>
								<td>رسوم دراسية</td>
							</tr>
							<tr>
								<td class="soustitre">Behavior</td>
								<td class="soustitre">comportement</td>
								<td class="soustitre">سلوك</td>
							</tr>
							<tr>
								<td>Absent</td>
								<td>absent</td>
								<td>غائب</td>
							</tr>
							<tr>
								<td>Brilliant</td>
								<td>brillant</td>
								<td>باهر </td>
							</tr>
							<tr>
								<td>Disturbing</td>
								<td>perturbant</td>
								<td>مزعج</td>
							</tr>
							<tr>
								<td>Gifted</td>
								<td>doué</td>
								<td>موهوبون</td>
							</tr>
							<tr>
								<td>Hard-working</td>
								<td>travailleur</td>
								<td>مجتهد</td>
							</tr>
							<tr>
								<td>Inattentive</td>
								<td>inattentif</td>
								<td>غافل</td>
							</tr>
							<tr>
								<td>Intelligent, clever</td>
								<td>intelligent</td>
								<td>ذكي</td>
							</tr>
							<tr>
								<td>lazy</td>
								<td>paresseux</td>
								<td>كسول</td>
							</tr>
							<tr>
								<td>present</td>
								<td>présent</td>
								<td>حاضر</td>
							</tr>
							<tr>
								<td>Undisciplined</td>
								<td>indiscipliné</td>
								<td>غير منضبط</td>
							</tr>
							<tr>
								<td class="soustitre">School subjects</td>
								<td class="soustitre">les matières de l'école</td>
								<td class="soustitre">المواد الدراسية</td>
							</tr>
							<tr>
								<td>Algebra</td>
								<td>l'algèbre</td>
								<td>الجبر</td>
							</tr>
							<tr>
								<td>Biology</td>
								<td>biologie</td>
								<td>البيولوجيا</td>
							</tr>
							<tr>
								<td>Business studies</td>
								<td>études de commerce</td>
								<td>دراسات الأعمال</td>
							</tr>
							<tr>
								<td>Chemistry</td>
								<td>chimie</td>
								<td>الكيمياء</td>
							</tr>
							<tr>
								<td>Computer studies</td>
								<td>études en informatique</td>
								<td>دراسات الكمبيوتر</td>
							</tr>
							<tr>
								<td>Economics </td>
								<td>sciences économiques</td>
								<td>علم الاقتصاد</td>
							</tr>
							<tr>
								<td>Foreign languages</td>
								<td>langues étrangères</td>
								<td>لغات اجنبية</td>
							</tr>
							<tr>
								<td>Geography</td>
								<td>géographie</td>
								<td>الجغرافية</td>
							</tr>
							<tr>
								<td>Geometry</td>
								<td>géométrie</td>
								<td>الهندسة</td>
							</tr>
							<tr>
								<td>Grammar</td>
								<td>grammaire, conjugaison</td>
								<td>القواعد</td>
							</tr>
							<tr>
								<td>Greek</td>
								<td>grec</td>
								<td>اليونانية</td>
							</tr>
							<tr>
								<td>History</td>
								<td>histoire</td>
								<td>التاريخ</td>
							</tr>
							<tr>
								<td>Languages</td>
								<td>langues</td>
								<td>اللغات</td>
							</tr>
							<tr>
								<td>Latin</td>
								<td>Latin</td>
								<td>اللاتينية</td>
							</tr>
							<tr>
								<td>Law</td>
								<td>droit</td>
								<td>قانون</td>
							</tr>
							<tr>
								<td>Literature</td>
								<td>littérature</td>
								<td>المؤلفات</td>
							</tr>
							<tr>
								<td>Medecine</td>
								<td>médecine</td>
								<td>الطب</td>
							</tr>
							<tr>
								<td>Modern languages</td>
								<td>langues modernes</td>
								<td>اللغات الحديثة</td>
							</tr>
							<tr>
								<td>Music</td>
								<td>musique</td>
								<td>الموسيقى</td>
							</tr>
							<tr>
								<td>Physical education</td>
								<td>éducation physique</td>
								<td>التعليم الجسدي</td>
							</tr>
							<tr>
								<td>Physics</td>
								<td>physique</td>
								<td>الفيزياء</td>
							</tr>
							<tr>
								<td>Plastic art</td>
								<td>art plastique</td>
								<td>الفن تشكيلي</td>
							</tr>
							<tr>
								<td>Religious education</td>
								<td>éducation religieuse</td>
								<td>التعليم الديني</td>
							</tr>
							<tr>
								<td>Science</td>
								<td>Science</td>
								<td>علم</td>
							</tr>
							<tr>
								<td>Sociology</td>
								<td>sociologie</td>
								<td>علم الاجتماع</td>
							</tr>
							<tr>
								<td>Spelling</td>
								<td>orthographe</td>
								<td>الإملائية</td>
							</tr>
							<tr>
								<td>Trigonometry</td>
								<td>trigonométrie</td>
								<td>علم المثلثات</td>
							</tr>
							<tr>
								<td class="soustitre">Useful verbs</td>
								<td class="soustitre">verbes utiles</td>
								<td class="soustitre">أفعال مفيدة</td>
							</tr>
							<tr>
								<td>To answer</td>
								<td>répondre</td>
								<td>للإجابة</td>
							</tr>
							<tr>
								<td>To ask</td>
								<td>demander</td>
								<td>طلب</td>
							</tr>
							<tr>
								<td>To cheat</td>
								<td>tricher</td>
								<td>للغش</td>
							</tr>
							<tr>
								<td>To circle</td>
								<td>entourer</td>
								<td>يحيط</td>
							</tr>
							<tr>
								<td>To do homework</td>
								<td>faire ses devoirs</td>
								<td>أداء الواجب المنزلي</td>
							</tr>
							<tr>
								<td>To draw</td>
								<td>dessiner</td>
								<td>رسم</td>
							</tr>
							<tr>
								<td>To drop out of school</td>
								<td>abandonner l'école</td>
								<td>تسرب من المدرسة</td>
							</tr>
							<tr>
								<td>To expel</td>
								<td>renvoyer, exclure</td>
								<td>استبعاد</td>
							</tr>
							<tr>
								<td>To go to school</td>
								<td>aller à l'école</td>
								<td>الذهاب إلى المدرسة</td>
							</tr>
							<tr>
								<td>To go to the blackboard</td>
								<td>aller au tableau</td>
								<td>الذهاب إلى السبورة</td>
							</tr>
							<tr>
								<td>To graduate</td>
								<td>obtenir un diplôme</td>
								<td>الحصول على شهادة</td>
							</tr>
							<tr>
								<td>To learn</td>
								<td>apprendre</td>
								<td>تعلم</td>
							</tr>
							<tr>
								<td>To learn by heart</td>
								<td>apprendre par cœur</td>
								<td>حفظ عن ظهر قلب</td>
							</tr>
							<tr>
								<td>To listen</td>
								<td>écouter</td>
								<td>استماع</td>
							</tr>
							<tr>
								<td>To pass an exam</td>
								<td>réussir un examen</td>
								<td>النجاح في الامتحان</td>
							</tr>
							<tr>
								<td>To put the hand up</td>
								<td>lever la main</td>
								<td>رفع اليد</td>
							</tr>
							<tr>
								<td>To read</td>
								<td>lire</td>
								<td>ليقرأ</td>
							</tr>
							<tr>
								<td>To repeat a year</td>
								<td>redoubler une année</td>
								<td>لتكرار سنة</td>
							</tr>
							<tr>
								<td>To revise</td>
								<td>réviser</td>
								<td>مراجعة</td>
							</tr>
							<tr>
								<td>To skip classes</td>
								<td>sécher les cours</td>
								<td>تخطي الدروس</td>
							</tr>
							<tr>
								<td>To study</td>
								<td>étudier</td>
								<td>درس</td>
							</tr>
							<tr>
								<td>To take an exam</td>
								<td>passer un examen</td>
								<td>اجتياز امتحان</td>
							</tr>
							<tr>
								<td>To write</td>
								<td>écrire</td>
								<td>كتب</td>
							</tr>
						

						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nourriturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nourriture.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/fitnesslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Fitness<?php endif; if($langue === 'english'): ?>Fitness<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="fitness.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		