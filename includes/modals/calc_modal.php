
	
<!-- MODAL CALCULATOR -->	            
<section class="modal fade calc" role="dialog" aria-labelledby="Calculator" tabindex="-1">
	<div class="modal-dialog" role="document">	
		<div class="modal-content">	
<!-- Calculator Modal Header -->
<section class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h3 class="modal-title Cart_Summary">How many Polypropylene Soakwells Do You Need?</h3>
</section>
	
<!-- Calculator Modal Body -->
<section class="modal-body">
<!--  Body -->		
<section class="calculator_body">
	<form class="calc_form">
			
		<section class="mycolumn row">
			<section class="calculator_labels col-xs-12 col-md-8">
				<label for="catchment">Enter Your Roof Area in m<sup>2</sup>&nbsp;&nbsp;
				
					<br class="hidden-md hidden-lg" />
					<small>(length x width)</small>
					<br/>
				
					<small class="hidden-xs">This is known as your catchment area. All impervious surfaces (roof / ground) should be considered. Areas are often on the floor plan or can be visually estimated (length x width).</small>
				</label>
			</section>
				
			<section class="col-xs-12 col-md-4 outer_container">
				<div class="calc_input inner_container">
					<input id="catchment" name="catchment" type="number" value="100" />&ensp;m2
				</div>
			</section>	
		</section>

		<section class="mycolumn row">	
			<section class="col-xs-12 col-md-8">
				<label for="council">Choose Your Local Council if Listed. &ensp;<br/>
				<small class="hidden-xs calculator_labels">The Standard calculation known as the 1 in 20 rain event is commonly used although many councils have different requirements. The calculation allows you to make a more informed decision for your particular needs.</small>
				</label>
			</section>
				
			<section class="col-xs-12 col-md-4 outer_container">
				<div class="calc_input inner_container">
					<select id="council" name="council">
						<option value="1" selected>Standard Calculation</option>
						<option value="2">City of Armdale</option>
						<option value="3">Cambridge Council</option>
						<option value="4">Cockburn Council</option>
						<option value="5">City of Gosnells</option>
						<option value="6">Swan City Council</option>
					</select>
				</div>			
			</section>
		</section>


		<section class="mycolumn row">					
			<div class="col-xs-12 col-md-8 calculator_labels">
				<label>Choose a Trafficable Polypropylene Soakwell<br/><small class="hidden-xs">We recommend the 140 litre polypropylene soakwell as it requires the least amount of space. An ideal system is just two or three large strips made up of a number of modules, serving a proportional amount of the catchment area. Flow rates will vary dramatically between downpipes at different times.</small></label>
			</div>
				
			<div class="col-xs-12 col-md-4 outer_container">
				<div class="calc_input inner_container">
					<select class="soakwell" name="soakwell">
						<option value="1" selected>140 Litre Polypropylene Soakwells</option>
						<option value="2">130 Litre Polypropylene Soakwells</option>
					</select>
				</div>
			</div>				
		</section>
			
	</form>				
</section>

<section class="vol_total">		
	<h3>Total Volume Needed</h3>
	<span class="totalVolumeM3"></span>&nbsp;m<sup>3</sup>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="totalVolumeL">	</span>&nbsp;Litres
</section>

<div class="fb_container">
			<div class="fb-like" data-href="http://www.facebook.com/DiySoakwells" data-layout="button_count" data-width="225" data-action="like" data-show-faces="false" data-share="true"></div> if you found this information useful.
		</div>

<section class="figure_table row">
												
	<div class="col-xs-12 col-md-4">
		<div class="center-block vol_box well simpleCart_shelfItem">
			<div><h3 class="table_heading">100% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol100 item_quantity"></span>
			</div>
			
			<span class="hidden_price item_price"></span>
			
			<div class="soakwell-type1"><span class="soakwell-type item_name"></span></div> 
			
			<!--<div>Includes Geotextile and Onsite Advice</div>-->
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH. INCLUDES GEOTEXTILE</div>
			<div class="price"><span id="cost100"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!-- add soakwells recommended to cart if 'add to cart' clicked -->
			<div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add <span class="vol100 item_quantity"></span> to Cart</a></div>
			<!-- Item Counter -->
				<span class="counter">
					<b class="simpleCart_quantity badge"></b>
				</span>
			
		</div>
	</div>
		
	<div class=" col-xs-12 col-md-4">
		<div class="center-block vol_box well simpleCart_shelfItem">
			<div><h3 class="table_heading">75% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol75 item_quantity"></span></div>
			
			<span class="hidden_price item_price"></span>
			
			<div class="soakwell-type1"><span class="soakwell-type item_name"></span></div> 
			
			<!--<div>Includes Geotextile and Onsite Advice</div>-->
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH. INCLUDES GEOTEXTILE</div>
			<div class="price"><span id="cost75"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!--add soakwells recommended to cart if 'add to cart' clicked -->
			<div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add <span class="vol75 item_quantity"></span> to Cart</a></div>
			
			<!-- Item Counter -->
			<span class="counter">
				<b class="simpleCart_quantity badge"></b>
			</span>
			
		</div>
	</div>
							
	<div class=" col-xs-12 col-md-4">
		<div class="center-block vol_box well simpleCart_shelfItem">
			<div><h3 class="table_heading">50% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol50 item_quantity"></span></div>
			
			<span class="hidden_price item_price"></span>
			
			 <div class="soakwell-type1"><span class="soakwell-type item_name"></span> </div> 
			  
			<!--<div>Includes Geotextile and Onsite Advice</div>-->
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH. INCLUDES GEOTEXTILE</div>
			<div class="price"><span id="cost50"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!--need to add number recommended to cart if 'add to cart' clicked -->
			<div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add <span class="vol50 item_quantity"></span> to Cart</a></div>
			<!-- Item Counter -->
			<span class="counter">
				<b class="simpleCart_quantity badge"></b>
			</span>
			
		</div>
	</div>
</section>
	
	
	<!-- Cart Button -->
	
		<div class="cart_btn">      
			<button type="button" data-toggle="modal" data-target=".cartModal">    
				<span><i class="fa fa-shopping-cart">&nbsp;&nbsp;</i>Cart&nbsp;&nbsp;</span>
				<b class="simpleCart_quantity badge"></b>
				<span>Items&nbsp;</span>
				<span class="simpleCart_grandTotal"></span>
			</button>
	
	</div>
</section>	

<!-- Calculator Modal Footer -->
<section class="modal-footer">
	<button type="button" class="btn btn-default close" aria-label="Close" data-dismiss="modal">Continue Shopping</button>
</section>
		
	</div>
	</div>
</section>

<!--  <span class="col-xs-12">
        <h5 class="table_heading col-xs-4"><strong>Discount</strong></h5>
        <div class="col-xs-4" id="disc100"></div>
      	<div class="col-xs-4" id="disc75"></div>
     	 <div class="col-xs-2" id="disc50"></div>
      </span>-->
<!--  <span class="col-xs-12">
        <h5 class="table_heading col-xs-4"><strong>Savings</strong></h5>
        <div class="col-xs-4" id="saved100"></div>
      	<div class="col-xs-4" id="saved75"></div>
		<div class="col-xs-2" id="saved50"></div>
      </span>-->
<!--  <span class="col-xs-12">
        <h5 class="table_heading col-xs-4"><strong>Final Cost</strong></h5>
        <div class="col-xs-4" id="fcost100"></div>
        <div class="col-xs-4" id="fcost75"></div>
        <div class="col-xs-2" id="fcost50"></div>
      </span>-->




