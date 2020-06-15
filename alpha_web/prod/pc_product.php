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

				
	<?php include("../db/dbconnection.php")?>					

<?php
$sql="SELECT * FROM product_info pi ,supplier_info si , product_supplier ps where pi.pk_product_id = ps.fk_product_id and si.pk_supplier_id = ps.fk_supplier_id";

if($_GET['ptpy']=="AL")
{
$ptpy="";
}
else
{
$ptpy = $_GET['ptpy'] ;
$sql = $sql ." and pi.material_type = '".$ptpy."'";
}

//$string = '{ "firstName":["John","san"] , "lastName":"Doe" } ';

//$string ='{
//"employees": [
//{ "firstName":"John" , "lastName":"Doe" },
//{ "firstName":"Anna" , "lastName":"Smith" },
//{ "firstName":"Peter" , "lastName":"Jones" }
//]
//}';
//$jsonData = json_decode($string,true);

//$firstName = $json["employees"];
//echo "firstName is ".$employees[0]->firstName[0]->value;
//echo "firstName is ".$jsonData[0]->firstName[0]->value;

//echo "firstName is ".$jsonData[0]->$employees[0]->firstName[0]->value;

//echo "firstName is 2".$jsonData["employees"][0]["firstName"];
//echo "firstName is 2".$jsonData["employees"][0]["firstName"];
//echo $sql;

$result = mysql_query($sql);
//echo $sql;
 $i=0;
 //echo " <BR>before lopp66666";
  while($row = mysql_fetch_array($result))
  {
   
 $product_id = $row['pk_product_id'];
// echo "inside".$product_id;
  $supplier_id = $row['fk_supplier_id'];
 $product_name = $row['product_name'];
  $supplier_name = $row['supplier_name'];
 
  $product_detail = $row['product_detail'];
    $product_image = $row['product_image'];
?>
				
				
    <div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
					<form action="pc_enquiryEntry.php" method="post">
						
												 						 <a href="uploads/<?php echo"$product_image" ?>" > <img src="uploads/<?php echo"$product_image" ?>" alt="" width="150" height="150"><span class="zoom-icon"></span> </a>
																		 
						<h4> <?php echo "Product Name". "$product_name" ?> </h4>
						<p> <?php echo "Product Details".  "$product_detail" ?> </p>
						<!--<a href="#" class="link">Read More</a>-->
					 
						 <input type="hidden" name=product_id value="<?php echo "$product_id" ?>">
						 <input type="hidden" name=supplier_id value="<?php echo "$supplier_id" ?>">
						 <input type="hidden" name=product_name value="<?php echo "$product_name" ?>">
						 <input type="hidden" name=supplier_name value="<?php echo "$supplier_name" ?>">
						  <input type="hidden" name=product_detail value="<?php echo "$product_detail" ?>">
						 
						   		<span><input type="submit" value="Order Product"></span>
								</form>
						   
						  
					</div>
					<?php
					if(($i/4)==0 && $i!=0)
					{
					echo "YES DIV<div class=\"clear\"></div>"; 
					}
					?>
		   		</div>	
		   		<?php $i=$i+1;}?>
		   	</div>
	    </div>
	</div>
	  
</body>
</html>

    	
    	
            