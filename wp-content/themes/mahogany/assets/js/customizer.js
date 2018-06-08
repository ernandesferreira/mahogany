/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	$(window).scroll(function() {    
			    var scroll = $(window).scrollTop();

			     //>=, not <=
			    if (scroll >= 30) {
			        //clearHeader, not clearheader - caps H
			        $("#topfixed").addClass("scrollmenu");
			    }else{
			    	$("#topfixed").removeClass("scrollmenu");
			    }
			}); //missing );

	$('.top-sub').affix({
		  offset: {
		    top: 30,
		    bottom: function () {
		      return (this.bottom = $('.footer').outerHeight(true))
		    }		    
		  }
		});
		$('.top-sub').click(function(){
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});

		var $doc = $('html, body');
			$('a').click(function() {
			    $doc.animate({
			        scrollTop: $( $.attr(this, 'href') ).offset().top -120
			    }, 500);
			    return false;
			});

	//videos
	$('.video_carousel').slick({
       dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
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

	//sustentabilidade
	$('.sustentabilidade_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
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

	//investor
	$('.carrousel_investor').slick({
	  infinite: true,
	  slidesToShow: 3,
	  slidesToScroll: 3
  });

  $('.slick-arrow').text('');

  $('#menu').slicknav({
		label: '',
		duration: 200
	});

    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        adaptiveHeight: true,
        wrapperClass: "bx-wrapper container-imagens",
        slideWidth: 700
      });

} )( jQuery );
