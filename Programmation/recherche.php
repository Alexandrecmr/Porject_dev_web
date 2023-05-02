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
  <form action="coach2.php" method="post">
    <form action="coach.php" method="post">  

  <nav class="navbar navbar-expand-md">

      <a class="navbar-brand">Omnes Sport</a>
      <a class="navbar-brand"><img src="../images/omnes_logo.JPG" height="30px"/></a>
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
          <li><a class ="nav-link" href="mon_compte_in.php"><span class="glyphicon glyphicon-log-in"></span> Mon compte</a></li>
        </ul>
      </div>
  </nav>
    </div>
      
        <div class="container">
            <div class="row"> 
          
        <div class="col-6 col-md-4"></div>
          
        <article class="col-6 col-md-4">
     
              
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">🔎</span>
  <input type="text" class="form-control" placeholder="Recherche" aria-label="recherche" aria-describedby="basic-addon1" name="choix">
</div> 
       <div class="row"> 
          
     <div class="mb-3 col-4">
    <input type="submit" value="COACH" href="coach2.php" >
  </div>
              
    <div class="mb-3 col-4">
    <a class="btn btn-primary" type="submit" >SALLE</a>
  </div>
              
     <div class="mb-3 col-4">
    <input type="submit" value="SPORT" href="coach.php">
  </div>     
</div>                   
          </article>
                
          <div class="col-6 col-md-4"></div>
        </div>
      </div>
      </div>

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
