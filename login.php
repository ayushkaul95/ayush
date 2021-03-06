<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['txtUserName'])) {
	$result = doLogin();
	
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>
<html>
<head>
<title>Complain Management System- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="include/main.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
</head>
<body style="
    margin: 0px;
">
<!-- <br/>
<br/> -->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox" style="height: 100%;">
 <tr > 
  <td class="test"><img src="images/complain1.jpg" width="100%" height="200px"></td>
 </tr>
 <tr class="contentArea" style="height: 100%;"> 
  <td style=""> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr > 
     <td > <form method="post" name="frmLogin" id="frmLogin">
       <p>&nbsp;</p>
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; User Login   </td>
        </tr>
        <tr class="login_box"> 
         <td > 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right"> User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="txtUserName" type="text" class="box" id="txtUserName"  size="30" maxlength="40"></td>
           </tr>
           <tr>
             <td align="right">Password</td>
             <td align="center">:</td>
             <td><input name="txtPassword" type="password" class="box" id="txtPassword" size="30" maxlength="40"></td>
           </tr>
           <tr> 
            <td width="100" align="right">User Type </td>
            <td width="10" align="center">:</td>
            <td><label>
              <select name="utype" class="box">
			  <option >&nbsp;&nbsp;--- Select User --- &nbsp;</option>
			  <option value="admin">&nbsp;&nbsp; Administrator &nbsp;</option>
			  <option value="customer">&nbsp;&nbsp; Customer &nbsp;</option>
			  <option value="employee">&nbsp;&nbsp; Authority &nbsp;</option>
              </select>
              </label></td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td><div align="left">New Customer <a href="register.php">Register Here</a> </div></td>
           </tr>
           <tr>
             <td colspan="3"style="padding-left: 40px;"><div align="center"><a href="forget-password.php">Forget Password</a> </div></td>
             </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td style="padding-left: 22px;"><input name="btnLogin" type="submit" id="btnLogin" value=" Login Now " style="font-size:14px;color:#0066FF;padding:5px 8px;"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <!-- <p>&nbsp;</p> -->
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>

</body>
</html>
