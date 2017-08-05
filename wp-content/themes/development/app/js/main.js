$( document ).ready(function() {
	AOS.init();

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

	$("#profile-button").on('mouseover', function(event) {
		$("#button-icon").animateCss('fadeInLeft');
		console.log("ok");
	});

	$("#toggle").on('click', function(event) {
		$(".go-menu").stop(true, true).animate({width:'toggle'}, 400);
		$("#toggle").toggleClass('white');
		$(".item-menu").animateCss('fadeInRight');
	});

	$(".item-menu").on('mouseover', function(event) {
		$(this).animateCss('swing');
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

});