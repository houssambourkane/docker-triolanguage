<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
	<head>
	<title>Triolanguage - <?php if($langue === 'french'): ?>Les merveilles du mondes<?php endif; if($langue === 'english'): ?>The world's wonders<?php endif; ?></title>
	<meta name="description" content="Découvrez le vocabulaire des merveilles du monde en Anglais - Français - Arabe">
			<meta name="keywords" content="merveilles, wonders, monument, museem, tour, eiffel, english, french, arabic, learn, vocabulary, anglais, français, arabe, vocabulaire, thématique, thème, fiche, tableau, traduction, translate, lexique">
	<?php include('links.php'); ?>
	</head>

	<body oncontextmenu="return false;">
    	<?php include('header_main.php'); ?>

		<div id="contenu_delapage">
			<section style="height: 500px;">
				<h3 style="font-size: 30px;">La recherche que vous avez effectué ne correspond à aucun résultat</h3>
				<p><a href="trilingualism.php"></a>Retour à la page principale</p>
			</section>
		</div>
		<footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    	</footer>
  
		<script>
			jQuery(document).bind("contextmenu", function(e) {
			    e.preventDefault();
			    return false;
			});
		</script>
	</body>
</html>