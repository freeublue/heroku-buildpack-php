<?
require "style.php";
?>

<!DOCTYPE HTML><html><head>
<title>User Project</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<a class='logo' href="index.php">AddUser</a>
<a class='logo' href="tables.php">SelectJS</a>
<a class='logo' href="selectphp.php">SelectPHP</a>
<a class='logo' href="byname.php">Byname</a>
<a class='logo' href="byage.php">ByAge</a>
<a class='logo' href="bymobile.php">Bymobile</a>
<a class='logo' href="byemail.php">Byemail</a><br /><hr>
<script>
function validateForm()
{
var x=document.forms["rform"]["name"].value;
if (x==null || x=="")
{
alert("Name must be filled out");
return false;
} 


var xc=document.forms["rform"]["surname"].value;
if (xc==null || xc=="")
{
alert("Surname must be supplied");
return false;
} 

var xc2=document.forms["rform"]["mobile"].value;
if (xc2==null || xc2=="")
{
alert("Mobile number must be supplied");
return false;
} 



var xc22=document.forms["rform"]["email"].value;
if (xc22==null || xc22=="")
{
alert("Email Address must be supplied");
return false;
} 
var xc3=document.forms["rform"]["birthdate"].value;
if (xc3==null || xc3=="")
{
alert("Day of Birth must be supplied");
return false;
} 

} 
</script><style>

body, input, select, textarea {
		color: #9a9a9a;
		font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;} 
input, textarea { 
    padding: 9px; 
    border: solid 1px #E5E5E5; 
    outline: 0; 
    font: normal 13px/100% Verdana, Tahoma, sans-serif; 
    width: 200px; 
    background: #FFFFFF left top repeat-x; 
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    } 
   
textarea { 
    width: 400px; 
    max-width: 400px; 
    height: 150px; 
    line-height: 150%; 
    } 
   
input:hover, textarea:hover, 
input:focus, textarea:focus { 
    border-color: #C9C9C9; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px; 
    } 
   
label { 
    margin-left: 10px; 
    color: #999999; 
    } 

form{background:blue;
padding:30px;
width:400px;
border:gray dotted 1px;
border-radius:15%;
font-size:20px;
background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
}
</style>

<?php
include 'lib.php';
$name = "name";
$surname = "surname";
$mobile= "mobile";
$email = "email";
$birthdate = "birthdate";

if(!isset($_POST[submit])) { 
echo "<h1>User.</h2>";
echo "<form action='$_SERVER[PHP_SELF]' name='rform' onsubmit='return validateForm();' method='post'>";
echo "<h2>Complete Your Profile.</h2>";
echo "<b>First Name</b></br >";
text($name);
echo "<br /><b>Surname</b></br >";
text($surname);

echo "<br /><b>Cellphone Number</b></br >";
text($mobile);

echo "<br /><b>Email Address</b></br >";
text($email);
echo "<br /><b>Date of Birth </b></br>";
echo "<input type='date' name='$birthdate' />";


foreach(range(1, 16) as $f){ 
echo "<option value='$f'>$f</option>";
} 
echo "</select><br />";
include "Robochkr.php";
echo "<br /><input type='submit' style='background:black;height:50px;color:white;font-size:25px;' name='submit' value='submit' />";
echo "</form>";
} else {

if(EMPTY($_POST["chkhuman"]) ) { 
echo "please add the Robot checker sum";
} 
elseif($_POST["chk"] != $_POST["chkhuman"]) { 
echo "That is incorrect, please try again"; } 
elseif(EMPTY($_POST["name"]) ) { 
echo "Name must be supplied"; } 
elseif(EMPTY($_POST["surname"]) ) { 
echo "Surname must be supplied"; } 
elseif(EMPTY($_POST["birthdate"]) ) { 
echo "birthdate must be supplied"; } 
elseif(EMPTY($_POST["email"]) ) { 
echo "Email must be supplied"; } 
elseif((filter_var($_POST[email], FILTER_VALIDATE_EMAIL) != true)) { 
echo "Email is in the incorrect format"; } 

elseif(EMPTY($_POST["mobile"]) ) { 
echo "Mobile number supplied"; } 
elseif(strlen($_POST['mobile']) != 10) {
echo "mobile number is not 10 numbers long"; }
 elseif (preg_replace("/[^0-9]/", "", $_POST['mobile']) != $_POST['mobile']) {
            echo "Mobile may be numbers only";
        } 

else { 
 
$afname = strip_tags(htmlentities($_POST["name"]));
$alname = strip_tags(htmlentities($_POST["surname"]));
$amobileno = strip_tags(htmlentities($_POST["mobile"]));
$bdate = trim($_POST["birthdate"]);
$emm = trim($_POST["email"]);
$ema = filter_var($emm, FILTER_SANITIZE_EMAIL);
$day = date("Y-m-d H:i:s");
require "con.php";
$sql = "INSERT INTO users (name, surname, mobile, email, birthdate, ins_time) VALUES (?,?,?,?,?,?)";
$pdo->prepare($sql)->execute([$afname, $alname, $amobileno, $ema, $bdate, $day]);
echo "<a href='index.php'>Record added go back and add another</a>";
 } } 

?>



