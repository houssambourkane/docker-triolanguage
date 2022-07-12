<?php
		$titrefr = "QUALITES & DEFAUTS";
		$titreang = "QUALITIES & FLAWS";
		$bg = "./assets/img/bgtheme/qualitedefautbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Qualités & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des qualités et défauts en Anglais - Français - Arabe">
		<meta name="keywords" content="positive, negative, qualité, quality, défaut, default, flaw, personnalité, personality, caractère, caractèristique, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Qualités & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></h1>

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
									<td class="soustitre">Qualities</td>
									<td class="soustitre">Qualités</td>
									<td class="soustitre">الصفات</td>
								</tr>
								<tr>
									<td>Adventurous</td>
									<td>aventureux</td>
									<td>مغامر</td>
								</tr>
								<tr>
									<td>Ambitious</td>
									<td>Ambitieux</td>
									<td>طموح</td>
								</tr>
								<tr>
									<td>Amusing</td>
									<td>Amusant</td>
									<td>ممتع</td>
								</tr>
								<tr>
									<td>Available</td>
									<td>Disponible</td>
									<td>متاح</td>
								</tr>
								<tr>
									<td>Beautiful</td>
									<td>Beau</td>
									<td>جميل</td>
								</tr>
								
								<tr>
									<td>Brave/Courageous</td>
									<td>brave/courageux</td>
									<td>شجاع</td>
								</tr>
								<tr>
									<td>Calm</td>
									<td>calme</td>
									<td>هدوء</td>
								</tr>
								<tr>
									<td>Careful</td>
									<td>soigneux</td>
									<td>حذر</td>
								</tr>
								<tr>
									<td>Cautious/prudent/vigilant</td>
									<td>prudent/vigilant</td>
									<td>حذر</td>
								</tr>
								<tr>
									<td>Charismatic</td>
									<td>Charismatique</td>
									<td>كاريزمي</td>
								</tr>
								<tr>
									<td>Charitable</td>
									<td>charitable</td>
									<td>خيري</td>
								</tr>
								<tr>
									<td>Charming</td>
									<td>Charmant</td>
									<td>جذاب</td>
								</tr>
								<tr>
									<td>Cheerful</td>
									<td>gai</td>
									<td>مرح</td>
								</tr>
								<tr>
									<td>Cultivated</td>
									<td>Cultivé</td>
									<td>مثقف</td>
								</tr>
								<tr>
									<td>Creative/inventive</td>
									<td>Créatif/inventif</td>
									<td>إبداعي</td>
								</tr>
								<tr>
									<td>Determined</td>
									<td>Déterminé</td>
									<td>حاسم</td>
								</tr>
								<tr>
									<td>Disciplined</td>
									<td>Discipliné</td>
									<td>منضبط</td>
								</tr>
								
								<tr>
									<td>Efficient</td>
									<td>efficace</td>
									<td>فعال</td>
								</tr>
								<tr>
									<td>Energetic</td>
									<td>énergique</td>
									<td>نشيط</td>
								</tr>
								<tr>
									<td>Enterprising</td>
									<td>entreprenant</td>
									<td>مغامر</td>
								</tr>
								<tr>
									<td>enthusiastic</td>
									<td>enthousiaste</td>
									<td>متحمس</td>
								</tr>
								<tr>
									<td>Experienced</td>
									<td>expérimenté</td>
									<td>ذو تجربة</td>
								</tr>
								<tr>
									<td>Extrovert</td>
									<td>Extraverti</td>
									<td>منفتح</td>
								</tr>
								<tr>
									<td>Frank</td>
									<td>franc</td>
									<td>صريح</td>
								</tr>
								<tr>
									<td>Friendly</td>
									<td>amical</td>
									<td>ودود</td>
								</tr>
								<tr>
									<td>Funny</td>
									<td>Drôle</td>
									<td>مضحك</td>
								</tr>
								<tr>
									<td>Generous</td>
									<td>généreux</td>
									<td>سخي</td>
								</tr>
								<tr>
									<td>Gifted</td>
									<td>doué</td>
									<td>موهوب</td>
								</tr>
								<tr>
									<td>Helpful</td>
									<td>serviable</td>
									<td>مفيد</td>
								</tr>
								<tr>
									<td>Honest</td>
									<td>honnête</td>
									<td>صادق</td>
								</tr>
								<tr>
									<td>Humble</td>
									<td>humble</td>
									<td>متواضع</td>
								</tr>
								<tr>
									<td>Idealistic</td>
									<td>idéaliste</td>
									<td>مثالي</td>
								</tr>
								<tr>
									<td>Imaginative</td>
									<td>imaginatif</td>
									<td>واسع الخيال</td>
								</tr>
								<tr>
									<td>Innocent</td>
									<td>innocent</td>
									<td>بريء</td>
								</tr>
								<tr>
									<td>Intelligent</td>
									<td>intelligent</td>
									<td>ذكي</td>
								</tr>
								<tr>
									<td>Lovable</td>
									<td>Aimable</td>
									<td>محبوب</td>
								</tr>
								<tr>
									<td>Loyal</td>
									<td>fidèle</td>
									<td>وفي</td>
								</tr>
								<tr>
									<td>Modest</td>
									<td>modeste</td>
									<td>متواضع</td>
								</tr>
								<tr>
									<td>Nice/Kind</td>
									<td>gentil</td>
									<td>لطيف</td>
								</tr>
								<tr>
									<td>Patient</td>
									<td>patient</td>
									<td>صبور</td>
								</tr>
								<tr>
									<td>Persevering</td>
									<td>persévérant</td>
									<td>مثابر</td>
								</tr>
								<tr>
									<td>Persuasive</td>
									<td>persuasif</td>
									<td>مقنع</td>
								</tr>
								<tr>
									<td>Placid</td>
									<td>placide</td>
									<td>هادئ</td>
								</tr>
								<tr>
									<td>Polite</td>
									<td>poli</td>
									<td>مؤدب</td>
								</tr>
								<tr>
									<td>Punctual</td>
									<td>ponctuel</td>
									<td>منتظم</td>
								</tr>
								<tr>
									<td>Rational</td>
									<td>Rationnel</td>
									<td>عقلاني</td>
								</tr>
								<tr>
									<td>Reasonable</td>
									<td>raisonnable</td>
									<td>معقول</td>
								</tr>
								<tr>
									<td>Reliable</td>
									<td>fiable</td>
									<td>موثوق</td>
								</tr>
								<tr>
									<td>Self-confident</td>
									<td>confiant</td>
									<td>واثق من نفسه</td>
								</tr>
								<tr>
									<td>Sensitive</td>
									<td>sensible</td>
									<td>حساس</td>
								</tr>
								<tr>
									<td>Serious</td>
									<td>sérieux</td>
									<td>جاد</td>
								</tr>
								<tr>
									<td>Shrewd</td>
									<td>Astucieux</td>
									<td>داهية</td>
								</tr>
								<tr>
									<td>Sincere</td>
									<td>sincère</td>
									<td>صادق</td>
								</tr>
								<tr>
									<td>Skilful</td>
									<td>habile/adroit</td>
									<td>ماهر</td>
								</tr>
								<tr>
									<td>Sociable</td>
									<td>Sociable</td>
									<td>إجتماعي</td>
								</tr>
								<tr>
									<td>Soothing</td>
									<td>Apaisant</td>
									<td>مهدئ</td>
								</tr>
								<tr>
									<td>Steadfast</td>
									<td>indéfectible</td>
									<td>ثابت</td>
								</tr>
								<tr>
									<td>Strong</td>
									<td>Fort</td>
									<td>قوي</td>
								</tr>
								<tr>
									<td>Talented</td>
									<td>talentueux</td>
									<td>موهوب</td>
								</tr>
								<tr>
									<td>Tolerant</td>
									<td>tolérant</td>
									<td>متسامح</td>
								</tr>
								<tr>
									<td>Trustworthy</td>
									<td>digne de confiance</td>
									<td>جدير بالثقة</td>
								</tr>
								<tr>
									<td>Warm-hearted</td>
									<td>chaleureux</td>
									<td>ودي</td>
								</tr>
								<tr>
									<td>Welcoming</td>
									<td>Accueillant</td>
									<td>مرحب</td>
								</tr>
								<tr>
									<td>Wise</td>
									<td>Sage</td>
									<td>حكيم</td>
								</tr>

								<tr>
									<td class="soustitre">Flaws</td>
									<td class="soustitre">Défauts</td>
									<td class="soustitre">العيوب</td>
								</tr>
								<tr>
									<td>Aggressive</td>
									<td>Agressif</td>
									<td>عدواني</td>
								</tr>
								<tr>
									<td>Angry/choleric</td>
									<td>Coléreux</td>
									<td>غاضب</td>
								</tr>
								<tr>
									<td>Arrogant</td>
									<td>arrogant</td>
									<td>متكبر</td>
								</tr>
								<tr>
									<td>Authoritative</td>
									<td>autoritaire</td>
									<td>استبدادي</td>
								</tr>
								<tr>
									<td>Brutal</td>
									<td>brutal</td>
									<td>وحشي</td>
								</tr>
								<tr>
									<td>Careless</td>
									<td>négligeant/insouciant</td>
									<td>غير مبالي</td>
								</tr>
								<tr>
									<td>Complicated</td>
									<td>Compliqué</td>
									<td>معقد</td>
								</tr>
								<tr>
									<td>Cruel</td>
									<td>Cruel</td>
									<td>قاسي</td>
								</tr>
								<tr>
									<td>Curious</td>
									<td>curieux</td>
									<td>فضولي</td>
								</tr>
								<tr>
									<td>Dishonest</td>
									<td>malhonnête</td>
									<td>غير أمين</td>
								</tr>
								<tr>
									<td>Disobedient</td>
									<td>désobéissant</td>
									<td>عاص</td>
								</tr>
								<tr>
									<td>Disrespectful</td>
									<td>Irrespectueux</td>
									<td>قليل الاحترام</td>
								</tr>
								<tr>
									<td>dominant</td>
									<td>dominant</td>
									<td>مهيمن</td>
								</tr>
								<tr>
									<td>Dreamy</td>
									<td>rêveur</td>
									<td>حالم</td>
								</tr>
								<tr>
									<td>Dumb</td>
									<td>Stupide</td>
									<td>غبي</td>
								</tr>
								<tr>
									<td>Erratic</td>
									<td>Erratique</td>
									<td>غير منظم</td>
								</tr>
								<tr>
									<td>Fearful</td>
									<td>Peureux</td>
									<td>خواف</td>
								</tr>
								<tr>
									<td>Furious</td>
									<td>furieux</td>
									<td>غاضب</td>
								</tr>
								<tr>
									<td>Greedy/gourmand</td>
									<td>gourmand</td>
									<td>طماع</td>
								</tr>
								<tr>
									<td>Hard-hearted</td>
									<td>cœur dur</td>
									<td>قاسي القلب</td>
								</tr>
								<tr>
									<td>Harmful</td>
									<td>malfaisant</td>
									<td>ضار</td>
								</tr>
								<tr>
									<td>Haughty</td>
									<td>hautain</td>
									<td>متجبر</td>
								</tr>
								<tr>
									<td>Heartless</td>
									<td>sans cœur</td>
									<td>عديم الشفقة</td>
								</tr>
								<tr>
									<td>Hypocritical</td>
									<td>hypocrite</td>
									<td>منافق</td>
								</tr>
								<tr>
									<td>Immature</td>
									<td>Immature</td>
									<td>غير ناضج</td>
								</tr>
								<tr>
									<td>Impatient</td>
									<td>impatient</td>
									<td>قليل الصبر</td>
								</tr>
								<tr>
									<td>Impolite</td>
									<td>impoli</td>
									<td>غير مهذب</td>
								</tr>
								<tr>
									<td>Impulsive</td>
									<td>impulsif</td>
									<td>مندفع</td>
								</tr>
								<tr>
									<td>Inattentive</td>
									<td>Inattentif</td>
									<td>غافل</td>
								</tr>
								<tr>
									<td>Insolent</td>
									<td>insolent</td>
									<td>وقح</td>
								</tr>
								<tr>
									<td>Introverted</td>
									<td>Introverti</td>
									<td>انطوائي</td>
								</tr>
								<tr>
									<td>Irresponsible</td>
									<td>Irresponsable</td>
									<td>غير مسؤول</td>
								</tr>
								<tr>
									<td>Jealous</td>
									<td>jaloux</td>
									<td>غيور</td>
								</tr>
								<tr>
									<td>Lack of self-confidence</td>
									<td>manque de confiance en soi</td>
									<td>عدم الثقة بالنفس</td>
								</tr>
								<tr>
									<td>Lack of self-control</td>
									<td>manque de maîtrise de soi</td>
									<td>عدم ضبط النفس</td>
								</tr>
								<tr>
									<td>Lazy</td>
									<td>paresseux</td>
									<td>كسول</td>
								</tr>
								<tr>
									<td>Liar</td>
									<td>Menteur</td>
									<td>كذاب</td>
								</tr>
								<tr>
									<td>Malicious</td>
									<td>malicieux</td>
									<td>خبيث</td>
								</tr>
								<tr>
									<td>Maniac</td>
									<td>Maniaque</td>
									<td>مهووس</td>
								</tr>
								<tr>
									<td>Materialistic</td>
									<td>matérialiste</td>
									<td>مادي</td>
								</tr>
								<tr>
									<td>Mean/wicked</td>
									<td>Méchant</td>
									<td>شرير</td>
								</tr>
								<tr>
									<td>Moody</td>
									<td>humeur changeante</td>
									<td>متقلبة المزاج</td>
								</tr>
								<tr>
									<td>Negative</td>
									<td>Négatif</td>
									<td>سلبي</td>
								</tr>
								<tr>
									<td>Nervous</td>
									<td>nerveux</td>
									<td>متوتر</td>
								</tr>
								<tr>
									<td>Noisy</td>
									<td>bruyant</td>
									<td>مزعج</td>
								</tr>
								<tr>
									<td>Obstinate</td>
									<td>obstiné</td>
									<td>عنيد</td>
								</tr>
								<tr>
									<td>Pessimistic</td>
									<td>pessimiste</td>
									<td>متشائم</td>
								</tr>
								<tr>
									<td>Proud</td>
									<td>fier/orgueilleux</td>
									<td>فخور</td>
								</tr>
								<tr>
									<td>Racist</td>
									<td>Raciste</td>
									<td>عنصري</td>
								</tr>
								<tr>
									<td>Rancorous/Spiteful</td>
									<td>Rancunier</td>
									<td>حاقد</td>
								</tr>
								<tr>
									<td>Sad</td>
									<td>Triste</td>
									<td>حزين</td>
								</tr>
								<tr>
									<td>Selfish</td>
									<td>égoïste</td>
									<td>أناني</td>
								</tr>
								<tr>
									<td>Shy</td>
									<td>timide</td>
									<td>خجول</td>
								</tr>
								<tr>
									<td>Stingy</td>
									<td>Radin/avare</td>
									<td>بخيل</td>
								</tr>
								<tr>
									<td>Stubborn</td>
									<td>têtu</td>
									<td>عنيد</td>
								</tr>
								<tr>
									<td>Stupid</td>
									<td>bête</td>
									<td>غبي</td>
								</tr>
								<tr>
									<td>Taciturn</td>
									<td>taciturne</td>
									<td>قليل الكلام</td>
								</tr>
								<tr>
									<td>Talkative</td>
									<td>Bavard</td>
									<td>ثرثار</td>
								</tr>
								<tr>
									<td>Touchy</td>
									<td>susceptible</td>
									<td>شديد الحساسية</td>
								</tr>
								<tr>
									<td>turbulant</td>
									<td>turbulent</td>
									<td>مشاغب</td>
								</tr>
								<tr>
									<td>Uncommunicative</td>
									<td>Renfermé</td>
									<td>مغلق</td>
								</tr>
								<tr>
									<td>Unforgiving</td>
									<td>impitoyable</td>
									<td>عديم الرحمة</td>
								</tr>
								<tr>
									<td>Vain</td>
									<td>vain</td>
									<td>تافه</td>
								</tr>
								<tr>
									<td>Versatile</td>
									<td>Versatile</td>
									<td>متقلب</td>
								</tr>
								<tr>
									<td>Vulgar</td>
									<td>Vulgaire</td>
									<td>بذئ</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/antonymelogo.png" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Antonymes<?php endif; if($langue === 'english'): ?>Antonyms<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="antonyme.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sentimentlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Sentiments & émotions<?php endif; if($langue === 'english'): ?>Feelings & emotions<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="sentiments.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		