<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
      <title><?php wp_title(); ?></title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <meta name='mobile-web-app-capable' content='yes'>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo img-responsive" alt="Rosario JMJ">
              </div>
               <div id="encabezado" class="nav navbar-nav navbar-right">
                  <ul id="descripcion" class="nav">
                    <li><h3>Inscripción Rosario por la JMJ Panama 2019</h3></li>
                  </ul>
               </div>
            </div>
          </nav>
