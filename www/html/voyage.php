<?php
		$titrefr = "VOYAGE";
		$titreang = "TRAVELING";
		$bg = "./assets/img/bgtheme/voyagebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de voyage en Anglais - Français - Arabe">
		<meta name="keywords" content="voyage, traveling, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Voyage<?php endif; if($langue === 'english'): ?>Traveling<?php endif; ?></h1>

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
								<td class="soustitre">Travel</td>
								<td class="soustitre">voyage</td>
								<td class="soustitre">سفر</td>
							</tr>
							<tr>
								<td>A Tent</td>
								<td>une tente</td>
								<td>خيمة</td>
							</tr>
							<tr>
								<td>Abroad</td>
								<td>à l'étranger</td>
								<td>خارج البلاد</td>
							</tr>
							<tr>
								<td>Accommodation</td>
								<td>hébergement</td>
								<td>الإقامة</td>
							</tr>
							<tr>
								<td>Air condition</td>
								<td>climatisation</td>
								<td>التكييف</td>
							</tr>
							<tr>
								<td>Backpack</td>
								<td>Sac à dos</td>
								<td>حقيبة ظهر</td>
							</tr>
							<tr>
								<td>Bag</td>
								<td>sacoche, sac</td>
								<td>حقيبة</td>
							</tr>
							<tr>
								<td>Batteries</td>
								<td>piles</td>
								<td>بطاريات</td>
							</tr>
							<tr>
								<td>Camera</td>
								<td>appareil photo</td>
								<td>الة تصوير</td>
							</tr>
							<tr>
								<td>Change</td>
								<td>la (Petite) monnaie</td>
								<td>قطع النقد الصغيرة</td>
							</tr>
							<tr>
								<td>Currency</a></td>
								<td>devises</td>
								<td>عملة</td>
							</tr>
							<tr>
								<td>Destination</td>
								<td>destination</td>
								<td>المكان المقصود</td>
							</tr>
							<tr>
								<td>Duty free shop</td>
								<td>boutique hors taxes</td>
								<td>متجر السوق الحرة</td>
							</tr>
							<tr>
								<td>Foreigner</td>
								<td>étranger</td>
								<td>أجنبي</td>
							</tr>
							<tr>
								<td>Handbag</td>
								<td>sac à main</td>
								<td>حقيبة يد</td>
							</tr>
							<tr>
								<td>Holidays</td>
								<td>vacances</td>
								<td>العطل</td>
							</tr>
							<tr>
								<td>Hostel</td>
								<td>auberge de jeunesse</td>
								<td>بيت الشباب</td>
							</tr>
							<tr>
								<td>Hotel</td>
								<td>hôtel</td>
								<td>الفندق/td>
							</tr>
							<tr>
								<td>Jetlag</td>
								<td>décalage horaire</td>
								<td>اختلاف التوقيت</td>
							</tr>
							<tr>
								<td>Map</td>
								<td>carte</td>
								<td>خريطة</td>
							</tr>
							<tr>
								<td>Passport</td>
								<td>Passeport</td>
								<td>جواز سفر</td>
							</tr>
							<tr>
								<td>Pillow</td>
								<td>oreiller</td>
								<td>وسادة</td>
							</tr>
							<tr>
								<td>Suitcase</td>
								<td>valise</td>
								<td>حقيبة سفر</td>
							</tr>
							<tr>
								<td>Sunglasses</td>
								<td>lunettes de soleil</td>
								<td>نظارات شمسية</td>
							</tr>
							<tr>
								<td>Towels</td>
								<td>serviettes</td>
								<td>المناشف</td>
							</tr>
							<tr>
								<td>Travel agency</td>
								<td>agence de voyage</td>
								<td>وكالة سفر</td>
							</tr>
							<tr>
								<td>Travel agent</td>
								<td>agent de voyage</td>
								<td>وكيل سفر</td>
							</tr>
							<tr>
								<td>Travel documents</td>
								<td>documents de voyage</td>
								<td>وثائق السفر</td>
							</tr>
							<tr>
								<td>Travel insurance</td>
								<td>assurance voyage</td>
								<td>تأمين السفر</td>
							</tr>
							<tr>
								<td>Travelbag</td>
								<td>sac de voyage</td>
								<td>حقيبة سفر</td>
							</tr>
							<tr>
								<th>Useful verbs for traveling</th>
								<th>Verbes utiles pour voyager</th>
								<th>أفعال مفيدة للسفر</th>
							</tr>
							<tr>
								<td>To book</td>
								<td>réserver</td>
								<td>حجز</td>
							</tr>
							<tr>
								<td>To explore</td>
								<td>explorer</td>
								<td>يكتشف</td>
							</tr>
							<tr>
								<td>To rent</td>
								<td>louer</td>
								<td>تأجير</td>
							</tr>
							<tr>
								<td>To take pictures</td>
								<td>prendre des photos</td>
								<td>التقاط الصور</td>
							</tr>
							<tr>
								<td>To visit</td>
								<td>visiter</td>
								<td>زيارة</td>
							</tr>





							<tr>
								<td class="soustitre">plane</td>
								<td class="soustitre">avion</td>
								<td class="soustitre">طائرة</td>
							</tr>
							<tr>
								<td>Air fleet</td>
								<td>flotte aérienne</td>
								<td>الأسطول الجوي</td>
							</tr>
							<tr>
								<td>Air hostess</td>
								<td>hôtesse de l'air</td>
								<td>مضيفة جوية</td>
							</tr>
							<tr>
								<td>Air safety</td>
								<td>sécurité aérienne</td>
								<td>السلامة الجوية</td>
							</tr>
							<tr>
								<td>Air sickness</td>
								<td>mal de l'air</td>
								<td>دوار الجو</td>
							</tr>
							<tr>
								<td>Air terminal</td>
								<td>aérogare</td>
								<td>منفذ جوي</td>
							</tr>
							<tr>
								<td>Airport</td>
								<td>aéroport</td>
								<td>مطار</td>
							</tr>
							<tr>
								<td>Airport taxes</td>
								<td>taxes d'aéroport</td>
								<td>ضرائب المطار</td>
							</tr>
							<tr>
								<td>Arrival</td>
								<td>arrivée</td>
								<td>وصول</td>
							</tr>
							<tr>
								<td>Automatic pilot</td>
								<td>pilotage automatique</td>
								<td>الطيار الآلي</td>
							</tr>
							<tr>
								<td>Business class</td>
								<td>classe affaires</td>
								<td>درجة رجال الأعمال</td>
							</tr>
							<tr>
								<td>Check in</td>
								<td>enregistrer</td>
								<td>تحقق في</td>
							</tr>
							<tr>
								<td>Cockpit</td>
								<td>poste de pilotage</td>
								<td>مقصورة الطيار</td>
							</tr>
							<tr>
								<td>Crew</td>
								<td>équipage</td>
								<td>طاقم</td>
							</tr>
							<tr>
								<td>Customs</td>
								<td>douanes</td>
								<td>الجمارك</td>
							</tr>
							<tr>
								<td>Departure gate</td>
								<td>porte de départ</td>
								<td>بوابة المغادرة</td>
							</tr>
							<tr>
								<td>Departure lounge</td>
								<td>salle d'embarquement</td>
								<td>صالة المغادرة</td>
							</tr>
							<tr>
								<td>Domestic flight</td>
								<td>vol intérieur</td>
								<td>رحلة داخلية</td>
							</tr>
							<tr>
								<td>Emergency exit</td>
								<td>sortie de secours</td>
								<td>مخرج طوارئ</td>
							</tr>
							<tr>
								<td>Failing engine</td>
								<td>moteur défaillant</td>
								<td>فشل المحرك</td>
							</tr>
							<tr>
								<td>Fly over</td>
								<td>survoler</td>
								<td>يطير فوق</td>
							</tr>
							<tr>
								<td>Fuel</td>
								<td>carburant</td>
								<td>وقود</td>
							</tr>
							<tr>
								<td>Helicopter</td>
								<td>hélicoptère</td>
								<td>هليكوبتر</td>
							</tr>
							<tr>
								<td>High-speed flight</td>
								<td>vol à grande vitesse</td>
								<td>رحلة عالية السرعة</td>
							</tr>
							<tr>
								<td>Hijacker</td>
								<td>pirate de l'air</td>
								<td>قرصان الجو</td>
							</tr>
							<tr>
								<td>Jet plane</td>
								<td>avion à réaction</td>
								<td>طائرة نفاثة</td>
							</tr>
							<tr>
								<td>Reactor</td>
								<td>réacteur</td>
								<td>مفاعل</td>
							</tr>
							<tr>
								<td>Land</td>
								<td>atterrir</td>
								<td>تهبط</td>
							</tr>
							<tr>
								<td>Landing strip</td>
								<td>piste d'atterrissage</td>
								<td>المهبط</td>
							</tr>
							<tr>
								<td>Luggage</td>
								<td>bagages</td>
								<td>حقائب السفر</td>
							</tr>
							<tr>
								<td>Panic-stricken</td>
								<td>frappé de panique</td>
								<td>مذعور</td>
							</tr>
							<tr>
								<td>Passport control</td>
								<td>contrôle des passeports</td>
								<td>مراقبة جوازات السفر</td>
							</tr>
							<tr>
								<td>Pilot</td>
								<td>pilote</td>
								<td>طيار</td>
							</tr>
							<tr>
								<td>Plane disaster</td>
								<td>catastrophe aérienne</td>
								<td>كارثة الطائرة</td>
							</tr>
							<tr>
								<td>Propeller</td>
								<td>hélice</td>
								<td>المروحة</td>
							</tr>
							<tr>
								<td>Radar</td>
								<td>radar</td>
								<td>رادار</td>
							</tr>
							<tr>
								<td>Reactor</td>
								<td>réacteur</td>
								<td>مفاعل</td>
							</tr>
							<tr>
								<td>Runway</td>
								<td>piste</td>
								<td>مدرج المطار</td>
							</tr>
							<tr>
								<td>Steward</td>
								<td>steward</td>
								<td>جوي مضيف</td>
							</tr>
							<tr>
								<td>Take off</td>
								<td>décoller</td>
								<td>تطير </td>
							</tr>
							<tr>
								<td>Tarmac</td>
								<td>aire d'envol</td>
								<td>مدرج الإقلاع</td>
							</tr>
							<tr>
								<td>Tighten up security</td>
								<td>renforcer la sécurité</td>
								<td>تشديد الأمن</td>
							</tr>
							<tr>
								<td>Wing</td>
								<td>aile</td>
								<td>جناح</td>
							</tr>
							
							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To Catch fire</td>
								<td>prendre feu</td>
								<td>لتشتعل فيها النيران</td>
							</tr>
							<tr>
								<td>To Burn</td>
								<td>brûler</td>
								<td>ليحترق</td>
							</tr>
							<tr>
								<td>To crash</td>
								<td>s'écraser</td>
								<td>ليصطدم</td>
							</tr>
							<tr>
								<td>To explode</td>
								<td>exploser</td>
								<td>لتنفجر</td>
							</tr>



							<tr>
								<td class="soustitre">boat</td>
								<td class="soustitre">bateau</td>
								<td class="soustitre">قارب</td>
							</tr>
							<tr>
								<td>Big waves</td>
								<td>grosse vagues</td>
								<td>موجات كبيرة</td>
							</tr>
							<tr>
								<td>Bridge</td>
								<td>pont de commandement</td>
								<td>جسر القيادة</td>
							</tr>
							<tr>
								<td>Buoy</td>
								<td>balise flottante</td>
								<td>عوامة</td>
							</tr>
							<tr>
								<td>Canoe</td>
								<td>canot</td>
								<td>قارب</td>
							</tr>
							<tr>
								<td>Compass</td>
								<td>boussole</td>
								<td>بوصلة</td>
							</tr>
							<tr>
								<td>Crew</td>
								<td>équipage</td>
								<td>ملاحو السفينة</td>
							</tr>
							<tr>
								<td>Cruising yacht</td>
								<td>yacht de croisière</td>
								<td>اليخوت المبحرة</td>
							</tr>
							<tr>
								<td>deck</td>
								<td>pont/plate-forme</td>
								<td>ظهر السفينة</td>
							</tr>
							<tr>
								<td>Distress signal</td>
								<td>signal de détresse</td>
								<td>إشارة استغاثة</td>
							</tr>
							<tr>
								<td>Ferry</td>
								<td>ferry</td>
								<td>(عبارة (مركب</td>
							</tr>
							<tr>
								<td>Funnel</td>
								<td>cheminée</td>
								<td>مدخنة</td>
							</tr>
							<tr>
								<td>Gangway</td>
								<td>passerelle</td>
								<td>سلم السفينة</td>
							</tr>
							<tr>
								<td>Harbour</td>
								<td>port</td>
								<td>مرفأ</td>
							</tr>
							<tr>
								<td>Helm</td>
								<td>gouvernail</td>
								<td>دفة القيادة في سفينة</td>
							</tr>
							<tr>
								<td>Hovercraft</td>
								<td>aéroglisseur</td>
								<td>حوامة</td>
							</tr>
							<tr>
								<td>Life jackets</td>
								<td>gilets de sauvetage</td>
								<td>سترات النجاة</td>
							</tr>
							<tr>
								<td>Lifeboat</td>
								<td>canot de sauvetage</td>
								<td>قارب نجاة*</td>
							</tr>
							<tr>
								<td>Liner</td>
								<td>paquebot</td>
								<td>قارب</td>
							</tr>
							<tr>
								<td>maritime lighthouse</td>
								<td>phare maritime</td>
								<td>المنارة البحرية</td>
							</tr>
							<tr>
								<td>Navy</td>
								<td>marine</td>
								<td>القوات البحرية</td>
							</tr>
							<tr>
								<td>Oar</td>
								<td>rame</td>
								<td>مجذاف</td>
							</tr>
							<tr>
								<td>Porthole</td>
								<td>hublot</td>
								<td>فتحة</td>
							</tr>
							<tr>
								<td>Safety of the passengers</td>
								<td>sécurité des passagers</td>
								<td>سلامة الركاب</td>
							</tr>
							<tr>
								<td>Sail</td>
								<td>voile</td>
								<td>شراع</td>
							</tr>
							<tr>
								<td>Sailor</td>
								<td>marin</td>
								<td>بحار</td>
							</tr>
							<tr>
								<td>Shallow/deep</td>
								<td>peu profond/profond</td>
								<td>عميق/بارز</td>
							</tr>
							<tr>
								<td>Ship</td>
								<td>navire</td>
								<td>سفينة</td>
							</tr>
							<tr>
								<td>Smooth</td>
								<td>calme</td>
								<td>ناعم</td>
							</tr>
							<tr>
								<td>stormy sea</td>
								<td>mer houleuse</td>
								<td>البحر العاصف</td>
							</tr>
							<tr>
								<td>Vessel</td>
								<td>vaisseau</td>
								<td>باخرة</td>
							</tr>
							

							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To Capsize</td>
								<td>chavirer</td>
								<td>انقلاب</td>
							</tr>
							<tr>
								<td>To Sink</td>
								<td>Couler</td>
								<td>لتغرق</td>
							</tr>
							<tr>
								<td>To be shipwrecked</td>
								<td>faire un naufrage</td>
								<td>أن تكون غرقت</td>
							</tr>
							<tr>
								<td>To drown</td>
								<td>se noyer</td>
								<td>ليغرق</td>
							</tr>
							<tr>
								<td>To sail into harbour</td>
								<td>entrer au port</td>
								<td>أدخل الميناء</td>
							</tr>
							<tr>
								<td>To leave harbour</td>
								<td>sortir du port</td>
								<td>مغادرة الميناء</td>
							</tr>
							<tr>
								<td>To cross the channel</td>
								<td>Traverser le canal</td>
								<td>لعبور القناة</td>
							</tr>
							<tr>
								<td>To embark</td>
								<td>embarquer</td>
								<td>الشروع</td>
							</tr>
							<tr>
								<td>To disembark</td>
								<td>débarquer</td>
								<td>نزل من السفينة</td>
							</tr>

							<tr>
								<td class="soustitre">train</td>
								<td class="soustitre">train</td>
								<td class="soustitre">قطار</td>
							</tr>
							<tr>
								<td>Behind schedule</td>
								<td>en retard</td>
								<td>متأخر عن الجدول</td>
							</tr>
							<tr>
								<td>Derailment</td>
								<td>déraillement</td>
								<td>خروج عن الخط</td>
							</tr>
							<tr>
								<td>Dining car</td>
								<td>wagon restaurant</td>
								<td>عربة الطعام</td>
							</tr>
							<tr>
								<td>Fare</td>
								<td>prix du billet</td>
								<td>سعر التذكرة</td>
							</tr>
							<tr>
								<td>Goods train</td>
								<td>train de marchandises</td>
								<td>قطار بضائع</td>
							</tr>
							<tr>
								<td>High speed train</td>
								<td>Train à grande vitesse (TGV)</td>
								<td>قطار شديد السرعة</td>
							</tr>
							<tr>
								<td>Locomotive</td>
								<td>locomotive</td>
								<td>قاطرة</td>
							</tr>
							<tr>
								<td>On schedule</td>
								<td>à l'heure</td>
								<td>في الموعد المحدد</td>
							</tr>
							<tr>
								<td>one way ticket</td>
								<td>aller simple</td>
								<td>تذكرة ذهاب بلا عودة</td>
							</tr>
							<tr>
								<td>Passenger train</td>
								<td>train des voyageurs</td>
								<td>قطار المسافرين</td>
							</tr>
							<tr>
								<td>Platform</td>
								<td>quai</td>
								<td>رصيف محطة القطار</td>
							</tr>
							<tr>
								<td>Rail network</td>
								<td>Réseau ferroviaire</td>
								<td>شبكة السكك الحديدية</td>
							</tr>
							<tr>
								<td>Rails</td>
								<td>rails</td>
								<td>سكة حديدية</td>
							</tr>
							<tr>
								<td>Railway line</td>
								<td>ligne de chemin de fer</td>
								<td>خط السكك الحديدية</td>
							</tr>
							<tr>
								<td>Refund</td>
								<td>rembourser</td>
								<td>إعادة مال</td>
							</tr>
							<tr>
								<td>Reserved seats</td>
								<td>places réservées</td>
								<td>مقاعد محجوزة</td>
							</tr>
							<tr>
								<td>Return ticket</td>
								<td>aller et retour</td>
								<td>تذكرة ذهاب وعودة</td>
							</tr>
							<tr>
								<td>Seat</td>
								<td>siège</td>
								<td>مقعد</td>
							</tr>
							<tr>
								<td>Sleeping car</td>
								<td>wagon couchettes</td>
								<td>عربة النوم</td>
							</tr>
							<tr>
								<td>Stairs</td>
								<td>escaliers</td>
								<td>درج</td>
							</tr>
							<tr>
								<td>Station master</td>
								<td>chef de gare</td>
								<td>سيد محطة</td>
							</tr>
							<tr>
								<td>Streetcar</td>
								<td>tramway</td>
								<td>ترام</td>
							</tr>
							<tr>
								<td>Strike</td>
								<td>Grève</td>
								<td>إضراب</td>
							</tr>
							<tr>
								<td>Suburban train</td>
								<td>train de banlieue</td>
								<td>قطار الضواحي</td>
							</tr>
							<tr>
								<td>Ticket collector</td>
								<td>contrôleur</td>
								<td>جامع التذاكر</td>
							</tr>
							<tr>
								<td>Timetable</td>
								<td>horaire</td>
								<td>الجدول الزمني</td>
							</tr>
							<tr>
								<td>Waiting room</td>
								<td>salle d'attente</td>
								<td>غرفة الانتظار</td>
							</tr>
							<tr>
								<td>Whistle</td>
								<td>siffler</td>
								<td>تصفير</td>
							</tr>

							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To get on/off</td>
								<td>monter/descendre</td>
								<td>يصعد/النزول</td>
							</tr>
							<tr>
								<td>To be delayed</td>
								<td>avoir du retard</td>
								<td>أن يتم تأخيره</td>
							</tr>
							<tr>
								<td>To miss the train</td>
								<td>rater le train</td>
								<td>تفويت القطار</td>
							</tr>

							<tr>
								<td class="soustitre">car</td>
								<td class="soustitre">voiture</td>
								<td class="soustitre">سيارة</td>
							</tr>
							<tr>
								<td>A Bend</td>
								<td>virage</td>
								<td>منحنى</td>
							</tr>
							<tr>
								<td>A car crash</td>
								<td>accident de voiture</td>
								<td>حادث سيارة</td>
							</tr>
							<tr>
								<td>A punctured tyre</td>
								<td>un pneu crevé</td>
								<td>الاطارات ثقب</td>
							</tr>
							<tr>
								<td>Accelerator</td>
								<td>accélérateur</td>
								<td>مسرع</td>
							</tr>
							<tr>
								<td>Bonnet</td>
								<td>capot</td>
								<td>غطاء محرك السيارة</td>
							</tr>
							<tr>
								<td>Boot</td>
								<td>Coffre</td>
								<td>صندوق السيارة</td>
							</tr>
							<tr>
								<td>Bumper</td>
								<td>pare-chocs</td>
								<td>مقدمة السيارة</td>
							</tr>
							<tr>
								<td>Car dealer</td>
								<td>concessionnaire</td>
								<td>تاجر سيارات</td>
							</tr>
							<tr>
								<td>Car licence</td>
								<td>carte grise</td>
								<td>رخصة السيارة</td>
							</tr>
							<tr>
								<td>Carburettor</td>
								<td>carburateur</td>
								<td>المكربن/كاربراتير</td>
							</tr>
							<tr>
								<td>Clutch pedal</td>
								<td>pédale d'embrayage</td>
								<td>دواسة القابض</td>
							</tr>
							<tr>
								<td>Convertible</td>
								<td>décapotable</td>
								<td>مكشوفة</td>
							</tr>
							<tr>
								<td>Crossroads</td>
								<td>croisement</td>
								<td>ملتقى طرق</td>
							</tr>
							<tr>
								<td>Dashboard</td>
								<td>tableau de bord</td>
								<td>لوحة القيادة</td>
							</tr>
							<tr>
								<td>Driving instructor</td>
								<td>moniteur</td>
								<td>مدرب القيادة</td>
							</tr>
							<tr>
								<td>Driving licence</td>
								<td>permis de conduire</td>
								<td>رخصة قيادة</td>
							</tr>
							<tr>
								<td>Driving school</td>
								<td>auto-école</td>
								<td>مدرسة لتعليم القيادة</td>
							</tr>
							<tr>
								<td>Drunk</td>
								<td>ivre</td>
								<td>سكران</td>
							</tr>
							<tr>
								<td>Engine</td>
								<td>moteur</td>
								<td>محرك</td>
							</tr>
							<tr>
								<td>Exhaust pipe</td>
								<td>pot d'échappement</td>
								<td>ماسورة العادم</td>
							</tr>
							<tr>
								<td>Garage owner</td>
								<td>garagiste</td>
								<td>صاحب كراج</td>
							</tr>
							<tr>
								<td>Gas station</td>
								<td>station service</td>
								<td>محطة غاز</td>
							</tr>
							<tr>
								<td>Gear box</td>
								<td>boîte de vitesse</td>
								<td>علبة السرعة</td>
							</tr>
							<tr>
								<td>Handbrake</td>
								<td>frein à main</td>
								<td>فرملة اليد</td>
							</tr>
							<tr>
								<td>Headlamps</td>
								<td>phares</td>
								<td>المصابيح الأمامية</td>
							</tr>
							<tr>
								<td>Highway</td>
								<td>route à grande circulation</td>
								<td>طريق المرور عالية</td>
							</tr>
							<tr>
								<td>Horn</td>
								<td>klaxon</td>
								<td>بوق السيارة</td>
							</tr>
							<tr>
								<td>Ignition key</td>
								<td>clé de contact</td>
								<td>مفتاح التشغيل</td>
							</tr>
							<tr>
								<td>Indicators</td>
								<td>clignotants</td>
								<td>مؤشرات</td>
							</tr>
							<tr>
								<td>Junction</td>
								<td>croisement/carrefour</td>
								<td>تقاطع طرق</td>
							</tr>
							<tr>
								<td>Mileage indicator</td>
								<td>compteur kilométrique</td>
								<td>عداد المسافات</td>
							</tr>
							<tr>
								<td>Motorway</td>
								<td>autoroute</td>
								<td>الطريق السريع</td>
							</tr>
							<tr>
								<td>numberplate</td>
								<td>plaque d'immatriculation </td>
								<td>لوحة الأرقام</td>
							</tr>
							<tr>
								<td>Penalty</td>
								<td>amende</td>
								<td>غرامة</td>
							</tr>
							<tr>
								<td>Radar trap</td>
								<td>contrôle radar</td>
								<td>مراقبة الرادار</td>
							</tr>
							<tr>
								<td>Reverse gear</td>
								<td>marche arrière</td>
								<td>عكس العتاد</td>
							</tr>
							<tr>
								<td>Roadsigns</td>
								<td>panneaux</td>
								<td>إشارات الطريق</td>
							</tr>
							<tr>
								<td>Roadworks</td>
								<td>travaux</td>
								<td>أعمال صيانة الطرق</td>
							</tr>
							<tr>
								<td>Roundabout</td>
								<td>rond point </td>
								<td>الدوار</td>
							</tr>
							<tr>
								<td>Safety belt</td>
								<td>ceinture de sécurité</td>
								<td>حزام الأمان</td>
							</tr>
							<tr>
								<td>Second-hand</td>
								<td>d'occasion</td>
								<td>مستعمل</td>
							</tr>
							<tr>
								<td>Shock absorbers</td>
								<td>amortisseurs</td>
								<td>امتصاص الصدمات</td>
							</tr>
							<tr>
								<td>Show room</td>
								<td>salle d'exposition</td>
								<td>قاعة عرض</td>
							</tr>
							<tr>
								<td>Slippery ground</td>
								<td>terrain glissant</td>
								<td>الأرض الزلقة</td>
							</tr>
							<tr>
								<td>Spare wheel</td>
								<td>roue de secours</td>
								<td>الإطار الاحتياطي</td>
							</tr>
							<tr>
								<td>Sparking plugs</td>
								<td>les bougies</td>
								<td>شمعات الإثارة</td>
							</tr>
							<tr>
								<td>Speed limits</td>
								<td>limitations de vitesse</td>
								<td>حدود السرعة</td>
							</tr>
							<tr>
								<td>Steering wheel</td>
								<td>volant</td>
								<td>المقود</td>
							</tr>
							<tr>
								<td>Tank</td>
								<td>réservoir</td>
								<td>خزان</td>
							</tr>
							<tr>
								<td>Test alcohol</td>
								<td>alcootest</td>
								<td>اختبار الكحول</td>
							</tr>
							<tr>
								<td>The driving mirror</td>
								<td>rétroviseur</td>
								<td>مرآة القيادة</td>
							</tr>
							<tr>
								<td>The gear lever</td>
								<td>levier de vitesse</td>
								<td>ذراع التروس</td>
							</tr>
							<tr>
								<td>The road network</td>
								<td>réseau routier</td>
								<td>شبكة الطرق</td>
							</tr>
							<tr>
								<td>Toll</td>
								<td>péage</td>
								<td>رسوم</td>
							</tr>
							<tr>
								<td>Tunnel</td>
								<td>tunnel</td>
								<td>نفق</td>
							</tr>
							<tr>
								<td>Windscreen</td>
								<td>pare-brise</td>
								<td>حاجب الريح</td>
							</tr>
							<tr>
								<td>Windscreen wipers</td>
								<td>essuie-glaces</td>
								<td>مساحات الزجاج</td>
							</tr>
							<tr>
								<td>Wing</td>
								<td>Aile</td>
								<td>جناح</td>
							</tr>
							<tr>
								<th>Useful verbs</th>
								<th>verbes utiles</th>
								<th>أفعال مفيدة</th>
							</tr>
							<tr>
								<td>To repair</td>
								<td>réparer</td>
								<td>إصلاح</td>
							</tr>
							<tr>
								<td>To run out of petrol</td>
								<td>tomber en panne d'essence</td>
								<td>لنفاد البنزين</td>
							</tr>
							<tr>
								<td>To have a breakdown</td>
								<td>tomber en panne</td>
								<td>يتعطل</td>
							</tr>
							<tr>
								<td>to rent a car</td>
								<td>louer une voiture</td>
								<td>كراء سيارة</td>
							</tr>
							<tr>
								<td>To register</td>
								<td>immatriculer</td>
								<td>تسجيل</td>
							</tr>
							<tr>
								<td>To insure the vehicle</td>
								<td>assurer le véhicule</td>
								<td>لتأمين السيارة</td>
							</tr>
							<tr>
								<td>To fill up</td>
								<td>faire le plein</td>
								<td>لملأ</td>
							</tr>
							<tr>
								<td>To change the oil</td>
								<td>vidanger</td>
								<td>لتغيير الزيت</td>
							</tr>
							<tr>
								<td>To check the tyre pressure</td>
								<td>vérifier la pression des pneus</td>
								<td>تحقق من ضغط الإطارات</td>
							</tr>
							<tr>
								<td>To change gear</td>
								<td>changer de vitesse</td>
								<td>تغيير العتاد</td>
							</tr>
							<tr>
								<td>To reduce speed</td>
								<td>réduire la vitesse</td>
								<td>لتقليل السرعة</td>
							</tr>
							<tr>
								<td>To overtake</td>
								<td>doubler</td>
								<td>تجاوز</td>
							</tr>
							<tr>
								<td>To slow down</td>
								<td>ralentir</td>
								<td>خفض السرعة</td>
							</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/payslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Pays<?php endif; if($langue === 'english'): ?>Countries<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="pays.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/merveilleslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les merveilles du mondes<?php endif; if($langue === 'english'): ?>The world's wonders<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="merveilles.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		