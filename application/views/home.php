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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
  
    
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
	
	<script type="text/javascript" src="js/test.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.81963.js"></script>
  </head>

  <body onload="javascript:menuSel('home/secciones')">

    <header id="header">
      <div class="container">
		
        <a href="home" id="logo">
          <img src="img/logo.png" alt="Noctambulos TV">
        </a>
        <span class="span4">
        	<span class="cita"><i>en la noche es cuando mejor se ven las estrellas...</i></span>
        </span>
        
         <div class="pull-right">
        	<span class="login span4">
        		<a href="javascript:login_reg_toggle()"> Registrarse</a> |
        		<a href="javascript:login_toggle()">Entrar</a>
        	</span>
         </div>
      </div>
      
      <div class="container">
    
      	<div class="pull-right">
       		
       
        		<div class="login_container span4">
        			<div id="login_frame">
						<form id="login_form">
							<input type="text" class="imput span2" value="Nombre" name="email" id="Nombre"  />			
							<input type="password" class="imput span2" value="Contraseña" name="pass" id="Pass" />	
						</form>			
        			</div>
        			<div id="login_reg_frame">
					<form id="login_form_reg">
						<input type="text" class="imput span2" value="Nombre" id="Nombre" />				
						<input type="text" class="imput span2" value="Email" id="email" />
						<input type="text" class="imput span2" value="Fecha de Nacimiento"  />
						<input type="password" class="imput span2" value="Contraseña"  />
					</form>			
				</div>
        		
        	</div>
      </div>
    </header><!-- end #header -->

    <div id="social">
      <div class="container miLine">
        <ul class="social">
        	
          <li><a target="_blank" class="programacion" href="http://www.facebook.com">Facebook</a></li>
          <li><a target="_blank" class="ocio" href="http://www.twitter.com">Twitter</a></li>
          <li><a target="_blank" class="experiencias" href="http://plus.google.com">Google +</a></li>
          <li><a target="_blank" class="conciertos" href="http://www.linkedin.com">LinkedIn</a></li>
          <li><a target="_blank" class="discotecas" href="http://www.flickr.com">Flickr</a></li>
          <li><a target="_blank" class="festivales" href="http://www.dribbble.com">Dribbble</a></li>
           <li><a target="_blank" class="prensa" href="http://www.flickr.com">Flickr</a></li>
          <li><a target="_blank" class="vcasting" href="http://www.dribbble.com">Dribbble</a></li>
        </ul>
       <!-- código a recorda... onmouseover="cambiar('.$item.')" -->
        <nav id="nav" class="clearfix">
          <ul>
            <li class="current">
              <a href="javascript:menuSel('home/secciones')">SECCIONES</a>
            </li>
            <li>
              <a  href="javascript:menuSel('welcome')">EXPERIENCIAS</a>
           </li>
            <li>
              <a href="blog.html">PLAN 60"</a>
            </li>
            <li>
              <a href="portfolio-4col.html">MÚSICA</a>  
            </li>
            <li>
              <a href="contact.html">TIENDA</a>
            </li>
            <li>
            	<a href="contact.html">LCN</a>
            </li>
            <li>
            	<a href="contact.html">CASTING</a>
            </li>
          </ul>
         
        </nav><!-- end nav -->
             
      </div>
  	     
    </div><!-- end #social -->
	
   

     <div class="container">
      <!-- Use of Twitter Bootstrap Framework: 12 columns (3 X span4 or 2 X span6 for example) in one row / see http://twitter.github.com/bootstrap/ -->
    
    <!-- poner esto en la seccion correspondiente -->
      <section class="row">
       <div id="main_container">
    	
    	</div>
      
        
      </section> <!-- end .row -->

      <div class="miLine">&nbsp;</div> 
    </div> <!-- /#container -->

   

    <div id="copyright">
      <div class="container">
        <nav>
          <ul>
            <li class="current">
              <a href="#">Condiciones Legales</a>
            </li>
            <li>
              <a href="#"><i class="icon-envelope-alt"></i> Contacto</a>
            </li>
            <li>
            	NoctambulosTV 2012
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
   <!-- <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery.js"><\/script>')</script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <!--  PUTA MIERDA DE LIBRERIA QUE NO SIRVE PARA NADA  
    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
    <![endif]-->
    
  </body>
</html>
