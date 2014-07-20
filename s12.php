<?php
$e_no=$_POST['e_no'];
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "SELECT sname from admt where e_no='$e_no'";
$result = $mysqli->query($query);
$ex=$mysqli->affected_rows;
$mysqli->close();
if($ex<=0)
{

$URL="s9.php"; 
header ("Location: $URL"); 
}

$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "SELECT ad_sl,exm,part,sname,fname,dob,e_no,center
,course,s1,s1d,s1t,s2,s2d,s2t,s3,s3d,s3t,s4,s4d,s4t,
s5,s5d,s5t,s6,s6d,s6t from admt where e_no='$e_no'";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($ad_sl,$exm,$part,$sname,$fname,$dob,$e_no,$center
,$course,$s1,$s1d,$s1t,$s2,$s2d,$s2t,$s3,$s3d,$s3t,$s4,$s4d,$s4t,
$s5,$s5d,$s5t,$s6,$s6d,$s6t) = $result->fetch_row();
$mysqli->close();
?>
<HTML>
<HEAD>
<TITLE>Admit Details</TITLE>

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
<br>
<CENTER>

<body>



<B>Sl_no:&nbsp;&nbsp;&nbsp;&nbsp;<?php printf("%s",$ad_sl); ?> </B>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<center>



<FONT COLOR="black">
<H1>
<B> Admit </B>


</CENTER></U>




</table>
<br>
<center>




<table border="0" width="50%">



<tr><td> Examination&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$exm); ?></B></td><td>
<tr><td>


<tr><td>Part   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php printf("%s",$part); ?></b></td><td>

<tr><td>
<tr><td> Student Name  &nbsp : &nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$sname); ?></B></td><td>



<tr><td>
<tr><td> Father's Name &nbsp  :&nbsp;&nbsp;&nbsp;&nbsp; <B><?php printf("%s",$fname); ?></B></td><td>


<tr><td>

<tr><td>Date Of Birth         





&nbsp;&nbsp;





:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php printf("%s",$dob); ?></b></td><td>



<tr><td>
<tr><td>Enrolment No&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php printf("%s",$e_no); ?> </b></td><td>

<tr><td>
<tr><td> Exam Center&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$center); ?></B></td><td>

<tr><td>
<tr><td> Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;<B><?php printf("%s",$course); ?></B></td><td>

</td></tr>







</table>
<br>
<table>
<td>


<TR><center><table width="70%" cellpadding="0" cellspacing="0" Border="1" id="Table2"height="35".
<tr>
<td align="center" width="15" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>Serial<br>No</h5></td>
<td align="center" width="150"bgcolor="white"style="border":1px#c0c0c0 salid"><h3>Subjects</h3></td>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h4>Date of Exam</h4></TD>
<td align="center" width="50" bgcolor="white"style="border":1px#c0c0c0 salid"><h4>Time</h4></td>





</tr></td>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>1.</h5></TD>

<TD><center><h3><?php printf("%s",$s1); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s1d); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s1t); ?></h3></center></TD>



<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>2.</h5></TD>


<TD><center><h3><?php printf("%s",$s2); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s2d); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s2t); ?></h3></center></TD>


<tr>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>3.</h5></TD>


<TD><center><h3><?php printf("%s",$s3); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s3d); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s3t); ?></h3></center></TD>


<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>4.</h5></TD>


<TD><center><h3><?php printf("%s",$s4); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s4d); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s4t); ?></h3></center></TD>


<tr>


<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>5.</h5></TD>


<TD><center><h3><?php printf("%s",$s5); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s5d); ?></h3></TD>
<TD><center><h3><?php printf("%s",$s5t); ?></h3></TD>



<tr>

<td align="center" bgcolor="white"style="border":1px#c0c0c0 salid"><h5>6.</h5></TD>



<TD><center><h3><?php printf("%s",$s6); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s6d); ?></h3></center></TD>
<TD><center><h3><?php printf("%s",$s6t); ?></h3></center></TD>


<tr>






</TR></table><BR>
<BR><BR><BR><BR>

</CENTER>
</BODY>
</HTML>