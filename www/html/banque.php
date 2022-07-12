<?php
		$titrefr = "BANQUE";
		$titreang = "BANKING";
		$bg = "./assets/img/bgtheme/banquebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Banque<?php endif; if($langue === 'english'): ?>Banking<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de la banque en Anglais - Français - Arabe">
		<meta name="keywords" content="banque, bank, banking, crédit, credit, débit, déposer, verser, transférer, transfert, argent, compte, bancaire, transfert, banquier, deposit, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Banque<?php endif; if($langue === 'english'): ?>Banking<?php endif; ?></h1>

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
									<td>Account</td>
									<td>compte</td>
									<td>حساب</td>
								</tr>
								<tr>
									<td>Automated teller machine (ATM)</td>
									<td>distributeur automatique</td>
									<td>موزع آلي</td>
								</tr>
								<tr>
									<td>Bank</td>
									<td>banque</td>
									<td>مصرف</td>
								</tr>
								<tr>
									<td>Bank account</td>
									<td>compte bancaire</td>
									<td>حساب البنك</td>
								</tr>
								<tr>
									<td>Bank account balance</td>
									<td>solde d'un compte bancaire</td>
									<td>رصيد الحساب البنكي</td>
								</tr>
								<tr>
									<td>Bank card</td>
									<td>carte bancaire</td>
									<td>بطاقة مصرفية</td>
								</tr>
								<tr>
									<td>Bank cashier</td>
									<td>caissier de banque</td>
									<td>أمين الصندوق البنك</td>
								</tr>
								<tr>
									<td>Bank charges</td>
									<td>Frais bancaires</td>
									<td>رسوم بنكية</td>
								</tr>
								<tr>
									<td>Bank clerk</td>
									<td>employé de banque</td>
									<td>موظف فى البنك</td>
								</tr>
								<tr>
									<td>Bank deposit</td>
									<td>dépôt bancaire</td>
									<td>الودائع المصرفية</td>
								</tr>
								<tr>
									<td>Bank manager</td>
									<td>directeur de banque</td>
									<td>مدير بنك</td>
								</tr>
								<tr>
									<td>Bank statement</td>
									<td>relevé bancaire</td>
									<td>كشف حساب بنكى</td>
								</tr>
								<tr>
									<td>Bank transfer</td>
									<td>virement bancaire</td>
									<td>كشف حساب بنكى</td>
								</tr>
								<tr>
									<td>Bank transfer</td>
									<td>virement bancaire</td>
									<td>حوالة بنكية</td>
								</tr>
								<tr>
									<td>Banker</td>
									<td>banquier</td>
									<td>صاحب البنك</td>
								</tr>
								<tr>
									<td>Banking</td>
									<td>Bancaire</td>
									<td>مصرفي</td>
								</tr>
								<tr>
									<td>Banking services</td>
									<td>Services bancaires</td>
									<td>الخدمات المصرفية</td>
								</tr>
								<tr>
									<td>Bankruptcy</td>
									<td>faillite</td>
									<td>إفلاس</td>
								</tr>
								<tr>
									<td>Bill, bank note</td>
									<td>billet de banque</td>
									<td>الخدمات المصرفية</td>
								</tr>
								<tr>
									<td>Cash</td>
									<td>liquide</td>
									<td>السيولة النقدية</td>
								</tr>
								<tr>
									<td>change</td>
									<td>monnaie</td>
									<td>عملة</td>
								</tr>
								<tr>
									<td>Cheap</td>
									<td>pas cher</td>
									<td>رخيص</td>
								</tr>
								<tr>
									<td>Cheque</td>
									<td>chèque</td>
									<td>شيك</td>
								</tr>
								<tr>
									<td>Cheque book</td>
									<td>carnet de chèque</td>
									<td>دفتر شيكات</td>
								</tr>
								<tr>
									<td>Credit</td>
									<td>crédit</td>
									<td>ائتمان</td>
								</tr>
								<tr>
									<td>Credit card</td>
									<td>carte de crédit</td>
									<td>بطاقة الائتمان</td>
								</tr>
								<tr>
									<td>Creditor</td>
									<td>Créancier</td>
									<td>دائن</td>
								</tr>
								<tr>
									<td>Currency</td>
									<td>devise</td>
									<td>عملة</td>
								</tr>
								<tr>
									<td>Debit, flow</td>
									<td>débit</td>
									<td>تدفق</td>
								</tr>
								<tr>
									<td>Debt</td>
									<td>dette</td>
									<td>دين</td>
								</tr>
								<tr>
									<td>Debtor</td>
									<td>débiteur</td>
									<td>مدين</td>
								</tr>
								<tr>
									<td>Discount rate</td>
									<td>taux de remise</td>
									<td>معدل الخصم</td>
								</tr>
								<tr>
									<td>Exchange rate</td>
									<td>taux de change</td>
									<td>معدل الصرف</td>
								</tr>
								<tr>
									<td>Expansive</td>
									<td>cher</td>
									<td>غالي السعر</td>
								</tr>
								<tr>
									<td>fee</td>
									<td>frais</td>
									<td>التكاليف</td>
								</tr>
								<tr>
									<td>Financial markets</td>
									<td>marchés financiers</td>
									<td>الأسواق المالية</td>
								</tr>
								<tr>
									<td>Foreign currency</td>
									<td>devise étrangère</td>
									<td>عملة أجنبية</td>
								</tr>
								<tr>
									<td>Foreign exchange office</td>
									<td>bureau de change</td>
									<td>مكتب صرف العملات الأجنبية</td>
								</tr>
								<tr>
									<td>Gold bar</td>
									<td>lingot d'or</td>
									<td>سبيكة ذهب</td>
								</tr>
								<tr>
									<td>Interest</td>
									<td>intérêt</td>
									<td>فائدة</td>
								</tr>
								<tr>
									<td>Interest rate</td>
									<td>taux d'intérêt</td>
									<td>معدل الفائدة</td>
								</tr>
								<tr>
									<td>Investment</td>
									<td>investissement</td>
									<td>استثمار</td>
								</tr>
								<tr>
									<td>Leasing</td>
									<td>Location</td>
									<td>تأجير</td>
								</tr>
								<tr>
									<td>Loan, borrowing</td>
									<td>prêt emprunt</td>
									<td>قرض</td>
								</tr>
								<tr>
									<td>Mean of payment</td>
									<td>moyen de paiement</td>
									<td>وسيلة الدفع</td>
								</tr>
								<tr>
									<td>Means of credit</td>
									<td>Moyen de crédit</td>
									<td>وسيلة الائتمان</td>
								</tr>
								<tr>
									<td>Monetary</td>
									<td>monétaire</td>
									<td>نقدي</td>
								</tr>
								<tr>
									<td>Money</td>
									<td>argent</td>
									<td>مال</td>
								</tr>
								<tr>
									<td>Money laundering</td>
									<td>blanchiment d'argent</td>
									<td>تبييض الأموال</td>
								</tr>
								<tr>
									<td>Mortgage</td>
									<td>hypothèque</td>
									<td>الرهن العقاري</td>
								</tr>
								<tr>
									<td>Overdraft</td>
									<td>découvert</td>
									<td>السحب على المكشوف</td>
								</tr>
								<tr>
									<td>Overdrawn account</td>
									<td>compte à découvert</td>
									<td>حساب مكشوف</td>
								</tr>
								<tr>
									<td>Pay slip</td>
									<td>Fiche de salaire</td>
									<td>زلة الراتب</td>
								</tr>
								<tr>
									<td>Private bank</td>
									<td>banque privée</td>
									<td>بنك خاص</td>
								</tr>
								<tr>
									<td>Rate</td>
									<td>taux</td>
									<td>معدل</td>
								</tr>
								<tr>
									<td>Real estate loan</td>
									<td>prêt immobilier</td>
									<td>قرض عقاري</td>
								</tr>
								<tr>
									<td>Receipt</td>
									<td>reçu</td>
									<td>تلقى</td>
								</tr>
								<tr>
									<td>Rent</td>
									<td>loyer</td>
									<td>أجرة</td>
								</tr>
								<tr>
									<td>Retail bank</td>
									<td>banque de détail</td>
									<td>بنك التجزئة</td>
								</tr>
								<tr>
									<td>Safe</td>
									<td>coffre-fort</td>
									<td>خزنة</td>
								</tr>
								<tr>
									<td>Saving bank</td>
									<td>caisse d'épargne</td>
									<td>بنك إدخار</td>
								</tr>
								<tr>
									<td>Savings</td>
									<td>économies</td>
									<td>مدخرات</td>
								</tr>
								<tr>
									<td>Savings account</td>
									<td>compte d'épargne</td>
									<td>حساب التوفير</td>
								</tr>
								<tr>
									<td>Secured credit</td>
									<td>prêt garanti</td>
									<td>الائتمان المضمون</td>
								</tr>
								<tr>
									<td>Stock exchange</td>
									<td>la bourse</td>
									<td>البورصة</td>
								</tr>
								<tr>
									<td>Stock markets</td>
									<td>Marchés boursiers</td>
									<td>أسواق الأسهم</td>
								</tr>
								<tr>
									<td>Subsidiary</td>
									<td>filiale</td>
									<td>شركة فرعية</td>
								</tr>
								<tr>
									<td>thrifty</td>
									<td>économe</td>
									<td>مقتصد</td>
								</tr>
								<tr>
									<td>Wages</td>
									<td>salaires</td>
									<td>أجور</td>
								</tr>
								<tr>
									<td>Withdraw</td>
									<td>retirer (l'argent)</td>
									<td>سحب</td>
								</tr>


								<tr>
									<th>Useful verbs</th>
									<th>Verbes utiles</th>
									<th>أفعال مفيدة</th>
								</tr>
								<tr>
									<td>To apply for a loan</td>
									<td>demander un prêt</td>
									<td>تقديم طلب للحصول على قرض</td>
								</tr>
								<tr>
									<td>To ask for a guarantee</td>
									<td>demander une garantie</td>
									<td>طلب ضمان</td>
								</tr>
								<tr>
									<td>To borrow</td>
									<td>emprunter</td>
									<td>يستلف</td>
								</tr>
								<tr>
									<td>To buy</td>
									<td>acheter</td>
									<td>شراء</td>
								</tr>
								<tr>
									<td>To buy on credit</td>
									<td>acheter à crédit</td>
									<td>شراء على الائتمان</td>
								</tr>
								<tr>
									<td>To change money (into Dollar)</td>
									<td>changer de l'argent (en Dollar)</td>
									<td>تغيير المال (إلى الدولار)</td>
								</tr>
								<tr>
									<td>To deposit money in a bank</td>
									<td>déposer de l'argent en banque</td>
									<td>إيداع الأموال في البنك</td>
								</tr>
								<tr>
									<td>To grant a loan</td>
									<td>accorder un prêt</td>
									<td>منح قرض</td>
								</tr>
								<tr>
									<td>To invest</td>
									<td>investir</td>
									<td>إستثمار</td>
								</tr>
								<tr>
									<td>To pay</td>
									<td>payer</td>
									<td>دفع</td>
								</tr>
								<tr>
									<td>To refund</td>
									<td>rembourser</td>
									<td>إعادة مال</td>
								</tr>
								<tr>
									<td>To save</td>
									<td>économiser</td>
									<td>حفظ</td>
								</tr>
								<tr>
									<td>To speculate</td>
									<td>spéculer</td>
									<td>التكهن</td>
								</tr>
								<tr>
									<td>To spend</td>
									<td>dépenser</td>
									<td>يصرف</td>
								</tr>
								<tr>
									<td>Transaction</td>
									<td>transaction</td>
									<td>عملية تجارية</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/deviselogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les devises<?php endif; if($langue === 'english'): ?>Currencies<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="devise.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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
