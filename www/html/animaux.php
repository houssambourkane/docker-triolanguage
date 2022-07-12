<?php
		$titrefr = "ANIMAUX";
		$titreang = "ANIMALS";
		$bg = "./assets/img/bgtheme/animauxbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Animaux<?php endif; if($langue === 'english'): ?>Animals<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des animaux en Anglais - Français - Arabe">
		<meta name="keywords" content="animaux, animal, animals, pets, compagnie, sauvage, sauvages, forêt, zoo, vétérinaire, pet, aquatique, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Animaux<?php endif; if($langue === 'english'): ?>Animals<?php endif; ?></h1>

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
									<td class="soustitre">Pets</td>
									<td class="soustitre">Animaux domestiques</td>
									<td class="soustitre">حيوانات أليفة</td>
								</tr>
								<tr>
									<td>alpaca</td>
									<td>alpaga</td>
									<td>ألبكة</td>
								</tr>
								<tr>
									<td>billy goat</td>
									<td>bouc</td>
									<td>ماعز</td>
								</tr>
								<tr>
									<td>bull</td>
									<td>taureau</td>
									<td>ثور</td>
								</tr>
								<tr>
									<td>cat</td>
									<td>chat</td>
									<td>قط</td>
								</tr>
								<tr>
									<td>cow</td>
									<td>vache</td>
									<td>بقرة</td>
								</tr>
								<tr>
									<td>deer</td>
									<td>chevreuil</td>
									<td>يحمور</td>
								</tr>
								<tr>
									<td>dog</td>
									<td>chien</td>
									<td>كلب</td>
								</tr>
								<tr>
									<td>donkey</td>
									<td>âne</td>
									<td>حمار</td>
								</tr>
								<tr>
									<td>ewe</td>
									<td>brebis</td>
									<td>خروف</td>
								</tr>
								<tr>
									<td>fish</td>
									<td>poisson</td>
									<td>سمك</td>
								</tr>
								<tr>
									<td>foal</td>
									<td>poulain</td>
									<td>مهر</td>
								</tr>
								<tr>
									<td>goat</td>
									<td>chèvre</td>
									<td>ماعز</td>
								</tr>
								<tr>
									<td>goldfish</td>
									<td>poisson rouge</td>
									<td>سمك أحمر</td>
								</tr>
								<tr>
									<td>hamster</td>
									<td>hamster</td>
									<td>الهمستر</td>
								</tr>
								<tr>
									<td>hen</td>
									<td>poule</td>
									<td>دجاجة</td>
								</tr>
								<tr>
									<td>horse</td>
									<td>cheval</td>
									<td>حصان</td>
								</tr>
								<tr>
									<td>lama</td>
									<td>lama</td>
									<td>لاما</td>
								</tr>
								<tr>
									<td>lamb</td>
									<td>agneau</td>
									<td>خروف</td>
								</tr>
								<tr>
									<td>lizard</td>
									<td>lézard</td>
									<td>سحلية</td>
								</tr>
								<tr>
									<td>mare</td>
									<td>jument</td>
									<td>فرس</td>
								</tr>
								<tr>
									<td>mouse</td>
									<td>souris</td>
									<td>فأر</td>
								</tr>
								<tr>
									<td>mule</td>
									<td>mulet</td>
									<td>بغل</td>
								</tr>
								<tr>
									<td>pig</td>
									<td>cochon</td>
									<td>خنزير</td>
								</tr>
								<tr>
									<td>piglet</td>
									<td>porcelet</td>
									<td>خنزير صغير</td>
								</tr>
								<tr>
									<td>pony</td>
									<td>poney</td>
									<td>فرس قزم</td>
								</tr>
								<tr>
									<td>rabbit</td>
									<td>lapin</td>
									<td>أرنب</td>
								</tr>
								<tr>
									<td>ram</td>
									<td>bélier</td>
									<td>كبش</td>
								</tr>
								<tr>
									<td>sheep</td>
									<td>mouton</td>
									<td>خروف</td>
								</tr>
								<tr>
									<td>sow</td>
									<td>truie</td>
									<td>خنزيرة</td>
								</tr>
								<tr>
									<td>stallion</td>
									<td>étalon</td>
									<td>فحل الخيل</td>
								</tr>
								<tr>
									<td>swine</td>
									<td>porc</td>
									<td>خنزير</td>
								</tr>
								<tr>
									<td>turtle</td>
									<td>tortue</td>
									<td>سلحفاة</td>
								</tr>

								<tr>
									<td class="soustitre">Wild animals</td>
									<td class="soustitre">Animaux Sauvages</td>
									<td class="soustitre"> البرية</td>
								</tr>
								<tr>
									<td>alligator</td>
									<td>alligator</td>
									<td>تمساح إستوائي</td>
								</tr>
								<tr>
									<td>antelope</td>
									<td>antilope</td>
									<td>ظبي</td>
								</tr>
								<tr>
									<td>armadillo</td>
									<td>tatou</td>
									<td>مدرع</td>
								</tr>
								<tr>
									<td>baboon</td>
									<td>babouin</td>
									<td>قرد الرباح</td>
								</tr>
								<tr>
									<td>badger</td>
									<td>blaireau</td>
									<td>غرير</td>
								</tr>
								<tr>
									<td>bat</td>
									<td>chauve-souris</td>
									<td>خفاش</td>
								</tr>
								<tr>
									<td>bear</td>
									<td>ours</td>
									<td>دب</td>
								</tr>
								<tr>
									<td>beaver</td>
									<td>castor</td>
									<td>سمور</td>
								</tr>
								<tr>
									<td>bison</td>
									<td>bison</td>
									<td>بيسون</td>
								</tr>
								<tr>
									<td>boar</td>
									<td>sanglier</td>
									<td>خنزير ذكر</td>
								</tr>
								<tr>
									<td>buffalo</td>
									<td>buffle</td>
									<td>جاموس</td>
								</tr>
								<tr>
									<td>camel</td>
									<td>chameau</td>
									<td>جمل</td>
								</tr>
								<tr>
									<td>cheetah</td>
									<td>guépard</td>
									<td>الفهد الصياد</td>
								</tr>
								<tr>
									<td>chimpanzee</td>
									<td>chimpanzé</td>
									<td>شيمبانزي</td>
								</tr>
								<tr>
									<td>coyote</td>
									<td>coyote</td>
									<td>قيوط</td>
								</tr>
								<tr>
									<td>crocodile</td>
									<td>crocodile</td>
									<td>تمساح</td>
								</tr>
								<tr>
									<td>deer</td>
									<td>daim</td>
									<td>الأيل الأدم</td>
								</tr>
								<tr>
									<td>dromedary</td>
									<td>dromadaire</td>
									<td>الجمل العربي</td>
								</tr>
								<tr>
									<td>elephant</td>
									<td>éléphant</td>
									<td>فيل</td>
								</tr>
								<tr>
									<td>fox</td>
									<td>renard</td>
									<td>ثعلب</td>
								</tr>
								<tr>
									<td>giraffe</td>
									<td>girafe</td>
									<td>زرافة</td>
								</tr>
								<tr>
									<td>gnu</td>
									<td>gnou</td>
									<td>النو ثيتل افريقي</td>
								</tr>
								<tr>
									<td>gorilla</td>
									<td>gorille</td>
									<td>غوريلا</td>
								</tr>
								<tr>
									<td>hedgehog</td>
									<td>hérisson</td>
									<td>قنفذ</td>
								</tr>
								<tr>
									<td>hippopotamus</td>
									<td>hippopotame</td>
									<td>فرس النهر</td>
								</tr>
								<tr>
									<td>hyena</td>
									<td>hyène</td>
									<td>ضبع</td>
								</tr>
								<tr>
									<td>iguana</td>
									<td>iguane</td>
									<td>إغوانا</td>
								</tr>
								<tr>
									<td>jackal</td>
									<td>chacal</td>
									<td>ابن آوى</td>
								</tr>
								<tr>
									<td>jaguar</td>
									<td>jaguar</td>
									<td>النمر المرقط</td>
								</tr>
								<tr>
									<td>kangaroo</td>
									<td>kangourou</td>
									<td>كنغر</td>
								</tr>
								<tr>
									<td>koala</td>
									<td>koala</td>
									<td>الكوال دب أسترالي</td>
								</tr>
								<tr>
									<td>leopard</td>
									<td>léopard</td>
									<td>فهد</td>
								</tr>
								<tr>
									<td>lion</td>
									<td>lion</td>
									<td>أسد</td>
								</tr>
								<tr>
									<td>marmot</td>
									<td>marmotte</td>
									<td>مرموط</td>
								</tr>
								<tr>
									<td>mongoose</td>
									<td>mangouste</td>
									<td>نمس</td>
								</tr>
								<tr>
									<td>monkey</td>
									<td>singe</td>
									<td>قرد</td>
								</tr>
								<tr>
									<td>otter</td>
									<td>loutre</td>
									<td>ثعلب الماء</td>
								</tr>
								<tr>
									<td>panda</td>
									<td>panda</td>
									<td>بندة</td>
								</tr>
								<tr>
									<td>panther</td>
									<td>panthère</td>
									<td>اليغور نمر</td>
								</tr>
								<tr>
									<td>polar bear</td>
									<td>ours polaire</td>
									<td>الدب القطبي</td>
								</tr>
								<tr>
									<td>porcupine</td>
									<td>porc-épic</td>
									<td>نيص</td>
								</tr>
								<tr>
									<td>racoon</td>
									<td>raton laveur</td>
									<td>راكون</td>
								</tr>
								<tr>
									<td>reindeer</td>
									<td>renne</td>
									<td>رنة</td>
								</tr>
								<tr>
									<td>rhinoceros</td>
									<td>rhinocéros</td>
									<td>وحيد القرن</td>
								</tr>
								<tr>
									<td>seal</td>
									<td>phoque</td>
									<td>فقمة</td>
								</tr>
								<tr>
									<td>snake</td>
									<td>serpent</td>
									<td>ثعبان</td>
								</tr>
								<tr>
									<td>squirrel</td>
									<td>écureuil</td>
									<td>سنجاب</td>
								</tr>
								<tr>
									<td>tiger</td>
									<td>tigre</td>
									<td>نمر</td>
								</tr>
								<tr>
									<td>viper</td>
									<td>vipère</td>
									<td>أفعى سامة</td>
								</tr>
								<tr>
									<td>warthog</td>
									<td>phacochère</td>
									<td>خنزير</td>
								</tr>
								<tr>
									<td>wolf</td>
									<td>loup</td>
									<td>ذئب</td>
								</tr>
								<tr>
									<td>zebra</td>
									<td>zèbre</td>
									<td>حمار الوحش</td>
								</tr>

								<tr>
									<td class="soustitre">Aquatic animals</td>
									<td class="soustitre">Animaux aquatiques</td>
									<td class="soustitre">الحيوانات المائية</td>
								</tr>
								<tr>
									<td>anchovy</td>
									<td>anchois</td>
									<td>أنشوفة</td>
								</tr>
								<tr>
									<td>bluefin tune</td>
									<td>thon rouge</td>
									<td>التونة الحمراء</td>
								</tr>
								<tr>
									<td>bonito</td>
									<td>bonite</td>
									<td>بونيتو</td>
								</tr>
								<tr>
									<td>bull shark</td>
									<td>requin bouledog</td>
									<td>بلدغ القرش</td>
								</tr>
								<tr>
									<td>catfish</td>
									<td>poisson chat</td>
									<td>سمك السلور</td>
								</tr>
								<tr>
									<td>clam</td>
									<td>palourde</td>
									<td>البطلينوس</td>
								</tr>
								<tr>
									<td>clownfish</td>
									<td>poisson clown</td>
									<td>أسماك المهرج</td>
								</tr>
								<tr>
									<td>cod</td>
									<td>morue</td>
									<td>سمك القد</td>
								</tr>
								<tr>
									<td>coral</td>
									<td>corail</td>
									<td>مرجان</td>
								</tr>
								<tr>
									<td>coral reef</td>
									<td>récif coralien</td>
									<td>الشعاب المرجانية</td>
								</tr>
								<tr>
									<td>crab</td>
									<td>crabe</td>
									<td>سلطعون</td>
								</tr>
								<tr>
									<td>crawfish</td>
									<td>écrevisse</td>
									<td>جراد البحر</td>
								</tr>
								<tr>
									<td>cuttlefish</td>
									<td>seiche</td>
									<td>الحبار</td>
								</tr>
								<tr>
									<td>dolphin</td>
									<td>dauphin</td>
									<td>دلفين</td>
								</tr>
								<tr>
									<td>eel</td>
									<td>anguille</td>
									<td>الجريث</td>
								</tr>
								<tr>
									<td>flying fish</td>
									<td>poisson volant</td>
									<td>السمك الطائر</td>
								</tr>
								<tr>
									<td>great white shark</td>
									<td>grand requin blanc</td>
									<td>القرش الابيض الكبير</td>
								</tr>
								<tr>
									<td>hammerhead shard</td>
									<td>requin marteau</td>
									<td>قرش المطرقة</td>
								</tr>
								<tr>
									<td>herring</td>
									<td>hareng</td>
									<td>سمك مملح</td>
								</tr>
								<tr>
									<td>humpback whale</td>
									<td>baleine à bosse</td>
									<td>حوت الأحدب</td>
								</tr>
								<tr>
									<td>jellyfish</td>
									<td>méduse</td>
									<td>قنديل البحر</td>
								</tr>
								<tr>
									<td>kelp</td>
									<td>algue géante</td>
									<td>الأعشاب البحرية العملاقة</td>
								</tr>
								<tr>
									<td>lobster</td>
									<td>homard</td>
									<td>الكركند</td>
								</tr>
								<tr>
									<td>mackerel</td>
									<td>maquereau</td>
									<td>ماكريل</td>
								</tr>
								<tr>
									<td>manatee</td>
									<td>dugong</td>
									<td>الأطوم</td>
								</tr>
								<tr>
									<td>manta ray</td>
									<td>raie manta</td>
									<td>مانتا راي</td>
								</tr>
								<tr>
									<td>moray eel</td>
									<td>murène</td>
									<td>موراي ثعبان البحر</td>
								</tr>
								<tr>
									<td>mussel</td>
									<td>moule</td>
									<td>بلح البحر</td>
								</tr>
								<tr>
									<td>narwhal</td>
									<td>narval</td>
									<td>المرقط</td>
								</tr>
								<tr>
									<td>octopus</td>
									<td>poulpe</td>
									<td>أخطبوط</td>
								</tr>
								<tr>
									<td>orca</td>
									<td>orque</td>
									<td>اوركا</td>
								</tr>
								<tr>
									<td>oyster</td>
									<td>huître</td>
									<td>محار</td>
								</tr>
								<tr>
									<td>plankton</td>
									<td>plancton</td>
									<td>العوالق</td>
								</tr>
								<tr>
									<td>puffer fish</td>
									<td>poisson globe</td>
									<td>سمكة منتفخة</td>
								</tr>
								<tr>
									<td>salmon</td>
									<td>saumon</td>
									<td>السلمون</td>
								</tr>
								<tr>
									<td>saltwater crocodile</td>
									<td>crocodile marin</td>
									<td>التمساح البحري</td>
								</tr>
								<tr>
									<td>scallop</td>
									<td>coquille saint-jaque</td>
									<td>قوقعة سان جاك</td>
								</tr>
								<tr>
									<td>sea anemone</td>
									<td>anémone de mer</td>
									<td>نعمان البحر</td>
								</tr>
								<tr>
									<td>sea cucumber</td>
									<td>concombre de mer</td>
									<td>خيار البحر</td>
								</tr>
								<tr>
									<td>sea lion</td>
									<td>otarie</td>
									<td>أسد البحر</td>
								</tr>
								<tr>
									<td>sea shell</td>
									<td>coquillage</td>
									<td>محارة</td>
								</tr>
								<tr>
									<td>sea turtle</td>
									<td>tortue de mer</td>
									<td>سلحفاة البحر</td>
								</tr>
								<tr>
									<td>seabass</td>
									<td>bar</td>
									<td>باس البحر</td>
								</tr>
								<tr>
									<td>seahorse</td>
									<td>hippocampe</td>
									<td>حصان البحر</td>
								</tr>
								<tr>
									<td>seal</td>
									<td>phoque</td>
									<td>فقمة</td>
								</tr>
								<tr>
									<td>seaweed</td>
									<td>algue</td>
									<td>عشب بحري</td>
								</tr>
								<tr>
									<td>shark</td>
									<td>requin</td>
									<td>القرش</td>
								</tr>
								<tr>
									<td>shrimp</td>
									<td>crevette</td>
									<td>جمبري</td>
								</tr>
								<tr>
									<td>sperm whale</td>
									<td>cachalot</td>
									<td>حوت العنبر</td>
								</tr>
								<tr>
									<td>sea sponge</td>
									<td>éponge de mer</td>
									<td>اسفنجة البحر</td>
								</tr>
								<tr>
									<td>squid</td>
									<td>calamar</td>
									<td>حبار</td>
								</tr>
								<tr>
									<td>starfish</td>
									<td>étoile de mer</td>
									<td>نجم البحر</td>
								</tr>
								<tr>
									<td>stingray</td>
									<td>raie</td>
									<td>سمك الشفنين</td>
								</tr>
								<tr>
									<td>sunfish</td>
									<td>poisson lune</td>
									<td>سمكة القمر</td>
								</tr>
								<tr>
									<td>swordfish</td>
									<td>espadon</td>
									<td>سمك أبو سيف</td>
								</tr>
								<tr>
									<td>tiger shark</td>
									<td>requin tigre</td>
									<td>قرش النمر</td>
								</tr>
								<tr>
									<td>trout</td>
									<td>truite</td>
									<td>السلمون المرقط</td>
								</tr>
								<tr>
									<td>tuna</td>
									<td>thon</td>
									<td>تونة</td>
								</tr>
								<tr>
									<td>urchin</td>
									<td>oursin</td>
									<td>قنفذ البحر</td>
								</tr>
								<tr>
									<td>walrus</td>
									<td>morse</td>
									<td>حصان البحر</td>
								</tr>
								<tr>
									<td>whale</td>
									<td>baleine</td>
									<td>الحوت</td>
								</tr>
								<tr>
									<td>whaleshark</td>
									<td>requin-baleine</td>
									<td>القرش الحوت</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/oiseauxlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Oiseaux<?php endif; if($langue === 'english'): ?>Birds<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="oiseaux.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/insectelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Insectes<?php endif; if($langue === 'english'): ?>Insects<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="insecte.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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


		