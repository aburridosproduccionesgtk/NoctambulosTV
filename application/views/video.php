

<div class="span12">

	<?php foreach ($video as $v) { ?>
	<h1 style="text-transform: none"><?php echo $v->title ?></h1>
	<div class="span5" style="margin: 0">&nbsp;<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
	<div class="span7">
		<iframe width="650" height="400" style="float: right" src="<?php echo $v->link ?>" frameborder="0" allowfullscreen></iframe>
	</div>
     <?php } ?>
    <!-- <h1>Fotos</h1> -->
   
</div>
