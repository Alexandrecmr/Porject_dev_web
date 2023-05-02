<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>header_footer</title>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="header.css" rel="stylesheet">
  </head>
  <body>
      
    <div class="container-fluid">
    <div class="container">
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
              <li><a class="dropdown-item" href="salle_de_sport.html">Salle de sport</a></li>
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
        </div>
    </div>
  </nav>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
      <div class="container-fluid">
        <div class="container">
            <div class="row"> 
          
        <div class="col-6 col-md-4"></div>
          
          <article class="col-6 col-md-4">
              <h1> ACTIVITE SPORTIVE</h1>
            
              <form class="row g">
                  
  <div class="col-md-6">
<img src="../images/musculation.png" height="100px"/>
  </div>
                  
<div class="col-6">
<input type="submit" value="MUSCULATION" name="choix" href="coach.php"/>
  </div>
                
  <div class="col-md-6">
<img src="../images/v%C3%A9lo.png" height="100px"/>
  </div>

<div class="col-6">
<input type="submit" value="CYCLISME" name="choix" href="coach.php"/>
  </div>
                  
  <div class="col-md-6">
<img src="../images/fitnesse.png" height="100px"/>
  </div>
                  
<div class="col-6">
<input type="submit" value="FITNESS" name="choix" href="coach.php"/>
  </div>
                  
  <div class="col-md-6">
<img src="../images/cardio.png" height="100px"/>
  </div>
            
<div class="col-6">
<input type="submit" value="CARDIO" name="choix" href="coach.php"/>
  </div>
                  
<div class="col-md-6">
<img src="../images/collectif.png" height="100px"/>
  </div>
                  
<div class="col-6">
<input type="submit" value="COLLECTIF" name="choix" href="coach.php"/>
  </div>

</form>
               
                                  
            </article>
          <div class="col-6 col-md-4"></div>
        </div>
      </div>
      </div>
      
    </body>
</html>
