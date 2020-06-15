<?php 
session_start();

?>
<?php 
echo "-".$_SESSION["UserID"];
$UserID = ISSET($_SESSION["UserID"]);
echo "=".$UserID;		
if($UserID == null)
  {
	echo "Session is invalid.Please login";
	 
   exit;
  }
  else
  {
   echo "welcome ".$UserID;
  }

?>