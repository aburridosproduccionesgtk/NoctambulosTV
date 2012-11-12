<div class="container">

<a href="<?php echo base_url() ?>secciones" id="logo">
<img src="<?php echo base_url() ?>img/logo.png" alt="Noctambulos TV">
</a>
<span class="span4">
<span class="cita"><i>en la noche es cuando mejor se ven las estrellas...</i></span>
</span>

<div class="pull-right">
<span class="login span4">
<?php if( is_logged_in()){ ?>
	<a href="<?php echo base_url() ?>user/logout">Salir</a>
		<?php	}else{ ?>
<a href="javascript:login_reg_toggle()"> Registrarse</a> |
<a href="javascript:login_toggle()">Entrar</a>
<?php }?>
</span>
</div>
</div>


<div class="container">

<div class="span4 offset8">
	
		<div class="login_container ">
			
				<div id="login_frame">
					<form id="login_form" method="post" action="<?php echo base_url() ?>user/login" >
						<input type="text" class="required" value="Nombre" name="email" id="email"  />
						<input type="password" class="required" value="Contraseña" name="password" id="password" />
						<input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-large btn-primary"/>.
				 </div>
					</form>
			
		
			<div id="login_reg_frame" >
				<form id="login_form_reg" method="post" action="<?php echo base_url() ?>user/reg">
					<input type="text" class="required email" value="Email" id="email" name="email" />
					<input type="text" class="required" value="Fecha de Nacimiento (dd-mm-aaaa)"  id="fecha_nac" name="fecha_nac" />
					<input type="password" class="requied" value="Contrase�a"  id="password" name="password" />
					<input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-large btn-primary"/>
				</form>
		  
			</div>
			
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