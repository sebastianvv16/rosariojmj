<?php get_header(); ?>

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
                  <?php
            			if ( have_posts() ) :

            				/* Start the Loop */
            				while ( have_posts() ) : the_post();

            					/*
            					 * Include the content
            					 */
            					the_content();
                      the_tags();

                      // Previous/next page navigation.
                			the_posts_pagination( array(
                				'prev_text'          => __( 'Previous page', 'rosariojmj' ),
                				'next_text'          => __( 'Next page', 'rosariojmj' ),
                				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'rosariojmj' ) . ' </span>',
                			) );

            				endwhile;
            			else :
                  ?>
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
                  <?php
            			endif;
            			?>

                </div>
              </div>
            </div>
          </div>

<?php get_footer(); ?>
