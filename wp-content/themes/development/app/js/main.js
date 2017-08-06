$( document ).ready(function() {
	AOS.init();
	$('#fullpage').fullpage();

	$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
 	   }
	});

	$(".animation").animateCss('slideInLeft');

	$(".fa").on('mouseover', function(event) {
		$(this).animateCss('swing');
	});

	$("#profile-button").on('mouseover', function(event) {
		$("#button-icon").animateCss('fadeInLeft');
		console.log("ok");
	});

	$(".item-menu").animateCss('fadeInRight');

	$("#toggle").on('click', function(event) {
		$(".go-menu").fadeToggle('slow', function() {
			$(".item-menu").animateCss('fadeInRight');
		});
	});

	$(".item-menu").on('mouseover', function(event) {
		$(this).animateCss('swing');
	});

	$(".toggle-contact").on('click', function(event) {
		event.preventDefault();
		$(".go-contact").fadeToggle('slow', function() {
			$(".go-contact").removeClass('nav-hide')
		});
	});

	$('.owl-projects').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    autoplay:true,
	    autoplayTimeout: 2800,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

	$('.owl-project-gallery').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    autoplay:false,
	    autoplayTimeout: 2800,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});

});