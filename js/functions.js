jQuery(function() {

	/* fitVids: the videos fit in the div and is extensible */

	$(".row").fitVids();

	/* Home Slider with autoplay*/

	$("#da-slider").cslider({
	  autoplay: true
	});

	/* Fancybox */

	var $fancy = $('.fancybox');
	var $fancyg = $('.group');
	if( $fancy.length ) {
		$fancy.fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic'
		});
	}
	
	if($fancyg.length){
	   $fancyg.fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	}

	/* Accordion */ 
	var $accordion = $('.accordion');
	if( $accordion.length ) {
		$accordion.collapse()
	}

	/* Form Validate */
	var $contact = $("#contact");
	if( $contact.length ) {
		jQuery().ajaxStart(function() {
			//loader.show();
		}).ajaxStop(function() {
			//loader.hide();
		}).ajaxError(function(a, b, e) {
			throw e;
		});
		// Validate the form with ajax
		$contact.validate({
			submitHandler: function(form) {
				jQuery(form).ajaxSubmit({
					target: "#formresult"
				}).resetForm();
				$("#contact input, #contact textarea").removeClass("valid");
			}
		});
	}	

	/* Back-top */

	// Create the link
	$("body").append('<a href="#" id="back-top" title="Top">Top</a>');

	// Animate the window back to to top with Swing
	$("#back-top").click(function(e){
		$("html, body").animate({ scrollTop: 0}, { duration: 'slow', easing: 'swing'});
		e.preventDefault();
	});

	// Display the link with the position of the link
	$(window).scroll(function() {
		var pos = $(window).scrollTop();
		if (pos > 180) {
			$("#back-top").fadeIn(500);
		}else 
			$("#back-top").fadeOut(500);
	});

	/* Flexslider*/
	 var $flexslider = $('.flexslider');
	 var $flexslider1 =$('.flexslider1');
	 
	
	 if($flexslider.length){
		 $flexslider1.flexslider({
			 animation: "slide",              
				animationLoop:false,
				 slideshow: false,
				 itemWidth:130, 
				 itemMargin: 0,
				 controlNav: false,
				    minItems: 6,
				    maxItems: 6,
				    controlsContainer: ".flex-container"
				});
			
	 }
	 
	 if ($flexslider.length){
		 var $flextype = $('.flexslider').parent().get(0).className;
	


		 switch($flextype){
		 
		 case 'flex-container-nonav':
		
			 $flexslider.flexslider({
				 
					animation: "slide",              
					animationLoop:false,
					 slideshow: false,
					 itemWidth:220, 
					 itemMargin: 0,
					 controlNav: false,
					    minItems: 4,
					    maxItems: 4,
					controlsContainer: ".flex-container"
				});
			 break;
			 
		 case 'flex-container-mini':
		
			 $flexslider.flexslider({
					animation: "slide",              
					animationLoop:false,
					 slideshow: false,
					 itemWidth:80, 
					 itemMargin: 4,
					 controlNav:false,
					    minItems: 3,
					    maxItems: 3,
					
				});
		    break;
			 
		 }
			
		


		
	}

	/* Isotope */

	var $container = $('#portfolio');
	if($container.length) {
		$container.imagesLoaded( function(){
			$container.isotope({
			  // options
			  itemSelector : '.project',
			  layoutMode : 'fitRows'
			});
			// Filters
			$('#filters a').click(function(){
			  var selector = $(this).attr('data-filter');
			  $container.isotope({ filter: selector });
			  $(this).parent().addClass('current').siblings().removeClass('current');
			  return false;
			});
		});
	}

	/* map */


	var $map = $('#map');
	if ( $map.length ){
		$map.gMap({
			// Add your address here to be geolocalised
			address: '40 Wall Street, New York, NY 10005, United States',
			zoom: 16,
			markers: [{ 'address' : '40 Wall Street, New York, NY 10005, United States' }]
		});
	}

	/*	Navigation */

	var $nav    = $('#nav').children('ul');

	// Normal navigation and dropdown
	$nav.on('mouseenter', 'li', function() {
		var $this    = $(this);
		var	$li = $this.children('ul');
		if( $li.length ) $this.addClass('hover');
		$li.hide().stop(true, true).slideDown(200);
	}).on('mouseleave', 'li', function() {
		$(this).removeClass('hover').children('ul').stop(true, true).slideUp(50);
	});

	/* Mobile navigation */

	// Create the select
	$("<select class='mobile-nav'/>").appendTo("nav");
	// Add the first option: "Navigate to"
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Navigate to..."
	}).appendTo("nav select.mobile-nav");
	// Create the options tree
	$nav.find('li').each(function() {
		var $this   = $(this);
		var	$a = $this.children('a');
		var	i = $this.parents('ul').length - 1;
		var	indent  = '';
		// indent for different level
		if( i ) {
			while( i > 0 ) {
				indent += '--';
				i--;
			}
		}
		// Create the options
		$("<option />", {
		    "value"   : $a.attr('href'),
		    "text"    : indent + ' ' + $a.text()
 		}).appendTo("nav select.mobile-nav");
	});

	// Change the location of the page
	$(".mobile-nav").on('change',function() {
	  window.location = $(this).val();
	});

});	