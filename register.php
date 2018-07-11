
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"> 

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
<script>
function validateForm()
{
var x=document.forms["rform"]["us"].value;
if (x==null || x=="")
  {
  alert("Mobile number must be filled out");
  return false;
  } 


var xc=document.forms["rform"]["ps"].value;
if (xc==null || xc=="")
  {
  alert("please select password");
  return false;
  } 

var xcv=document.forms["rform"]["psr"].value;
if (xcv==null || xcv=="")
  {
  alert("please select password");
  return false;
  } 
if (xcv != xc) { 
alert("Passwords do not match");
return false; } 

}
</script>
</head><body>
<div class="form-signin" name='rform' id='form3'><h2 class="form-signin-heading">Enter your mobile number and select a password.</h2><p>Password can be letters and numbers only, no spaces in username or password. password must be 6 or more characters</p>
<form onsubmit='return validateForm();' name='rform' action='reg.php' method='post'><table><tr><td>Mobile Number</td><td><input type='text' name='us' 'value='' /></td></tr><tr><td>Password..... </td><td><input type='password' name='ps'   value=''/></td></tr><tr><td>Repeat Password</td><td><input type='password' name='psr'   value=''/></td></tr><tr><td>Register... </td><td><button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Register</button></td></tr></table>By registering you agree to the terms and conditions as set out<a href='terms.php'>Here</a></form></div>