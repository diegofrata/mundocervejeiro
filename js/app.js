// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function(){
	jQuery.extend(verge);

	var viewportRecalc = function() {
		var topbar = verge.rectangle($(".sticky"));
		var sectionHeight = verge.viewportH() - topbar.height;
		$('.full').css('min-height', sectionHeight);
		$('#google-map').css('height', verge.rectangle($('#localizacao')).height);
	};

	var scrollHandler = function(){

		if (!$(".logo-small").is(":visible"))
		{
			var scrollTop = verge.scrollY();

		    $(".sticky").css('margin-top', -(Math.min(scrollTop, 106)));
		}

		//viewportRecalc();
	};

	var resizeHandler = function() {

		if ($(".logo-small").is(":visible"))
		{
		    $(".sticky").css('margin-top', '');
		}	

		scrollHandler();
		viewportRecalc();
	};

	resizeHandler();

	$(document).on("scroll", scrollHandler);

	$(window).on("resize", resizeHandler);

	$('#mainslider').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 5000,
		fade: true,
		cssEase: 'linear',
		arrows: false
	});


	function initialiseMaps() {
	    var myLatLng = new google.maps.LatLng(-23.61132,-46.665704);
	    var mapOptions = {
	        zoom: 15,
	        center: myLatLng,
	        scrollwheel: false,
	        disableDefaultUI: true,
	        draggable: false,
	        scaleControl: false,
	        navigationControl: false,
	        streetViewControl: false
	    };

	    var map = new google.maps.Map(document.getElementById('google-map'),
	        mapOptions);

	    google.maps.event.addListener(map, 'center_changed', function() {
	        window.setTimeout(function() {
	            map.panTo(marker.getPosition());
	        }, 1500);
	    });
	};

	google.maps.event.addDomListener(window, 'load', initialiseMaps);
});



	