 <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.custom.81963.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>

<div class="container contact">
      <div class="row">

	
	<h1 style="text-transform:none; margin-top:-20px; margin-left:20px"><?php echo $video[0]->title ?></h1>
	<div class="span8">
		<iframe width="750" height="480" style="float: right" src="<?php echo $video[0]->link ?>" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="span4" >
		 <div class="commentarios">
		    <h4>comentarios</h4> 
		  	 <?php  if ($comments == null ){ ?>
		  	 	<p>Aun no hay comentarios para este video.</p>
		  	 	<p>Registrate y se el primero en comentar.</p>
		  	<?php  }else{ foreach ($comments as $c){ ?>
		  	    <p><?php echo $c->mensaje?>
		  	    <?php } }?>
		  	    <form method="post" action="<?php echo base_url() ?>secciones/comments">
		  	  		  <input type="text" name="comments" id="comments">
		  	    		<input type="submit" value="   Enviar   " name="submit" id="submit" class="btn btn-btn-small btn-primary"/>
		  	   		 <input type="hidden" name="v_id" id="v_id" value="<?php echo $video[0]->id ?>"/>
		  	    </form>
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
                  	 <a class="fancybox" href="<?php echo base_url() ?>img/fotos/<?php echo $f->tipe."/".$f->name ?>">
                   	<div>	
                   		<img width="80px" height="80px" ="list-style: none" src="<?php echo base_url() ?>img/fotos/<?php echo $f->tipe."/".$f->name ?>">
         			</div>	
                 	 </a>
                	</li>	
                  <?php } ?>
                  </ul>
              </div>
			</div>
		 </div>

      	<?php   } ?>  
		
		
	
	
     </div>
   

</div>

	 