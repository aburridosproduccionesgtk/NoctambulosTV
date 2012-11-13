/*
 	 * runOnLoad.js: portable registration for onload event handlers.
 	 * 
 	 * This module defines a single runOnLoad() function for portably registering
 	 * functions that can be safely invoked only when the document is fully loaded
 	 * and the DOM is available.
 	 *
 	 * Functions registered with runOnLoad() will not be passed any arguments when
 	 * invoked. They will not be invoked as a method of any meaningful object, and
 	 * the this keyword should not be used.  Functions registered with runOnLoad()
 	 * will be invoked in the order in which they were registered.  There is no
 	 * way to deregister a function once it has been passed to runOnLoad().
 	 *
 	 * In old browsers that do not support addEventListener() or attachEvent(),
 	 * this function relies on the DOM Level 0 window.onload property and will not
 	 * work correctly when used in documents that set the onload attribute
 	 * of their <body> or <frameset> tags.
 	 */
 	function runOnLoad(f) {
 	    if (runOnLoad.loaded) f();    // If already loaded, just invoke f() now.
 	    else runOnLoad.funcs.push(f); // Otherwise, store it for later
 	}

 	runOnLoad.funcs = []; // The array of functions to call when the document loads
 	runOnLoad.loaded = false; // The functions have not been run yet.

 	// Run all registered functions in the order in which they were registered.
 	// It is safe to call runOnLoad.run() more than once: invocations after the
 	// first do nothing. It is safe for an initialization function to call
 	// runOnLoad() to register another function.
 	runOnLoad.run = function() {
 	    if (runOnLoad.loaded) return;  // If we've already run, do nothing

 	    for(var i = 0; i < runOnLoad.funcs.length; i++) {
 	        try { runOnLoad.funcs[i](); }
 	        catch(e) { /* An exception in one function shouldn't stop the rest */ }
 	    }
 	    
 	    runOnLoad.loaded = true; // Remember that we've already run once.
 	    delete runOnLoad.funcs;  // But don't remember the functions themselves.
 	    delete runOnLoad.run;    // And forget about this function too!
 	};

 	// Register runOnLoad.run() as the onload event handler for the window
 	if (window.addEventListener)
 	    window.addEventListener("load", runOnLoad.run, false);
 	else if (window.attachEvent) window.attachEvent("onload", runOnLoad.run);
 	else window.onload = runOnLoad.run;
 	
/*	var step = 1; 				// How many pixels to move per step
	var current = 0;			// The current pixel row
	var imageWidth = 2000;		// Background image width
	var headerWidth = 1280;		// ancho de la pantalla
	
	//Cambiar para que coincida con el ancho de la pantalla
	var restartPosition = -(imageWidth - headerWidth);
	
	function scrollBg(){
		//vamos hasta el pixel en el que nos encontremos
		current -= step;
		
		//If llegamos al final de la imagen, la iniciamos de nuevo
		if (current == restartPosition){
			current = 0;
		}
		
		//Cambiamos el CSS
		$('#animated_body').css("background-position",current+"px 0");
	}
	
	//Llamada a la función que se repite constantemente
	var init = setInterval("scrollBg()",100);*/
	
	
 	
 

/*$(document).ready(function() {
 		
     $("#animate_banner").animate({
            marginRight: "0px"           
        },2000,function (){
        	  $("#animate_banner_vert").animate({
        		  
        		  marginTop: "0px",
        			  height: "550px"
        	  },1500)
        });
    
   
    });

/*$('#grad_ele').mouseover(function (){
	var indice = $(this).attr("href");
	alert('esto funciona'+indice);



});
$(document).ready(function(){
	$('#main_container').load('home/secciones');
});*/
 	
	function MenuHover(param)
	{
		switch(param){
		case '60seg':
		$('#intro').remove();
		$('#bgImage').fadeOut(100,function(){
			$('#bgImage').css({ 
				'background-image': "url('./img/60sindex.jpg')",
				'background-size': 'contain'
				}).fadeIn(500);
		});
		break;
		
		case 'musica':
			
			$('#bgImage').fadeOut(100,function(){
				$('#bgImage').css({ 
					'background-image': "url('./img/musica.jpg')",
					'background-size': 'contain'
					}).fadeIn(500);
			});
			break;
		
		case 'tienda':
			$('#bgImage').fadeOut(100,function(){
				$('#bgImage').css({ 
				    'background-image': "url('./img/tienda.jpg')",
				    'background-size': 'contain'    
				}).fadeIn(500);			
		});
			break;
			
		case 'casting':
			$('#bgImage').fadeOut(100,function(){
				$('#bgImage').css({ 
				    'background-image': "url('./img/casting.jpg')",
				    'background-size': 'contain'    
				}).fadeIn(500);			
		});
			break;
		case 'experiencias':
			
			$('#bgImage').fadeOut(100,function(){
				$('#bgImage').css({ 
					'background-image': "url('./img/tienda.jpg')",
					'background-size': 'contain'
					}).fadeIn(500);
			});
			break;
		}
		
		
		
		
	}
	
	
	//base_url+"index.php?/home/secciones"
/*	function menuSel(ruta) {
		
		if(ruta == 'home/secciones'){
			$('#main_container').load(ruta);
		}else{  
			$('#lnav').fadeOut(1000,function(){$('#main_container').load(ruta);});
		}
	}*/
		  
	//
 	function login_toggle()
	{
 	//	$('.login_container').removeClass('span4');
 		//$('.login_container').addClass('span6');
		$("#login_reg_frame").hide();
		$("#login_frame").toggle(function(){
			$("form#login_form input#email").focus();
		});

	} 
 	
 	function login_reg_toggle()
 	{
 	//	$('.login_container').removeClass('span4');
 		//$('.login_container').addClass('span8');
 		$("#login_frame").hide();
 		$("#login_reg_frame").toggle(function(){
 			$("form#login_form_reg input#email").focus();
 		});
 	}
 	
 	
 	$(function() {
 		  $('.error').hide(); 	
 		  $('.error').css("color","white");
 		  
 		  $("#reg").click(function() {
 				// validate and process form
 				// first hide any error messages
 		    $('.error').hide();
 				
 			  
 			
 				var email = $("input#email").val();
 				if (email == "Email" || email == "") {
 		      $("label#email_error").show();
 		      $("input#email").focus();
 		      return false;
 				}
 				
 				var fecha_nac = $("input#fecha_nac").val();
 				if (fecha_nac == "Fecha de Nacimiento (dd-mm-aaaa)" || fecha_nac == "") {
 		 		      $("label#fecha_nac_error").show();
 		 		      $("input#fecha_nac").focus();
 		 		      return false;
 		 		    }
 				
 				var password = $("input#password").val();
 				if (password == "" || password =="password") {
 		      $("label#password_error").show();
 		      $("input#password").focus();
 		      return false;
 		    }
 				
 				var dataString = 'fecha_nac='+ fecha_nac + '&email=' + email + '&password=' + password;
 				//alert (dataString);return false;
 				
 				$.ajax({
 		      type: "POST",
 		      url: 'user/reg',
 		      data: dataString,
 		     dataType: 'json',
 		      success: function(output_string) {
 		    
 		        $('#mensajito').show();
 		        $('#mensajito').html(output_string); 
 		        }
 		     });
 		    return false;
 			});
 		});
 		runOnLoad(function(){
 		  $("input#email").select().focus();
 		});
 	
 	
 	
 	function not_yet()
 	{
 		alert("funcionalidad en desarrollo");
 	}
 	
 	