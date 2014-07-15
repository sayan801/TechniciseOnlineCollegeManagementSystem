<?php
$s = $_GET['s'];
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "select sid from login1 where tb=0 ";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($sid) = $result->fetch_row();
$mysqli->close();

$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "select count from login1 where tb=0 ";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($count) = $result->fetch_row();
$mysqli->close();
if($sid==$s&&$count==2)
{
$URL="s3.php?s=<?php echo $s ?>"; 
header ("Location: $URL");
}
?>
<HTML>
<HEAD>
<TITLE>Login Page</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252"><TITEL>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
<script language="javascript" src="vl1.js">
</script>
<script>
function back()
{
x=self.location.replace("Galaxy.php");
}
</script>


<body bgcolor="#FFFFCC">
<table class="main_body" width="900" align="center" border="0" cellpadding="0" cellspacing="0">

   <tbody><tr>

    <td align="left" valign="top"><table class="" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>
        <td width="220" align="left" valign="top"><img src="index_files/logo.jpg" alt="galaxy" width="230" height="128">
        <td width=990" align="left" bgcolor="#00f0f0" valign="top"><table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 

 <center><img src="index_files/LOGO1.jpg" alt="logo" width="556" height="128"></center>
         </td>
</tr> </tbody></table>

<td width="100" align="left" valign="top"><img src="index_files/UGC.png" alt="ugc" width="220" height="128">

</td>


    </tbody>

      </tr>

     </tbody></table></td>
  </tr>
 



</HEAD>

<CENTER>

<body>

<td width="990" align="center" bgcolor="FFC35A" valign="top"><table style="margin-top: 0px;" width="100%" border="0" cellpadding="10" cellspacing="0">
</tbody>
 

<br><br>

<body><font color="770000">
<img src="index_files/login.png" align="top" height="200" type="image" width="300" <br><br>
<br>


<b>Type Your Password</b>

<form name="myForm1" action="s2.php?s=<?php echo $s ?>" onsubmit="return validateForm();" method="post">
       <B> User Name </B></TD>
    <B>:</B><INPUT TYPE ="TEXT" id="name" name="name" SIZE ="30" maxlength="30"></td></TR>
  
  <br><br>

    <B>Password </B></TD>
    <B>:<B><INPUT TYPE ="password" id="pass" name="pass" SIZE ="30" maxlength="30"></TD></TR><br>
   
    <td class="header" align="center" valign="top">
<br>
<INPUT TYPE = "BUTTON" VALUE = "<<Back" onclick = back();>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                          &nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Submit" value="Login">
</form>
</center> 
<br><br><br><br>


       

</TABLE>
  


</HTML>
