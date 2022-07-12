<?php
		$titrefr = "PAYS";
		$titreang = "COUNTRIES";
		$bg = "./assets/img/bgtheme/paysbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Pays<?php endif; if($langue === 'english'): ?>Countries<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des pays en Anglais - Français - Arabe">
		<meta name="keywords" content="pays, countries, continent, monde, world, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Pays<?php endif; if($langue === 'english'): ?>Countries<?php endif; ?></h1>

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
									<td class="soustitre">Continents</td>
									<td class="soustitre">continents</td>
									<td class="soustitre">القارات</td>
								</tr>
								<tr>
									<td>Africa</td>
									<td>afrique</td>
									<td>أفريقيا</td>
								</tr>
								<tr>
									<td>North America</td>
									<td>amérique du nord </td>
									<td>امريكا الشمالية</td>
								</tr>
								<tr>
									<td>South America</td>
									<td>amérique du sud</td>
									<td>امريكا الجنوبية</td>
								</tr>
								<tr>
									<td>Europe</td>
									<td>europe</td>
									<td>أوروبا</td>
								</tr>
								<tr>
									<td>Oceania</td>
									<td>Océanie</td>
									<td>أوقيانوسيا</td>
								</tr>
								<tr>
									<td>Asia</td>
									<td>asie</td>
									<td>آسيا</td>
								</tr>
								<tr>
									<td>Antarctic</td>
									<td>Antarctique</td>
									<td>أنتاركتيكا</td>
								</tr>
							
								<tr>
									<td class="soustitre">Countries</td>
									<td class="soustitre">Pays</td>
									<td class="soustitre">الدول</td>
								</tr>
								<tr>
									<td>Afghanistan</td>
									<td>afghanistan</td>
									<td>أفغانستان</td>
								</tr>
								<tr>
									<td>Albania</td>
									<td>albanie</td>
									<td>ألبانيا</td>
								</tr>
								<tr>
									<td>Algeria</td>
									<td>algérie</td>
									<td>الجزائر</td>
								</tr>
								<tr>
									<td>Angola</td>
									<td>angola</td>
									<td>أنغولا</td>
								</tr>
								<tr>
									<td>Argentina</td>
									<td>argentine</td>
									<td>الأرجنتين</td>
								</tr>
								<tr>
									<td>Armenia</td>
									<td>arménie</td>
									<td>أرمينيا</td>
								</tr>
								<tr>
									<td>Australia</td>
									<td>australie</td>
									<td>أستراليا</td>
								</tr>
								<tr>
									<td>Austria</td>
									<td>australie</td>
									<td>أستراليا</td>
								</tr>
								<tr>
									<td>Austria</td>
									<td>Autriche</td>
									<td>النمسا</td>
								</tr>
								<tr>
									<td>Azerbaijan</td>
									<td>azerbaïdjan</td>
									<td>أذربيجان</td>
								</tr>
								<tr>
									<td>Bahamas</td>
									<td>bahamas</td>
									<td>الباهاما</td>
								</tr>
								<tr>
									<td>Bahrain</td>
									<td>bahreïn</td>
									<td>البحرين</td>
								</tr>
								<tr>
									<td>Bangladesh</td>
									<td>bangladesh</td>
									<td>بنغلاديش</td>
								</tr>
								<tr>
									<td>Belarus</td>
									<td>biélorussie</td>
									<td>روسيا البيضاء</td>
								</tr>
								<tr>
									<td>Belgium</td>
									<td>Belgique</td>
									<td>بلجيكا</td>
								</tr>
								<tr>
									<td>Belize</td>
									<td>belize</td>
									<td>بليز</td>
								</tr>
								<tr>
									<td>Benin</td>
									<td>bénin</td>
									<td>بنين</td>
								</tr>
								<tr>
									<td>Bhutan</td>
									<td>bhoutan</td>
									<td>بوتان</td>
								</tr>
								<tr>
									<td>Bolivia</td>
									<td>bolivie</td>
									<td>بوليفيا</td>
								</tr>
								<tr>
									<td>Bosnia</td>
									<td>bosnie</td>
									<td>البوسنة</td>
								</tr>
								<tr>
									<td>Botswana</td>
									<td>botswana</td>
									<td>بوتسوانا</td>
								</tr>
								<tr>
									<td>Brazil</td>
									<td>brésil</td>
									<td>البرازيل</td>
								</tr>
								<tr>
									<td>Brunei</td>
									<td>brunei</td>
									<td>بروناي</td>
								</tr>
								<tr>
									<td>Bulgaria</td>
									<td>bulgarie</td>
									<td>بلغاريا</td>
								</tr>
								<tr>
									<td>Cameroon</td>
									<td>cameroun</td>
									<td>الكاميرون</td>
								</tr>
								<tr>
									<td>Canada</td>
									<td>canada</td>
									<td>كندا</td>
								</tr>
								<tr>
									<td>Cape verde</td>
									<td>cap vert</td>
									<td>الرأس الأخضر</td>
								</tr>
								<tr>
									<td>Chad</td>
									<td>tchad</td>
									<td>تشاد</td>
								</tr>
								<tr>
									<td>Chile</td>
									<td>chili</td>
									<td>تشيلي</td>
								</tr>
								<tr>
									<td>China</td>
									<td>chine</td>
									<td>الصين</td>
								</tr>
								<tr>
									<td>Colombia</td>
									<td>colombie</td>
									<td>كولومبيا</td>
								</tr>
								<tr>
									<td>Comoros</td>
									<td>comores</td>
									<td>جزر القمر</td>
								</tr>
								<tr>
									<td>Congo</td>
									<td>Congo</td>
									<td>الكونغو</td>
								</tr>
								<tr>
									<td>Cook islands</td>
									<td>île cook</td>
									<td>جزر كوك</td>
								</tr>
								<tr>
									<td>Costa rica</td>
									<td>costa rica</td>
									<td>كوستا ريكا</td>
								</tr>
								<tr>
									<td>Croatia</td>
									<td>croatie</td>
									<td>كرواتيا</td>
								</tr>
								<tr>
									<td>Cuba</td>
									<td>cuba</td>
									<td>كوبا</td>
								</tr>
								<tr>
									<td>Cyprus</td>
									<td>chypre</td>
									<td>قبرص</td>
								</tr>
								<tr>
									<td>Czech republic</td>
									<td>république tchèque</td>
									<td>جمهورية التشيك</td>
								</tr>
								<tr>
									<td>Denmark</td>
									<td>danemark</td>
									<td>الدنمارك</td>
								</tr>
								<tr>
									<td>Djibouti</td>
									<td>Djibouti</td>
									<td>جيبوتي</td>
								</tr>
								<tr>
									<td>Dominican republic</td>
									<td>république dominicaine</td>
									<td>جمهورية الدومنيكان</td>
								</tr>
								<tr>
									<td>Ecuador</td>
									<td>équateur</td>
									<td>الإكوادور</td>
								</tr>
								<tr>
									<td>Egypt</td>
									<td>égypte</td>
									<td>مصر</td>
								</tr>
								<tr>
									<td>El salvador</td>
									<td>salvador</td>
									<td>السلفادور</td>
								</tr>
								<tr>
									<td>Equatorial guinea</td>
									<td>guinée équatoriale</td>
									<td>غينيا الإستوائية</td>
								</tr>
								<tr>
									<td>Eritrea</td>
									<td>Érythrée</td>
									<td>إريتريا</td>
								</tr>
								<tr>
									<td>Estonia</td>
									<td>estonie</td>
									<td>استونيا</td>
								</tr>
								<tr>
									<td>Ethiopia</td>
									<td>éthiopie</td>
									<td>أثيوبيا</td>
								</tr>
								<tr>
									<td>Fiji</td>
									<td>îles Fidji</td>
									<td>فيجي</td>
								</tr>
								<tr>
									<td>Finland</td>
									<td>finlande</td>
									<td>فنلندا</td>
								</tr>
								<tr>
									<td>France</td>
									<td>France</td>
									<td>فرنسا</td>
								</tr>
								<tr>
									<td>Gabon</td>
									<td>Gabon</td>
									<td>الغابون</td>
								</tr>
								<tr>
									<td>Gambia</td>
									<td>gambie</td>
									<td>غامبيا</td>
								</tr>
								<tr>
									<td>Georgia</td>
									<td>géorgie</td>
									<td>جورجيا</td>
								</tr>
								<tr>
									<td>Germany</td>
									<td>Allemagne</td>
									<td>ألمانيا</td>
								</tr>
								<tr>
									<td>Ghana</td>
									<td>Ghana</td>
									<td>غانا</td>
								</tr>
								<tr>
									<td>Greece</td>
									<td>grèce</td>
									<td>اليونان</td>
								</tr>
								<tr>
									<td>Grenada</td>
									<td>grenade</td>
									<td>غرينادا</td>
								</tr>
								<tr>
									<td>Guatemala</td>
									<td>guatemala</td>
									<td>غواتيمالا</td>
								</tr>
								<tr>
									<td>Guinea</td>
									<td>guinée</td>
									<td>غينيا</td>
								</tr>
								<tr>
									<td>Guyana</td>
									<td>guyane</td>
									<td>غيانا</td>
								</tr>
								<tr>
									<td>Haiti</td>
									<td>haiti</td>
									<td>هايتي</td>
								</tr>
								<tr>
									<td>Honduras</td>
									<td>honduras</td>
									<td>هندوراس</td>
								</tr>
								<tr>
									<td>Hungary</td>
									<td>hongrie</td>
									<td>هنغاريا</td>
								</tr>
								<tr>
									<td>Iceland</td>
									<td>islande</td>
									<td>أيسلندا</td>
								</tr>
								<tr>
									<td>India</td>
									<td>inde</td>
									<td>الهند</td>
								</tr>
								<tr>
									<td>Indonesia</td>
									<td>indonésie</td>
									<td>أندونيسيا</td>
								</tr>
								<tr>
									<td>Iran</td>
									<td>iran</td>
									<td>إيران</td>
								</tr>
								<tr>
									<td>Iraq</td>
									<td>iraq</td>
									<td>العراق</td>
								</tr>
								<tr>
									<td>Ireland</td>
									<td>Irlande</td>
									<td>أيرلندا</td>
								</tr>
								<tr>
									<td>Israel</td>
									<td>israël</td>
									<td>إسرائيل</td>
								</tr>
								<tr>
									<td>Italy</td>
									<td>Italie</td>
									<td>إيطاليا</td>
								</tr>
								<tr>
									<td>Ivory coast</td>
									<td>côte d'ivoire</td>
									<td>ساحل العاج</td>
								</tr>
								<tr>
									<td>Jamaica</td>
									<td>jamaïque</td>
									<td>جامايكا</td>
								</tr>
								<tr>
									<td>Japan</td>
									<td>japon</td>
									<td>اليابان</td>
								</tr>
								<tr>
									<td>Jordan</td>
									<td>jordanie</td>
									<td>الأردن</td>
								</tr>
								<tr>
									<td>Kazakhstan</td>
									<td>kazakhstan</td>
									<td>كازاخستان</td>
								</tr>
								<tr>
									<td>Kenya</td>
									<td>kenya</td>
									<td>كينيا</td>
								</tr>
								<tr>
									<td>Kuwait</td>
									<td>koweït</td>
									<td>الكويت</td>
								</tr>
								<tr>
									<td>Kyrgyzstan</td>
									<td>kirghizstan</td>
									<td>قيرغيزستان</td>
								</tr>
								<tr>
									<td>Laos</td>
									<td>laos</td>
									<td>لاوس</td>
								</tr>
								<tr>
									<td>Latvia</td>
									<td>lettonie</td>
									<td>لاتفيا</td>
								</tr>
								<tr>
									<td>Lebanon</td>
									<td>liban</td>
									<td>لبنان</td>
								</tr>
								<tr>
									<td>Lesotho</td>
									<td>lesotho</td>
									<td>ليسوتو</td>
								</tr>
								<tr>
									<td>Libya</td>
									<td>libye</td>
									<td>ليبيا</td>
								</tr>
								<tr>
									<td>Lithuania</td>
									<td>lituanie</td>
									<td>ليتوانيا</td>
								</tr>
								<tr>
									<td>Luxembourg</td>
									<td>Luxembourg</td>
									<td>لوكسمبورغ</td>
								</tr>
								<tr>
									<td>Macedonia</td>
									<td>macédoine</td>
									<td>مقدونيا</td>
								</tr>
								<tr>
									<td>Madagascar</td>
									<td>madagascar</td>
									<td>مدغشقر</td>
								</tr>
								<tr>
									<td>Malawi</td>
									<td>malawi</td>
									<td>مالاوي</td>
								</tr>
								<tr>
									<td>Malaysia</td>
									<td>malaisie</td>
									<td>ماليزيا</td>
								</tr>
								<tr>
									<td>Maldives</td>
									<td>maldives</td>
									<td>جزر المالديف</td>
								</tr>
								<tr>
									<td>Mali</td>
									<td>mali</td>
									<td>مالي</td>
								</tr>
								<tr>
									<td>Malta</td>
									<td>malte</td>
									<td>مالطا</td>
								</tr>
								<tr>
									<td>Marshall islands</td>
									<td>îles marshall</td>
									<td>جزر مارشال</td>
								</tr>
								<tr>
									<td>Mauritania</td>
									<td>mauritanie</td>
									<td>موريتانيا</td>
								</tr>
								<tr>
									<td>Mauritius</td>
									<td>maurice</td>
									<td>موريشيوس</td>
								</tr>
								<tr>
									<td>Mexico</td>
									<td>Mexique</td>
									<td>المكسيك</td>
								</tr>
								<tr>
									<td>Micronesia</td>
									<td>micronésie</td>
									<td>ميكرونيزيا</td>
								</tr>
								<tr>
									<td>Moldova</td>
									<td>moldavie</td>
									<td>مولدوفا</td>
								</tr>
								<tr>
									<td>Monaco</td>
									<td>Monaco</td>
									<td>موناكو</td>
								</tr>
								<tr>
									<td>Mongolia</td>
									<td>mongolie</td>
									<td>منغوليا</td>
								</tr>
								<tr>
									<td>Morocco</td>
									<td>maroc</td>
									<td>المغرب</td>
								</tr>
								<tr>
									<td>Mozambique</td>
									<td>Mozambique</td>
									<td>موزمبيق</td>
								</tr>
								<tr>
									<td>Namibia</td>
									<td>namibie</td>
									<td>ناميبيا</td>
								</tr>
								<tr>
									<td>Nepal</td>
									<td>népal</td>
									<td>نيبال</td>
								</tr>
								<tr>
									<td>Netherlands</td>
									<td>pays-bas</td>
									<td>هولندا</td>
								</tr>
								<tr>
									<td>New zealand</td>
									<td>nouvelle-zélande</td>
									<td>هولندا</td>
								</tr>
								<tr>
									<td>New zealand</td>
									<td>nouvelle-zélande</td>
									<td>نيوزيلاندا</td>
								</tr>
								<tr>
									<td>Nicaragua</td>
									<td>Nicaragua</td>
									<td>نيكاراغوا</td>
								</tr>
								<tr>
									<td>Niger</td>
									<td>Niger</td>
									<td>النيجر</td>
								</tr>
								<tr>
									<td>Nigeria</td>
									<td>Nigeria</td>
									<td>نيجيريا</td>
								</tr>
								<tr>
									<td>North korea</td>
									<td>corée du nord</td>
									<td>كوريا الشمالية</td>
								</tr>
								<tr>
									<td>Norway</td>
									<td>norvège</td>
									<td>النرويج</td>
								</tr>
								<tr>
									<td>Oman</td>
									<td>oman</td>
									<td>عمان</td>
								</tr>
								<tr>
									<td>Pakistan</td>
									<td>pakistan</td>
									<td>باكستان</td>
								</tr>
								<tr>
									<td>Palau</td>
									<td>Palau</td>
									<td>بالاو</td>
								</tr>
								<tr>
									<td>Panama</td>
									<td>Panama</td>
									<td>بناما</td>
								</tr>
								<tr>
									<td>Papua New Guinea</td>
									<td>papouasie Nouvelle-Guinée</td>
									<td>بابوا غينيا الجديدة</td>
								</tr>
								<tr>
									<td>Paraguay</td>
									<td>paraguay</td>
									<td>باراغواي</td>
								</tr>
								<tr>
									<td>Peru</td>
									<td>pérou</td>
									<td>بيرو</td>
								</tr>
								<tr>
									<td>Philippines</td>
									<td>Philippines</td>
									<td>الفلبين</td>
								</tr>
								<tr>
									<td>Poland</td>
									<td>pologne</td>
									<td>بولندا</td>
								</tr>
								<tr>
									<td>Portugal</td>
									<td>Portugal</td>
									<td>البرتغال</td>
								</tr>
								<tr>
									<td>Qatar</td>
									<td>Qatar</td>
									<td>قطر</td>
								</tr>
								<tr>
									<td>Romania</td>
									<td>roumanie</td>
									<td>رومانيا</td>
								</tr>
								<tr>
									<td>Russia</td>
									<td>russie</td>
									<td>روسيا</td>
								</tr>
								<tr>
									<td>Rwanda</td>
									<td>Rwanda</td>
									<td>رواندا</td>
								</tr>
								<tr>
									<td>Samoa</td>
									<td>Samoa</td>
									<td>ساموا</td>
								</tr>
								<tr>
									<td>Saudi Arabia</td>
									<td>Arabie Saoudite</td>
									<td>المملكة العربية السعودية</td>
								</tr>
								<tr>
									<td>Senegal</td>
									<td>sénégal</td>
									<td>السنغال</td>
								</tr>
								<tr>
									<td>Seychelles</td>
									<td>Seychelles</td>
									<td>سيشيل</td>
								</tr>
								<tr>
									<td>Sierra Leone</td>
									<td>Sierra Leone</td>
									<td>سيرا ليون</td>
								</tr>
								<tr>
									<td>Singapore</td>
									<td>Singapor</td>
									<td>سنغافورة</td>
								</tr>
								<tr>
									<td>Slovakia</td>
									<td>slovaquie</td>
									<td>سلوفاكيا</td>
								</tr>
								<tr>
									<td>Slovenia</td>
									<td>slovénie</td>
									<td>سلوفينيا</td>
								</tr>
								<tr>
									<td>Solomon islands</td>
									<td>îles salomon</td>
									<td>جزر سليمان</td>
								</tr>
								<tr>
									<td>Somalia</td>
									<td>somalie</td>
									<td>الصومال</td>
								</tr>
								<tr>
									<td>South Africa</td>
									<td>afrique du sud</td>
									<td>جنوب أفريقيا</td>
								</tr>
								<tr>
									<td>South Korea</td>
									<td>corée du sud</td>
									<td>كوريا الجنوبية</td>
								</tr>
								<tr>
									<td>Spain</td>
									<td>Espagne</td>
									<td>إسبانيا</td>
								</tr>
								<tr>
									<td>Sri Lanka</td>
									<td>Sri Lanka</td>
									<td>سيريلانكا</td>
								</tr>
								<tr>
									<td>Sudan</td>
									<td>soudan</td>
									<td>السودان</td>
								</tr>
								<tr>
									<td>Suriname</td>
									<td>Suriname</td>
									<td>سورينام</td>
								</tr>
								<tr>
									<td>Swaziland</td>
									<td>swaziland/Eswatini</td>
									<td>سوازيلاند</td>
								</tr>
								<tr>
									<td>Sweden</td>
									<td>suède</td>
									<td>السويد</td>
								</tr>
								<tr>
									<td>Switzerland</td>
									<td>suisse</td>
									<td>سويسرا</td>
								</tr>
								<tr>
									<td>Syria</td>
									<td>Syrie</td>
									<td>سوريا</td>
								</tr>
								<tr>
									<td>Tajikistan</td>
									<td>tajikistan</td>
									<td>طاجيكستان</td>
								</tr>
								<tr>
									<td>Tanzania</td>
									<td>tanzanie</td>
									<td>تنزانيا</td>
								</tr>
								<tr>
									<td>Thailand</td>
									<td>thaïlande</td>
									<td>تايلاند</td>
								</tr>
								<tr>
									<td>Togo</td>
									<td>Togo</td>
									<td>توجو</td>
								</tr>
								<tr>
									<td>Tonga</td>
									<td>Tonga</td>
									<td>تونغا</td>
								</tr>
								<tr>
									<td>Tunisia</td>
									<td>tunisie</td>
									<td>تونس</td>
								</tr>
								<tr>
									<td>Turkey</td>
									<td>turquie</td>
									<td>تركيا</td>
								</tr>
								<tr>
									<td>Uganda</td>
									<td>ouganda</td>
									<td>أوغندا</td>
								</tr>
								<tr>
									<td>Ukraine</td>
									<td>Ukraine</td>
									<td>أوكرانيا</td>
								</tr>
								<tr>
									<td>United Arab Amirates</td>
									<td>Émirats arabes unis</td>
									<td>الإمارات العربية المتحدة</td>
								</tr>
								<tr>
									<td>United Kingdom</td>
									<td>Royaume-Uni</td>
									<td>المملكة المتحدة</td>
								</tr>
								<tr>
									<td>United States</td>
									<td>état-unis</td>
									<td>الولايات المتحدة</td>
								</tr>
								<tr>
									<td>Uruguay</td>
									<td>uruguay</td>
									<td>أوروغواي</td>
								</tr>
								<tr>
									<td>Uzbekistan</td>
									<td>ouzbékistan</td>
									<td>أوزبكستان</td>
								</tr>
								<tr>
									<td>Vanuatu</td>
									<td>Vanuatu</td>
									<td>فانواتو</td>
								</tr>
								<tr>
									<td>Venezuela</td>
									<td>Venezuela</td>
									<td>فنزويلا</td>
								</tr>
								<tr>
									<td>Vietnam</td>
									<td>Vietnam</td>
									<td>فيتنام</td>
								</tr>
								<tr>
									<td>Yemen</td>
									<td>yémen</td>
									<td>اليمن</td>
								</tr>
								<tr>
									<td>Yougoslavia</td>
									<td>yougoslavie</td>
									<td>يوغوسلافيا</td>
								</tr>
								<tr>
									<td>Zambia</td>
									<td>Zambie</td>
									<td>زامبيا</td>
								</tr>
								<tr>
									<td>Zimbabwe</td>
									<td>Zimbabwe</td>
									<td>زيمبابوي</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/geographielogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Géographie<?php endif; if($langue === 'english'): ?>Geography<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="geographie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		