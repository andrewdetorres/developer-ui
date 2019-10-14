<!DOCTYPE html>
<html lang="en">
<head>

  <title>Developer-UI | UI Kits For The Web</title>

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Google Font for logo -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Righteous&display=swap" rel="stylesheet">

  <!-- Bootstrap Jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="Assets/css/main.css"/>
  <link rel="stylesheet" href="Assets/css/style.css"/>
  <link rel="stylesheet" href="Assets/fonts/fontawesome/css/all.min.css"/>

</head>
<body>

  <script type="text/javascript">
    $(document).ready(function() {
      $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

  <!--Main Navigation Bar-->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-white">
    <a class="navbar-brand ml-2 logo-font text-dark" href="/index.php">DEVELOPER-UI</a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="navbar-nav navbar-right mr-2">
      <li class="nav-item active my-auto mx-3">
        <a class="nav-link text-primary" href="#">Home</a>
      </li>
      <li class="nav-item my-auto mx-3">
        <a class="nav-link text-dark" href="#">Documentation</a>
      </li>
      <li class="nav-item my-auto mx-3">
        <a class="nav-link text-dark" href="#">Samples</a>
      </li>
      <li class="nav-item my-auto mx-3">
        <a class="nav-link text-dark" href="#">Licence</a>
      </li>
      <li class="nav-item my-auto mr-4">
        <div class="vertical-divider bg-dark"><div>
        </li>
        <li class="nav-item my-auto mx-lg-2 py-2 py-lg-0 px-3 px-md-0">
          <a href="https://github.com/andrewdetorres/developer-ui" target="_blank">
            <button class="btn btn btn-outline-dark" type="submit"><i class="fab fa-github pr-2"></i>Github</button>
          </a>
        </li>
        <li class="nav-item my-auto mx-lg-2 py-2 py-lg-0 px-3 px-md-0">
          <a href="testdownload.txt" download="testdownload.txt">
            <button class="btn btn btn-outline-dark"><i class="fas fa-download pr-2"></i>Download</button>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero contained-->
  <header class="section">
    <div class="container d-flex h-100 my-5">
      <div class="row m-auto p-0 w-100">
        <!-- Left hand side of hero content -->
        <div class="col-md-6 col-xs-12 my-5 text-left">
          <h1>Welcome to <span class="text-primary">Developer-UI</span></h1>
          <h5>A Free UI kit to speed up your developement</h5>
          <p>Built utilising Bootstrap 4.3.1</p>
          <button class="btn btn-primary px-3">Explore!</button>
        </div>
        <!-- Right hand side of hero content -->
        <div class="col-md-6 col-xs-12 my-5 text-center">
          <img
          src="Assets/svg/ui_presenting.svg"
          width="100%"
          />
        </div>
      </div>
    </div>
  </header>

  <!-- google Maps API -->


  <!-- Features List -->
  <?php require_once "Features/colors.html";?>
  <?php require_once "Features/typography.html";?>
  <?php require_once "Features/buttons.html";?>
  <?php require_once "Features/inputs.html";?>
  <?php require_once "Features/controls.html";?>
  <?php require_once "Features/form-examples.html";?>
  <?php require_once "Features/modals.html";?>
  <?php require_once "Features/cards.html";?>
  <?php require_once "Features/tooltips.html";?>
  <?php require_once "Features/alerts.html";?>
  <?php require_once "Features/navbars.html";?>
  <?php require_once "Features/images.html";?>
  <?php require_once "Features/maps.php";?>
  <?php require_once "Features/examples.html";?>
  <i class="fad fa-battery-full" style="--fa-primary-color: limegreen; --fa-secondary-color: dimgray;"></i>
  <!-- Footer -->
  <footer class="row bg-dark py-5">
    <div class="col-12 text-center text-light px-4">
      Copyright © 2019 developer-ui.andrewdetorres.com
    </div>
  </footer>
</html>
