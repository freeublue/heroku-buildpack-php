<?
session_start();
include "config.php";
include "lib.php";
include "nav1.php";

if(isset($_SESSION[customer]) ) { 

$customer= $_SESSION[customer];
$usno = base64_encode(numm($customer) );
$sqlc = "SELECT * FROM cust WHERE cu_phone_mobile = '$usno'";
$result = mysqli_query($conn, $sqlc);
while($row = mysqli_fetch_assoc($result) ) { 
$newcustid = $row[cu_id]; 
echo "$newcustid<br />"; } 
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
$ordid = $_POST[orid];
echo "orderid $ordid<br />";
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
echo "<hr class='featurette-divider'>

      <div id='ppfull><center>
          <h2 class='featurette-heading'><span class='text-muted'>Check your delivery details.</span></h2>
          <p><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:float:left;width:33.3%;' >Order</div><div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Delivery details</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Payment</div></p><p>";
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




echo "</table><p></p><hr>"; 



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
$coldate = trim($_POST[collection_date]);
$coltime = trim($_POST[collection_time]);
$sr = "UPDATE orders SET collection_date = '$coldate', collection_time = '$coltime' WHERE or_num = '$ordid'";
if (mysqli_query($conn, $sr))
  {
  echo "Success";
  }
else
  {
  echo "Error updating: " . mysqli_error($conn);
  } 
$today = date("Y-m-d H:i:s");
$q = "UPDATE cust SET cu_fname = '$dsp_fname',  cu_lname = '$dsp_lname', cu_contact_title = '$dsp_contacttitle', cu_email = '$dsp_email', cu_address_streetnum = '$dsp_address_streetnum', cu_address_streetname = '$dsp_address_streetname', cu_address_buildingnum = '$dsp_address_buildingnum', cu_address_buildingname = '$dsp_address_buildingname', cu_address_suburb = '$dsp_address_suburb', cu_address_town = '$dsp_address_town', cu_address_province = '$dsp_address_province', cu_address_postalcode = '$dsp_address_postalcode', cu_phone_land = '$dsp_phone_land', cu_newsletter = '$dsp_newsletter', cu_dayfirst = '$today' WHERE cu_id = '$cust'";
$result = mysqli_query($conn, $q);

echo "</p><hr class='featurette-divider'><p>
          <h2 class='featurette-heading'>Order<span class='text-muted'>Check your order details.</span></h2>
          </p><p>";
          $sql = "SELECT * FROM orders WHERE or_num ='$ordid'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $idd = $row[or_id];
               
               echo "Service: " . $row["or_servicetype"] . "<br>";
               echo "Order Number: " . $row["or_num"] . "<br>";
               echo "Quantity: " . $row[or_quantity] . "<br>"; 
               echo "Price: " . $row[or_price] . "<br>"; 
               echo "Collection time: " . $row[collection_time] . "<br>";
               echo "Collection date: " . $row[collection_date] . "<br>";
               echo "Date: " . $row[or_date] . "<br>"; 
               echo "Time : " . $row[or_time] . "<br>"; 
               echo "<hr>";

              
               
               } } 
               echo "<p><h4>COLLECTION DATE AND TIME</h4><b>0000-00-00 $coldate <br />$coltime</b></p>";
              
  
               


echo "<a href='paymentdets.php?orid=$ordid'> Details Added </a><br /></p></center></div>"; } } 
else { 
echo "<a href='login.php'>You must be logged in to complete this process</a>"; 

include "footer.php"; } 


?>