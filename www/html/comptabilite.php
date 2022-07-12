<?php
		$titrefr = "COMPTABILITE & GESTION";
		$titreang = "ACCOUNTING & MANAGEMENT";
		$bg = "./assets/img/bgtheme/comptabilitebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Comptabilité & gestion<?php endif; if($langue === 'english'): ?>Accounting & management<?php endif; ?></title>
 <meta name="description" content="Découvrez le vocabulaire de comptabilité et de gestion en Anglais - Français - Arabe">
		<meta name="keywords" content="comptabilité, accounting, expect, gestion, compte, schématique, plan, comptable, débit, crédit, analytique, sociétés, excel, base, données, comptable, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Comptabilité & gestion<?php endif; if($langue === 'english'): ?>Accounting & management<?php endif; ?></h1>

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
									<td>(bank) discount</td>
									<td>Escompte</td>
									<td>خصم (بنك)</td>
								</tr>
								<tr>
									<td>Account statement</td>
									<td>relevé de compte</td>
									<td>كشف حساب</td>
								</tr>
								<tr>
									<td>Accounting income</td>
									<td>Résultat comptable</td>
									<td>الدخل المحاسبي</td>
								</tr>
								<tr>
									<td>Accounting system</td>
									<td>plan comptable</td>
									<td>نظام محاسبي</td>
								</tr>
								<tr>
									<td>Acquisition/production cost</td>
									<td>Coût d'acquisition/de production</td>
									<td>تكلفة الشراء / الإنتاج</td>
								</tr>
								<tr>
									<td>Adjustment accounts</td>
									<td>comptes de régularisation</td>
									<td>حسابات التسوية</td>
								</tr>
								<tr>
									<td>Adjustment accounts</td>
									<td>comptes de régularisation</td>
									<td>حسابات التسوية</td>
								</tr>
								<tr>
									<td>Advance</td>
									<td>avance</td>
									<td>سلفة</td>
								</tr>
								<tr>
									<td>Amortization</td>
									<td>Amortissement</td>
									<td>إهلاك</td>
								</tr>
								<tr>
									<td>Asset</td>
									<td>Actif</td>
									<td>الأصول</td>
								</tr>
								<tr>
									<td>Assignment</td>
									<td>Affectation</td>
									<td>تخصيص</td>
								</tr>
								<tr>
									<td>Auditor</td>
									<td>commissaire aux comptes/auditeur</td>
									<td>مدقق حسابات</td>
								</tr>
								<tr>
									<td>Balance sheet</td>
									<td>Bilan</td>
									<td>ورقة التوازن</td>
								</tr>
								<tr>
									<td>Bank statement</td>
									<td>relevé de compte bancaire</td>
									<td>كشف حساب بنكى</td>
								</tr>
								<tr>
									<td>Bill of exchange</td>
									<td>lettre de change</td>
									<td>كمبيالة</td>
								</tr>
								<tr>
									<td>Break-even</td>
									<td>Seuil de rentabilité</td>
									<td>العتبة الربحية</td>
								</tr>
								<tr>
									<td>Break-even point</td>
									<td>point mort</td>
									<td>نقطة العتبة الربحية</td>
								</tr>
								<tr>
									<td>Cash</td>
									<td>caisse/banque</td>
									<td>السيولة النقدية</td>
								</tr>
								<tr>
									<td>Certified public accountant</td>
									<td>expert-comptable</td>
									<td>محاسب خبير</td>
								</tr>
								<tr>
									<td>Container</td>
									<td>Emballage</td>
									<td>التعبئة والتغليف</td>
								</tr>
								<tr>
									<td>Corporate Accounting</td>
									<td>Comptabilité des sociétés</td>
									<td>محاسبة الشركات</td>
								</tr>
								<tr>
									<td>Cost accounting</td>
									<td>Comptabilité analytique/de gestion</td>
									<td>محاسبة إدارية</td>
								</tr>
								<tr>
									<td>Cost/expense</td>
									<td>Coût/charge</td>
									<td>التكلفة/المصروف</td>
								</tr>
								<tr>
									<td>Credit balance</td>
									<td>solde créditeur</td>
									<td>رصيد دائن</td>
								</tr>
								<tr>
									<td>Creditor</td>
									<td>Créditeur</td>
									<td>دائن</td>
								</tr>
								<tr>
									<td>Customer</td>
									<td>Client</td>
									<td>الزبون</td>
								</tr>
								<tr>
									<td>Deadline</td>
									<td>échéance</td>
									<td>حد اقصى</td>
								</tr>
								<tr>
									<td>Debit balance</td>
									<td>solde débiteur</td>
									<td>رصيد مدين</td>
								</tr>
								<tr>
									<td>Debitor</td>
									<td>Débiteur</td>
									<td>مدين</td>
								</tr>
								<tr>
									<td>Debt</td>
									<td>Dette</td>
									<td>دين</td>
								</tr>
								<tr>
									<td>Depreciation rate</td>
									<td>taux d'amortissement</td>
									<td>معدل الإهلاك</td>
								</tr>
								<tr>
									<td>Direct/indirect cost</td>
									<td>Coût direct/indirect</td>
									<td>تكلفة مباشرة / غير مباشرة</td>
								</tr>
								<tr>
									<td>Discount</td>
									<td>remise</td>
									<td>خصم</td>
								</tr>
								<tr>
									<td>Drawee</td>
									<td>tiré</td>
									<td>المسحوب عليه</td>
								</tr>
								<tr>
									<td>Drawer</td>
									<td>tireur</td>
									<td>جارور</td>
								</tr>
								<tr>
									<td>Earning per share</td>
									<td>bénéfice par action</td>
									<td>ربحية السهم</td>
								</tr>
								<tr>
									<td>Employer contributions</td>
									<td>cotisations patronales</td>
									<td>مساهمات صاحب العمل</td>
								</tr>
								<tr>
									<td>Ending inventory</td>
									<td>stock final</td>
									<td>المخزون النهائي</td>
								</tr>
								<tr>
									<td>Endorsement</td>
									<td>endossement</td>
									<td>تحويل</td>
								</tr>
								<tr>
									<td>Excess/surplus</td>
									<td>excédent</td>
									<td>فائض</td>
								</tr>
								<tr>
									<td>Exclusive of tax</td>
									<td>hors taxes (HT)</td>
									<td>باستثناء الضرائب</td>
								</tr>
								<tr>
									<td>Expenses</td>
									<td>frais</td>
									<td>نفقات</td>
								</tr>
								<tr>
									<td>External charges</td>
									<td>charges externes</td>
									<td>رسوم خارجية</td>
								</tr>
								<tr>
									<td>Factoring</td>
									<td>affacturage</td>
									<td>العوملة</td>
								</tr>
								<tr>
									<td>Fees</td>
									<td>honoraires</td>
									<td>الرسوم</td>
								</tr>
								<tr>
									<td>Financial statements</td>
									<td>état de synthèses</td>
									<td>القوائم المالية</td>
								</tr>
								<tr>
									<td>Fiscal year/Financial year/accounting period</td>
									<td>Exercice comptable</td>
									<td>السنة المالية</td>
								</tr>
								<tr>
									<td>Fixed/variable cost</td>
									<td>Coût fixe/variable</td>
									<td>تكلفة ثابتة / متغيرة</td>
								</tr>
								<tr>
									<td>Freight</td>
									<td>Transport</td>
									<td>المواصلات</td>
								</tr>
								<tr>
									<td>Freight in/transportation in</td>
									<td>transports sur achats</td>
									<td>النقل على المشتريات</td>
								</tr>
								<tr>
									<td>Freight out/transportation out</td>
									<td>transports sur ventes</td>
									<td>النقل على المبيعات</td>
								</tr>
								<tr>
									<td>Gain</td>
									<td>gain/profit/bénéfice</td>
									<td>ربح</td>
								</tr>
								<tr>
									<td>Gap analysis</td>
									<td>Analyse des écarts</td>
									<td>تحليل الفجوات</td>
								</tr>
								<tr>
									<td>General Accounting</td>
									<td>Comptabilité générale</td>
									<td>المحاسبة العامة</td>
								</tr>
								<tr>
									<td>Goods</td>
									<td>Produits</td>
									<td>السلع</td>
								</tr>
								<tr>
									<td>Grant</td>
									<td>subvention</td>
									<td>منحة</td>
								</tr>
								<tr>
									<td>Gross</td>
									<td>brut</td>
									<td>إجمالي</td>
								</tr>
								<tr>
									<td>Gross profit/margin</td>
									<td>marge brute</td>
									<td>هامش الربح الإجمالي</td>
								</tr>
								<tr>
									<td>Inclusive of tax</td>
									<td>toutes taxes comprises (TTC)</td>
									<td>جميع الضرائب مشمولة</td>
								</tr>
								<tr>
									<td>Income before tax</td>
									<td>résultat avant impôt</td>
									<td>الدخل قبل الضرائب</td>
								</tr>
								<tr>
									<td>Income statement</td>
									<td>compte de résultat</td>
									<td>قوائم الدخل</td>
								</tr>
								<tr>
									<td>Initial inventory</td>
									<td>stock initial</td>
									<td>المخزون الأولي</td>
								</tr>
								<tr>
									<td>Installment</td>
									<td>Acompte</td>
									<td>عربون</td>
								</tr>
								<tr>
									<td>Insurance</td>
									<td>assurance</td>
									<td>تأمين</td>
								</tr>
								<tr>
									<td>Invoice/bill</td>
									<td>Facture</td>
									<td>فاتورة</td>
								</tr>
								<tr>
									<td>Journal</td>
									<td>Journal</td>
									<td>دفتر اليومية</td>
								</tr>
								<tr>
									<td>Leasing</td>
									<td>crédit-bail</td>
									<td>تأجير</td>
								</tr>
								<tr>
									<td>Ledger</td>
									<td>Grand livre</td>
									<td>دفتر الحسابات</td>
								</tr>
								<tr>
									<td>Liability</td>
									<td>Passif</td>
									<td>الخصوم</td>
								</tr>
								<tr>
									<td>Loss</td>
									<td>Perte</td>
									<td>خسارة</td>
								</tr>
								<tr>
									<td>Management control</td>
									<td>contrôle de gestion</td>
									<td>التحكم بالإدارة</td>
								</tr>
								<tr>
									<td>Margin</td>
									<td>marge</td>
									<td>هامش</td>
								</tr>
								<tr>
									<td>Market value</td>
									<td>valeur de marché</td>
									<td>التحكم بالإدارة</td>
								</tr>
								<tr>
									<td>Merchandise</td>
									<td>marchandise</td>
									<td>سلعة</td>
								</tr>
								<tr>
									<td>Merger</td>
									<td>fusion</td>
									<td>الاندماج</td>
								</tr>
								<tr>
									<td>Net</td>
									<td>Net</td>
									<td>صاف</td>
								</tr>
								<tr>
									<td>Net book value</td>
									<td>valeur nette comptable</td>
									<td>قيمة دفترية</td>
								</tr>
								<tr>
									<td>Net sales</td>
									<td>chiffre d'affaire net</td>
									<td>صافي المبيعات</td>
								</tr>
								<tr>
									<td>Nominal value/Par value</td>
									<td>valeur nominale</td>
									<td>قيمة اسمية</td>
								</tr>
								<tr>
									<td>order</td>
									<td>commande</td>
									<td>طلب تجاري</td>
								</tr>
								<tr>
									<td>Paper instrument/commercial paper</td>
									<td>effet de commerce</td>
									<td>ورقة تجارية</td>
								</tr>
								<tr>
									<td>Patent</td>
									<td>brevet</td>
									<td>براءة الإختراع</td>
								</tr>
								<tr>
									<td>Penalty</td>
									<td>amende/pénalité</td>
									<td>غرامة</td>
								</tr>
								<tr>
									<td>Prepaid</td>
									<td>payé d'avance</td>
									<td>مدفوع مسبقا</td>
								</tr>
								<tr>
									<td>Production</td>
									<td>output/production</td>
									<td>إنتاج</td>
								</tr>
								<tr>
									<td>Profitability</td>
									<td>rentabilité</td>
									<td>الربحية</td>
								</tr>
								<tr>
									<td>Promissory note</td>
									<td>billet à ordre</td>
									<td>سند إذني</td>
								</tr>
								<tr>
									<td>Provision</td>
									<td>Provision</td>
									<td>احتياط</td>
								</tr>
								<tr>
									<td>Purchase</td>
									<td>Achat</td>
									<td>شراء</td>
								</tr>
								<tr>
									<td>Rabais</td>
									<td>allowance</td>
									<td>خصم ترجيع الثمن</td>
								</tr>
								<tr>
									<td>Rebate</td>
									<td>ristourne</td>
									<td>خصم</td>
								</tr>
								<tr>
									<td>Repayment/redemption</td>
									<td>remboursement</td>
									<td>إعادة مال</td>
								</tr>
								<tr>
									<td>Residual cost</td>
									<td>valeur résiduelle</td>
									<td>القيمة المتبقية</td>
								</tr>
								<tr>
									<td>Restatement</td>
									<td>retraitement</td>
									<td>إعادة المعالجة</td>
								</tr>
								<tr>
									<td>Royalty</td>
									<td>redevance</td>
									<td>رسوم الامتياز</td>
								</tr>
								
								<tr>
									<td>Sale</td>
									<td>Vente</td>
									<td>بيع</td>
								</tr>
								<tr>
									<td>Self-financing</td>
									<td>Autofinancement</td>
									<td>التمويل الذاتي</td>
								</tr>
								<tr>
									<td>Solvency</td>
									<td>solvabilité</td>
									<td>الملاءة المالية</td>
								</tr>
								<tr>
									<td>Staff costs</td>
									<td>Charges du personnel</td>
									<td>تكاليف الموظفين</td>
								</tr>
								<tr>
									<td>Stock/inventory</td>
									<td>stock</td>
									<td>مخزون</td>
								</tr>
								<tr>
									<td>Supplier</td>
									<td>Fournisseur</td>
									<td>المورد</td>
								</tr>
								<tr>
									<td>Supply/procurement</td>
									<td>Approvisionnement</td>
									<td>تموين</td>
								</tr>
								<tr>
									<td>Tax</td>
									<td>impôt</td>
									<td>ضريبة</td>
								</tr>
								<tr>
									<td>Trial balance</td>
									<td>Balance</td>
									<td>ميزان المراجعة</td>
								</tr>
								<tr>
									<td>Turnover/sales/revenue</td>
									<td>chiffre d'affaires</td>
									<td>الإيراد</td>
								</tr>
								<tr>
									<td>Value added tax (VAT)</td>
									<td>taxe sur la valeur ajoutée (TVA)</td>
									<td>ضريبة على القيمة المضافة</td>
								</tr>
								<tr>
									<td class="soustitre">Accounting principles</td>
									<td class="soustitre">Principes comptables</td>
									<td class="soustitre">مبادئ المحاسبة</td>
								</tr>
								<tr>
									<td>Conservatism principle</td>
									<td>principe de prudence</td>
									<td>المبدأ الوقائي</td>
								</tr>
								<tr>
									<td>Cost Principle</td>
									<td>principe de coût historique</td>
									<td>مبدأ التكلفة التاريخية</td>
								</tr>
								<tr>
									<td>Full Disclosure Principle</td>
									<td>Principe de bonne information</td>
									<td>مبدأ المعلومات الجيدة</td>
								</tr>
								<tr>
									<td>Going concern principle</td>
									<td>Principe de continuité d'exploitation</td>
									<td>مبدأ الاستمرارية</td>
								</tr>
								<tr>
									<td>Matching Principle</td>
									<td>Principe de spécialisation de l'exercice</td>
									<td>مبدأ المطابقة</td>
								</tr>
								<tr>
									<td>Permanence of methods principle</td>
									<td>Principe de permanence des méthodes</td>
									<td>مبدأ دوام الأساليب</td>
								</tr>
								<tr>
									<td>Revenue Recognition Principle</td>
									<td>Principe de non-compensation</td>
									<td>مبدأ عدم التعويض</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/economielogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 style="text-transform: capitalize;" class="card-title"><?php if($langue === 'french'): ?>économie<?php endif; if($langue === 'english'): ?>Economy<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="economie.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/entrepriselogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Entreprise & entretien<?php endif; if($langue === 'english'): ?>Company & interview<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="entrepriseentretien.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
