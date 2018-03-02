<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Rosario JMJ</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <meta name='mobile-web-app-capable' content='yes'>
      <link id="bootstrap-css" rel="stylesheet" href="css/bootstrap.min.css" >
      <link id="rosariojmj-css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
      <link id="fontawesome-css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link id="custom-css" rel="stylesheet" href="css/master.css">
    </head>

    <body>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <img src="img/logo.png" class="logo img-responsive" alt="Rosario JMJ">
              </div>
               <div id="encabezado" class="nav navbar-nav navbar-right">
                  <ul id="descripcion" class="nav">
                    <li><h3>Inscripción Rosario por la JMJ Panama 2019</h3></li>
                  </ul>
               </div>
            </div>
          </nav>

        <div class="container clearfix">
          <div class="row">
            <div class="main col-sm-12 col-md-12">
              <div id="regsitroHeader" class="registro-header">
                <h1>Unete a la cruzada de un rosario diario por la JMJ Panamá 2019</h1>
                <div class="registro-info text-center">
                  <span id="info" class="">En que consiste?</span>
                  <div class="msg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>

                <div id="registroContent" class="registro-content">
                    <form id="registroForm"  action="" method="post" >
                        <div class="form-group input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                          <input id="name" name="name" type="text" class="form-control" data-rule-required="true" data-msg-required="Campo obligatorio" placeholder="Ingrese su nombre">
                        </div>

                        <div class="form-group input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                          <input id="email" name="email" type="email" class="form-control" data-rule-required="true" data-msg-required="Campo obligatorio" aria-describedby="emailHelp" placeholder="Ingrese su email">
                        </div>

                        <div id="captcha" class="form-group">
                          <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                          <div class="g-recaptcha" data-theme="light" data-sitekey="6LcU9D0UAAAAACA7pcrfZpWaDPvjwhoqA9QIi1h4"></div>
                        </div>

                        <div class="text-center form-group">
                          <button id="submit_btn" type="submit" name="submit_form" value="submit" class="btnEnviar btn btn-primary btn-lg">
                          <strong>Enviar</strong></button>
                        </div>
                        <input type="hidden" name="" value=""/>
                    </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="footer col-sm-12 col-md-12">
              <footer role="contentinfo" style="text-align: center">

                <div id="redes-sociales" class="redes-sociales col-xs-12 col-sm-12">
                    <a href="" title="Facebook"><span class="fa-stack fa-lg"><i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i></span></a>
                    <a href="" title="Twitter"><span class="fa-stack fa-lg"><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
                    <a href="" title="Instagram"><span class="fa-stack fa-lg"><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
                </div>

                <div id="sitio-jmj" class="enlace col-xs-12 col-sm-12">
                    <a href="https://www.panama2019.pa" class="sitio-jmj" target="_blank">Visita JMJ Panama 2019</a>
                </div>

                <!--
                <div id="copyrigth" class="copyrigth">
                    <span class="glyphicon glyphicon-copyright-mark">2018-2019</span>
                </div>
                -->

              </footer>
            </div>
          </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js">

    </script>

    </body>
</html>
