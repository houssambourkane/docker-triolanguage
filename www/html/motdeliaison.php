<?php
		$titrefr = "MOTS DE LIAISON";
		$titreang = "LINKING WORDS";
		$bg = "./assets/img/bgtheme/motdeliaisonbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Mot de liaison<?php endif; if($langue === 'english'): ?>Linking words<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des mots de liaison en Anglais - Français - Arabe">
		<meta name="keywords" content="mot, liaison, grammaire, grammar, liking, words, word, cours, règle, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Mot de liaison<?php endif; if($langue === 'english'): ?>Linking words<?php endif; ?></h1>

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
									<td class="soustitre">introduction</td>
									<td class="soustitre">introduction</td>
									<td class="soustitre">المقدمة</td>
								</tr>
								<tr>
									<td>First</td>
									<td>en premier lieu</td>
									<td>أولا</td>
								</tr>
								<tr>
									<td>first of all</td>
									<td>tout d'abord</td>
									<td>أولا قبل كل شيء</td>
								</tr>
								<tr>
									<td>Foremost/most of all</td>
									<td>avant tout</td>
									<td>قبل كل شيء</td>
								</tr>
								<tr>
									<td>To start  / to begin</td>
									<td>pour commencer</td>
									<td>للبدأ</td>
								</tr>
								<tr>
									<td>In the beginning</td>
									<td>au début</td>
									<td>في البداية</td>
								</tr>
								<tr>
									<td>At first glance</td>
									<td>à première vue</td>
									<td>من النظرة الاولى</td>
								</tr>

								<tr>
									<td class="soustitre">conclusion</td>
									<td class="soustitre">conclusion</td>
									<td class="soustitre">خاتمة</td>
								</tr>
								<tr>
									<td>In brief</td>
									<td>En bref</td>
									<td>باختصار</td>
								</tr>
								<tr>
									<td>in a word</td>
									<td>en un mot</td>
									<td>في كلمة واحدة</td>
								</tr>
								<tr>
									<td>Eventually/ultimately</td>
									<td>éventuellement/en fin de compte</td>
									<td>في النهاية</td>
								</tr>
								<tr>
									<td>Lastly/finally</td>
									<td>enfin/finalement/en dernier lieu</td>
									<td>أخيرا</td>
								</tr>
								<tr>
									<td>In conclusion</td>
									<td>en conclusion</td>
									<td>في الختام</td>
								</tr>
								<tr>
									<td>In summary/to sum up</td>
									<td>en résumé</td>
									<td>في ملخص</td>
								</tr>

								<tr>
									<td class="soustitre">cause</td>
									<td class="soustitre">cause</td>
									<td class="soustitre">سبب</td>
								</tr>
								<tr>
									<td>Because</td>
									<td>parce que/car</td>
									<td>لان</td>
								</tr>
								<tr>
									<td>Because of</td>
									<td>en raison de /à cause de</td>
									<td>بسبب</td>
								</tr>
								<tr>
									<td>Due to</td>
									<td>dû à</td>
									<td>بسبب</td>
								</tr>
								<tr>
									<td>Since</td>
									<td>puisque</td>
									<td>بما أن</td>
								</tr>
								<tr>
									<td>On account of</td>
									<td>à cause de</td>
									<td>على حساب</td>
								</tr>
								<tr>
									<td>Thanks to</td>
									<td>grâce à</td>
									<td>بفضل</td>
								</tr>
								<tr>
									<td>That is why</td>
									<td>voilà pourquoi</td>
									<td>لذلك</td>
								</tr>
								<tr>
									<td>Given that</td>
									<td>étant donné que</td>
									<td>بشرط</td>
								</tr>
								<tr>
									<td>seeing that</td>
									<td>Vu que</td>
									<td>ظرا ل</td>
								</tr>

								<tr>
									<td class="soustitre">purpose</td>
									<td class="soustitre">but</td>
									<td class="soustitre">هدف</td>
								</tr>
								<tr>
									<td>In order to/ so as to</td>
									<td>afin de</td>
									<td>لكي</td>
								</tr>
								<tr>
									<td>So (that)</td>
									<td>pour que/de façon à</td>
									<td>وذلك ل</td>
								</tr>
								<tr>
									<td>for this purpose</td>
									<td>dans ce but</td>
									<td>لهذا الغرض</td>
								</tr>
								<tr>
									<td>With the intention of</td>
									<td>Dans l'intention de</td>
									<td>مع نية</td>
								</tr>
								<tr>
									<td class="soustitre">consequence</td>
									<td class="soustitre">conséquence</td>
									<td class="soustitre">نتيجة</td>
								</tr>
								<tr>
									<td>As a consequence</td>
									<td>En conséquence</td>
									<td>نتيجة</td>
								</tr>
								<tr>
									<td>as a result</td>
									<td>par conséquent</td>
									<td>كنتيجة ل</td>
								</tr>
								<tr>
									<td>To the point that</td>
									<td>au point que</td>
									<td>لى النقطة التي</td>
								</tr>
								<tr>
									<td>To such a point that</td>
									<td>à tel point que</td>
									<td>لدرجة أن</td>
								</tr>
								<tr>
									<td>thus</td>
									<td>Donc/ainsi</td>
									<td>هكذا</td>
								</tr>
								<tr>
									<td>So</td>
									<td>alors</td>
									<td>وبالتالي</td>
								</tr>
								<tr>
									<td>Hence</td>
									<td>Par conséquent</td>
									<td>بالتالي</td>
								</tr>
								<tr>
									<td>Thereby</td>
									<td>de ce fait</td>
									<td>بهذه الطريقة</td>
								</tr>

								<tr>
									<td class="soustitre">contrast</td>
									<td class="soustitre">opposition</td>
									<td class="soustitre">المعارضة</td>
								</tr>
								<tr>
									<td>Otherwise</td>
									<td>autrement</td>
									<td>بطريقة أخرى</td>
								</tr>
								<tr>
									<td>Instead of</td>
									<td>au lieu de</td>
									<td>بدلا من</td>
								</tr>
								<tr>
									<td>Nonetheless/nevertheless</td>
									<td>néanmoins</td>
									<td>مع ذلك</td>
								</tr>
								<tr>
									<td>Notwithstanding</td>
									<td>nonobstant</td>
									<td>على الرغم من</td>
								</tr>
								<tr>
									<td>Whereas</td>
									<td>tandis que/alors que</td>
									<td>بينما</td>
								</tr>
								<tr>
									<td>On the contrary</td>
									<td>au contraire</td>
									<td>على العكس تماما</td>
								</tr>
								<tr>
									<td>By contrast</td>
									<td>par opposition</td>
									<td>بالمقابل</td>
								</tr>
								<tr>
									<td>Yet</td>
									<td>pourtant</td>
									<td>مع ذلك</td>
								</tr>
								<tr>
									<td>Conversely</td>
									<td>inversement</td>
									<td>العكس بالعكس</td>
								</tr>
								<tr>
									<td>However</td>
									<td>cependant/toutefois</td>
									<td>مع ذلك</td>
								</tr>
								<tr>
									<td>On the other hand</td>
									<td>en revanche</td>
									<td>من ناحية أخرى</td>
								</tr>

								<tr>
									<td class="soustitre">certainty</td>
									<td class="soustitre">certitude</td>
									<td class="soustitre">يقين</td>
								</tr>
								<tr>
									<td>In any case</td>
									<td>en tout cas</td>
									<td>في أي حال</td>
								</tr>
								<tr>
									<td>Anyway</td>
									<td>en tout cas</td>
									<td>على أي حال</td>
								</tr>
								<tr>
									<td class="soustitre">Comparison</td>
									<td class="soustitre">Comparaison</td>
									<td class="soustitre">مقارنة</td>
								</tr>
								<tr>
									<td>Unlike</td>
									<td>contrairement à</td>
									<td>على عكس</td>
								</tr>
								<tr>
									<td>As though/ as if</td>
									<td>comme si</td>
									<td>كما لو</td>
								</tr>
								<tr>
									<td>In comparison</td>
									<td>par comparaison</td>
									<td>بالمقارنة</td>
								</tr>
								<tr>
									<td>Compared to</td>
									<td>comparé à</td>
									<td>مقارنة ب</td>
								</tr>
								<tr>
									<td>As well as</td>
									<td>Aussi bien que</td>
									<td>كذلك</td>
								</tr>
								<tr>
									<td>Similarly</td>
									<td>de même</td>
									<td>وبالمثل</td>
								</tr>
								<tr>
									<td>Like</td>
									<td>comme</td>
									<td>مثل</td>
								</tr>

								<tr>
									<td class="soustitre">restriction</td>
									<td class="soustitre">restriction</td>
									<td class="soustitre">قيد</td>
								</tr>
								<tr>
									<td>Although</td>
									<td>bien que</td>
									<td>برغم من</td>
								</tr>
								<tr>
									<td>though</td>
									<td>quoique</td>
									<td>رغم أن</td>
								</tr>
								<tr>
									<td>Despite</td>
									<td>malgré</td>
									<td>رغم</td>
								</tr>
								<tr>
									<td>In spite of</td>
									<td>en dépit de</td>
									<td>على الرغم من</td>
								</tr>
								<tr>
									<td>No matter what</td>
									<td>peu importe que</td>
									<td>بغض النظر</td>
								</tr>
								<tr>
									<td>For all i know</td>
									<td>pour autant que je sache</td>
									<td>لكل ما أعرفه</td>
								</tr>
								<tr>
									<td>Even though</td>
									<td>même si</td>
									<td>على الرغم من</td>
								</tr>
								<tr>
									<td>As far as</td>
									<td>autant que</td>
									<td>بقدر ماكذلك</td>
								</tr>
								<tr>
									<td>Still</td>
									<td>encore</td>
									<td>ما يزال</td>
								</tr>

								<tr>
									<td class="soustitre">Condition</td>
									<td class="soustitre">Condition</td>
									<td class="soustitre">شرط</td>
								</tr>
								<tr>
									<td>In condition of</td>
									<td>à condition que</td>
									<td>بشرط ان</td>
								</tr>
								<tr>
									<td>In case</td>
									<td>au cas où</td>
									<td>في حالة</td>
								</tr>
								<tr>
									<td>As long as</td>
									<td>Tant que</td>
									<td>طالما</td>
								</tr>
								<tr>
									<td>Unless/except if</td>
									<td>à moins que</td>
									<td>إلا إذا</td>
								</tr>
								<tr>
									<td>Then</td>
									<td>alors</td>
									<td>ثم</td>
								</tr>
								<tr>
									<td>If</td>
									<td>si</td>
									<td>إذا</td>
								</tr>

								<tr>
									<td class="soustitre">Duality</td>
									<td class="soustitre">Dualité</td>
									<td class="soustitre">ازدواجية</td>
								</tr>
								<tr>
									<td>Both…and</td>
									<td>à la fois…et</td>
									<td>كل من...و</td>
								</tr>
								<tr>
									<td>Either…or</td>
									<td>soit…soit</td>
									<td>إما...أو</td>
								</tr>
								<tr>
									<td>Neither…nor</td>
									<td>ni…ni</td>
									<td>لا...ولا</td>
								</tr>

								<tr>
									<td class="soustitre">exemple/Instance</td>
									<td class="soustitre">Exemple</td>
									<td class="soustitre">مثال</td>
								</tr>
								<tr>
									<td>Especially</td>
									<td>Notamment</td>
									<td>خصوصا</td>
								</tr>
								<tr>
									<td>In particular</td>
									<td>En particulier</td>
									<td>بالخصوص</td>
								</tr>
								<tr>
									<td>Particularly</td>
									<td>Particulièrement</td>
									<td>خاصة</td>
								</tr>
								<tr>
									<td>For example/ for instance</td>
									<td>par exemple</td>
									<td>على سبيل المثال</td>
								</tr>
								<tr>
									<td>here is</td>
									<td>Voici</td>
									<td>ها هو</td>
								</tr>
								<tr>
									<td>According to the expression of</td>
									<td>Selon l'expression de</td>
									<td>حسب التعبير</td>
								</tr>
								<tr>
									<td>To clarify</td>
									<td>Pour clarifier</td>
									<td>لتوضيح</td>
								</tr>
								<tr>
									<td>To exemplify</td>
									<td>Pour exemplifier</td>
									<td>على سبيل المثال</td>
								</tr>
								<tr>
									<td>Concretely</td>
									<td>Concrètement</td>
									<td>بشكل ملموس</td>
								</tr>
								<tr>
									<td>In practice</td>
									<td>En pratique</td>
									<td>عمليا</td>
								</tr>
								<tr>
									<td>That is to say</td>
									<td>c'est-à-dire</td>
									<td>يعني</td>
								</tr>
								<tr>
									<td>Such as</td>
									<td>comme par exemple</td>
									<td>مثل</td>
								</tr>

								<tr>
									<td class="soustitre">Time/enumeration</td>
									<td class="soustitre">Temps/énumération</td>
									<td class="soustitre">الوقت/تعداد</td>
								</tr>
								<tr>
									<td>Currently</td>
									<td>Actuellement</td>
									<td>حاليا</td>
								</tr>
								<tr>
									<td>Today</td>
									<td>Aujourd'hui</td>
									<td>اليوم</td>
								</tr>
								<tr>
									<td>Once</td>
									<td>Autrefois/jadis</td>
									<td>سابقا</td>
								</tr>
								<tr>
									<td>Once</td>
									<td>une fois que</td>
									<td>بمجرد</td>
								</tr>
								<tr>
									<td>Nowadays</td>
									<td>De nos jours</td>
									<td>في هذه الأيام</td>
								</tr>
								<tr>
									<td>As soon as</td>
									<td>Dès que</td>
									<td>حالما</td>
								</tr>
								<tr>
									<td>As long as</td>
									<td>Aussi longtemps que</td>
									<td>طالما</td>
								</tr>
								<tr>
									<td>Now</td>
									<td>Maintenant</td>
									<td>الآن</td>
								</tr>
								<tr>
									<td>Thereafter</td>
									<td>Par la suite</td>
									<td>بعد ذلك</td>
								</tr>
								<tr>
									<td>Later</td>
									<td>Plus tard</td>
									<td>في وقت لاحق</td>
								</tr>
								<tr>
									<td>Right now</td>
									<td>Tout de suite</td>
									<td>فورا</td>
								</tr>
								<tr>
									<td>Then</td>
									<td>puis</td>
									<td>ثم</td>
								</tr>
								<tr>
									<td>Next</td>
									<td>ensuite</td>
									<td>التالي</td>
								</tr>
								<tr>
									<td>Firstly</td>
									<td>premièrement</td>
									<td>أولا</td>
								</tr>
								<tr>
									<td>Secondly</td>
									<td>deuxièmement</td>
									<td>ثانيا</td>
								</tr>
								<tr>
									<td>Afterwards</td>
									<td>après</td>
									<td>بعدئذ</td>
								</tr>
								<tr>
									<td>Finally</td>
									<td>finalement</td>
									<td>أخيرا</td>
								</tr>
								<tr>
									<td>While</td>
									<td>pendant que</td>
									<td>أثناء</td>
								</tr>
								<tr>
									<td>When</td>
									<td>quand/lorsque</td>
									<td>عندما</td>
								</tr>
								<tr>
									<td>During</td>
									<td>durant/pendan</td>
									<td>خلال</td>
								</tr>
								<tr>
									<td>Before</td>
									<td>avant</td>
									<td>قبل</td>
								</tr>
								<tr>
									<td>After</td>
									<td>après</td>
									<td>بعد</td>
								</tr>
								<tr>
									<td>Already</td>
									<td>déjà</td>
									<td>سابقا</td>
								</tr>
								<tr>
									<td>Since</td>
									<td>depuis</td>
									<td>منذ</td>
								</tr>
								<tr>
									<td>Until/till</td>
									<td>jusqu'à ce que</td>
									<td>حتى</td>
								</tr>
								<tr>
									<td>Hardly/barely</td>
									<td>à peine</td>
									<td>بالكاد</td>
								</tr>
								<tr>
									<td>Meanwhile</td>
									<td>en attendant</td>
									<td>وفي الوقت نفسه</td>
								</tr>
								<tr>
									<td>In the meantime</td>
									<td>entre temps</td>
									<td>في هذه الأثناء</td>
								</tr>
								<tr>
									<td>Whenever</td>
									<td>à chaque fois</td>
									<td>كلما</td>
								</tr>

								<tr>
									<td class="soustitre">addition</td>
									<td class="soustitre">addition</td>
									<td class="soustitre">إضافة</td>
								</tr>
								<tr>
									<td>Furthermore</td>
									<td>en outre</td>
									<td>علاوة على ذلك</td>
								</tr>
								<tr>
									<td>Moreover</td>
									<td>de plus</td>
									<td>علاوة على ذلك</td>
								</tr>
								<tr>
									<td>In addition</td>
									<td>en addition</td>
									<td>بالاضافة</td>
								</tr>
								<tr>
									<td>Besides</td>
									<td>qui plus est</td>
									<td>بالإضافة إلى</td>
								</tr>
								<tr>
									<td>Also</td>
									<td>aussi</td>
									<td>كذلك</td>
								</tr>
								<tr>
									<td>Too</td>
									<td>de même</td>
									<td>أيضا</td>
								</tr>
								<tr>
									<td>On the one hand</td>
									<td>d'une part</td>
									<td>من ناحية</td>
								</tr>
								<tr>
									<td>On the other hand</td>
									<td>d'autre part</td>
									<td>من ناحية أخرى</td>
								</tr>
								<tr>
									<td>By the way</td>
									<td>au fait</td>
									<td>على فكرة</td>
								</tr>
								<tr>
									<td>In fact</td>
									<td>en fait</td>
									<td>في الواقع</td>
								</tr>
								<tr>
									<td>In other words</td>
									<td>en d'autres termes</td>
									<td>بعبارات أخرى</td>
								</tr>
								<tr>
									<td>On top of all that</td>
									<td>en plus de tout ça</td>
									<td>بالإضافة إلى كل ذلك</td>
								</tr>
								<tr>
									<td>Indeed</td>
									<td>en effet</td>
									<td>في الواقع</td>
								</tr>
								<tr>
									<td class="soustitre">Other</td>
									<td class="soustitre">Autre</td>
									<td class="soustitre">آخر</td>
								</tr>
								<tr>
									<td>At any rate</td>
									<td>de toute façon</td>
									<td>على أي حال</td>
								</tr>
								<tr>
									<td>Rather</td>
									<td>plutôt</td>
									<td>بدلا</td>
								</tr>
								<tr>
									<td>Among others</td>
									<td>entre autres</td>
									<td>من بين أمور أخرى</td>
								</tr>
								<tr>
									<td>For fear that</td>
									<td>de crainte que</td>
									<td>خوفا من أن</td>
								</tr>
								<tr>
									<td>Almost</td>
									<td>presque</td>
									<td>تقريبيا</td>
								</tr>
								<tr>
									<td>Quite</td>
									<td>assez</td>
									<td>بما فيه الكفاية</td>
								</tr>
								<tr>
									<td>At most</td>
									<td>au plus</td>
									<td>على الأكثر</td>
								</tr>
								<tr>
									<td>At least</td>
									<td>au moins</td>
									<td>على الأقل</td>
								</tr>
								<tr>
									<td>Obviously</td>
									<td>évidemment</td>
									<td>بوضوح</td>
								</tr>
								<tr>
									<td>Completely</td>
									<td>complètement</td>
									<td>تماما</td>
								</tr>
								<tr>
									<td>Entirely</td>
									<td>entièrement</td>
									<td>كليا</td>
								</tr>
								<tr>
									<td>absolutely</td>
									<td>absolument</td>
									<td>إطلاقا</td>
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
							  <img src="./assets/img/logotheme/les5senslogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Les 5 sens<?php endif; if($langue === 'english'): ?>The 5 senses<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="5sens.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		