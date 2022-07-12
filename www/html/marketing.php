<?php
		$titrefr = "MARKETING";
		$titreang = "MARKETING";
		$bg = "./assets/img/bgtheme/marketingbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Marketing<?php endif; if($langue === 'english'): ?>Marketing<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire du marketing en Anglais - Français - Arabe">
		<meta name="keywords" content="marketing, commerce, commercial, vente, marketeur, technique, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, swot, matrice, matrix, pestel, strategy, stratégie">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Marketing<?php endif; if($langue === 'english'): ?>Marketing<?php endif; ?></h1>

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
									<td>Advertisement/Ad</td>
									<td>publicité</td>
									<td>إعلان</td>
								</tr>
								<tr>
									<td>Advertising campaign</td>
									<td>campagne publicitaire</td>
									<td>حملة إعلانية</td>
								</tr>
								<tr>
									<td>Age group</td>
									<td>tranche d'âge</td>
									<td>الفئة العمرية</td>
								</tr>
								<tr>
									<td>Available</td>
									<td>disponible</td>
									<td>متاح</td>
								</tr>
								<tr>
									<td>Best seller</td>
									<td>meilleur vendeur</td>
									<td>الأكثر مبيعا</td>
								</tr>
								<tr>
									<td>Billboard</td>
									<td>panneau publicitaire</td>
									<td>لوحة إعلانات</td>
								</tr>
								<tr>
									<td>Brand</td>
									<td>marque</td>
									<td>علامة</td>
								</tr>
								<tr>
									<td>Brand leader</td>
									<td>marque référence</td>
									<td>مرجع العلامة التجارية</td>
								</tr>
								<tr>
									<td>Business to business (B2B)</td>
									<td>Entreprise à entreprise</td>
									<td>شركة لشركة</td>
								</tr>
								<tr>
									<td>Business to consumer (B2C)</td>
									<td>Entreprise à consommateur</td>
									<td>شركة للمستهلك</td>
								</tr>
								<tr>
									<td>By-product</td>
									<td>produit dérivé</td>
									<td>منتج مشتق</td>
								</tr>
								<tr>
									<td>Cash cow</td>
									<td>vache à lait</td>
									<td>بقرة حلوب</td>
								</tr>
								<tr>
									<td>Challenger</td>
									<td>nouveau concurrent</td>
									<td>تشالنجر</td>
								</tr>
								<tr>
									<td>Co-marketing</td>
									<td>Co-marketing</td>
									<td>التسويق المشترك</td>
								</tr>
								<tr>
									<td>Communication</td>
									<td>Communication</td>
									<td>الاتصالات</td>
								</tr>
								<tr>
									<td>Competitor/rival</td>
									<td>concurrent/rival</td>
									<td>منافس</td>
								</tr>
								<tr>
									<td>Criteria</td>
									<td>critères</td>
									<td>المعايير</td>
								</tr>
								<tr>
									<td>Customer</td>
									<td>client</td>
									<td>الزبون</td>
								</tr>
								<tr>
									<td>Dealer</td>
									<td>revendeur</td>
									<td>تاجر</td>
								</tr>
								<tr>
									<td>Decline</td>
									<td>Déclin</td>
									<td>انخفاض</td>
								</tr>
								<tr>
									<td>Demand</td>
									<td>Demande</td>
									<td>طلب</td>
								</tr>
								<tr>
									<td>Demarche</td>
									<td>Démarche</td>
									<td>خطوات</td>
								</tr>
								<tr>
									<td>Diagnostic</td>
									<td>Diagnostic</td>
									<td>التشخيص</td>
								</tr>
								<tr>
									<td>Discount price</td>
									<td>prix réduit</td>
									<td>سعر الخصم</td>
								</tr>
								<tr>
									<td>Distribution channels</td>
									<td>canaux de distribution</td>
									<td>قنوات التوزيع</td>
								</tr>
								<tr>
									<td>Emerging market</td>
									<td>Marché émergent</td>
									<td>الأسواق الناشئة</td>
								</tr>
								<tr>
									<td>Field study</td>
									<td>étude sur le terrain</td>
									<td>دراسة ميدانية</td>
								</tr>
								<tr>
									<td>Four P :(product, price,place,promotion)</td>
									<td>Les 4 P : (produit,prix,distribution,communication)</td>
									<td>مز: (المنتج، السعر، التوزيع، التواصل) أربع</td>
								</tr>
								<tr>
									<td>Free</td>
									<td>gratuit</td>
									<td>مجانا</td>
								</tr>
								<tr>
									<td>Full price</td>
									<td>plein tarif</td>
									<td>السعر الكامل</td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>sexe</td>
									<td>جنس</td>
								</tr>
								<tr>
									<td>Gift</td>
									<td>cadeau</td>
									<td>هدية مجانية</td>
								</tr>
								<tr>
									<td>Goods</td>
									<td>produits</td>
									<td>السلع/بضائع</td>
								</tr>
								<tr>
									<td>Hedonist</td>
									<td>Hédoniste</td>
									<td>متعي</td>
								</tr>
								<tr>
									<td>Label</td>
									<td>Étiquette</td>
									<td>بطاقة</td>
								</tr>
								<tr>
									<td>Launching</td>
									<td>lancement</td>
									<td>إطلاق</td>
								</tr>
								<tr>
									<td>Leaflet</td>
									<td>prospectus</td>
									<td>منشور</td>
								</tr>
								<tr>
									<td>Life cycle of product</td>
									<td>cycle de vie du produit</td>
									<td>دورة حياة المنتج</td>
								</tr>
								<tr>
									<td>Loyalty</td>
									<td>fidélité</td>
									<td>ولاء</td>
								</tr>
								<tr>
									<td>Loyalty card</td>
									<td>carte de fidélité</td>
									<td>بطاقة ولاء</td>
								</tr>
								<tr>
									<td>Luxury</td>
									<td>de luxe</td>
									<td>فاخر</td>
								</tr>
								<tr>
									<td>Margin</td>
									<td>marge</td>
									<td>هامش</td>
								</tr>
								<tr>
									<td>Market</td>
									<td>marché</td>
									<td>سوق</td>
								</tr>
								<tr>
									<td>Market leader</td>
									<td>leader sur le marché</td>
									<td>مرشد السوق</td>
								</tr>
								<tr>
									<td>Media</td>
									<td>Média</td>
									<td>وسائل الإعلام</td>
								</tr>
								<tr>
									<td>Middleman</td>
									<td>intermédiaire</td>
									<td>وسيط</td>
								</tr>
								<tr>
									<td>Need</td>
									<td>Besoin</td>
									<td>حاجة</td>
								</tr>
								<tr>
									<td>Niche</td>
									<td>créneau</td>
									<td>تخصص</td>
								</tr>
								<tr>
									<td>Non-media</td>
									<td>Hors média</td>
									<td>خارج الإعلام</td>
								</tr>
								<tr>
									<td>Opportunities</td>
									<td>opportunités</td>
									<td>الفرص</td>
								</tr>
								<tr>
									<td>Outlet/store</td>
									<td>magasin</td>
									<td>المحل</td>
								</tr>
								<tr>
									<td>Packaging</td>
									<td>emballage</td>
									<td>التعبئة والتغليف</td>
								</tr>
								<tr>
									<td>Point of sale</td>
									<td>point de vente</td>
									<td>نقطة البيع</td>
								</tr>
								<tr>
									<td>Positioning</td>
									<td>positionnement</td>
									<td>التمركز</td>
								</tr>
								<tr>
									<td>Potential client</td>
									<td>Client potentiel</td>
									<td>الزبون المحتمل</td>
								</tr>
								<tr>
									<td>Potential market</td>
									<td>Marché potentiel</td>
									<td>السوق المحتمل</td>
								</tr>
								<tr>
									<td>Product range</td>
									<td>gammes de produits</td>
									<td>خطوط المنتجات</td>
								</tr>
								<tr>
									<td>Profit margin</td>
									<td>marge bénéficiaire</td>
									<td>هامش الربح</td>
								</tr>
								<tr>
									<td>Questionnaire</td>
									<td>questionnaire</td>
									<td>استبيان</td>
								</tr>
								<tr>
									<td>Range</td>
									<td>gammes</td>
									<td>خطوط</td>
								</tr>
								<tr>
									<td>Range policy</td>
									<td>Politique de gamme</td>
									<td>سياسة الخطوط</td>
								</tr>
								<tr>
									<td>Real market</td>
									<td>Marché réel</td>
									<td>السوق الحقيقي</td>
								</tr>
								<tr>
									<td>Reduction/discount</td>
									<td>Réduction</td>
									<td>تخفيض</td>
								</tr>
								<tr>
									<td>Relay coupon</td>
									<td>coupon réponse</td>
									<td>قسيمة الاجابة</td>
								</tr>
								<tr>
									<td>Retail price</td>
									<td>prix en détail</td>
									<td>سعر التجزئة</td>
								</tr>
								<tr>
									<td>Royalty</td>
									<td>droits d'auteurs</td>
									<td>حقوق الكاتب</td>
								</tr>
								<tr>
									<td>Sales</td>
									<td>ventes</td>
									<td>مبيعات</td>
								</tr>
								<tr>
									<td>Satisfying a need</td>
									<td>Satisfaction d'un besoin</td>
									<td>تلبية حاجة</td>
								</tr>
								<tr>
									<td>Saturated market</td>
									<td>Marché saturé</td>
									<td>السوق المشبع</td>
								</tr>
								<tr>
									<td>Spending power</td>
									<td>pouvoir d'achat</td>
									<td>قوة شرائية</td>
								</tr>
								<tr>
									<td>Sponsorship</td>
									<td>Parrainage</td>
									<td>كفالة</td>
								</tr>
								<tr>
									<td>Star product</td>
									<td>produit star</td>
									<td>منتج نجمة</td>
								</tr>
								<tr>
									<td>Stock shortage/sold out</td>
									<td>rupture de stock</td>
									<td>نفاذ المخزون</td>
								</tr>
								<tr>
									<td>Strategy</td>
									<td>Stratégie</td>
									<td>إستراتيجية</td>
								</tr>
								<tr>
									<td>Strengths</td>
									<td>forces</td>
									<td>نقاط القوة</td>
								</tr>
								<tr>
									<td>Supply</td>
									<td>offre</td>
									<td>عرض</td>
								</tr>
								<tr>
									<td>Tender</td>
									<td>appel d'offre</td>
									<td>طلب مناقصة</td>
								</tr>
								<tr>
									<td>Threats</td>
									<td>menaces</td>
									<td>التهديدات</td>
								</tr>
								<tr>
									<td>Trade mark</td>
									<td>marque déposée</td>
									<td>علامة مسجلة</td>
								</tr>
								<tr>
									<td>Upscale</td>
									<td>haut de gamme</td>
									<td>الراقية</td>
								</tr>
								<tr>
									<td>Value for the money/Quality price ratio</td>
									<td>rapport qualité prix </td>
									<td>قيمة المال</td>
								</tr>
								<tr>
									<td>Voucher</td>
									<td>bon d'achat</td>
									<td>قسيمة</td>
								</tr>
								<tr>
									<td>Weaknesses</td>
									<td>faiblesses</td>
									<td>نقاط الضعف</td>
								</tr>
								<tr>
									<td class="soustitre">Market</td>
									<td class="soustitre">Marché</td>
									<td class="soustitre">سوق</td>
								</tr>
								<tr>
									<td>market expansion</td>
									<td>extension du marché</td>
									<td>تمديد السوق</td>
								</tr>
								<tr>
									<td>market follower</td>
									<td>suiveur de marché</td>
									<td>تابع السوق</td>
								</tr>
								<tr>
									<td>market leader</td>
									<td>chef de file/leader du marché</td>
									<td>مرشد السوق</td>
								</tr>
								<tr>
									<td>market niche</td>
									<td>niche de marché</td>
									<td>سوق متخصص</td>
								</tr>
								<tr>
									<td>market penetration</td>
									<td>implantation du marché</td>
									<td>تأسيس السوق</td>
								</tr>
								<tr>
									<td>market research</td>
									<td>étude de marché</td>
									<td>دراسة السوق</td>
								</tr>
								<tr>
									<td>market share</td>
									<td>part de marché</td>
									<td>الحصة السوقية</td>
								</tr>
								<tr>
									<td>segment market</td>
									<td>segment de marché</td>
									<td>شريحة من السوق</td>
								</tr>
								<tr>
									<td>target market</td>
									<td>marché cible</td>
									<td>السوق المستهدف</td>
								</tr>
								<tr>
									<td>test marketing</td>
									<td>test de marché</td>
									<td>اختبار السوق</td>
								</tr>
								<tr>
									<td class="soustitre">Marketing profession</td>
									<td class="soustitre">Métier marketing</td>
									<td class="soustitre">مهنة التسويق</td>
								</tr>
								<tr>
									<td>brand manager</td>
									<td>chef de marque</td>
									<td>مدير العلامة التجارية</td>
								</tr>
								<tr>
									<td>communication manager</td>
									<td>responsable de la communication</td>
									<td>المسؤول عن الاتصالات</td>
								</tr>
								<tr>
									<td>distribution manager</td>
									<td>responsable de la distribution</td>
									<td>المسؤول عن التوزيع</td>
								</tr>
								<tr>
									<td>marketing director</td>
									<td>directeur marketing</td>
									<td>مدير التسويق</td>
								</tr>
								<tr>
									<td>product manager</td>
									<td>chef de produit</td>
									<td>مدير الإنتاج</td>
								</tr>
								<tr>
									<td>Public relations</td>
									<td>chargé de relation publiques (RP)</td>
									<td>ضابط العلاقات العامة</td>
								</tr>
								<tr>
									<td>sales manager</td>
									<td>directeur des ventes</td>
									<td>مدير المبيعات</td>
								</tr>
								<tr>
									<td>web developer</td>
									<td>développeur web</td>
									<td>مطور ويب</td>
								</tr>
								<tr>
									<td>web redactor</td>
									<td>rédacteur web</td>
									<td>محرر ويب</td>
								</tr>
								<tr>
									<td class="soustitre">Digital Marketing</td>
									<td class="soustitre">Marketing digital</td>
									<td class="soustitre">التسويق الرقمي</td>
								</tr>
								<tr>
									<td>banner</td>
									<td>bannière web</td>
									<td>لافتة</td>
								</tr>
								<tr>
									<td>device</td>
									<td>support de communication</td>
									<td>وسيلة الاتصال</td>
								</tr>
								<tr>
									<td>Display</td>
									<td>publicité graphique web</td>
									<td>عرض</td>
								</tr>
								<tr>
									<td>keyword</td>
									<td>mot clé</td>
									<td>كلمة مفتاحية</td>
								</tr>
								<tr>
									<td>Mobile marketing</td>
									<td>marketing sur outils mobiles</td>
									<td>التسويق عبر الهاتف المحمول</td>
								</tr>
								<tr>
									<td>Online buying</td>
									<td>achat en ligne</td>
									<td>شراء عبر الإنترنت</td>
								</tr>
								<tr>
									<td>Search engine optimization</td>
									<td>optimisation des moteurs de recherche</td>
									<td>تحسين محرك بحث</td>
								</tr>
								<tr>
									<td>Social media</td>
									<td>réseaux sociaux</td>
									<td>وسائل التواصل الاجتماعي</td>
								</tr>
								<tr>
									<td>sponsored ad</td>
									<td>lien sponsorisé</td>
									<td>رابط برعاية</td>
								</tr>
								<tr>
									<td>sponsored ad</td>
									<td>lien sponsorisé</td>
									<td>رابط برعاية</td>
								</tr>
								<tr>
									<td>website</td>
									<td>site internet</td>
									<td>موقع انترنت</td>
								</tr>
								<tr>
									<td class="soustitre">Market Survey</td>
									<td class="soustitre">Étude de marché</td>
									<td class="soustitre">دراسة السوق</td>
								</tr>
								<tr>
									<td>consumer panel</td>
									<td>panel de consommateurs</td>
									<td>لوحة المستهلك</td>
								</tr>
								<tr>
									<td>customer research</td>
									<td>étude du comportament des consommateurs</td>
									<td>دراسة سلوك المستهلك</td>
								</tr>
								<tr>
									<td>customer satisfaction survey</td>
									<td>enquête de satisfaction</td>
									<td>دراسة تقييم الرضا</td>
								</tr>
								<tr>
									<td>data</td>
									<td>donnée</td>
									<td>البيانات</td>
								</tr>
								<tr>
									<td>database</td>
									<td>base de données</td>
									<td>قاعدة البيانات</td>
								</tr>
								<tr>
									<td>focus group</td>
									<td>groupe d’étude</td>
									<td>مجموعة دراسة</td>
								</tr>
								<tr>
									<td>Matrix SWOT</td>
									<td>matrice SWOT</td>
									<td>SWOT مصفوفة</td>
								</tr>
								<tr>
									<td>Positioning</td>
									<td>Positionnement</td>
									<td>التمركز</td>
								</tr>
								<tr>
									<td>sample</td>
									<td>échantillon</td>
									<td>عينة</td>
								</tr>
								<tr>
									<td>Segmentation</td>
									<td>Segmentation</td>
									<td>تجزئة</td>
								</tr>
								<tr>
									<td>survey</td>
									<td>enquête/sondage</td>
									<td>الدراسة الاستقصائية</td>
								</tr>
								<tr>
									<td>Targeting</td>
									<td>Ciblage</td>
									<td>الاستهداف</td>
								</tr>
								<tr>
									<td>trend</td>
									<td>tendance</td>
									<td>نزعة</td>
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
							  <img src="./assets/img/logotheme/informatiquelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Informatique<?php endif; if($langue === 'english'): ?>Informatique<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="informatique.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		