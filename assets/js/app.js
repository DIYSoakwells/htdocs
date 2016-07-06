function refresh()
{
	qtyArray = $('.item-quantity');
	nameArray = $('.item-name');
	//console.log(qtyArray[1].innerHTML);
	for(i=1;i<$('.item-name').length;i++)
	{
		var name = nameArray[i].innerHTML;
		var qty = qtyArray[i].innerHTML;
		var qt = parseInt(qty);
		for(j=0;j<$('.item_name').length;j++)
		{
			var pname = $('.item_name').get(j);
			if(  pname.innerHTML == name)
				{
					var it = j+1;
					var xpath = '/html/body/div[2]/section[4]/div[3]/section[1]/div['+it+']/div/div[3]/span/b';
					$(_x(xpath)).html(qt);
					
					//var xpath2 = '/html/body/div[2]/section[4]/div[3]/section[2]/div['+it+']/div/div[3]/span/b';
					// The counters in pipe_anf_fittings.php beginning line 4.
					//$(_x(xpath2)).html(qt);
					
					//var xpath3 = ''; // The counters in calc_modal.php, line 106, 130 and 153.
					//$(_x(xpath3)).html(qt); 
				}
		}
		name="";
	}
}
$(function() {

	// Get the form.
	var form = $('#ajax-contact');
	//simpleCart.empty();
	// Get the messages div.
	var formMessages = $('#form-messages');
	
	
	
	simpleCart.update();
	refresh();
	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

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
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form. Temporarily diabled while developing
			//$('#name').val('');
			//$('#email').val('');
			//$('#message').val('');
		})
	

	});
	
	$(".simpleCart_increment").click(function()
	{
			console.log("+ pressed");
		
	});
	
	
	simpleCart.bind( "afterAdd" , function( item )
	{
		var qty = item.get("quantity");
		var name = item.get("name");
		
		//divs  = $('.item_name');
		for(i=0;i<$('.item_name').length;i++)
		{
			var pname = $('.item_name').get(i);
			if(  pname.innerHTML == name)
				{
					var it = i+1;
					var xpath = '/html/body/div[2]/section[4]/div[3]/section[1]/div['+it+']/div/div[3]/span/b';
					$(_x(xpath)).html(qty);
					
					//var xpath2 = '/html/body/div[2]/section[4]/div[3]/section[2]/div['+it+']/div/div[3]/span/b';
					//$(_x(xpath2)).html(qty);	
					
					//var xpath3 = '';
					//$(_x(xpath3)).html(qty);
					
				}
		}
	});
	
	
	$(document).on('click', '.simpleCart_items', function (event) {
		//sleepFor(1000);
		refresh();
		
	});
	
		//counter reset to 0
	simpleCart.bind( 'beforeRemove' , function( item ){
				var qty = item.get("quantity");
				var name = item.get("name");
		
		divs  = $('.item_name');
		for(i=0;i<$('.item_name').length;i++)
		{
			var pname = $('.item_name').get(i);
			if(  pname.innerHTML == name)
				{
					var it = i+1;
					var xpath = '/html/body/div[2]/section[4]/div[3]/section[1]/div['+it+']/div/div[3]/span/b';
					$(_x(xpath)).html("0");
					
					//var xpath2 = '/html/body/div[2]/section[4]/div[3]/section[2]/div['+it+']/div/div[3]/span/b';
					//$(_x(xpath2)).html("0");	
					
					//var xpath3 = '';
					//$(_x(xpath3)).html("0");

					
				}
		}
		});
		
		$('.decr').click(function(){
			var ind = $('.decr').index(this);
			
			var ppname = $('.item_name').get(ind);
			var name = ppname.innerHTML;
			simpleCart.each(function( item , x ){
				var n = item.get( "name" );
				if(n == name)
				{
					item.decrement();
					simpleCart.update();
				}
				refresh();
			});
			
			//$( "#foo" ).trigger( "click" );
			// for( i=1; i < $('.item-decrement').length; i++ )
			// {
				// var iname = $(".item-name").get(i);
				// if(iname.innerHTML == name)
				// {
					//var dec = $('.item-decrement').get(i);
					// $(".item-decrement")[i].click();
				// }
				
			// }
			});
	



	
	
});
function updateall()
{
	qtyArray = $('.item-quantity');
	nameArray = $('.item-name');
	//console.log(qtyArray[1].innerHTML);
	for(i=1;i<$('.item-name').length;i++)
	{
		var name = nameArray[i].innerHTML;
		var qty = qtyArray[i].innerHTML;
		var qt = parseInt(qty);
		for(j=0;j<$('.item_name').length;j++)
		{
			var pname = $('.item_name').get(j);
			if(  pname.innerHTML == name)
				{
					var it = j+1;
					var xpath = '/html/body/div[2]/section[4]/div[3]/section[1]/div['+it+']/div/div[3]/span/b';
					$(_x(xpath)).html(qt+1);
					
					//var xpath2 = '/html/body/div[2]/section[4]/div[3]/section[2]/div['+it+']/div/div[3]/span/b';
					//$(_x(xpath2)).html(qt+1);
					
					//var xpath3 = '';
					//$(_x(xpath3)).html(qt+1);
					
				}
		}
		name="";
	}

}

function sleepFor( sleepDuration ){
    var now = new Date().getTime();
    while(new Date().getTime() < now + sleepDuration){ /* do nothing */ } 
} 


	
	

function _x(STR_XPATH) {
    var xresult = document.evaluate(STR_XPATH, document, null, XPathResult.ANY_TYPE, null);
    var xnodes = [];
    var xres;
    while (xres = xresult.iterateNext()) {
        xnodes.push(xres);
    }

    return xnodes;
}