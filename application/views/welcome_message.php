<!DOCTYPE html>
<html lang="en">
	
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!-- <script type="text/javascript" src="<?= base_url() ?>js/jquery.js"></script>
	  	<script type="text/javascript" src="<?= base_url() ?>js/jQRotate2.js"></script>
	  	 <script type="text/javascript" src="<?= base_url() ?>js/test.js"></script>
	  	  	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/pruebas.css" /> -->
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

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
  <?php echo print_array($hoby) ?>
   <?php echo print_array($sex) ?>
   <?php echo print_array($provincia) ?>
   <?php echo print_array($feast_location) ?>
   <?php echo print_array($ocuppation) ?>
     <?php echo print_array($fallo) ?>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>
		<div id="image">ssadf</div>
		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
        <p>Estas usando <?= $info_agent?><p>
        <p>Y otra cosa <?php echo $control ?> mas<p>
        	<p><?php echo base_url() ?></p>
        <p><a href="<?php echo base_url().'home/' ?>">Prueba de fuego</a></p>	
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
	</div>
	<div style="border: 3px solid white">
	hoaalala
		
		</div> 
</body>
</html>
