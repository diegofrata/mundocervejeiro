// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
$(document).ready(function(){
	jQuery.extend(verge);

	var viewportRecalc = function() {
		var topbar = verge.rectangle($(".sticky"));
		var sectionHeight = verge.viewportH() - topbar.height;
		$('.full').css('min-height', sectionHeight);
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
});



	