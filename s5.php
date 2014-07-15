<?php
$course = $_POST['course'];
$part = $_POST['part'];
$name = $_POST['name'];
$e_no = $_POST['e_no'];
$sub = $_POST['sub'];
$center = $_POST['center'];
$sc1 = $_POST['sc1'];
$s1 = $_POST['s1'];
$s11 = $_POST['s11'];
$s12 = $_POST['s12'];
$s13 = $_POST['s13'];
$s14 = $_POST['s14'];
$s15 = $_POST['s15'];
$s16 = $_POST['s16'];
$s17 = $_POST['s17'];
$s18 = $_POST['s18'];
$sc2 = $_POST['sc2'];
$s2 = $_POST['s2'];
$s21 = $_POST['s21'];
$s22 = $_POST['s22'];
$s23 = $_POST['s23'];
$s24 = $_POST['s24'];
$s25 = $_POST['s25'];
$s26 = $_POST['s26'];
$s27 = $_POST['s27'];
$s28 = $_POST['s28'];
$sc3 = $_POST['sc3'];
$s3 = $_POST['s3'];
$s31 = $_POST['s31'];
$s32 = $_POST['s32'];
$s33 = $_POST['s33'];
$s34 = $_POST['s34'];
$s35 = $_POST['s35'];
$s36 = $_POST['s36'];
$s37 = $_POST['s37'];
$s38 = $_POST['s38'];
$sc4 = $_POST['sc4'];
$s4 = $_POST['s4'];
$s41 = $_POST['s41'];
$s42 = $_POST['s42'];
$s43 = $_POST['s43'];
$s44 = $_POST['s44'];
$s45 = $_POST['s45'];
$s46 = $_POST['s46'];
$s47 = $_POST['s47'];
$s48 = $_POST['s48'];
$sc5 = $_POST['sc5'];
$s5 = $_POST['s5'];
$s51 = $_POST['s51'];
$s52 = $_POST['s52'];
$s53 = $_POST['s53'];
$s54 = $_POST['s54'];
$s55 = $_POST['s55'];
$s56 = $_POST['s56'];
$s57 = $_POST['s57'];
$s58 = $_POST['s58'];
$sc6 = $_POST['sc6'];
$s6 = $_POST['s6'];
$s61 = $_POST['s61'];
$s62 = $_POST['s62'];
$s63 = $_POST['s63'];
$s64 = $_POST['s64'];
$s65 = $_POST['s65'];
$s66 = $_POST['s66'];
$s67 = $_POST['s67'];
$s68 = $_POST['s68'];

$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "INSERT INTO mst SET course='$course',a_year='$part',s_name='$name',e_no='$e_no',
sub='$sub',e_ct='$center',sc1='$sc1',s1='$s1',s11='$s11',
s12='$s12',s13='$s13',s14='$s14',s15='$s15',s16='$s16',s17='$s17',s18='$s18',
sc2='$sc2',s2='$s2',
s21='$s21',s22='$s22',s23='$s23',s24='$s24',s25='$s25',
s26='$s26',s27='$s27',s28='$s28',sc3='$sc3',s3='$s3',s31='$s31',
s32='$s32',s33='$s33',s34='$s34',s35='$s35',s36='$s36',s37='$s37',s38='$s38',
sc4='$sc4',s4='$s4',
s41='$s41',s42='$s42',s43='$s43',s44='$s44',s45='$s45',
s46='$s46',s47='$s47',s48='$s48',sc5='$sc5',s5='$s5',s51='$s51',
s52='$s52',s53='$s53',s54='$s54',s55='$s55',s56='$s56',s57='$s57',s58='$s58',
sc6='$sc6',s6='$s6',
s61='$s61',s62='$s62',s63='$s63',s64='$s64',s65='$s65',
s66='$s66',s67='$s67',s68='$s68'";
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
        <td width="210" align="left" valign="top"><img src="index_files/logo.jpg" alt="galaxy" width="225" height="128">
        <td width=990" align="right" bgcolor="lightyellow" valign="top">
       <table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 <center><img src="index_files/LOGO1.jpg" alt="logo" width="550" height="128"></center>
         </td>
</tr> </tbody></table> 

<td width="100" align="left" valign="top"><img src="index_files/UGC.png" alt="ugc" width="225" height="128">

</tdiv>
    </tbody>

      </tr>

     </tbody></table></td>


  <tr>
    <td align="left" valign="top"><table class="main_body" width="1000" border="0" cellpadding="0" cellspacing="0">

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
<div class="linkw" align="right"><A HREF = s8.php><img src="index_files/lgt.jpg" height="30" width="100"></A>

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