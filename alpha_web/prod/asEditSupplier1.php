<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="../css/activesales.css">
<link rel="stylesheet" type="text/css" href="../css/display.css">
<META name="GENERATOR" content="IBM WebSphere Page Designer V4.0 for Windows">
<META http-equiv="Content-Style-Type" content="text/css">
<title>Inventory Management</title>
<!-- <script type="text/javascript" src="calendarDateInput.js">

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script> -->
<!-- <script>
function deleteAlert(supplier_id){
var conBox = confirm("Are you sure you want to delete: " + supplier_id);
if(conBox){ 
location.href="<?=$_SERVER['PHP_SELF'];?>?id="+ supplier_id + "&mode=remove";
}else{
return;
}
}
</script> -->
</HEAD>
<BODY topmargin=0>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventorymgmt", $con);

?>
<form action="asDeleteSupplier.php" method="post">
<!-- <form  method='get'> -->
<TABLE width="780" border="0" cellpadding="0" cellspacing="0" style="page-break-before: always" valign="top">


        <TR >

                <TD  bgcolor=#B0C4DE   valign=top>
                        <IMG SRC="../images/Inventory.jpg"  ALT="Inventory.jpg" width="25%" height="50%" ALIGN=center  BORDER=0>
<b><font CLASS="css">&nbsp;Inventory</font><font CLASS="css1">Management</font></b><sup><b>TM</b></sup>
                </TD>
        </TR>
        <TR>
                
                <TD WIDTH=780 valign=top >
                                <table bgcolor="#336699" WIDTH=780 ><tr ><td><span class=title>Updating supplier information</span></td><td align=right><a  href="asLogout.html"><span class=headwhite>Logout</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr></table>
                                <table WIDTH=780><tr ><td><script src='..\jscript\emenu.js'></script></td></tr></table>


<!-- $member_id = $_GET['id']; 
$results = mysql_query("select * from member where id = $member_id"); 
$row = mysql_fetch_assoc($results);  -->

<?php
$supplier_id = "";
if(isset($_GET['supplier_id'])){

$supplier_id = $_GET['supplier_id'];
}

//$CONS_Order = 1;
//$id= $_POST["id"];
//$supplier_id = $_POST['supplier_id'];
//$supplier_name= $_GET['supplier_name'];
//$supplier_type= $_GET['supplier_type'];
//$supplier_detail= $_GET['supplier_detail'];
//$website= $_GET['website'];
//$created_by = $_GET['created_by'];
//$created_date= $_GET['created_date'];
//$status= $_GET['status'];

 

//$sql="SELECT * from supplier_info where supplier_id= $supplier_id";
//$sql="INSERT INTO supplier_info(id,supplier_id,supplier_name,supplier_type,supplier_detail,website,created_by,created_date,status) VALUES ( '$id','$supplier_id','$supplier_name','$supplier_type','$supplier_detail','$website','$created_by','$created_date','$status')"; 

 //$rec=mysql_query($sql);
//$result = mysql_query("SELECT * from supplier_info where supplier_id= $supplier_id");
//$row=mysql_fetch_row($result);

$sql = "select * from supplier_info where pk_supplier_id='$supplier_id'";
$result = mysql_query($sql);      
       
       while($row=mysql_fetch_array($result))

	 { 
$supplier_id = $row['pk_supplier_id']; //use a ' instead of " 
$supplier_name = $row['supplier_name'];
$supplier_type = $row['supplier_type'];//use a ' instead of "
$supplier_detail = $row['supplier_detail'];
$website = $row['website'];
$created_by = $row['created_by'];
$created_date = $row['created_date'];
$status = $row['status'];
} //close this here.

?>





<!-- <input type="text" name="Name" value="<?php echo $Name; ?>">  -->
                                <table  align=center border=0>
								
                                <tr >
                                        <td><span class=caption>Supplier_id</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="supplier_id" value="<?php echo $supplier_id;?>" class="plain">  </td>
                                </tr>
                                <tr >
                                        <td><span class=caption>Supplier_name</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="supplier_name" value="<?php echo $supplier_name;?>" class="plain">  </td>
                                </tr>
								 <tr >
                                        <td><span class=caption>Supplier_type</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="supplier_type" value="<?php echo $supplier_type;?>" class="plain">  </td>
                                </tr>
								 <tr >
                                        <td><span class=caption>Supplier_Detail</span></td>
										<td><textarea name="supplier_detail" rows="3" cols="20" wrap="physical" class="plain"><?php echo $supplier_detail ?> </textarea>  </td>
                                        
                                </tr>
								<tr >
                                        <td><span class=caption>Website</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="website" value="<?php echo $website;?>" class="plain">  </td>
                                </tr>
                                
								<!-- <tr >
                                        <td><span class=caption>date supplied</span></td>
                                        <td><script>DateInput('orderdate', true, 'YYYY-MM-DD')</script>
										
										<!-- <INPUT  type="text" size="20" maxlength="50" name="datesupplied" class="plain">   </td>
                                </tr> -->

                                <tr >
                                        <td><span class=caption>Created_by</span></td>
										<td><INPUT  type="text" size="20" maxlength="50" name="created_by"  value="<?php echo $created_by;?>" class="plain">  </td>
                                        
                                </tr>
                                <tr >
                                        <td><span class=caption>Created_Date</span></td>
										<td><INPUT  type="text" size="20" maxlength="50" name="created_date" value="<?php echo $created_date;?>" class="plain">  </td>
                                </tr>
                                <!-- <tr >
                                        <td><span class=caption>Country</span></td>
                                        <td> <select name="country" class="plain"><option value="india"> INDIA </option><option value="Malaysia"> Malaysia </option></select></td>
                                </tr> -->
                                <tr >
                                        <td><span class=caption>Status</span></td>
                                        <td><input type="textbox" name="status" value="<?php echo $status;?>" class="plain">  </td>
                                </tr>
      </table>
	  <table align="center">
                                <tr>
								
                                        <!--<td align="center"><br><span class=caption><input Type=submit name=Submit value=Update class="plain">
                                         <input Type=button name=delete value=Delete class="plain">
                                        <input Type=reset name=reset value=Reset class="plain"></span></td> -->
 
<!-- onclick="javascript: deleteAlert('<?=$row['supplier_id'];?>');" -->

										<td align="center"><br><input Type="submit" name="submit" value="Delete" class="plain" onClick = "javascript: return confirm('Are you SURE want to delete the data?');">
										
                                        <input Type="reset" name="reset" value="Reset" class="plain"></span></td> 
										
                                </tr>
                           </table>     
								
                </TD>
        </TR>
        <TR>
                <TD COLSPAN=2 bgcolor=#EBEBEB class=copyrights align="center">
                        Copy Right All Right Reserved 2012
                </TD>
        </TR>

</TABLE>
	
</form>
	
</BODY>
</HTML>
