<?php
session_start();
$foo = $_SERVER[SERVER_NAME];
echo "$foo";
if($foo === 'laundrybymagic.herokuapp.com') { 
include "lib.php";
include "config.php";
if(isset($_SESSION[customer]) ) { 
$customer = $_SESSION[customer];
echo "$customer<br />";
$us = base64_encode(numm($customer));
$sqlc = "SELECT * FROM cust WHERE cu_phone_mobile = '$us'";
$res = mysqli_query($conn, $sqlc);
while($row = mysqli_fetch_assoc($res) ) { 
$newcustid = $row[cu_id];
 
$sp_fname ='cu_fname';
$pl_fname ='First Name';
$sp_lname ='cu_lname';
$pl_lname = 'Surname';
$sp_contacttitle = 'cu_contact_title';
$pl_contacttitle = 'Contact title eg:Mrs';
$sp_email = 'cu_email';
$pl_email = 'Email';
$sp_address_streetnum = 'cu_address_streetnum';
$pl_streetnum = 'Street number';
$sp_address_streetname = 'cu_address_streetname';
$pl_streetname = 'Street Name';
$sp_address_buildingnum = 'cu_address_buildingnum';
$pl_buildingnum = 'Building or Unit number';
$sp_address_buildingname = 'cu_address_buildingname';

$pl_buildingname = 'Building or development name';
$sp_address_suburb = 'cu_address_suburb';
$pl_suburb = 'Suburb';
$sp_address_town = 'cu_address_town';
$pl_town = 'City or Town';
$sp_address_province = 'cu_address_province';

$sp_address_postalcode = 'cu_address_postalcode';
$pl_postalcode = 'Postal Code';

$sp_phone_land = 'cu_phone_land';
$pl_phone_land = 'Alternate phone number';



$sp_descp = 'cu_descp';
$r = 20;
$c= 20;



$sp_newsletter = 'cu_newsletter';
$submitvalue = 'Add Customer'; 


$sp_newsletter = 'cu_newsletter';
$submitvalue = 'Add Customer'; 
$spx_fname = base64_decode($row[cu_fname]); 
$spx_lname = base64_decode($row[cu_lname]);
$spx_contacttitle = base64_decode($row[cu_contact_title]);
$spx_email = base64_decode($row[cu_email]);
$spx_address_streetnum = $row[cu_address_streetnum];
$spx_address_streetname = base64_decode($row[cu_address_streetname]);
$spx_address_buildingnum = $row[cu_address_buildingnum];
$spx_address_buildingname = base64_decode($row[cu_address_buildingname]);
$spx_address_suburb = base64_decode($row[cu_address_suburb]);
$spx_address_town = base64_decode($row[cu_address_town]);
$spx_address_province = base64_decode($row[cu_address_province]);
$spx_address_postalcode = base64_decode($row[cu_address_postalcode]);
$spx_address_town = base64_decode($row[cu_address_town]);

$spx_phone_land = nummr(base64_decode($row[cu_phone_land]));
$spx_phone_mobile = nummr(base64_decode($row[cu_phone_mobile])); } 

if(!isset($_POST["submit"]) ) { 
echo "<form onsubmit='return validateForm();' name='rform' action='$_SERVER[PHP_SELF]' method='post'>";
echo "<h2>Add Your Delivery Profile</h2>";
echo "<br /><b>Customer First Name</b><br />";
echo "<input type='text' value='$spx_fname' placeholder='First Name' name='cu_fname' />";
echo "<br /><b>Customer Last Name</b><br />";
echo "<input type='text' value='$spx_lname' placeholder='Surname' name='cu_lname' />";

echo "<br /><b>Customer Contact Title</b><br />";
echo "<input type='text' value='$spx_contacttitle' placeholder='Contact Title' name='cu_contact_title' />";
echo "<br /><b>Customer Email</b><br />";
echo "<input type='text' value='$spx_email' placeholder='email' name='cu_email' />";
echo "<br /><b>CustomerStreet Number</b><br />";
textv($sp_address_streetnum, $spx_address_streetnum, $pl_streetnum);
echo "<br /><b>Customer Street Name</b><br />";
textv($sp_address_streetname, $spx_address_streetname, $pl_streetname);
echo "<br /><b>Customer Building Number</b><br />";
textv($sp_address_buildingnum, $spx_address_buildingnum, $pl_buildingnum);
echo "<br /><b>Customer Building Name</b><br />";
textv($sp_address_buildingname, $spx_address_buildingname, $pl_buildingname);
echo "<br /><b>Customer Suburb</b><br />";
textv($sp_address_suburb, $spx_address_suburb, $pl_suburb);
echo "<br /><b>Customer Town</b><br />";
textv($sp_address_town, $spx_address_town, $pl_town);
echo "<br /><b>Customer Province</b><br />";
echo "<select name='$sp_address_province'>";
echo "<option value='Gauteng'>Gauteng</option>";
echo "<option value='Eastern_Cape'>Eastern Cape</option>";
echo "<option value='Free_State'>Free State</option>";
echo "<option value='Kwazulu_Natal'>Kwazulu Natal</option>";
echo "<option value='Limpopo'>Limpopo</option>";
echo "<option value='Mpumalanga'>Mpumalanga</option>";
echo "<option value='Northern_Cape'>Northern Cape</option>";
echo "<option value='North_West'>North West</option>";
echo "<option value='Western_Cape'>Western Cape</option>";
echo "</select><br />";
echo "<br /><b>Customer Postalcode</b><br />";
textv ($sp_address_postalcode, $spx_address_postalcode, $pl_postalcode);
echo "<br /><b>Customer Phone Number Landline</b><br />";
textv($sp_phone_land, $spx_phone_land, $pl_phone_land);


echo "<input type='hidden' name='cust' value='$newcustid' />";
echo "<br /><b>Newsletter Preference</b><br />";
echo "<select name='cu_newsletter'>
<option value='y'>Yes</option><option value='n'>No</option></select>";




echo "<br /><input type='submit' name='submit' class='submit' value='$submitvalue' /></form>";
echo "<a href='ypage.php'>Return to account</a><br />"; } else {  


if(EMPTY($_POST[cu_fname]) ) { 
echo "Please supply first name"; } 
elseif(EMPTY($_POST[cu_lname]) ) { 
echo "Please supply surname"; } 
if(EMPTY($_POST[cu_email]) ) { 
echo "Please supply an email address so that we can contact you"; } 
if(EMPTY($_POST[cu_address_streetnum]) ) { 
echo "Please supply street number"; } 
if(EMPTY($_POST[cu_address_streetname]) ) { 
echo "Please supply street name"; } 
if(EMPTY($_POST[cu_address_suburb]) ) { 
echo "Please supply suburb name"; } 
if(EMPTY($_POST[cu_address_town]) ) { 
echo "Please supply town name"; } 
if(EMPTY($_POST[cu_address_province]) ) { 
echo "Please supply province name"; } 
if(EMPTY($_POST[cu_address_postalcode]) ) { 
echo "Please supply postal code"; } 
else { 

$sp_fname =  (($_POST['cu_fname']));
$sp_lname =  (($_POST['cu_lname']));
$cust = ($_POST['cust']);
$sp_contacttitle = ($_POST['cu_contact_title']);
$sp_email = ($_POST['cu_email']);
$sp_address_streetnum = ($_POST['cu_address_streetnum']);
$sp_address_streetname = ($_POST['cu_address_streetname']);
$sp_address_buildingnum = ($_POST['cu_address_buildingnum']);
$sp_address_buildingname = ($_POST['cu_address_buildingname']);
$sp_address_suburb = ($_POST['cu_address_suburb']);
$sp_address_town= ($_POST['cu_address_town']);
$sp_address_province = ($_POST['cu_address_province']);
$sp_address_postalcode = ($_POST['cu_address_postalcode']);
$sp_phone_land = ($_POST['cu_phone_land']);
$sp_newsletter = ($_POST['cu_newsletter']);
echo "<table>";
echo "<tr><td><b>Customer First Name</b><td>$sp_fname</td></tr>"; 
echo "<tr><td><b>Customer Last Name</b><td>$sp_fname</td></tr>"; 
 
echo "<tr><td><b>Customer  Contact Title</b><td>$sp_contacttitle</td></tr>"; 
echo "<tr><td><b>Customer  Email</b><td>$sp_email</td></tr>"; 
echo "<tr><td><b>Customer  Street Number</b><td>$sp_address_streetnum</td></tr>"; 
echo "<tr><td><b>Customer  Street Name</b><td>$sp_address_streetname</td></tr>"; 
echo "<tr><td><b>Customer  Building Number</b><td>$sp_address_buildingnum</td></tr>"; 
echo "<tr><td><b>Customer  Building Name</b><td>$sp_address_buildingname</td></tr>"; 
echo "<tr><td><b>Customer  Suburb</b><td>$sp_address_suburb</td></tr>"; 
echo "<tr><td><b>Customer Province</b><td>$sp_address_province</td></tr>"; 
echo "<tr><td><b>Customer Postal Code</b><td>$sp_address_postalcode</td></tr>"; 
echo "<tr><td><b>Customer Country</b><td>$sp_address_country</td></tr>"; 

echo "<tr><td><b>Customer Phone Land</b><td>$sp_phone_land</td></tr>"; 

echo "<tr><td><b>Customer  Phone Mobile</b><td>$sp_phone_mobile</td></tr>"; 




echo "</table>"; 



$dsp_fname =  base64_encode(mysqli_real_escape_string($conn, $_POST['cu_fname']));
$dsp_lname =  base64_encode(mysqli_real_escape_string($conn, $_POST['cu_lname']));
$cust = mysqli_real_escape_string($conn, $_POST['cust']);
$dsp_contacttitle = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_contact_title']));
$dsp_email = base64_encode($_POST['cu_email']);
$dsp_address_streetnum = mysqli_real_escape_string($conn, $_POST['cu_address_streetnum']);
$dsp_address_streetname = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_streetname']));
$dsp_address_buildingnum = mysqli_real_escape_string($conn, $_POST['cu_address_buildingnum']);
$dsp_address_buildingname = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_buildingname']));
$dsp_address_suburb = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_suburb']));
$dsp_address_town= base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_town']));
$dsp_address_province = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_province']));
$dsp_address_postalcode = base64_encode(mysqli_real_escape_string($conn, $_POST['cu_address_postalcode']));
$dsp_phone_land = base64_encode(numm($_POST['cu_phone_land']));
$dsp_newsletter = mysqli_real_escape_string($conn, $_POST['cu_newsletter']);
$today = date("Y-m-d H:i:s");
$q = "UPDATE cust SET cu_fname = '$dsp_fname',  cu_lname = '$dsp_lname', cu_contact_title = '$dsp_contacttitle', cu_email = '$dsp_email', cu_address_streetnum = '$dsp_address_streetnum', cu_address_streetname = '$dsp_address_streetname', cu_address_buildingnum = '$dsp_address_buildingnum', cu_address_buildingname = '$dsp_address_buildingname', cu_address_suburb = '$dsp_address_suburb', cu_address_town = '$dsp_address_town', cu_address_province = '$dsp_address_province', cu_address_postalcode = '$dsp_address_postalcode', cu_phone_land = '$dsp_phone_land', cu_newsletter = '$dsp_newsletter', cu_dayfirst = '$today' WHERE cu_id = '$cust'";
$result = mysqli_query($conn, $q);


echo "<a href='customerdets.php'> Details Added </a><br />";
} } } else { 
echo "please login or register"; } } else { 
echo " "; } 
?>
<script>
function validateForm()
{
var x=document.forms["rform"]["cu_fname"].value;
if (x==null || x=="")
  {
  alert("Customer name must be filled out");
  return false;
  }  

var xt=document.forms["rform"]["cu_contact_title"].value;
if (xt==null || xt=="")
  {
  alert("Customer  Contact Title must be filled out");
  return false;
  }  
var xtf=document.forms["rform"]["cu_address_streetnum"].value;
if (xtf==null || xtf=="")
  {
  alert("Customer  Streetnumber must be filled out");
  return false;
  }  



var xn=document.forms["rform"]["cu_email"].value;
var atpos=xn.indexOf("@");
var dotpos=xn.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=xn.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
 </script>
<style>
input, textarea { 
    padding: 9px; 
    border: solid 1px #E5E5E5; 
    outline: 0; 
    font: normal 13px/100% Verdana, Tahoma, sans-serif; 
    width: 200px; 
    background: #FFFFFF url('bg_form.png') left top repeat-x; 
    background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #EEEEEE), to(#FFFFFF)); 
    background: -moz-linear-gradient(top, #FFFFFF, #EEEEEE 1px, #FFFFFF 25px); 
    box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
    } 
   

   
input:hover, textarea:hover, 
input:focus, textarea:focus { 
    border-color: #C9C9C9; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px; 
    } 
   
.form label { 
    margin-left: 10px; 
    color: #999999;
margin-right:5px; 
    } 
.re { 
    width: auto; 
    padding: 9px 15px; 
    background: #617798; 
    border: 0; 
    font-size: 20px; 
    color: #FFFFFF; 
    -moz-border-radius: 5px; 
    -webkit-border-radius: 5px; 
margin-left:20px;
    }
   
.submit { 
    width: auto; 
    padding: 9px 15px; 
    background: #617798; 
    border: 0; 
    font-size: 14px; 
    color: #FFFFFF; 
    -moz-border-radius: 5px; 
    -webkit-border-radius: 5px; 
margin-left:20px;
    }
.kk{
  margin: 0;
  padding: 0;
}
.kk li {
  margin: 0;
  padding-bottom: 12px;
padding-left: 50px;
  list-style: none;
color: navy;
  background: url('checkmark2.jpg') no-repeat 0 50%;
} 
.tex {
background:orange;
border: 0px solid navy;
border-radius: 15%;
color: navy;}
.tir{ 
width:140px;
height:30px;
background:#7A96EA;
border: 0px solid #7A96EA;
border-radius: 15%;
color: navy;
font-size: 15px;}
label{font-weight: 60;
font-size: 20px;
color: navy;}</style><style>
h4{font-size:20px;
text-align:center;
color: navy;}
#fcont{width:1000px;
padding:10px;
background:white;}
#fleft{text-align:center;
width:300px;
float:left;
border-left: 2px dotted navy;
margin: 5px;
padding: 5px;
height: 400px;}
#fright{text-align:center;width:300px;
float:left;
border-left: 2px dotted navy;
margin: 5px;
padding: 5px;
height: 400px;}
#fmid{text-align:center;width:300px;float:left;
border-left: 2px dotted navy;
margin: 5px;
padding: 5px;
height: 400px;
}
a {color: #7A96EA;
Text-decoration: none; } </style>