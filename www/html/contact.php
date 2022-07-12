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


    <section class="container" style="margin-top:30px;" id="contact_height">
      <div class="row">
      	<h2>Contact</h2>

        <div class="trait_dessus"><hr></div>

				<p style="font-size: 20px;"><?php if($langue === 'french'): ?>Si vous avez des questions, veuillez consulter les FAQ's, vous pouvez nous contacter si vous avez besoin de quelques renseignements supplémentaires ou si vous rencontrez des problèmes.<br>Veuillez nous contacter sur l'adresse e-mail : contactsupport@triolanguage.com<br>Sinon vous pouvez <a href="mailto:contactsupport@triolanguage.com">cliquez ici</a> pour nous envoyer un mail.<?php endif; if($langue === 'english'): ?>If you have any questions, please check out the FAQ's, you can contact us if you need some additional information or have any problems.<br>Please contact us on the email address : contactsupport@triolanguage.com<br>Otherwise you can <a href="mailto:contactsupport@triolanguage.com">click here</a> to send us a mail.<?php endif; ?></p>
      </div>
    </section>



    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  </div>
  

</body>
</html>
				
				

