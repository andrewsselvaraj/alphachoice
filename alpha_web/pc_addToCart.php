<?php include("db/dbconnection.php")?>   
<?php		
//$pk_product_supplier_id = $_POST['pk_product_supplier_id'];
$product_id = $_POST['product_id'];
$supplier_id = $_POST['supplier_id'];
$current_rate = $_POST['current_rate'];
$pk_product_supplier_id = $product_id."_".$supplier_id;
$qty= $_POST['qty'];
$transaction_id= $_POST['transaction_id'];
//$transaction_id = $_POST['transaction_id'];


 


//city ,	state ,	country ,	pincode ,	contact_person, 	contact_email_id ,	contact_phone

//'$city' ,	'$state' ,	'$country' ,	'$pincode' ,	'$contact_person', 	'$contact_email_id' ,	'$contact_phone'


$sql="INSERT INTO `cart` (`transaction_id`,`pk_product_supplier_id`,`fk_product_id`,`fk_supplier_id`,`qty`, `current_rate`,  `created_by`, `created_date`, `last_updated_by`, `last_updated_datetime`, `status`) VALUES 
('$transaction_id','$pk_product_supplier_id','$product_id', '$supplier_id','$qty','$current_rate','', 'now()', '-', 'now()', 'A')";
//$fax= $_POST['fax'];
//$email= $_POST['email'];

// echo "Insert SQL".$sql;

?>
<?php 

$results = mysql_query($sql) or die 

(" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)

{

$sql="select sum";

$total = $current_rate*$qty;
//echo "Product added successfully.<BR>Product Cost is : ".$total ;
echo "Product added to cart Successfully<BR>" ;
echo "<a href=\"pc_ViewConfirmCart.php?ptpy=HC&transaction_id=".$transaction_id."\">Proceed Billing</a>";
}


?> 
	



    	
    	
            