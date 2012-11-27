<!DOCTYPE html>
<html lang="en">
	
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- <script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
	  	<script type="text/javascript" src="<?= base_url() ?>js/jQRotate2.js"></script>
	  	 <script type="text/javascript" src="<?= base_url() ?>js/test.js"></script>
	  	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/pruebas.css" /> -->
	  	  	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		     <script type='text/javascript' src='<? echo base_url() ?>js/jquery.fancybox-1.3.4.pack.js'></script>
		
	  
	   <script type="text/javascript">
	   	$("#prueba").fancybox({
	'scrolling'		: 'no',
	'titleShow'		: false,
	'onClosed'		: function() {
	    $("#login_error").hide();
	}
});
	   </script>

	<style type="text/css">
   

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
	
		-webkit-background-size:100% 100%;
		-moz-background-size:100% 100%; /* Firefox 3.6*/  
		background-size:100% 100%;
       }
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
    <a id="tip5" title="Login" href="#login_form">Try now</a>
       
<div id="container">
	<a class="mintex" id="prueba" href="#share_med">No recuerdo mi contraseña</a>
		<div style="display:none">
			
			<form id="share_med" method="post" action="">
		  <div class="contact">	 hpppñaaaaaa
		  	  	<input type="submit" value="   Compartir Video   " name="submit" id="submit" class="btn btn-btn-small btn-primary" />
		  	  	<input type="hidden" name="id_dest" id="id_dest" value="2" />
		  	  	<input type="hidden" name="v_id" id="v_id" value="" />
	   	 </div> 
	   		</form>
	   	</div>
		
<div style="display:none">
	<form id="login_form" method="post" action="">
	    	<p id="login_error">Please, enter data</p>
		<p>
			<label for="login_name">Login: </label>
			<input type="text" id="login_name" name="login_name" size="30" />
		</p>
		<p>
			<label for="login_pass">Password: </label>
			<input type="password" id="login_pass" name="login_pass" size="30" />
		</p>
		<p>
			<input type="submit" value="Login" />
		</p>
		<p>
		    <em>Leave empty so see resizing</em>
		</p>
	</form>
</div>
		
		
		</div> 
</body>
</html>
