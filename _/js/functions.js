(function($){

	var event_type;
	var url = document.location.toString();
	var window_width = window.innerWidth; 
	
	if ($('#home-slider').length == 1) {
	var active_slide = $('#home-slider').find('.active');
	var next_slide = $('#home-slider').find('.next');
	var prev_slide = $('#home-slider').find('.prev');
	var slide_width = active_slide.outerWidth();
	var slide_half = slide_width/2;
	var slide_plus_half = slide_width + slide_half;
	var slide_double = slide_width*2;
	
	var rtime = new Date(1, 1, 2000, 12,00,00);
	var timeout = false;
	var delta = 200;
	}
	
	if (Modernizr.touch){
	
	 event_type = 'touchstart';
	  
	} else {
	 
	 event_type = 'click';	
	 
	}
	
	//console.log(event_type);
	
	/* Orientation Change */
	
	var wasPortrait = -1;
	var checkOrientation = function() {
    var isPortrait = (window.innerHeight > window.innerWidth);
    if( isPortrait === wasPortrait ) { return; }
    wasPortrait = isPortrait;
    
    window_width = window.innerWidth; 
    
    //console.log(window_width);
	};
	
	window.addEventListener( 'orientationchange', checkOrientation, false );
	window.addEventListener( 'resize', checkOrientation, false );

	// CALL TO ACTION BUTTON HOME PAGE 
	
	 $('.selectpicker').find('select').selectpicker({'style': 'btn btn-group btn-default', 'width': '100%', 'size': 5});
	
	$('a#call-2-action-home').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
		if ($(this).hasClass('bounceIn')) {
			$(this).removeClass('bounceIn');
			$(this).find('i').addClass('bounce');	
		}
		
		if ($(this).hasClass('pulse')) {
		$(this).removeClass('pulse');	
		}
		
	});
	
	$('a#call-2-action-home > i').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
	$(this).removeClass('bounce');	
		
	});
	
	// VIEW RADIO FILES BUTTON 
	
	$('body').on(event_type,'a#call-2-action-radio', function(e){
		
		//console.log( $("#radio-player"));
	
		if ( $('.audio-files').hasClass('closed') ) {
			$('html, body').animate({scrollTop: ($("#radio-player").offset().top - 20)}, 500);	
			$('.audio-files').removeClass('closed').addClass('open');
			$(this).addClass('active');
		} else {
			$('.audio-files').removeClass('open').addClass('closed');
			$('div.mejs-pause').find('button').trigger('click');
			$('html, body').animate({ scrollTop: 0 }, 500);
			$(this).removeClass('active');
		}
		
		return false;
		
	});
	
	// CLOSE AUDIO FILES
	
	$('body').on(event_type,'button#close-audio-files', function(e){
	
	$('html, body').animate({ scrollTop: 0 }, 500);
	
	if ( $('.audio-files').hasClass('open') ) {
		$('.audio-files').removeClass('open').addClass('closed');
		$('a#call-2-action-radio').removeClass('active');
			
		$('div.mejs-pause').find('button').trigger('click');
	}

	return false;
		
	});
	
	//Extra Info Button
	$('body').on(event_type,'button#extra-info-btn', function(e){
	
		if ( $(this).parent().hasClass('info-closed') ) {
			$(this).parent().removeClass('info-closed').addClass('info-open');
			$(this).addClass('active');
		} else {
			$(this).parent().removeClass('info-open').addClass('info-closed');
			$(this).removeClass('active');
		}
		
		return false;
		
	});

	/* SOCIAL SHARING BUTTONS */
	$('body').on(event_type,'button#hide-btn', function(e){
		
		var parent = $(this).parent();
	
		if ( $(parent).hasClass('btns-open') ) {
		$(parent).removeClass('btns-open').addClass('btns-closed');
		
		$(parent).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		
			if ($(this).hasClass('mobile-share')) {
			$(this).css('top', '-40px');
			} else {
			$(this).css('left', '-70px');	
			}
		
		});

		}
		
		return false;
		
	});
	
	/* MAIN MENU NAV BUTTON */
	
	$('body').on(event_type,'button#nav-btn', function(e){
	
		if ( $('#main-nav').hasClass('nav-closed') ) {
			$(this).removeClass('in-active').addClass('active');
			$('.nav-closed').removeClass('nav-closed').addClass('nav-open');
		} else {
			$(this).removeClass('active').addClass('in-active');
			$('.nav-open').removeClass('nav-open').addClass('nav-closed');
		}
		
		return false;
		
	});
	
	/* MAIN MENU HOVER */
	$('#main-nav').on('mouseover', 'li.with-sub-nav', function(){
   	 	$(this).addClass('sub-hover');
	});
	
	$('#main-nav').on('mouseout', 'li.with-sub-nav' , function(){
	    $(this).removeClass('sub-hover');
	});

	if (window_width > 900) {
	
	// Touch events
	$('#main-nav').on('touchend', 'li.with-sub-nav > a', function(e){
	  
	  $(this).parent().siblings().removeClass('sub-hover');
	  
	  if ( !$(this).parent().hasClass('sub-hover')) {
	  $(this).parent().toggleClass('sub-hover'); 
	  return false; 
	  }
	  
	  if ( $(this).parent().hasClass('not-link')) {
	  $(this).parent().toggleClass('sub-hover'); 
	  return false; 
	  } 	   
	   
	});
	
	}
	
	/* SIDE MENU FUNCTIONS */
	$('button#sidenav-btn').on(event_type, function(e){
   	 	
   	 	if ($('ul.btn-list').hasClass('btns-closed')) {
   	 	
   	 		$(this).removeClass('inactive').addClass('active');
	   	 	
	   	 	$('ul.btn-list').removeClass('btns-closed').addClass('btns-open');
	   	 	
   	 	} else {
   	 	
   	 		$(this).removeClass('active').addClass('inactive');
   	 		
	   	 	$('ul.btn-list').removeClass('btns-open').addClass('btns-closed');
   	 	}
   	 	
   	 	return false;
   	 	
	});
	
	/* USER BUTTONS SHOW/HIDE */
	
	$('body').on(event_type,'button#user-btn', function(e){
	
		if ( $(this).parent().hasClass('closed') ) {
			$(this).parent().removeClass('closed').addClass('open');
		} else {
			$(this).parent().removeClass('open').addClass('closed');
		}
		
		return false;
		
	});
	
	 /* FEED SCROLLER 
	   
	Adds new styled scroll bars to media feeds   
   */
   	
	$('.feed-wrap').slimScroll({
        height: '300px'
    });
    
    $('#directions-panel').slimScroll({
        height: '300px',
       alwaysVisible: true
    });
    
    /*
 $('.mobile-box').find('.discounts-box-wrap').slimScroll({
       height: 'auto',
       alwaysVisible: true
    });
*/
    	
	
	$(document).ready(function (){
	
	});
	
	$(window).load(function(e){
	
	if ($('a#call-2-action-radio').length == 1) {
		$('#call-2-action-radio').removeClass('disabled');
	}

	});
	
	$(window).on("resize", function(e){
	
	window_width = $(window).width(); 
	
		if ($('#home-slider').length == 1) {
			slide_width = active_slide.outerWidth();
			slide_half = slide_width/2;
			slide_plus_half = slide_width + slide_half;
			slide_double = slide_width*2;
			
			rtime = new Date();
			if (timeout === false) {
				timeout = true;
				setTimeout(resizeend, delta);
			}
			
			clearInterval(slide_change);
		}

	});
	
	/* HOME PAGE SLIDER */
    if ($('#home-slider').length == 1) {
    	
    	var easing = "easeInOutCirc";
   
	   function change_slide() {
	   
	   if (next_slide.next().length == 1) {
		  next_before = next_slide.next();	   		   
	   } else {
	  	  next_before = $('.slider-item').first();
	   }
	  
	   active_slide.animate({marginLeft: '-' + slide_plus_half +'px'}, 500, easing, function(){
			$(this).removeClass('active').addClass('prev').removeAttr('style');
			prev_slide = $(this);  
	   });
	   
	   next_slide.animate({marginLeft: '-' + slide_half +'px'}, 500, easing, function(){
			$(this).removeClass('next').addClass('active').removeAttr('style');
			active_slide = $(this); 
	   });
	   
	   prev_slide.animate({marginLeft: '-' + slide_double +'px'}, 500, easing, function(){
			$(this).removeClass('prev').removeAttr('style');
	   });
	   
	   next_before.animate({marginLeft: slide_half +'px', opacity: 1}, 500, easing, function(){
	   $(this).addClass('next').removeAttr('style');
	   next_slide = $(this);  
	   });
	   
	   	
	   }
	   
	 var slide_change = setInterval(change_slide, 5000);
	 
	/*  END OF RESIZE FUNCTION */
	 function resizeend() {
    
	    if (new Date() - rtime < delta) {
	        setTimeout(resizeend, delta);
	    } else {
	        timeout = false;
	        
	        slide_change = setInterval(change_slide, 5000);
	    }  
	                 
	}; 
	   
    }
	
	
})(window.jQuery);