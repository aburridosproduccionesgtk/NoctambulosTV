<?php echo print_array($profile)?>
   <script>window.jQuery || document.write('<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"><\/script>')</script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>
<div class="container contact">
      <div class="row">
        <div class="span12">
        	
          <h2 align="center">Perfil del Usuario</h2>
          
          <form method="post" action="<?php echo base_url() ?>user/profile_update" id="contact" enctype="multipart/form-data" >
            <div class="row">
              <div class="span4">
              	<h4>Datos Personales</h4><br />
                <div class="input">
                  <label for="user_name">
                    Nombre de Usuario*
                  </label>
                  <input type="text" name="user" id="user" class="required" value="<?php echo $user[0]->user_name ?>" />
                </div>
                <div class="input">
                  <label for="sexo">
                    Sexo*
                  </label>
						<select name="sex">
						  <option value ="<?php echo $profile[0]->sex ?>" selected><?php echo $profile[0]->sex  ?></option>
						  <option value="V">V</option>
						  <option value="M">M</option>
						</select>
                </div>
                <div class="input">
                  <label for="provincia">
                    Provincia
                  </label>
                     <select name="provincia" class="span">
                     	<option value="<?php echo $profile[0]->provincia ?>"><?php echo $profile[0]->provincia ?></option>
                     	<option value="A Coruña">A Coruña</option>
                     	<option value="Alava">Alava</option><option value="Albacete">Albacete</option>
						<option value="Alicante">Alicante</option><option value="Almería">Almería</option>
						<option value="Asturias">Asturias</option><option value="Ávila">Ávila</option>
						<option value="Badajoz">Badajoz</option>
						<option value="Baleares (Illes)">Baleares (Illes)</option><option value="Barcelona">Barcelona</option>
						<option value="Burgos">Burgos</option><option value="Cáceres">Cáceres</option>
						<option value="Cádiz">Cádiz</option>
						<option value="Cantabria">Cantabria</option>
						<option value="Castellón">Castellón</option>
						<option value="Ciudad Real">Ciudad Real</option><option value="Córdoba">Córdoba</option>
						<option value="Cuenca">Cuenca</option>
						<option value="Girona">Girona</option><option value="Granada">Granada</option>
						<option value="Guadalajara">Guadalajara</option><option value="Guipúzcoa">Guipúzcoa</option>
						<option value="Huelva">Huelva</option><option value="Huesca">Huesca</option>
						<option value="Jaén">Jaén</option><option value="León">León</option>
						<option value="Lleida">Lleida</option><option value="La Rioja">La Rioja</option>
						<option value="Lugo">Lugo</option><option value="Madrid">Madrid</option>
						<option value="Málaga">Málaga</option><option value="Murcia">Murcia</option>
						<option value="Navarra">Navarra</option><option value="Ourense">Ourense</option>
						<option value="Palencia">Palencia</option><option value="Las Palmas">Las Palmas</option>
						<option value="Pontevedra">Pontevedra</option><option value="Salamanca">Salamanca</option>
						<option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option><option value="Segovia">Segovia</option>
						<option value="Sevilla">Sevilla</option><option value="Soria">Soria</option>
						<option value="Tarragona">Tarragona</option><option value="Teruel">Teruel</option>
						<option value="Toledo">Toledo</option><option value="Valencia">Valencia</option>
						<option value="Valladolid">Valladolid</option><option value="Vizcaya">Vizcaya</option>
						<option value="Zamora">Zamora</option><option value="Zaragoza">Zaragoza</option>
						<option value="Ceuta">Ceuta</option><option value="Melilla">Melilla</option>
                     	
                     </select>
                </div>
                
                   <a class="fancybox btn btn-large btn-primary" href="#form_foto">Sube una foto</a>
                 
              </div>
             
              <div class="span4">
                <h4>Cuéntanos más sobre ti</h4><br />
               
                	<div class="input">
	                  <label for="ocuppation">
	                    Situación profesional:
	                  </label>
	                  <input type="text" name="ocuppation" id="ocuppation" value="<?php echo $profile[0]->ocuppation ?>" />
                	</div>
		           	<div class="input">
		                  <label for="feast_location">
		               Lugares por donde sueles salir:
		              </label>
		              <textarea rows="4" name="feast_location" id="feast_location" class="required"><?php echo $profile[0]->feast_location ?></textarea>
		           </div>
              </div>
          	<div class="span4">
          		<h4>Intereses, Hobbies</h4><br />
               <div class="span2">
	               	<input type="checkbox" name="Hoby[]" value="Foto" /> Fotografía <br />
	               	<input type="checkbox" name="Hoby[]" value="TV" /> Cine/TV <br />
	               	<input type="checkbox" name="Hoby[]" value="Music" /> Música<br />
	               	<input type="checkbox" name="Hoby[]" value="Teatro"> Teatro <br />	    
	               	<input type="checkbox" name="Hoby[]" value="Disco" /> Discotecas<br />           	
               </div>
               <div class="span2 pull-right" style="margin-right: -20px">
               		<input type="checkbox" name="Hoby[]" value="Fest"> Festivales<br />
               		<input type="checkbox" name="Hoby[]" value="Moda"> Moda/Belleza	<br />
               		<input type="checkbox" name="Hoby[]" value="Net" /> Internet<br />
	               	<input type="checkbox" name="Hoby[]" value="Mobile" /> Moviles<br />
	               	<input type="checkbox" name="Hoby[]" value="Motor"> Motor<br />
               </div>
              </div>
               <div class="span4">
               <h4 style="padding-top: 15px">Vida Nocturna (Estilo musical)</h4>
               <div class="span2">
	               	<input type="checkbox" name="Hoby[]" value="Rock" /> Rock/Metal <br />
	               	<input type="checkbox" name="Hoby[]" value="Techno" /> Techno <br />
	               	<input type="checkbox" name="Hoby[]"value="House" /> House<br />
	               	<input type="checkbox" name="Hoby[]" value="Latino" /> Latino<br />
               </div>
               <div class="span2 pull-right" style="margin-right: -20px">
	               	<input type="checkbox" name="Hoby[]" value="Reggae"> Reggae	<br />
	               	<input type="checkbox" name="Hoby[]" value="Trance"> Trance<br />
	               	<input type="checkbox" name="Hoby[]" value="Urban"> Urban<br />
	               	<input type="checkbox" name="Hoby[]" value="Otra"> Other<br />
               </div>
          	</div>
            </div>
            <div class="row">
              <div class="span12">
              	<div class="span5">&nbsp;</div>
                <input type="submit" value="   Modificar mi Perfil   " name="boton" id="boton" class="btn btn-large btn-primary"/>
                <div class="botty"><input type="text" name="botty" id="botty" /></div>
              </div>
            </div>
        </form>
       <div style="display: none">
       	<form id="form_foto" action="<?php echo base_url() ?>user/uploadPhoto" method="post" enctype="multipart/form-data" > 
	         <input name="upfile" id="upfile" type="file" />
	       	<input type="submit" value="Enviar fotos" id="upload_foto" class="btn btn-large btn-primary" />
	        </form>
       </div>
        
        <div id="formresult"></div>
        </div>
        
      </div><!-- end .row -->
    </div><!-- end .container -->

