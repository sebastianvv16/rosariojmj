<form id="registroForm" method="post" role="form" autocomplete="off">
    <div class="form-group input-group">
      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
      <input id="name" name="name" type="text" class="form-control" data-rule-required="true" data-msg-required="Campo obligatorio" placeholder="Ingrese su nombre">
      <span class="help-block" id="error"></span>
    </div>

    <div class="form-group input-group">
      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
      <input id="email" name="email" type="email" class="form-control" data-rule-required="true" data-msg-required="Campo obligatorio" aria-describedby="emailHelp" placeholder="Ingrese su email">
      <span class="help-block" id="error"></span>
    </div>

    <div id="captcha" class="form-group">
      <?php echo do_shortcode( '[bws_google_captcha]' ); ?>
    </div>

    <div class="text-center form-group">
      <button id="submit_btn" type="submit" name="submit_form" class="btnEnviar btn btn-primary btn-lg">
      <strong>Enviar</strong></button>
    </div>
    <input type="hidden" name="" value=""/>
</form>
