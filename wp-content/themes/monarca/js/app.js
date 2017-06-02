jQuery(document).ready(function( $ ) {
	//ANIMATE MENU ON MOBILE DEVICES
	$('.hamburger').click(function() {
		$(this).toggleClass('is-active');
		$('.main-nav').toggleClass('open');
	});

	// OPEN AND CLOSE SEARCH BAR
	$('.search-btn').click(function() {
		$('.search-bar').toggleClass('open');
	});
	
	//INITIALIZE SLICK CAROUSEL
	$('.slider').slick({
		prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left"></i></div>',
		nextArrow: '<div class="slick-next"><i class="fa fa-angle-right"></i></div>',
		autoplay: true
	});

	$('.card-slider').slick({
		slidesPerRow: 2,
		slidesToShow: 2,
		adaptiveHeight: true,
		arrows: false,
		dots: true,
		autoplay: true,
		responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
	    ]
	});

	//INITIALIZE SCROLL TO FIXED
	$('.fixed').scrollToFixed();

	$.fn.extend({
	    animateCss: function (animationName) {
	        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	        this.addClass('animated ' + animationName).one(animationEnd, function() {
	            $(this).removeClass('animated ' + animationName);
	        });
	    }
	});


	$(window).load(function() {
		$('.loading-img img').animateCss('flipOutY');
		$('.loading-img img').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
			$(this).hide();
			$('.loading-screen').fadeOut();
		});
		$('.floatingbtn').animateCss('bounceInUp');
	});


	 $(function() {
    	// Get the form.
    	var form = $('#template-contactform');

    	// Get the messages div.
    	var formMessagesContainer = $('.contact-form-result .style-msg');
    	var formMessages = $('.contact-form-result .style-msg .sb-msg');

    	$(form).submit(function(event) {
    		// Stop the browser from submitting the form.
    		event.preventDefault();

    		// Serialize the form data.
			var formData = $(form).serialize();

			// Submit the form using AJAX.
			$.ajax({
			    type: 'POST',
			    url: $(form).attr('action'),
			    data: formData
			})
			.done(function(response) {
			    // Make sure that the formMessages div has the 'success' class.
			    $(formMessagesContainer).removeClass('errormsg');
			    $(formMessagesContainer).addClass('successmsg');
			    $('.contact-form-result').fadeIn();
			    $('.form-process').fadeOut();

			    // Set the message text.
			    $(formMessages).text(response);

			    // Clear the form.
			    $('#template-contactform-name').val('');
			    $('#template-contactform-email').val('');
			    $('#template-contactform-phone').val('');
			    //$('#template-contactform-subject').val('');
			    $('#template-contactform-message').val('');

			    // Send event to Google Analytics
				ga('send', { 'hitType': 'pageview', 'page': '/gracias', 'title': 'Envío Formulario' });
			})
			.fail(function(data) {
			    // Make sure that the formMessages div has the 'error' class.
			    $(formMessagesContainer).removeClass('successmsg');
			    $(formMessagesContainer).addClass('errormsg');
			    $('.contact-form-result').fadeIn();

			    // Set the message text.
			    if (data.responseText !== '') {
			        $(formMessages).text(data.responseText);
			    } else {
			        $(formMessages).text('Hubo un error, inténtalo de nuevo.');
			    }
			});

		});
	});    

	  $('.close').click(function(){
           $('#sms').addClass('closed');
      });

	  $('#download1').click(function(){
	  		console.log('descargaCatalogo');
			ga('send', { 'hitType': 'pageview', 'page': '/descargaCatalogo', 'title': 'Descargo Catalogo' });
	  });

	  $('#download2').click(function(){
			ga('send', { 'hitType': 'pageview', 'page': '/descargaCatalogo', 'title': 'Descargo Catalogo' });
	  });



});


