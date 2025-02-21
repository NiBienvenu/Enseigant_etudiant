<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background:#E0FFFF">
  <a class="navbar-brand" href="index.php">
      <img style="display: block;margin-left: auto;margin-right: auto;border-radius: 50%;" src="imag/logo.png" alt="" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibliotheque.php">Bibliothèque</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lesmodule.php">Concours</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="inscrire_etudia.php">Enseignant</a></li>
            <li><a class="dropdown-item" href="lesuniv.php">Etudiant</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Autre visiteur</a></li>
          </ul>
        </li>
        
        <?php 

            session_start();
            if(isset($_SESSION["enseign"]) && $_SESSION["enseign"] === true){

              $firstname=$_SESSION["username"];
              $image = $_SESSION["profil"] ;
            ?>
                <li class="nav-item">
                    <?php 

                    ?>
                    
                  <a class="nav-link " href=""><?php echo $firstname ?></a>
                </li>
                <li class="nav-item">
                  <a class="navbar-brand" href="#">
                    <img style="border-radius: 50%;" src="<?php echo $image ?>" alt="" width="30" height="30">
                  </a>
                </li>
                <li class="nav-item ml-5">
                        <a class="navbar-brand" href="logout.php">
                        <img style="border-radius: 50%;" src="imag/logout.png" alt="Se deconnecter" width="30" height="30">
                          </a>
                </li>
            <?php
            }else {
             
              ?>
         
                  <li class="nav-item">
                    <a class="nav-link " href="seconnecte.php">Se connecter</a>
                  </li>
                  <?php
            }
       
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <center>
    <div class="list-group mt-5">
        <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
            LISTE DES UNIVESTITE DISPONIBLE A L'INSCRIPTION EN LIGNE 
        </button>
        <a type="button" class="list-group-item list-group-item-action" href="ub.php">Universite du Burundi</a>
        <a type="button" class="list-group-item list-group-item-action" href="ult.php">Universite du Lac Tanganyika</a>
        <a type="button" class="list-group-item list-group-item-action" href="#">Universite Lumiere de Bujumbura</a>
        <a type="button" class="list-group-item list-group-item-action" href="ugl.php">Universite des Grand Lac</a>
        <a type="button" class="list-group-item list-group-item-action" href="biu.php">Bujumbura intentional University </a>
        </div>
    </center>
</div>
<?php include('enbas.php')?>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>