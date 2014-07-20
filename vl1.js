function validateForm()
{
var n=document.forms["myForm1"]["name"].value;
var o=document.forms["myForm1"]["pass"].value;

if (n==null || n=="" || n==" ")
  {
  alert("Name must be filled out");
  return false;
  }
if (o==null || o=="" || o==" ")
  {
  alert("Password must be filled out");
  return false;
  }


}