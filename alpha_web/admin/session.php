<?php
session_start();

if(isset($_SESSION['name']))
{
//$_SESSION['views']=$_SESSION['views']+1;
echo "user name is".$_SESSION['name']
}
else
//$_SESSION['views']=1;
{
//echo "Views=". $_SESSION['views'];
echo "session is null";
}
?> 