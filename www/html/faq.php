<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Triolanguage</title>
  
  <?php include('links.php'); ?>
</head>
<body>
	<?php include('alert.php') ?>
  <div class="column">


   <?php include('header_main.php'); ?>


    <section class="container" style="margin-top:30px;">
      <div class="row">
      	<h2>FAQ'S</h2>

      	<div class="trait_dessus"><hr></div>


      <div class="accordion accordion-flush" id="accordionFlushExample">
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingOne">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			      	<?php if($langue === 'french'): ?>QUI SOMME NOUS ?<?php endif; if($langue === 'english'): ?>WHO ARE WE ?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Triolanguage est une plateforme fondée par Houssam Bourkane, qui vise à fournir des fiches thématiques en trois langues différentes avec un vocabulaire très utile.<?php endif; if($langue === 'english'): ?>Triolanguage is a platform founded by Houssam Bourkane, which aims to provide thematic sheets in three different languages with a very useful vocabulary.<?php endif; ?></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingTwo">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
			        <?php if($langue === 'french'): ?>POURQUOI VAIS-JE UTILISER CETTE PLATFORME ?<?php endif; if($langue === 'english'): ?>WHY WOULD I USE THIS PLATFORM?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Triolanguage met à votre disposition des fiches de vocabulaire par thèmes sous forme de tableaux, ce sont des thèmes très communs et généraux et ont pour but de développer vos connaissance, votre culture, votre langue ainsi que votre vocabulaire.<?php endif; if($langue === 'english'): ?>Triolanguage provides you a variety of vocabulary sheets classified by theme in a table, these are very common and general themes and aim to develop your knowledge, your general culture, your language and also your vocabulary.<?php endif; ?></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingThree">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
			        <?php if($langue === 'french'): ?>EST CE QUE JE PEUX AVOIR ACCES AUX FICHES GRATUITEMENT<?php endif; if($langue === 'english'): ?>CAN I GET ACCESS TO THE SHEETS FOR FREE?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Triolanguage vous offre la possibilité de naviguer gratuitement dans le site pour accéder à quelques fiches. Pour les télécharger, il faudra acheter soit le <a href="boutique.php">livre qui contient toutes les fiches</a>, ou bien acheter chaque fiche individuellement.<?php endif; if($langue === 'english'): ?>Triolanguage offers you the possibility of browsing the platform for free to access to some sheets. To download them, you will have to either buy the <a href="boutique.php">book that contain all the sheets</a>, or buy every single sheet individually.<?php endif; ?></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingFour">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
			       <?php if($langue === 'french'): ?>QUE BENEFICIERAIT-JE EN ACHETANT LE E-BOOK ?<?php endif; if($langue === 'english'): ?>WHAT ARE MY BENEFITS FROM BUYING THE E-BOOK ?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><p><?php if($langue === 'french'): ?>L'achat du E-BOOK vous permettra<?php endif; if($langue === 'english'): ?>Buying the E-BOOK will allow you :<?php endif; ?></p>
						<ul>
							<li style="list-style-type: disc;"><?php if($langue === 'french'): ?>D'accéder au contenu sans connexion internet<?php endif; if($langue === 'english'): ?>To access the content without an internet connection<?php endif; ?></li>
							<li style="list-style-type: disc;"><?php if($langue === 'french'): ?>D'imprimer le E-BOOK sous forme de livre<?php endif; if($langue === 'english'): ?>To print the E-BOOK as a book<?php endif; ?></li>
							<li style="list-style-type: disc;"><?php if($langue === 'french'): ?>De bénéficier des fiches ayant un accès payant<?php endif; if($langue === 'english'): ?>To benefit from sheets with paid access<?php endif; ?></li>
						</ul></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingFive">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
			        <?php if($langue === 'french'): ?>EST CE QUE JE SERAI REMBOURSE SI LES DOCUMENTS NE ME PLAISENT PAS<?php endif; if($langue === 'english'): ?>WILL I BE REFUNDED IF THE DOCUMENTS DON'T PLEASE ME ?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Triolanguage vous offre avec toute transparence la possibilité de voir le contenu de certaines fiches, d'ailleurs Triolanguage vous offre une fiche gratuite pour voir le modèle des autres fiches, si la transaction à été effectuée, cette opération sera irréversible et donc le bénéficiaire ne peut être rembourser.<?php endif; if($langue === 'english'): ?>Triolanguage offers you with full transparency the possibility of checking the content of certain sheets, moreover Triolanguage offers you a free sheet to see the model of the other sheets, if the transaction is done, this operation is irreversible and therefore the beneficiary cannot be reimbursed.<?php endif; ?></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingSix">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
			        <?php if($langue === 'french'): ?>LE PAIEMENT EST-IL SECURISE ?<?php endif; if($langue === 'english'): ?>IS THE PAYMENT SECURED ?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Tout à fait, le paiement est effectué par l'intermédiaire de SendOwl et tous vos données bancaires seront enregistrés dans leur site web.<?php endif; if($langue === 'english'): ?>Absolutely, the payment is made through SendOwl and all your bank details will be recorded in SendOwl's website.<?php endif; ?></div>
			    </div>
			  </div>
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="flush-headingSeven">
			      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
			        <?php if($langue === 'french'): ?>EST-CE QUE JE PEUX VENDRE CES DOCUMENTS ?<?php endif; if($langue === 'english'): ?>CAN I SELL THESE DOCUMENTS?<?php endif; ?>
			      </button>
			    </h2>
			    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
			      <div class="accordion-body"><?php if($langue === 'french'): ?>Ces documents sont protégés par le droit d'auteur, ils sont destinés à l'usage personnel et non commercial.<?php endif; if($langue === 'english'): ?>These documents are protected by copyright and are intended for personal, not for commercial use.<?php endif; ?></div>
			    </div>
			  </div>
			</div>
    </section>

    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  </div>
  

