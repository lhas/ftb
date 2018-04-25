<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feed The Birds Hemp Seed <?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:300,400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
  <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ae0502c429ed50011f9e1d1&product=inline-share-buttons' async='async'></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1877003759264496&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="header__inner">
            <a href="<?php echo home_url(); ?>" class="header__logo">
              <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" alt="Feed the Birds">
            </a>
            <div class="header__medias">
              <a onclick="document.querySelector('.search__modal').style = 'display: flex;'" class="header__medias__item header__medias__item--search">
                <i class="material-icons">search</i>
              </a>
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
            <?php wp_nav_menu(array('show_home' => true)); ?>
          </div>
        </div>
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </header>
  <!-- .header -->

  <div class="search__modal" style="display: none;">
    <form class="search__modal__form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input class="search__modal__form__input" name="s" placeholder="Search here" type="text">
    </form>
    <button class="search__modal__close" onclick="document.querySelector('.search__modal').style = 'display:none;'"><i class="material-icons">close</i></button>
  </div> <!-- .search__modal -->