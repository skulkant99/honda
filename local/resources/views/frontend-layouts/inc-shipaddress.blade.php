<div class="row">
	<div class="col wrap_listproduct wrap_chekout">
		<h1 class="title_topic">shipping address</h1>
		<div class="wrap_forgot">
			<div class="wrap_shipaddress wrap_forgotpassword">
				<div class="box_shipaddress">
					<div class="radio_checkout_text">
						<input id="radio-1" name="radio" type="radio" checked>
						<label for="radio-1" class="radio-label">Puri Lastname</label>
						<div class="checkout_descaddress">
							<div>
								<p>127 RatchadamriRd.,Lumpini,Pathumwan,Bangkok Thailand 10330</p>
								<p>Thailand</p>
								<p>10300</p>
							</div>
							<a href="edit_address.php">Edit</a>
						</div>
					</div>
				</div>
				<a href="addnew_address.php" class="btn_addnewaddress">+ Add New Address</a>
				
				<div class="md-radio-inline box_shipping mt_checkbox">
					<input id="newaddbill" type="checkbox" name="ship01" rel="w_getyourself">
					<label for="newaddbill">Billing address is not the same as shipping address</label>
				</div>
				<div class="w_getyourself">
					<form>
						<div class="form-group">
							<div class="title_addbilling">Add Billing Address</div>
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input class="form-control">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control">
						</div>
						<div class="form-group">
							<label>Contact Number</label>
							<div class="row frm_rowspan">
								<div class="col-4 col-sm-3 frm_colspan">
									<select class="form-control" style="">
										<option>TH +66</option>
									</select>
								</div>
								<div class="col-8 col-sm-9 frm_colspan">
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Country</label>
							<select class="form-control">
								<option>Thailand</option>
							</select>
						</div>
						<div class="form-group">
							<label>Postcode</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>District</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Sub District</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Address 1</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Address 2</label>
							<input type="text" class="form-control">
						</div>
						
					</form>
				</div>
				
				<div class="checkout_paymentmethod">
					<div class="checkout_topic">payment methods</div>
					<div class="box_paymentmethod">
						<div class="radio_checkout_text">
							<input id="payment1" name="payment1" type="radio" checked>
							<label for="payment1" class="radio-label">Credit Card / Debit Card</label>
						</div>
					</div>
				</div>
				<div class="checkout_totalprice3">
					<a href="thankyou.php" class="btn_blackdefault">continue to payment</a>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function () {
		
		var box_shipping = $('.box_shipping').find('input:checked').attr('rel');
		$('.box_shipping input').click(function () {
			var box_shipping = $('.box_shipping').find('input:checked').attr('rel');
			$('.w_getyourself').slideUp();
			$('.'+box_shipping).slideDown();
		});  
		
	});
</script>						