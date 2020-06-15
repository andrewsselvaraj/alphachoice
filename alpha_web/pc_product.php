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
<!------ Light Box ------>

<link rel="stylesheet" href="css/swipebox.css">
<script src="js/ios-orientationchange-fix.js"></script> 
<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$( ".searchForm" ).submit(function( event ) {
 
		  // Stop form from submitting normally
		  event.preventDefault();
		 
		  // Get some values from elements on the page:
		  var $form = $( this ),
			pid = $form.find( "input[name='product_id']" ).val(),
			sid = $form.find( "input[name='supplier_id']" ).val(),
			_current_rate = $form.find( "input[name='current_rate']" ).val(),
			_transaction_id = $form.find( "input[name='transaction_id']" ).val(),			
			_qty = $form.find( "input[name='qty']" ).val(),
			url = $form.attr( "action" );
		 
		  // Send the data usi_ng post
		  console.log(sid,pid,_qty);
		  var posting = $.post( url, { product_id: pid, supplier_id:sid ,qty:_qty,transaction_id:_transaction_id,current_rate:_current_rate} );
		 
		  // Put the results in a div
		  posting.done(function( data ) {
				$form.find( ".txtHint" ).empty().append( data );
		  });
		});
	});
	</script>
	<script>
	function postmyData(){
	
	
	}
	function postData()
	{
	//alert("HI");
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	   alert("XMLHttpRequest iE 7");
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  alert("XMLHttpRequest 56");
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  alert("XMLHttpRequest 56 function");
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
		else{return false;}
	  }
	  //alert("Before Call");
	xmlhttp.open("POST","pc_addToCart.php",true);
	 //alert("On call ");
	xmlhttp.send();
	 //alert("After Send");
	 return false;
	}
	</script>
	<!------ Eng Light Box ------>	
</head>
<body>
<?php include("header.php")?>
<?php include("menu.php")?>

<?php include("subheader.php")?>		

				<?php 
				
					//session_start();
					$transaction_id = session_id(); 
				
				?>
				
	<?php include("db/dbconnection.php")?>					

<?php
$sql="SELECT * FROM product_info pi ,supplier_info si , product_supplier ps where pi.pk_product_id = ps.fk_product_id and si.pk_supplier_id = ps.fk_supplier_id and pi.status='AC'";

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
  $current_rate = $row['current_rate'];
 
  $product_detail = $row['product_detail'];
    $product_image = $row['product_image'];
?>
				
	
    <div class="section group">
					<div class="grid_1_of_4 images_1_of_4">
					<div class="contact-form" >
					<form class="searchForm" action="pc_addToCart.php" >
						<h4> <?php echo "Product Name : ". "$product_name" ?> </h4>
						<a href="uploads/<?php echo"$product_image" ?>" > <img src="uploads/<?php echo"$product_image" ?>" alt="" width="50%" height="50%"></a>
																		 
						
						<p> <?php echo "Rate : ".  "$current_rate" ?> 
						 Quantity : <input type="qty" name="qty"  size="2">
						 
						 
						 
						  </p>
						<!--<a href="#" class="link">Read More</a>-->
					 

						   
						   		<input type="submit" value="Add To Cart" size="5">
								
								<BR>	
								<div class="txtHint">&nbsp;</div>
								<!--onclick="postData()"-->	
														 <input type="hidden" name=product_id value="<?php echo "$product_id" ?>">
						 <input type="hidden" name=supplier_id value="<?php echo "$supplier_id" ?>">
						 <input type="hidden" name=product_name value="<?php echo "$product_name" ?>">
						 <input type="hidden" name=supplier_name value="<?php echo "$supplier_name" ?>">
						  <input type="hidden" name=product_detail value="<?php echo "$product_detail" ?>">
						   <input type="hidden" name=current_rate value="<?php echo "$current_rate" ?>">
						   <input type="hidden" name=transaction_id value="<?php echo "$transaction_id" ?>">						
								</form>
								</div>
								
								
						   
						  
					</div>
					<?php
					if(($i/4)==0 && $i!=0)
					{

						

					echo "<div class=\"clear\"></div>"; 
					
					}
					else
					{
					//echo "i==".$i;
					}
					 
					?>
		   		</div>	
		   		<?php $i=$i+1;}?>
		   	</div>
	    </div>
	</div>

</body>
</html>

    	
    	
            