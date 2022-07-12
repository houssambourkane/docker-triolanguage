<?php
		$titrefr = "LEGUMES";
		$titreang = "VEGETABLES";
		$bg = "./assets/img/bgtheme/legumesbg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Légumes<?php endif; if($langue === 'english'): ?>Vegetables<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire de légume en Anglais - Français - Arabe">
		<meta name="keywords" content="légume, vegetable, vert, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Légumes<?php endif; if($langue === 'english'): ?>Vegetables<?php endif; ?></h1>

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
									<td>Artichoke</td>
									<td>artichaut</td>
									<td>خرشوف</td>
								</tr>
								<tr>
									<td>Asparagus</td>
									<td>asperge</td>
									<td>الهليون</td>
								</tr>
								<tr>
									<td>Bamboo</td>
									<td>bambou</td>
									<td>خيزران</td>
								</tr>
								<tr>
									<td>Bean</td>
									<td>haricot</td>
									<td>فاصوليا</td>
								</tr>
								<tr>
									<td>Beetroot</td>
									<td>betterave</td>
									<td>بنجر</td>
								</tr>
								<tr>
									<td>Broccoli</td>
									<td>brocoli</td>
									<td>بروكلي</td>
								</tr>
								<tr>
									<td>Cabbage</td>
									<td>chou</td>
									<td>الكرنب</td>
								</tr>
								<tr>
									<td>Carrot</td>
									<td>carotte</td>
									<td>جزر</td>
								</tr>
								<tr>
									<td>Cauliflower</td>
									<td>chou-fleur</td>
									<td>قرنبيط</td>
								</tr>
								<tr>
									<td>Celery</td>
									<td>céleri</td>
									<td>كرفس</td>
								</tr>
								<tr>
									<td>Cherry tomato</td>
									<td>tomate-cerise</td>
									<td>لطماطم الكرز</td>
								</tr>
								<tr>
									<td>Chili</td>
									<td>piment</td>
									<td>فلفل حلو</td>
								</tr>
								<tr>
									<td>Corn</td>
									<td>maïs</td>
									<td>ذرة</td>
								</tr>
								<tr>
									<td>Cress</td>
									<td>Cresson</td>
									<td>رشاد</td>
								</tr>
								<tr>
									<td>Cucumber</td>
									<td>concombre</td>
									<td>خيار</td>
								</tr>
								<tr>
									<td>Eggplant</td>
									<td>aubergine</td>
									<td>باذنجان</td>
								</tr>
								<tr>
									<td>Fennel</td>
									<td>Fenouil</td>
									<td>شمر</td>
								</tr>
								<tr>
									<td>Garlic</td>
									<td>ail</td>
									<td>ثوم</td>
								</tr>
								<tr>
									<td>Green beans</td>
									<td>haricots verts</td>
									<td>فاصوليا خضراء</td>
								</tr>
								<tr>
									<td>Jerusalem artichoke</td>
									<td>Topinambour</td>
									<td>القدس الخرشوف</td>
								</tr>
								<tr>
									<td>Kale</td>
									<td>chou frisé</td>
									<td>كرنب</td>
								</tr>
								<tr>
									<td>Red beans/kidney beans</td>
									<td>haricots rouges</td>
									<td>الفاصوليا الحمراء</td>
								</tr>
								<tr>
									<td>Leek</td>
									<td>poireau</td>
									<td>الكراث</td>
								</tr>
								<tr>
									<td>Lentils</td>
									<td>lentilles</td>
									<td>عدس</td>
								</tr>
								<tr>
									<td>Lettuce</td>
									<td>laitue</td>
									<td>الخس</td>
								</tr>
								<tr>
									<td>Manioc</td>
									<td>manioc</td>
									<td>الكسافا</td>
								</tr>
								<tr>
									<td>Mushroom</td>
									<td>champignon</td>
									<td>فطر</td>
								</tr>
								<tr>
									<td>Olive</td>
									<td>Olive</td>
									<td>زيتون</td>
								</tr>
								<tr>
									<td>Onion</td>
									<td>oignon</td>
									<td>بصل</td>
								</tr>
								<tr>
									<td>Parsnip</td>
									<td>Panais</td>
									<td>الجزر الأبيض</td>
								</tr>
								<tr>
									<td>Pattypan</td>
									<td>Pâtisson</td>
									<td>باتيبان</td>
								</tr>
								<tr>
									<td>Peas</td>
									<td>petit pois</td>
									<td>بازيلا</td>
								</tr>
								<tr>
									<td>Pepper</td>
									<td>poivron</td>
									<td>فلفل</td>
								</tr>
								<tr>
									<td>Potato</td>
									<td>pomme de terre</td>
									<td>البطاطس</td>
								</tr>
								<tr>
									<td>Pumpkin</td>
									<td>citrouille</td>
									<td>اليقطين</td>
								</tr>
								<tr>
									<td>Radish</td>
									<td>radis</td>
									<td>فجل</td>
								</tr>
								<tr>
									<td>Rhubarb</td>
									<td>rhubarbe</td>
									<td>راوند</td>
								</tr>
								<tr>
									<td>Shallot</td>
									<td>échalote</td>
									<td>القفلوط</td>
								</tr>
								<tr>
									<td>Sorrel</td>
									<td>Oseille</td>
									<td>حميض</td>
								</tr>
								<tr>
									<td>Soy</td>
									<td>soja</td>
									<td>فول الصويا</td>
								</tr>
								<tr>
									<td>Spinach</td>
									<td>épinard</td>
									<td>سبانخ</td>
								</tr>
								<tr>
									<td>Spring onion</td>
									<td>ciboule</td>
									<td>البصل الأخضر</td>
								</tr>
								<tr>
									<td>Squash</td>
									<td>courge</td>
									<td>قرع</td>
								</tr>
								<tr>
									<td>Sweet potato</td>
									<td>patate douce</td>
									<td>البطاطا الحلوة</td>
								</tr>
								<tr>
									<td>Tomato</td>
									<td>tomate</td>
									<td>طماطم</td>
								</tr>
								<tr>
									<td>Turnip</td>
									<td>navet</td>
									<td>لفت</td>
								</tr>
								<tr>
									<td>Wasabi</td>
									<td>Wasabi</td>
									<td>الوسابي</td>
								</tr>
								<tr>
									<td>Yin tsoï</td>
									<td>Yin tsoï</td>
									<td>ين تسوي</td>
								</tr>
								<tr>
									<td>Zucchini</td>
									<td>courgette</td>
									<td>كوسة</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/fruitlogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Fruits<?php endif; if($langue === 'english'): ?>Fruits<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="fruits.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/nourriturelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Nourriture & alimentation<?php endif; if($langue === 'english'): ?>Food<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="nourriture.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		