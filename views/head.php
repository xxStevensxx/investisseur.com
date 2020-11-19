<!-- <?php
// session_start();
// $_SESSION['$choixClient'] = 'acceuil';
 ?> -->

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.1-web/css/all.css">
    <title>Investisseurs.com</title>
  </head>

  <header>
    <nav id="navBar" class="navbar navbar-expand-md navbar fixed-top">
    <a class="navbar-brand" href="#">Investisseurs.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" wfd-id="11">
      <span class="navbar-toggler-icon" wfd-id="8"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" wfd-id="1">
      <ul class="navbar-nav mr-auto" wfd-id="3">
        <li class="nav-item active" wfd-id="6">
          <a class="nav-link" href="#">Home <span class="sr-only" wfd-id="7">(current)</span></a>
        </li>
        <li class="nav-item" wfd-id="5">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item" wfd-id="4">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0" wfd-id="2">
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" wfd-id="9"> -->
        <button onclick="controllerJs()" id='connexion' class='btn btn-outline-success my-2 my-sm-0' wfd-id='10'>Connexion</button>
      </form>
    </div>
  </nav>
  </header>

  <div id="calque"></div>
  <div id="backgroundScreen">
    <div id="contentBackgroundScreen">
      <p>Oui mais pas n'importe comment!</p>
    </div>
  </div>
