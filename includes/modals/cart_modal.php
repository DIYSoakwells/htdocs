

<!-- cart modal panel -->	            
<section class="modal fade cartModal" role="dialog" aria-labelledby="cart_modal" tabindex="-1">

<div class="modal-dialog" role="document">
<div class="modal-content">

<!-- Modal Header-->				
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
		<h3 class="modal-title cart_summary">
			<span class="cart_diy_logo">DIY&nbsp;SOAKWELLS<small class="trademark">&trade;</small></span><b>Cart Summary</b>
		</h3>		
	</div>
	
<!-- Cart Modal Body -->
<section class="modal-body">
		<div class="checkout">
		
			<!-- Cart Items -->
			<div class="simpleCart_items"></div>
				
					<!-- Cart Items Footer -->
				<div class="panel-footer">
				<div class="row">
					<div class="hidden-xs col-sm-4 cart_modal_btn">
						<a class="btn btn-default btn-sm" data-dismiss="modal">Continue Shopping</a>
					</div>
					<div class="col-xs-12 col-sm-8 cart_footer_text">
						<span class="total">Current Total: &nbsp;
						<b class="simpleCart_grandTotal"></b>	
						<small class=gst>Inc. GST</small>
						</span>
					</div>
				</div>
			</div>
		</div>
				
		<div>
			<h3 class="cart_summary">			
				<span class="cart_diy_logo">DIY&nbsp;SOAKWELLS<small class="trademark">&trade;</small></span><b>Checkout</b>
			</h3>
		</div>
					
<!-- Customer Details Form -->
	<section class="details_form">
		<b class="invoice_info">Due to the custom nature of this service we do not take payment until your order is confirmed and the materials are delivered. You will be emailed an invoice, for payment we accept bank transfer and credit card.</b>

		<form id="ajax-contact" method="post" action="javascript:simpleCart.checkout()" class="contact_form">	
			<fieldset>					
				<h4>Questions / Additional Information</h4>

				<div class="textbox_container">
					<textarea rows="5" style="overflow-y:hidden" id="textbox" name="textbox"></textarea>
				</div>

				<h4>Customer Details</h4>	

				<table>
					<tr>
						<th><label for="name" class="cart_label">Enter Name</label></th>
						<td><input type="text" name="name" placeholder="Name Required" class="input" id="name" required /></td>
					</tr>
					<tr>
						<th><label for="phone" class="cart_label">Enter Phone Number</label></th>
						<td><input type="tel" pattern="(^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$)" placeholder="Phone Number Required" name="phone" class="input" id="phone" required/></td>				
					</tr>
					<tr>
						<th><label for="emaile" class="cart_label">Enter Email</label></th>
						<td><input type="email" placeholder="Email Required" name="emaile" class="input" id="emaile" required/></td>
					</tr>
					<tr>							
						<th><label for="address" class="cart_label">Enter Address</label></th>
						<td><input type="text" name="address" placeholder="Address / Suburb" class="input" id="address" required/></td>
					</tr>
				</table>
			</fieldset>
					
				<!-- captcha -->
			<div class="captcha_container">
				<div class="g-recaptcha" data-sitekey="6LfPjyMTAAAAANe_qucSV5ZFAuDNO4Ud524-NGoa" data-size="compact"></div>
			</div>


			<section class="fb_container">
				<div class="fb-like" data-href="http://www.facebook.com/DiySoakwells" data-layout="button_count" data-width="225" data-action="like" data-show-faces="false" data-share="true"></div>
			</section>
			<br/><!-- css this -->

			

			<fieldset class="submit">
			
				<div id="form-messages submit_field"></div>

				<div id="spinner" class="hidden success submit_field"><i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i></div>
			
				<input id="submit" type="submit" name="Submit" value="Send" style="cursor:pointer" class="success"/>
			</fieldset>

		</form>
	</section>
</section>		

	
<!-- Modal Footer-->
<section class="modal-footer">
		<button type="button" class="btn btn-default close" aria-label="Close" data-dismiss="modal">Continue Shopping</button>
</section>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

</section><!-- /.main section -->