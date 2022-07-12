<?php
		$titrefr = "MARIAGE";
		$titreang = "WEDDING";
		$bg = "./assets/img/bgtheme/mariagebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de mariage en Anglais - Français - Arabe">
		<meta name="keywords" content="mariage, wedding, bague, fête, cérémonie, fêter, party, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, prêtre, couple, époux, épouse, spouse, embrasser, kiss, marier">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></h1>

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
									<td>Asking for her hand in marriage</td>
									<td>demander sa main en mariage</td>
									<td>طلب يدها في الزواج</td>
								</tr>
								<tr>
									<td>Bouquet</td>
									<td>bouquet</td>
									<td>باقة أزهار</td>
								</tr>
								<tr>
									<td>Bow tie</td>
									<td>nœud papillon</td>
									<td>ربطة القوس</td>
								</tr>
								<tr>
									<td>Boyfriend</td>
									<td>petit ami/copain</td>
									<td>حبيب</td>
								</tr>
								<tr>
									<td>Bridal veil</td>
									<td>voile de mariée</td>
									<td>حجاب الزفاف</td>
								</tr>
								<tr>
									<td>Bride</td>
									<td>mariée</td>
									<td>عروس</td>
								</tr>
								<tr>
									<td>Bridesmaid</td>
									<td>demoiselle d'honneur</td>
									<td>إشبينة العروس</td>
								</tr>
								<tr>
									<td>Catering</td>
									<td>Traiteur</td>
									<td>متعهد تقديم طعام</td>
								</tr>
								<tr>
									<td>Champagne</td>
									<td>champagne</td>
									<td>شامبانيا</td>
								</tr>
								<tr>
									<td>Couple</td>
									<td>couple</td>
									<td>زوجان</td>
								</tr>
								<tr>
									<td>Court of law</td>
									<td>tribunal</td>
									<td>محكمة</td>
								</tr>
								<tr>
									<td>Declaration of love</td>
									<td>déclaration d'amour</td>
									<td>إعلان حب</td>
								</tr>
								<tr>
									<td>Divorce</td>
									<td>divorce</td>
									<td>طلاق</td>
								</tr>
								<tr>
									<td>Dowry</td>
									<td>Dot</td>
									<td>دوطة/مال الزواج</td>
								</tr>
								<tr>
									<td>Engagement</td>
									<td>fiançailles</td>
									<td>خطوبة</td>
								</tr>
								<tr>
									<td>Exchange the rings</td>
									<td>échange des alliances</td>
									<td>تبادل الخواتم</td>
								</tr>
								<tr>
									<td>Fiancé</td>
									<td>fiancé</td>
									<td>خطيب</td>
								</tr>
								<tr>
									<td>Flowers</td>
									<td>fleurs</td>
									<td>زهور</td>
								</tr>
								<tr>
									<td>Gift/present</td>
									<td>cadeau</td>
									<td>هدية</td>
								</tr>
								<tr>
									<td>Girlfriend</td>
									<td>petite amie/copine</td>
									<td>صديقة</td>
								</tr>
								<tr>
									<td>Glass of champagne</td>
									<td>verre de champagne</td>
									<td>كأس من الشمبانيا</td>
								</tr>
								<tr>
									<td>Groom</td>
									<td>marié</td>
									<td>العريس</td>
								</tr>
								<tr>
									<td>Groom's suit/tuxedo</td>
									<td>costume du marié</td>
									<td>زي العريس</td>
								</tr>
								<tr>
									<td>Guest</td>
									<td>invité</td>
									<td>ضيف</td>
								</tr>
								<tr>
									<td>Happiness</td>
									<td>bonheur</td>
									<td>السعادة</td>
								</tr>
								<tr>
									<td>Honeymoon trip</td>
									<td>voyage de noces</td>
									<td>رحلة شهر العسل</td>
								</tr>
								<tr>
									<td>Hug</td>
									<td>calin</td>
									<td>عناق</td>
								</tr>
								<tr>
									<td>Husband</td>
									<td>mari</td>
									<td>الزوج</td>
								</tr>
								<tr>
									<td>Kiss</td>
									<td>bisou/baiser</td>
									<td>قبلة</td>
								</tr>
								<tr>
									<td>Love at first sight</td>
									<td>coup de foudre</td>
									<td>حب من اول نظرة</td>
								</tr>
								<tr>
									<td>Love letter</td>
									<td>lettre d'amour</td>
									<td>رسالة حب</td>
								</tr>
								<tr>
									<td>Love story</td>
									<td>histoire d'amour</td>
									<td>قصة حب</td>
								</tr>
								<tr>
									<td>Maid of honour</td>
									<td>témoin (de la mariée)</td>
									<td>خادمة الشرف</td>
								</tr>
								<tr>
									<td>Partner</td>
									<td>partenaire</td>
									<td>شريك</td>
								</tr>
								<tr>
									<td>Physical love</td>
									<td>amour physique</td>
									<td>الحب الجسدي</td>
								</tr>
								<tr>
									<td>Platonic love</td>
									<td>amour platonique</td>
									<td>الحب الأفلاطوني</td>
								</tr>
								<tr>
									<td>Priest</td>
									<td>Prêtre</td>
									<td>كاهن</td>
								</tr>
								<tr>
									<td>Proposal</td>
									<td>proposition de mariage</td>
									<td>عرض زواج</td>
								</tr>
								<tr>
									<td>Ring</td>
									<td>bague/anneau</td>
									<td>خاتم</td>
								</tr>
								<tr>
									<td>Ring bearer</td>
									<td>porteur d'alliances</td>
									<td>حامل الخاتم</td>
								</tr>
								<tr>
									<td>Romantic</td>
									<td>romantique</td>
									<td>رومانسي</td>
								</tr>
								<tr>
									<td>Speech</td>
									<td>discours</td>
									<td>خطاب</td>
								</tr>
								<tr>
									<td>Surprise</td>
									<td>surprise</td>
									<td>مفاجأة</td>
								</tr>
								<tr>
									<td>Tie</td>
									<td>cravate</td>
									<td>ربطة عنق</td>
								</tr>
								<tr>
									<td>Toast</td>
									<td>toast</td>
									<td>خبز محمص</td>
								</tr>
								<tr>
									<td>Tossing the bouquet</td>
									<td>lancer du bouquet</td>
									<td>رمي الباقة</td>
								</tr>
								<tr>
									<td>Town hall</td>
									<td>Mairie</td>
									<td>قاعة المدينة</td>
								</tr>
								<tr>
									<td>Valentine's day</td>
									<td>saint valentin</td>
									<td>عيد الحب</td>
								</tr>
								<tr>
									<td>Wedding</td>
									<td>mariage</td>
									<td>حفل زواج</td>
								</tr>
								<tr>
									<td>Wedding album</td>
									<td>Album de mariage</td>
									<td>ألبوم زفاف</td>
								</tr>
								<tr>
									<td>Wedding anniversary</td>
									<td>anniversaire de mariage</td>
									<td>ذكرى الزواج</td>
								</tr>
								<tr>
									<td>Wedding cake</td>
									<td>gâteau de mariage</td>
									<td>كعكة العرس</td>
								</tr>
								<tr>
									<td>Wedding ceremony</td>
									<td>cérémonie de mariage</td>
									<td>مراسم الزواج</td>
								</tr>
								<tr>
									<td>Wedding dress</td>
									<td>robe de mariée</td>
									<td>فستان الزفاف</td>
								</tr>
								<tr>
									<td>Wedding night</td>
									<td>Nuit de noces</td>
									<td>ليلة الزفاف</td>
								</tr>
								<tr>
									<td>Wedding ring</td>
									<td>alliance</td>
									<td>خاتم الزواج</td>
								</tr>
								<tr>
									<td>Wedding vows</td>
									<td>vœux de mariage</td>
									<td>نذور الزفاف</td>
								</tr>
								<tr>
									<td>Wedding-car</td>
									<td>voiture de la mariée</td>
									<td>سيارة الزفاف</td>
								</tr>
								<tr>
									<td>Wife</td>
									<td>épouse</td>
									<td>زوجة</td>
								</tr>
								<tr>
									<td>Witness/best man</td>
									<td>témoin</td>
									<td>شبين العريس</td>
								</tr>

								<tr>
									<td class="soustitre">useful verbs</td>
									<td class="soustitre">verbes utiles</td>
									<td class="soustitre">أفعال مفيدة</td>
								</tr>
								<tr>
									<td>To get married</td>
									<td>se marier</td>
									<td>تزوج</td>
								</tr>
								<tr>
									<td>To divorce</td>
									<td>divorcer</td>
									<td>طلق</td>
								</tr>
								<tr>
									<td>To kiss</td>
									<td>embrasser</td>
									<td>قبل</td>
								</tr>
								<tr>
									<td>To be in love</td>
									<td>être amoureux</td>
									<td>عاشق</td>
								</tr>
								<tr>
									<td>To be engaged</td>
									<td>être fiancé</td>
									<td>مخطوب</td>
								</tr>
								<tr>
									<td>To make love</td>
									<td>faire l'amour</td>
									<td>يعاشر</td>
								</tr>
								<tr>
									<td>To sign</td>
									<td>signer</td>
									<td>توقيع</td>
								</tr>
								<tr>
									<td>to start a family</td>
									<td>Fonder une famille</td>
									<td>تكوين أسرة</td>
								</tr>
								<tr>
									<td>To date someone</td>
									<td>sortir avec quelqu'un</td>
									<td>مواعدة شخص ما</td>
								</tr>
								<tr>
									<td>To fall in love</td>
									<td>tomber amoureux</td>
									<td>اقع في الحب</td>
								</tr>
								<tr>
									<td>To cheat on somebody</td>
									<td>tromper quelqu'un</td>
									<td>خداع شخص ما</td>
								</tr>
								<tr>
									<td>Breaking glass</td>
									<td>casser du verre</td>
									<td>كسر الزجاج</td>
								</tr>
								<tr>
									<td>Will you marry me ?</td>
									<td>Veux-tu m'épouser ?</td>
									<td>؟ هل تقبلين الزواج بي</td>
								</tr>
								<tr>
									<td>Bridal shower</td>
									<td>fête organisée avant le mariage (surtout aux USA)</td>
									<td>دش الزفاف</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sentimentlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Sentiments & émotions<?php endif; if($langue === 'english'): ?>Feelings & emotions<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="sentiments.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/famillelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Famille<?php endif; if($langue === 'english'): ?>Family<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="famille.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		