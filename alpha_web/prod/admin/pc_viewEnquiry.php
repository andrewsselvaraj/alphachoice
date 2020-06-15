<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Flats Website Template | Services :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!------ Light Box ------>
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/ios-orientationchange-fix.js"></script> 
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!------ Eng Light Box ------>	
</head>
<body>
<?php include("header.php")?>
<?php include("menu.php")?>

<?php include("subheader.php")?>		

				
<?php include("../../db/dbconnection.php")?>					

<?php
$result = mysql_query("SELECT * FROM product_enquiry pe,product_info pi ,supplier_info si where pi.pk_product_id=pe.fk_product_id and  si.pk_supplier_id=pe.fk_supplier_id");
 $i=0;
  while($row = mysql_fetch_array($result))
  {
   
   
    $pk_product_supplier_id = $row['pk_product_supplier_id'];
 $product_id = $row['fk_product_id'];
  $supplier_id = $row['fk_supplier_id'];
 $customer_name = $row['customer_name'];
  $email_id = $row['email_id'];
 
  $mobile = $row['mobile'];
    $message = $row['message'];
?>
				
				
    <div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
					<form action="pc_enquiryEntry.php" method="post">
						
												 						 
						<h4> <?php echo "Product Name". "$pk_product_supplier_id" ?> </h4>
						<p> 
						
						
<?php echo "Customer Name : ".  "$customer_name" ?> <br>
<?php echo "Email Id : ".  "$email_id" ?> <br>
<?php echo "Mobile No : ".  "$mobile" ?> <br>
<?php echo "Message : ".  "$message" ?> <br>

						
						</p>
						<!--<a href="#" class="link">Read More</a>-->
					 
						 
						 
						   		<span><input type="submit" value="Update Status"></span>
								</form>
						   
						  
					</div>
					<?php
					if(($i%4)==0 && $i!=0)
					{
					echo " <div class=\"clear\"></div>"; 
					}
					?>
		   		</div>	
		   		<?php $i=$i+1;}?>
		   	</div>
	    </div>
	</div>
	  
</body>
</html>

    	
    	
            