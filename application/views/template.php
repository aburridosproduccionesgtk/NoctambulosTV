<!DOCTYPE html>
	<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">    <![endif]-->
	<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
	<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
 <html class="not-ie no-js" lang="es"> 
  <head>
    <meta charset="utf-8">
    <title>NoctambulosTV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="hesselek">

	<script type="text/javascript">
		var base_url = '<?php echo base_url();?>'
	</script>
    <!-- Le styles -->
  	<?= $css ?>
  
    
    <!-- 
    Uncomment if you want to change the color of links...
    <link href="css/colors.css" rel="stylesheet">
     -->

    <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.css">
      <link rel="stylesheet" href="css/ie7.css">
    <![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	
	<!-- cargamos aqui solo las librerias javascript necesarias -->
	  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"></script>
	 <script type="text/javascript" src="<?php echo base_url() ?>js/functions.js"></script>
	 <script type="text/javascript" src="<?php echo base_url() ?>js/test.js"></script>
	
	<?php echo $js ?>
	
	
  </head>



    <header id="header">
      <?=  $header ?>    
    </header><!-- end #header -->
    

     
	<body>
   <?php include_once("analyticstracking.php") ?>

     <div class="container">
       <section class="row">
       <div id="main_container">
       
   			<?=  $content ?>
   
         
         </div>    
    </section> <!-- end .row -->
           
        <div class="miLine">&nbsp;</div> 
    </div> <!-- /#container -->
   
     <?=  $footer ?>
     
   

     <script type='text/javascript' src='<? echo base_url() ?>js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.cslider.js'></script> 
    <script>window.jQuery || document.write('<script type="text/javascript" src="<?php echo base_url() ?>js/jquery.js"><\/script>')</script>
    <!-- 
    	<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> -->
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.gmap.min.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.form.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='<? echo base_url() ?>js/jquery.fancybox-1.3.4.pack.js'></script>
   	<!--[if lt IE 9]>
    	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <![endif]-->
  </body>
</html>
