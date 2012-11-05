

<div class="span12">

	<?php foreach ($video as $v) { ?>
	<h1><?php echo $v->title ?></h1>
	<div class="span5" style="margin: 0">&nbsp;<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
	<div class="span7">
		
		<object width="650" height="400" style="float:right">
			<param name="movie" value="<?php echo $v->link ?>"></param>
			<param name="allowFullScreen" value="true"></param>
			<param name="allowscriptaccess" value="always"></param>	
		<embed src="<?php echo $v->link ?>" type="application/x-shockwave-flash" width="650" height="400" allowscriptaccess="always" allowfullscreen="true"></embed></object>
	</div>
     <?php } ?>
     <h1>Fotos</h1>
   
</div>
