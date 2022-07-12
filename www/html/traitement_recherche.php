<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=search_engine;charset=utf8', 'root', 'Lamborgini-123');

}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


if(isset($_POST['barre_recherche']))
{
	$motCle = htmlspecialchars(strtolower($_POST['barre_recherche']));
	
	$req = $bdd->query('SELECT mot_cle, theme FROM bdd_keyword');
	while($donnee = $req->fetch())
	{
	
		$mot_separe = explode(",", $donnee['mot_cle']);
		for ($i=0; $i < sizeof($mot_separe) ; $i++) 
		{ 
			if ($motCle === $mot_separe[$i])
				header('Location: '. $donnee['theme']);	
		}
	}
}
else
	header('Location: mot_cle_introuvable.php');

?>