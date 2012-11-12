   <script type='text/javascript' src='<? echo base_url() ?>js/jquery.fancybox-1.3.4.pack.js'></script>
 <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>`
 <script type="text/javascript" src="<?php echo base_url() ?>js/modernizr.custom.81963.js"></script> 
   <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.flexslider-min.js"></script>
<h1>Hola, mundo</h1>


<?php foreach ($fotos as $f){
            	      $fo = $f['galery'];
            	         		  ?>          	
                 	<div style="height: 115px; width:123px">
                  	 
                  	<?php for ($i=0; $i<count($fo); $i++){
                  		
                  		
                  		?>
                  
                  	 <a rel="<?php echo $fo[$i]->id_vid ?>" class="fancybox" href="<?php echo base_url() ?>img/fotos/<?php echo $fo[$i]->tipe."/".$fo[$i]->name ?>">
                  		
                   			<img style="border:3px solid <?php echo $color; if($i>1){echo "display:none;";} ?> 	list-style: none" src="<?php echo base_url() ?>img/fotos/<?php echo $fo[$i]->tipe."/".$fo[$i]->name ?>" width="150" height="115">
         				
         			</a>
         			
                  	 <?php }?>
                   		</div>
         				<p class="leyeVideo"><?php recorta($f['title'],30) ?></p>
                 	
                	                 <?php } ?>