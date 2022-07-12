<button class="btn col-5 col-md-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="text-align: left;background-color:<?php echo $couleur ?>;color:<?php echo $text_couleur; ?>;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/><path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/><path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/></svg><?php if($langue === 'french'): ?> Choisir un autre thème <?php endif; if($langue === 'english'): ?> Choose another theme <?php endif; ?></button>
  
<!-- <br>
<br> -->

  <!-- <div class="alert col-8 alerte" role="alert" id="alert_style" style="background-color:<?php echo $couleur2 ?>;">
    <h4 class="alert-heading"><?php if($langue === 'french'): ?>Souhaitez-vous ne plus perdre de temps et télécharger toutes les fiches ?<?php endif; if($langue === 'english'): ?>Would you like to stop wasting time and download all the files?<?php endif; ?></h4>
    <hr>
       <a class="btn" href="boutique.php" style="background-color:<?php echo $th2_couleur; ?>;color:<?php echo $text_couleur; ?>;text-transform: uppercase;"><?php if($langue === 'french'): ?>Cliquez ici !<?php endif; if($langue === 'english'): ?>Click here<?php endif; ?></a>
  </div> -->


<br>
<br>

<div class="dropdown">
  <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border:1px solid <?php echo $couleur; ?>;color:<?php echo $text_couleur2; ?>;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="<?php echo $text_couleur2; ?>" class="bi bi-sliders" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/></svg><?php if($langue === 'french'): ?> Filtrer <?php endif; if($langue === 'english'): ?> Filter <?php endif; ?></button>
  <ul class="dropdown-menu form-check form-switch" aria-labelledby="dropdownMenuButton1">
  	<li class="filtre"><input class="form-check-input" checked type="checkbox" onclick='document.getElementById("tbl").classList.toggle("hide3")' id="english"><label class="form-check-label" for="english"><?php if($langue === 'french'): ?>Anglais<?php endif; if($langue === 'english'): ?>English<?php endif; ?></label></li>
    <li class="filtre"><input class="form-check-input" checked type="checkbox" onclick='document.getElementById("tbl").classList.toggle("hide2")' id="french"><label class="form-check-label" for="french"><?php if($langue === 'french'): ?>Français<?php endif; if($langue === 'english'): ?>French<?php endif; ?></label></li>
    <li class="filtre"><input class="form-check-input" checked type="checkbox" onclick='document.getElementById("tbl").classList.toggle("hide1")' id="arab"><label class="form-check-label" for="arab"><?php if($langue === 'french'): ?>Arabe<?php endif; if($langue === 'english'): ?>Arabic<?php endif; ?></label></li>
  </ul>
</div>
