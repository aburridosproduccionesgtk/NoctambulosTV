
<div class="span12">
	<div class="row">
	<div class="offset9"><span class="btn btn-large btn-primary">Modificar Mi perfil</span></div>
		<div class="span5 pr_comments">
			
			
				<h4>Información Personal</h4>
				<div class="span2" style="margin-left: 0px">
					<img src="<?php echo base_url('img/NO-PHOTO.png') ?>" />
				</div>
				<div class="span3" style="margin-left: 0px">
					Usuario: <?php echo $user[0]->user_name; ?><br />
					Fecha de Nacimiento: <?php echo fecha_norm($user[0]->fecha_nac); ?><br />
					Correo: <?php echo $user[0]->email; ?><br /><br /><br />
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
				
					<div class="vertical">
						
					</div>
		 			<div class="flex-container-med">
		                <div class="flexslider">
		                  <ul class="slides">               	
		                 	 <?php foreach ($videos_dat as $v_dat){ ?>
		                 <li>
		                 	<a href="<?php echo base_url() ?>videos/<?php echo $v_dat->id ?>"> 
			                  	<div>
		    	              		<img style="border:3px solid;	list-style: none;" src="<?php echo base_url() ?>img/tbvid/<?php echo $v_dat->id ?>.jpg" width="140" height="80" />
		                  		</div>
		                  	 	<p class="leyeVideo"><?php recorta($v_dat->title,25) ?></p>
		                  	 </a>
		                  </li>
		                 
		                  			<?php }?>
		                  </ul>
		              </div>
					</div>
		
			
			</div>
		</div>
		
		<div class="row">
			<div class="span5 pr_comments" style="height: 172px;">
				
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
					<div class="flex-container-med">
                <div class="flexslider">
                  <ul class="slides">     
            	   <?php foreach($fotos_dat as $fo) { ?>   	
                   <li>
                  	 
                 
                  	
                  	 <a rel="<?php echo $fo[0]->tipe ?>" class="fancybox" href="<?php echo base_url() ?>img/fotos/<?php echo $fo[0]->tipe."/".$fo[0]->name ?>">
                  
                   			<img style="border:3px solid; 
                   			     	list-style: none" src="<?php echo base_url().'img/fotos/'.$fo[0]->tipe.'/'.$fo[0]->name; ?>" 
								 width="140" height="80" />
         			
         				</a>
                  	 
                   		
         		
                 	
                	</li>	
                 <?php } ?>
                  </ul>
              </div>
			</div>
				
			</div>
		</div>
		
			
		
</div>
