<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">    <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>NoctambulosTV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
	<?= $js ?>
	
	
  </head>



    <header id="header">
      <?=  $header ?>    
    </header><!-- end #header -->
    

     
	<body>
   

     <div class="container">
       <section class="row">
       <div id="main_container">
       
   			<?=  $content ?>
   
         
         </div>    
    </section> <!-- end .row -->
           
        <div class="miLine">&nbsp;</div> 
    </div> <!-- /#container -->
   
     <?=  $footer ?>
     
  </body>
</html>
