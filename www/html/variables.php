 <?php 

  $username = 'root';
  $password = 'secret';

 $bdd = new PDO('mysql:host=mysql;dbname=db;charset=utf8', $username, $password);

  $langue = NULL;
  $langue2 = $bdd->query('SELECT langue FROM langue');

  $couleur = "#1d2a57";
  $couleur2 = "#fec400";
  $th1_couleur = "#fec400";
  $th2_couleur = "#1d2a57";
  $th3_couleur = "#fec400";
  $text_couleur = "white";
  $text_couleur2 = "black";

  $langue = "english";
  $bouton_accesfr = "Accéder";
  $bouton_accesang = "Access";

  if(isset($_POST['boutonanglais']))
  {
      $langue = "english";
      $bdd->exec('UPDATE langue SET langue = \'english\'');

    
  }
  if(isset($_POST['boutonfrancais']))
  {
      $langue = "french";
      $bdd->exec('UPDATE langue SET langue = \'french\'');
  }



  if(!isset($_POST['boutonfrancais']) && !isset($_POST['boutonanglais']))
  {
    $langue3 = $bdd->query('SELECT langue FROM langue');
    while ($donnee = $langue3->fetch())
    {
      $langue = $donnee['langue'];

    }
  }
?>