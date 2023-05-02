<?php
session_start()
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>header_footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="header.css" rel="stylesheet">
  <link href="footer.css" rel="stylesheet">
</head>

<body>

  <div class="container-fluid">
      <nav class="navbar navbar-expand-md">

        <a class="navbar-brand">Omnes Sport</a>
        <a class="navbar-brand"><img src="../images/omnes_logo.JPG" height="30px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="accueil.html">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown">Tout Parcourir</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="activite_sportive.php">Activités sportive</a></li>
                <li><a class="dropdown-item" href="sport_competition.php">Sports de compétition</a></li>
                <li><a class="dropdown-item" href="salle_de_sport.php">Salle de sport</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recherche.php">Recherche</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rendez-vous.php">Mes rendez-vous</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="mon_compte_in.php"><span class="glyphicon glyphicon-log-in"></span> Mon
                compte</a></li>
          </ul>
        </div>
    </div>
  </div>
  </nav>



  <div class="container-fluid">
    <div class="container">
      <div class="row">

        <div class="col-6 col-md-4"></div>

        <article class="col-6 col-md-4">
          <h1> Sign up</h1>

          <form action="./CreateController.php" method="post">

            <div class="col-md-6">
              <label for="inputNom4" class="form-label">Nom</label>
              <input type="text" name="Nom_U" class="form-control" id="Nom_U">
            </div>
            <div class="col-md-6">
              <label for="inputPrénom" class="form-label">Prénom</label>
              <input type="text" name="Prenom_U" class="form-control" id="Prenom_U">
            </div>
            <div class="col-12">
              <label for="inputEmail" class="form-label">Email adress</label>
              <input type="email" name="Email_U" class="form-control" id="Email_U">
            </div>
            <div class="col-12">
              <label for="inputMdp2" class="form-label">Mot de passe</label>
              <input type="password" name="Mdp_U" class="form-control" id="Mdp_U">
            </div>
            <div class="col-md-6">
              <label for="inputVille" class="form-label">Ville</label>
              <input type="text" name="Ville_U" class="form-control" id="Ville_U">
            </div>
            <div class="col-md-6">
              <label for="inputCodepostal" class="form-label">Code postale</label>
              <input type="text" name="Code_Postal" class="form-control" id="Code_Postal">
            </div>
            <div class="col-12">
              <label for="inputCarte" class="form-label">Pays</label>
              <input type="text" name="Pays" class="form-control" id="Pays">
            </div>
            <div class="col-12">
              <label for="inputCarte" class="form-label">Telephone</label>
              <input type="text" name="Telephone_U" class="form-control" id="Telephone_U">
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">S'enregistrer</button>
            </div>

          </form>


        </article>
        <div class="col-6 col-md-4"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
      <footer class="page-footer">
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
        <div class="footer-copyright text-center">Alexandre Correia, Maxime Jeandin, Valentin Morel | Copyright © 2022 Omnes Sport Company, PARIS. Tous droits réservés<br></div>
       </footer>
       </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</body>

</html>