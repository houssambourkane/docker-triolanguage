<?php include('variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Triolanguage - <?php if($langue === 'french'): ?>Télécharger<?php endif; if($langue === 'english'): ?>Download<?php endif; ?></title>
  
  <?php include('links.php'); ?>
</head>
<body>
  <?php include('alert.php') ?>
  <div class="column">


   <?php include('header_main.php'); ?>
   <header class="masthead2">
            <div class="container">
                <?php /* <div class="masthead-subheading"><?php if($langue === 'french'): ?>Bienvenue sur Triolanguage !<?php endif; if($langue === 'english'): ?>Welcome to Triolanguage !<?php endif; ?></div> */ ?>
                <div class="masthead2-heading text-uppercase" style="font-family: 'Nunito Sans', sans-serif;"><?php if($langue === 'french'): ?>Téléchargez toutes les fiches en un seul clic<?php endif; if($langue === 'english'): ?>Download all sheets with one click<?php endif; ?></div>
                <?php /* <a class="btn  btn-xl text-uppercase" href="theme2.php" style="background-color:<?php echo $th1_couleur ?>; width:auto;height:auto;font-size: 30px; color :<?php echo $text_couleur2 ?>"><?php if($langue === 'french'): ?>Voir les thèmes<?php endif; if($langue === 'english'): ?>See all themes<?php endif; ?></a> */ ?>
       
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                 <button class="btn btn-lg d-flex justify-content-center animated-button1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" id="bouton_acheter" style="border: 2px solid <?php echo $th1_couleur ?>;color:<?php echo $text_couleur2; ?>;width:auto;height:auto;"><?php if($langue === 'french'): ?>ACHETER LE LIVRE<?php endif; if($langue === 'english'): ?>BUY THE E-BOOK<?php endif; ?></button>
           
               

            </div>
        </header>

    <section class="container" id="puces">
      
      <?php if($langue === 'french'): ?><p>Ce E-BOOK est un livre digital sous forme de PDF, qui contient toutes les tables (y compris les tables payantes), très pratique à l'aide de sa table de matières et de son système de pagination<br>Téléchargez le E-BOOK à seulement 8.99$ ! En bénéficiant de :<br>
        <ul class="puces">
          <li>50 thèmes basiques traduit en anglais, français et arabe</li>
          <li>10 thèmes professionnels traduit en anglais, français et arabe</li>
          <li>Plus de 25 000 mots</li>
        </ul></p>
      
      <?php endif; if($langue === 'english'): ?><p>This E-BOOK is a digital book in PDF form, which contains all the tables (including paid tables), very practical using its table of contents and its pagination system<br>Download the E-BOOK for only 8.99$ ! You will get :<br>
        <ul>
          <li>50 basic themes translated into English, French and Arabic</li>
          <li>10 professional themes translated into English, French and Arabic</li>
          <li>More than 25 000 words</li>
        </ul></p><?php endif; ?>
        <br>
        <br>
        
        <div class="offcanvas offcanvas-bottom " tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel"  style="height:750px;">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><?php if($langue === 'french'): ?><?php endif; if($langue === 'english'): ?><?php endif; ?></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="container">
            <div class="offcanvas-body small d-flex flex-column justify-content-around" id="canvas">


              <h2 class="text-center" style="font-size: 40px;"><?php if($langue === 'french'): ?>3 langues<?php endif; if($langue === 'english'): ?>3 languages<?php endif; ?></h2>
              <hr>
              <div class="mini_canvas me-2"><h5 style="font-size:auto;"><?php if($langue === 'french'): ?>pdf complet (anglais - français - arabe)<?php endif; if($langue === 'english'): ?>complete pdf (enligsh - french - arabic)<?php endif; ?></h5><img src="./assets/img/ebook.png" height="100" width="100"><br><button href="" class="btn"><i class="fa-3x fas fa-cart-arrow-down"></i></button></div>
              <br>
              
           

              <h2 class="text-center" style="font-size: 40px;"><?php if($langue === 'french'): ?>2 langues<?php endif; if($langue === 'english'): ?>2 languages<?php endif; ?></h2>
              <hr>
              <div class="langues3">
                <div class="mini_canvas me-2"><h5 style="font-size:auto;"><?php if($langue === 'french'): ?>Anglais - Français<?php endif; if($langue === 'english'): ?>English - French<?php endif; ?></h5><img src="./assets/img/ebook.png" height="100" width="100"><br><button href="" class="btn"><i class="fa-3x fas fa-cart-arrow-down"></i></button></div>
                <div class="mini_canvas"><h5 style="font-size:auto;"><?php if($langue === 'french'): ?>Anglais - Arabe<?php endif; if($langue === 'english'): ?>English - Arabic)<?php endif; ?></h5><img src="./assets/img/ebookfr.png" height="100" width="100"><br><button href="" class="btn"><i class="fa-3x fas fa-cart-arrow-down"></i></button></div>
                <div class="mini_canvas"><h5 style="font-size:auto;"><?php if($langue === 'french'): ?>Français - Arabe<?php endif; if($langue === 'english'): ?>French - Arabic<?php endif; ?></h5><img src="./assets/img/ebookfr.png" height="100" width="100"><br><button href="" class="btn"><i class="fa-3x fas fa-cart-arrow-down"></i></button></div>
              </div>
          </div>
        </div>
      </div>
      <hr>
        <br><br><br>

        <div class="d-flex justify-content-center"><video src="vid2compressed.mp4" controls="" width="80%"  alt="video ebook" poster="assets/img/poster.png"></video></div>

        <br><br><br>


        <ul style="border: 1px solid black;">
          <br><br>
          <li style="list-style-type: none;"><img src="./assets/img/check.png" height="20" width="20"><?php if($langue === 'french'): ?> Que vous soyez étudiant, professeur ou autre, ce E-BOOK vous sera certainement utile<?php endif; if($langue === 'english'): ?> Whether you are a student, teacher or other, this E-BOOK will certainly be useful to you<?php endif; ?></li><br><br><br>
          <li style="list-style-type: none;"><img src="./assets/img/check.png" height="20" width="20"><?php if($langue === 'french'): ?> Si vous préparer le TOEIC, TOEFL, IELTS (pour les tests anglais), le DELF, DALF ou le TCF (pour les tests français), sachez que ces tests se basent surtout sur le vocabulaire, ce E-BOOK sera votre allié pour les réussir<?php endif; if($langue === 'english'): ?> If you are preparing for the TOEIC, TOEFL, IELTS (for English tests), DELF, DALF or TCF (for French tests), know that these tests are mainly based on vocabulary, this E-BOOK will be your ally for succeed<?php endif; ?></li><br><br><br>
          <li style="list-style-type: none;"><img src="./assets/img/check.png" height="20" width="20"><?php if($langue === 'french'): ?> Si vous partez à l'étranger, sachez que la langue anglaise est considérée comme une langue officielle dans 67 pays, tandis que la langue française l'en est dans 13 pays<?php endif; if($langue === 'english'): ?> If you go abroad, know that the English language is considered an official language in 67 countries, while the French language is in 13 countries, and for the Arabic language 25 countries<?php endif; ?></li><br><br>
                    
        </ul>
    </section>




    <footer class="container-fluid" style="background-color: <?php echo $couleur ?>;">
        <?php include('footer.php'); ?>
    </footer>
  </div>
  

</body>
</html>