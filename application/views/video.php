 <script type="text/javascript">
    $(document).ready(function(){
       $("#user").on('keypress',function(){
     
            $("#userlist").load("<?php echo base_url() ?>user/searchUser");
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
			
			<form id="share_med" method="post" action="" style="margin-top:-10px; margin-bottom:5px" >
		  		<input type="text" id="user" name="user" style="width: 70%; float:left; margin-right:10px" />
		  		
		  	  	<input type="submit" value=" Compartir " name="submit" id="submit" class="btn btn-btn-small btn-primaryb" />
		  	  	<input type="hidden" name="id_dest" id="id_dest" value="2" />
		  	  
	   		</form>
	   		<div id="userlist">
		  			
		  		</div>
	   	</div>
			<?php } ?>
			
			
		 <div class="commentarios">
		    <h4>Comentarios</h4> 
		    <div class="comentcontainer">
		  	 <?php  if ($comments == null ){ ?>
		  	 	<p>Aun no hay comentarios para este video.</p>
		  	 	<p>Registrate y se el primero en comentar.</p>
		  	<?php  }else{ foreach ($comments as $c){ ?>
		  	    <p><?php echo $c->mensaje?>
		  	    <?php } }?>
		  	    </div>
		  	    <?php if( is_logged_in()){ ?>
		  	    <form method="post" action="<?php echo base_url() ?>secciones/comments">
		  	  		 <input type="text" name="comments" id="comments">
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
     
 		<h3 class="span4">Fotos</h1>
 			
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
   

</div>

	 