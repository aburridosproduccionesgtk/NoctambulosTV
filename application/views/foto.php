<!DOCTYPE html>
 <html>
 
 	<body >
 		<div style="padding: 50px; background-color:#000000">
 			 <?php $imgInfo = getimagesize(base_url().'/img/fotos/'.$foto[0]->tipe.'/'.$foto[0]->name) ?>			
 		<table >
 				<tr> 
					<td >
						<img src="<?php echo base_url() ?>img/fotos/<?php echo $foto[0]->tipe."/".$foto[0]->name ?>" <?php echo $imgInfo[3] ?> />
					</td>	 
					<td style="padding-left:10px; vertical-align: top;" >
						 <div class="commentariosF" style="height:<?php echo $imgInfo[1] ?>px">
						 	
						 	   <h4 style="padding: 5px">Comentarios</h4>
						 	 <div class="commentFcontainer">
								 	 <?php  if ($comments == null ){ ?>
				  	 					<p>Aun no hay comentarios para esta foto.</p>
				  	 					<p>Registrate y se el primero en comentar.</p>
				  					<?php  }else{ foreach ($comments as $c){ ?>
				  	    				<div class="mensaje">
		  	  								<?php echo $c->mensaje ?><br>
		  	    							<span><?php echo $c->user_name; ?></span>
		  	    							<div class="fmensaje"><?php echo fecha_norm($c->fecha); ?></div>
		  	    						</div>
				  	  				 <?php } }?>
						 	 </div>	
						 	 <?php if( is_logged_in()){ ?>
		  	    <form method="post" action="<?php echo base_url().'secciones/commentsFotos/'.$foto[0]->tipe ?>" >
		  	  		 <input type="text" name="comments" id="comments" >
		  	    	 <input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />
		  	   		 <input type="hidden" name="v_id_foto" id="v_id_foto" value="<?php echo $foto[0]->id ?>"/>
		  	   		 <input type ="hidden" name="id_vid" id="id_vid" value="<?php echo $foto[0]->id_vid ?>" />
		  	    </form>
		  	    <div id="comentcontainerParContainer">
		  	    	<div class="compartir">
			   
		 				<a href="javascript:sharemed1()">Comparte esta foto</a>
		 			</div>
		 		</div>
		 		<div id="user_share2" style="display:none">			
			
						<form method="post" action="<?php echo base_url().'user/sharemed/'.$foto[0]->tipe ?>" style="margin-top:-10px; margin-bottom:5px" >
					  		<input type="text" id="user" name="user" value="nombre de usuario" style="width: 70%; float:left; margin-top: 38px; margin-top: 37px;" onclick="javascript:emptyValue(this)" />
					  		<input type="hidden" name="tipe" id="tipe" value="F" />
					  	  	<input type="submit" value=" Comparte " class="btn btn-btn-mini btn-primary" style="margin-top: 37px;" />
					  	  	<input type="hidden" name="id_med" id="id_med" value="<?php echo $foto[0]->id ?>" />
					  	  	<input type ="hidden" name="id_vid" id="id_vid" value="<?php echo $foto[0]->id_vid ?>" />
				   		</form>
	   				<div id="userlist" style="display: none">
		  			
		  			</div>
	   			</div>
		  	    
		  	    <?php }else{ ?>
		  	    	
		  	  
		  	  		 <input type="text" name="comments" id="comments" value ="Registrate para comentar">
		  	    	 <input type="button" disabled ="disabled" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />
		  	   		
		  	   
		  	  <?php  } ?>
						 </div>
			
					</td> 
				</tr>
				
			</table>

 			
 		</div>
 	</body>
 </html>


	
	

	 <!--	 -->