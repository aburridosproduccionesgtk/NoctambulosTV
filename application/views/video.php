 <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.custom.81963.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>

<div class="span12">

	<?php foreach ($video as $v) { ?>
	<h1 style="text-transform:none; margin-top:-10px"><?php echo $v->title ?></h1>
	<div class="span4" style="margin: 0">
		 <div> 
		   <!-- AQui, en algun momento, irán los comentarios.... -->	
		 	&nbsp;
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
	<div class="span8">
		<iframe width="750" height="480" style="float: right" src="<?php echo $v->link ?>" frameborder="0" allowfullscreen></iframe>
	</div>
     <?php } ?>
   
</div>


	 