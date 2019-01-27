<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('IL FONTI DI MODENA'); ?></title>
    <?php wp_head() ?>
  </head>
<body>


  <!-- navegación-->
    <nav class="gtco-nav" role="navigation">
      <div class="gtco-container fixed">

        <div class="row fondo_blanco">
          <div class="col-sm-2 col-xs-10">
            <div id="gtco-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/marca/logo.png" alt="logo" class="img-responsive"></div>
          </div>




        <div class="col-xs-10 col-xs-2 text-right menu-1 padding_right">
            <ul>
              <li><a href="#carousel">Home</a></li>
              <li>
                <a href="#carta">La Carta</a>
              </li>

              <li><a href="#reservas">Reservas</a></li>
              <li><a href="#gtco-footer">Contacto</a></li>
            </ul>
          </div>
        </div>

      </div>
    </nav>
