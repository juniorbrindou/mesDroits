<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
}?>

<!DOCTYPE html>
<html lang="Fr" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title>Accueil | mes DROITS</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic%7CMontserrat:400,700">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head">
        <!-- RD Navbar Top Panel-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="100px" data-lg-stick-up-offset="110px" data-auto-height="false" class="rd-navbar rd-navbar-top-panel rd-navbar-default rd-navbar-white" data-lg-auto-height="true" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel bg-ebony-clay">
                <div class="left-side">
                  <!-- Contact Info-->
                  <address class="contact-info text-left">
                    <div class="reveal-inline-block"><a href="callto:(+225)22-42-21-42" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-warning icon-xxs icon-info icon-circle mdi mdi-phone"></span></span><span class="unit-body"><span class="text-alto">(+225)22-42-21-42</span></span></a></div>
                    <div class="reveal-inline-block"><a href="mailto:contact@raidhci.org" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-info icon-warning icon-circle mdi mdi-email-outline"></span></span><span class="unit-body"><span class="text-alto">contact@raidhci.org</span></span></a></div>
                    <div class="reveal-inline-block"><a href="contacts.php#carte" class="unit unit-middle unit-horizontal unit-spacing-xs"><span class="unit-left"><span class="icon icon-xxs icon-info icon-circle icon-warning mdi mdi-map-marker"></span></span><span class="unit-body"><span class="text-alto">Abidjan, Les Oscars, Résidence Aurore</span></span></a></div>
                  </address>
                </div>
                <div class="right-side">
                  <div class="reveal-inline-block text-middle">
                    <ul class="list-inline list-inline-0">
                      <li><a href="https://www.facebook.com/raidhci/?ref=br_rs" target="blanck" class="icon icon-xxs icon-boulder-filled icon-circle fa fa-facebook"></a></li>
                      <!-- <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-circle fa fa-twitter"></a></li> -->
                      <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-circle fa fa-google-plus"></a></li>
                      <!-- <li><a href="#" class="icon icon-xxs icon-boulder-filled icon-circle fa fa-instagram"></a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel" class="rd-navbar-top-panel-toggle"><span></span></button>
                <!-- Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.php"><img width='188' height='29' src='images/logo-dark.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!-- Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index.php"><img width='188' height='29' src='images/logo-dark.png' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form action="search-results.php" method="GET" class="form-search rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-form-search-widget" class="form-label form-search-label form-label-sm rd-input-label">Rechercher</label>
                          <input id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="on" class="form-search-input input-sm form-control form-control-gray-lightest input-sm"/>
                        </div>
                        <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li><a href="index.php">Accueil</a></li>
                      <li class="active"><li><a href="lisons.php">Lisons la DUDH</a></li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="langueLocales.php">Langues locales</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="videos.php">Vidéos</a></li>
                          <li><a href="audios.php">Audios</a></li>
                        </ul>
                      </li>
                      <li><a href="contacts.php">Contact</a></li>
                      <li><a href="login.php">Login</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
