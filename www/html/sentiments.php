<?php
		$titrefr = "SENTIMENTS & EMOTIONS";
		$titreang = "FEELINGS & EMOTIONS";
		$bg = "./assets/img/bgtheme/agriculturebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Sentiments & émotions<?php endif; if($langue === 'english'): ?>Feelings & emotions<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de sentiments en Anglais - Français - Arabe">
		<meta name="keywords" content="sentiments, feelings, emotions, émotions, émotion, feeling, sentiment, mood, humeur, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Sentiments & émotions<?php endif; if($langue === 'english'): ?>Feelings & emotions<?php endif; ?></h1>

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
									<td class="soustitre">Of love</td>
									<td class="soustitre">D'amour</td>
									<td class="soustitre">من الحب</td>
								</tr>
								<tr>
									<td>Admiration</td>
									<td>Admiration</td>
									<td>إعجاب</td>
								</tr>
								<tr>
									<td>Friendship</td>
									<td>Amitié</td>
									<td>صداقة</td>
								</tr>
								<tr>
									<td>Affection</td>
									<td>Affection</td>
									<td>حنان</td>
								</tr>
								<tr>
									<td>Sympathy</td>
									<td>Sympathie</td>
									<td>عطف</td>
								</tr>
								<tr>
									<td>Tenderness</td>
									<td>Tendresse</td>
									<td>حنان</td>
								</tr>
								<tr>
									<td>Desire</td>
									<td>Désir</td>
									<td>رغبة</td>
								</tr>
								<tr>
									<td>Compassion</td>
									<td>Compassion</td>
									<td>إشفاق</td>
								</tr>
								<tr>
									<td>Feeling</td>
									<td>Sentiment</td>
									<td>شعور</td>
								</tr>
								<tr>
									<td>Seduction</td>
									<td>Séduction</td>
									<td>الإغواء</td>
								</tr>
								<tr>
									<td>Passion</td>
									<td>Passion</td>
									<td>شغف</td>
								</tr>

								<tr>
									<td class="soustitre">of joy</td>
									<td class="soustitre">De joi</td>
									<td class="soustitre">من الفرح</td>
								</tr>
								<tr>
									<td>Pleasure</td>
									<td>plaisir</td>
									<td>متعة</td>
								</tr>
								<tr>
									<td>Satisfaction</td>
									<td>satisfaction</td>
									<td>ارتياح</td>
								</tr>
								<tr>
									<td>Ardor</td>
									<td>Ardeur</td>
									<td>أردور</td>
								</tr>
								<tr>
									<td>Gaiety</td>
									<td>gaieté</td>
									<td>مرح</td>
								</tr>
								<tr>
									<td>Enjoyment</td>
									<td>Jouissance</td>
									<td>إستمتاع</td>
								</tr>
								<tr>
									<td>Sensation</td>
									<td>Sensation</td>
									<td>إحساس</td>
								</tr>
								<tr>
									<td>Amusing</td>
									<td>Amusant</td>
									<td>ممتع</td>
								</tr>
								<tr>
									<td>Ecstasy</td>
									<td>Extase</td>
									<td>نشوة</td>
								</tr>
								<tr>
									<td>Contentment</td>
									<td>Contentement</td>
									<td>القناعة</td>
								</tr>
								<tr>
									<td>Humor</td>
									<td>Humour</td>
									<td>دعابة</td>
								</tr>
								<tr>
									<td>Happiness</td>
									<td>bonheur</td>
									<td>سعادة</td>
								</tr>
								<tr>
									<td>Formidable</td>
									<td>formidable</td>
									<td>هائل</td>
								</tr>
								<tr>
									<td>Excitation</td>
									<td>Excitation</td>
									<td>إثارة</td>
								</tr>
								<tr>
									<td>Delighted</td>
									<td>enchanté</td>
									<td>مسرور</td>
								</tr>

								<tr>
									<td class="soustitre">Of anger</td>
									<td class="soustitre">De colère</td>
									<td class="soustitre">من الغضب</td>
								</tr>
								<tr>
									<td>Aggressiveness</td>
									<td>Agressivité</td>
									<td>عدوانية</td>
								</tr>
								<tr>
									<td>Agitation</td>
									<td>agitation</td>
									<td>هياج</td>
								</tr>
								<tr>
									<td>Cruelty</td>
									<td>Cruauté</td>
									<td>قساوة</td>
								</tr>
								<tr>
									<td>Disgust</td>
									<td>Dégoût</td>
									<td>الاشمئزاز</td>
								</tr>
								<tr>
									<td>Discontent</td>
									<td>Mécontentement</td>
									<td>سخط</td>
								</tr>
								<tr>
									<td>Vengeance</td>
									<td>Vengeance</td>
									<td>الانتقام</td>
								</tr>
								<tr>
									<td>Frustration</td>
									<td>Frustration</td>
									<td>الإحباط</td>
								</tr>
								<tr>
									<td>Gloom</td>
									<td>Maussade</td>
									<td>كآبة</td>
								</tr>
								<tr>
									<td>Hate</td>
									<td>Haine</td>
									<td>كراهية</td>
								</tr>
								<tr>
									<td>Fury</td>
									<td>Fury</td>
									<td>غضب شديد</td>
								</tr>
								<tr>
									<td>Jealousy</td>
									<td>Jalousie</td>
									<td>الغيرة</td>
								</tr>
								<tr>
									<td>Rage</td>
									<td>Rage</td>
									<td>الغضب</td>
								</tr>
								<tr>
									<td>Ferocity</td>
									<td>Férocité</td>
									<td>ضراوة</td>
								</tr>
								<tr>
									<td>Repugnance</td>
									<td>Répugnance</td>
									<td>الاشمئزاز</td>
								</tr>
								<tr>
									<td>Destruction</td>
									<td>Destruction</td>
									<td>تحطيم</td>
								</tr>
								<tr>
									<td class="soustitre">Of Sadness</td>
									<td class="soustitre">De tristesse</td>
									<td class="soustitre">من الحزن</td>
								</tr>
								<tr>
									<td>Negligence</td>
									<td>Negligence</td>
									<td>الإهمال</td>
								</tr>
								<tr>
									<td>Sorrow</td>
									<td>chagrin</td>
									<td>أسى</td>
								</tr>
								<tr>
									<td>Despair</td>
									<td>Désespoir</td>
									<td>اليأس</td>
								</tr>
								<tr>
									<td>Pity</td>
									<td>Pitié</td>
									<td>شفقة</td>
								</tr>
								<tr>
									<td>Misfortune</td>
									<td>Malheur</td>
									<td>مكروه</td>
								</tr>
								<tr>
									<td>Anxiety</td>
									<td>Anxiété</td>
									<td>الحصر النفسي</td>
								</tr>
								<tr>
									<td>Insecurity</td>
									<td>Insécurité</td>
									<td>عدم الأمان</td>
								</tr>
								<tr>
									<td>Pain</td>
									<td>Douleur</td>
									<td>ألم</td>
								</tr>
								<tr>
									<td>Melancholy</td>
									<td>Mélancolie</td>
									<td>كآبة</td>
								</tr>
								<tr>
									<td>Depression</td>
									<td>Dépression</td>
									<td>كآبة</td>
								</tr>
								<tr>
									<td>Suffering</td>
									<td>Souffrance</td>
									<td>معاناة</td>
								</tr>
								<tr>
									<td>Solitude</td>
									<td>Solitude</td>
									<td>العزلة</td>
								</tr>
								<tr>
									<td>Misery</td>
									<td>Misère</td>
									<td>بؤس</td>
								</tr>

								<tr>
									<td class="soustitre">Of fear</td>
									<td class="soustitre">De crainte</td>
									<td class="soustitre">الخوف</td>
								</tr>
								<tr>
									<td>Mistrust</td>
									<td>Méfiance</td>
									<td>عدم الثقة</td>
								</tr>
								<tr>
									<td>Panic</td>
									<td>Panique</td>
									<td>ذعر</td>
								</tr>
								<tr>
									<td>Fear</td>
									<td>peur</td>
									<td>خوف</td>
								</tr>
								<tr>
									<td>Hysteria</td>
									<td>Hystérie</td>
									<td>هستيريا</td>
								</tr>
								<tr>
									<td>Nervousness</td>
									<td>Nervosité</td>
									<td>العصبية</td>
								</tr>
								<tr>
									<td>Dread</td>
									<td>Effroi</td>
									<td>الفزع</td>
								</tr>
								<tr>
									<td>Worry</td>
									<td>Inquiétude</td>
									<td>قلق</td>
								</tr>
								<tr>
									<td>Horror</td>
									<td>Horreur</td>
									<td>رعب</td>
								</tr>
								<tr>
									<td>Terror</td>
									<td>terreur</td>
									<td>رعب</td>
								</tr>
								<tr>
									<td>Distress</td>
									<td>Détresse</td>
									<td>محنة</td>
								</tr>

								<tr>
									<td class="soustitre">Of shame</td>
									<td class="soustitre">De honte</td>
									<td class="soustitre">من العار</td>
								</tr>
								<tr>
									<td>Remorse</td>
									<td>Remord</td>
									<td>ندم</td>
								</tr>
								<tr>
									<td>Humiliation</td>
									<td>Humiliation</td>
									<td>الإذلال</td>
								</tr>
								<tr>
									<td>Guiltiness</td>
									<td>Culpabilité</td>
									<td>الشعور بالذنب</td>
								</tr>
								<tr>
									<td>Regret</td>
									<td>Regret</td>
									<td>ندم</td>
								</tr>
								<tr>
									<td>Confusion</td>
									<td>Confusion</td>
									<td>الالتباس</td>
								</tr>

								<tr>
									<td class="soustitre">Other</td>
									<td class="soustitre">Autre</td>
									<td class="soustitre">آخر</td>
								</tr>
								<tr>
									<td>Shyness</td>
									<td>Timidité</td>
									<td>الخجل</td>
								</tr>
								<tr>
									<td>Prudence</td>
									<td>Prudence</td>
									<td>تعقل</td>
								</tr>
								<tr>
									<td>Audacity</td>
									<td>Audace</td>
									<td>الجرأة</td>
								</tr>
								<tr>
									<td>Fragility</td>
									<td>Fragilité</td>
									<td>الهشاشة</td>
								</tr>
								<tr>
									<td>Weakness</td>
									<td>Faiblesse</td>
									<td>ضعف</td>
								</tr>
								<tr>
									<td>Bravery</td>
									<td>Bravoure/courage</td>
									<td>شجاعة</td>
								</tr>
								<tr>
									<td>Curiosity</td>
									<td>Curiosité</td>
									<td>الفضول</td>
								</tr>
								<tr>
									<td>Astonishment</td>
									<td>Étonnement</td>
									<td>دهشة</td>
								</tr>
								<tr>
									<td>Stupefaction</td>
									<td>Stupéfaction</td>
									<td>غباء</td>
								</tr>
								<tr>
									<td>Intimidation</td>
									<td>Intimidation</td>
									<td>التخويف</td>
								</tr>
								<tr>
									<td>Submission</td>
									<td>Soumission</td>
									<td>إخضاع</td>
								</tr>
								<tr>
									<td>Boredom</td>
									<td>Ennui</td>
									<td>الملل</td>
								</tr>
								<tr>
									<td>Impatience</td>
									<td>Impatience</td>
									<td>نفاد الصبر</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/mariagelogo.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Mariage<?php endif; if($langue === 'english'): ?>Wedding<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="mariage.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/qualitedefautlogo.png" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Qualité & défauts<?php endif; if($langue === 'english'): ?>Qualities & flaws<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="qualitedefaut.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		