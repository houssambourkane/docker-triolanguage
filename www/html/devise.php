<?php
		$titrefr = "LES DEVISES";
		$titreang = "CURRENCIES";
		$bg = "./assets/img/bgtheme/devisebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Les devises<?php endif; if($langue === 'english'): ?>The currencies<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des devises en Anglais - Français - Arabe">
		<meta name="keywords" content="marché, bourse, boursier, capitaux, trading, trader, signal, signaux, devise, currency, anglais, français, arabe, vocabulaire, bourse, stock market, monnaie, money, argent, capital, étrangère, conversion, convertir">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Les devises<?php endif; if($langue === 'english'): ?>The currencies<?php endif; ?></h1>

					<div class="trait_dessus"><hr></div>

		       <?php include('title_features.php'); ?>

					</div>

					<div class="table_simil">
		      	<table class="table table-hover col-md-3 w-75" style="margin-top:30px; margin-bottom: 30px;background-color: white;" id="tbl">
							<tr>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Symboles<?php endif; if($langue === 'english'): ?>Symbols<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Anglais<?php endif; if($langue === 'english'): ?>English<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th2_couleur ?>;"><?php if($langue === 'french'): ?>Français<?php endif; if($langue === 'english'): ?>French<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th3_couleur ?>;"><?php if($langue === 'french'): ?>Arabe<?php endif; if($langue === 'english'): ?>Arabic<?php endif; ?></th>
							</tr>
						<tr>
									<td>دج</td>
									<td>Algerian dinar</td>
									<td>Dinar algérien</td>
									<td>دينار جزائري</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Argentine peso</td>
									<td>Peso argentin</td>
									<td>بيزو أرجنتيني</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Australien dollar</td>
									<td>Dollar australien</td>
									<td>دولار الأسترالي</td>
								</tr>
								<tr>	
									<td>B$</td>
									<td>Bahamian dollar</td>
									<td>Dollar bahaméen</td>
									<td>دولار البهامي</td>
								</tr>
								<tr>	
									<td>.د.ب</td>
									<td>Bahraini dinar</td>
									<td>Dinar bahreïni</td>
									<td>دينار بحريني</td>
								</tr>
								<tr>
									<td>BD$</td>
									<td>Bermudian dollar</td>
									<td>Dollar des Bermudes</td>
									<td>برمودا الدولار</td>
								</tr>
								<tr>
									<td>B$</td>
									<td>Brunei dollar</td>
									<td>Dollar de Brunei</td>
									<td>دولار بروناي</td>
								</tr>
								<tr>
									<td>лв</td>
									<td>Bulgarian lev</td>
									<td>Lev bulgare</td>
									<td>ليف بلغاري</td>
								</tr>
								<tr>
									<td>C$</td>
									<td>Canadian dollar</td>
									<td>Dollar canadien</td>
									<td>دولار الكندي</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Cayman islands dollar</td>
									<td>Dollar des îles Caïmans</td>
									<td>دولار جزر كايمان</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Chilean peso</td>
									<td>peso chilien</td>
									<td>بيزو التشيلي</td>
								</tr>
								<tr>	
									<td>$</td>
									<td>Colombian peso</td>
									<td>Peso colombien</td>
									<td>بيزو الكولومبي</td>
								</tr>
								<tr>
									<td>$MN</td>
									<td>Cuban peso</td>
									<td>Peso cubain</td>
									<td>بيزو الكوبي</td>
								</tr>
								<tr>
									<td>Kč</td>
									<td>Czech koruna</td>
									<td>Couronne tchèque</td>
									<td>كرونة تشيكية</td>
								</tr>
								<tr>
									<td>kr</td>
									<td>Danish krone</td>
									<td>Couronne danoise</td>
									<td>كرونة دنماركية</td>
								</tr>
								<tr>
									<td>RD$</td>
									<td>Dominican peso</td>
									<td>Peso dominicain</td>
									<td>بيزو الدومينيكان</td>
								</tr>
								<tr>
									<td>ج.م</td>
									<td>Egyptian pound</td>
									<td>Livre égyptienne</td>
									<td>جنيه المصري</td>
								</tr>
								<tr>
									<td>€</td>
									<td>Euro</td>
									<td>Euro</td>
									<td>اليورو</td>
								</tr>
								<tr>
									<td>£</td>
									<td>Gibraltar pound</td>
									<td>Livre de Gibraltar</td>
									<td>جنيه جبل طارق</td>
								</tr>
								<tr>
									<td>GY$</td>
									<td>Guyana dollar</td>
									<td>Dollar de Guyane</td>
									<td>دولار من غيانا</td>
								</tr>
								<tr>
									<td>HK$</td>
									<td>Hong kong dollar</td>
									<td>Dollar de hong-kong</td>
									<td>دولار هونج كونج</td>
								</tr>
								<tr>
									<td>kr</td>
									<td>Icelandic krona</td>
									<td>couronne islandaise</td>
									<td>كرونة أيسلندية</td>
								</tr>
								<tr>
									<td>﷼</td>
									<td>Iranian rial</td>
									<td>rial iranien</td>
									<td>ريال الايراني</td>
								</tr>
								<tr>
									<td>ع.د</td>
									<td>Iraqi dinar</td>
									<td>dinar iraquien</td>
									<td>دينار عراقي</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Jamaican dollar</td>
									<td>Dollar jamaïcain</td>
									<td>دولار الجامايكي</td>
								</tr>
								<tr>
									<td>JOD</td>
									<td>Jordanian dollar</td>
									<td>Dollar jordanien</td>
									<td>دولار الأردني</td>
								</tr>
								<tr>
									<td>د.ك</td>
									<td>Kuwaiti dinar</td>
									<td>dinar koweïtien</td>
									<td>دينار كويتي</td>
								</tr>
								<tr>
									<td>ل.ل</td>
									<td>Lebanese pound</td>
									<td>Livre libanaise</td>
									<td>ليرة اللبنانية</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Liberian dollar</td>
									<td>Dollar libérien</td>
									<td>دولار ليبيري</td>
								</tr>
								<tr>
									<td>LD</td>
									<td>Libyan dinar</td>
									<td>Dinar libyen</td>
									<td>دينار الليبي</td>
								</tr>
								<tr>
									<td>$</td>
									<td>Mexican peso</td>
									<td>Peso mexicain</td>
									<td>بيزو المكسيكي</td>
								</tr>
								<tr>
									<td>د.م.</td>
									<td>Moroccan dirham</td>
									<td>Dirham marocain</td>
									<td>درهم المغربي</td>
								</tr>
								<tr>
									<td>₪</td>
									<td>New israeli shekel</td>
									<td>Nouveau shekel israélien</td>
									<td>شيكل الاسرائيلي الجديد</td>
								</tr>
								<tr>
									<td>$</td>
									<td>New zealand dollar</td>
									<td>Dollar néo-zélandais</td>
									<td>دولار النيوزيلندي</td>
								</tr>
								<tr>
									<td>₩</td>
									<td>North korean won</td>
									<td>Won de la corée du nord</td>
									<td>كوريا الشمالية وون</td>
								</tr>
								<tr>
									<td>kr</td>
									<td>Norwegian krone</td>
									<td>Couronne norvégienne</td>
									<td>كرونة نرويجية</td>
								</tr>
								<tr>
									<td>₱</td>
									<td>Philippine peso</td>
									<td>Peso philippin</td>
									<td>بيزو فلبيني</td>
								</tr>
								<tr>
									<td>£</td>
									<td>pound sterling</td>
									<td>livre sterling</td>
									<td>جنيه الاسترليني</td>
								</tr>
								<tr>
									<td>zł</td>
									<td>Pzloty</td>
									<td>Zloty</td>
									<td>زلوتي</td>
								</tr>
								<tr>
									<td>ر.ق</td>
									<td>Qatari riyal</td>
									<td>Riyal du Qatar</td>
									<td>ريال من قطر</td>
								</tr>
								<tr>	
									<td>ر.ع.</td>
									<td>Rial omani</td>
									<td>Rial omani</td>
									<td>ريال العماني</td>
								</tr>
								<tr>
									<td>руб</td>
									<td>Russian ruble</td>
									<td>Rouble russe</td>
									<td>روبل الروسي</td>
								</tr>
								<tr>
									<td>ر.س</td>
									<td>Saudi riyal</td>
									<td>Riyal saoudien</td>
									<td>ريال سعودي</td>
								</tr>
								<tr>
									<td>РСД</td>
									<td>Serbian dinar</td>
									<td>Dinar serbe</td>
									<td>دينار الصربي</td>
								</tr>
								<tr>
									<td>S$</td>
									<td>Singapore dollar</td>
									<td>Dollar de Singapour</td>
									<td>دولار سنغافورة</td>
								</tr>
								<tr>
									<td>Sk</td>
									<td>Slovak koruna</td>
									<td>Couronne slovaque</td>
									<td>كورونا سلوفاكية</td>
								</tr>
								<tr>
									<td>₩</td>
									<td>South korean won</td>
									<td>Won de la corée du sud</td>
									<td>كوريا الجنوبية وون </td>
								</tr>
								<tr>
									<td>kr</td>
									<td>Swedish krona</td>
									<td>Couronne suédoise</td>
									<td>كرونة سويدية</td>
								</tr>
								<tr>
									<td>CHF</td>
									<td>Swiss franc</td>
									<td>franc suisse</td>
									<td>فرنك السويسري</td>
								</tr>
								<tr>
									<td>SYP</td>
									<td>Syrian pound</td>
									<td>livre syrienne</td>
									<td>ليرة السورية</td>
								</tr>
								<tr>
									<td>د.ت</td>
									<td>Tunisian dinar</td>
									<td>Dinar tunisien</td>
									<td>دينار التونسي</td>
								</tr>
								<tr>
									<td>YTL</td>
									<td>Turkish lira</td>
									<td>Livre turque</td>
									<td>ليرة التركية</td>
								</tr>
								<tr>	
									<td>د.إ</td>
									<td>UAE dirham</td>
									<td>Dirham des émirats arabes unis</td>
									<td>درهم الإمارات العربية المتحدة</td>
								</tr>
								<tr>
									<td>$</td>
									<td>US Dollar</td>
									<td>Dollar américain</td>
									<td>دولار الأمريكي</td>
								</tr>
								<tr>
									<td>¥</td>
									<td>yen</td>
									<td>yen</td>
									<td>ين</td>
								</tr>
								<tr>
									<td>¥</td>
									<td>Yuan</td>
									<td>yuan</td>
									<td>يوان</td>
								</tr>
								</table>
						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/banquelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Banque<?php endif; if($langue === 'english'): ?>Banking<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="banque.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/financelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Finance<?php endif; if($langue === 'english'): ?>Finance<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="finance.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
