<?php
//identifier votre BDD
$database = "omnes_sante";
//identifier votre serveur (localhost), utlisateur (root), mot de passe ("")
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$sport = isset($_POST["choix"])? $_POST["choix"] : "";
//Si la BDD existe
if ($db_found) {
//code MySQL. $sql est basé sur le choix de l’utilisateur
$sql = "SELECT Photo, Prenom_C, Nom_C, Mail_C, Telephone_C, Sport1, Sport2, Sport3 FROM coach WHERE ((Sport1='$sport')||(Sport2='$sport')||(Sport3='$sport'))";
}
$result = mysqli_query($db_handle, $sql);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>header_footer</title>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="header.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-md">
    <div class="container-fluid">
      <a class="navbar-brand">Omnes Sport</a>
      <a class="navbar-brand"><img src="../images/omnes_logo.JPG" height="30px"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown">Tout Parcourir</a>
            <ul class="dropdown-menu">             
              <li><a class="dropdown-item" href="#">Activités sportive</a></li>
              <li><a class="dropdown-item" href="#">Sports de compétition</a></li>
              <li><a class="dropdown-item" href="#">Salle de sport</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recherche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mes rendez-vous</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a class ="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Mon compte</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php while ($data = mysqli_fetch_assoc($result))
{?>
 <div class="containers">
    <div class="row">
    <div class="col-md-5">
        <img src="<?php echo $data['Photo'];?>">
    </div>
        <div class="col-md-7">
            <h2><?php echo $data['Nom_C'];?>, <?php echo $data['Prenom_C']?><br>
                Coach: <?php echo $data['Sport1'];?>, <?php echo $data['Sport2'];?>, <?php echo $data['Sport3'];?><br>
                Telephone: <?php echo $data['Telephone_C'];?><br>
                E-Mail: <?php echo $data['Mail_C'];?></h2>
        </div>
    </div>
    <div class="button row">
        <div class="col-md-5">
            <input type="button" onclick="window.location.href = 'https://www.w3docs.com';" value="Prendre un Rendez-Vous"/>
        </div>
        <div class="col-md-4">
            <input type="button" onclick="window.location.href = 'https://www.w3docs.com';" value="Communiquer avec le coach" />
        </div>
        <div class="col-md-3">
            <input type="button" onclick="window.location.href = 'https://www.w3docs.com';" value="Voir son cv" />
        </div>
    </div>
</div>
<?php }?>


   
    <footer class="page-footer">
      <div class="container">
      <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <h5>
        37, quai de Grenelle, 75015 Paris, France <br>
        info@webDynamique.ece.fr <br>
        +33 01 02 03 04 05 <br>
        +33 01 03 02 05 04
      </h5>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
      <h6 class="text-uppercase font-weight-bold text-center">Réseaux sociaux<br><br><img src="../images/reseaux_sociaux.JPG" height="30px" width="80px"/></h6>
      </div>
      </div>
      <div class="footer-copyright text-center">Alexandre Correia, Maxime Jeandin, Valentin Morel | Copyright © 2022 Omnes Sport Company, PARIS. Tous droits réservés</div>
     </footer>
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


