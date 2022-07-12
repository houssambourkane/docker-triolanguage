<?php
		$titrefr = "MUSIQUE & INTRUMENT";
		$titreang = "MUSIC & INSTRUMENT";
		$bg = "./assets/img/bgtheme/musiquebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Musique & instrument<?php endif; if($langue === 'english'): ?>Music & instrument<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de musique et instruments en Anglais - Français - Arabe">
		<meta name="keywords" content="musique, instrument, harmonie, symphony, symphonie, accord, concert, rythme, voix, scène, baroque, metal, rock, roll, hip, hop, rap, americain, jazz, blues, music, song, chanson, lyrics, paroles, parole, lyric, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Musique & instrument<?php endif; if($langue === 'english'): ?>Music & instrument<?php endif; ?></h1>

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
									<td class="soustitre">musical instruments</td>
									<td class="soustitre">Les instruments de musique</td>
									<td class="soustitre">الات موسيقية</td>
								</tr>
								<tr>
									<td>Accordion</td>
									<td>accordéon</td>
									<td>أكورديون</td>
								</tr>
								<tr>
									<td>Acoustic guitar</td>
									<td>guitare acoustique</td>
									<td>الغيتار الصوتي</td>
								</tr>
								<tr>
									<td>Bassoon</td>
									<td>Basson</td>
									<td>الباسون</td>
								</tr>
								<tr>
									<td>Cello</td>
									<td>Violoncelle</td>
									<td>التشيلو</td>
								</tr>
								<tr>
									<td>Clarinet</td>
									<td>Clarinette</td>
									<td>مزمار</td>
								</tr>
								<tr>
									<td>Cymbal</td>
									<td>cymbale</td>
									<td>الصنج</td>
								</tr>
								<tr>
									<td>Drum</td>
									<td>tambour</td>
									<td>طبل</td>
								</tr>
								<tr>
									<td>Drums</td>
									<td>Batterie</td>
									<td>طبول</td>
								</tr>
								<tr>
									<td>Electric guitar</td>
									<td>guitare électrique</td>
									<td>الغيتار الكهربائي</td>
								</tr>
								<tr>
									<td>Electric organ</td>
									<td>orgue électrique</td>
									<td>الكهربائي الأرغن </td>
								</tr>
								<tr>
									<td>Flute</td>
									<td>Flûte</td>
									<td>فلوت</td>
								</tr>
								<tr>
									<td>Guitar</td>
									<td>Guitare</td>
									<td>غيتار</td>
								</tr>
								<tr>
									<td>Harmonica</td>
									<td>harmonica</td>
									<td>هارمونيكا</td>
								</tr>
								<tr>
									<td>Harp</td>
									<td>Harpe</td>
									<td>قيثار</td>
								</tr>
								<tr>
									<td>Harpsichord</td>
									<td>Clavecin</td>
									<td>هاربسكورد</td>
								</tr>
								<tr>
									<td>Horn</td>
									<td>Cor</td>
									<td>قرن</td>
								</tr>
								<tr>
									<td>Mandolin</td>
									<td>mandoline</td>
									<td>مندولين</td>
								</tr>
								<tr>
									<td>Marimba</td>
									<td>Marimba</td>
									<td>الماريمبا</td>
								</tr>
								<tr>
									<td>Oboe</td>
									<td>Hautbois</td>
									<td>أوبوا</td>
								</tr>
								<tr>
									<td>Organ</td>
									<td>Orgue</td>
									<td>الأرغن</td>
								</tr>
								<tr>
									<td>Piano</td>
									<td>Piano</td>
									<td>بيانو</td>
								</tr>
								<tr>
									<td>Saxophone</td>
									<td>Saxophone</td>
									<td>ساكسفون</td>
								</tr>
								<tr>
									<td>Sitar</td>
									<td>sitar</td>
									<td>السيتار</td>
								</tr>
								<tr>
									<td>Timpani</td>
									<td>Timbales</td>
									<td>تيمباني</td>
								</tr>
								<tr>
									<td>Trombone</td>
									<td>Trombone</td>
									<td>الترومبون</td>
								</tr>
								<tr>
									<td>Trumpet</td>
									<td>Trompette</td>
									<td>بوق</td>
								</tr>
								<tr>
									<td>Vibraphone</td>
									<td>Vibraphone</td>
									<td>الفيبرافون </td>
								</tr>
								<tr>
									<td>Violin</td>
									<td>violon</td>
									<td>كمان</td>
								</tr>
								<tr>
									<td>Xylophone</td>
									<td>Xylophone</td>
									<td>إكسيليفون</td>
								</tr>

								<tr>
									<td class="soustitre">types of music</td>
									<td class="soustitre">Types de musique</td>
									<td class="soustitre">أنواع الموسيقى</td>
								</tr>
								<tr>
									<td>Baroque music</td>
									<td>Musique baroque</td>
									<td>الموسيقى الباروك</td>
								</tr>
								<tr>
									<td>Classical music</td>
									<td>Musique classique</td>
									<td>الموسيقى الكلاسيكية</td>
								</tr>
								<tr>
									<td>Contemporary music</td>
									<td>Musique contemporaine</td>
									<td>الموسيقى المعاصرة</td>
								</tr>
								<tr>
									<td>Medieval music</td>
									<td>Musique médiévale</td>
									<td>موسيقة العصور الوسطى</td>
								</tr>
								<tr>
									<td>Modern music</td>
									<td>Musique moderne</td>
									<td>الموسيقى الحديثة</td>
								</tr>
								<tr>
									<td>Music of the Renaissance</td>
									<td>Musique de la renaissance</td>
									<td>موسيقى النهضة</td>
								</tr>
								<tr>
									<td>Popular music</td>
									<td>Musique populaire</td>
									<td>الموسيقى الشعبية</td>
								</tr>
								<tr>
									<td>Traditional music</td>
									<td>Musique traditionnelle</td>
									<td>الموسيقى التقليدية</td>
								</tr>

								<tr>
									<td class="soustitre">Musical styles</td>
									<td class="soustitre">Styles musicaux</td>
									<td class="soustitre">الأنماط الموسيقية</td>
								</tr>
								<tr>
									<td>Afro</td>
									<td>Afro</td>
									<td>الأفرو</td>
								</tr>
								<tr>
									<td>Cantata</td>
									<td>Cantate</td>
									<td>الكنتاتة</td>
								</tr>
								<tr>
									<td>Choir</td>
									<td>chorale</td>
									<td>جوقة</td>
								</tr>
								<tr>
									<td>Jazz</td>
									<td>jazz</td>
									<td>الجاز</td>
								</tr>
								<tr>
									<td>Metal</td>
									<td>Metal</td>
									<td>ميتال</td>
								</tr>
								<tr>
									<td>Opera</td>
									<td>opéra</td>
									<td>الأوبرا</td>
								</tr>
								<tr>
									<td>Pop</td>
									<td>pop</td>
									<td>البوب</td>
								</tr>
								<tr>
									<td>Rap</td>
									<td>Rap</td>
									<td>الراب</td>
								</tr>
								<tr>
									<td>Recital</td>
									<td>récital</td>
									<td>تلاوة</td>
								</tr>
								<tr>
									<td>Reggae</td>
									<td>Reggae</td>
									<td>الريغي</td>
								</tr>
								<tr>
									<td>Rock</td>
									<td>rock</td>
									<td>الروك</td>
								</tr>
								<tr>
									<td>Sonata</td>
									<td>Sonate</td>
									<td>السوناتة</td>
								</tr>
								<tr>
									<td>Symphony</td>
									<td>Symphonie</td>
									<td>سمفونية</td>
								</tr>

								<tr>
									<td class="soustitre">Music vocabulary</td>
									<td class="soustitre">Vocabulaire musical</td>
									<td class="soustitre">مفردات الموسيقى</td>
								</tr>
								<tr>
									<td>Concert</td>
									<td>Concert</td>
									<td>حفلة موسيقية</td>
								</tr>
								<tr>
									<td>Conductor</td>
									<td>chef d'orchestre</td>
									<td>موصل</td>
								</tr>
								<tr>
									<td>Melisma</td>
									<td>mélisme</td>
									<td>ميليسم</td>
								</tr>
								<tr>
									<td>Orchestra</td>
									<td>Orchestre</td>
									<td>الأوركسترا</td>
								</tr>
								<tr>
									<td>Polyphony</td>
									<td>Polyphonie</td>
									<td>تعدد الأصوات</td>
								</tr>
								<tr>
									<td>Rhythm</td>
									<td>rythme</td>
									<td>ايقاع</td>
								</tr>
								<tr>
									<td>Show</td>
									<td>spectacle</td>
									<td>عرض</td>
								</tr>
								<tr>
									<td>Song</td>
									<td>chanson</td>
									<td>أغنية</td>
								</tr>
								<tr>
									<td>Voice</td>
									<td>voix</td>
									<td>صوت</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/loisirslogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Loisirs<?php endif; if($langue === 'english'): ?>Hobbies<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="loisirs.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		