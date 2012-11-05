

<div class="span12 bgVideos">
	<div class="bgVideos">
	<?php foreach ($video as $v) { ?>
<h1><?php echo $v->title ?></h1>
	<div class="span6">
		<iframe width="560" height="315" src="<?php echo $v->link ?>" frameborder="0" allowfullscreen></iframe>
	</div>
     <?php } ?>
    </div> 
</div>
