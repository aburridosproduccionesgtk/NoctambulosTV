<div class="container">

<a href="home" id="logo">
<img src="<?php echo base_url() ?>img/logo.png" alt="Noctambulos TV">
</a>
<span class="span4">
<span class="cita"><i>en la noche es cuando mejor se ven las estrellas...</i></span>
</span>

<div class="pull-right">
<span class="login span4">
<a href="javascript:login_reg_toggle()"> Registrarse</a> |
<a href="javascript:login_toggle()">Entrar</a>
</span>
</div>
</div>

<div class="container">

<div class="pull-right">
 
 
<div class="login_container span4">
<div id="login_frame">
<form id="login_form">
<input type="text" class="imput span2" value="Nombre" name="email" id="Nombre"  />
<input type="password" class="imput span2" value="Contraseña" name="pass" id="Pass" />
</form>
</div>
<div id="login_reg_frame">
<form id="login_form_reg">
<input type="text" class="imput span2" value="Nombre" id="Nombre" />
<input type="text" class="imput span2" value="Email" id="email" />
<input type="text" class="imput span2" value="Fecha de Nacimiento"  />
<input type="password" class="imput span2" value="Contraseña"  />
</form>
</div>

</div>
</div>
</div>
<div id="social">
      <div class="container miLine">
        <ul class="social"> 	
          <li><a class="programacion" href="">Programacion</a></li>
          <li><a class="ocio" href="javascript:menuSel('secciones/ocio')">Ocio</a></li>
          <li><a class="experiencias" href="javascript:menuSel('<?php echo base_url() ?>secciones/experiencias')">Experiencias</a></li>
          <li><a class="conciertos" href="javascript:menuSel('<?php echo base_url() ?>secciones/conciertos')">Conciertos</a></li>
          <li><a class="discotecas" href="javascript:menuSel('<?php echo base_url() ?>secciones/discotecas')">Discotecas</a></li>
          <li><a class="festivales" href="javascript:menuSel('<?php echo base_url() ?>secciones/festivales')">Festivales</a></li>
           <li><a class="prensa" href="javascript:menuSel('<?php echo base_url() ?>secciones/prensa')">Prensa</a></li>
          <li><a  class="vcasting" href="javascript:menuSel('<?php echo base_url() ?>secciones/vcasting')">Video Casting</a></li>
        </ul>
       <!-- código a recorda... onmouseover="cambiar('.$item.')" -->
        <nav id="nav" class="clearfix">
          <ul>
            <li class={cur_secciones} onmouseover="javascript:MenuHover('secciones')">
              <a href="<?php base_url() ?>secciones">SECCIONES</a>
            </li>
            <li class={cur_experiencias} onmouseover="javascript:MenuHover('experiencias')">
              <a  href="experiencias">EXPERIENCIAS</a>
           </li>
            <li class={cur_plan60} onmouseover="javascript:MenuHover('60seg')">
              <a href="<?php base_url() ?>plan60">PLAN 60"</a>
            </li>
            <li class={cur_musica} onmouseover="javascript:MenuHover('musica')">
              <a href="<?php base_url() ?>musica">MÚSICA</a>  
            </li>
            <li class={cur_tienda} onmouseover="javascript:MenuHover('tienda')">
              <a href="">TIENDA</a>
            </li>
            <li class={cur_lcn} onmouseover="javascript:MenuHover('tienda')">
            	<a href="">LCN</a>
            </li>
            <li class={cur_casting} onmouseover="javascript:MenuHover('casting')" >
            	<a href="">CASTING</a>
            </li>
          </ul>
         
        </nav><!-- end nav -->
             
      </div>
  	     
    </div><!-- end #social -->