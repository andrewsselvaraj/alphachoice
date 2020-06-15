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


$result = mysql_query("SELECT * FROM supplier_info");
 $i=0;
  while($row = mysql_fetch_array($result))
  {
   
 $supplier_id = $row['pk_supplier_id'];
 $supplier_name = $row['supplier_name'];
  $supplier_detail = $row['supplier_detail'];

?>
				
				
    <div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
						
						 
						 <?php echo "<input type=checkbox id=\".$supplier_id.\"> Supplier ID : $supplier_id" ?> 
						
						 
						 						
						<h4> <?php echo "Supplier Name". "$supplier_name" ?> </h4>
						<p> <?php echo "Supplier Details".  "$supplier_detail" ?> </p>
						
					</div>
					
		   		</div>	
		   		<?php $i=$i+1;}?>
		   	</div>
	    </div>
	</div>
	  
</body>
</html>

    	
    	
            