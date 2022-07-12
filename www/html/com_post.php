
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=commentaires;charset=utf8', 'root', 'Lamborgini-123');
}
catch(Exception $e)
{
	die('Erreur : ' .$e->getmessage());
}

if(isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['commentaire']))
{
	$rep = $bdd->prepare('INSERT INTO commentaires(prenom, email, commentaire, date_creation) VALUES(?, ?, ?, NOW())');
	$rep->execute(array(htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['commentaire'])));
}
header('Location: trilingualism.php');
?>