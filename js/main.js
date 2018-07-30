jQuery(document).ready(function ($) {
	$('.same-height').matchHeight({ property: 'height' });
	$('#hamburger').sidr({
		name: 'sidr-right',
		side: 'right',
		source: '.navigation'
    });

    $('.col-slider').slick({
	  dots: true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  arrows : false,
	  adaptiveHeight: true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
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



	$('.testimonial-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
	  	arrows : true,
	  	adaptiveHeight: true,
	});

	$('.slick-slider .slick-next').html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
	$('.slick-slider .slick-prev').html('<i class="fa fa-angle-left" aria-hidden="true"></i>');

	$( "#form1" ).validate({ 
		onfocusout: false,
       	onkeyup: false,
        submitHandler: function(form) {
      		
		    $.ajax({
		        type: 'POST',
		        url: $(form).attr('action'),
		        data: $(form).serialize(),
		        success: function(response) {
		        	console.log(response);
		        	$('#response').html(response);
		        	$('.same-height').matchHeight({ property: 'height' });
		           	$(form)[0].reset();
		        },
		        error: function(response) {
		            $('#response').hide();
		        }
		    });
        }
    });

});