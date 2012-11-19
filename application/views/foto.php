<!DOCTYPE html>
 <html>
 	<body >
 		<div style="padding: 50px; background-color:#000000">
 			<?php print_array($comments) ?>
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
				  	    			<p><?php echo $c->mensaje?>
				  	  				 <?php } }?>
						 	 </div>	
						 	 <?php if( is_logged_in()){ ?>
		  	    <form method="post" action="<?php echo base_url() ?>secciones/commentsFotos" >
		  	  		 <input type="text" name="comments" id="comments" >
		  	    	 <input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />
		  	   		 <input type="hidden" name="v_id_foto" id="v_id_foto" value="<?php echo $foto[0]->id ?>"/>
		  	    </form>
		  	    
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