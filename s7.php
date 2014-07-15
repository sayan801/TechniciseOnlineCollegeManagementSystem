<?php
$ad_sl = $_POST['ad_sl'];
$exm = $_POST['exm'];
$part = $_POST['part'];
$sname = $_POST['sname'];
$fname = $_POST['fname'];
$dt = $_POST['date'];
$mt = $_POST['month'];
$yr = $_POST['year'];
$e_no = $_POST['e_no'];
$center = $_POST['center'];
$course = $_POST['course'];
$s1 = $_POST['s1'];
$s1d = $_POST['s1d'];
$s1t = $_POST['s1t'];
$s2 = $_POST['s2'];
$s2d = $_POST['s2d'];
$s2t = $_POST['s2t'];
$s3 = $_POST['s3'];
$s3d = $_POST['s3d'];
$s3t = $_POST['s3t'];
$s4 = $_POST['s4'];
$s4d = $_POST['s4d'];
$s4t = $_POST['s4t'];
$s5 = $_POST['s5'];
$s5d = $_POST['s5d'];
$s5t = $_POST['s5t'];
$s6 = $_POST['s6'];
$s6d = $_POST['s6d'];
$s6t = $_POST['s6t'];


$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "INSERT INTO admt SET ad_sl='$ad_sl',exm='$exm',part='$part',sname='$sname',fname='$fname',
dob='$dt-$mt-$yr',e_no='$e_no',center='$center',course='$course',
s1='$s1',s1d='$s1d',s1t='$s1t',s2='$s2',s2d='$s2d',s2t='$s2t',s3='$s3',
s3d='$s3d',
s3t='$s3t',s4='$s4',s4d='$s4d',s4t='$s4t',s5='$s5',
s5d='$s5d',s5t='$s5t',s6='$s6',s6d='$s6d',s6t='$s6t'";
$result = $mysqli->query($query);
$query ="commit();";
$result = $mysqli->query($query);
$mysqli->close();
?>

<HTML>
<HEAD>
<script>
function back()
{
x=self.location.replace("s4.php");
}
function home()
{
x=self.location.replace("s3.php");
}
</script>


<TITLE>Marks Details</TITLE>

</head>

<body>
<body bgcolor="#FFFFCC">


<table class="main_body" width="80" align="center" border="1" cellpadding="0" cellspacing="0">

   <tbody><tr>

    <td align="left" valign="top"><table class="" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>
        <td width="210" align="left" valign="top"><img src="index_files/logo.jpg" alt="Logo" width="225" height="128">
        <td width=990" align="right" bgcolor="lightyellow" valign="top">
       <table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 <center><img src="index_files/LOGO1.jpg" alt="logo" width="543" height="128"></center>
         </td>
</tr> </tbody></table> 

<td width="100" align="left" valign="top"><img src="index_files/UGC.png" alt="ugc" width="225" height="128">

</tdiv>
    </tbody>

      </tr>

     </tbody></table></td>


  <tr>
    <td align="left" valign="top"><table class="main_body" width="993" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>


        <td width="900" align="left" height="0" valign="top">
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>

            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">

             <center> <tbody>
              <tr>
               <td colspan="30" class="line" align="left" valign="top"></td>

              </tr></center>

</HEAD>



<body>

<td width="990" align="left" bgcolor="FFC35A" valign="top"><table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
</tbody>
<br>

<div class="linkw" align="right"><A HREF = s8.php><img src="index_files/lgt.jpg" height="40" width="70"></A>
&nbsp&nbsp&nbsp&nbsp&nbsp
</div>



<tr> 
</U></table>
<br><br><br><br><br>
 <CENTER>         

<img src="index_files/thn.gif" align="top" height="150" type="image" width="350">
<br>
<font color="#660066"><b><h2>Data Successfully Added</b></h2><br><br>

<table>
<input type="button" value="<=Home" onclick="home();">&nbsp&nbsp&nbsp<input type="button" value="Resubmit=>" onclick="back();">

</table>
</form>
<br><br><br><br><br>
</CENTER>
</BODY>
</HTML>