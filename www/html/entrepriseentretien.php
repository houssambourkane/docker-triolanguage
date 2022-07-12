<?php
		$titrefr = "ENTREPRISE & ENTRETIEN";
		$titreang = "COMPANY & INTERVIEW";
		$bg = "./assets/img/bgtheme/entrepriseentretienbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Entreprise & entretien<?php endif; if($langue === 'english'): ?>Company & interview<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des entreprises et d'entretien en Anglais - Français - Arabe">
		<meta name="keywords" content="entreprise, salaire, interview, entretien, revenu, brut, net, income, salary, emploie, employeur, employé, employee, CEO, société, SA, SARL, undertaking, company, corporation, firm, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Entreprise & entretien<?php endif; if($langue === 'english'): ?>Company & interview<?php endif; ?></h1>

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
									<td>Accounting</td>
									<td>Comptable</td>
									<td>المحاسب</td>
								</tr>
								<tr>
									<td>Affiliate/subsidiary</td>
									<td>Filiale</td>
									<td>شركة تابعة</td>
								</tr>
								<tr>
									<td>annual shareholders meeting</td>
									<td>Assemblée générale ordinaire</td>
									<td>الجمعية العامة العادية</td>
								</tr>
								<tr>
									<td>Appointment</td>
									<td>rendez-vous</td>
									<td>موعد</td>
								</tr>
								<tr>
									<td>Attendance fees</td>
									<td>Jeton de présence</td>
									<td>رسوم الحضور</td>
								</tr>
								<tr>
									<td>Auditor</td>
									<td>Auditeur/commissaire aux comptes (CAC)</td>
									<td>مدقق حسابات</td>
								</tr>
								<tr>
									<td>Authority</td>
									<td>Autorité</td>
									<td>سلطة</td>
								</tr>
								<tr>
									<td>Bank</td>
									<td>Banque</td>
									<td>مصرف</td>
								</tr>
								<tr>
									<td>Bankruptcy</td>
									<td>faillite</td>
									<td>إفلاس</td>
								</tr>
								<tr>
									<td>Board of directors</td>
									<td>Conseil d'administration</td>
									<td>مجلس اداري</td>
								</tr>
								<tr>
									<td>Board room/meeting room</td>
									<td>Salle de réunion</td>
									<td>قاعة الإجتماعات</td>
								</tr>
								<tr>
									<td>Boss</td>
									<td>patron</td>
									<td>رئيس</td>
								</tr>
								<tr>
									<td>Building</td>
									<td>bâtiment</td>
									<td>بناء</td>
								</tr>
								<tr>
									<td>Bureau</td>
									<td>office</td>
									<td>مكتب</td>
								</tr>
								<tr>
									<td>Business plan</td>
									<td>business plan</td>
									<td>خطة عمل</td>
								</tr>
								<tr>
									<td>Capital providers</td>
									<td>Apporteurs de capitaux</td>
									<td>مزودي رأس المال</td>
								</tr>
								<tr>
									<td>Capital/share capital/capital stock</td>
									<td>Capital</td>
									<td>رأس مال</td>
								</tr>
								<tr>
									<td>Career</td>
									<td>carrière</td>
									<td>مسار مهني</td>
								</tr>
								<tr>
									<td>Coffee machine</td>
									<td>machine à café</td>
									<td>آلة القهوة</td>
								</tr>
								<tr>
									<td>Collaborater</td>
									<td>Collaborateur</td>
									<td>المتعاون</td>
								</tr>
								<tr>
									<td>Collaboration</td>
									<td>Collaboration</td>
									<td>التعاون</td>
								</tr>
								<tr>
									<td>Colleague</td>
									<td>Collègue</td>
									<td>زميل</td>
								</tr>
								<tr>
									<td>Commercial company</td>
									<td>Entreprise commerciale</td>
									<td>شركة تجارية</td>
								</tr>
								<tr>
									<td>company name</td>
									<td>Raison sociale</td>
									<td>اسم الشركة</td>
								</tr>
								<tr>
									<td>Competition</td>
									<td>Concurrence</td>
									<td>المنافسة</td>
								</tr>
								<tr>
									<td>Competitors</td>
									<td>concurrents</td>
									<td>المنافسين</td>
								</tr>
								<tr>
									<td>Concession</td>
									<td>Concession</td>
									<td>امتياز</td>
								</tr>
								<tr>
									<td>Corporation charter/by-law</td>
									<td>statuts</td>
									<td>نظام داخلي</td>
								</tr>
								<tr>
									<td>Customer/client</td>
									<td>Client</td>
									<td>الزبون</td>
								</tr>
								<tr>
									<td>Day off</td>
									<td>jour de congé</td>
									<td>عطلة</td>
								</tr>
								<tr>
									<td>Deal</td>
									<td>accord</td>
									<td>صفقة</td>
								</tr>
								<tr>
									<td>Devices</td>
									<td>appareils électroniques</td>
									<td>أجهزة الكترونية</td>
								</tr>
								<tr>
									<td>Discipline</td>
									<td>Discipline</td>
									<td>إنضباط</td>
								</tr>
								<tr>
									<td>Economic Interest Grouping</td>
									<td>Groupement d'intérêt économique (GIE)</td>
									<td>تجمع المصالح الاقتصادية</td>
								</tr>
								<tr>
									<td>effectives</td>
									<td>effectifs</td>
									<td>القوى العاملة</td>
								</tr>
								<tr>
									<td>Entrepreneur</td>
									<td>Entrepreneur</td>
									<td>مقاول</td>
								</tr>
								<tr>
									<td>executive manager</td>
									<td>cadre d'entreprise</td>
									<td>المدير التنفيذي</td>
								</tr>
								<tr>
									<td>Expertise</td>
									<td>expertise</td>
									<td>الخبرة</td>
								</tr>
								<tr>
									<td>Extraordinary annual shareholders general meeting</td>
									<td>Assemblée générale extraordinaire</td>
									<td>الجمعية العامة الإستثنائية</td>
								</tr>
								<tr>
									<td>Factory</td>
									<td>usine</td>
									<td>مصنع</td>
								</tr>
								<tr>
									<td>File</td>
									<td>dossier</td>
									<td>ملف</td>
								</tr>
								<tr>
									<td>Firm</td>
									<td>firme</td>
									<td>حازم</td>
								</tr>
								<tr>
									<td>Flowchart</td>
									<td>Organigramme</td>
									<td>الهيكل التنظيمي</td>
								</tr>
								<tr>
									<td>Franchise</td>
									<td>Franchise</td>
									<td>حق الامتياز</td>
								</tr>
								<tr>
									<td>merger</td>
									<td>Fusion</td>
									<td>اندماج</td>
								</tr>
								<tr>
									<td>Headquarter</td>
									<td>siège social</td>
									<td>مقر عام</td>
								</tr>
								<tr>
									<td>Hierarchy</td>
									<td>Hiérarchie</td>
									<td>التسلسل الهرمي</td>
								</tr>
								<tr>
									<td>Income</td>
									<td>revenu</td>
									<td>دخل</td>
								</tr>
								<tr>
									<td>Industrial company</td>
									<td>Entreprise industrielle</td>
									<td>شركة صناعية</td>
								</tr>
								<tr>
									<td>Job</td>
									<td>Travail</td>
									<td>عمل</td>
								</tr>
								<tr>
									<td>Labour market</td>
									<td>marché de travail</td>
									<td>سوق العمل</td>
								</tr>
								<tr>
									<td>Lawsuit</td>
									<td>procès</td>
									<td>دعوى قضائية</td>
								</tr>
								<tr>
									<td>Leadership</td>
									<td>leadership</td>
									<td>القيادة</td>
								</tr>
								<tr>
									<td>Legal status</td>
									<td>Statut juridique</td>
									<td>الوضع القانوني</td>
								</tr>
								<tr>
									<td>Liquidation voucher</td>
									<td>Bon de liquidation</td>
									<td>قسيمة التصفية</td>
								</tr>
								<tr>
									<td>Mail</td>
									<td>courrier</td>
									<td>بريد</td>
								</tr>
								<tr>
									<td>Management chart</td>
									<td>tableau de bord</td>
									<td>مخطط الإدارة</td>
								</tr>
								<tr>
									<td>Manager</td>
									<td>Directeur</td>
									<td>مدير</td>
								</tr>
								<tr>
									<td>Marketer</td>
									<td>Marketeur</td>
									<td>المسوق</td>
								</tr>
								<tr>
									<td>Meeting</td>
									<td>réunion</td>
									<td>اجتماع</td>
								</tr>
								<tr>
									<td>Negociation</td>
									<td>négociation</td>
									<td>تفاوض</td>
								</tr>
								<tr>
									<td>Net income</td>
									<td>Résultat net</td>
									<td>الدخل الصافي</td>
								</tr>
								<tr>
									<td>Office</td>
									<td>Poste</td>
									<td>مكتب</td>
								</tr>
								<tr>
									<td>Outsourcing</td>
									<td>sous-traitance</td>
									<td>الاستعانة بمصادر خارجية</td>
								</tr>
								<tr>
									<td>Owner</td>
									<td>propriétaire</td>
									<td>مالك</td>
								</tr>
								<tr>
									<td>Parent company</td>
									<td>société mère</td>
									<td>الشركة الام</td>
								</tr>
								<tr>
									<td>Partner</td>
									<td>Associé</td>
									<td>شريك</td>
								</tr>
								<tr>
									<td>Partners</td>
									<td>partenaires</td>
									<td>شركاء</td>
								</tr>
								<tr>
									<td>Partnership</td>
									<td>Partenariat</td>
									<td>شراكة</td>
								</tr>
								<tr>
									<td>Patent</td>
									<td>Brevet</td>
									<td>براءة الإختراع</td>
								</tr>
								<tr>
									<td>Pay day</td>
									<td>Jour de la paie</td>
									<td>يوم الدفع</td>
								</tr>
								<tr>
									<td>Personal assistant</td>
									<td>assistant de direction</td>
									<td>مساعد شخصي</td>
								</tr>
								<tr>
									<td>Product</td>
									<td>Produit</td>
									<td>المنتج</td>
								</tr>
								<tr>
									<td>Punctuality</td>
									<td>Ponctualité</td>
									<td>الالتزام بالمواعيد</td>
								</tr>
								<tr>
									<td>Purchase</td>
									<td>Achat</td>
									<td>شراء</td>
								</tr>
								<tr>
									<td>Register of Commerce and Companies</td>
									<td>Registre de commerce et des sociétés</td>
									<td>سجل التجارة والشركات</td>
								</tr>
								<tr>
									<td>Research and development (R&D)</td>
									<td>recherche et développement</td>
									<td>البحث والتطوير</td>
								</tr>
								<tr>
									<td>Responsible</td>
									<td>Responsable</td>
									<td>مسؤول</td>
								</tr>
								<tr>
									<td>Sale</td>
									<td>Vente</td>
									<td>بيع</td>
								</tr>
								<tr>
									<td>Secretary</td>
									<td>secrétaire</td>
									<td>سكرتير</td>
								</tr>
								<tr>
									<td>Sector</td>
									<td>Secteur</td>
									<td>قطاع</td>
								</tr>
								<tr>
									<td>Shareholder/stockholder</td>
									<td>Actionnaire</td>
									<td>مساهم</td>
								</tr>
								<tr>
									<td>Small and medium company</td>
									<td>petite et moyenne entreprise</td>
									<td>شركة صغيرة ومتوسطة</td>
								</tr>
								<tr>
									<td>Speech</td>
									<td>présentation/discours</td>
									<td>خطاب</td>
								</tr>
								<tr>
									<td>Spokesman</td>
									<td>porte-parole</td>
									<td>المتحدث الرسمي</td>
								</tr>
								<tr>
									<td>Structure</td>
									<td>Structure</td>
									<td>هيكل</td>
								</tr>
								<tr>
									<td>Supervisor</td>
									<td>superviseur</td>
									<td>مشرف</td>
								</tr>
								<tr>
									<td>Supplier</td>
									<td>Fournisseur</td>
									<td>المورد</td>
								</tr>
								<tr>
									<td>Syndicate</td>
									<td>Syndicat</td>
									<td>نقابة</td>
								</tr>
								<tr>
									<td>Technical assistance</td>
									<td>Assistance technique</td>
									<td>المساعدة التقنية</td>
								</tr>
								<tr>
									<td>Turnover</td>
									<td>chiffre d'affaires</td>
									<td>المبيعات</td>
								</tr>
								<tr>
									<td>Value added</td>
									<td>valeur ajoutée</td>
									<td>قيمة مضافة</td>
								</tr>
								<tr>
									<td>Warehouse</td>
									<td>entrepôt</td>
									<td>مستودع</td>
								</tr>
								<tr>
									<td>Workforce</td>
									<td>main d'œuvre</td>
									<td>اليد العاملة</td>
								</tr>
								<tr>
									<td>Workshop</td>
									<td>atelier</td>
									<td>ورشة عمل</td>
								</tr>
								<tr>
									<td class="soustitre">Job interview </td>
									<td class="soustitre">Entretien d'embauche</td>
									<td class="soustitre">مقابلة عمل</td>
								</tr>
								<tr>
									<td>Application</td>
									<td>candidature</td>
									<td>الترشح</td>
								</tr>
								<tr>
									<td>Bachelor's degree/Licentiate degree</td>
									<td>licence</td>
									<td>إجازة جامعية</td>
								</tr>
								<tr>
									<td>Cover letter</td>
									<td>lettre de motivation</td>
									<td>غطاء الرسالة</td>
								</tr>
								<tr>
									<td>CV/résumé</td>
									<td>CV/résumé</td>
									<td>السيرة الذاتية</td>
								</tr>
								<tr>
									<td>Date and place of birth</td>
									<td>date et lieu de naissance</td>
									<td>تاريخ و مكان الإزدياد</td>
								</tr>
								<tr>
									<td>Diploma/degree</td>
									<td>diplôme</td>
									<td>الشهادة</td>
								</tr>
								<tr>
									<td>Family situation</td>
									<td>Situation familiale</td>
									<td>حالة عائلية</td>
								</tr>
								<tr>
									<td>First name</td>
									<td>prénom</td>
									<td>الاسم الاول</td>
								</tr>
								<tr>
									<td>Interviewee/candidate</td>
									<td>candidat</td>
									<td>مرشح</td>
								</tr>
								<tr>
									<td>Interviewer/recruiter</td>
									<td>recruteur/embaucheur</td>
									<td>المجند</td>
								</tr>
								<tr>
									<td>Last name</td>
									<td>nom de famille</td>
									<td>الإسم العائلي</td>
								</tr>
								<tr>
									<td>Leisure/hobby</td>
									<td>loisir</td>
									<td>راحة</td>
								</tr>
								<tr>
									<td>Master's degree</td>
									<td>master</td>
									<td>شهادة ماجستير</td>
								</tr>
								<tr>
									<td>Nationality</td>
									<td>nationalité</td>
									<td>الجنسية</td>
								</tr>
								<tr>
									<td>Personal qualities</td>
									<td>qualités personnels</td>
									<td>الجودة الشخصية</td>
								</tr>
								<tr>
									<td>PhD/doctorate</td>
									<td>doctorat</td>
									<td>دكتوراه</td>
								</tr>
								<tr>
									<td>Position</td>
									<td>poste</td>
									<td>منصب</td>
								</tr>
								<tr>
									<td>Previous job</td>
									<td>ancien travail</td>
									<td>العمل السابق</td>
								</tr>
								<tr>
									<td>Professional abilities</td>
									<td>compétences professionnelles</td>
									<td>القدرات المهنية</td>
								</tr>
								<tr>
									<td>Professional experience</td>
									<td>expérience professionnelle</td>
									<td>خبرة مهنية</td>
								</tr>
								<tr>
									<td>Trial period</td>
									<td>période d'essai</td>
									<td>الفترة التجريبية</td>
								</tr>
								<tr>
									<td>University/college</td>
									<td>université</td>
									<td>جامعة</td>
								</tr>
								<tr>
									<td>Work ethic</td>
									<td>déontologie</td>
									<td>أخلاقيات العمل</td>
								</tr>
								<tr>
									<th>Useful verbs</th>
									<th>Verbes utiles</th>
									<th>أفعال مفيدة</th>
								</tr>
								<tr>
									<td>To apply for a job</td>
									<td>postuler pour un emploi</td>
									<td>للتقدم لوظيفة</td>
								</tr>
								<tr>
									<td>To fail</td>
									<td>échouer</td>
									<td>فشل</td>
								</tr>
								<tr>
									<td>To succed</td>
									<td>réussir</td>
									<td>نجاح</td>
								</tr>

								<tr>
									<td class="soustitre">Employment</td>
									<td class="soustitre">Emploi</td>
									<td class="soustitre">توظيف</td>
								</tr>
								<tr>
									<td>Allowance</td>
									<td>allocation</td>
									<td>توزيع</td>
								</tr>
								<tr>
									<td>Bonus payment</td>
									<td>prime</td>
									<td>علاوة</td>
								</tr>
								<tr>
									<td>Employee</td>
									<td>employé/salarié</td>
									<td>موظف</td>
								</tr>
								<tr>
									<td>Employer</td>
									<td>employeur</td>
									<td>المستخدم</td>
								</tr>
								<tr>
									<td>Employment contract</td>
									<td>Contrat de travail</td>
									<td>عقد عمل</td>
								</tr>
								<tr>
									<td>End of the contract</td>
									<td>fin de contrat</td>
									<td>انتهاء العقد</td>
								</tr>
								<tr>
									<td>Indemnity</td>
									<td>Indemnité</td>
									<td>بدل مادي</td>
								</tr>
								<tr>
									<td>Internship</td>
									<td>stage</td>
									<td>فترة تدريب</td>
								</tr>
								<tr>
									<td>Job</td>
									<td>boulot</td>
									<td>شغل</td>
								</tr>
								<tr>
									<td>Job center</td>
									<td>agence pour l'emploi</td>
									<td>مركز العمل</td>
								</tr>
								<tr>
									<td>Job offer</td>
									<td>offre d'emploi</td>
									<td>عرض عمل</td>
								</tr>
								<tr>
									<td>Maternity leave</td>
									<td>congé maternité</td>
									<td>عطلة أمومة</td>
								</tr>
								<tr>
									<td>Overtime</td>
									<td>heures supplémentaires</td>
									<td>ساعات عمل إضافية</td>
								</tr>
								<tr>
									<td>Pay/salary rise</td>
									<td>augmentation de salaire</td>
									<td>زيادة الراتب</td>
								</tr>
								<tr>
									<td>Perk</td>
									<td>avantage</td>
									<td>الامتياز</td>
								</tr>
								<tr>
									<td>Remuneration</td>
									<td>Rémunération</td>
									<td>أجر</td>
								</tr>
								<tr>
									<td>Responsibilities</td>
									<td>responsabilités</td>
									<td>المسؤوليات</td>
								</tr>
								<tr>
									<td>Salary/Wage</td>
									<td>salaire</td>
									<td>الأجر</td>
								</tr>
								<tr>
									<td>Sick leave</td>
									<td>congé maladie</td>
									<td>عطلة مرضية</td>
								</tr>
								<tr>
									<td>Skill</td>
									<td>qualification</td>
									<td>مهارة</td>
								</tr>
								<tr>
									<td>Social security</td>
									<td>Sécurité sociale</td>
									<td>الضمان الإجتماعي</td>
								</tr>
								<tr>
									<td>Staff</td>
									<td>personnel</td>
									<td>العاملين</td>
								</tr>
								<tr>
									<td>Strike</td>
									<td>grève</td>
									<td>إضراب</td>
								</tr>
								<tr>
									<td>Task</td>
									<td>tâche</td>
									<td>مهمة</td>
								</tr>
								<tr>
									<td>Teamwork</td>
									<td>travail d'équipe</td>
									<td>العمل الجماعي</td>
								</tr>
								<tr>
									<td>Temporary worker</td>
									<td>intérimaire</td>
									<td>عامل مؤقت</td>
								</tr>
								<tr>
									<td>Trainee</td>
									<td>stagiaire</td>
									<td>المتدرب</td>
								</tr>
								<tr>
									<td>Training</td>
									<td>formation</td>
									<td>تكوين</td>
								</tr>
								<tr>
									<td>Unemployment</td>
									<td>chômage</td>
									<td>البطالة</td>
								</tr>
								<tr>
									<td>Vocational training</td>
									<td>formation professionnelle</td>
									<td>تدريب مهني</td>
								</tr>
								<tr>
									<td>Work</td>
									<td>travail</td>
									<td>عمل</td>
								</tr>
								<tr>
									<td>Working hours</td>
									<td>horaires de travail</td>
									<td>ساعات العمل</td>
								</tr>
								<tr>
									<th>Useful verbs</th>
									<th>Verbes utiles</th>
									<th>أفعال مفيدة</th>
								</tr>
								<tr>
									<td>To be unemployed/jobless</td>
									<td>être au chômage</td>
									<td>لتكون بدون وظيفة</td>
								</tr>
								<tr>
									<td>To fire</td>
									<td>licencier</td>
									<td>فصل</td>
								</tr>
								<tr>
									<td>To hire/employ/recrut</td>
									<td>embaucher/recruter</td>
									<td>لتوظيف</td>
								</tr>
								<tr>
									<td>To quit your job</td>
									<td>quitter son travail</td>
									<td>لترك عملك</td>
								</tr>
								<tr>
									<td>To Resign</td>
									<td>démissionner</td>
									<td>للاستقالة</td>
								</tr>
								<tr>
									<td>To Retire</td>
									<td>prendre sa retraire</td>
									<td>للتقاعد</td>
								</tr>

								<tr>
									<td class="soustitre">Typology of companies</td>
									<td class="soustitre">Typologie de sociétés</td>
									<td class="soustitre">تصنيف الشركات</td>
								</tr>
								<tr>
									<td>General partnership</td>
									<td>Société en nom collectif (SNC)</td>
									<td>شركة باسم مشترك</td>
								</tr>
								<tr>
									<td>Joint venture</td>
									<td>Société en participation (SP)</td>
									<td>شركة مفاوضة</td>
								</tr>
								<tr>
									<td>Limited liabilty company/private company</td>
									<td>Société à responsabilité limitée (SARL)</td>
									<td>شركة ذات مسؤولية محدودة</td>
								</tr>
								<tr>
									<td>Limited partnership</td>
									<td>Société en commandite (SC)</td>
									<td>شراكة محدودة</td>
								</tr>
								<tr>
									<td>Mixed corporation</td>
									<td>société d'économie mixte</td>
									<td>شركة مختلطة</td>
								</tr>
								<tr>
									<td>Partnership</td>
									<td>Sociétés de personnes</td>
									<td>شراكة</td>
								</tr>
								<tr>
									<td>Public company/publicly-owned corporation</td>
									<td>Société anonyme (SA)</td>
									<td>شركة عامة</td>
								</tr>
								<tr>
									<td>Public corporation</td>
									<td>société nationale</td>
									<td>شركة عامة</td>
								</tr>
								<tr>
									<td>Real estate company</td>
									<td>société immobilière</td>
									<td>شركة عقارية</td>
								</tr>
								<tr>
									<td class="soustitre">direction</td>
									<td class="soustitre">Direction</td>
									<td class="soustitre">إدارة</td>
								</tr>
								<tr>
									<td>Chief commercial officer (COO)</td>
									<td>Directeur commercial</td>
									<td>المدير التجاري</td>
								</tr>
								<tr>
									<td>Chief executive officer (CEO)</td>
									<td>président-directeur général (PDG)</td>
									<td>رئيس-مدير عام</td>
								</tr>
								<tr>
									<td>Chief financial officer (CFO)</td>
									<td>Directeur administratif et financier (DAF)</td>
									<td>المدير المالي</td>
								</tr>
								<tr>
									<td>Chief technical officer (CTO)</td>
									<td>Directeur technique</td>
									<td>المدير الفني</td>
								</tr>
								<tr>
									<td>Human Resources Director</td>
									<td>Directeur des ressources humaines</td>
									<td>مدير الموارد البشرية</td>
								</tr>
								<tr>
									<td>Marketing director</td>
									<td>Directeur marketing</td>
									<td>مدير التسويق</td>
								</tr>
								<tr>
									<td class="soustitre">Departments</td>
									<td class="soustitre">Départements/services</td>
									<td class="soustitre">الأقسام</td>
								</tr>
								<tr>
									<td>Accounting department</td>
									<td>département de comptabilité</td>
									<td>قسم المحاسبة</td>
								</tr>
								<tr>
									<td>After sales service</td>
									<td>service après-vente</td>
									<td>خدمة ما بعد البيع</td>
								</tr>
								<tr>
									<td>Marking department</td>
									<td>département marketing</td>
									<td>قسم التسويق</td>
								</tr>
								<tr>
									<td>Sales department</td>
									<td>service commercial/de ventes</td>
									<td>قسم التجارة/المبيعات</td>
								</tr>
								<tr>
									<td>Technical service</td>
									<td>Service technique</td>
									<td>خدمة تقنية</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/marketinglogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Marketing<?php endif; if($langue === 'english'): ?>Marketing<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="marketing.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/qualitedefautlogo.png" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Qualités & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="qualitedefaut.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		