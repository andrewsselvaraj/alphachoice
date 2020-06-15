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
<!-- <script type="text/javascript" src="form-validation.js"></script> -->
<!-- <script src="form-validation.js"></script> -->  
<script type="text/javascript" language="javascript" src="form_validation.js"></script>
<script type="text/javascript" language="JavaScript" src="myform.js"></script>
<!-- <script type="text/javascript">
function formValidate()
{
function validateSupplierid(supplier_id) {
    //var illegalChars = /\W/; // allow letters, numbers, and underscores
    var supplier_id = document.getElementById('supplier_id');
    if (supplier_id.value == "") 
		{
        alert ("Supplier ID is required!");
		return false;
        }  
    else
	{
    return true;
	}
}
function validateSuppliername(supplier_name) {
	var supplier_name = document.getElementById('supplier_name');
	var suplen=supplier_name.value;
	//var alphaExp = /^[a-zA-Z]+$/;
   var illegalChars = /\W/; // allow letters, numbers, and underscores
 
        if(supplier_name.value == "") 
		{
        alert ("Suppliername field is empty!");
        return false;
		}
	    if((suplen.length < 5)) 
		{
		alert ("The Suppliername is too short");
        return false;
		}
	   if(illegalChars.test(supplier_name.value))
		{
		alert ("Invalid Suppliername");
		return false;
		} 
else
	{
    return true;
	}
}
return true;
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

<form name="validform" action='asAddedSupplier.php' method='post' onSubmit="return valForm();">
<TABLE width="780" border="0" cellpadding="0" cellspacing="0" style="page-break-before: always" valign="top">


        <TR >

                <TD  bgcolor=#B0C4DE   valign=top>
                        <IMG SRC="../images/Inventory.jpg"  ALT="Inventory.jpg" width="25%" height="50%" ALIGN=center  BORDER=0>
<b><font CLASS="css">&nbsp;Inventory</font><font CLASS="css1">Management</font></b><sup><b>TM</b></sup>
                </TD>
        </TR>
        <TR>
                
                <TD WIDTH=780 valign=top >
                                <table bgcolor="#336699" WIDTH=780 ><tr ><td><span class=title>Adding customer information</span></td><td align=right><a  href="asLogout.html"><span class=headwhite>Logout</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr></table>
                                <table WIDTH=780><tr ><td><script src='..\jscript\emenu.js'></script></td></tr></table>

                                <table  align=center border=0>
								
                                        <td><span class=caption>ID</span></td>
                                        <td><INPUT  type="hidden" size="20" maxlength="50" name="id" class="plain">  </td>
                                
                                <tr >
                                        <td><span class=caption>Supplier_id</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="supplier_id" name="supplier_id" class="plain">  </td>
                                </tr>
                                <tr >
                                        <td><span class=caption>Supplier_name</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="supplier_name" name="supplier_name" class="plain">  </td>
                                </tr>
								 <tr >
                                        <td><span class=caption>Supplier_type</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="supplier_type" name="supplier_type" class="plain">  </td>
                                </tr>
								 <tr >
                                        <td><span class=caption>Supplier_Detail</span></td>
										<td><textarea id="supplier_detail" name="supplier_detail" class="plain"></textarea>  </td>
                                        
                                </tr>
								<tr >
                                        <td><span class=caption>Website</span></td>
                                        <td><INPUT  type="text" size="20" maxlength="50" id="website" name="website" class="plain">  </td>
                                </tr>
                                
								<!-- <tr >
                                        <td><span class=caption>date supplied</span></td>
                                        <td><script>DateInput('orderdate', true, 'YYYY-MM-DD')</script>
										
										<!-- <INPUT  type="text" size="20" maxlength="50" name="datesupplied" class="plain">   </td>
                                </tr> -->

                                <tr >
                                        <td><span class=caption>Created_by</span></td>
										<td><INPUT  type="text" size="20" maxlength="50" id="created_by" name="created_by" class="plain">  </td>
                                        
                                </tr>
                                <tr >
                                        <td><span class=caption>Created_Date</span></td>
										<td><INPUT  type="text" size="20" maxlength="50" id="created_date" name="created_date" class="plain">  </td>
                                </tr>
                                <!-- <tr >
                                        <td><span class=caption>Country</span></td>
                                        <td> <select name="country" class="plain"><option value="india"> INDIA </option><option value="Malaysia"> Malaysia </option></select></td>
                                </tr> -->
                                <tr >
                                        <td><span class=caption>Status</span></td>
                                        <td><input type=textbox  id="status" name="status" class="plain">  </td>
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

