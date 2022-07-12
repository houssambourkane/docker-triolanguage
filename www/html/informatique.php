<?php
		$titrefr = "INFORMATIQUE";
		$titreang = "INFORMATIQUE";
		$bg = "./assets/img/bgtheme/informatiquebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Informatique<?php endif; if($langue === 'english'): ?>Informatique<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire d'informatique en Anglais - Français - Arabe">
		<meta name="keywords" content="informatique, digital, intelligence, artificielle, computer, science, engineering, hardware, software, english, french, arabic, learn, vocabulary, , anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Informatique<?php endif; if($langue === 'english'): ?>Informatique<?php endif; ?></h1>

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
									<td>Attached file</td>
									<td>fichier joint</td>
									<td>ملف مرفق</td>
								</tr>
								<tr>
									<td>hosting</td>
									<td>hébergement</td>
									<td>الاستضافة</td>
								</tr>
								<tr>
									<td>computer scientist</td>
									<td>informaticien</td>
									<td>عالم الحاسوب</td>
								</tr>
								<tr>
									<td>computing</td>
									<td>informatique</td>
									<td>الحوسبة</td>
								</tr>
								<tr>
									<td>Blog</td>
									<td>blogue</td>
									<td>المدونة</td>
								</tr>
								<tr>
									<td>button</td>
									<td>bouton</td>
									<td>زر</td>
								</tr>
								<tr>
									<td>Computer</td>
									<td>ordinateur</td>
									<td>الحاسوب</td>
								</tr>
								<tr>
									<td>computer engineer</td>
									<td>ingénieur informaticien</td>
									<td>مهندس كمبيوتر</td>
								</tr>
								<tr>
									<td>blogging</td>
									<td>activité de blogueur</td>
									<td>المدونات</td>
								</tr>
								<tr>
									<td>Control panel</td>
									<td>panneau de commande</td>
									<td>لوحة التحكم</td>
								</tr>
								<tr>
									<td>Database</td>
									<td>base de données</td>
									<td>قاعدة البيانات</td>
								</tr>
								<tr>
									<td>Desktop computer</td>
									<td>ordinateur de bureau</td>
									<td>كمبيوتر سطح المكتب</td>
								</tr>
								<tr>
									<td>Directory</td>
									<td>répertoire</td>
									<td>ذخيرة</td>
								</tr>
								<tr>
									<td>Document reader</td>
									<td>lecteur de document</td>
									<td>قارئ الوثائق</td>
								</tr>
								<tr>
									<td>Domain name</td>
									<td>nom de domaine</td>
									<td>اسم النطاق</td>
								</tr>
								<tr>
									<td>Download</td>
									<td>téléchargement</td>
									<td>تحميل</td>
								</tr>
								<tr>
									<td>DVD</td>
									<td>graveur DVD</td>
									<td>دي في دي</td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td>courrier électronique</td>
									<td>البريد الإلكتروني</td>
								</tr>
								<tr>
									<td>cursor</td>
									<td>Curseur</td>
									<td>المؤشر</td>
								</tr>
								<tr>
									<td>chat</td>
									<td>discussion</td>
									<td>مناقشة</td>
								</tr>
								<tr>
									<td>External</td>
									<td>externe</td>
									<td>خارجي</td>
								</tr>
								<tr>
									<td>FAQ (frequently asked questions)</td>
									<td>questions posées fréquemment</td>
									<td>أسئلة مكررة</td>
								</tr>
								<tr>
									<td>File</td>
									<td>Fichier</td>
									<td>ملف</td>
								</tr>
								<tr>
									<td>Firewall</td>
									<td>pare-feu</td>
									<td>جدار الحماية</td>
								</tr>
								<tr>
									<td>printed document</td>
									<td>document imprimé</td>
									<td>وثيقة مطبوعة</td>
								</tr>
								<tr>
									<td>Folder</td>
									<td>Dossier</td>
									<td>مجلد</td>
								</tr>
								<tr>
									<td>Font</td>
									<td>police</td>
									<td>الخط</td>
								</tr>
								<tr>
									<td>Gaming computer</td>
									<td>ordinateur pour les jeux vidéo</td>
									<td>كمبيوتر الألعاب</td>
								</tr>
								<tr>
									<td>Hacker</td>
									<td>pirate informatique</td>
									<td>القراصنة</td>
								</tr>
								<tr>
									<td>High speed internet</td>
									<td>haut-débit</td>
									<td>نترنت عالي السرعة</td>
								</tr>
								<tr>
									<td>cache</td>
									<td>Cache</td>
									<td>مخبأ</td>
								</tr>
								<tr>
									<td>Home page</td>
									<td>page d'accueil</td>
									<td>الصفحة الرئيسية</td>
								</tr>
								<tr>
									<td>Hyperlink</td>
									<td>hyperlien</td>
									<td>الارتباط التشعبي</td>
								</tr>
								<tr>
									<td>Icon</td>
									<td>icône</td>
									<td>أيقونة</td>
								</tr>
								<tr>
									<td>Illegal downloading</td>
									<td>téléchargement illégal</td>
									<td>تحميل غير قانوني</td>
								</tr>
								<tr>
									<td>Internet access</td>
									<td>accès à internet</td>
									<td>خدمة الإنترنت</td>
								</tr>
								<tr>
									<td>IP address</td>
									<td>adresse IP</td>
									<td>IP عنوان</td>
								</tr>
								<tr>
									<td>Laptop</td>
									<td>ordinateur portable</td>
									<td>حاسوب محمول</td>
								</tr>
								<tr>
									<td>Link</td>
									<td>lien</td>
									<td>رابط</td>
								</tr>
								<tr>
									<td>Logout</td>
									<td>déconnexion</td>
									<td>تسجيل خروج</td>
								</tr>
								<tr>
									<td>Mailbox</td>
									<td>boîte mail</td>
									<td>صندوق بريد</td>
								</tr>
								<tr>
									<td>log-in</td>
									<td>connexion</td>
									<td>تسجيل الدخول</td>
								</tr>
								<tr>
									<td>Memory</td>
									<td>mémoire</td>
									<td>ذاكرة</td>
								</tr>
								<tr>
									<td>Network</td>
									<td>réseau</td>
									<td>شبكة الاتصال</td>
								</tr>
								<tr>
									<td>wireless</td>
									<td>sans-fil</td>
									<td>لاسلكي</td>
								</tr>
								<tr>
									<td>Online</td>
									<td>En ligne</td>
									<td>عبر الانترنت</td>
								</tr>
								<tr>
									<td>Online posting</td>
									<td>mise en ligne</td>
									<td>نشر على الانترنت</td>
								</tr>
								<tr>
									<td>web</td>
									<td>Toile</td>
									<td>شبكة</td>
								</tr>
								<tr>
									<td>Password</td>
									<td>mot de passe</td>
									<td>كلمة السر</td>
								</tr>
								<tr>
									<td>Phishing</td>
									<td>hameçonnage</td>
									<td>الخداع</td>
								</tr>
								<tr>
									<td>Pop-up window</td>
									<td>fenêtre contextuelle</td>
									<td>نافذة منبثقة</td>
								</tr>
								<tr>
									<td>Privacy settings</td>
									<td>paramètres de confidentialité</td>
									<td>إعدادات الخصوصية</td>
								</tr>
								<tr>
									<td>Screenshot</td>
									<td>capture d'écran</td>
									<td>لقطة شاشة</td>
								</tr>
								<tr>
									<td>Scroll bar</td>
									<td>barre de défilement</td>
									<td>شريط التمرير</td>
								</tr>
								<tr>
									<td>Search engine</td>
									<td>moteur de recherche</td>
									<td>محرك البحث</td>
								</tr>
								<tr>
									<td>Shortcut</td>
									<td>raccourci clavier</td>
									<td>الاختصار</td>
								</tr>
								<tr>
									<td>Slow speed internet</td>
									<td>bas-débit</td>
									<td>انترنت بطيء السرعة</td>
								</tr>
								<tr>
									<td>Social network</td>
									<td>réseau social</td>
									<td>شبكة اجتماعية</td>
								</tr>
								<tr>
									<td>bookmark</td>
									<td>signet</td>
									<td>المرجعية</td>
								</tr>
								<tr>
									<td>Spam</td>
									<td>Spam</td>
									<td>البريد المزعج</td>
								</tr>
								<tr>
									<td>Spreadsheet</td>
									<td>tableur</td>
									<td>جدول</td>
								</tr>
								<tr>
									<td>Virus</td>
									<td>Virus</td>
									<td>فيروس</td>
								</tr>
								<tr>
									<td>Web Browser</td>
									<td>navigateur web</td>
									<td>المتصفح</td>
								</tr>
								<tr>
									<td>Web page</td>
									<td>page web</td>
									<td>صفحة ويب</td>
								</tr>
								<tr>
									<td>display</td>
									<td>affichage</td>
									<td>عرض</td>
								</tr>
								<tr>
									<td>Website</td>
									<td>site internet</td>
									<td>موقع الكتروني</td>
								</tr>
								<tr>
									<td>Wi-Fi</td>
									<td>wifi</td>
									<td>واي فاي</td>
								</tr>
								<tr>
									<td>Window</td>
									<td>fenêtre</td>
									<td>نافذة او شباك</td>
								</tr>
								<tr>
									<td class="soustitre">Hardware</td>
									<td class="soustitre">Matériel inforamtique</td>
									<td class="soustitre">المعدات</td>
								</tr>
								<tr>
									<td>Cable</td>
									<td>câble</td>
									<td>كابل</td>
								</tr>
								<tr>
									<td>Central processing unit (CPU)</td>
									<td>unité centrale de traitement</td>
									<td>وحدة المعالجة المركزية</td>
								</tr>
								<tr>
									<td>External hard disk drive</td>
									<td>disque dur externe</td>
									<td>محرك القرص الصلب الخارجي</td>
								</tr>
								<tr>
									<td>Hard disk drive</td>
									<td>disque dur</td>
									<td>محرك القرص الصلب</td>
								</tr>
								<tr>
									<td>Headset</td>
									<td>casque audio</td>
									<td>سماعة</td>
								</tr>
								<tr>
									<td>Key</td>
									<td>touche</td>
									<td>مفتاح</td>
								</tr>
								<tr>
									<td>Keyboard</td>
									<td>clavier</td>
									<td>لوحة المفاتيح</td>
								</tr>
								<tr>
									<td>Mouse</td>
									<td>souris</td>
									<td>فأرة</td>
								</tr>
								<tr>
									<td>Mouse pad</td>
									<td>tapis de souris</td>
									<td>لوحة الفأرة</td>
								</tr>
								<tr>
									<td>Printer</td>
									<td>imprimante</td>
									<td>طابعة</td>
								</tr>
								<tr>
									<td>Screen</td>
									<td>écran</td>
									<td>شاشة</td>
								</tr>
								<tr>
									<td>speakers</td>
									<td>haut-parleurs</td>
									<td>مكبرات الصوت</td>
								</tr>
								<tr>
									<td>USB port</td>
									<td>port USB</td>
									<td>USB منفذ</td>
								</tr>
								<tr>
									<td>USB stick</td>
									<td>clé USB</td>
									<td>USB عصا</td>
								</tr>
								<tr>
									<td>Webcam</td>
									<td>webcam</td>
									<td>كاميرا ويب</td>
								</tr>
								
								
								<tr>
									<td class="soustitre">Software</td>
									<td class="soustitre">logiciel</td>
									<td class="soustitre">البرمجيات</td>
								</tr>
								<tr>
									<td>Adware</td>
									<td>logiciel publicitaire</td>
									<td>ادواري</td>
								</tr>
								<tr>
									<td>App (application)</td>
									<td>application</td>
									<td>تطبيق</td>
								</tr>
								<tr>
									<td>freeware</td>
									<td>logiciel gratuit</td>
									<td>البرمجيات الحرة</td>
								</tr>
								<tr>
									<td>operating system</td>
									<td>Système d'exploitation</td>
									<td>نظام التشغيل</td>
								</tr>
								<tr>
									<td>Programming language</td>
									<td>Langage de programmation</td>
									<td>لغة برمجة</td>
								</tr>
								<tr>
									<td>server software</td>
									<td>Logiciels de serveurs</td>
									<td>برنامج الخادم</td>
								</tr>
								
								<tr>
									<th>Useful verbs</th>
									<th>verbes utiles</th>
									<th>أفعال مفيدة</th>
								</tr>
								<tr>
									<td>To access the internet</td>
									<td>accéder à internet</td>
									<td>للوصول إلى الإنترنت</td>
								</tr>
								<tr>
									<td>To back-up</td>
									<td>sauvegarder</td>
									<td>عمل نسخة احتياطية</td>
								</tr>
								<tr>
									<td>To blog</td>
									<td>bloguer</td>
									<td>بلوق</td>
								</tr>
								<tr>
									<td>To browse</td>
									<td>naviguer</td>
									<td>تصفح</td>
								</tr>
								<tr>
									<td>To copy</td>
									<td>copier</td>
									<td>نسخ</td>
								</tr>
								<tr>
									<td>To crash</td>
									<td>planter</td>
									<td>تعطل</td>
								</tr>
								<tr>
									<td>To create a new file</td>
									<td>créer un nouveau dossier</td>
									<td>إنشاء ملف جديد</td>
								</tr>
								<tr>
									<td>To cut</td>
									<td>couper</td>
									<td>قطع</td>
								</tr>
								<tr>
									<td>To delete</td>
									<td>supprimer</td>
									<td>حذف</td>
								</tr>
								<tr>
									<td>To download</td>
									<td>télécharger</td>
									<td>تنزيل</td>
								</tr>
								<tr>
									<td>To drag and drop</td>
									<td>glisser-déposer</td>
									<td>سحب وإسقاط</td>
								</tr>
								<tr>
									<td>To export</td>
									<td>exporter</td>
									<td>تصدير</td>
								</tr>
								<tr>
									<td>To format</td>
									<td>formater</td>
									<td>تنسيق</td>
								</tr>
								<tr>
									<td>To install</td>
									<td>installer</td>
									<td>تثبيت</td>
								</tr>
								<tr>
									<td>To login</td>
									<td>se connecter</td>
									<td>تسجيل الدخول</td>
								</tr>
								<tr>
									<td>To logout</td>
									<td>se déconnecter</td>
									<td>تسجيل الخروج</td>
								</tr>
								<tr>
									<td>To merge</td>
									<td>fusionner</td>
									<td>دمج</td>
								</tr>
								<tr>
									<td>To paste</td>
									<td>coller</td>
									<td>لصق</td>
								</tr>
								<tr>
									<td>To plug</td>
									<td>brancher</td>
									<td>الاتصال</td>
								</tr>
								<tr>
									<td>To reboot</td>
									<td>redémarrer</td>
									<td>اعادة تشغيل</td>
								</tr>
								<tr>
									<td>To save</td>
									<td>enregistrer</td>
									<td>حفظ</td>
								</tr>
								<tr>
									<td>To save as</td>
									<td>enregistrer sous</td>
									<td>حفظ باسم</td>
								</tr>
								<tr>
									<td>To scan</td>
									<td>scanner</td>
									<td>تفحص</td>
								</tr>
								<tr>
									<td>To scroll down</td>
									<td>défiler vers le bas</td>
									<td>تمرير لأسفل</td>
								</tr>
								<tr>
									<td>To scroll up</td>
									<td>défiler vers le haut</td>
									<td>تمرير لأعلى</td>
								</tr>
								<tr>
									<td>To select</td>
									<td>sélectionner</td>
									<td>تحديد</td>
								</tr>
								<tr>
									<td>To sort</td>
									<td>trier</td>
									<td>فرز</td>
								</tr>
								<tr>
									<td>To type</td>
									<td>taper</td>
									<td>كتابة</td>
								</tr>
								<tr>
									<td>To unplug</td>
									<td>débrancher</td>
									<td>فصل</td>
								</tr>
								<tr>
									<td>To upload</td>
									<td>charger</td>
									<td>تحميل</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/entrepriselogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Entreprise & entretien<?php endif; if($langue === 'english'): ?>Company & interview<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="entrepriseentretien.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sciencelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="unitesdemesure.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		