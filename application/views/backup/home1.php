<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>NoctambulosTV</title>
	  
	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/960percent.css" />
	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/main.css" />
	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/pruebas.css" />
	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/botones.css" />
	  	<script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
	  	 <script type="text/javascript" src="<?= base_url() ?>js/test.js"></script>
	  	 <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"">
	</head>
	<body>
	<div id="animated_body">	
		<div class="container_16">
			<div class="grid_1 v_grid_lat"></div>
			<div class="grid_6 alpha logo suffix_3">	
				<img src="<?= base_url() ?>img/logo.png" />	
			</div>
		
			<div class="grid_3 white size_big_high">
				<br /><br />
				<div style="text-align: right; vertical-align:bottom;">
				<a href="javascript:login_reg_toggle()">Registrarse</a> |
				<a href="javascript:login_toggle()">Entrar</a>
				</div>
			</div>
			
			<div class="grid_12 login_container alpha omega">
				
				<div id="login_frame">
				<form id="login_form">
					<div class="grid_4 prefix_8">
						<input type="text" class="imput" value="Nombre" name="email" id="Nombre"  />
					</div>	
					<div class="grid_4 omega">
						<input type="password" class="imput" value="Contraseña" name="pass" id="Pass" />
					</div>								
				</form>			
				</div>
				
				<div id="login_reg_frame">
					<form id="login_form_reg">
						<input type="text" class="imput" value="Nombre" id="Nombre" />				
						<input type="text" class="imput" value="Email" id="email" />
						<input type="text" class="imput1" value="Fecha de Nacimiento"  />
						<input type="password" class="imput" value="Contraseña"  />
					</form>			
				</div>
				
			</div>	
			<div class="grid_14 alpha">
        		<div id="animate_banner"></div>
       		</div>
       		<div class="grid_12 alpha">
         		<br /><br />
         	
	         	<div class="grid_3 alpha">
	         		<br /><br />
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Programación</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Reportajes</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Experiencias</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Conciertos</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Festivales</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Discotecas</a>
	         		</div>
	         		<div class="boton">
	         			<a href="javascript:not_yet()">Ruedas de Prensa</a>
	         		</div>
	         			<div class="boton">
	         			<a href="javascript:not_yet()">Video Casting</a>
	         		</div>
	         	
	          </div>
	        	 		
						
				
				<div class="grid_13 alpha push_1">
					
					<?php menu_obj("Secciones","no_left") ?>
					<?php menu_obj("Experiencias","") ?>
					<div id="grad_left"> &nbsp;</div>
						<div id="grad_ele"><a href="javascript:not_yet()">Plan 60" </a></div>
					<div id="grad_right"> &nbsp;</div>
					<?php menu_obj("Musica","") ?>
					<?php menu_obj("Tienda","") ?>
					<?php menu_obj("LCN","") ?>
					<?php menu_obj("Casting","no_right") ?>
					<br /><br />
					<div id="page_load">
        				jajaja
        			</div>
        			
					
				</div>					
        		
        </div>
   		<div class="grid_2"> 
	     
	    	<div id="animate_banner_vert"></div>
	        
	    </div>
       
        	
			
		</div>
	</div>	
		     
		

	
	
	</body>
	</html>