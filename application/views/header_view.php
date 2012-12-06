<div class="container">

<a href="<?php echo base_url() ?>secciones" id="logo">
<img src="<?php echo base_url() ?>img/logo.png" alt="Noctambulos TV">
</a>
<span class="span4">
<span class="cita"><i>en la noche es cuando mejor se ven las estrellas...</i></span>
</span>

<div class="pull-right">

	
<?php if( is_logged_in()){ 
	   $user = $this->session->userdata['user'];
	   
	   if($user == ""){ ?>
	   	<div class="alert alert-error fade in">
                <a class="close" data-dismiss="alert">x</a><strong>
		  			<?php echo $user ?>!!!Tu perfil todavia no esta completo!!! <br />Accede 
		  			<a href="<?php echo base_url() ?>user/profileC">aquí</a> para completarlo</strong>
              	</div>
			
	  		<span class="login span4"><a href="<?php echo base_url()?>user/profile">Perfil&nbsp;&nbsp;</a>|
			<a href="<?php echo base_url() ?>user/logout">&nbsp;&nbsp;Salir</a></span>
		<?php }else{ ?>
			<span class="login span4" style="padding-top: 25px">
			Bienvenido, <?php echo $this->session->userdata['user'];  ?><br>
		  
			
	  	<a href="<?php echo base_url()?>user/profile">Perfil&nbsp;&nbsp;</a>|
	<a href="<?php echo base_url() ?>user/logout">&nbsp;&nbsp;Salir</a></span>
		<?php } }else{  ?>
			 	<span class="login span4"> 
<a href="javascript:login_reg_toggle()"> Registrarse</a> |
<a href="javascript:login_toggle()">Entrar</a>
</span>
<?php }?>
</div>
</div>
<div style="display: none">
	 <form id="recovery_pass" method="post" action="<?php echo base_url() ?>contact/recoverp" >
<div class="contact">
	 <div class="span3">
         
              <div class="row"> 
                <div class="input">
                  <label for="email">
                    Introduce tu correo electr�nico:
                  </label>
                  <input type="text" name="email" id="email_recovery" value="" class="email" />
                  <div class="span2">&nbsp;</div>
                  <input type="submit" value="   Enviar   " name="submit" id="recover_pass" class="btn btn-small btn-primary"/>
                </div>
           		</div>
              <div class="row">
              <div class="span3">
                      <div class="botty"><input type="text" name="botty" id="botty" /></div>
              </div>
            </div>
         
		  </div>	  
</div>
</form> 
</div>

<div class="container">

<div class="span4 offset8">
	
		<div class="login_container ">
			
				<div id="login_frame">
					<form id="login_form" method="post" action="<?php echo base_url() ?>user/login" >
						<input type="text" value="Email" name="email_log" id="email_log" onclick="javascript:emptyValue(this)" />
						<input type="password" value="Contraseña" class="required" name="password_log" id="password_log" onclick="javascript:emptyValue(this)" />
						<input type="submit" value="   Entrar   " name="login" id="login" class="btn btn-small btn-primary" />
						<a class="mintex" id="pass_rec" href="#recovery_pass">No recuerdo mi contraseña</a>
					</form>
				 		
				 </div>
				 
						<div id="mensajito"></div>
		
			<div id="login_reg_frame" >
				<form id="login_form_reg" method="post" action="<?php echo base_url() ?>user/reg">
					<input type="text" value="Email" id="email" name="email" onclick="javascript:emptyValue(this)" />
					<label class="error" for="email" id="email_error">Este campo es obligatorio (Email).</label>
					<input type="text"  value="Fecha de Nacimiento (dd-mm-aaaa)"  id="fecha_nac" name="fecha_nac" onclick="javascript:emptyValue(this)" />
					<label class="error" for="fecha_nac" id="fecha_nac_error">Este campo es obligatorio (Fecha de nacimiento)</label>
					<input type="password" value="password"  id="password" name="password" onclick="javascript:emptyValue(this)"  />
					<label class="error" for="password" id="password_error">Este campo es obligatorio(Contraseña).</label>
					<input type="submit" value="   Enviar   " name="reg" id="reg" class="btn btn-large btn-primary"/>
				</form>
				
		  
			</div>
			<div id="mensajito"></div>
		</div>
	</div>

</div>
</div>
<div id="social">
      <div class="container miLine">
        <ul class="social"> 	
          <li><a class="programacion" href="">Programacion</a></li>
          <li><a class="ocio" href="<?php echo base_url() ?>secciones/ocio">Ocio</a></li>
          <li><a class="experiencias" href="<?php echo base_url() ?>secciones/experiencias">Experiencias</a></li>
          <li><a class="conciertos" href="<?php echo base_url() ?>secciones/conciertos">Conciertos</a></li>
          <li><a class="discotecas" href="<?php echo base_url() ?>secciones/discotecas">Discotecas</a></li>
          <li><a class="festivales" href="<?php echo base_url() ?>secciones/festivales">Festivales</a></li>
           <li><a class="prensa" href="<?php echo base_url() ?>secciones/prensa">Prensa</a></li>
          <li><a  class="vcasting" href="<?php echo base_url() ?>secciones/vcasting">Video Casting</a></li>
        </ul>
       <!-- código a recorda... onmouseover="cambiar('.$item.')" -->
        <nav id="nav" class="clearfix">
          <ul>
            <li class={cur_secciones} onmouseover="javascript:MenuHover('secciones')">
              <a href="<?php echo base_url() ?>secciones">SECCIONES</a>
            </li>
            <li class={cur_experiencias} onmouseover="javascript:MenuHover('experiencias')">
              <a  href="#">EXPERIENCIAS</a>
           </li>
            <li class={cur_plan60} onmouseover="javascript:MenuHover('60seg')">
              <a href="<?php echo base_url() ?>plan60">PLAN 60"</a>
            </li>
            <li class={cur_musica} onmouseover="javascript:MenuHover('musica')">
              <a href="<?php echo base_url() ?>musica">MÚSICA</a>  
            </li>
            <li class={cur_tienda} onmouseover="javascript:MenuHover('tienda')">
              <a href="#">TIENDA</a>
            </li>
            <li class={cur_lcn} onmouseover="javascript:MenuHover('tienda')">
            	<a href="#">LCN</a>
            </li>
            <li class={cur_casting} onmouseover="javascript:MenuHover('casting')" >
            	<a href="#">CASTING</a>
            </li>
          </ul>
         
        </nav><!-- end nav -->
             
      </div>
  	     
    </div><!-- end #social -->