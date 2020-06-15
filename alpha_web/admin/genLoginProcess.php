<?php 
session_start();
?>
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



		<div class="content-bottom">
			<div class="wrap">
				<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Add Supplier</h3>
					    
						<?php

$UserID=  $_POST['UserID'];
$Password=$_POST['Password'];
if($UserID==null || $Password==null)
{
echo "Invalid Login Please try Again or Session is expired";
}



?>
		<?php include("../db/dbconnection.php")?>	

<?php
$sql="select pk_user_id,user_name as user_name,fk_role_id from user_role ur , userinfo ui where ui.pk_user_id= ur.fk_user_id and ui.pk_user_id='".$UserID."'  and ui.password='".$Password."'" ;

echo $sql;
$result = mysql_query($sql);


while($member = mysql_fetch_array($result))

{ 

$c_user_name = $member['user_name'];
 
if($c_user_name!=null)
		{
			 echo "coming isndie";
			$_SESSION["UserID"]=$member["pk_user_id"];
			$_SESSION['user_name']=$member["user_name"];
			//$_SESSION['company_id']=$member["ext_company_id"];
			//$_SESSION['company_name']=$member["ext_company_name"];			
			$role_name = $member["fk_role_id"];
			
			$_SESSION['role_name']=$role_name;
			$SessionUserID = $_SESSION["UserID"];
			echo " Welcome ".$SessionUserID ." <BR> Click here to proceed <a href=\"pc_addProduct.php\"> Product Operation</a>";
		}
		


 }
 
 $UserID =$_SESSION['UserID'];		
if($UserID == null)
  {
	echo "Please check User id and Password or Session is invalid.Please login";
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

	 </div>
	</div>
	   <div class="copy-right">
			<div class="wrap">
				<p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
			</div>
		</div>
</body>
</html>

    	
    	
            