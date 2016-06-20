
	
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
				
					<small class="hidden-xs">This is known as your catchment area. Any impervious surfaces should be taken into consideration. This information is often found on the floor plan or can be easily visually estimated.</small>
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
				<small class="hidden-xs calculator_labels">The Standard calculation known as the 1 in 20 rain event is commonly used, listed councils have different requirements. The calculation ensures you will have adequete drainage even during heavy storms.</small>
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
				<label>Choose a Trafficable Polypropylene Soakwell<br/><small class="hidden-xs">We recommend the 140 litre polypropylene soakwell as it requires the least amount of space. An ideal system is just two or three large strips made up of a number of modules, serving a proportional amount of catchment area. Flow rates can vary dramatically between downpipes.</small></label>
			</div>
				
			<div class="col-xs-12 col-md-4 outer_container">
				<div class="calc_input inner_container">
					<select class="soakwell" name="soakwell">
						<option value="1" selected>Trafficable&nbsp;140&nbsp;litre</option>
						<option value="2">Trafficable&nbsp;130&nbsp;litre</option>
					</select>
				</div>
			</div>				
		</section>
			
	</form>				
</section>

<section class="vol_total">		
	<h3>Total Volume Required</h3>
	<span class="totalVolumeM3"></span>&nbsp;m<sup>3</sup>&nbsp;&nbsp;/&nbsp;&nbsp;<span class="totalVolumeL">	</span>&nbsp;Litres
</section>

<section class="figure_table row">
												
	<div class=" col-xs-12 col-md-4">
		<div class="center-block vol_box">
			<div><h3 class="table_heading">100% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol100"></span>&nbsp;Soakwells</div>
			<div>Includes Geotextile and Onsite Advice</div>
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH</div>
			<div class="price"><span id="cost100"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!--need to add number recommended to cart if 'add to cart' clicked -->
			<!-- <div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;" href="">ADD TO CART</a></div> -->
		</div>
	</div>
		
	<div class=" col-xs-12 col-md-4">
		<div class="center-block vol_box">
			<div><h3 class="table_heading">75% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol75"></span>&nbsp;Soakwells</div>
			<div>Includes Geotextile and Onsite Advice</div>
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH!</div>
			<div class="price"><span id="cost75"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!--need to add number recommended to cart if 'add to cart' clicked -->
			<!--<div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;" href="">ADD TO CART</a></div>-->
			
		</div>
	</div>
							
	<div class=" col-xs-12 col-md-4">
		<div class="center-block vol_box">
			<div><h3 class="table_heading">50% of Volume Calculation</h3></div>
			<div class="no_of_soaks"><span class="vol50"></span>&nbsp;Soakwells</div>
			<div>Includes Geotextile and Onsite Advice</div>
			<div><i class="fa fa-truck"></i>&nbsp;&nbsp;FREE DELIVERY IN PERTH!</div>
			<div class="price"><span id="cost50"></span><sup><small>&nbsp;inc. GST</small></sup></div>
			
			<!--need to add number recommended to cart if 'add to cart' clicked -->
			<!--<div class="purchase_btn"><a class="btn btn-success item_add" href="javascript:;" href="">ADD TO CART</a></div>-->
			
		</div>
	</div>
</section>
	
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




