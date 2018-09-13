// Set up as object oriented javascript functions


jQuery(document).ready(function() {
	app.init();
});

var $ = jQuery;
var app = {
	init: function() {

		app.initStyling();
		app.initAutoRun();
		app.initEvents();

	},
	initStyling: function() {

	},

	initAutoRun: function() {
		app.menuToggle();
		app.mobileSubNav();
		// app.arrowToggle();
		app.closeVideoModal();
		app.tabletNavSearch();
		app.mobileNavSearch();
		app.closeMobileSearch();
		app.closeTabletSearch();
		app.isTouchDevice();
	},

	initEvents: function() {
		$('.match-height').matchHeight();
		$('.video').fitVids();
		$('.select--single').dropdown();

	
	},




	closeVideoModal: function(){
		$('.close-modal').click(function(e) {
				e.preventDefault();
				$('.video-embed').children('video').attr('src', '');
				// window.location.reload();
			})
	},

	menuToggle: function(){
		$('#mobile-menu').on('click', function(e){
			e.preventDefault();
			console.log('hello')
			$('.nav-overlay').css('display', 'block');
			$('#mobile-menu').css('display', 'none');
			$('#mobile-close').css('display', 'flex');

		})
		$('#mobile-close').on('click', function(e){
			e.preventDefault();
			console.log('hello')
			$('.nav-overlay').css('display', 'none');
			$('#mobile-close').css('display', 'none');
			$('#mobile-menu').css('display', 'flex');

		})
		$('#tablet-menu').on('click', function(e){
			e.preventDefault();
			console.log('hello')
			$('.nav-overlay').css('display', 'block');
			$('#tablet-menu').css('display', 'none');
			$('#tablet-close').css('display', 'flex');

		})
		$('#tablet-close').on('click', function(e){
			e.preventDefault();
			console.log('hello')
			$('.nav-overlay').css('display', 'none');
			$('#tablet-close').css('display', 'none');
			$('#tablet-menu').css('display', 'flex');

		})
	},

	tabletNavSearch: function(){
		$('.tablet-search').on('click', function(e){
			if($('.nav-search-bar-tablet').css('display', 'none')){
				$('.nav-search-bar-tablet').css('display', 'block')
			}
			else if($('.nav-search-bar-tablet').css('display', 'block')){
				$('.nav-search-bar-tablet').css('display', 'none')
			}
		})
	},

	mobileNavSearch: function(){
		$('.mobile-search').on('click', function(e){
			if($('.nav-search-bar-mobile').css('display', 'none')){
				$('.nav-search-bar-mobile').css('display', 'block')
			}
		})
	},

	closeMobileSearch: function(){
		$('.close-mobile').on('click', function(e){
			$('.nav-search-bar-mobile').css('display', 'none');
		})
	},

	closeTabletSearch: function(){
		$('.close-tablet').on('click', function(e){
			$('.nav-search-bar-tablet').css('display', 'none');
		})
	},


	mobileSubNav: function() {
		var eventFired = 0;

		if ($(window).width() < 993) {
		  	$('.menu-item-has-children > a').attr('href', '#');
			$('.menu-item-has-children > a ').on('click', function(e) {
				e.preventDefault();
				var submenu = $(this).siblings('.dropdown-menu');
				$(submenu).toggleClass('is-active');
				if($(submenu).hasClass('is-active')) {
					$(submenu).parent().siblings('.menu-item-has-children').children('.dropdown-menu').removeClass('is-active');
				}

			})
		}
		else {
		   //do nothing
		   	$('.dropdown-menu').removeClass('is-active');
		   	// $('.menu-item-has-children > a').attr('disabled', false);
		}

		$(window).on('resize', function() {
		    if (!eventFired) {
		        if ($(window).width() < 993) {
		        	$('.menu-item-has-children > a').attr('href', '#');
		            $('.menu-item-has-children > a').on('click', function(e) {
						e.preventDefault();
						var submenu = $(this).siblings('.dropdown-menu');
						// $(submenu).addClass('is-active');
						$(submenu).toggleClass('is-active');
						if($(submenu).hasClass('is-active')) {
							$(submenu).parent().siblings('.menu-item-has-children').children('.dropdown-menu').removeClass('is-active');
						}

					})
		        } else {
		          $('.dropdown-menu').removeClass('is-active');
		          // $('.menu-item-has-children > a').attr('disabled', false);
		        }
		    }
		});
		$(window).on('orientationchange', function() {

		        if ($(window).width() < 993) {
		        	$('.menu-item-has-children > a').attr('href', '#');
		            $('.menu-item-has-children > a').on('click', function(e) {
						e.preventDefault();
						var submenu = $(this).siblings('.dropdown-menu');
						// $(submenu).addClass('is-active');
						$(submenu).toggleClass('is-active');
						if($(submenu).hasClass('is-active')) {
							$(submenu).parent().siblings('.menu-item-has-children').children('.dropdown-menu').removeClass('is-active');
						}

					})
		        } else {
		          $('.dropdown-menu').removeClass('is-active');
		          // $('.menu-item-has-children > a').attr('disabled', false);
		        }

		});
	},
	isTouchDevice: function() {
		function isTouchDevice(){
		    return typeof window.ontouchstart !== 'undefined';
		}

		
	    /* If mobile browser, prevent click on parent nav item from redirecting to URL */
	    if(isTouchDevice()) {
	        // 1st click, add "clicked" class, preventing the location change. 2nd click will go through.
	        jQuery("#menu-main-nav-2 > li.menu-item-has-children > a").click(function(event) {
	            // Perform a reset - Remove the "clicked" class on all other menu items
	            jQuery("#menu-main-nav-2 > li.menu-item-has-children > a").not(this).removeClass("clicked");
	            jQuery(this).toggleClass("clicked");
	            if (jQuery(this).hasClass("clicked")) {
	                event.preventDefault();
	                $(this).siblings('.dropdown-menu').addClass('is-active');
	            } else {
	            	$(this).siblings('.dropdown-menu').removeClass('is-active');
	            }
	        });
	    }
	},

	arrowToggle: function(){
		if ($(window).width() < 993){
			$('.dropdown-toggle').on('click', function(e){
				e.preventDefault();
				$(this).toggleClass('open');

				if ($('.dropdown-toggle').hasClass('open')) {
					$('.dropdown-menu').css('display', 'block');
				} else{
					$('.dropdown-menu').css('display', 'none');
				}
			})
		}
		$(window).on('resize', function(){
			// window.location.reload();
			if ($(window).width() < 993){
				$('.dropdown-toggle').on('click', function(e){
					e.preventDefault();
					$(this).toggleClass('open');

					if ($('.dropdown-toggle').hasClass('open')) {
						$('.dropdown-menu').css('display', 'block');
					} else{
						$('.dropdown-menu').css('display', 'none');
					}
				})
			}
		});
		$(window).on('orientationchange', function(){
			// window.location.reload();
			if ($(window).width() < 993){
				$('.dropdown-toggle').on('click', function(e){
					e.preventDefault();
					$(this).toggleClass('open');

					if ($('.dropdown-toggle').hasClass('open')) {
						$('.dropdown-menu').css('display', 'block');
					} else{
						$('.dropdown-menu').css('display', 'none');
					}
				})
			}
		});
	},
};
