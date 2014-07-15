<?php
$e_no=$_POST['e_no'];
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "SELECT s_name from mst where e_no='$e_no'";
$result = $mysqli->query($query);
$ex=$mysqli->affected_rows;
$mysqli->close();
if($ex<=0)
{
$URL="s10.php"; 
header ("Location: $URL"); 
}
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "SELECT course,a_year,s_name,e_no,sub,e_ct,

sc1,s1,s11,s12,s13,s14,s15,s16,s17,s18,

sc2,s2,s21,s22,s23,s24,s25,s26,s27,s28,

sc3,s3,s31,s32,s33,s34,s35,s36,s37,s38,

sc4,s4,s41,s42,s43,s44,s45,s46,s47,s48,

sc5,s5,s51,s52,s53,s54,s55,s56,s57,s58,

sc6,s6,s61,s62,s63,s64,s65,s66,s67,s68
 
from mst where e_no='$e_no'";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($course,$a_year,$s_name,$e_no,$sub,$e_ct,
$sc1,$s1,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,
$sc2,$s2,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,
$sc3,$s3,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,
$sc4,$s4,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,
$sc5,$s5,$s51,$s52,$s53,$s54,$s55,$s56,$s57,$s58,
$sc6,$s6,$s61,$s62,$s63,$s64,$s65,$s66,$s67,$s68) = $result->fetch_row();
$mysqli->close();
?>

<HTML>
<HEAD>
<TITLE>Marksheet Details</TITLE>

</head>

<body>
<body bgcolor="white">
<table class="main_body" width="100" align="center" border="1" cellpadding="0" cellspacing="0">

   <tbody><tr>

    <td align="left" valign="top"><table class="" width="50%" align="center" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>
        <td width="210" align="left" valign="top">
   
       <table style="margin-top: 10px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 <center><img src="index_files/log.jpg" alt="logo" width="900" height="140"></center>
         </td>
</tr> </tbody></table>           
          
<td width="100" align="left" valign="top">

</td>

    </tbody>

      </tr>

     </tbody></table></td>




  <tr>
    <td align="left" valign="top"><table class="main_body" width="900" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>


        <td width="100" align="left" height="10" valign="top">
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>

            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">

             <center> <tbody>
              <tr>
               <td colspan="30" class="line" align="left" valign="top"></td>

              </tr></center>




</HEAD>
<br><br>
<CENTER>

<body>

<td width="990" align="center" bgcolor="white" valign="top"><table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
</tbody>

<tr> 
<FONT COLOR="black">
<H1>
<B> Marksheet </B></CENTER></U></table>


<center>

<form>


<table border="0" width="50%">


<tr><td> Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$course); ?></B></td><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>Part   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$a_year); ?></b></td><td>

<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td> Student Name  &nbsp :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$s_name); ?></B></td><td>




<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>Enrolment No&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$e_no); ?></b></td><td>



<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td> Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$sub); ?></B></td><td>


<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td>
<tr><td> Exam Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$e_ct); ?> </B></td><td>


</td></tr>




<br><br>

</table>


<br>

<table>
<td>


<TR><center><table width="90%"  cellpadding="0" cellspacing="0" Border="1" id="Table2"height="400".
<tr>
<td align="center" width="20" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Serial<br>No</h5></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Subject<br>Code</h5></td>
<td align="center" width="150"bgcolor="white"style="border":1px#c0c0c0 salid"><h3>Subjects</h3></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h4>Assignment<br>Total<br>Marks</h4></TD>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Assignment<br>Marks<br>Obtain</h5></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h4>Practical<br>Total<br>Marks</h4></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Practical<br>Marks<br>Obtain</h5></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h4>Theory<br>Total<br>Marks</h4></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Theory<br>Marks<br>Obtain</h5></td>
<td align="center" width="70" bgcolor="white"style="border":1px#c0c0c0 salid"><h3>Total</h3></td>
<td align="center" width="80" bgcolor="white"style="border":1px#c0c0c0 salid"><h3>Remarks</h3></td>



</tr></td>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>1.</h5></TD>
<TD><center><?php printf("%s",$sc1); ?></center></TD>
<TD><center><?php printf("%s",$s1); ?></center></TD>
<TD><center><?php printf("%s",$s11); ?></center></TD>
<TD><center><?php printf("%s",$s12); ?></center></TD>
<TD><center><?php printf("%s",$s13); ?></center></TD>
<TD><center><?php printf("%s",$s14); ?></center></TD>
<TD><center><?php printf("%s",$s15); ?></center></TD>
<TD><center><?php printf("%s",$s16); ?></center></TD>
<TD><center><?php printf("%s",$s17); ?></center></TD>
<TD><center><?php printf("%s",$s18); ?></center></TD>



<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>2.</h5></TD>

<TD><center><?php printf("%s",$sc2); ?></center></TD>
<TD><center><?php printf("%s",$s2); ?></center></TD>
<TD><center><?php printf("%s",$s21); ?></center></TD>
<TD><center><?php printf("%s",$s22); ?></center></TD>
<TD><center><?php printf("%s",$s23); ?></center></TD>
<TD><center><?php printf("%s",$s24); ?></center></TD>
<TD><center><?php printf("%s",$s25); ?></center></TD>
<TD><center><?php printf("%s",$s26); ?></center></TD>
<TD><center><?php printf("%s",$s27); ?></center></TD>
<TD><center><?php printf("%s",$s28); ?></center></TD>



<tr>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>3.</h5></TD>

<TD><center><?php printf("%s",$sc3); ?></center></TD>
<TD><center><?php printf("%s",$s3); ?></center></TD>
<TD><center><?php printf("%s",$s31); ?></center></TD>
<TD><center><?php printf("%s",$s32); ?></center></TD>
<TD><center><?php printf("%s",$s33); ?></center></TD>
<TD><center><?php printf("%s",$s34); ?></center></TD>
<TD><center><?php printf("%s",$s35); ?></center></TD>
<TD><center><?php printf("%s",$s36); ?></center></TD>
<TD><center><?php printf("%s",$s37); ?></center></TD>
<TD><center><?php printf("%s",$s38); ?></center></TD>





<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>4.</h5></TD>

<TD><center><?php printf("%s",$sc4); ?></center></TD>
<TD><center><?php printf("%s",$s4); ?></center></TD>
<TD><center><?php printf("%s",$s41); ?></center></TD>
<TD><center><?php printf("%s",$s42); ?></center></TD>
<TD><center><?php printf("%s",$s43); ?></center></TD>
<TD><center><?php printf("%s",$s44); ?></center></TD>
<TD><center><?php printf("%s",$s45); ?></center></TD>
<TD><center><?php printf("%s",$s46); ?></center></TD>
<TD><center><?php printf("%s",$s47); ?></center></TD>
<TD><center><?php printf("%s",$s48); ?></center></TD>



<tr>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>5.</h5></TD>

<TD><center><?php printf("%s",$sc5); ?></center></TD>
<TD><center><?php printf("%s",$s5); ?></center></TD>
<TD><center><?php printf("%s",$s51); ?></center></TD>
<TD><center><?php printf("%s",$s52); ?></center></TD>
<TD><center><?php printf("%s",$s53); ?></center></TD>
<TD><center><?php printf("%s",$s54); ?></center></TD>
<TD><center><?php printf("%s",$s55); ?></center></TD>
<TD><center><?php printf("%s",$s56); ?></center></TD>
<TD><center><?php printf("%s",$s57); ?></center></TD>
<TD><center><?php printf("%s",$s58); ?></center></TD>



<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>6.</h5></TD>

<TD><center><?php printf("%s",$sc6); ?></center></TD>
<TD><center><?php printf("%s",$s6); ?></center></TD>
<TD><center><?php printf("%s",$s61); ?></center></TD>
<TD><center><?php printf("%s",$s62); ?></center></TD>
<TD><center><?php printf("%s",$s63); ?></center></TD>
<TD><center><?php printf("%s",$s64); ?></center></TD>
<TD><center><?php printf("%s",$s65); ?></center></TD>
<TD><center><?php printf("%s",$s66); ?></center></TD>
<TD><center><?php printf("%s",$s67); ?></center></TD>
<TD><center><?php printf("%s",$s68); ?></center></TD>



<tr>

</form>




</TR></table><BR>

<br><br><br><br>

</CENTER>
</BODY>
</HTML>

