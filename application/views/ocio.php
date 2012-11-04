<?php ?>
 <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
  <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery.js"><\/script>')</script>
<h3 class="span2" style="margin-top: -50px;"><?php echo $titulo ?></h3>
    <script type="text/javascript" src="js/modernizr.custom.81963.js"></script>


	
	<div claas="span12">
	<div class="bgVideos">
		<div class="vertical">
			<?php echo imagetext('ULTIMOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">               	
                 	 <?php foreach ($videos_dat as $v_dat){ ?>
                  <!-- 	<li><a href="secciones/videos/<?php echo $v_dat->id ?>"> -->
                  <li><a target="_blank" href="<?php echo $v_dat->link ?>" >
                  	<div >
                  	<img style="border:2px solid <?php echo $color ?>;	list-style: none;
                  	" src="img/tbvid/<?php echo $v_dat->id ?>.jpg" width="215" height="115" /></div>
                  	 <p class="leyeVideo"><?php recorta($v_dat->title,30) ?></p></a></li>
                 
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
                     <li><a target="_blank" href="<?php echo $v->link ?>" >
               <!--   	<li><a href="hsecciones/videos/<?php echo $v_dat->id ?>"> --> 
                  	<div >
                  	<img style="border:2px solid <?php echo $color ?>;	list-style: none;
                  	" src="img/tbvid/<?php echo $v->id ?>.jpg" width="215" height="115" /></div>
                  	 <p class="leyeVideo"><?php recorta($v->title,30) ?></p></a></li>
                 
                  			<?php }?>            	
                  
                  			
                  </ul>
              </div>
			</div>
		</div>
	</div>
<!-- 
	<div claas="span12">
	<div class="bgVideos">
		<div class="vertical">
			<?php echo imagetext('FOTOS',30,array(255,255,255));?>
		</div>
 			<div class="flex-container-nonav">
                <div class="flexslider">
                  <ul class="slides">               	
                  
                  			
                  </ul>
              </div>
			</div>
		</div>
	</div>
 -->