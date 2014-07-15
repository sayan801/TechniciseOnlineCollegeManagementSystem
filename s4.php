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




<TITLE>Marks Details</TITLE>

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


<br>
<div class="linkw" align="right"><A HREF = s8.php><img src="index_files/lgt.jpg" height="30" width="100"></A>&nbsp&nbsp&nbsp&nbsp&nbsp
</div>



<tr> 
</U></table>



<CENTER>


<img src="index_files/mdee.jpg" align="top" height="150" type="image" width="300">




<form name="myForm2" action="s5.php" method="post">
<table border="0">

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

<tr><td><b>Academic year:</b></td><td>
<input type="radio" name="part" value="part-1">Part-1 
<input type="radio" name="part" value="part-2">Part-2 
<input type="radio" name="part" value="part-3">Part-3</td></tr>

<TR><TD>
<tr><td> <B>Student Name: </B></td><td>
<INPUT TYPE ="TEXT" id="name" name="name" SIZE ="30" maxlength="40"></td></tr>

<br/><br/>
<tr><td><b>Enrolment No: </b></td><td>
<INPUT TYPE =TEXT id="e_no" name="e_no" SIZE =15 maxlength="20"></td></tr>

<TR><TD>
<tr><td> <B>Subject: </B></td><td>
<INPUT TYPE ="TEXT" id="sub" name="sub" SIZE ="30" maxlength="40"></td></tr>

<TR><TD>
<tr><td> <B>Exam Center: </B></td><td>
<INPUT TYPE ="TEXT" id="center" name="center" SIZE ="30" maxlength="40"></td></tr>

</TR>



<TR><TD>

</br>
</br>

</table>
<table>
<td>





<TR><center><table width="90%" cellpadding="1" cellspacing="1" Border="2" id="Table2"height="35".
<tr>
<td align="center" width="20" bgcolor="#98323"style="border":1px#c0c0c0 salid"><h5>Serial<br>No</h5></td>
<td align="center" width="50" bgcolor="#98323"style="border":1px#c0c0c0 salid"><h5>Subject<br>Code</h5></td>
<td align="center" width="150"bgcolor="gray"style="border":1px#c0c0c0 salid"><h4>Subjects</h4></td>
<td align="center" width="50" bgcolor="pink"style="border":1px#c0c0c0 salid"><h5>Assignment<br>Total<br>Marks</h5></TD>
<td align="center" width="50" bgcolor="pink"style="border":1px#c0c0c0 salid"><h5>Assignment<br>Marks<br>Obtain</h5></td>
<td align="center" width="50" bgcolor="lightgreen"style="border":1px#c0c0c0 salid"><h5>Practical<br>Total<br>Marks</h5></td>
<td align="center" width="50" bgcolor="lightgreen"style="border":1px#c0c0c0 salid"><h5>Practical<br>Marks<br>Obtain</h5></td>
<td align="center" width="50" bgcolor="lightblue"style="border":1px#c0c0c0 salid"><h5>Theory<br>Total<br>Marks</h5></td>
<td align="center" width="50" bgcolor="lightblue"style="border":1px#c0c0c0 salid"><h5>Theory<br>Marks<br>Obtain</h5></td>
<td align="center" width="70" bgcolor="#1075ad"style="border":1px#c0c0c0 salid"><h4>Total</h4></td>
<td align="center" width="80" bgcolor="gray"style="border":1px#c0c0c0 salid"><h4>Remarks</h4></td>


</tr></td>

<td align="center" bgcolor="blue"style="border":1px#c0c0c0 salid"><h5>1.</h5></TD>


<TD><center><INPUT TYPE =TEXT id="sc1"  name="sc1"  SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s1"  name="s1"  SIZE =30 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s11" name="s11" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s12" name="s12" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s13" name="s13" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s14" name="s14" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s15" name="s15" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s16" name="s16" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s17" name="s17" SIZE =10 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s18" name="s18" SIZE =10 ></center></TD>

<TR>
<td align="center" bgcolor="#1075ad"style="border":1px#c0c0c0 salid"><h5>2.</h5></TD>


<TD><center><INPUT TYPE =TEXT id="sc2"  name="sc2"  SIZE =5 ></center></TD>
<TD><center><h2><INPUT TYPE =TEXT id="s2"  name="s2"  SIZE =30 ></h2></center></TD>
<TD><center><INPUT TYPE =TEXT id="s21" name="s21" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s22" name="s22" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s23" name="s23" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s24" name="s24" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s25" name="s25" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s26" name="s26" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s27" name="s27" SIZE =10 ></center></TD>
<TD><center><h3><INPUT TYPE =TEXT id="s28" name="s28" SIZE =10 ></h3></center></TD>

<tr>

<td align="center" bgcolor="blue"style="border":1px#c0c0c0 salid"><h5>3.</h5></TD>




<TD><center><INPUT TYPE =TEXT id="sc3"  name="sc3"  SIZE =5 ></center></TD>
<TD><center><h2><INPUT TYPE =TEXT id="s3"  name="s3"  SIZE =30 ></h2></center></TD>
<TD><center><INPUT TYPE =TEXT id="s31" name="s31" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s32" name="s32" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s33" name="s33" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s34" name="s34" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s35" name="s35" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s36" name="s36" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s37" name="s37" SIZE =10 ></center></TD>
<TD><center><h3><INPUT TYPE =TEXT id="s38" name="s38" SIZE =10 ></h3></center></TD>

<TR>

<td align="center" bgcolor="#1075ad"style="border":1px#c0c0c0 salid"><h5>4.</h5></TD>



<TD><center><INPUT TYPE =TEXT id="sc4"  name="sc4"  SIZE =5 ></center></TD>
<TD><center><h2><INPUT TYPE =TEXT id="s4"  name="s4"  SIZE =30 ></h2></center></TD>
<TD><center><INPUT TYPE =TEXT id="s41" name="s41" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s42" name="s42" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s43" name="s43" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s44" name="s44" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s45" name="s45" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s46" name="s46" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s47" name="s47" SIZE =10 ></center></TD>
<TD><center><h3><INPUT TYPE =TEXT id="s48" name="s48" SIZE =10 ></h3></center></TD>
<TR>

<td align="center" bgcolor="blue"style="border":1px#c0c0c0 salid"><h5>5.</h5></TD>




<TD><center><INPUT TYPE =TEXT id="sc5"  name="sc5"  SIZE =5 ></center></TD>
<TD><center><h2><INPUT TYPE =TEXT id="s5"  name="s5"  SIZE =30 ></h2></center></TD>
<TD><center><INPUT TYPE =TEXT id="s51" name="s51" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s52" name="s52" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s53" name="s53" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s54" name="s54" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s55" name="s55" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s56" name="s56" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s57" name="s57" SIZE =10 ></center></TD>
<TD><center><h3><INPUT TYPE =TEXT id="s58" name="s58" SIZE =10 ></h3></center></TD>
<TR>

<td align="center" bgcolor="#1075ad"style="border":1px#c0c0c0 salid"><h5>6.</h5></TD>




<TD><center><INPUT TYPE =TEXT id="sc6"  name="sc6"  SIZE =5 ></center></TD>
<TD><center><h2><INPUT TYPE =TEXT id="s6"  name="s6"  SIZE =30 ></h2></center></TD>
<TD><center><INPUT TYPE =TEXT id="s61" name="s61" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s62" name="s62" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s63" name="s63" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s64" name="s64" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s65" name="s65" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s66" name="s66" SIZE =5 ></center></TD>
<TD><center><INPUT TYPE =TEXT id="s67" name="s67" SIZE =10 ></center></TD>
<TD><center><h3><INPUT TYPE =TEXT id="s68" name="s68" SIZE =10 ></h3></center></TD>
<TR>

</TR></table><BR>

<table>
<input type="button" value="<<Back" onclick="back();">&nbsp&nbsp&nbsp&nbsp<input type="Submit" value="Submit!">

</table>
</form>

</CENTER>
</BODY>
</HTML>