(function($) { "use strict";

    //Mobile Menu Scroll Enabel
    $(window).load(function(){
        $(".mCustomScrollbar").mCustomScrollbar();
    }); 

    // <!-- Intializing Navi Menu-->
    $("#mobile-menu-right").mobileMenu({
        MenuWidth: 250,
        SlideSpeed : 400,
        WindowsMaxWidth : 767,
        PagePush : true,
        FromLeft : false,
        Overlay : false,
        CollapseMenu : true,
        ClassName : "mobile-menu"
    });


	var $normalNavLi = $( 'ul.sf-menu > li.menu-item-has-children' );
	$normalNavLi.each( function() {

		var $this = $( this ),
			$li = $this.find( 'li' );

		$li.each( function() {

			var $this = $( this ),
				$ul = $( this ).find( 'ul' );

			if ( $ul.length > 0 ) {

				$( '<i class="fa fa-angle-right"></i>').appendTo( $( this ).find( '> a' ) );					

			}

		} );

	} );
	$( "ul.sf-menu > li" ).addClass('left');
	$( "ul.sf-menu > li:last-child" ).removeClass('left').addClass('right');
	$('div.mega-menu-columns').find('.grid-container2').each(function(){
		$(this).removeClass('grid-container2').addClass('grid-container3');
	});

	//Parallax
	$('section').find('div[class^="parallax-row"]').each(function() {
		$(this).parallax("50%", 0.4);
	});
	$('.section').find('div[class^="prl-about"]').each(function() {
		$(this).parallax("50%", 0.4);
	});
	$('.parallax-blog-pages').parallax("50%", 0.4);
	$(window).load(function() {
		$('.parallax-5').parallax("50%", 0.4);		
	});
	$('.parallax-404').parallax("50%", 0.4);
	$('.parallax-business6').each(function() {
		$(this).parallax("50%", 0.4);
	});
	$('section').find('div[class^="parallax-business24"]').each(function() {
		$(this).parallax("50%", 0.4);
	});
	
	
	// Counter
	$('.counter-facts').counterUp({
        delay: 100,
        time: 3000
    });

	// Add class for columns : 10, 11, 12 skeleton.  
   $('.container').find('div').each(function(i, ojb) {
        if ( $(this).hasClass('one columns2') ) {
            $(this).removeClass('one columns2').addClass('twelve columns');
        }

        if ( $(this).hasClass('one columns1') ) {
            $(this).removeClass('one columns1').addClass('eleven columns');
        }

        if ( $(this).hasClass('one columns0') ) {
            $(this).removeClass('one columns0').addClass('ten columns');
        }
    });

   	$('.row').find('div').each(function(i, ojb) {
        if ( $(this).hasClass('one columns2') ) {
            $(this).removeClass('one columns2').addClass('twelve columns');
        }

        if ( $(this).hasClass('one columns1') ) {
            $(this).removeClass('one columns1').addClass('eleven columns');
        }

        if ( $(this).hasClass('one columns0') ) {
            $(this).removeClass('one columns0').addClass('ten columns');
        }
    });
   

   	//Remove Class
	$('.wpcf7').parents('.columns').removeClass('columns'); 
	
	// Add class pagination
    $('ul.cd-pagination li a.next').parent().addClass('button-pag'); 
    $('ul.cd-pagination li a.prev').parent().addClass('button-pag');
    
	//Home text fade on scroll		
   	$(window).scroll(function () { 
        var $Fade = $('.hero-wrap-pages');
        //Get scroll position of window 
        var windowScroll = $(this).scrollTop();
        //Slow scroll and fade it out 
        $Fade.css({
            'margin-top': -(windowScroll / 0) + "px",
            'opacity': 1 - (windowScroll / 400)
        });
    });
   	$(window).scroll(function () { 
        var $Fade = $('.hero-wrap-1');
        //Get scroll position of window 
        var windowScroll = $(this).scrollTop();
        //Slow scroll and fade it out 
        $Fade.css({
            'margin-top': -(windowScroll / 0) + "px",
            'opacity': 1 - (windowScroll / 400)
        });
    });
   	$(window).scroll(function () { 
        var $Fade = $('.hero-wrap');
        //Get scroll position of window 
        var windowScroll = $(this).scrollTop();
        //Slow scroll and fade it out 
        $Fade.css({
            'margin-top': -(windowScroll / 0) + "px",
            'opacity': 1 - (windowScroll / 400)
        });
    });
    $(window).scroll(function () { 
        var $Fade = $('.hero-wrap-2');
        //Get scroll position of window 
        var windowScroll = $(this).scrollTop();
        //Slow scroll and fade it out 
        $Fade.css({
            'margin-top': -(windowScroll / 0) + "px",
            'opacity': 1 - (windowScroll / 400)
        });
    });	
   	$(window).scroll(function () { 
        var $Fade = $('.tp-caption');
        //Get scroll position of window 
        var windowScroll = $(this).scrollTop();
        //Slow scroll and fade it out 
        $Fade.css({
            'margin-top': -(windowScroll / 0) + "px",
            'opacity': 1 - (windowScroll / 400)
        });
    });

	
	
	$(document).ready(function() {"use strict";

	
		//Preloader
	  $(".animsition").animsition({
	  
		inClass               :   'fade-in',
		outClass              :   'fade-out',
		inDuration            :    500,
		outDuration           :    500,
		//linkElement           :   '.animsition-link', 
		// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
		loading               :    true,
		loadingParentElement  :   'body', //animsition wrapper element
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
		//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		
		overlay               :   false,
		
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });	
		  
	
	// Skills
	function animateProgressBar() {
		$('.pro-bar').each(function(i, elem) {
			var	elem = $(this),
				percent = elem.attr('data-pro-bar-percent'),
				delay = elem.attr('data-pro-bar-delay');

			if (!elem.hasClass('animated'))
				elem.css({ 'width' : '0%' });

			if (elem.visible(true)) {
				setTimeout(function() {
					elem.animate({ 'width' : percent + '%' }, 2000, 'easeInOutExpo').addClass('animated');
				}, delay);
			} 
		});
	}
	$(document).ready(function() {
		animateProgressBar();
	});
	$(window).resize(function() {
		animateProgressBar();
	});
	$(window).scroll(function() {
		animateProgressBar();
		if ($(window).scrollTop() + $(window).height() == $(document).height())
			animateProgressBar();
	});		


	
		//Scroll back to top

		var offset = 450;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.scroll-to-top').fadeIn(duration);
			} else {
				jQuery('.scroll-to-top').fadeOut(duration);
			}
		});
				
		jQuery('.scroll-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});	

	$(".blog-box-2").fitVids();

	

	//Fancybox		
	$(".fancybox").fancybox({
		maxWidth	: 1700,
		maxHeight	: 1400,
		fitToView	: false,
		width		: '80%',
		height		: '80%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'elastic',
		closeEffect	: 'none'
	});

	
	// Tab style 1
	$( '.shop-carousel-wrap' ).each( function() {
		var sync1 = $(this).find( '.sync11' );
			var sync2 = $(this).find( '.sync12' );
 
		  sync1.owlCarousel({
			singleItem : true,
			transitionStyle : "backSlide",
			slideSpeed : 1500,
			navigation: false,
			pagination:false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200
		  });

		  
		  sync2.owlCarousel({
			items : 3,
			itemsDesktop      : [1199,3],
			itemsDesktopSmall     : [979,3],
			itemsTablet       : [768,2],
			itemsMobile       : [479,1],
			pagination:false,
			responsiveRefreshRate : 100,
			afterInit : function(el){
			  el.find(".owl-item").eq(0).addClass("synced");
			}
		  });
		 
		  function syncPosition(el){
			var current = this.currentItem;
			sync2
			  .find(".owl-item")
			  .removeClass("synced")
			  .eq(current)
			  .addClass("synced")
			if(sync2.data("owlCarousel") !== undefined){
			  center(current)
			}
		  }
		 
		  sync2.on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		  });
		 
		  function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
			  if(num === sync2visible[i]){
				var found = true;
			  }
			}
		 
			if(found===false){
			  if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			  }else{
				if(num - 1 === -1){
				  num = 0;
				}
				sync2.trigger("owl.goTo", num);
			  }
			} else if(num === sync2visible[sync2visible.length-1]){
			  sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
			  sync2.trigger("owl.goTo", num-1)
			}
			
		  }
	} );
	
	// Tab style 2
	$( '.about-carousel-wrap' ).each( function() {
		var sync1 = $(this).find( '.sync21' );
			var sync2 = $(this).find( '.sync22' );
 
		  sync1.owlCarousel({
			singleItem : true,
			transitionStyle : "fade",
			slideSpeed : 1500,
			navigation: false,
			pagination:false,
			afterAction : syncPosition,
			responsiveRefreshRate : 200
		  });

		  
		  sync2.owlCarousel({
			items : 3,
			itemsDesktop      : [1199,3],
			itemsDesktopSmall     : [979,3],
			itemsTablet       : [768,2],
			itemsMobile       : [479,1],
			pagination:false,
			responsiveRefreshRate : 100,
			afterInit : function(el){
			  el.find(".owl-item").eq(0).addClass("synced");
			}
		  });
		 
		  function syncPosition(el){
			var current = this.currentItem;
			sync2
			  .find(".owl-item")
			  .removeClass("synced")
			  .eq(current)
			  .addClass("synced")
			if(sync2.data("owlCarousel") !== undefined){
			  center(current)
			}
		  }
		 
		  sync2.on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		  });
		 
		  function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
			  if(num === sync2visible[i]){
				var found = true;
			  }
			}
		 
			if(found===false){
			  if(num>sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", num - sync2visible.length+2)
			  }else{
				if(num - 1 === -1){
				  num = 0;
				}
				sync2.trigger("owl.goTo", num);
			  }
			} else if(num === sync2visible[sync2visible.length-1]){
			  sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
			  sync2.trigger("owl.goTo", num-1)
			}
			
		  }
	} );

	// Type 1
	$(function(){

        $(".typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('.typed-strings'),
            typeSpeed: 30,
            backDelay: 700,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $(".typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }	

	$(function(){

        $("#typed-1").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings-1'),
            typeSpeed: 30,
            backDelay: 700,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed-1").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }   
 
})(jQuery); 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





