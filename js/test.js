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
					'background-image': "url('./img/experienciasL.jpg')",
					'background-size': 'contain'
					}).fadeIn(500);
			});
			break;
		}
		
		
		
		
	}
	
	
	//base_url+"index.php?/home/secciones"
	function menuSel(ruta) {
		
		if(ruta == 'home/secciones'){
			$('#main_container').load(ruta);
		}else{  
			$('#lnav').fadeOut(1000,function(){Document.load(ruta);});
		}
	}
		  
	
 	function login_toggle()
	{
 		$('.login_container').removeClass('span4');
 		$('.login_container').addClass('span6');
		$("#login_reg_frame").hide();
		$("#login_frame").toggle(function(){
			$("form#login_form input#Nombre").focus();
		});

	} 
 	
 	function login_reg_toggle()
 	{
 		$('.login_container').removeClass('span4');
 		$('.login_container').addClass('span8');
 		$("#login_frame").hide();
 		$("#login_reg_frame").toggle(function(){
 			$("form#login_form_reg input#Nombre").focus();
 		});
 	}

 	
 	
 	function not_yet()
 	{
 		alert("funcionalidad en desarrollo");
 	}
 	
 	
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
	
	
 	
 