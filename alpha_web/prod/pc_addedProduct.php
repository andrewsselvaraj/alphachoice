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
				  	<h3>Add Product</h3>
					    
						<?php
if(isset($_FILES)){
echo"<pre>".print_r($_FILES)."</pre>";
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 9000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	$file_name=time().$_FILES["file"]["name"];
  move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/".$file_name);
	  
    }
	}
else
  {
  echo "Invalid file";
  }
  
}
$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];

$pk_product_supplier_id = $product_id ."_".$supplier_id;
$product_name= $_POST['product_name'];
$product_detail= $_POST['product_detail'];
$model= $_POST['model'];
$material_type = $_POST['material_type'];
$quantity = $_POST['quantity'];
$calculation_unit= $_POST['calculation_unit'];
$current_rate= $_POST['current_rate'];
$created_by= $_POST['created_by'];
//$created_date= $_POST['created_date'];
$status= $_POST['status'];
//$fax= $_POST['fax'];
//$email= $_POST['email'];


?>
<?php include("dbconnection.php")?>
<?php

mysql_query("start transaction;"); 



$sql="INSERT INTO product_info(pk_product_id,product_name,product_detail,model,material_type,calculation_unit,product_image,current_rate,created_by,created_date,status) VALUES ('$product_id','$product_name','$product_detail','$model','$material_type','$calculation_unit','$file_name','$current_rate','$created_by','now()', '$status')";

 

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{
echo "Prodcut => ".$product_name ." Added Successfully";



}
else
{
echo $product_name ." Role Backed";
mysql_query("rollback;");
}




$sql="INSERT INTO `product_supplier` (`pk_product_supplier_id`, `fk_product_id`, `fk_supplier_id`, `quantity`,`created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES ('$pk_product_supplier_id', '$product_id', '$supplier_id', '$quantity','created_by', 'now()', 'last_updated_by', 'now()', 'A')";

 

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{
echo "Product => and Quantity ".$pk_product_supplier_id ." Added Successfully";

mysql_query("commit;");

}
else
{
echo "Product => ".$pk_product_supplier_id ." RoleBacked Successfully";
mysql_query("rollback;");
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

    	
    	
            