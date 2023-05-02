<?php
session_start();
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
</head>

<body>

  <div class="container-fluid">
    <div class="container">
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
          

          <?php if(!isset($_SESSION['Email_U'])) { ?>
            <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="mon_compte_in.php"><span class="glyphicon glyphicon-log-in"></span> Mon compte</a></li>
          </ul>
          <?php } else {?>
            <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="mon_compte_in.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['Email_U'] ?></a></li>
          </ul>
            <?php } ?>
        </div>
    </div>
  </div>
  </nav>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <div class="container-fluid">
    <div class="container">
      <div class="row">

        <div class="col-6 col-md-4"></div>

        <article class="col-6 col-md-4">

          <h1> Sign in</h1>

          <form action="./LoginController.php" method="post">

            <div class="form-floating mb-3">
              <input type="email" name="Email_U" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-3">
              <input type="password" name="Mdp_U" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>

            <div class="row">

              <div class="mb-3 col-3">
                <button type="submit" class="btn btn-primary">Log in</button>
              </div>
          </form>

          <div class="mb-3 col-6">
            <a class="btn btn-primary" href="mon_compte_up.php" type="submit">Sign up</a>
          </div>
      </div>

      </article>
      <div class="col-6 col-md-4"></div>
    </div>
  </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

</body>

</html>