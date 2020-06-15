<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<link rel="stylesheet" type="text/css" href="../css/activesales.css">
<link rel="stylesheet" type="text/css" href="../css/display.css">
<META name="GENERATOR" content="IBM WebSphere Page Designer V4.0 for Windows">
<META http-equiv="Content-Style-Type" content="text/css">
<title>Inventory Management</title>
<script type="text/javascript" src="calendarDateInput.js">

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script>

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

<form action="asDeleteProduct.php" method="post">
<TABLE width="780" border="0" cellpadding="0" cellspacing="0" style="page-break-before: always" valign="top">


        <TR >

                <TD  bgcolor=#B0C4DE   valign=top>
                        <IMG SRC="../images/Inventory.jpg"  ALT="Inventory.jpg" width="25%" height="50%" ALIGN=center  BORDER=0>
<b><font CLASS="css">&nbsp;Inventory</font><font CLASS="css1">Management</font></b><sup><b>TM</b></sup>
                </TD>
        </TR>
        <TR>

                <TD WIDTH=780 valign=top >
                                <table bgcolor="#336699" WIDTH=780 ><tr ><td><span class=title>Enter Project information</span></td><td align=right><a  href="asLogout.html"><span class=headwhite>Logout</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr></table>
                                <table WIDTH=780><tr ><td><script src='..\jscript\emenu.js'></script></td></tr></table>


<?php
$product_id = "";
if(isset($_GET['product_id'])){

$product_id = $_GET['product_id'];
}
$sql = "select * from product_info where product_id='$product_id'";
$result = mysql_query($sql);      
       
       while($row=mysql_fetch_array($result))

	 { 
$id = $row['id']; //use a ' instead of " 
$product_id = $row['product_id']; //use a ' instead of " 
$product_name = $row['product_name'];
$product_detail = $row['product_detail'];
$model = $row['model'];//use a ' instead of "
$material_type = $row['material_type'];
$quantity = $row['quantity'];
$calculation_unit = $row['calculation_unit'];
$current_rate = $row['current_rate'];
$created_by = $row['created_by'];
$created_date = $row['created_date'];
$status = $row['status'];
} //close this here.

?>

                                <table  align=center border=0>
								<tr >
                                        <td><span class=caption>id</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="id" value="<?php echo $id;?>" class="plain">  </td>
                                </tr> 

								<tr >
                                        <td><span class=caption>product_id</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="product_id" value="<?php echo $product_id;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>product_name</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="product_name" value="<?php echo $product_name;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>Product_detail</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="product_detail" value="<?php echo $product_detail;?>" class="plain">  </td>
                                </tr>
								<tr >
                                        <td><span class=caption>model</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="model" value="<?php echo $model;?>" class="plain">  </td>
                                </tr>
<tr >
                                        <td><span class=caption>material_type</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="material_type" value="<?php echo $material_type;?>" class="plain">  </td>
                                </tr>
<tr >
                                        <td><span class=caption>quantity</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="quantity" value="<?php echo $quantity;?>" class="plain">  </td>
                                </tr>


<tr >
                                        <td><span class=caption>calculation_unit</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="calculation_unit" value="<?php echo $calculation_unit;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>current_rate</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="current_rate" value="<?php echo $current_rate;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>created_by</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="created_by" value="<?php echo $created_by;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>created_date</span></td>
                                        <!-- <td><script>DateInput('orderdate', true, 'YYYY-MM-DD')</script><?php echo $created_date;?></td> -->
										
										<td><INPUT  type="text" size="20" maxlength="50" name="created_date" value="<?php echo $created_date;?>" class="plain">  </td> 
                                </tr>

<tr >
                                        <td><span class=caption>status</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" name="status" value="<?php echo $status;?>" class="plain">  </td>
                                </tr>

<tr >
                                        <td align=right><span class=caption><input Type=submit name=Submit value=Delete class="plain" onClick = "javascript: return confirm('Are you SURE want to delete the data?');"></span></td>
                                        <td><span class=caption><input Type=reset name=reset value=Reset class="plain"></span></td>
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
