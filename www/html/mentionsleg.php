<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Triolanguage - <?php if($langue === 'french'): ?>Mentions légales<?php endif; if($langue === 'english'): ?>Legal notice<?php endif; ?></title>
  
  <?php include('links.php'); ?>
</head>
<body>
  <?php include('alert.php') ?>
  <div class="column">


   <?php include('header_main.php'); ?>

    <section class="container"  id="puces">
     <h2 class="fs-1"><?php if($langue === 'french'): ?>Mentions légales<?php endif; if($langue === 'english'): ?>Legal notice<?php endif; ?></h2>
     <hr><br><br><br>
				<h3 class="fs-2">Article 1 : Coordonnées de l'auteur</h3>
				<p>Le site triolanguage.fr est édité par Houssam Bourkane<br/><br/>Bourkane Houssam<br/>Ville : CASABLANCA<br/>E-mail : triolanguageismcontact@gmail.com</p>
				<h3 class="fs-2">Article 2 : Hébergement</h3>
				<p>L'hébergeur du site triolanguage.fr est la société Hostinger , dont le siège social est situé au HOSTINGER INTERNATIONAL LTD, 61 Lordou Vironos Street, 6023 Larnaca, Chypre <br>Tél : +37064503378<br>E-mail : domains@hostinger.com<br>Site web : https://www.hostinger.fr/</p>
				<h3 class="fs-2">Article 3 : propriété intellectuelle</h3>
				<p>Toute utilisation, reproduction, diffusion, commercialisation, modification totale ou partielle du site triolanguage.fr, sans
				autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires telles que notamment prévues par
				le Code de la propriété intellectuelle et le Code civil.</p>
				<h3 class="fs-2">Article 4 : Les conditions générales de vente</h3>
				<p>Les produits du site triolanguage.fr sont encadrés par des <a href="cgv.php">conditions générales de ventes</a> qui définissent les conditions à respecter lors d'un contrat.</p>
				<h3 class="fs-2">Article 5: Les conditions générales d'utilisation</h3>
				<p>Les <a href="cgu.php">CGU</a> englobe toutes les règles d'utilisation du site triolanguage.fr</p>
				<h3 class="fs-2">Article 6: Cookies</h3>
				<p>En naviguant sur le site triolanguage.fr, l’utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel de
				navigation.
				Le cookie se définit comme un fichier enregistré par l’outil de navigation de la machine dans un espace de stockage dédié. Il est stocké au cours de la consultation d’un site web. Son enregistrement dans le disque dur ne donne aucunement lieu à la divulgation d’informations personnelles concernant l’internaute. Grâce à ce fichier texte, le site web peut identifier le terminal dans lequel il est déposé et mémoriser les informations nécessaires à son parcours.
				À la base, les cookies servent à mémoriser des informations renseignées dans un formulaire rempli sur le site. Ces renseignements peuvent être le nom, l’adresse et le mot de passe de l’utilisateur. De cette manière, ce dernier n’aura plus à entrer ces informations lors de sa prochaine visite. Il reste le seul à pouvoir accéder au fichier cookie.
				L’accès au site n’est toutefois pas conditionné par l’utilisation de cookies, ce qui veut dire qu’il est possible de supprimer les cookies tout en accédant à la plateforme.
				Ces cookies ne durent pas longtemps. Ils peuvent être supprimés à travers les paramètres du navigateur.
				La suppression des cookies pourra entraîner quelque restrictions en terme de navigation sur le site triolanguage.fr.</p>

				<h3 class="fs-2">Article 7: politique du respect et de la protection de la vie privée</h3>
				<p>Le site triliangualism s'assure que toute collecte et traitement de données personnelles soit conforme aux dispositions d'informatique et de libertés établies par la commission nationale de l'informatique et des libertés.</p>
				<?php /* 
				<h3 class="fs-2">Article 8: Commentaire</h3>
				<p>Tout utilisateurs du site triolanguage.com est susceptible de rédiger un commentaire, ces commentaires seront suivi et contrôler, tout commentaire jugé inapproprié, insultant, offensant ou ne respectant pas les dispositions des conditions générales sera supprimé.</p> */ ?>
    </section>




    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  </div>
  

</body>
</html>

