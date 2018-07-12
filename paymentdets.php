<?
session_start();
include "nav1.php";
$orid = $_REQUEST[orid];
echo "ordernum $orid";
include "lib.php";
include "config.php";
if(isset($_SESSION[customer]) ) { 
$customer= $_SESSION[customer];
$usno = base64_encode(numm($customer) );
$sqlc = "SELECT * FROM cust WHERE cu_phone_mobile = '$usno'";
$result = mysqli_query($conn, $sqlc);
while($row = mysqli_fetch_assoc($result) ) { 
$newcustid = $row[cu_id]; 
echo "$newcustid<br />"; } 

$sql = "SELECT * FROM cust WHERE cu_id = '$newcustid'";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res ) ) { 

$cu_fname = base64_decode($row[cu_fname]);
$cu_lname = base64_decode($row[cu_lname]);
$cu_fname = base64_decode($row[cu_fname]);
$cu_contact_title = base64_decode($row[cu_contact_title]);
$cu_email = base64_decode($row[cu_email]);
$cu_address_streetnum = ($row[cu_address_streetnum]);
$cu_address_streetname = base64_decode($row[cu_address_streetname]);
$cu_address_buildingnum = ($row[cu_address_buildingnum]);
$cu_address_buildingname = base64_decode($row[cu_address_buildingname]);

$cu_address_suburb = base64_decode($row[cu_address_suburb]);
$cu_address_town = base64_decode($row[cu_address_town]);
$cu_address_province = base64_decode($row[cu_address_province]);
$cu_address_postalcode = base64_decode($row[cu_address_postalcode]);
$cu_phone_mobile = ($row[cu_phone_mobile]); 

echo "<hr class='featurette-divider'><div class='row featurette'><div class='col-md-7'><h2 class='featurette-heading'>Payment. <span class='text-muted'>Select method.</span></h2></div><p class='lead'><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;' >Order</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Delivery details</div><div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;float:left;width:33.3%;'>Payment</div><div id='ppfull'><p>";

echo "<table>";
echo "<tr><td><b>Customer First Name</b><td>$cu_fname</td></tr>"; 
echo "<tr><td><b>Customer Last Name</b><td>$cu_lname</td></tr>"; 
 
echo "<tr><td><b>Customer  Contact Title</b><td>$cu_contacttitle</td></tr>"; 
echo "<tr><td><b>Customer  Email</b><td>$cu_email</td></tr>"; 
echo "<tr><td><b>Customer  Street Number</b><td>$cu_address_streetnum</td></tr>"; 
echo "<tr><td><b>Customer  Street Name</b><td>$cu_address_streetname</td></tr>"; 
echo "<tr><td><b>Customer  Building Number</b><td>$cu_address_buildingnum</td></tr>"; 
echo "<tr><td><b>Customer  Building Name</b><td>$cu_address_buildingname</td></tr>"; 
echo "<tr><td><b>Customer  Suburb</b><td>$cu_address_suburb</td></tr>"; 
echo "<tr><td><b>Customer Province</b><td>$cu_address_province</td></tr>"; 
echo "<tr><td><b>Customer Postal Code</b><td>$cu_address_postalcode</td></tr>"; 
echo "<tr><td><b>Customer Phone Land</b><td>$cu_phone_land</td></tr>"; } 
echo "<hr><h2 class='featurette-heading'>Order<span class='text-muted'>Check your order details.</span></h2><p>";
          $sql = "SELECT * FROM orders WHERE or_num ='$ordid'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            
               
               echo "Service: " . $row["or_servicetype"] . "<br>";
               echo "Order Number: " . $row["or_num"] . "<br>";
               echo "Quantity: " . $row[or_quantity] . "<br>"; 
               echo "Price: " . $row[or_price] . "<br>"; 
               
               echo "Date: " . $row[or_date] . "<br>"; 
               echo "Time : " . $row[or_time] . "<br>"; 
               echo "<hr>";
               
               
               } } 
               echo "<p><h4>COLLECTION DATE AND TIME</h4><b>$collection_date $collection_time</b></p>";
               $sqr = "UPDATE orders SET collection_date = '$collection_date', collection_time = '$collection_time'";
               if (mysqli_query($conn, $sqr))
  {
  echo "Order Placed and Collection Successfully Allocated";
  }
else
  {
  echo "Error creating table: " . mysqli_error($conn);
  }


echo "<form action='pfinal.php' method='post'><h4>Select Payment Method</h4><br /><select name='pmet'>
<option value='EFT'>EFT</option>
<option value='CA'>CASH</option></select><br />
<input type='text' name='orid' value='$orid' />
<input type='submit' name='submit' value='Confirm payment method' /></form></p></center></div>"; } else { 
echo "<a href='login.php'>Login to complete this process</a><br />";
include "footer.php"; } 
?>