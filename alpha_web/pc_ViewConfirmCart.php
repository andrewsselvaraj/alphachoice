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
				  	<h3>View and Complete Cart</h3>
					   <?php include("db/dbconnection.php")?>
					   
   
					   
					   
					   	 



		
	
	



<div>
<?php
$transaction_id= $_GET['transaction_id'];
//$transaction_id="test";
?>
<a href="pc_product.php?ptpy=HC">Buy More Products</a> &nbsp;<a href="pc_ShippingDetails.php?transaction_id=<?php echo $transaction_id ?>">Proceed Shipping</a> &nbsp;
<!--<a href="pc_ShippingDetails.php?ptpy=HC&transaction_id="<?php echo "$transaction_id";?> Proceed Shipping</a>-->
<span><label> Product ID </label> <label> Customer ID </label> </span>
 					
<?php

$sql = "SELECT  c.*, pi.* FROM cart c,product_info pi WHERE pi.pk_product_id = c.fk_product_id and c.transaction_id='". $transaction_id."' order  by pk_product_supplier_id";
$result = mysql_query($sql);
//echo $sql;
 $i=0;
  
 
  while($row = mysql_fetch_array($result))
  {
  
 $product_id = $row['fk_product_id'];
 $product_name = $row['product_name'];
 $qty = $row['qty'];
  $current_rate = $row['current_rate'];
  $pk_product_supplier_id = $row['pk_product_supplier_id'];
  
  
  
  echo "<span><label>&nbsp;".$product_id." </label><label>&nbsp;".$product_name." </label><label>&nbsp;".$qty." </label><label>&nbsp;".$current_rate." </label> <a href=pc_product.php?ptpy=HC&pk_product_supplier_id=".$pk_product_supplier_id.">Remove from Cart</a> </span>	";
 
  $supplier_id = $row['fk_supplier_id'];
 // $pk_product_supplier_id=$row['pk_product_supplier_id'];
 //$product_name = $row['product_name'];
 // $supplier_name = $row['supplier_name'];
 
 // $product_detail = $row['product_detail'];
   // $product_image = $row['product_image'];
	 
	}
	echo "<a href=\"pc_product.php?ptpy=HC&pk_product_supplier_id=".$pk_product_supplier_id."\">Buy More Products</a>";
	

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

    	
    	
            