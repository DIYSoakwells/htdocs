//shrink and fade out counter
$('.decr , .item_add ').click(function(){
	
	$(this).siblings('.badge').hide(150).fadeOut(150).show(150).fadeIn(150);
		
	$('.simpleCart_quantity').hide(150).fadeOut(150).show(150).fadeIn(150);	
	//$(this).siblings('.badge').animate({top: '15px', bottom: '5px'});			
	});	
	




// make all divs the same height as the tallest


//$(document).ready (function() {
//	$('.product_description , .pricetable').matchHeight();
	
//});

	
	