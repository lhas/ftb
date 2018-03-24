<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feed the Birds</title>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="header__inner">
            <a href="/index.html" class="header__logo">
              <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" alt="Feed the Birds">
            </a>
            <div class="header__medias">
              <a href="https://www.facebook.com/feedthebirds420/" class="header__medias__item" target="_blank">
                <img src="<?php echo get_theme_file_uri('assets/img/facebook.png'); ?>" alt="Facebook">
              </a>
              <a href="https://www.instagram.com/" class="header__medias__item" target="_blank">
                <img src="<?php echo get_theme_file_uri('assets/img/instagram.png'); ?>" alt="Instagram">
              </a>
            </div>
            <!-- .header__medias -->
          </div>
          <!-- .header__inner -->
        </div>
      </div>
      <!-- .row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="header__menu">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Seeds</a>
            <a href="#">Contact</a>
            <a href="#">
              <i class="material-icons">search</i>
            </a>
          </div>
        </div>
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </header>
  <!-- .header -->