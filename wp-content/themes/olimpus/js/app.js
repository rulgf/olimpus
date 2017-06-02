jQuery(document).ready(function( $ ) {
	//Navigation bar menu appear
	$(".navmenu").hide(); //Hide the navigation bar first

 	$(window).scroll(function() { //Listen for the window's scroll event
    	if (isScrolledAfterElement("#content")) { //if it has scrolled beyond the #content elment
      		$('.navmenu').fadeIn(); //Show the navigation bar
    	} else {
      		$('.navmenu').fadeOut(); //Else hide it
    	}
  	});

  	//Function that returns true if the window has scrolled beyond the given element
  	function isScrolledAfterElement(elem) {
    	var $elem = $(elem);
    	var $window = $(window);

    	var docViewTop = $window.scrollTop();
    	var docViewBottom = docViewTop + $window.height();

    	var elemTop = $elem.offset().top;

    	return elemTop <= docViewBottom;
  	}

  	$("#link1").click(function() {
  		//Remove toptap class from other tabs
  		$('#tab2').removeClass('top_tab');
  		$('#tab3').removeClass('top_tab');
  		$('#tab4').removeClass('top_tab');
  		$('#tab5').removeClass('top_tab');

	    $('#menu_border').css({
	        "border-top-color": "#743089"
	    });
	    $('#tab1').addClass('top_tab');
	});

	$("#link2").click(function() {
  		//Remove toptap class from other tabs
  		$('#tab1').removeClass('top_tab');
  		$('#tab3').removeClass('top_tab');
  		$('#tab4').removeClass('top_tab');
  		$('#tab5').removeClass('top_tab');

	    $('#menu_border').css({
	        "border-top-color": "#fecc0d"
	    });
	    $('#tab2').addClass('top_tab');
	});

	$("#link3").click(function() {
  		//Remove toptap class from other tabs
  		$('#tab2').removeClass('top_tab');
  		$('#tab1').removeClass('top_tab');
  		$('#tab4').removeClass('top_tab');
  		$('#tab5').removeClass('top_tab');

	    $('#menu_border').css({
	        "border-top-color": "#f49929"
	    });
	    $('#tab3').addClass('top_tab');
	});

	$("#link4").click(function() {
  		//Remove toptap class from other tabs
  		$('#tab2').removeClass('top_tab');
  		$('#tab3').removeClass('top_tab');
  		$('#tab1').removeClass('top_tab');
  		$('#tab5').removeClass('top_tab');

	    $('#menu_border').css({
	        "border-top-color": "#00a8a8"
	    });
	    $('#tab4').addClass('top_tab');
	});

	$("#link5").click(function() {
  		//Remove toptap class from other tabs
  		$('#tab2').removeClass('top_tab');
  		$('#tab3').removeClass('top_tab');
  		$('#tab4').removeClass('top_tab');
  		$('#tab1').removeClass('top_tab');

	    $('#menu_border').css({
	        "border-top-color": "#0060a8"
	    });
	    $('#tab5').addClass('top_tab');
	});
	
});


