<?php include('variables.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav" style="background-color: <?php echo $couleur ?>;padding-bottom:-100px;">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="./assets/img/mainlogo.png" alt="" class="d-inline-block align-text-top" style="height:150px;width:150px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link <?php if($_SERVER['SCRIPT_NAME'] === 'index.php'): ?>active<?php endif; ?>" href="index.php"><?php if($langue === 'french'): ?> Accueil<?php endif; if($langue === 'english'): ?> Home<?php endif; ?></a></li>
                <li class="nav-item"><a class="nav-link <?php if($_SERVER['SCRIPT_NAME'] === 'theme2.php'): ?>active<?php endif; ?>" href="theme2.php"><?php if($langue === 'french'): ?> Thèmes<?php endif; if($langue === 'english'): ?> Themes<?php endif; ?></a></li>
                <!-- <li class="nav-item"><a class="nav-link <?php if($_SERVER['SCRIPT_NAME'] === 'boutique.php'): ?>active<?php endif; ?>" href="boutique.php"><?php if($langue === 'french'): ?> Télécharger<?php endif; if($langue === 'english'): ?> Download<?php endif; ?></a></li> -->
                <li class="nav-item"><a class="nav-link <?php if($_SERVER['SCRIPT_NAME'] === '/newproject/triolanguage/faq.php'): ?>active<?php endif; ?>" href="faq.php"><?php if($langue === 'french'): ?> FAQ's<?php endif; if($langue === 'english'): ?> FAQ's<?php endif; ?></a></li>
                <!-- <li class="nav-item"><a class="nav-link <?php if($_SERVER['SCRIPT_NAME'] === 'contact.php'): ?>active<?php endif; ?>" href="contact.php"><?php if($langue === 'french'): ?> Contact<?php endif; if($langue === 'english'): ?> Contact<?php endif; ?></a></li> -->
                <br>
                

                <li class="nav-item">
                  
                    <form method="post" >
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <input type="submit" name="boutonanglais" class="btn dropdown-item nav-link"<?php if($langue === 'english'): ?>style="background-color: <?php echo $th1_couleur ?>;"<?php else: ?>style="color: <?php echo $th1_couleur ?>;"<?php endif; ?> id="anglais" value="<?php if($langue === 'french'): ?>ANG<?php endif; if($langue === 'english'): ?>EN<?php endif; ?>">
                        <input type="submit" name="boutonfrancais" class="btn dropdown-item nav-link" <?php if($langue === 'french'): ?>style="background-color: <?php echo $th1_couleur ?>;"<?php else: ?>style="color: <?php echo $th1_couleur ?>;"<?php endif; ?> id="francais" value="<?php if($langue === 'french'): ?>FR<?php endif; if($langue === 'english'): ?>FR<?php endif; ?>">
                      </div>
                    </form>
                  
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php include('barrelateral.php'); ?>





