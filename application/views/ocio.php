
 <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.custom.81963.js"></script> 

<h3 style="margin-top: -20px;margin-left: 20px"><?php echo $titulo ?></h3>
	

	<div claas="span12">
	<div class="bgVideos">
		<div class="vertical">
			<?php echo imagetext('ULTIMOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">               	
                 	 <?php foreach ($videos_dat as $v_dat){ ?>
                 <li>
                 	<a href="videos/<?php echo $v_dat->id ?>"> 
	                  	<div>
    	              		<img style="border:3px solid <?php echo $color ?>;	list-style: none;
        			          	" src="<?php echo base_url() ?>img/tbvid/<?php echo $v_dat->id ?>.jpg" width="215" height="115" />
                  		</div>
                  	 	<p class="leyeVideo"><?php recorta($v_dat->title,30) ?></p>
                  	 </a>
                  </li>
                 
                  			<?php }?>
                  </ul>
              </div>
			</div>
		</div>
	</div>

	<div claas="span12">
	<div class="bgVideos">
		<div class="vertical">
			<?php echo imagetext('+VISTOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">   
                  
          <?php foreach ($videos as $v){ ?>
                   
            	<li>
            		<a href="videos/<?php echo $v->id ?>"> 
                  		 <div>
                  			<img style="border:3px solid <?php echo $color ?>;	list-style: none" src="<?php echo base_url() ?>img/tbvid/<?php echo $v->id ?>.jpg" width="215" height="115" />
                  		</div>
                  	 	<p class="leyeVideo"><?php recorta($v->title,30) ?></p>
                  	 </a>
                  </li>
                 
         <?php }?>            	
                  
                  			
                  </ul>
              </div>
			</div>
		</div>
	</div>
    <?php if($foto != null){ ?> 
	<div claas="span12">
	<div class="bgVideos">
		<div class="vertical" style="padding-top: 20px">
			<?php echo imagetext('FOTOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">     
            <?php foreach ($foto as $f){ ?>          	
                   <li>
                  	 <a class="fancybox" href="<?php echo base_url() ?>img/fotos/<?php echo $f->tipe."/".$f->name ?>">
                   		<div>
                   		<img style="border:3px solid <?php echo $color ?>;	list-style: none" src="<?php echo base_url() ?>img/fotos/<?php echo $f->tipe."/".$f->name ?>" width="215" height="115">
         				</div>
                 	 </a>
                	</li>	
                  <?php } ?>
                  </ul>
              </div>
			</div>
		</div>
	</div>
	<?php } ?>
