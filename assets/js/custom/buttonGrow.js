//shrink and fade out counter
	
	$(this).siblings('.badge').hide(150).fadeOut(150).show(150).fadeIn(150);
		
	$('.simpleCart_quantity').hide(150).fadeOut(150).show(150).fadeIn(150);	
	//$(this).siblings('.badge').animate({top: '15px', bottom: '5px'});			
	});	
	
// make all pricelist boxes the same height as the tallest
/* Query(document).ready(function($) {
	
    var bigbrother = 1;

    $('.sameHeight').each(function() {
      bigbrother = bigbrother > $('.sameHeight').height() ? bigbrother : $('.sameHeight').height();
    });

    $('.sameHeight').each(function() {
      $('.sameHeight').height(bigbrother);
    });

});	*/

$(document).ready(function() {
  // Get an array of all element heights
  var elementHeights = $('.sameHeight').map(function() {
    return $(this).height();
  }).get();

  // Math.max takes a variable number of arguments
  // `apply` is equivalent to passing each height as an argument
  var maxHeight = Math.max.apply(null, elementHeights);

  // Set each height to the max height
  $('.sameHeight').height(maxHeight);
});


//fade out section
//$(window).scroll(function () {
	
  //  var scrollTop2 = $(window).scrollTop();
	
   // var height = $(window).height();
	
   // $('.fadeOutSection').css({
		
  //      'opacity': ((height - scrollTop2) / height)
  //  });
//});



