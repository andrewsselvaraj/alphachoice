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
				  	<h3>Add To Cart</h3>
					   <?php include("db/dbconnection.php")?>
					   
<?php
$sql = "SELECT max(value) as transaction_id FROM sequence where name='transaction_id'";
$result = mysql_query($sql);
//echo $sql;
while($row = mysql_fetch_array($result))
{ 
 $transaction_id = $row['transaction_id'];
}
$transaction_id = $transaction_id + 1;
$sql="update sequence set value ='".$transaction_id."' where name='transaction_id'";

echo $sql;

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{
echo "Product added successfully Transaction ID is".$transaction_id;
}

?>    
					   
					   
					   	 

						<?php		

//$pk_product_supplier_id = $_POST['pk_product_supplier_id'];
$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];
$pk_product_supplier_id = $product_id."_".$supplier_id;
$qty= $_POST['qty'];
//$transaction_id = $_POST['transaction_id'];


 


//city ,	state ,	country ,	pincode ,	contact_person, 	contact_email_id ,	contact_phone

//'$city' ,	'$state' ,	'$country' ,	'$pincode' ,	'$contact_person', 	'$contact_email_id' ,	'$contact_phone'


$sql="INSERT INTO `cart` (`transaction_id`,`pk_product_supplier_id`,`fk_product_id`,`fk_supplier_id`,`qty`,  `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES ('$transaction_id','$pk_product_supplier_id','$product_id', '$supplier_id','$qty','', 'now()', '$customer_id', 'now()', 'A')";
//$fax= $_POST['fax'];
//$email= $_POST['email'];

?>

		
	
	


<?php 

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{
echo "Product added successfully Transaction ID is".$transaction_id;
}


?> 
<div>
<span><label> Product ID </label> <label> Customer ID </label> </span>
 					
<?php
$sql = "SELECT * FROM cart WHERE transaction_id='". $transaction_id."'";
$result = mysql_query($sql);
//echo $sql;
 $i=0;
  
 
  while($row = mysql_fetch_array($result))
  {
  
 $product_id = $row['fk_product_id'];
 $supplier_id = $row['fk_supplier_id'];
 $qty = $row['qty'];
  
  echo "<span><label>".$product_id." </label><label>".$supplier_id." </label><label>".$qty." </label></span>	";
 
  $supplier_id = $row['fk_supplier_id'];
 //$product_name = $row['product_name'];
 // $supplier_name = $row['supplier_name'];
 
 // $product_detail = $row['product_detail'];
   // $product_image = $row['product_image'];
	 
	}
	
?>
	</div>	


						
				  </div>
  				</div>
<?php include("common/company.php")?>	
				 <div class="clear"></div> 
			  </div>

	 </div>
	</div>
	   <div class="copy-right">
			<div class="wrap">
				<p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
		</div>
</body>
</html>

    	
    	
            