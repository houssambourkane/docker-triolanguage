<?php
		$titrefr = "DROIT";
		$titreang = "LAW";
		$bg = "./assets/img/bgtheme/droitbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Droit<?php endif; if($langue === 'english'): ?>Law<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de droit en Anglais - Français - Arabe">
		<meta name="keywords" content="droit, law, laws, règlement, loi, right, rights, human, prérogative, accord, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, juge, tribunal">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Droit<?php endif; if($langue === 'english'): ?>Law<?php endif; ?></h1>

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
										<td>Accomplice</td>
										<td>complice</td>
										<td>شريك</td>
									</tr>
									<tr>
										<td>Accusation</td>
										<td>accusation</td>
										<td>تهمة</td>
									</tr>
									<tr>
										<td>Administrative process</td>
										<td>Procédure administrative</td>
										<td>الإجراءات الإدارية</td>
									</tr>
									<tr>
										<td>Appeal</td>
										<td>appel, pourvoi</td>
										<td>استئناف</td>
									</tr>
									<tr>
										<td>Arbitration</td>
										<td>arbitrage</td>
										<td>أرشيف</td>
									</tr>
									<tr>
										<td>Archive</td>
										<td>Archive</td>
										<td>أرشيف</td>
									</tr>
									<tr>
										<td>Arrest</td>
										<td>arrestation/arrêt</td>
										<td>إعتقال</td>
									</tr>
									<tr>
										<td>Assault</td>
										<td>agression/attaque</td>
										<td>الاعتداءات</td>
									</tr>
									<tr>
										<td>Assignment</td>
										<td>Assignation</td>
										<td>مهمة</td>
									</tr>
									<tr>
										<td>Attorney general</td>
										<td>Procureur général</td>
										<td>مدعي عام</td>
									</tr>
									<tr>
										<td>Attorney/lawyer</td>
										<td>Avocat</td>
										<td>محامي</td>
									</tr>
									<tr>
										<td>Audience</td>
										<td>Audience</td>
										<td>جلسة محاكمة</td>
									</tr>
									<tr>
										<td>Authentic act</td>
										<td>Acte authentique</td>
										<td>فعل أصيل</td>
									</tr>
									<tr>
										<td>Autopsy</td>
										<td>autopsie</td>
										<td>تشريح الجثة</td>
									</tr>
									<tr>
										<td>Bail</td>
										<td>Caution</td>
										<td>كفالة</td>
									</tr>
									<tr>
										<td>Bribery</td>
										<td>corruption/pot de vin</td>
										<td>الرشوة</td>
									</tr>
									<tr>
										<td>bylaw</td>
										<td>arrêté</td>
										<td>قرار</td>
									</tr>
									<tr>
										<td>Case</td>
										<td>affaire</td>
										<td>قضية</td>
									</tr>
									<tr>
										<td>Cassation</td>
										<td>Cassation</td>
										<td>النقض</td>
									</tr>
									<tr>
										<td>Cause</td>
										<td>Cause</td>
										<td>سبب</td>
									</tr>
									<tr>
										<td>Cell</td>
										<td>cellule</td>
										<td>زنزانة</td>
									</tr>
									<tr>
										<td>Chancellery</td>
										<td>Chancellerie</td>
										<td>المستشارية</td>
									</tr>
									<tr>
										<td>Clerk</td>
										<td>Greffier</td>
										<td>كاتب ملفات</td>
									</tr>
									<tr>
										<td>Collective agreement</td>
										<td>Convention collective</td>
										<td>إتفاقية جماعية</td>
									</tr>
									<tr>
										<td>Commissioner</td>
										<td>commissaire</td>
										<td>مفوض</td>
									</tr>
									<tr>
										<td>Competence</td>
										<td>Compétence</td>
										<td>الاختصاص</td>
									</tr>
									<tr>
										<td>Complaint</td>
										<td>Plainte</td>
										<td>شكوى</td>
									</tr>
									<tr>
										<td>Conclusive evidence</td>
										<td>preuve formelle</td>
										<td>دليل قاطع</td>
									</tr>
									<tr>
										<td>Confirmation</td>
										<td>Confirmation</td>
										<td>التأكيد</td>
									</tr>
									<tr>
										<td>Conflict</td>
										<td>conflit</td>
										<td>نزاع</td>
									</tr>
									<tr>
										<td>Consent</td>
										<td>Consentement</td>
										<td>موافقة</td>
									</tr>
									<tr>
										<td>Constitution</td>
										<td>Constitution</td>
										<td>دستور</td>
									</tr>
									<tr>
										<td>Contract</td>
										<td>Contrat</td>
										<td>عقد</td>
									</tr>
									<tr>
										<td>Convention</td>
										<td>Convention</td>
										<td>إتفاقية</td>
									</tr>
									<tr>
										<td>Convict</td>
										<td>Condamné</td>
										<td>محكوم عليه</td>
									</tr>
									<tr>
										<td>Conviction/sentence</td>
										<td>condamnation/peine</td>
										<td>إدانة / حكم</td>
									</tr>
									<tr>
										<td>Corporate name</td>
										<td>Dénomination sociale</td>
										<td>اسم الشركة</td>
									</tr>
									<tr>
										<td>council of state</td>
										<td>Conseil d'État</td>
										<td>مجلس السيادة</td>
									</tr>
									<tr>
										<td>Court decision</td>
										<td>décision du tribunal</td>
										<td>قرار المحكمة</td>
									</tr>
									<tr>
										<td>Court of Appeal</td>
										<td>Cour d'appel</td>
										<td>محكمة الاستئناف</td>
									</tr>
									<tr>
										<td>Court records</td>
										<td>archives judiciaires</td>
										<td>سجلات المحكمة</td>
									</tr>
									<tr>
										<td>Court registry</td>
										<td>greffe du tribunal</td>
										<td>سجل المحكمة</td>
									</tr>
									<tr>
										<td>Courthouse</td>
										<td>palais de justice</td>
										<td>قصر العدل</td>
									</tr>
									<tr>
										<td>Crime</td>
										<td>Crime</td>
										<td>جريمة</td>
									</tr>
									<tr>
										<td>Criminal</td>
										<td>criminel</td>
										<td>مجرم</td>
									</tr>
									<tr>
										<td>Criminal record</td>
										<td>Casier judiciaire</td>
										<td>سجل جنائي</td>
									</tr>
									<tr>
										<td>Culprit</td>
										<td>coupable</td>
										<td>مجرم</td>
									</tr>
									<tr>
										<td>Death certificate</td>
										<td>acte de décès</td>
										<td>شهادة وفاة</td>
									</tr>
									<tr>
										<td>Death penalty</td>
										<td>peine de mort</td>
										<td>عقوبة الاعدام</td>
									</tr>
									<tr>
										<td>Decree</td>
										<td>Décret</td>
										<td>مرسوم</td>
									</tr>
									<tr>
										<td>Defense</td>
										<td>Défense</td>
										<td>دفاع</td>
									</tr>
									<tr>
										<td>Degree of jurisdiction</td>
										<td>Degré de juridiction</td>
										<td>درجة الاختصاص</td>
									</tr>
									<tr>
										<td>Deliberate</td>
										<td>Délibéré</td>
										<td>متعمد</td>
									</tr>
									<tr>
										<td>Detective</td>
										<td>détective</td>
										<td>المحقق</td>
									</tr>
									<tr>
										<td>Disclosure</td>
										<td>divulgation</td>
										<td>إفشاء</td>
									</tr>
									<tr>
										<td>DNA test</td>
										<td>test ADN</td>
										<td>ADN اختبار</td>
									</tr>
									<tr>
										<td>Doctrine</td>
										<td>doctrine</td>
										<td>عقيدة</td>
									</tr>
									<tr>
										<td>Dol</td>
										<td>Dol</td>
										<td>دول</td>
									</tr>
									<tr>
										<td>Drug addict</td>
										<td>toxicomane</td>
										<td>مدمن بالمخدرات</td>
									</tr>
									<tr>
										<td>Drug traffic</td>
										<td>trafic de drogue</td>
										<td>الاتجار بالمخدرات</td>
									</tr>
									<tr>
										<td>Enforceability</td>
										<td>Force exécutoir</td>
										<td>القوة التنفيذية</td>
									</tr>
									<tr>
										<td>Equity</td>
										<td>Équité</td>
										<td>عدالة</td>
									</tr>
									<tr>
										<td>exculpation</td>
										<td>disculpation</td>
										<td>تبرئة</td>
									</tr>
									<tr>
										<td>Financial penalty</td>
										<td>Amende</td>
										<td>غرامة</td>
									</tr>
									<tr>
										<td>Fugitive/runaway</td>
										<td>fugitif</td>
										<td>الهارب</td>
									</tr>
									<tr>
										<td>guiltiness</td>
										<td>culpabilité</td>
										<td>الذنب</td>
									</tr>
									<tr>
										<td>Headquarters Magistrates</td>
										<td>Magistrats du siège</td>
										<td>قضاة المقر</td>
									</tr>
									<tr>
										<td>Homicide</td>
										<td>Homicide</td>
										<td>القتل</td>
									</tr>
									<tr>
										<td>Illegal</td>
										<td>Illégal</td>
										<td>غير قانوني</td>
									</tr>
									<tr>
										<td>Illicit</td>
										<td>Illicéité</td>
										<td>محظور</td>
									</tr>
									<tr>
										<td>Immunity</td>
										<td>immunité</td>
										<td>حصانة</td>
									</tr>
									<tr>
										<td>Imperative</td>
										<td>Impérative</td>
										<td>صيغة الامر</td>
									</tr>
									<tr>
										<td>Inadmissibility</td>
										<td>Irrecevabilité</td>
										<td>عدم القبول</td>
									</tr>
									<tr>
										<td>Inquiry/investigation</td>
										<td>enquête/investigation</td>
										<td>تحقيق</td>
									</tr>
									<tr>
										<td>Inspector</td>
										<td>inspecteur</td>
										<td>مفتش</td>
									</tr>
									<tr>
										<td>International treaty</td>
										<td>Traité international</td>
										<td>معاهدة دولية</td>
									</tr>
									<tr>
										<td>Interrogation</td>
										<td>interrogatoire</td>
										<td>استجواب</td>
									</tr>
									<tr>
										<td>Joint responsibility</td>
										<td>Coresponsabilité</td>
										<td>المسؤولية المشتركة</td>
									</tr>
									<tr>
										<td>Judge</td>
										<td>Juge</td>
										<td>قاضي</td>
									</tr>
									<tr>
										<td>Judgment</td>
										<td>Jugement</td>
										<td>حكم</td>
									</tr>
									<tr>
										<td>Jurisprudence</td>
										<td>Jurisprudence</td>
										<td>علم القانون</td>
									</tr>
									<tr>
										<td>Jury</td>
										<td>Jury</td>
										<td>هيئة المحلفين</td>
									</tr>
									<tr>
										<td>Justice</td>
										<td>Justice</td>
										<td>العدالة</td>
									</tr>
									<tr>
										<td>Justice decision</td>
										<td>Décision de justice</td>
										<td>قرار العدالة</td>
									</tr>
									<tr>
										<td>Law</td>
										<td>loi</td>
										<td>قانون</td>
									</tr>
									<tr>
										<td>Lawsuit</td>
										<td>Action en justice</td>
										<td>دعوى قضائية</td>
									</tr>
									<tr>
										<td>Legal</td>
										<td>Légal</td>
										<td>قانوني</td>
									</tr>
									<tr>
										<td>Legal act</td>
										<td>Acte juridique</td>
										<td>عمل قانوني</td>
									</tr>
									<tr>
										<td>Legal advisor</td>
										<td>conseiller juridique</td>
										<td>مستشار قانوني</td>
									</tr>
									<tr>
										<td>legal fees</td>
										<td>Honoraires d'avocat</td>
										<td>الرسوم القانونية</td>
									</tr>
									<tr>
										<td>Litigation</td>
										<td>Litige</td>
										<td>دعوى</td>
									</tr>
									<tr>
										<td>Medical examination</td>
										<td>examen médical</td>
										<td>الفحص الطبي</td>
									</tr>
									<tr>
										<td>ministerial decree</td>
										<td>Arrêt ministériel</td>
										<td>قرار وزاري</td>
									</tr>
									<tr>
										<td>Ministry of Justice</td>
										<td>Ministère de la justice</td>
										<td>وزارة العدل</td>
									</tr>
									<tr>
										<td>misdemeanor</td>
										<td>Délit</td>
										<td>جنحة</td>
									</tr>
									<tr>
										<td>Notification</td>
										<td>Notification</td>
										<td>تنبيه</td>
									</tr>
									<tr>
										<td>Oath</td>
										<td>serment</td>
										<td>حلف</td>
									</tr>
									<tr>
										<td>Obligatory/compulsory</td>
										<td>Obligatoire</td>
										<td>واجب</td>
									</tr>
									<tr>
										<td>Offense/infringement</td>
										<td>Infraction</td>
										<td>جريمة</td>
									</tr>
									<tr>
										<td>Order</td>
										<td>Ordonnance</td>
										<td>أمر</td>
									</tr>
									<tr>
										<td>Pact</td>
										<td>Pacte</td>
										<td>إتفاقية</td>
									</tr>
									<tr>
										<td>Penitentiary</td>
										<td>pénitencier</td>
										<td>إصلاحية</td>
									</tr>
									<tr>
										<td>Perjury</td>
										<td>faux témoignage</td>
										<td>شهادة زور</td>
									</tr>
									<tr>
										<td>Perpetuity</td>
										<td>perpétuité</td>
										<td>مؤبد</td>
									</tr>
									<tr>
										<td>Perpetuity imprisonment</td>
										<td>réclusion perpétuelle</td>
										<td>السجن مدى الحياة</td>
									</tr>
									<tr>
										<td>Pleading</td>
										<td>Acte de procédure/plaidoirie</td>
										<td>مرافعة</td>
									</tr>
									<tr>
										<td>Pledge</td>
										<td>Gage</td>
										<td>التعهد</td>
									</tr>
									<tr>
										<td>Police station</td>
										<td>commissariat</td>
										<td>محطة الشرطة</td>
									</tr>
									<tr>
										<td>Prison/jail</td>
										<td>prison</td>
										<td>سجن</td>
									</tr>
									<tr>
										<td>Procedure</td>
										<td>Procédure</td>
										<td>إجراء</td>
									</tr>
									<tr>
										<td>Proof/evidence</td>
										<td>Preuve</td>
										<td>دليل</td>
									</tr>
									<tr>
										<td>Prosecutor</td>
										<td>procureur</td>
										<td>المدعي</td>
									</tr>
									<tr>
										<td>Punishment</td>
										<td>Punition</td>
										<td>عقاب</td>
									</tr>
									<tr>
										<td>Reason/motive</td>
										<td>Motif</td>
										<td>سبب</td>
									</tr>
									<tr>
										<td>Request</td>
										<td>Requête</td>
										<td>طلب</td>
									</tr>
									<tr>
										<td>Rule</td>
										<td>Règle</td>
										<td>قاعدة</td>
									</tr>
									<tr>
										<td>Sanction/sentence</td>
										<td>Sanction/sentence</td>
										<td>عقوبة</td>
									</tr>
									<tr>
										<td>Search</td>
										<td>Perquisition</td>
										<td>تفتيش</td>
									</tr>
									<tr>
										<td>Seizure</td>
										<td>saisie</td>
										<td>مصادرة</td>
									</tr>
									<tr>
										<td>Settlement</td>
										<td>Règlement</td>
										<td>قواعد</td>
									</tr>
									<tr>
										<td>Suspect</td>
										<td>suspect</td>
										<td>مشتبه فيه</td>
									</tr>
									<tr>
										<td>Testimony/witness</td>
										<td>témoignage</td>
										<td>شهادة</td>
									</tr>
									<tr>
										<td>Thief</td>
										<td>voleur</td>
										<td>سارق</td>
									</tr>
									<tr>
										<td>Traffic ticket</td>
										<td>Contravention</td>
										<td>مخالفة</td>
									</tr>
									<tr>
										<td>Transgression</td>
										<td>Transgression</td>
										<td>خرق</td>
									</tr>
									<tr>
										<td>Treaty</td>
										<td>Traité</td>
										<td>معاهدة</td>
									</tr>
									<tr>
										<td>Trial</td>
										<td>Procès</td>
										<td>محاكمة</td>
									</tr>
									<tr>
										<td>Unlawful arrest</td>
										<td>arrestation illicite</td>
										<td>اعتقال غير قانوني</td>
									</tr>
									<tr>
										<td>Verdict</td>
										<td>Verdict</td>
										<td>قرار محكمة</td>
									</tr>
									<tr>
										<td>Victim</td>
										<td>Victime</td>
										<td>ضحية</td>
									</tr>
									<tr>
										<td>Violence</td>
										<td>Violence</td>
										<td>عنف</td>
									</tr>
									<tr>
										<td>Wanted</td>
										<td>recherché</td>
										<td>مطلوب</td>
									</tr>
									<tr>
										<td>Warrant</td>
										<td>mandat</td>
										<td>أمر رسمي</td>
									</tr>
									<tr>
										<td>Written statement</td>
										<td>déclaration écrite</td>
										<td>إعلان مكتوب</td>
									</tr>
									<tr>
										<td class="soustitre">Law</td>
										<td class="soustitre">droit/loi</td>
										<td class="soustitre">القانون</td>
									</tr>
									<tr>
										<td>Administrative Law</td>
										<td>Droit administratif</td>
										<td>القانون الإداري</td>
									</tr>
									<tr>
										<td>Civil law</td>
										<td>Droit civil</td>
										<td>القانون المدني</td>
									</tr>
									<tr>
										<td>commercial law</td>
										<td>Droit commercial</td>
										<td>القانون التجاري</td>
									</tr>
									<tr>
										<td>common law</td>
										<td>Droit commun</td>
										<td>القانون العام</td>
									</tr>
									<tr>
										<td>Constitutional law</td>
										<td>Droit constitutionnel</td>
										<td>القانون الدستوري</td>
									</tr>
									<tr>
										<td>Criminal law</td>
										<td>Droit pénal</td>
										<td>القانون الجنائي</td>
									</tr>
									<tr>
										<td>Customary law</td>
										<td>Droit coutumier</td>
										<td>القانون العرفي</td>
									</tr>
									<tr>
										<td>Family law</td>
										<td>Droit de famille</td>
										<td>قانون العائلة</td>
									</tr>
									<tr>
										<td>Financial law</td>
										<td>Droit financier</td>
										<td>القانون المالي</td>
									</tr>
									<tr>
										<td>internal law</td>
										<td>Droit interne</td>
										<td>القانون الداخلي</td>
									</tr>
									<tr>
										<td>international law</td>
										<td>Droit international</td>
										<td>القانون الدولي</td>
									</tr>
									<tr>
										<td>labor law</td>
										<td>Droit du travail</td>
										<td>قانون العمل</td>
									</tr>
									<tr>
										<td>Ordinary law</td>
										<td>Loi ordinaire</td>
										<td>القانون العادي</td>
									</tr>
									<tr>
										<td>Organic law</td>
										<td>Loi organique</td>
										<td>القانون العضوي</td>
									</tr>
									<tr>
										<td>private law</td>
										<td>Droit privé</td>
										<td>القانون الخاص</td>
									</tr>
									<tr>
										<td>procedural law</td>
										<td>Droit procédural</td>
										<td>القانون الإجرائي</td>
									</tr>
									<tr>
										<td>Public Law</td>
										<td>Droit public</td>
										<td>القانون العام</td>
									</tr>
									<tr>
										<td>Tax law</td>
										<td>Droit fiscal</td>
										<td>قانون الضرائب</td>
									</tr>
									
									
									
									<tr>
										<td class="soustitre">Court</td>
										<td class="soustitre">Tribunal</td>
										<td class="soustitre">محكمة</td>
									</tr>
									<tr>
										<td>Administrative court</td>
										<td>Tribunal administratif</td>
										<td>المحكمة الإدارية</td>
									</tr>
									<tr>
										<td>Civil court</td>
										<td>tribunal civil</td>
										<td>محكمة مدنية</td>
									</tr>
									<tr>
										<td>Commercial Court</td>
										<td>Tribunal de commerce</td>
										<td>المحكمة التجارية</td>
									</tr>
									<tr>
										<td>Criminal court</td>
										<td>Tribunal correctionnel</td>
										<td>المحكمة الجنائية</td>
									</tr>
									<tr>
										<td>Dispute Tribunal</td>
										<td>Tribunal des conflits</td>
										<td>محكمة المنازعات</td>
									</tr>
									<tr>
										<td>Federal court</td>
										<td>Tribunal fédéral</td>
										<td>المحكمة الفيدرالية</td>
									</tr>
									<tr>
										<td>High Court</td>
										<td>Tribunal de grande instance</td>
										<td>المحكمة العليا</td>
									</tr>
									<tr>
										<td>Juvenile court</td>
										<td>Tribunal pour enfant</td>
										<td>محكمة الأحداث</td>
									</tr>
									<tr>
										<td>Military court</td>
										<td>Tribunal militaire</td>
										<td>محكمة عسكرية</td>
									</tr>
									<tr>
										<td>Police court</td>
										<td>Tribunal de police</td>
										<td>محكمة الشرطة</td>
									</tr>
									
									<tr>
										<th>Useful verbs</th>
										<th>verbes utiles</th>
										<th>أفعال مفيدة</th>
									</tr>
									<tr>
										<td>To accuse</td>
										<td>accuser</td>
										<td>ليتهم</td>
									</tr>
									<tr>
										<td>To argue</td>
										<td>discuter</td>
										<td>ليجادل</td>
									</tr>
									<tr>
										<td>To be locked up</td>
										<td>être emprisonné/enfermé</td>
										<td>ليتم حبسه</td>
									</tr>
									<tr>
										<td>To blackmail</td>
										<td>faire chanter</td>
										<td>للابتزاز</td>
									</tr>
									<tr>
										<td>To bribe</td>
										<td>soudoyer</td>
										<td>لرشوة</td>
									</tr>
									<tr>
										<td>To certify</td>
										<td>certifier</td>
										<td>للمصادقة</td>
									</tr>
									<tr>
										<td>To claim</td>
										<td>demander</td>
										<td>لإدعاء</td>
									</tr>
									<tr>
										<td>To condemn/sentence</td>
										<td>condamner</td>
										<td>للتنديد</td>
									</tr>
									<tr>
										<td>To confess</td>
										<td>avouer/confesser</td>
										<td>الاعتراف</td>
									</tr>
									<tr>
										<td>To confiscate</td>
										<td>confisquer</td>
										<td>المصادرة</td>
									</tr>
									<tr>
										<td>To crack a case</td>
										<td>enquêter sur une affaire</td>
										<td>للقضاء على قضية</td>
									</tr>
									<tr>
										<td>To enforce the law</td>
										<td>appliquer la loi</td>
										<td>لإنفاذ القانون</td>
									</tr>
									<tr>
										<td>To escape</td>
										<td>s'évader</td>
										<td>للهرب</td>
									</tr>
									<tr>
										<td>To falsify</td>
										<td>falsifier</td>
										<td>لتزوير</td>
									</tr>
									<tr>
										<td>To go to jail</td>
										<td>aller en prison</td>
										<td>للذهاب إلى السجن</td>
									</tr>
									<tr>
										<td>To handcuff</td>
										<td>passer les menottes</td>
										<td>لقيود</td>
									</tr>
									<tr>
										<td>To interrogate</td>
										<td>interroger</td>
										<td>لاستجواب</td>
									</tr>
									<tr>
										<td>To judge</td>
										<td>juger</td>
										<td>حكم على</td>
									</tr>
									<tr>
										<td>To launder</td>
										<td>blanchir</td>
										<td>تبييض</td>
									</tr>
									<tr>
										<td>To lodge a complaint</td>
										<td>porter plainte</td>
										<td>لتقديم شكوى</td>
									</tr>
									<tr>
										<td>To neutralize</td>
										<td>neutraliser</td>
										<td>لتحييد</td>
									</tr>
									<tr>
										<td>To pardon</td>
										<td>gracier</td>
										<td>العفو</td>
									</tr>
									<tr>
										<td>To plead</td>
										<td>plaider</td>
										<td>الترافع</td>
									</tr>
									<tr>
										<td>To prosecute</td>
										<td>poursuivre</td>
										<td>للمحاكمة</td>
									</tr>
									<tr>
										<td>To punish</td>
										<td>punir</td>
										<td>ليعاقب</td>
									</tr>
									<tr>
										<td>To seal</td>
										<td>sceller</td>
										<td>لختم</td>
									</tr>
									<tr>
										<td>To solve a case</td>
										<td>résoudre une affaire</td>
										<td>لحل قضية</td>
									</tr>
									<tr>
										<td>To sue</td>
										<td>poursuivre en justice</td>
										<td>رفع دعوى قضائية</td>
									</tr>
									<tr>
										<td>To surrender/give up</td>
										<td>se rendre</td>
										<td>للاستسلام</td>
									</tr>
									<tr>
										<td>To suspect</td>
										<td>soupçonner</td>
										<td>للاشتباه</td>
									</tr>
									<tr>
										<td>To take an oath</td>
										<td>jurer/prêter un serment</td>
										<td>لقسم</td>
									</tr>
									<tr>
										<td>To testify/witness</td>
										<td>témoigner</td>
										<td>ليشهد</td>
									</tr>
									<tr>
										<td>To threat</td>
										<td>menacer</td>
										<td>ليهدد</td>
									</tr>
									<tr>
										<td>To use as evidence</td>
										<td>invoquer à titre de preuve</td>
										<td>لاستخدامه كدليل</td>
									</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/politiquelogo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Politique & gouvernance<?php endif; if($langue === 'english'): ?>Politics & governance<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="politique.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/economielogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 style="text-transform: capitalize;" class="card-title"><?php if($langue === 'french'): ?>économie<?php endif; if($langue === 'english'): ?>Economy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="economie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
