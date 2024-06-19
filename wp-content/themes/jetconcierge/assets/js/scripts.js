(function ($, root, undefined) {

	$(function () {
		'use strict';
		// Document Begin
		$(document).ready(function(){

			/////////////////////////////////////////////////////////////////////////////////
			// Header Functions
			/////////////////////////////////////////////////////////////////////////////////


			// Header on scroll changes class
			$(window).scroll(function() {
			  var scroll = $(window).scrollTop();
			  if (scroll >= 100) {
			     $(".site-header").addClass("scroll-header");
					 $(".mobile-menu .menu").addClass("scroll-menu");
			  } else {
					$(".site-header").removeClass("scroll-header");
			    $(".mobile-menu .menu").removeClass("scroll-menu");
			  }
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Mobile Menu
			/////////////////////////////////////////////////////////////////////////////////
			$('.off-canvas-menu-trigger, .home .discover').click(function(e) {
				$('.off-canvas-menu').slideDown();
			});

			$('.off-canvas-menu .close-menu').click(function(e) {
				$('.off-canvas-menu').slideUp();
			});

			$('.contact-link').click(function(e) {
				$('.off-canvas-contact').slideDown();
			});

			$('.off-canvas-contact .close-button').click(function(e) {
				$('.off-canvas-contact').slideUp();
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Plane Menu Functions
			/////////////////////////////////////////////////////////////////////////////////

			$('.off-canvas-menu .fleet-menu .plane-label:first-of-type').addClass('active');
			var planeTitle = $('.off-canvas-menu .fleet-menu .plane-label:first-of-type').data('plane-title');
			var planeUrl = $(".off-canvas-menu .fleet-menu .plane-label:first-of-type").data('plane-url');
			var planeAlt = $('.off-canvas-menu .fleet-menu .plane-label:first-of-type').data("plane-alt");
			var planeLink = $('.off-canvas-menu .fleet-menu .plane-label:first-of-type').data("plane-link");
			$(".background .plane-container .title").text(planeTitle);
			$(".background .plane-container .plane-image").attr("src",planeUrl);
			$(".background .plane-container .plane-image").attr("alt",planeAlt);
			$(".background .plane-container .btn a").attr("href",planeLink);

			
			$('.off-canvas-menu .fleet-menu .plane-label').click(function(e) {

				var planeTitle = $(this).data('plane-title');
				var planeUrl = $(this).data("plane-url");
				var planeAlt = $(this).data("plane-alt");
				var planeLink = $(this).data("plane-link");
				$('.plane-label').removeClass('active');
				$(this).addClass('active');
				$('.background .plane-container').addClass('change-plane');
				setTimeout(function() {
					$(".background .plane-container .plane-image").attr("src",'');
					$(".background .plane-container .plane-image").attr("alt",'');
					
					$(".background .plane-container .title").text(planeTitle);
					$(".background .plane-container .plane-image").attr("src",planeUrl);
					$(".background .plane-container .plane-image").attr("alt",planeAlt);
					$(".background .plane-container .btn a").attr("href",planeLink);

				if(!planeUrl){
					$(".background .plane-container .plane-image").attr("src","http://jet-concierge-club.local/wp-content/uploads/2024/06/plane-placeholder.png");

				}
				}, 1500);

				setTimeout(function() {
					$('.background .plane-container').removeClass('change-plane');
				}, 2100);
				
				
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Single Plan Page
			/////////////////////////////////////////////////////////////////////////////////

			$('.specification-trigger').click(function(e) {
				$('.off-canvas-specs').slideDown();
			});

			$('.off-canvas-specs .close-button').click(function(e) {
				$('.off-canvas-specs').slideUp();
			});

			$('.gallery-container .view-full').click(function(e) {
				$('.gallery-full-screen').slideDown();
			});

			$('.gallery-full-screen .close-full').click(function(e) {
				$('.gallery-full-screen').slideUp();
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Share Functions
			/////////////////////////////////////////////////////////////////////////////////
			$('.social-share').click(function(e) {
					e.preventDefault();
					window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
					return false;
			});

			/////////////////////////////////////////////////////////////////////////////////
			// Sliders
			/////////////////////////////////////////////////////////////////////////////////

			$('.slider-gallery').slick({
			  infinite: false,
				autoplay: true,
			  autoplaySpeed: 5000,
				slidesToShow:4,
				arrows:true,
				dots:false,
				responsive: [
			    {
			      breakpoint: 992,
			      settings: {
							slidesToShow: 3,
							slidesToScroll: 3
			      }
			    },
					{
			      breakpoint: 768,
			      settings: {
							slidesToShow: 2,
							slidesToScroll: 2
			      }
			    },
					{
			      breakpoint: 576,
			      settings: {
							slidesToShow: 1,
							slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});

			$('.image-gallery-slider').slick({
				infinite: false,
				autoplay: true,
				autoplaySpeed: 7500,
				slidesToShow:1,
				arrows:false,
				dots:false,
				fade: true,
  				cssEase: 'ease-in-out'
			});

			$('.gallery-container .gallery').slick({
				infinite: false,
				autoplay: true,
				autoplaySpeed: 7500,
				slidesToShow:1,
				arrows:false,
				dots:false,
				fade: true,
  				cssEase: 'ease-in-out',
				asNavFor: '.gallery-full-screen .gallery',
			});

			$('.gallery-full-screen .gallery').slick({
				infinite: false,
				autoplay: true,
				autoplaySpeed: 7500,
				slidesToShow:1,
				arrows:false,
				dots:false,
				fade: true,
  				cssEase: 'ease-in-out',
				asNavFor: '.gallery-container .gallery',

			});


		// Document End
		});
	});
})(jQuery, this);