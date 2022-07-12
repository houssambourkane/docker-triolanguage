<?php
		$titrefr = "ANATOMIE";
		$titreang = "ANATOMY";
		$bg = "./assets/img/bgtheme/anatomiebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Anatomie<?php endif; if($langue === 'english'): ?>Anatomy<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire d'anatomie en Anglais - Français - Arabe">
		<meta name="keywords" content="anatomie, corps, humain, body, anatomy, médecine, médecin, docteur, dérmatologie, pathologie, sexologie, pandémie, épidémie, pharmaceutique, organes, organs, organe, système immunitaire,digestive, nerveux, hopital, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Anatomie<?php endif; if($langue === 'english'): ?>Anatomy<?php endif; ?></h1>

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
								<td class="soustitre">The head and the face</td>
								<td class="soustitre">La tête et le visage</td >
								<td class="soustitre">الرأس والوجه</td>
							</tr>
							<tr>
								<td>Adam's apple</td>
								<td>pomme d'Adam</td>
								<td>تفاحة آدم</td>
							</tr>
							<tr>
								<td>Beard</td>
								<td>barbe</td>
								<td>لحية</td>
							</tr>
							<tr>
								<td>Cheek</td>
								<td>joue</td>
								<td>الخد</td>
							</tr>
							<tr>
								<td>Cheekbone</td>
								<td>pommette</td>
								<td>العظم الوجني</td>
							</tr>
							<tr>
								<td>Chin</td>
								<td>menton</td>
								<td>ذقن</td>
							</tr>
							<tr>
								<td>Cornea</td>
								<td>cornée</td>
								<td>قرنية</td>
							</tr>
							<tr>
								<td>Ear</td>
								<td>oreille</td>
								<td>أذن</td>
							</tr>
							<tr>
								<td>Eardrum</td>
								<td>tympan</td>
								<td>طبلة الأذن</td>
							</tr>
							<tr>
								<td>Earlobe</td>
								<td>lobe d'oreille</td>
								<td>شحمة الأذن</td>
							</tr>
							<tr>
								<td>Eye</td>
								<td>œil</td>
								<td>عين</td>
							</tr>
							<tr>
								<td>Eye socket</td>
								<td>globe oculaire</td>
								<td>محجر العين</td>
							</tr>
							<tr>
								<td>Eyebrow</td>
								<td>sourcil</td>
								<td>حاجب العين</td>
							</tr>
							<tr>
								<td>Eyelash</td>
								<td>cil</td>
								<td>رمشة عين</td>
							</tr>
							<tr>
								<td>Eyelid</td>
								<td>paupière</td>
								<td>جفن</td>
							</tr>
							<tr>
								<td>Forehead</td>
								<td>front</td>
								<td>جبهة</td>
							</tr>
							<tr>
								<td>Gum</td>
								<td>gencive</td>
								<td>لثة</td>
							</tr>
							<tr>
								<td>Hair</td>
								<td>cheveux</td>
								<td>شعر</td>
							</tr>
							<tr>
								<td>Iris</td>
								<td>iris</td>
								<td>قزحية</td>
							</tr>
							<tr>
								<td>Jaw</td>
								<td>mâchoire</td>
								<td>فك</td>
							</tr>
							<tr>
								<td>Lip</td>
								<td>lèvre</td>
								<td>شفة</td>
							</tr>
							<tr>
								<td>Mouth</td>
								<td>bouche</td>
								<td>فم</td>
							</tr>
							<tr>
								<td>Neck</td>
								<td>cou</td>
								<td>العنق</td>
							</tr>
							<tr>
								<td>Nose</td>
								<td>nez</td>
								<td>أنف</td>
							</tr>
							<tr>
								<td>Nostril</td>
								<td>narine</td>
								<td>منخر</td>
							</tr>
							<tr>
								<td>Palate</td>
								<td>palais</td>
								<td>حنك</td>
							</tr>
							<tr>
								<td>Pupil</td>
								<td>pupille</td>
								<td>بؤبؤ العين</td>
							</tr>
							<tr>
								<td>Retina</td>
								<td>rétine</td>
								<td>شبكية العين</td>
							</tr>
							<tr>
								<td>Temple</td>
								<td>tempe</td>
								<td>صدغ</td>
							</tr>
							<tr>
								<td>Throat</td>
								<td>gorge</td>
								<td>حلق</td>
							</tr>
							<tr>
								<td>Tongue</td>
								<td>langue</td>
								<td>لسان</td>
							</tr>
							<tr>
								<td>Tooth/teeth</td>
								<td>dent/dents</td>
								<td>سن/أسنان</td>
							</tr>
							<tr>
								<td>Wrinkles</td>
								<td>rides</td>
								<td>التجاعيد</td>
							</tr>

							<tr>
								<td class="soustitre">Arm</td>
								<td class="soustitre">bras</td>
								<td class="soustitre">ذراع</td>
							</tr>
							<tr>
								<td>Armpit</td>
								<td>aisselle</td>
								<td>إبط</td>
							</tr>
							<tr>
								<td>Biceps</td>
								<td>biceps</td>
								<td>العضلة ذات الرأسين</td>
							</tr>
							<tr>
								<td>Elbow</td>
								<td>coude</td>
								<td>مرفق</td>
							</tr>
							<tr>
								<td>Fist</td>
								<td>poing</td>
								<td>قبضة</td>
							</tr>
							<tr>
								<td>Forearm</td>
								<td>avant-bras</td>
								<td>الساعد</td>
							</tr>
							<tr>
								<td>Shoulder</td>
								<td>épaule</td>
								<td>كتف</td>
							</tr>
							<tr>
								<td>Triceps</td>
								<td>triceps</td>
								<td>ثلاثية الرؤوس</td>
							</tr>
							<tr>
								<td>Wrist</td>
								<td>poignet</td>
								<td>معصم</td>
							</tr>

							<tr>
								<td class="soustitre">Hand</td>
								<td class="soustitre">main</td>
								<td class="soustitre">يد</td>
							</tr>
							<tr>
								<td>Fingers</td>
								<td>doigts</td>
								<td>أصابع</td>
							</tr>
							<tr>
								<td>Index finger</td>
								<td>index</td>
								<td>السبابة</td>
							</tr>
							<tr>
								<td>Knuckles</td>
								<td>phalanges</td>
								<td>مفصل الأصبع</td>
							</tr>
							<tr>
								<td>Little finger/Pinkie</td>
								<td>auriculaire</td>
								<td>خنصر</td>
							</tr>
							<tr>
								<td>Middle finger</td>
								<td>majeur</td>
								<td>الاصبع الوسطى</td>
							</tr>
							<tr>
								<td>Nail</td>
								<td>ongle</td>
								<td>ظفر</td>
							</tr>
							<tr>
								<td>Palm</td>
								<td>paume</td>
								<td>كف</td>
							</tr>
							<tr>
								<td>Ring finger</td>
								<td>annulaire</td>
								<td>البنصر</td>
							</tr>
							<tr>
								<td>Thumb</td>
								<td>pouce</td>
								<td>الإبهام</td>
							</tr>

							<tr>
								<td class="soustitre">Body</td>
								<td class="soustitre">corps</td>
								<td class="soustitre">الجسم</td>
							</tr>
							<tr>
								<td>Abdomen</td>
								<td>abdomen</td>
								<td>بطن</td>
							</tr>
							<tr>
								<td>Ankle</td>
								<td>cheville</td>
								<td>الكاحل</td>
							</tr>
							<tr>
								<td>Back</td>
								<td>dos</td>
								<td>ظهر</td>
							</tr>
							<tr>
								<td>Belly</td>
								<td>ventre</td>
								<td>بطن</td>
							</tr>
							<tr>
								<td>Breast</td>
								<td>sein</td>
								<td>ثدي</td>
							</tr>
							<tr>
								<td>Butt</td>
								<td>fesse</td>
								<td>مؤخرة</td>
							</tr>
							<tr>
								<td>Calf</td>
								<td>mollet</td>
								<td>الساق</td>
							</tr>
							<tr>
								<td>Chest</td>
								<td>poitrine/thorax</td>
								<td>صدر</td>
							</tr>
							<tr>
								<td>Foot/feet</td>
								<td>pied/pieds</td>
								<td>قدم/أقدام</td>
							</tr>
							<tr>
								<td>Heel</td>
								<td>talon</td>
								<td>كعب</td>
							</tr>
							<tr>
								<td>Hip</td>
								<td>hanche</td>
								<td>ورك</td>
							</tr>
							<tr>
								<td>Knee</td>
								<td>genou</td>
								<td>ركبة</td>
							</tr>
							<tr>
								<td>Leg</td>
								<td>jambe</td>
								<td>رجل</td>
							</tr>
							<tr>
								<td>Navel/bellybutton</td>
								<td>nombril</td>
								<td>سرة البطن</td>
							</tr>
							<tr>
								<td>Sole</td>
								<td>plante des pieds</td>
								<td>باطن القدم</td>
							</tr>
							<tr>
								<td>Thigh</td>
								<td>cuisse</td>
								<td>فخذ</td>
							</tr>
							<tr>
								<td>Toe</td>
								<td>orteil</td>
								<td>إصبع قدم</td>
							</tr>
							<tr>
								<td>Toenail</td>
								<td>ongle de pied</td>
								<td>ظفر الرجل</td>
							</tr>
							<tr>
								<td>Waist</td>
								<td>taille</td>
								<td>وسط</td>
							</tr>

							<tr>
								<td class="soustitre">Organs</td>
								<td class="soustitre">organes</td>
								<td class="soustitre">أعضاء الجسم</td>
							</tr>
							<tr>
								<td>Achilles tendon</td>
								<td>tendon d'Achille</td>
								<td>وتر أخيل</td>
							</tr>
							<tr>
								<td>Aorta</td>
								<td>aorte</td>
								<td>الأبهر</td>
							</tr>
							<tr>
								<td>Appendix</td>
								<td>appendice</td>
								<td>الزائدة الدودية</td>
							</tr>
							<tr>
								<td>Artery</td>
								<td>artère</td>
								<td>شريان</td>
							</tr>
							<tr>
								<td>Bladder</td>
								<td>vessie</td>
								<td>مثانة</td>
							</tr>
							<tr>
								<td>Blood vessel </td>
								<td>vaisseau sanguin</td>
								<td>الأوعية الدموية</td>
							</tr>
							<tr>
								<td>Brain</td>
								<td>cerveau</td>
								<td>دماغ</td>
							</tr>
							<tr>
								<td>Bronchus</td>
								<td>bronches</td>
								<td>القصبات الهوائية</td>
							</tr>
							<tr>
								<td>Cartilage</td>
								<td>cartilage</td>
								<td>غضروف</td>
							</tr>
							<tr>
								<td>Colon</td>
								<td>colon</td>
								<td>القولون</td>
							</tr>
							<tr>
								<td>Diaphragm</td>
								<td>diaphragme</td>
								<td>حجاب حاجز</td>
							</tr>
							<tr>
								<td>Gall bladder</td>
								<td>vésicule biliaire</td>
								<td>غال المرارة</td>
							</tr>
							<tr>
								<td>Genitals</td>
								<td>organes génitaux</td>
								<td>الأعضاء التناسلية</td>
							</tr>
							<tr>
								<td>Heart</td>
								<td>cœur</td>
								<td>قلب</td>
							</tr>
							<tr>
								<td>Intestines</td>
								<td>intestins</td>
								<td>أمعاء</td>
							</tr>
							<tr>
								<td>Jugular vein</td>
								<td>veine jugulaire</td>
								<td>الوريد الوداجي</td>
							</tr>
							<tr>
								<td>Kidneys</td>
								<td>reins</td>
								<td>كلاوي</td>
							</tr>
							<tr>
								<td>Large intestine</td>
								<td>gros intestin</td>
								<td>الأمعاء الغليظة</td>
							</tr>
							<tr>
								<td>Larynx</td>
								<td>larynx</td>
								<td>حنجرة</td>
							</tr>
							<tr>
								<td>Ligament</td>
								<td>ligament</td>
								<td>رباط</td>
							</tr>
							<tr>
								<td>Lungs</td>
								<td>poumons</td>
								<td>الرئتين</td>
							</tr>
							<tr>
								<td>Oesophagus</td>
								<td>œsophage</td>
								<td>المريء</td>
							</tr>
							<tr>
								<td>Pancreas</td>
								<td>pancréas</td>
								<td>بنكرياس</td>
							</tr>
							<tr>
								<td>Penis</td>
								<td>penis</td>
								<td>قضيب</td>
							</tr>
							<tr>
								<td>Prostate</td>
								<td>prostate</td>
								<td>البروستات</td>
							</tr>
							<tr>
								<td>Pulmonary vein</td>
								<td>veine pulmonaire</td>
								<td>لوريد الرئوي</td>
							</tr>
							<tr>
								<td>Rectum</td>
								<td>rectum</td>
								<td>شرج</td>
							</tr>
							<tr>
								<td>Ribs</td>
								<td>côtes</td>
								<td>ضلوع</td>
							</tr>
							<tr>
								<td>Small intestine</td>
								<td>intestin grêle</td>
								<td>الأمعاء الدقيقة</td>
							</tr>
							<tr>
								<td>Spleen</td>
								<td>rate</td>
								<td>طحال</td>
							</tr>
							<tr>
								<td>Stomach</td>
								<td>estomac</td>
								<td>معدة</td>
							</tr>
							<tr>
								<td>Tendon</td>
								<td>tendon</td>
								<td>وتر</td>
							</tr>
							<tr>
								<td>Thyroid gland</td>
								<td>thyroïde</td>
								<td>الغدة الدرقية</td>
							</tr>
							<tr>
								<td>Tonsils</td>
								<td>amygdales</td>
								<td>اللوزتين</td>
							</tr>
							<tr>
								<td>Trachea/windpipe</td>
								<td>trachée</td>
								<td>قصبة الهوائية</td>
							</tr>
							<tr>
								<td>Urethra</td>
								<td>urètre</td>
								<td>الإحليل</td>
							</tr>
							<tr>
								<td>Vagina</td>
								<td>vagin</td>
								<td>المهبل</td>
							</tr>
							<tr>
								<td>Vein</td>
								<td>veine</td>
								<td>عرق</td>
							</tr>
							<tr>
								<td class="soustitre">Skeleton</td>
								<td class="soustitre">squelette</td>
								<td class="soustitre">هيكل عظمي</td>
							</tr>
							<tr>
								<td>Backbone</td>
								<td>colonne vertébrale</td>
								<td>العمود الفقري</td>
							</tr>
							<tr>
								<td>Bone</td>
								<td>os</td>
								<td>عظم</td>
							</tr>
							<tr>
								<td>Breast bone</td>
								<td>sternum</td>
								<td>عظم الثدي</td>
							</tr>
							<tr>
								<td>Carpus</td>
								<td>carpes</td>
								<td>رسغ</td>
							</tr>
							<tr>
								<td>Clavicle</td>
								<td>clavicule</td>
								<td>ترقوة</td>
							</tr>
							<tr>
								<td>Femur</td>
								<td>fémur</td>
								<td>عظم الفخذ</td>
							</tr>
							<tr>
								<td>Fibula</td>
								<td>péroné</td>
								<td>مشبك</td>
							</tr>
							<tr>
								<td>Humerus</td>
								<td>humérus</td>
								<td>عظم العضد</td>
							</tr>
							<tr>
								<td>Ilium</td>
								<td>os iliaque</td>
								<td>حرقفة</td>
							</tr>
							<tr>
								<td>Kneecap</td>
								<td>rotule</td>
								<td>الرضفة عظمة رأس الركبة</td>
							</tr>
							<tr>
								<td>Marrow</td>
								<td>moelle osseuse</td>
								<td>نخاع</td>
							</tr>
							<tr>
								<td>Metacarpals</td>
								<td>métacarpes</td>
								<td>عظام المشط</td>
							</tr>
							<tr>
								<td>Metatarsals</td>
								<td>métatarses</td>
								<td>الأمشاط</td>
							</tr>
							<tr>
								<td>Patella</td>
								<td>rotule</td>
								<td> العظم المتحرك في رأس الركبة</td>
							</tr>
							<tr>
								<td>pelvis</td>
								<td>pelvis</td>
								<td>الحوض</td>
							</tr>
							<tr>
								<td>Radius</td>
								<td>radius</td>
								<td>كوع</td>
							</tr>
							<tr>
								<td>Rib cage</td>
								<td>cage thoracique</td>
								<td>القفص الصدرى</td>
							</tr>
							<tr>
								<td>Sacrum</td>
								<td>sacrum</td>
								<td>العجز</td>
							</tr>
							<tr>
								<td>Shoulder blade</td>
								<td>omoplate</td>
								<td>شفرة الكتف</td>
							</tr>
							<tr>
								<td>Skull</td>
								<td>crâne</td>
								<td>جمجمة</td>
							</tr>
							<tr>
								<td>Tibia</td>
								<td>tibia</td>
								<td>الساق</td>
							</tr>
							<tr>
								<td>Ulna bone</td>
								<td>cubitus</td>
								<td>عظم الزند</td>
							</tr>

							<tr>
								<td class="soustitre">Divers</td>
								<td class="soustitre">Divers</td>
								<td class="soustitre">أشتات</td>
							</tr>
							<tr>
								<td>Beauty spot</td>
								<td>grain de beauté</td>
								<td>شامة</td>
							</tr>
							<tr>
								<td>Beard</td>
								<td>barbe</td>
								<td>لحية</td>
							</tr>
							<tr>
								<td>Blood</td>
								<td>sang</td>
								<td>دم</td>
							</tr>
							<tr>
								<td>cardiovascular system</td>
								<td>système cardiovasculaire</td>
								<td>الجهاز القلب والأوعية الدموية</td>
							</tr>
							<tr>
								<td>Circulatory system</td>
								<td>système circulatoire</td>
								<td>جهاز الدورة الدموية</td>
							</tr>
							<tr>
								<td>Digestive system</td>
								<td>système digestif</td>
								<td>الجهاز الهضمي</td>
							</tr>
							<tr>
								<td>Fat</td>
								<td>graisse</td>
								<td>سمين</td>
							</tr>
							<tr>
								<td>Flesh</td>
								<td>chair</td>
								<td>لحم</td>
							</tr>
							<tr>
								<td>Freckles</td>
								<td>tâches de rousseur</td>
								<td>النمش</td>
							</tr>
							<tr>
								<td>Gland</td>
								<td>glande</td>
								<td>غدة</td>
							</tr>
							<tr>
								<td>Joint</td>
								<td>articulation</td>
								<td>مفصل</td>
							</tr>
							<tr>
								<td>Limbs</td>
								<td>membres</td>
								<td>أطراف</td>
							</tr>
							<tr>
								<td>Moustache</td>
								<td>moustache</td>
								<td>شوارب</td>
							</tr>
							<tr>
								<td>Mucus</td>
								<td>mucus</td>
								<td>مخاط</td>
							</tr>
							<tr>
								<td>Muscle</td>
								<td>muscle</td>
								<td>عضلة</td>
							</tr>
							<tr>
								<td>Nerve</td>
								<td>nerf</td>
								<td>عصب</td>
							</tr>
							<tr>
								<td>Nervous system</td>
								<td>système nerveux</td>
								<td>الجهاز العصبي</td>
							</tr>
							<tr>
								<td>Pulse</td>
								<td>pouls</td>
								<td>نبض</td>
							</tr>
							<tr>
								<td>respiratory system</td>
								<td>respiratory system</td>
								<td>الجهاز التنفسي</td>
							</tr>
							<tr>
								<td>Saliva</td>
								<td>salive</td>
								<td>لعاب</td>
							</tr>
							<tr>
								<td>Semen</td>
								<td>sperme</td>
								<td>المني</td>
							</tr>
							<tr>
								<td>Skin</td>
								<td>peau</td>
								<td>بشرة</td>
							</tr>
							<tr>
								<td>Sweat</td>
								<td>sueur</td>
								<td>عرق</td>
							</tr>
							<tr>
								<td>Tears</td>
								<td>larmes</td>
								<td>دموع</td>
							</tr>
							<tr>
								<td>urinary system</td>
								<td>système urinaire</td>
								<td>الجهاز البولي</td>
							</tr>
							<tr>
								<td>Urine</td>
								<td>urine</td>
								<td>بول</td>
							</tr>
							<tr>
								<td>Vomit</td>
								<td>du vomi</td>
								<td>قيء</td>
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
							  <img src="./assets/img/logotheme/les5senslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les 5 sens<?php endif; if($langue === 'english'): ?>The 5 senses<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="5sens.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
