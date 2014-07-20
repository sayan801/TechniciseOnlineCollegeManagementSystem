<?php
$s = $_GET['s'];
$name1=$_POST['name'];
$pass1=$_POST['pass'];
function result()
{
global $s;
global $name1;
global $pass1;
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "select user from login where pass=$pass1 ";
$result = $mysqli->query($query);
$no=$mysqli->affected_rows;
$mysqli->close();
if($no<=0)
{
printf("<h2><BLINK>You have supplied a wrong username or password</BLINK><h2>");
include ('s1.php');
}
else
{
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "select user from login where pass='$pass1' ";
$result = $mysqli->query($query, MYSQLI_STORE_RESULT);
list($pas) = $result->fetch_row();
$mysqli->close();
if($name1!=$pas)



{
printf("<h2>You have supplied a wrong username or password</h2>");
include ('s1.php');

}





else
{
$mysqli = new mysqli('localhost', 'root', '', 'sd');
$query = "update login1 set count = 2, sid = '$s' where tb = 0 ";
$result = $mysqli->query($query);
$query ="commit();";
$result = $mysqli->query($query);
$mysqli->close();
include ('s3.php');
}
}
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





<CENTER><BODY bgColor="#FFFFCC">

  <BODY>


<?php result(); ?>




 


</HTML>
