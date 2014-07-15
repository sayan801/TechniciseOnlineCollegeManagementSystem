<?php
session_start();
session_regenerate_id();
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "update login1 set count = 0, sid = 0 where tb = 0 ";
$result = $mysqli->query($query);
$query ="commit();";
$result = $mysqli->query($query);
$mysqli->close();
$URL="Galaxy.php"; 
header ("Location: $URL");
?>
<HTML>
<HEAD>




<TITLE>Marks Details</TITLE>

</head>

<body>
<body bgcolor="#FFFFCC">
<table class="main_body" width="100" align="center" border="1" cellpadding="0" cellspacing="0">

   <tbody><tr>

    <td align="left" valign="top"><table class="" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>
        <td width="210" align="left" valign="top"><img src="index_files/logo.jpg" alt="Logo" width="225" height="128">
        <td width=990" align="right" bgcolor="#4568" valign="top">
       <table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 <center><img src="index_files/logo1.jpg" alt="logo" width="550" height="128"></center>
         </td>
</tr> </tbody></table>           
          
<td width="100" align="left" valign="top"><img src="index_files/ugc.png" alt="glxy" width="225" height="128">

</tdiv>
    </tbody>

      </tr>

     </tbody></table></td>




  <tr>
    <td align="left" valign="top"><table class="main_body" width="1000" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>


        <td width="1000" align="left" height="0" valign="top">
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>

            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">

             <center> <tbody>
              <tr>
               <td colspan="30" class="line" align="left" valign="top"></td>

              </tr></center>



</HEAD>

<CENTER>

<body>

<td width="990" align="left" bgcolor="FFC35A" valign="top"><table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
</tbody>

<tr> 
</U></table>






</table>
</form>

</CENTER>
</BODY>
</HTML>