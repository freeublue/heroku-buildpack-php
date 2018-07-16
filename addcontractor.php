<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style>
@import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";


body, input, select, textarea {
		color: #9a9a9a;
		font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;} 
th{
padding:5px;
font-family: Arial Rounded MT Bold,Helvetica Rounded,Arial,sans-serif; 
font-size:40px;
color:white;
Background: navy;
Border: 1px solid navy;
 text-align: center;
border-top-left-radius: 2em 0.5em;
border-top-right-radius: 2em 0.5em;
border-bottom-right-radius: 0em;
border-bottom-left-radius: 0em;}
tr{border-radius:15%;}
td{background: white;
 text-align: center;
color:navy;
border-bottom:1px dotted navy;
border-left: 1px solid navy;
padding:4px;
font-family: Verdana,Geneva,sans-serif; 

}
table{border-radius:15%;
margin-bottom:25px;
border-bottom: 2px solid navy;}
#nav{width:100%;
background-repeat:no-repeat;
height:600px;
background-image: url("banner.jpg");}
a{text-decoration:none;}
.logo{height:30px;
float:right;
margin:2px;
width:100px;
padding:10px;
background:#5385c1;
border-radius:15%;
color:white;}
.buttonsmall{
height:30px;
width:250px;
padding:10px;
background: #5385c1;
color:white;}
h1{color:white;
margin-left:500px;
margin-top:400px;
font-family: 'Lobster', cursive;}
.header{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
color: #5385c1;}
.ppc{float:right;
width:40%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.ppl{float:left;
width:45%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:50px 4px 4px 4px;}
.pp{float:left;
width:30%;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:4px;}
p{color:#5a5a5a;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;}
.medimg1{border:#5385c1 25px solid;
border-radius:40%;
float:right;}
.medimg2{border:#5385c1 25px solid;
border-radius:40%;
float:left;}
.hh{
color:#5a5a5a;
font-style:italic;
font-weight:400;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;
clear:left;
padding:4px;
width:300px;}
</style>

<!DOCTYPE HTML><html><head>
<title>LaundryByMagic</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body><a class='logo' href="index.php">Home</a>
<a class='logo' href="prices.php">Prices</a>
<a class='logo' href="require.php">Require</a>
<a class='logo' href="offer.php">Offer</a><br />
<script>
function validateForm()
{
var x=document.forms["rform"]["co_fname"].value;
if (x==null || x=="")
{
alert("Name must be filled out");
return false;
} 


var xc=document.forms["rform"]["co_lname"].value;
if (xc==null || xc=="")
{
alert("Surname must be supplied");
return false;
} 

var xc1=document.forms["rform"]["co_no"].value;
if (xc1==null || xc1=="")
{
alert("ID must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_mobileno"].value;
if (xc2==null || xc2=="")
{
alert("Mobile number must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_streetno"].value;
if (xc3==null || xc3=="")
{
alert("Street number must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_streetname"].value;
if (xc4==null || xc4=="")
{
alert("Street name must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_suburb"].value;
if (xc5==null || xc5=="")
{
alert("Suburb must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_town"].value;
if (xc6==null || xc6=="")
{
alert("Town must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_state"].value;
if (xc7==null || xc7=="")
{
alert("State must be supplied");
return false;
} 
var xc2=document.forms["rform"]["co_zip"].value;
if (xc8==null || xc8=="")
{
alert("Postal code must be supplied");
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
$fname = "co_fname";
$lname = "co_lname";
$coid = "co_no";
$mobileno = "co_mobileno";
$streetno = "co_streetno";
$streetname = "co_streetname";
$buildingno = "co_buildingno";
$buildingname = "co_buildingname";
$suburb = "co_suburb";
$town = "co_town";
$state = "co_state";
$zip = "co_zip";
$descp = "co_desc";
$coclass = "co_classificationno";
$ema = "co_ema";
$country = "co_country";

if(!isset($_POST[submit])) { 
echo "<h1>Work only when you want to</h1><p>Sign up to be considered as either a driving or laundry partner.</p><h4>As a Driver, if accepted you will partner with us much like a driving partner with On Demand Ride Sharing services like Uber or Taxify(without the passengers).</h4><p>You will be allocated an account with a username and password. when you sign in you will be allocated laundry collection jobs within a 10km radius of your location. Details of the collections in your area will be sent as much a 2 days in advance of collection, but could be within 4hours.</p><p>In most cases you will be collecting between 4-12 loads on each trip of 10-12min driving.</p><p>You will be allocated free printed laundry bags for collection.</p><p>You will be required to print a waybill from our online resource on a home printer, or have them printed by a photocopy shop. You will need a mobile smart phone to scan the waybill at each step of your collection/delivery.</p><p>Each clients collection must be weighed with a weight hook, and the details entered online.</p><p>You deliver to the launderer, and collect once the job is complete(usually one pickup point). fees per collection are between R45-R99 for each load:- usually R400-600 per trip.</p><p>Fees are paid immediately on completion or when you request payment from your account.</p><h4>As a Launderer, if accepted you will partner with us much like a hosting partner with AirBnB(we solict the clients for you and deliver/collet your load to/from your door).</h4><p>You will be allocated work when you sign in to your account and checkin to work.</p>Your details will be shown to clients on our map(within a 10km radius).</p><p>You will be required to weigh the load and enter details online.</p><p>Minimum load is 6Kgs for any type of service, 6Kgs should take 20min to wash. if folding or ironing is required you should be able to complete in 20min while the next load washes.</p><p>Earnings should be between R100-R200 per hour.</p><p>Once ready for collection, you must scan the waybill supplied by the driver to request collection.</p><p>Payment allocated on completion</p><h2>Work begins, if accepted in the month after application.</h2>";
echo "<form action='$_SERVER[PHP_SELF]' name='rform' onsubmit='return validateForm();' method='post'>";
echo "<h2>Complete Contractor Profile.</h2>";
echo "<b>First Name</b></br >";
text($fname);
echo "<br /><b>Surname</b></br >";
text($lname);
echo "<br /><b>Identity Number</b></br >";
text($coid);
echo "<br /><b>Cellphone Number</b></br >";
text($mobileno);
echo "<br /><b>Street Number</b></br >";
text($streetno);
echo "<br /><b>Street Name</b></br >";
text($streetname);
echo "<br /><b>Building Number</b></br >";
text($buildingno);
echo "<br /><b>Building Name</b></br >";
text($buildingname);
echo "<br /><b>Suburb</b></br >";
text($suburb);
echo "<br /><b>Town</b></br >";
text($town);
echo "<br /><b>Province/State</b></br >";
echo "<select name='$state'>";
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
echo "<br /><b>Postal Code</b></br >";
text($zip);
echo "<br /><b>Country</b></br >";
echo "<select name='$country'>";
$zones = timezone_identifiers_list();
        
foreach ($zones as $zone) 
{ 
echo "<option value='$zone'>$zone</option>"; } 
echo "</select>";
echo "<br /><b>Email Address</b></br >";
text($ema);
echo "<br /><b>Select Contractor Type</b></br >";
echo "<select name='co_desc'>";
echo "<option value='driver'>Driving Contractor</option>";
echo "<option value='laundry'>Laundry Contractor</option>";
echo "</select>";
echo "<br /><b>Select Machinery and equipment at your disposal</b></br >";
echo "<input type='checkbox' name='equip[]' value='smart_phone' />Smart Phone or Tablet<br />";

echo "<input type='checkbox' name='equip[]' value='car' />Car<br />";
echo "<input type='checkbox' name='equip[]' value='motorbike' />Motorbike<br />";
echo "<input type='checkbox' name='equip[]' value='scooter' />Scooter<br />";
echo "<input type='checkbox' name='equip[]' value='ldv' />LDV<br />";
echo "<input type='checkbox' name='equip[]' value='washing_machine' />Washing Machine<br />";
echo "<input type='checkbox' name='equip[]' value='tumble_dryer' />Tumble Dryer<br />";
echo "<input type='checkbox' name='equip[]' value='iron' />Hand Iron<br />";
echo "<input type='checkbox' name='equip[]' value='ironing_machine' />Ironing Machine<br />";
echo "<b>Number of Hours per day that you could devote to your business on average.</b><br />";
echo "<select name='hours'>";

foreach(range(1, 16) as $f){ 
echo "<option value='$f'>$f</option>";
} 
echo "</select><br />";
include "Robochkr.php";
echo "<br /><input type='submit' style='background:black;height:50px;color:white;font-size:25px;' name='submit' value='submit' />";
echo "</form>";
} else {
include "config.php";
if(EMPTY($_POST["chkhuman"]) ) { 
echo "please add the Robot checker sum";
} 
elseif($_POST["chk"] != $_POST["chkhuman"]) { 
echo "That is incorrect, please try again"; } 
elseif(EMPTY($_POST["co_fname"]) ) { 
echo "Name must be supplied"; } 
elseif(EMPTY($_POST["co_lname"]) ) { 
echo "Surname must be supplied"; } 
elseif(EMPTY($_POST["co_ema"]) ) { 
echo "Email must be supplied"; } 
elseif(EMPTY($_POST["co_mobileno"]) ) { 
echo "Mobile number supplied"; } 
elseif(strlen($_POST['co_mobileno']) != 10) {
echo "mobile number is not 10 numbers long"; }
 elseif (preg_replace("/[^0-9]/", "", $_POST['co_mobileno']) != $_POST['co_mobileno']) {
            echo "Mobile may be numbers only";
        } 
elseif(EMPTY($_POST["co_no"]) ) { 
echo "ID must be supplied"; } 
 elseif (preg_replace("/[^0-9]/", "", $_POST['co_no']) != $_POST['co_no']) {
            echo "ID may be numbers only";
        } 
elseif(EMPTY($_POST["co_streetno"]) ) { 
echo "Street number must be supplied"; } 
elseif(EMPTY($_POST["co_streetname"]) ) { 
echo "Street Name must be supplied"; } 
elseif(EMPTY($_POST["co_desc"]) ) { 
echo "Type must be supplied"; } 
elseif(EMPTY($_POST["equip"]) ) { 
echo "Equipment must be supplied"; } 
elseif(EMPTY($_POST["co_suburb"]) ) { 
echo "Suburb must be supplied"; } 
else { 
 
$afname = mysqli_real_escape_string($conn, $_POST["co_fname"]);
$alname = mysqli_real_escape_string($conn, $_POST["co_lname"]);
$acoid = cr($stp, mysqli_real_escape_string($conn, $_POST["co_no"]), $action = "enc");

$amobileno = cr($stp, $_POST["co_mobileno"], $action = "enc");
$astreetno = mysqli_real_escape_string($conn, $_POST["co_streetno"]);
$astreetname = cr($stp, mysqli_real_escape_string($conn, $_POST["co_streetname"]), $action = "enc");
$abuildingno = mysqli_real_escape_string($conn, $_POST["co_buildingno"]);
$abuildingname = mysqli_real_escape_string($conn, $_POST["co_buildingname"]);
$asuburb = cr($stp, mysqli_real_escape_string($conn, $_POST["co_suburb"]), $action = "enc");
$atown = mysqli_real_escape_string($conn, $_POST["co_town"]);
$astate = mysqli_real_escape_string($conn, $_POST["co_state"]);
$azip = mysqli_real_escape_string($conn, $_POST["co_zip"]);
$adescp = mysqli_real_escape_string($conn, $_POST["co_desc"]);
$aclass1 = $_POST["equip"];
$country = mysqli_real_escape_string($conn, $_POST["co_country"]);
$ema = cr($stp, mysqli_real_escape_string($conn, $_POST["co_ema"]), $action = "enc");
$aclass = implode(',', $aclass1);
echo "$aclass</br >";
$hours = mysqli_real_escape_string($conn, $_POST["hours"]);
	echo "$hours</ br >";
$dbq = "INSERT INTO contractor(co_fname, co_lname, co_idnumber, co_mobileno, co_streetno, co_streetname, co_buildingno, co_buildingname, co_suburb, co_town, co_state, co_zip, co_desc, co_classificationno, co_hours, co_country, co_ema) VALUES('$afname', '$alname', '$acoid', '$amobileno', '$astreetno', '$astreetname', '$abuildingno', '$abuildingname', '$asuburb', '$atown', '$astate', '$azip', '$adescp', '$aclass', '$hours', '$country', '$ema')";
if (mysqli_query($conn, $dbq))
  {
  echo "Info added successfully we will contact you shortly";
  }
else
  {
  echo "Error Inserting table: " . mysqli_error($conn, $dbq); } 
} 

} 
?>



