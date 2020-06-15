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
<?php include("../../db/dbconnection.php")?>


		<div class="content-bottom">
			<div class="wrap">
				<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Add Supplier</h3>
					    
						<?php

$pk_product_supplier_id = $_POST['pk_product_supplier_id'];
$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];
$customer_id= "-";
$customer_name= $_POST['customer_name'];
$email_id= $_POST['email_id'];
$mobile= $_POST['mobile'];

$message = $_POST['message'];

 


//city ,	state ,	country ,	pincode ,	contact_person, 	contact_email_id ,	contact_phone

//'$city' ,	'$state' ,	'$country' ,	'$pincode' ,	'$contact_person', 	'$contact_email_id' ,	'$contact_phone'


$sql="INSERT INTO `product_enquiry` (`pk_product_supplier_id`,`fk_product_id`,`fk_supplier_id`,  `customer_id`, `customer_name`, `email_id`, `mobile`, `message`, `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES ('$pk_product_supplier_id','$product_id','$supplier_id', '$customer_id' , '$customer_name', '$email_id', '$mobile', '$message', '$customer_id', 'now()', '$customer_id', 'now()', 'A')";
//$fax= $_POST['fax'];
//$email= $_POST['email'];

?>




<?php


 

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{
echo "Enquiry of :". $customer_name ." posted Successfully";
}


?> 
						
				  </div>
  				</div>
				<div class="col span_1_of_3">
				  <div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info[at]mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>
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

    	
    	
            