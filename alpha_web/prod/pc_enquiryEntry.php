<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Flats Website Template | Contact :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include("header.php")?>
<?php include("menu.php")?>


		<div class="content-bottom">
			<div class="wrap">
				<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Enquiry Form</h3>
					<?php
					$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];
$product_id = $_POST['product_id'];

$pk_product_supplier_id = $product_id ."_".$supplier_id;
$product_name= $_POST['product_name'];

$supplier_name= $_POST['supplier_name'];
$product_detail= $_POST['product_detail'];

					?>
					    <form method="post" enctype="multipart/form-data" action="pc_enquiryEntryProcess.php" method="post">
											    	<!--<div>
													
						    	<span><label>pk_product_supplier_id </label></span>
						    	<span><INPUT  type="text" size="20" readonly="readonly" maxlength="50" id="pk_product_supplier_id" name="pk_product_supplier_id" value="<?php echo "$pk_product_supplier_id" ?>"> </span>
						    </div>
					    	<div>
						    	<span><label>Supplier ID </label></span>
						    	<span><INPUT  type="text" size="20" readonly="readonly" maxlength="50" id="supplier_id" name="supplier_id" value="<?php echo "$supplier_id" ?>"> </span>
						    </div>
					    	<div>
						    	<span><label>Supplier Name </label></span>
						    	<span><INPUT  type="text" size="20" readonly="readonly" maxlength="50" id="supplier_name" name="supplier_name" value="<?php echo "$supplier_name" ?>"> </span>
						    </div>	
							-->
							
							<INPUT  type="hidden" size="20" readonly="readonly" maxlength="50" id="pk_product_supplier_id" name="pk_product_supplier_id" value="<?php echo "$pk_product_supplier_id" ?>">
							
							<INPUT  type="hidden" size="20" readonly="readonly" maxlength="50" id="supplier_id" name="supplier_id" value="<?php echo "$supplier_id" ?>"> 
							
							<INPUT  type="hidden" size="20" readonly="readonly" maxlength="50" id="product_id" name="product_id" value="<?php echo "$product_id" ?>">
							 
												    	 
					    	<div>
						    	<span><label>Product ID - Product Name </label></span>
						    	<span><INPUT  type="text" size="20" readonly="readonly" maxlength="50" id="product_name" name="product_name" value="<?php echo "$product_id"  ."-". "$product_name" ?>"> </span>
						    </div>
							
												    	<div>
						    	<span><label>Product Detail </label></span>
						    	<span><INPUT  type="text" size="20" readonly="readonly" maxlength="50" id="product_detail" name="product_detail" value="<?php echo "$product_detail" ?>"> </span>
						    </div>
								
							
							<div>
						    	<span><label>Customer Name </label></span>
						    	<span><INPUT  type="hidden" size="20" maxlength="50" id="customer_id" name="customer_id" ><INPUT  type="text" size="20" maxlength="50" id="customer_name" name="customer_name" > </span>
						    </div>
							
														<div>
						    	<span><label>Quantity </label></span>
						    	<span><INPUT  type="text" size="20"   maxlength="50" id="qty" name="qty" > </span>
						    </div>							

							<div>
						    	<span><label>Email </label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="email_id" name="email_id" > </span>
						    </div>
							
														<div>
						    	<span><label>Mobile </label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="mobile" name="mobile" > </span>
						    </div>
							
														<div>
						    	<span><label>Message</label></span>
						    	 
								<span><textarea id="message" name="message"></textarea></span>
						    </div>
							
													    
						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>
					    </form>
				  </div>
  				</div>
<?php include("../common/company.php")?>
				 <div class="clear"></div> 
			  </div>
			  <!--
			  <div class="map">
				   <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
			  </div>
		  </div>
		  -->
	 </div>
	</div>
	   <div class="copy-right">
			<div class="wrap">
				<p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
		</div>
</body>
</html>

    	
    	
            