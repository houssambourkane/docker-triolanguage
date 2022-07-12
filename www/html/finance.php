<?php
		$titrefr = "FINANCE";
		$titreang = "FINANCE";
		$bg = "./assets/img/bgtheme/financebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Finance<?php endif; if($langue === 'english'): ?>Finance<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de finance en Anglais - Français - Arabe">
		<meta name="keywords" content="signal, business, administration, audit, auditeur, auditor, directeur, financier, finance, stock, market, marché, boursier, capitaux, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Finance<?php endif; if($langue === 'english'): ?>Finance<?php endif; ?></h1>

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
									<td>(bank) Overdraft</td>
									<td>découvert (bancaire)</td>
									<td>سحب على المكشوف</td>
								</tr>
								<tr>
									<td>Actual value</td>
									<td>valeur réelle</td>
									<td>القيمة الفعلية</td>
								</tr>
								<tr>
									<td>Actualisation rate</td>
									<td>taux d'actualisation</td>
									<td>معدل الخصم</td>
								</tr>
								<tr>
									<td>Annual report</td>
									<td>rapport annuel</td>
									<td>تقرير سنوي</td>
								</tr>
								<tr>
									<td>Annuity</td>
									<td>Annuité</td>
									<td>دخل سنوي</td>
								</tr>
								<tr>
									<td>Appreciation/depreciation</td>
									<td>Appréciation/dépréciation</td>
									<td>قيمة العملة تقدير/خفض</td>
								</tr>
								<tr>
									<td>bank account</td>
									<td>compte bancaire</td>
									<td>حساب البنك</td>
								</tr>
								<tr>
									<td>Board of directors</td>
									<td>conseil d'administration</td>
									<td>مجلس اداري</td>
								</tr>
								<tr>
									<td>Bond loan</td>
									<td>Emprunt obligataire</td>
									<td>قرض السندات</td>
								</tr>
								<tr>
									<td>Bond/debenture</td>
									<td>obligation</td>
									<td>سند مالي</td>
								</tr>
								<tr>
									<td>Broker</td>
									<td>courtier</td>
									<td>وكيل أسهم</td>
								</tr>
								<tr>
									<td>brokerage</td>
									<td>courtage</td>
									<td>السمسرة</td>
								</tr>
								<tr>
									<td>Building society</td>
									<td>Société d'investissement et de crédit immobilier</td>
									<td>شركة استثمار ورهن عقاري</td>
								</tr>
								<tr>
									<td>Buy-out</td>
									<td>capital transmission</td>
									<td>رأس مال ناقل الحركة</td>
								</tr>
								<tr>
									<td>Capital instruments</td>
									<td>marché des capitaux</td>
									<td>سوق رأس المال</td>
								</tr>
								<tr>
									<td>Capitalization</td>
									<td>Capitalisation</td>
									<td>الرسملة</td>
								</tr>
								<tr>
									<td>Capitalization rate</td>
									<td>taux de capitalisation</td>
									<td>معدل الرسملة</td>
								</tr>
								<tr>
									<td>Cash flow</td>
									<td>flux de trésorerie</td>
									<td>تدفق مالي</td>
								</tr>
								<tr>
									<td>central bank</td>
									<td>Banque centrale</td>
									<td>البنك المركزي</td>
								</tr>
								<tr>
									<td>Commercial Bank</td>
									<td>Banque commerciale</td>
									<td>مصرف تجاري</td>
								</tr>
								<tr>
									<td>Commercial paper</td>
									<td>Billet de trésorerie</td>
									<td>ورقة تجارية مالية</td>
								</tr>
								<tr>
									<td>Conventional bank</td>
									<td>Banque conventionnelle</td>
									<td>مصرف تقليدي</td>
								</tr>
								<tr>
									<td>Corporation charter</td>
									<td>Statuts</td>
									<td>النظام الأساسي</td>
								</tr>
								<tr>
									<td>Corporation tax</td>
									<td>Impôt sur les sociétés</td>
									<td>ضريبة على الشركات</td>
								</tr>
								<tr>
									<td>Cost of debt</td>
									<td>coût de la dette</td>
									<td>تكلفة الدين</td>
								</tr>
								<tr>
									<td>Cost of equity</td>
									<td>coût des capitaux propres</td>
									<td>تكلفة حقوق الملكية</td>
								</tr>
								<tr>
									<td>Coupon</td>
									<td>Coupon</td>
									<td>كوبون</td>
								</tr>
								<tr>
									<td>Credit</td>
									<td>crédit</td>
									<td>رصيد</td>
								</tr>
								<tr>
									<td>Crowdfunding</td>
									<td>Financement participatif</td>
									<td>التمويل الجماعي</td>
								</tr>
								<tr>
									<td>Curve/schedule</td>
									<td>courbe</td>
									<td>منحنى</td>
								</tr>
								<tr>
									<td>Debt</td>
									<td>dette</td>
									<td>دين</td>
								</tr>
								<tr>
									<td>Deposit</td>
									<td>dépôt</td>
									<td>وديعة</td>
								</tr>
								<tr>
									<td>Discounting</td>
									<td>Actualisation</td>
									<td>خصم</td>
								</tr>
								<tr>
									<td>Dividend</td>
									<td>Dividende</td>
									<td>حصة أرباح</td>
								</tr>
								<tr>
									<td>Exchange adjustement</td>
									<td>écart de conversion</td>
									<td>فارق التحويل</td>
								</tr>
								<tr>
									<td>Exchange market</td>
									<td>marché des changes</td>
									<td>سوق الصرف</td>
								</tr>
								<tr>
									<td>Exchange rate</td>
									<td>Taux de change</td>
									<td>سعر الصرف</td>
								</tr>
								<tr>
									<td>Exchange rate regime</td>
									<td>Régime de change</td>
									<td>نظام تحديد سعر الصرف</td>
								</tr>
								<tr>
									<td>Financial administration/business finance</td>
									<td>gestion financière</td>
									<td>تسيير مالي</td>
								</tr>
								<tr>
									<td>Financial analysis</td>
									<td>analyse financière</td>
									<td>تحليل مالي</td>
								</tr>
								<tr>
									<td>Financial director</td>
									<td>directeur financier</td>
									<td>المدير المالي</td>
								</tr>
								<tr>
									<td>Financial income</td>
									<td>résultat financier</td>
									<td>الدخل المالي</td>
								</tr>
								<tr>
									<td>Financial markets</td>
									<td>marchés financiers</td>
									<td>الأسواق المالية</td>
								</tr>
								<tr>
									<td>Financial mathematics</td>
									<td>Mathématiques financières</td>
									<td>الرياضيات المالية</td>
								</tr>
								<tr>
									<td>Financing</td>
									<td>financement</td>
									<td>التمويل</td>
								</tr>
								<tr>
									<td>Floating/flexible exchange rate system</td>
									<td>Système de change flottant</td>
									<td>نظام سعر الصرف العائم</td>
								</tr>
								<tr>
									<td>Flow</td>
									<td>flux</td>
									<td>تدفق</td>
								</tr>
								<tr>
									<td>Foreign currency/exchange (FOREX)</td>
									<td>devise étrangère</td>
									<td>عملة أجنبية</td>
								</tr>
								<tr>
									<td>Holding company</td>
									<td>Holding</td>
									<td>شركة قابضة</td>
								</tr>
								<tr>
									<td>Insurance</td>
									<td>Assurance</td>
									<td>تأمين</td>
								</tr>
								<tr>
									<td>Internal rate of return (IRR)</td>
									<td>taux de rentabilité interne (TRI)</td>
									<td>معدل العائد الداخلي</td>
								</tr>
								<tr>
									<td>International Monetary Fund</td>
									<td>Fonds monétaire international</td>
									<td>صندوق النقد الدولي</td>
								</tr>
								<tr>
									<td>Investment</td>
									<td>investissement/placement</td>
									<td>لاستثمار</td>
								</tr>
								<tr>
									<td>Investor</td>
									<td>Investisseur</td>
									<td>المستثمر</td>
								</tr>
								<tr>
									<td>Islamic financing</td>
									<td>Financement islamique</td>
									<td>التمويل الإسلامي</td>
								</tr>
								<tr>
									<td>Issue</td>
									<td>émission</td>
									<td>انبعاث</td>
								</tr>
								<tr>
									<td>Legal reserve</td>
									<td>réserve légale</td>
									<td>الاحتياط القانوني</td>
								</tr>
								<tr>
									<td>Leverage</td>
									<td>effet de levier</td>
									<td>رفع مالي</td>
								</tr>
								<tr>
									<td>Liquidity</td>
									<td>Liquidité</td>
									<td>السيولة</td>
								</tr>
								<tr>
									<td>Listed market</td>
									<td>marché coté</td>
									<td>سوق مدرج</td>
								</tr>
								<tr>
									<td>Long-term investments/investment securities</td>
									<td>titres de participation</td>
									<td>استثمارات طويلة الأجل</td>
								</tr>
								<tr>
									<td>Margin</td>
									<td>marge</td>
									<td>هامش</td>
								</tr>
								<tr>
									<td>Margin of safety</td>
									<td>marge de sécurité</td>
									<td>هامش السلامة</td>
								</tr>
								<tr>
									<td>Maturity/deadline</td>
									<td>échéance</td>
									<td>تاريخ إستحقاق الدين</td>
								</tr>
								<tr>
									<td>Monetary aggregates</td>
									<td>Agrégats monétaires</td>
									<td>المجاميع النقدية</td>
								</tr>
								<tr>
									<td>Monetary authorities</td>
									<td>Autorités monétaires</td>
									<td>السلطات النقدية</td>
								</tr>
								<tr>
									<td>Money laundering</td>
									<td>blanchiment d'argent</td>
									<td>تبييض الأموال</td>
								</tr>
								<tr>
									<td>Money supply</td>
									<td>Masse monétaire</td>
									<td>معروض نقدي</td>
								</tr>
								<tr>
									<td>Mortgage</td>
									<td>hypothèque (emprunt immobilier)</td>
									<td>الرهن العقاري</td>
								</tr>
								<tr>
									<td>Net income (or loss)</td>
									<td>Résultat net</td>
									<td>الدخل الصافي</td>
								</tr>
								<tr>
									<td>Opening price</td>
									<td>cours d'ouverture</td>
									<td>سعر الافتتاح</td>
								</tr>
								<tr>
									<td>Operating working capital</td>
									<td>Besoin en fonds de roulement</td>
									<td>متطلبات رأس المال العامل</td>
								</tr>
								<tr>
									<td>Opportunity cost</td>
									<td>Coût d'opportunité</td>
									<td>تكلفة الفرصة</td>
								</tr>
								<tr>
									<td>Parity</td>
									<td>Parité</td>
									<td>تكافؤ</td>
								</tr>
								<tr>
									<td>Payee</td>
									<td>bénéficiaire</td>
									<td>المستفيد</td>
								</tr>
								<tr>
									<td>Portfolio</td>
									<td>Portefeuille</td>
									<td>محفظة استثمارية</td>
								</tr>
								<tr>
									<td>Pretax profit</td>
									<td>Résultat avant impôt</td>
									<td>النتيجة قبل الضرائب</td>
								</tr>
								<tr>
									<td>Private equity</td>
									<td>capital investissement</td>
									<td>الأسهم الخاصة</td>
								</tr>
								<tr>
									<td>Profitability</td>
									<td>Rentabilité</td>
									<td>الربحية</td>
								</tr>
								<tr>
									<td>Public corporation</td>
									<td>appel public à l'épargne</td>
									<td>عرض عام</td>
								</tr>
								<tr>
									<td>Quorum</td>
									<td>Quorum</td>
									<td>نصاب قانوني</td>
								</tr>
								<tr>
									<td>Quota</td>
									<td>Quote-part</td>
									<td>حصة نسبية</td>
								</tr>
								<tr>
									<td>Quoted/listed</td>
									<td>coté</td>
									<td>المدرجة</td>
								</tr>
								<tr>
									<td>Rate</td>
									<td>taux</td>
									<td>معدل</td>
								</tr>
								<tr>
									<td>Rate of interest</td>
									<td>Taux d'intérêt</td>
									<td>سعر الفائدة</td>
								</tr>
								<tr>
									<td>Ratio</td>
									<td>Ratio</td>
									<td>نسبة</td>
								</tr>
								<tr>
									<td>Real estate</td>
									<td>immobilier</td>
									<td>العقارات</td>
								</tr>
								<tr>
									<td>Return on investment (ROI)</td>
									<td>retour sur investissement</td>
									<td>عائد الاستثمار</td>
								</tr>
								<tr>
									<td>Revaluation/devalutation</td>
									<td>Réévaluation/dévaluation</td>
									<td>إعادة التقييم/انخفاض قيمة العملة</td>
								</tr>
								<tr>
									<td>Risk</td>
									<td>risque</td>
									<td>خطر</td>
								</tr>
								<tr>
									<td>Saving bank</td>
									<td>caisse d'épargne</td>
									<td>صندوق الإدخار</td>
								</tr>
								<tr>
									<td>Securities</td>
									<td>valeurs/titres</td>
									<td>ضمانات</td>
								</tr>
								<tr>
									<td>Securitization</td>
									<td>Titrisation</td>
									<td>التوريق</td>
								</tr>
								<tr>
									<td>self-financing capacity</td>
									<td>capacité d'auto-financement (CAF)</td>
									<td>القدرة على التمويل الذات</td>
								</tr>
								<tr>
									<td>Sharaholders equity/stockholders equity/net assets</td>
									<td>Capitaux propres</td>
									<td>أسهم رأس المال</td>
								</tr>
								<tr>
									<td>Share/stock</td>
									<td>action</td>
									<td>سهم</td>
								</tr>
								<tr>
									<td>Shareholder/stockholder</td>
									<td>Actionnaire</td>
									<td>مساهم</td>
								</tr>
								<tr>
									<td>Shareholders agreement</td>
									<td>convention entre associés</td>
									<td>الحساب الجاري للشريك</td>
								</tr>
								<tr>
									<td>Short-term investments/marketable securities</td>
									<td>titres de placement</td>
									<td>استثمارات قصيرة الأجل</td>
								</tr>
								<tr>
									<td>signal</td>
									<td>signal</td>
									<td>إشارة</td>
								</tr>
								<tr>
									<td>Solvency</td>
									<td>Solvabilité</td>
									<td>الملاءة المالية</td>
								</tr>
								<tr>
									<td>Speculation</td>
									<td>spéculation</td>
									<td>مضاربة</td>
								</tr>
								<tr>
									<td>Speculator</td>
									<td>spéculateur</td>
									<td>مضارب</td>
								</tr>
								<tr>
									<td>Stock exchange</td>
									<td>bourse</td>
									<td>تداول الاسهم</td>
								</tr>
								<tr>
									<td>Stockbroker</td>
									<td>agent de change</td>
									<td>سمسار البورصة</td>
								</tr>
								<tr>
									<td>Subprime mortgage</td>
									<td>prêt hypothécaire à risque</td>
									<td>الرهن العقاري</td>
								</tr>
								<tr>
									<td>Subscription</td>
									<td>Souscription</td>
									<td>اشتراك</td>
								</tr>
								<tr>
									<td>trader</td>
									<td>commerçant</td>
									<td>تاجر</td>
								</tr>
								<tr>
									<td>Trading</td>
									<td>Commerce</td>
									<td>تجارة</td>
								</tr>
								<tr>
									<td>Treasury bond</td>
									<td>bon de trésor</td>
									<td>سندات الخزينة</td>
								</tr>
								<tr>
									<td>Undertaking for collective investment in transferable securities (UCITS)</td>
									<td>Organisme de placement collectif en valeurs mobilières (OPCVM)</td>
									<td>هيئة الاستثمار الجماعي في الأوراق المالية</td>
								</tr>
								<tr>
									<td>Undivided loan</td>
									<td>Emprunt indivis</td>
									<td>قرض غير مقسم</td>
								</tr>
								<tr>
									<td>Venture capital</td>
									<td>Capital risque</td>
									<td>رأس المال المخاطر</td>
								</tr>
								<tr>
									<td>Volatility</td>
									<td>volatilité</td>
									<td>التقلب</td>
								</tr>
								<tr>
									<td>Weighted average cost of capital</td>
									<td>Coût moyen pondéré du capital</td>
									<td>وسيط وزني لتكلفة رأس المال</td>
								</tr>
								<tr>
									<td>World Bank</td>
									<td>Banque mondiale</td>
									<td>البنك الدولي</td>
								</tr>
								<tr>
									<td>Yield</td>
									<td>rendement</td>
									<td>المردود</td>
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
							  <img src="./assets/img/logotheme/deviselogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les devises<?php endif; if($langue === 'english'): ?>Currencies<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="devise.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		