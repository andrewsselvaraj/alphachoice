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

	<?php include("dbconnection.php")?>					
						<?php


$result = mysql_query("SELECT * FROM product_info");
 $i=0;
  while($row = mysql_fetch_array($result))
  {
   
 $product_id = $row['pk_product_id'];
 $product_name = $row['product_name'];
  $product_detail = $row['product_detail'];
    $product_image = $row['product_image'];
?>
				
				
    <div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						
						 
						 <?php echo "<input type=checkbox id=\".$product_id.\"> Product ID : $product_id" ?> 
						
						 
						 						 <a href="uploads/<?php echo"$product_image" ?>" class="swipebox" title="Image Title"> <img src="uploads/<?php echo"$product_image" ?>" alt=""  width="100" height="100"><span class="zoom-icon"></span> </a>
						<h4> <?php echo "Product Name". "$product_name" ?> </h4>
						<p> <?php echo "Product Details".  "$product_detail" ?> </p>
						
					</div>
					
		   		</div>	
		   		<?php $i=$i+1;}?>
		   	</div>
	    </div>
	</div>
	  
</body>
</html>

    	
    	
            