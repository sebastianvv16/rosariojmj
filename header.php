<!DOCTYPE html>
<html lang="en">
    <head>
      <title>
        <?php if( is_home() ){
            echo get_bloginfo('name');
          } elseif (is_single()) {
            echo the_tittle();
          } else {
            echo get_bloginfo('name');
          }
        ?>
      </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <meta name='mobile-web-app-capable' content='yes'>
      <!--<link id="bootstrap-css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" >
      <link id="rosariojmj-css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
      <link id="fontawesome-css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link id="custom-css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/master.css"> -->
      <?php wp_head(); ?>
    </head>
    <body>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="logo img-responsive" alt="Rosario JMJ">
              </div>
               <div id="encabezado" class="nav navbar-nav navbar-right">
                  <ul id="descripcion" class="nav">
                    <li><h3>Inscripción Rosario por la JMJ Panama 2019</h3></li>
                  </ul>
               </div>
            </div>
          </nav>
