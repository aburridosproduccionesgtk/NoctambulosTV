<div class="container contact">
      <div class="row">
        <div class="span8">
          <h2>Formulario de Contacto</h2>
          <form method="post" action="<?php echo base_url() ?>contact/envio" id="contact">
            <div class="row">
              <div class="span4">
                <div class="input">
                  <label for="name">
                    Nombre
                  </label>
                  <input type="text" name="name" id="name" class="required" />
                </div>
                <div class="input">
                  <label for="email">
                    Email
                  </label>
                  <input type="text" name="email" id="email" value="" class="required email"/>
                </div>
                <div class="input">
                  <label for="subject">
                    Asunto
                  </label>
                  <input type="text" name="subject" id="subject" value="" class="required"/>
                </div>
              </div>
          
              <div class="span4">
                <div class="input">
                  <label for="message">Mensaje</label>
                  <textarea rows="9" name="message" id="message" class="required"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-large btn-primary"/>
                <div class="botty"><input type="text" name="botty" id="botty" /></div>
              </div>
            </div>
        </form>
        <div id="formresult"></div>
        </div>
        <div class="span4">
          <h2>Información</h2>
          <p><i class="icon-home"></i> Noctambulos TV <br /> 
            <i class="icon-phone"></i> <br />  
            <i class="icon-envelope-alt"></i>&nbsp;<?php echo mailto('info@aburridosproducciones.com') ?></p>
          <p>...</p>
        </div>
      </div><!-- end .row -->
    </div><!-- end .container -->

