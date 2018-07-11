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
$cu_emailx = $row[cu_email];
$cu_address_streetnum = ($row[cu_address_streetnum]);
$cu_address_streetname = base64_decode($row[cu_address_streetname]);
$cu_address_streetnamex = ($row[cu_address_streetname]);
$cu_address_buildingnum = ($row[cu_address_buildingnum]);
$cu_address_buildingname = base64_decode($row[cu_address_buildingname]);

$cu_address_suburb = base64_decode($row[cu_address_suburb]);
$cu_address_suburbx = ($row[cu_address_suburb]);
$cu_address_town = base64_decode($row[cu_address_town]);

$cu_address_townx = ($row[cu_address_town]);
$cu_address_province = base64_decode($row[cu_address_province]);
$cu_address_provincex = ($row[cu_address_province]);

$cu_address_postalcode = base64_decode($row[cu_address_postalcode]);
$cu_address_postalcodex = ($row[cu_address_postalcode]);
$cu_phone_mobile = ($row[cu_phone_mobile]); 
echo "<div id='ppfull'><center>";
echo "<hr class='featurette-divider'><div class='row featurette'><div class='col-md-7'><h2 class='featurette-heading'>Payment. <span class='text-muted'>Select method.</span></h2></div><p class='lead'><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;' >Order</div><div class='col-sm-4' style='background:black;color:white;font-size:24px;border:silver dotted 2px;text-align:center;'>Delivery details</div><div class='col-sm-4' style='background:gray;color:white;font-size:24px;border:silver dotted 2px;text-align:center;'>Payment</div>";

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
echo "<tr><td><b>Customer Phone Land</b><td>$cu_phone_land</td></tr></table>"; }  

          
          echo "<p>";
          $sql = "SELECT * FROM orders WHERE or_num ='$orid'";
         $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) { 
            $pr[] = $row[or_price] * $row[or_quantity];
               
               echo "Service: " . $row["or_servicetype"] . "<br>";
               echo "Order Number: " . $row["or_num"] . "<br>";
               echo "Quantity: " . $row[or_quantity] . "<br>"; 
               echo "Price: " . $row[or_price] . "<br>"; 
               
               echo "Date: " . $row[or_date] . "<br>"; 
               echo "Time : " . $row[or_time] . "<br>"; 
               echo "<hr>";
               
               
               } } 
               
               $pricex = array_sum($pr);
               $prd = $pricex + 90;
               echo "</p><p>Price R $prd</p>";

      
               
  $pmet = $_POST[pmet];
  echo "<hr class='featurette-divider'><div class='row featurette'><div class='col-md-5'>";
  
  $arr = array('a' , 'c' , 'x' , 'l' , 'y' , 't' , 'h' , 'u' , 'f' , 'r');
$arr1 = array('d' , 'q' , 'w' , 'z' , 'p' , 's' , 'k' , 'g' , 'j' , 'm');
$arr2 = array('a' , 'c' , 'x' , 'l' , 'y' , 't' , 'h' , 'u' , 'f' , 'r');
shuffle($arr);
shuffle($arr1);
shuffle($arr2);

$ref1 = $arr[0] . $arr[3] . $arr1[2] . $arr2[6] . $arr2[1];
$ref2 = $custid . $orid;

$finalref = $ref1 . $ref2;
$na = "MS CS HERN";

$ba = "Capitec";
echo "<hr class='featurette-divider'>

      <div class='row featurette'>
        <div class='col-md-5'>
          <p>";
echo "<h2> Payment Reference Number</h2><br /><h4>$finalref</h4><p>Make a record of this reference which must be used on payment</p>";
echo "<table class='table table-striped'><tr><td>Bank</td><td>$ba</td></tr>
<tr><td>Account</td><td><img src='xx.jpg' width='100px' /></td></tr>
<tr><td>Beneficiary</td><td>$na</td></tr></table></p>";

$day = date("Y-m-d");

$xa = "INSERT INTO paytb(pa_or_num, pa_custid, pa_ref, pa_type, pa_dayfirst, pa_fname, pa_lname, pa_contact_title, pa_email, pa_address_streetnum, pa_address_streetname, pa_address_buildingnum, pa_address_buildingname, pa_address_suburb, pa_address_town, pa_address_province, pa_address_postalcode, pa_phone_land, pa_price, ps_status) VALUES('$orid', '22', '$finalref', '$pmet', '$day', '$cu_fname',  '$cu_lname', '$cu_contact_title', '$cu_emailx', '$cu_address_streetnum', '$cu_address_streetnamex', '$cu_address_buildingnum', '$cu_address_buildingname', '$cu_address_suburbx', '$cu_address_townx', '$cu_address_provincex', '$cu_address_postalcodex', '$cu_phone_landx', '$prd', '1')";
if (mysqli_query($conn, $xa))
  {
  echo "Payment Successfully Allocated";
  }
else
  {
  echo "Error creating table: " . mysqli_error($conn);
  } 
$qm = "UPDATE orders SET or_status = '2' WHERE or_num ='$orid'"; 
if (mysqli_query($conn, $qm))
  {
  echo "<br />Successfully Allocated";
  }
else
  {
  echo "Error creating table: " . mysqli_error($conn);
  } 
  echo "</p></center></div>"; } else { 
  include "footer.php"; 
  
  echo "<a href='login.php'>Please login to complete this process</a>"; } 
  ?>
