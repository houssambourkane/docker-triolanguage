<?php
		$titrefr = "VILLE";
		$titreang = "CITY";
		$bg = "./assets/img/bgtheme/villebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Ville<?php endif; if($langue === 'english'): ?>City<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de ville en Anglais - Français - Arabe">
	<meta name="keywords" content="ville, cities, centre, ville, places, spot, spots, magasin, quartier, neighborhood, city, downtown, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Ville<?php endif; if($langue === 'english'): ?>City<?php endif; ?></h1>

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
								<td>Accommodation</td>
								<td>logement</td>
								<td>الإقامة</td>
							</tr>
							<tr>
								<td>Alley</td>
								<td>ruelle</td>
								<td>زقاق</td>
							</tr>
							<tr>
								<td>Apartment block</td>
								<td>immeuble</td>
								<td>مبنى سكني</td>
							</tr>
							<tr>
								<td>Art gallery</td>
								<td>galerie d'art</td>
								<td>معرض فني</td>
							</tr>
							<tr>
								<td>Avenue</td>
								<td>Avenue</td>
								<td>طريق مشجر</td>
							</tr>
							<tr>
								<td>Bank</td>
								<td>banque</td>
								<td>بنك</td>
							</tr>
							<tr>
								<td>Bar</td>
								<td>Bar</td>
								<td>بار</td>
							</tr>
							<tr>
								<td>Bookstore</td>
								<td>librairie</td>
								<td>محل بيع الكتب</td>
							</tr>
							<tr>
								<td>Boulevard</td>
								<td>boulevard</td>
								<td>شارع</td>
							</tr>
							<tr>
								<td>Bowling</td>
								<td>Bowling</td>
								<td>البولينج</td>
							</tr>
							<tr>
								<td>Bridge</td>
								<td>pont</td>
								<td>جسر</td>
							</tr>
							<tr>
								<td>Building</td>
								<td>bâtiment</td>
								<td>بناء</td>
							</tr>
							<tr>
								<td>Bus shelter</td>
								<td>abri de bus</td>
								<td>مأوى الحافلة</td>
							</tr>
							<tr>
								<td>Bus station</td>
								<td>gare de bus</td>
								<td>محطة الحافلات</td>
							</tr>
							<tr>
								<td>Bus stop</td>
								<td>arrêt de bus</td>
								<td>موقف حافلة</td>
							</tr>
							<tr>
								<td>Café</td>
								<td>café</td>
								<td>مقهى</td>
							</tr>
							<tr>
								<td>Capital</td>
								<td>capitale</td>
								<td>عاصمة</td>
							</tr>
							<tr>
								<td>Car park</td>
								<td>parking</td>
								<td>موقف سيارات</td>
							</tr>
							<tr>
								<td>Caretaker</td>
								<td>gardien</td>
								<td>ناظر</td>
							</tr>
							<tr>
								<td>Cathedral</td>
								<td>gardien</td>
								<td>ناظر</td>
							</tr>
							<tr>
								<td>Cathedral</td>
								<td>cathédrale</td>
								<td>كاتدرائية</td>
							</tr>
							<tr>
								<td>Cemetery/graveyard</td>
								<td>cimetière</td>
								<td>مقبرة</td>
							</tr>
							<tr>
								<td>Children's playground</td>
								<td>aire de jeux</td>
								<td>ملعب للأطفال</td>
							</tr>
							<tr>
								<td>Church</td>
								<td>église</td>
								<td>كنيسة</td>
							</tr>
							<tr>
								<td>Cinema</td>
								<td>cinéma</td>
								<td>السينما</td>
							</tr>
							<tr>
								<td>Circus</td>
								<td>cirque</td>
								<td>السينما</td>
							</tr>
							<tr>
								<td>Citizens</td>
								<td>habitants</td>
								<td>المواطنين</td>
							</tr>
							<tr>
								<td>Clinic</td>
								<td>clinique</td>
								<td>عيادة</td>
							</tr>
							<tr>
								<td>Commercial mall</td>
								<td>centre commercial</td>
								<td>مول تجاري</td>
							</tr>
							<tr>
								<td>Concert hall</td>
								<td>salle de concert</td>
								<td>قاعة الحفلات الموسيقية</td>
							</tr>
							<tr>
								<td>Concierge</td>
								<td>Concierge</td>
								<td>بواب</td>
							</tr>
							<tr>
								<td>Court</td>
								<td>tribunal</td>
								<td>محكمة</td>
							</tr>
							<tr>
								<td>Crossroads</td>
								<td>carrefour</td>
								<td>تقاطع طرق</td>
							</tr>
							<tr>
								<td>Dead end</td>
								<td>impasse</td>
								<td>طريق مسدود</td>
							</tr>
							<tr>
								<td>Dentist</td>
								<td>cabinet dentaire</td>
								<td>طبيب أسنان</td>
							</tr>
							<tr>
								<td>District/neighborhood</td>
								<td>quartier</td>
								<td>حي</td>
							</tr>
							<tr>
								<td>Downtown</td>
								<td>centre ville</td>
								<td>وسط المدينة</td>
							</tr>
							<tr>
								<td>Dustmen</td>
								<td>éboueurs</td>
								<td>عمال النظافة</td>
							</tr>
							<tr>
								<td>Estate agent</td>
								<td>agent immobilier</td>
								<td>سمسار</td>
							</tr>
							<tr>
								<td>Factory</td>
								<td>usine</td>
								<td>مصنع</td>
							</tr>
							<tr>
								<td>Fire station</td>
								<td>caserne de pompiers</td>
								<td>محطة الاطفاء</td>
							</tr>
							<tr>
								<td>Flat/apartment</td>
								<td>appartement</td>
								<td>شقة</td>
							</tr>
							<tr>
								<td>Fountain</td>
								<td>fontaine</td>
								<td>نافورة</td>
							</tr>
							<tr>
								<td>Freeway</td>
								<td>autoroute</td>
								<td>طريق سريع</td>
							</tr>
							<tr>
								<td>Garage</td>
								<td>garage</td>
								<td>كراج</td>
							</tr>
							<tr>
								<td>Green spaces</td>
								<td>espaces verts</td>
								<td>المساحات الخضراء</td>
							</tr>
							<tr>
								<td>Gym</td>
								<td>salle de gym</td>
								<td>نادي رياضي</td>
							</tr>
							<tr>
								<td>Health centre</td>
								<td>Centre de santé</td>
								<td>مركز صحي</td>
							</tr>
							<tr>
								<td>Hospital</td>
								<td>hôpital</td>
								<td>مستشفى</td>
							</tr>
							<tr>
								<td>Hotel</td>
								<td>hôtel</td>
								<td>الفندق</td>
							</tr>
							<tr>
								<td>Junction</td>
								<td>croisement</td>
								<td>تقاطع طرق</td>
							</tr>
							<tr>
								<td>Lamppost</td>
								<td>Lampadaire</td>
								<td>تقاطع طرق</td>
							</tr>
							<tr>
								<td>Leisure centre</td>
								<td>centre de loisirs</td>
								<td>مركز ترفيهي</td>
							</tr>
							<tr>
								<td>Library</td>
								<td>bibliothèque</td>
								<td>المكتبة</td>
							</tr>
							<tr>
								<td>Main street</td>
								<td>rue principale</td>
								<td>شارع رئيسي</td>
							</tr>
							<tr>
								<td>Marketplace</td>
								<td>place du marché</td>
								<td>السوق</td>
							</tr>
							<tr>
								<td>Mayor</td>
								<td>maire</td>
								<td>عمدة</td>
							</tr>
							<tr>
								<td>Mosque</td>
								<td>mosquée</td>
								<td>مسجد</td>
							</tr>
							<tr>
								<td>Multi-storey car park</td>
								<td>parking à plusieurs niveaux</td>
								<td>موقف سيارات متعدد الطوابق

							</td>
							</tr>
							<tr>
								<td>Museum</td>
								<td>musée</td>
								<td>متحف</td>
							</tr>
							<tr>
								<td>Neighbours</td>
								<td>voisins</td>
								<td>الجيران</td>
							</tr>
							<tr>
								<td>Office building</td>
								<td>immeuble de bureaux</td>
								<td>مبنى المكاتب</td>
							</tr>
							<tr>
								<td>Old town</td>
								<td>vieille ville</td>
								<td>المدينة القديمة</td>
							</tr>
							<tr>
								<td>Overcrowded</td>
								<td>surpeuplé</td>
								<td>مكتظ</td>
							</tr>
							<tr>
								<td>Park</td>
								<td>parc</td>
								<td>منتزه</td>
							</tr>
							<tr>
								<td>Parking</td>
								<td>parking</td>
								<td>موقف السيارات</td>
							</tr>
							<tr>
								<td>Passer-by</td>
								<td>passant</td>
								<td>عابر</td>
							</tr>
							<tr>
								<td>Pavement/sidewalk</td>
								<td>trottoir</td>
								<td>رصيف</td>
							</tr>
							<tr>
								<td>Pedestrian</td>
								<td>piéton</td>
								<td>مترجل</td>
							</tr>
							<tr>
								<td>Pedestrian crossing</td>
								<td>passage piétons</td>
								<td>عبور المشاة</td>
							</tr>
							<tr>
								<td>Pedestrian street</td>
								<td>rue piétonne</td>
								<td>شارع المشاة</td>
							</tr>
							<tr>
								<td>Petrol station</td>
								<td>station-service</td>
								<td>محطة بنزين</td>
							</tr>
							<tr>
								<td>Police station</td>
								<td>commissariat de police</td>
								<td>قسم الامن</td>
							</tr>
							<tr>
								<td>Post office</td>
								<td>bureau de poste</td>
								<td>مكتب البريد</td>
							</tr>
							<tr>
								<td>Prison</td>
								<td>prison</td>
								<td>السجن</td>
							</tr>
							<tr>
								<td>Pub (public house)</td>
								<td>pub</td>
								<td>حانة</td>
							</tr>
							<tr>
								<td>public toilets</td>
								<td>toilettes publiques</td>
								<td>المراحيض العامة</td>
							</tr>
							<tr>
								<td>Quay, wharf</td>
								<td>quai</td>
								<td>رصيف الميناء</td>
							</tr>
							<tr>
								<td>Residential district</td>
								<td>quartier résidentiel</td>
								<td>منطقة سكنية</td>
							</tr>
							<tr>
								<td>Rest area</td>
								<td>aire de repos</td>
								<td>منطقة استراحة</td>
							</tr>
							<tr>
								<td>Restaurant</td>
								<td>restaurant</td>
								<td>مطعم</td>
							</tr>
							<tr>
								<td>Roundabout</td>
								<td>rond point</td>
								<td>الدوار</td>
							</tr>
							<tr>
								<td>School</td>
								<td>école</td>
								<td>مدرسة</td>
							</tr>
							<tr>
								<td>sewer</td>
								<td>égout</td>
								<td>الصرف الصحي</td>
							</tr>
							<tr>
								<td>Shantytown</td>
								<td>bidonville</td>
								<td>حي فقير</td>
							</tr>
							<tr>
								<td>Side street</td>
								<td>rue latérale</td>
								<td>شارع جانبي</td>
							</tr>
							<tr>
								<td>Signpost</td>
								<td>poteau indicateur</td>
								<td>علامة إرشاد</td>
							</tr>
							<tr>
								<td>Skate park</td>
								<td>skateparc</td>
								<td>منتزه تزلج</td>
							</tr>
							<tr>
								<td>Skyscraper</td>
								<td>gratte-ciel</td>
								<td>ناطحة سحاب</td>
							</tr>
							<tr>
								<td>Stadium</td>
								<td>stade</td>
								<td>ملعب</td>
							</tr>
							<tr>
								<td>Station</td>
								<td>gare</td>
								<td>محطة</td>
							</tr>
							<tr>
								<td>Store</td>
								<td>magasin</td>
								<td>متجر</td>
							</tr>
							<tr>
								<td>Street</td>
								<td>rue</td>
								<td>شارع</td>
							</tr>
							<tr>
								<td>Subway</td>
								<td>métro</td>
								<td>مترو</td>
							</tr>
							<tr>
								<td>Supermarket</td>
								<td>supermarché</td>
								<td>سوبر ماركت</td>
							</tr>
							<tr>
								<td>Surroundings</td>
								<td>environs</td>
								<td>محيط</td>
							</tr>
							<tr>
								<td>Swimming pool</td>
								<td>piscine</td>
								<td>حمام السباحة</td>
							</tr>
							<tr>
								<td>Synagogue</td>
								<td>synagogue</td>
								<td>كنيس يهودي</td>
							</tr>
							<tr>
								<td>Taxi rank</td>
								<td>station de taxis</td>
								<td>موقف سيارات الأجرة</td>
							</tr>
							<tr>
								<td>Telephone box</td>
								<td>cabine téléphonique</td>
								<td>صندوق الهاتف</td>
							</tr>
							<tr>
								<td>Tenant</td>
								<td>locataire</td>
								<td>مستأجر</td>
							</tr>
							<tr>
								<td>Tennis court</td>
								<td>court de tennis</td>
								<td>ملعب تنس</td>
							</tr>
							<tr>
								<td>Theatre</td>
								<td>théâtre</td>
								<td>مسرح</td>
							</tr>
							<tr>
								<td>Tourist</td>
								<td>touriste</td>
								<td>سياحي</td>
							</tr>
							<tr>
								<td>tourist Office</td>
								<td>office de tourisme</td>
								<td>مكتب السياحة</td>
							</tr>
							<tr>
								<td>Tower block</td>
								<td>tour d'habitation</td>
								<td>برج سكني</td>
							</tr>
							<tr>
								<td>Town hall</td>
								<td>mairie</td>
								<td>دار البلدية</td>
							</tr>
							<tr>
								<td>Town square</td>
								<td>Place de la ville</td>
								<td>ساحة البلدة</td>
							</tr>
							<tr>
								<td>Traffic</td>
								<td>circulation</td>
								<td>حركة السير</td>
							</tr>
							<tr>
								<td>Traffic jam</td>
								<td>embouteillage</td>
								<td>الازدحام المروري</td>
							</tr>
							<tr>
								<td>Traffic lights</td>
								<td>feux de signalisation</td>
								<td>إشارات المرور</td>
							</tr>
							<tr>
								<td>Trash can</td>
								<td>poubelle</td>
								<td>مزبلة</td>
							</tr>
							<tr>
								<td>Underground parking</td>
								<td>Parking souterrain</td>
								<td>موقف تحت الارض</td>
							</tr>
							<tr>
								<td>University</td>
								<td>université</td>
								<td>جامعة</td>
							</tr>
							<tr>
								<td>Urban area</td>
								<td>zone urbaine</td>
								<td>المنطقة الحضرية</td>
							</tr>
							<tr>
								<td>Vehicle</td>
								<td>véhicule</td>
								<td>مركبة</td>
							</tr>
							<tr>
								<td>Vet</td>
								<td>cabinet vétérinaire</td>
								<td>طبيب بيطري</td>
							</tr>
							<tr>
								<td>Village</td>
								<td>village</td>
								<td>قرية</td>
							</tr>
							<tr>
								<td>War memorial</td>
								<td>monuments aux morts</td>
								<td>نصب تذكاري للحرب</td>
							</tr>
							<tr>
								<td>Zoo</td>
								<td>zoo</td>
								<td>حديقة الحيوانات</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/loisirslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="loisirs.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/voyagelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="voyage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
