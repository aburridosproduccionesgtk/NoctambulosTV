
<div class="span12">
	<div class="row">
		<div class="span5 pr_comments">
			
			
				<h4>Información Personal</h4>
				<div class="span2" style="margin-left: 0px">
					<img src="<?php echo base_url('img/NO-PHOTO.png') ?>" />
				</div>
				<div class="span3" style="margin-left: 0px">
					Usuario: <?php echo $user->user_name; ?><br />
					Fecha de Nacimiento: <?php echo fecha_norm($user->fecha_nac); ?><br />
					Correo: <?php echo $user->email; ?><br /><br /><br />
					Intereses:</br>
					<?php $intereses = $interest[0]; 
					foreach ($intereses as $c=>$v) {
						if($v == 1){
						   echo $c.', ';	
						}
						
						
					}?>
					
				</div>
				
		</div>
			<div class="span6 pr_comments">
			
				<h4>Videos Compartidos</h4>
				videos	
			
			</div>
		</div>
		
		<div class="row">
			<div class="span5 pr_comments">
				
					<h4>Últimos comentarios</h4>
						<div class="commentFcontainer">
						   <div class="commenProfile">
							<?php 
								$size = count($comments);
									for ($i=0; $i<$size; $i++) {
										echo $comments[$i]['mensaje'].'<br />';
						//$c->fecha.'<br />';
						//echo $c->tipe;
						
							} ?>
						</div>
				</div>
			
			</div>
			<div class="span6 pr_comments">
				
					<h4>Fotos compartidas</h4>
					<div class="flex-container-fotos">
                <div class="flexslider1">
                  <ul class="slides">     
            	      	
                   <li>
                  	 
                 
                  	
                  	 <a rel="<?php echo $fo[$i]->id_vid ?>" class="fancybox" href="<?php echo base_url() ?>img/fotos/<?php echo $fo[$i]->tipe."/".$fo[$i]->name ?>">
                  
                   			<img style="border:3px solid 
                   			     <?php echo $color; 
                   			     if($i>0){
                   			     	echo "display:none;";
								 } ?>	list-style: none" src="<?php echo base_url().'img/fotos/'.$fo[$i]->tipe.'/'.$fo[$i]->name; ?>" 
								 width="130" height="115" />
         			
         				</a>
                  	 
                   		
         				<p class="leyeVideoF"><?php recorta($f['title'],30) ?></p>
                 	
                	</li>	
                
                  </ul>
              </div>
			</div>
				
			</div>
		</div>
		
			
		
</div>