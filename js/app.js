// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).on("scroll",function(){
	var scrollTop = $(document).scrollTop();
    $(".sticky").css('margin-top', -(Math.min(scrollTop, 106)));
});
