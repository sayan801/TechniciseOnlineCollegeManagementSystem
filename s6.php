<?php
session_start ();
$s = session_id();
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "select sid from login1 where tb=0 ";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($sid) = $result->fetch_row();
$mysqli->close();
if($sid!=$s)
{
$URL="Galaxy.php"; 
header ("Location: $URL");
}
?>


<HTML>
<HEAD>
<script>
function back()
{
x=self.location.replace("s3.php");
}
</script>

<TITLE>Admit Details</TITLE>

</head>

<body>
<body bgcolor="#FFFFCC">
<table class="main_body" width="100" align="center" border="1" cellpadding="0" cellspacing="0">

   <tbody><tr>

    <td align="left" valign="top"><table class="" width="100%" align="center" border="0" cellpadding="0" cellspacing="0">

      <tbody><tr>
        <td width="210" align="left" valign="top"><img src="index_files/logo.jpg" alt="galaxy" width="225" height="128">
        <td width=990" align="right" bgcolor="#9848975" valign="top">
       <table style="margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
     
       <td class="style20  style12" style="padding-center: 50px;">

 <center><img src="index_files/LOGO1.jpg" alt="logo" width="543" height="128"></center>
         </td>
</tr> </tbody></table>           
          
<td width="100" align="left" valign="top"><img src="index_files/UGC.png" alt="ugc" width="225" height="128">

</td>

    </tbody>

      </tr>

     </tbody></table></td>




  <tr>
    <td align="left" valign="top"><table class="main_body" width="1000" border="0" cellpadding="0" cellspacing="0">

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

<CENTER>

<body>

<td width="990" align="left" bgcolor="FFC35A" valign="top"><table style="margin-top: 0px;" width="10%" border="0" cellpadding="0" cellspacing="0">
</tbody>

<br>

<form name="myForm3" action="s7.php" method="post">

<tr><td> &nbsp&nbsp&nbsp<B>Sl_no: </B></td><td>
<input type="text"  id="ad_sl" name="ad_sl" size="5" maxlength="10"></td></tr></table>

<CENTER>

<img src="index_files/adee.jpg" align="top" height="150" type="image" width="300">


<table border="0">



<TR><TD>
<tr><td> <B>Examination: </B></td><td>
<INPUT TYPE ="TEXT" id="exm" name="exm" SIZE ="10" maxlength="30"></td></tr>

<br><br>

<tr><td><b>Academic year:</b></td><td>
<input type="radio" name="part" value="part-1">Part-1 
<input type="radio" name="part" value="part-2">Part-2 
<input type="radio" name="part" value="part-3">Part-3</td></tr>

<TR><TD>
<tr><td> <B>Student Name: </B></td><td>
<INPUT TYPE ="TEXT" id="sname" name="sname" SIZE ="30" maxlength="40"></td></tr>


<TR><TD>
<tr><td> <B>Father's Name: </B></td><td>
<INPUT TYPE ="TEXT" id="fname" name="fname" SIZE ="30" maxlength="40"></td></tr>



<tr><td><b>Date Of Birth:</b></td><td><br>
<select name="date">

<option value="0" selected="selected">Date</option>

					<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
                </select>&nbsp;
<select name="month">

<option value="0" selected="selected">Month</option>

<option value="1">JAN</option>
<option value="2">FEB</option>
<option value="3">MAR</option>
<option value="4">APR</option>
<option value="5">MAY</option>
<option value="6">JUN</option>
<option value="7">JUL</option>
<option value="8">AUG</option>
<option value="9">SEP</option>
<option value="10">OCT</option>
<option value="11">NOV</option>
<option value="12">DEC</option>
</select>
&nbsp;<INPUT TYPE =text   id="year" name="year" SIZE =4 maxlength="6"><br><br>

<tr><td><b>Enrolment No: </b></td><td><input type="text" id="e_no" name="e_no" SIZE =15 maxlength="20"></td></tr>



<tr><td> <B>Exam Center: </B></td><td><input type="text" id="center" name="center" size="40"></td></tr>



<tr><td><b>Course:</b></td><td>
<select name="course">
<option value="0" selected="selected">Select</option>
<option value="B.A">B.A</option>
<option value="B.Sc">B.Sc</option>
<option value="B.Com">B.Com</option>
<option value="M.A">M.A </option>
<option value="M.Sc">M.Sc</option>
<option value="M.Com">M.Com</option>
</select>

<br><br>

</table>
<table>
<td>


<TR><center><table width="60%" cellpadding="0" cellspacing="0" Border="1" id="Table2"height="35".
<tr>
<td align="center" width="15" bgcolor="#9848975"style="border":1px#c0c0c0 salid"><h5>Serial<br>No</h5></td>
<td align="center" width="150"bgcolor="lightgreen"style="border":1px#c0c0c0 salid"><h4>Subjects</h4></td>
<td align="center" width="50" bgcolor="#9848975"style="border":1px#c0c0c0 salid"><h5>Date of Exam</h5></TD>
<td align="center" width="50" bgcolor="lightgreen"style="border":1px#c0c0c0 salid"><h5>Time</h5></td>





</tr></td>


<td align="center" bgcolor="pink"style="border":1px#c0c0c0 salid"><h5>1.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s1" name="s1" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s1d" name="s1d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s1t" name="s1t" SIZE =10 ></center></TD>

<tr>

<td align="center" bgcolor="lightyellow"style="border":1px#c0c0c0 salid"><h5>2.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s2" name="s2" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s2d" name="s2d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s2t" name="s2t" SIZE =10 ></center></TD>
<tr>


<td align="center" bgcolor="pink"style="border":1px#c0c0c0 salid"><h5>3.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s3" name="s3" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s3d" name="s3d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s3t" name="s3t" SIZE =10 ></center></TD>

<tr>

<td align="center" bgcolor="lightyellow"style="border":1px#c0c0c0 salid"><h5>4.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s4" name="s4" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s4d" name="s4d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s4t" name="s4t" SIZE =10 ></center></TD>

<tr>


<td align="center" bgcolor="pink"style="border":1px#c0c0c0 salid"><h5>5.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s5" name="s5" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s5d" name="s5d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s5t" name="s5t" SIZE =10 ></center></TD>

<tr>

<td align="center" bgcolor="lightyellow"style="border":1px#c0c0c0 salid"><h5>6.</h5></TD>

<TD><center><INPUT TYPE =TEXT id="s6" name="s6" SIZE =50 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s6d" name="s6d" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s6t" name="s6t" SIZE =10 ></center></TD>

<tr>






</TR></table><BR>

<table>

<input type="button" value="<<Back" onclick="back();">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="Submit" value="Submit!">
         
</table>

</form>
</CENTER>
<BR><BR>
</BODY>
</HTML>