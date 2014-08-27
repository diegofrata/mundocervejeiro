// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

function verCardapio() {
	$('.cardapio-completo').css('display', 'block');
}

$(document).ready(function(){
	jQuery.extend(verge);


	var viewportRecalc = function() {
		var sticky = verge.rectangle($(".sticky"));

		var topbar = verge.rectangle($(".top-bar"));
		var title = verge.rectangle($(".large-title"));
		var usefulWidth = (topbar.width - title.width) / 2;
		
		var getSpaceBetween = function(arr) {
			var sum = 0;
			arr.each(function(i,e) {
				sum += verge.rectangle($(e)).width; 
			});
			return Math.floor((usefulWidth - Math.ceil(sum)) / (arr.length - 1));
		};

		var applySpaceBetween = function(arr) {
			var spaceBetween = getSpaceBetween(arr);
			for (var i = 0; i < arr.length - 1; i++){
				$(arr[i]).css("margin-right", spaceBetween);
			}
		};

		applySpaceBetween($(".menu-1 > ul > li"));
		applySpaceBetween($(".menu-2 > ul > li"));



		var sectionHeight = verge.viewportH() - sticky.height;
		if ($(".logo-small").is(":visible"))
		{
			$('.full').css('min-height', sectionHeight/2);
		}
		else{
			$('.full').css('min-height', sectionHeight);
		}

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


	$(document).on("scroll", scrollHandler);

	$(window).on("resize", resizeHandler);

	$('#mainslider').slick({
		dots: false,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 5000,
		fade: true,
		cssEase: 'linear',
		arrows: false
	});

	$('#espacoslider').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 5000,
		cssEase: 'linear',
		arrows: false
	});

	function scrollTo() {

	    $('a[href^=#]').on('click', function(e){
	    	var topBarHeight = function() {
	    		if ($(".logo-small").is(":visible"))
	    			return 410;
	    		else
	    			return 90;
	    	};

	        var href = $(this).attr('href');
	        $('html, body').animate({
	            scrollTop:$(href).offset().top - topBarHeight()
	        },1400);
	        e.preventDefault();
	    });

	}

	scrollTo();



	window.setTimeout(resizeHandler, 10);

	function initialiseMaps() {
	    var myLatLng = new google.maps.LatLng(-23.61350,-46.665704);
	    var mapOptions = {
	        zoom: 15,
	        center: myLatLng,
	        scrollwheel: false,
	        disableDefaultUI: true,
	        draggable: false,
	        scaleControl: false,
	        navigationControl: false,
	        streetViewControl: false,
	        mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'miruna']
            }
	    };

	    var usRoadMapType = new google.maps.StyledMapType(
        [
		  {
		    "stylers": [
		      { "saturation": -100 },
		      { "gamma": 2.38 },
		      { "lightness": 21 }
		    ]
		  }
		], {});


	    var map = new google.maps.Map(document.getElementById('google-map'),
	        mapOptions);

	    map.mapTypes.set('miruna', usRoadMapType);
        map.setMapTypeId('miruna');

		var myLatLng = new google.maps.LatLng(-23.61132,-46.665704);
	    var marker = new google.maps.Marker({
		      position: myLatLng,
		      map: map,
		      title: 'Hello World!',
		      optimized: false
		  });

	    marker.setAnimation(google.maps.Animation.BOUNCE);

	    google.maps.event.addListener(map, 'center_changed', function() {
			map.panTo(myLatLng);
	    });
	};

	google.maps.event.addDomListener(window, 'load', initialiseMaps);
});



	