 <script type="text/javascript">
    $(document).ready(function(){
     var user = $('#userlist');
      $("#user").on('keypress',function(){
 		//var us = $('#userlist').val();
 		
 		var us = this.value;
 		
 		if(us != ""){
 			user.show();
 			user.load("<?php echo base_url() ?>user/searchUser/"+this.value);
 		}
	 	});
	 	$('#submit1').click(function()  {
	 		if($("#user").value !=""){
		 	  alert('¡¡¡video compartido!!!');
		    }
		 });
	
    });
</script>

<div class="container contact">
      <div class="row">
		
		
		
	
	<div class="span8">
		<h2 style="text-transform:none; margin-top:-30px; margin-left:20px"><?php echo $video[0]->title ?></h2>
		<iframe width="750" height="480" style="float: right" src="<?php echo $video[0]->link ?>?rel=0&wmode=transparent" frameborder="0" allowfullscreen seamless="seamless">
			</iframe>
		
	</div>
	<div class="span4" >
			<?php if( is_logged_in()){ ?>  
			   <div class="compartir">
			   
		 			<a href="javascript:sharemed()">Comparte este video</a>
		 		</div>
		 		<div id="user_share" style="display:none">			
			
			<form id="share_med" method="post" action="<?php echo base_url() ?>user/sharemed/<?php echo $video[0]->tipe ?>" style="margin-top:-10px; margin-bottom:5px" />
		  		<input type="text" id="user" name="user" style="width: 70%; float:left; margin-right:10px" value="nombre de usuario" onclick="javascript:emptyValue(this)" />
		  		<input type="hidden" name="tipe" id="tipe" value="V" />
		  		<input type="hidden" name="id_vid" id="id_vid" value="<?php echo $video[0]->id ?>" />
		  	  	<input type="submit" value=" Compartir " name="submit" id="submit1" class="btn btn-btn-small btn-primary" />
		  	  	<input type="hidden" name="id_med" id="id_med" value="<?php echo $video[0]->id ?>" />
	   		</form>
	   		<div id="userlist" style="display: none">
		  			
		  		</div>
	   	</div>
			<?php }else{ ?>
			 <div class="compartir">Reg&iacute;strate para compartir este video</div>
			<?php } ?>
		 <div class="commentarios">
		    <h4>Comentarios</h4> 
		    <div class="comentcontainer">
		  	 <?php  if ($comments == null ){ ?>
		  	 	<p>Aun no hay comentarios para este video.</p>
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
		  	    <form method="post" action="<?php echo base_url() ?>secciones/comments">
		  	  		 <input type="text" name="comments" id="comments"  />
		  	    	 <input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />		  	   		 
		  	   		 <input type="hidden" name="v_id" id="v_id" value="<?php echo $video[0]->id ?>" />
		  	   		 
		  	    </form>
		  	    
		  	    
		  	    <?php }else{ ?>
		  	    	
		  	  
		  	  		 <input type="text" name="comments" id="comments" value ="Registrate para comentar">
		  	    	 <input type="button" disabled ="disabled" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />
		  	   
		  	  <?php  } ?>
		  	    
		 </div>
	</div>	 
	
		  <?php  if ($foto != null){ ?>
     
 		<h4 class="span4">Fotos</h4>
 			
 		  <div class="span4">
 			<div class="flex-container-mini" style="padding-left: 0px">
                <div class="flexslider">
                  <ul class="slides">     
            	<?php foreach ($foto as $f){ ?>          	
                   <li>
                  	 <a class="fancybox" rel="fotoVideo" href="<?php echo base_url() ?>secciones/foto/<?php echo $f->id ?>">
                   	<div>
                   		<img width="100px" height="70px" ="list-style: none" src="<?php echo base_url() ?>img/fotos/<?php echo $f->tipe."/".$f->name ?>" />
         			</div>	
                 	 </a>
                	</li>	
                  <?php } ?>
                  </ul>
              </div>
			</div>
		 </div>

      	<?php } ?> 
     </div>
     
   <div claas="span12">
	<div class="bgVideos" style="margin-left:0px; margin-top:15px">
		<div class="vertical" style="margin-top:10px">
			<?php echo imagetext('RELACIONADOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">               	
                 	 <?php foreach ($videos as $v_dat){ ?>
                 <li>
                 	<a href="<?php echo $v_dat->id ?>"> 
	                  	<div>
    	              		<img style="border:3px solid;	list-style: none;
        			          	" src="<?php echo base_url() ?>img/tbvid/<?php echo $v_dat->id ?>.jpg" width="215" height="115" />
                  		</div>
                  	 	<p class="leyeVideo"><?php recorta($v_dat->title,45) ?></p>
                  	 </a>
                  </li>
                 
                  			<?php }?>
                  </ul>
              </div>
			</div>
		</div>
	</div>

</div>

	 