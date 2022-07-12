<div id="div_comment">
	<h3>COMMENTAIRES</h3>
	<p>Votre adresse e-mail ne sera pas publiée, tous les champs indiqués sont obligatoires !</p>
	<form action="com_post.php" method="post" id="form_comment">
		<label for="prenom">Prénom *</label><input type="text" name="prenom" id="prenom" maxlength="30" required>
		<label for="email">E-mail *</label><input type="text" name="email" id="email" maxlength="50" required>
		<label for="commentaire">Commentaire *</label><textarea name="commentaire" id="commentaire" rows="5" cols="10" placeholder="Veuillez saisir votre avis ici..." maxlength="255" required></textarea>
		<input type="submit" name="submit" value="COMMENTER" id="submit">
	</form><br><br><br><br>

<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=commentaires;charset=utf8', 'root', 'Lamborgini-123');
	}
	catch(Exception $e)
	{
		die('Erreur : ' .$e->getmessage());
	}


	$nb_comm = $bdd->query('SELECT COUNT(*) AS nb_com FROM commentaires');
	$donnees = $nb_comm->fetch();
	if($donnees['nb_com'] != 1) 
	{
		echo $donnees['nb_com'] . ' commentaires';
	}
	elseif($donnees['nb_com'] == 1)
	{
		echo $donnees['nb_com'] . ' commentaire';
	}

	$req = $bdd->query('SELECT prenom, email, commentaire, DATE_FORMAT(date_creation, \'%d/%m/%Y à %H:%i\') AS date_commentaire FROM commentaires ORDER BY date_commentaire DESC LIMIT 0,30');

	while($donnees = $req->fetch())
	{	
		?>
		<p id="aff_prenom"><em><?php echo htmlspecialchars($donnees['prenom']); ?></em> à dit :</p>
		<p id="aff_date"><?php echo $donnees['date_commentaire']; ?></p>
		<p id="aff_commentaire"><?php echo htmlspecialchars($donnees['commentaire']); ?></p>
		<?php
	}
	$req->closeCursor();
?>
</div>