<?
session_start();
include "nav1.php";
include "config.php";
include "lib.php";
$us = $_SESSION[contractor];
if(isset($_SESSION[contractor]) ) { 
echo"<div class='ppfull'><center><div class='header'>Contractor Page<br />Details Below.</center></div><div class='pp66'><ul style='list-style:none;'><li><a class='buttonsmallx' href='cpage.php'>Dashboard</a></li>
<li><a class='buttonsmallx' href='contdetails.php'>Personal Details</a></li>
<li><a class='buttonsmallx' href='contchangepassword.php'>Password Details</a></li>
<li><a class='buttonsmallx' href='checkin.php'>Check-in</a></li>
<li><a class='buttonsmallx' href='contord1.php'>New orders</a></li>
<li><a class='buttonsmallx' href='contord2.php'>Orders in progress</a></li>
<li><a class='buttonsmallx' href='contord3.php'>Completed Orders</a></li>
<li><a class='buttonsmallx' href='csales.php'>Your earnings</a></li>
<li><a class='buttonsmallx' href='contpay.php'>Request Payout</a></li>
<li><a class='buttonsmallx' href='contlogout.php'>Logout</a></li>
</ul></div><div class='pp55'>";
include "config.php";
if(EMPTY($_POST["cp_name"]) ) { 
echo "Name must be supplied"; } 
elseif(EMPTY($_POST["cp_streetname"]) ) { 
echo "Streetname must be supplied"; } 
elseif(EMPTY($_POST["cp_suburb"]) ) { 
echo "Suburb must be supplied"; } 
elseif(EMPTY($_POST["cp_town"]) ) { 
echo "Town must be supplied"; } 
elseif(EMPTY($_POST["cp_zip"]) ) { 
echo "Posalcode  must be supplied"; } else { 
$cp_name = mysqli_real_escape_string($conn, $_POST[cp_name]);
$cp_altno = cr($stp,mysqli_real_escape_string($conn, $_POST[cp_altno]), $action = "enc");
$cp_streetno = mysqli_real_escape_string($conn, $_POST[cp_streetno]);
$cp_streetname = cr($stp, mysqli_real_escape_string($conn, $_POST[cp_streetname]), $action = "enc");
$cp_buildingno = mysqli_real_escape_string($conn, $_POST[cp_buildingno]);
$cp_buildingname = mysqli_real_escape_string($conn, $_POST[cp_buildingname]);
$cp_suburb = cr($stp, mysqli_real_escape_string($conn, $_POST[cp_suburb]), $action = "enc");
$cp_town = cr($stp, mysqli_real_escape_string($conn, $_POST[cp_town]), $action = "enc");
$cp_state =  mysqli_real_escape_string($conn,$_POST[cp_state]);
$cp_zip = cr($stp, mysqli_real_escape_string($conn,$_POST[cp_zip]), $action = "enc");
echo "Streetno $cp_streetno streetname $cp_streetname buildingno $cp_buildingno buildingname $cp_buildingname suburb $cp_suburb town $cp_town state $cp_state zip $cp_zip";
$cp_desc =  mysqli_real_escape_string($conn,$_POST[cp_desc]);
$id = $_POST[id];
$cp_services_offered1 = $_POST[services];
$cp_services = implode(',', $cp_services_offered1);
echo "services $cp_services</br >";


$sq = "UPDATE copro SET cp_altno = '$cp_altno', cp_streetno = '$cp_streetno', cp_streetname = '$cp_streetname', cp_buildingno = '$cp_buildingno', cp_buildingname = '$cp_buildingname', cp_suburb = '$cp_suburb', cp_town = '$cp_town', cp_state = '$cp_state', cp_zip = '$cp_zip', cp_desc = '$cp_desc', cp_car_reg = '$cp_car_reg', cp_services_offered = '$cp_services' WHERE cp_id = '$id'"; 
 
 if (mysqli_query($conn, $sq))
  {
  echo "Info added successfully";
  }
else
  {
  echo "Error Updating your data: " . mysqli_error($conn); } } } else { 
  echo "<a href='contractorlogin.php'>Login to access this page</a>"; } 