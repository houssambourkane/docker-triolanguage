<?php
		$titrefr = "NOMBRES";
		$titreang = "NUMBERS";
		$bg = "./assets/img/bgtheme/nombrebg.png";
		$prix = "0,99$";
		$prixbarre = "2,99$";
		$lien_achat = "boutique.php";
?>
<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Triolanguage - <?php if($langue === 'french'): ?>Nombres<?php endif; if($langue === 'english'): ?>Numbers<?php endif; ?></title>
  <meta name="description" content="Découvrez le vocabulaire des nombres en Anglais - Français - Arabe">
		<meta name="keywords" content="nombre, numbers, digit, numéro, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique, million, trillon, milliard, trilliard">
  
  <?php include('links.php'); ?>
</head>

<body>
		<?php include('alert.php') ?>

    <?php include('header_main.php'); ?>

    <section class="container">
      
      	<div class="titles">
	      	<h1 style="margin-top:40px; font-family: 'Overpass', sans-serif; font-weight:bold;"><?php if($langue === 'french'): ?>Nombres<?php endif; if($langue === 'english'): ?>Numbers<?php endif; ?></h1>

					<div class="trait_dessus"><hr></div>

		       <?php include('title_features.php'); ?>

					</div>

					<div class="table_simil">
		      	<table class="table table-hover col-md-3 w-75" style="margin-top:30px; margin-bottom: 30px;background-color: white;" id="tbl">
							<tr>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Chiffre<?php endif; if($langue === 'english'): ?>Number<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th1_couleur ?>;"><?php if($langue === 'french'): ?>Anglais<?php endif; if($langue === 'english'): ?>English<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th2_couleur ?>;"><?php if($langue === 'french'): ?>Français<?php endif; if($langue === 'english'): ?>French<?php endif; ?></th>
								<th class="col-md-3" style="background-color:<?php echo $th3_couleur ?>;"><?php if($langue === 'french'): ?>Arabe<?php endif; if($langue === 'english'): ?>Arabic<?php endif; ?></th>
							</tr>
							<tr>
									<td>1</td>
									<td>one</td>
									<td>un</td>
									<td>واحد</td>
								</tr>
								<tr>
									<td>2</td>
									<td>two</td>
									<td>deux</td>
									<td>اثنان</td>
								</tr>
								<tr>
									<td>3</td>
									<td>three</td>
									<td>trois</td>
									<td>ثلاثة</td>
								</tr>
								<tr>
									<td>4</td>
									<td>four</td>
									<td>quatre</td>
									<td>أربعة</td>
								</tr>
								<tr>
									<td>5</td>
									<td>five</td>
									<td>cinq</td>
									<td>خمسة</td>
								</tr>
								<tr>
									<td>6</td>
									<td>six</td>
									<td>six</td>
									<td>ستة</td>
								</tr>
								<tr>
									<td>7</td>
									<td>seven</td>
									<td>sept</td>
									<td>سبعة</td>
								</tr>
								<tr>
									<td>8</td>
									<td>eight</td>
									<td>huit</td>
									<td>ثمانية</td>
								</tr>
								<tr>
									<td>9</td>
									<td>nine</td>
									<td>neuf</td>
									<td>تسعة</td>
								</tr>
								<tr>
									<td>10</td>
									<td>ten</td>
									<td>dix</td>
									<td>عشرة</td>
								</tr>
								<tr>
									<td>11</td>
									<td>eleven</td>
									<td>onze</td>
									<td>أحد عشر</td>
								</tr>
								<tr>
									<td>12</td>
									<td>twelve</td>
									<td>douze</td>
									<td>اثني عشر</td>
								</tr>
								<tr>
									<td>13</td>
									<td>thirteen</td>
									<td>treize</td>
									<td>ثلاثة عشر</td>
								</tr>
								<tr>
									<td>14</td>
									<td>fourteen</td>
									<td>quatorze</td>
									<td>ربعة عشرة</td>
								</tr>
								<tr>
									<td>15</td>
									<td>fifteen</td>
									<td>quinze</td>
									<td>خمسة عشر</td>
								</tr>
								<tr>
									<td>16</td>
									<td>sixteen</td>
									<td>seize</td>
									<td>ستة عشرة</td>
								</tr>
								<tr>
									<td>17</td>
									<td>seventeen</td>
									<td>dix-sept</td>
									<td>سبعة عشر</td>
								</tr>
								<tr>
									<td>18</td>
									<td>eighteen</td>
									<td>dix-huit</td>
									<td>ثمانية عشر</td>
								</tr>
								<tr>
									<td>19</td>
									<td>nineteen</td>
									<td>dix-neuf</td>
									<td>تسعة عشر</td>
								</tr>
								
								<tr>
									<td>20</td>
									<td>twenty</td>
									<td>vingt</td>
									<td>عشرون</td>
								</tr>
								<tr>
									<td>21</td>
									<td>twenty one</td>
									<td>vingt-et-un</td>
									<td>واحد وعشرين</td>
								</tr>
								<tr>
									<td>22</td>
									<td>twenty two</td>
									<td>vingt-deux</td>
									<td>إثنان وعشرون</td>
								</tr>
								
								<tr>
									<td>30</td>
									<td>thirty</td>
									<td>trente</td>
									<td>ثلاثون</td>
								</tr>
								<tr>
									<td>40</td>
									<td>forty</td>
									<td>quarante</td>
									<td>أربعون</td>
								</tr>
								<tr>
									<td>50</td>
									<td>fifty</td>
									<td>cinquante</td>
									<td>خمسون</td>
								</tr>
								<tr>
									<td>60</td>
									<td>sixty</td>
									<td>soixante</td>
									<td>ستون</td>
								</tr>
								<tr>
									<td>70</td>
									<td>seventy</td>
									<td>soixante-dix</td>
									<td>سبعون</td>
								</tr>
								<tr>
									<td>80</td>
									<td>eighty</td>
									<td>quatre-vingt</td>
									<td>ثمانون</td>
								</tr>
								<tr>
									<td>90</td>
									<td>ninety</td>
									<td>quatre-vingt-dix</td>
									<td>تسعون</td>
								</tr>
								
								<tr>
									<td>100</td>
									<td>one hundred</td>
									<td>cent</td>
									<td>مائة</td>
								</tr>
								<tr>
									<td>200</td>
									<td>two hundred</td>
									<td>deux cent</td>
									<td>مائتين</td>
								</tr>
								<tr>
									<td>1 000</td>
									<td>one thousand</td>
									<td>mille</td>
									<td>ألف</td>
								</tr>
								<tr>
									<td>2 000</td>
									<td>two thousand</td>
									<td>deux mille</td>
									<td>ألفين</td>
								</tr>
								<tr>
									<td>1 000 000</td>
									<td>one million</td>
									<td>un million</td>
									<td>مليون</td>
								</tr>
								<tr>
									<td>1 000 000 000</td>
									<td>one billion</td>
									<td>un milliard</td>
									<td>مليار</td>
								</tr>
								<tr>
									<td>1 000 000 000 000</td>
									<td>one trillion</td>
									<td>un billion</td>
									<td>تريليون</td>
								</tr>
						</table>

						<div class="simil">
							<h2><?php if($langue === 'french'): ?>Thèmes similaires<?php endif; if($langue === 'english'): ?>Similar themes<?php endif; ?></h2>
							<div class="trait_dessus"><hr></div>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/sciencelogo.jpeg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Science & unités de mesure<?php endif; if($langue === 'english'): ?>Science & units of measure<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="unitesdemesure.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
							  </div>
							</div>
							<br>
							<br>
							<br>
							<div class="card border-success" style="width: 18rem;">
							  <img src="./assets/img/logotheme/quantitelogo2.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php if($langue === 'french'): ?>Quantité<?php endif; if($langue === 'english'): ?>Quantity<?php endif; ?></h5>
							    <p class="card-text"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></p>
							    <a href="quantite.php" class="btn" style="background-color: <?php echo $couleur ?>;color: <?php echo $text_couleur ?>;"><?php if($langue === 'french'): echo $bouton_accesfr; ?><?php endif; if($langue === 'english'): ?><?php echo $bouton_accesang; ?><?php endif; ?></a>
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

		
		