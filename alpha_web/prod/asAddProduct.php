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
<script type="text/javascript" language="javascript" src="product_validation.js"></script>
<script type="text/javascript" language="JavaScript" src="productform.js"></script>
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

<form name="validform" action="asAddedProduct.php" method="post" onSubmit="return valForm();">
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

                                <table  align=center border=0>
								
								<tr >
                                        <td><span class=caption>product_id</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="product_id" name="product_id" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>product_name</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="product_name" name="product_name" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>Product_detail</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="product_detail" name="product_detail" class="plain">  </td>
                                </tr>
								<tr >
                                        <td><span class=caption>model</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="model" name="model" class="plain">  </td>
                                </tr>
<tr >
                                        <td><span class=caption>material_type</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="material_type" name="material_type" class="plain">  </td>
                                </tr>
<tr >
                                        <td><span class=caption>quantity</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="quantity" name="quantity" class="plain">  </td>
                                </tr>


<tr >
                                        <td><span class=caption>calculation_unit</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="calculation_unit" name="calculation_unit" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>current_rate</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="current_rate" name="current_rate" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>created_by</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="created_by" name="created_by" class="plain">  </td>
                                </tr>

<tr >
                                        <td><span class=caption>created_date</span></td>
                                        <td><script>DateInput('orderdate', true, 'YYYY-MM-DD')</script>
										
										<!-- <INPUT  type="text" size="20" maxlength="50" name="created_date" class="plain"> -->  </td>
                                </tr>

<tr >
                                        <td><span class=caption>status</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="status" name="status" class="plain">  </td>
                                </tr>

<tr >
                                        <td align=right><span class=caption><input Type=submit name=Submit value=Submit class="plain"></span></td>
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
