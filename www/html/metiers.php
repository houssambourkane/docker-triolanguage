<?php
		$titrefr = "METIERS";
		$titreang = "JOBS";
		$bg = "./assets/img/bgtheme/metiersbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Métiers<?php endif; if($langue === 'english'): ?>Jobs<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des métiers en Anglais - Français - Arabe">
		<meta name="keywords" content="métiers, métier, profession, job, occupation, classe, moyenne, travail, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Métiers<?php endif; if($langue === 'english'): ?>Jobs<?php endif; ?></h1>

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
									<td>Accountant</td>
									<td>comptable</td>
									<td>محاسب</td>
								</tr>
								<tr>
									<td>Actor</td>
									<td>acteur</td>
									<td>ممثل</td>
								</tr>
								<tr>
									<td>Actress</td>
									<td>actrice</td>
									<td>ممثلة</td>
								</tr>
								<tr>
									<td>Adviser</td>
									<td>conseiller</td>
									<td>مستشار</td>
								</tr>
								<tr>
									<td>Air hostess</td>
									<td>hôtesse de l'air</td>
									<td>مضيفة جوية</td>
								</tr>
								<tr>
									<td>Ambulance driver</td>
									<td>ambulancier</td>
									<td>سائق سيارة إسعاف</td>
								</tr>
								<tr>
									<td>Architect</td>
									<td>architecte</td>
									<td>مهندس معماري</td>
								</tr>
								<tr>
									<td>Artist</td>
									<td>artiste</td>
									<td>فنان</td>
								</tr>
								<tr>
									<td>Baker</td>
									<td>boulanger</td>
									<td>خباز</td>
								</tr>
								<tr>
									<td>Barman</td>
									<td>barman</td>
									<td>عامل البار</td>
								</tr>
								<tr>
									<td>Beekeeper</td>
									<td>apiculteur</td>
									<td>النحال</td>
								</tr>
								<tr>
									<td>Bookseller</td>
									<td>libraire</td>
									<td>بائع كتب</td>
								</tr>
								<tr>
									<td>Builder/bricklayer</td>
									<td>maçon</td>
									<td>باني</td>
								</tr>
								<tr>
									<td>Bus driver</td>
									<td>chauffeur de bus</td>
									<td>سائق الحافلة</td>
								</tr>
								<tr>
									<td>Butcher</td>
									<td>boucher</td>
									<td>جزار</td>
								</tr>
								<tr>
									<td>Cabinet maker</td>
									<td>ébéniste</td>
									<td>صانع الخزائن</td>
								</tr>
								<tr>
									<td>Cameraman</td>
									<td>cameraman</td>
									<td>مصور</td>
								</tr>
								<tr>
									<td>Carpenter</td>
									<td>menuisier</td>
									<td>النجار</td>
								</tr>
								<tr>
									<td>Cashier</td>
									<td>caissier</td>
									<td>أمين الصندوق</td>
								</tr>
								<tr>
									<td>Caterer</td>
									<td>traiteur</td>
									<td>متعهد الحفلات</td>
								</tr>
								<tr>
									<td>CEO (Chief Executive Officer)</td>
									<td>PDG (Président-Directeur Général)</td>
									<td>الرئيس التنفيذي</td>
								</tr>
								<tr>
									<td>Chairperson of commission</td>
									<td>président de commission</td>
									<td>رئيس اللجنة</td>
								</tr>
								<tr>
									<td>Chef</td>
									<td>chef de cuisine</td>
									<td>رئيس الطهاة</td>
								</tr>
								<tr>
									<td>Civil servant</td>
									<td>fonctionnaire</td>
									<td>موظف مدني</td>
								</tr>
								<tr>
									<td>Cleaner</td>
									<td>nettoyeur</td>
									<td>منظف</td>
								</tr>
								<tr>
									<td>Cleaning lady</td>
									<td>femme de ménage</td>
									<td>خادمة</td>
								</tr>
								<tr>
									<td>commercial</td>
									<td>commercial</td>
									<td>تجاري</td>
								</tr>
								<tr>
									<td>Company manager</td>
									<td>chef d'entreprise</td>
									<td>مدير الشركة</td>
								</tr>
								<tr>
									<td>Concierge</td>
									<td>concierge</td>
									<td>بواب</td>
								</tr>
								<tr>
									<td>Confectioner/pastry cook</td>
									<td>pâtissier</td>
									<td>صانع الحلويات</td>
								</tr>
								<tr>
									<td>Contractor</td>
									<td>entrepreneur</td>
									<td>مقاول</td>
								</tr>
								<tr>
									<td>Cook</td>
									<td>cuisinier</td>
									<td>طباخ</td>
								</tr>
								<tr>
									<td>Customs officer</td>
									<td>douanier</td>
									<td>موظف الجمارك</td>
								</tr>
								<tr>
									<td>Dancer</td>
									<td>danseur</td>
									<td>راقص</td>
								</tr>
								<tr>
									<td>Delivery man</td>
									<td>livreur</td>
									<td>تسليم رجل</td>
								</tr>
								<tr>
									<td>Dentist</td>
									<td>dentiste</td>
									<td>طبيب الأسنان</td>
								</tr>
								<tr>
									<td>Director</td>
									<td>réalisateur</td>
									<td>مخرج</td>
								</tr>
								<tr>
									<td>Doctor</td>
									<td>médecin</td>
									<td>طبيب</td>
								</tr>
								<tr>
									<td>Driver</td>
									<td>chauffeur</td>
									<td>سائق</td>
								</tr>
								<tr>
									<td>Dry-cleaner</td>
									<td>teinturier</td>
									<td>صباغ</td>
								</tr>
								<tr>
									<td>Dustman</td>
									<td>éboueur</td>
									<td>الزبال</td>
								</tr>
								<tr>
									<td>Electrician</td>
									<td>électricien</td>
									<td>عامل الكهرباء</td>
								</tr>
								<tr>
									<td>Engineer</td>
									<td>ingénieur</td>
									<td>مهندس</td>
								</tr>
								<tr>
									<td>Estate agent</td>
									<td>agent immobilier</td>
									<td>الوكيل العقاري</td>
								</tr>
								<tr>
									<td>Farmer</td>
									<td>agriculteur</td>
									<td>مزارع</td>
								</tr>
								<tr>
									<td>Film editor</td>
									<td>monteur</td>
									<td>مونتاج</td>
								</tr>
								<tr>
									<td>Fireman</td>
									<td>pompier</td>
									<td>رجل الاطفاء</td>
								</tr>
								<tr>
									<td>Fisherman</td>
									<td>pêcheur</td>
									<td>صياد السمك</td>
								</tr>
								<tr>
									<td>Fishmonger</td>
									<td>marchand de poisson</td>
									<td>تاجر السمك</td>
								</tr>
								<tr>
									<td>Florist</td>
									<td>fleuriste</td>
									<td>منسق زهور</td>
								</tr>
								<tr>
									<td>Furniture mover</td>
									<td>déménageur</td>
									<td>محرك الأثاث</td>
								</tr>
								<tr>
									<td>Gardener</td>
									<td>jardinier</td>
									<td>بستاني</td>
								</tr>
								<tr>
									<td>Greengrocer</td>
									<td>marchand de fruits et de légumes</td>
									<td>بائع الخضار و الفاكهة</td>
								</tr>
								<tr>
									<td>Hairdresser</td>
									<td>coiffeur</td>
									<td>حلاق</td>
								</tr>
								<tr>
									<td>Industrial designer</td>
									<td>dessinateur industriel</td>
									<td>مصمم صناعي</td>
								</tr>
								<tr>
									<td>Jeweler</td>
									<td>bijoutier</td>
									<td>صائغ</td>
								</tr>
								<tr>
									<td>Journalist</td>
									<td>journaliste</td>
									<td>صحافي</td>
								</tr>
								<tr>
									<td>Judge</td>
									<td>juge</td>
									<td>القاضي</td>
								</tr>
								<tr>
									<td>Lawyer</td>
									<td>avocat</td>
									<td>محامي</td>
								</tr>
								<tr>
									<td>Librarian</td>
									<td>bibliothécaire</td>
									<td>أمين المكتبة</td>
								</tr>
								<tr>
									<td>Lifeguard</td>
									<td>Sauveteur</td>
									<td>حارس الشاطئ</td>
								</tr>
								<tr>
									<td>Locksmith</td>
									<td>serrurier</td>
									<td>قفال</td>
								</tr>
								<tr>
									<td>Lorry driver</td>
									<td>routier</td>
									<td>سائق شاحنة</td>
								</tr>
								<tr>
									<td>Lumberjack/woodcutter</td>
									<td>bûcheron</td>
									<td>حطاب</td>
								</tr>
								<tr>
									<td>Male nurse</td>
									<td>infirmier</td>
									<td>ممرض</td>
								</tr>
								<tr>
									<td>Manager</td>
									<td>directeur</td>
									<td>مدير</td>
								</tr>
								<tr>
									<td>Mayor</td>
									<td>maire</td>
									<td>عمدة</td>
								</tr>
								<tr>
									<td>Mechanic</td>
									<td>mécanicien</td>
									<td>الميكانيكي</td>
								</tr>
								<tr>
									<td>Midwife</td>
									<td>sage-femme</td>
									<td>القابلة المولدة</td>
								</tr>
								<tr>
									<td>Miner</td>
									<td>mineur</td>
									<td>عامل منجم</td>
								</tr>
								<tr>
									<td>Musician</td>
									<td>musicien</td>
									<td>موسيقي</td>
								</tr>
								<tr>
									<td>Notary</td>
									<td>notaire</td>
									<td>كاتب عدل</td>
								</tr>
								<tr>
									<td>Nurse</td>
									<td>infirmière</td>
									<td>ممرضة</td>
								</tr>
								<tr>
									<td>Opthalmologist</td>
									<td>ophtalmologue</td>
									<td>طبيب عيون</td>
								</tr>
								<tr>
									<td>Optician</td>
									<td>opticien</td>
									<td>النظاراتي</td>
								</tr>
								<tr>
									<td>Painter</td>
									<td>peintre</td>
									<td>دهان</td>
								</tr>
								<tr>
									<td>Pediatrician</td>
									<td>pédiatre</td>
									<td>طبيب الأطفال</td>
								</tr>
								<tr>
									<td>Pharmacist</td>
									<td>pharmacien</td>
									<td>صيدلاني</td>
								</tr>
								<tr>
									<td>Photographer</td>
									<td>photographe</td>
									<td>مصور</td>
								</tr>
								<tr>
									<td>Physiotherapist</td>
									<td>Kinésitherapeute/physiothérapeute</td>
									<td>معالج طبيعي</td>
								</tr>
								<tr>
									<td>Pilot</td>
									<td>pilote</td>
									<td>طيار</td>
								</tr>
								<tr>
									<td>Plumber</td>
									<td>plombier</td>
									<td>سمكري</td>
								</tr>
								<tr>
									<td>Policeman</td>
									<td>policier</td>
									<td>الشرطي</td>
								</tr>
								<tr>
									<td>Politician</td>
									<td>homme politique</td>
									<td>سياسي</td>
								</tr>
								<tr>
									<td>Postman</td>
									<td>facteur</td>
									<td>ساعي البريد</td>
								</tr>
								<tr>
									<td>Producer</td>
									<td>producteur</td>
									<td>منتج</td>
								</tr>
								<tr>
									<td>Psychiatrist</td>
									<td>psychiatre</td>
									<td>طبيب نفسي</td>
								</tr>
								<tr>
									<td>Publisher</td>
									<td>éditeur</td>
									<td>الناشر</td>
								</tr>
								<tr>
									<td>Receptionist</td>
									<td>réceptionniste</td>
									<td>موظف الإستقبال</td>
								</tr>
								<tr>
									<td>Repairman</td>
									<td>réparateur</td>
									<td>مصلح</td>
								</tr>
								<tr>
									<td>Researcher</td>
									<td>chercheur</td>
									<td>الباحث</td>
								</tr>
								<tr>
									<td>Retailer</td>
									<td>détaillant</td>
									<td>متاجر التجزئة</td>
								</tr>
								<tr>
									<td>Sailor</td>
									<td>marin</td>
									<td>بحار</td>
								</tr>
								<tr>
									<td>Scientist</td>
									<td>scientifique</td>
									<td>عالم</td>
								</tr>
								<tr>
									<td>Scriptwriter</td>
									<td>scénariste</td>
									<td>كاتب السيناريو</td>
								</tr>
								<tr>
									<td>Sculptor</td>
									<td>sculpteur</td>
									<td>نحات</td>
								</tr>
								<tr>
									<td>Seamstress/dressmaker</td>
									<td>couturière</td>
									<td>خياطة</td>
								</tr>
								<tr>
									<td>Secretary</td>
									<td>secrétaire</td>
									<td>سكرتير</td>
								</tr>
								<tr>
									<td>Security guard</td>
									<td>agent de sécurité</td>
									<td>حارس أمن</td>
								</tr>
								<tr>
									<td>Gas station attendant</td>
									<td>pompiste</td>
									<td>مضيف محطة بنزين</td>
								</tr>
								<tr>
									<td>Shop assistant</td>
									<td>vendeur</td>
									<td>عامل بمتجر</td>
								</tr>
								<tr>
									<td>Shopkeeper</td>
									<td>commerçant</td>
									<td>تاجر</td>
								</tr>
								<tr>
									<td>Singer</td>
									<td>chanteur</td>
									<td>مغن</td>
								</tr>
								<tr>
									<td>Soldier</td>
									<td>soldat</td>
									<td>جندي</td>
								</tr>
								<tr>
									<td>Sportsman</td>
									<td>sportif</td>
									<td>رياضي</td>
								</tr>
								<tr>
									<td>Surgeon</td>
									<td>chirurgien</td>
									<td>دكتور جراح</td>
								</tr>
								<tr>
									<td>Switchboard operator</td>
									<td>standardiste</td>
									<td>مشغل لوحة التبديل</td>
								</tr>
								<tr>
									<td>Tailor</td>
									<td>Tailleur</td>
									<td>خياط</td>
								</tr>
								<tr>
									<td>Tax-collector</td>
									<td>percepteur</td>
									<td>محصل الضرائب</td>
								</tr>
								<tr>
									<td>Taxi driver</td>
									<td>chauffeur de taxi</td>
									<td>سائق تاكسي</td>
								</tr>
								<tr>
									<td>Teacher</td>
									<td>professeur</td>
									<td>مدرس/معلم</td>
								</tr>
								<tr>
									<td>Telephone operator</td>
									<td>standardiste</td>
									<td>عامل الهاتف</td>
								</tr>
								<tr>
									<td>Tiler</td>
									<td>carreleur</td>
									<td>صانع القرميد</td>
								</tr>
								<tr>
									<td>Translator</td>
									<td>traducteur</td>
									<td>مترجم</td>
								</tr>
								<tr>
									<td>Travel agent</td>
									<td>agent de voyage</td>
									<td>وكيل سفر</td>
								</tr>
								<tr>
									<td>Truck driver</td>
									<td>chauffeur routier</td>
									<td>سائق شاحنة</td>
								</tr>
								<tr>
									<td>Typist</td>
									<td>dactylo</td>
									<td>مطبعي</td>
								</tr>
								<tr>
									<td>Veterinary</td>
									<td>vétérinaire</td>
									<td>طبيب بيطري</td>
								</tr>
								<tr>
									<td>Waiter</td>
									<td>serveur</td>
									<td>نادل</td>
								</tr>
								<tr>
									<td>Waitress</td>
									<td>serveuse</td>
									<td>نادلة</td>
								</tr>
								<tr>
									<td>Weatherman</td>
									<td>Météorologue</td>
									<td>راصد جوي</td>
								</tr>
								<tr>
									<td>Wholesaler</td>
									<td>grossiste</td>
									<td>تاجر جملة</td>
								</tr>
								<tr>
									<td>Writer</td>
									<td>écrivain</td>
									<td>كاتب</td>
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
							  <img src="./assets/img/logotheme/comptabilitelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Comptabilité & gestion<?php endif; if($langue === 'english'): ?>Accounting & management<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="comptabilite.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		