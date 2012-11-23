
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
				
			</div>
		</div>
		
			
		
</div>
