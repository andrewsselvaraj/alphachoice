<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Alpha Choice Handicrafts  :: Kodaikanal</title>
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
				  	<h3>Shipping Details</h3>
					 



						
						
					    	<div>
<?php

$transaction_id= $_GET['transaction_id'];
?>
								
													    <form method="post" enctype="multipart/form-data" action="po_ShippingDetailsConfirmation.php" method="post">
					    	
							
							<div>
						    	<span><label> Transaction ID : <?php echo " ".$transaction_id; ?>
								<INPUT  type="hidden" size="20" maxlength="50" id="transaction_id" name="transaction_id" value=<?php echo "$transaction_id";?>>
								</label></span>
								
						    </div>
							
							 <div>
						    	<span><label>Customer Name </label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="customer_name" name="customer_name" > </span>
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
						    	<span><label>Address </label></span>
						    	<span><textarea id="address" name="address"></textarea> </span>
						    </div>
							
																					<div>
						    	<span><label>City</label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="city" name="city" > </span>
						    </div>
							
																												<div>
						    	<span><label>State</label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="state" name="state" > </span>
						    </div>
							<div>
							<span><label>Country</label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="country" name="country" > </span>
						    </div>
														<div>
							<span><label>Pincode</label></span>
						    	<span><INPUT  type="text" size="20" maxlength="50" id="pincode" name="pincode" > </span>
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
  				</div>
<?php include("common/company.php")?>
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

</body>
</html>

    	
    	
            